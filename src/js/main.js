import '../css/style.css';
// # npm run build
// # npm run watch

(function () {
    let allFileStrings = {};
    let mainLocalizationArr = [];
    let fileUrl = null;
    const MAX_CONCURRENT_REQUESTS = 40;
    const downloadLink = document.getElementById('downloadLink');
    const downloadButtonServerWrap = document.querySelector('.download-json-server-wrap');
    const downloadButtonServer = document.querySelector('.download-json-server');
    const localStorageJson = localStorage.getItem('mainLocalizationArr');

    if (localStorageJson && localStorageJson.length > 100) {
        downloadLink.style.display = 'flex';

        // Показуємо дату та час збереження, якщо вони є
        const saveTime = localStorage.getItem('saveTime');
        if (saveTime) {
            document.getElementById('save-info-text').style.display = 'flex';
            displaySaveTime(saveTime);
        }
    }

    document.getElementById('toggleButton').addEventListener('click', function () {
        const textBlock = document.getElementById('textBlock');
        const toggleButton = this;

        if (textBlock.classList.contains('expanded')) {
            textBlock.classList.remove('expanded');
            toggleButton.textContent = 'Показати все';
        } else {
            textBlock.classList.add('expanded');
            toggleButton.textContent = 'Показати менше';
        }
    });

    function displaySaveTime(saveTime) {
        const saveTimeElement = document.getElementById('saveTime');
        document.getElementById('save-info-text').style.display = 'flex';
        if (saveTimeElement) {
            saveTimeElement.textContent = `Файл вже було згенеровано вами раніше, та збережено: ${new Date(saveTime).toLocaleString()}`;
        }
    }

    function showSpinner() {
        const spinnerElement = document.querySelector('.spinner');
        const spinnerContainerElement = document.querySelector('.container-spinner');
        const spinnerContainerElementText = document.querySelector('.container-spinner-text');
        if (spinnerElement) {
            spinnerElement.style.display = 'flex';
            spinnerContainerElement.style.display = 'flex';
            spinnerContainerElementText.style.display = 'flex';
        }
    }

    function hideSpinner() {
        const spinnerElement = document.querySelector('.spinner');
        const spinnerContainerElement = document.querySelector('.container-spinner');
        if (spinnerElement) {
            spinnerElement.style.display = 'none';
            spinnerContainerElement.style.display = 'none';
        }
    }

    function updateTextProcessing(text) {
        const textProcessingElement = document.querySelector('.text-processing');
        if (textProcessingElement) {
            textProcessingElement.innerHTML = text;
        }
    }

    function updateProgressBar(completed, total) {
        const progressBar = document.getElementById('progressBar');
        const progressText = document.getElementById('progressText');
        const percentage = Math.round((completed / total) * 100);
        progressText.style.display = 'flex';

        if (progressBar) {
            progressBar.style.width = `${percentage}%`;
        }
        if (progressText) {
            progressText.textContent = `${percentage}%`;
        }
    }

    async function retryFetch(url, options = {}, retries = 300, delay = 1000) {
        let errorTxt = document.querySelector('.text-processing');
        for (let i = 0; i < retries; i++) {
            try {
                const response = await fetch(url, options);
                if (!response.ok) throw new Error('Fetch error');
                return response;
            } catch (error) {
                console.error(`Fetch error on attempt ${i + 1}: ${error.message}`);
                if (i < retries - 1) {
                    await new Promise(resolve => setTimeout(resolve, delay));
                } else {
                    // Вивід повідомлення про помилку після N спроб
                    console.error('Error: Сервер не може надати відповідь!');
                    console.error('Error: Перевищено максимальну кількість спроб на відповіді від серверу!');
                    updateTextProcessing(`Сервер повернув занадто багато помилкових відповідей 
                    а саме більше ніж ${retries}.
                    <br> Перевищено максимальну кількість спроб на відповіді від серверу!
                    <br> Спробуйте перезавантажити сторінку та повторити генерацію заново.
                    <span class="error">!!!</span>`);
                    errorTxt.style.color = '#ff0000';
                    errorTxt.style.border = '5px solid #ff0000';
                    errorTxt.classList.add('shake-element');
                    throw error;
                }
            }
        }
    }

    function startGeneration() {
        showSpinner();
        updateProgressBar(0, 10);
        document.getElementById('downloadLink').style.display = 'none';
        document.getElementById('save-info-text').style.display = 'none';

        retryFetch('/?start-generation=1')
            .then(response => response.json())
            .then(files => {
                let index = 0;
                const totalFiles = files.length;
                let completedFiles = 0;

                function fetchNextFile() {
                    if (index < files.length) {
                        let file = files[index];
                        processingStringAsFile(file.id, file.name)
                            .then(strings => {
                                allFileStrings[file.name] = strings;
                                index++;
                                completedFiles++;
                                updateProgressBar(completedFiles, totalFiles); // Update progress bar
                                fetchNextFile();
                            })
                            .catch(error => {
                                console.error('Error fetching strings:', error);
                            });
                    } else {
                        processAllFileStrings(allFileStrings, mainLocalizationArr).then(() => {
                            saveJsonFile(mainLocalizationArr);
                        }).catch(error => {
                            console.error('Error processing all file strings:', error);
                        });
                    }
                }

                fetchNextFile();
            })
            .catch(error => {
                console.error('Error fetching files:', error);
            });
    }

    function processingStringAsFile(fileId, fileName, offset = 0, allStrings = []) {
        updateTextProcessing(`Запитую усі ID рядків для файлу ${fileName}`);
        return new Promise((resolve, reject) => {
            retryFetch(`/?getAllStrings=all&fileId=${fileId}&offset=${offset}`)
                .then(response => response.json())
                .then(strings => {
                    if (strings.length === 500) {
                        offset = offset + strings.length;
                        allStrings = allStrings.concat(strings);
                        processingStringAsFile(fileId, fileName, offset, allStrings)
                            .then(resolve)
                            .catch(reject);
                    } else {
                        allStrings = allStrings.concat(strings);
                        resolve(allStrings);
                    }
                })
                .catch(error => {
                    console.error('Error fetching strings:', error);
                    reject(error);
                });
        });
    }

    function processingAllStringsTranslate(fileName, fileId, stringId, stringIdentifier, mainLocalizationArr) {
        return new Promise((resolve, reject) => {
            retryFetch(`/?translate=uk&fileId=${fileId}&stringId=${stringId}&stringIdentifier=${stringIdentifier}`)
                .then(response => response.json())
                .then(translation => {
                    mainLocalizationArr.push({
                        guid: translation.stringIdentifier,
                        text: translation.text
                    });
                    updateTextProcessing(`Обробка перекладу для рядка ${translation.stringIdentifier} <br>
                                                  у файлі ${fileName} <br>
                                                  фраза: ${translation.text}`);
                    resolve();
                })
                .catch(error => {
                    console.error('Error fetching translation:', error);
                    reject(error);
                });
        });
    }

    async function processAllFileStrings(allFileStrings, mainLocalizationArr) {
        const promises = [];
        const totalStrings = Object.values(allFileStrings).reduce((acc, val) => acc + val.length, 0);
        let completedStrings = 0;

        for (let fileName in allFileStrings) {
            if (allFileStrings.hasOwnProperty(fileName)) {
                if (fileName.endsWith('.csv')) {
                    let strings = allFileStrings[fileName];
                    updateTextProcessing(`Обробляємо та зберігаємо усі ID строк для файлу ${fileName}`);

                    for (let string of strings) {
                        promises.push(processingAllStringsTranslate(fileName, string.fileId, string.stringId, string.stringIdentifier, mainLocalizationArr).then(() => {
                            completedStrings++;
                            updateProgressBar(completedStrings, totalStrings); // Update progress bar
                        }));
                        if (promises.length >= MAX_CONCURRENT_REQUESTS) {
                            await Promise.all(promises);
                            promises.length = 0;
                        }
                    }
                }
            }
        }

        if (promises.length > 0) {
            await Promise.all(promises);
        }

        hideSpinner();
    }

    function saveJsonFile(mainLocalizationArr) {
        updateProgressBar(100, 100);

        const jsonObject = {
            codes: [],
            nodes: mainLocalizationArr
        };

        const jsonString = JSON.stringify(jsonObject, null, 2);
        localStorage.setItem('mainLocalizationArr', jsonString); // Зберігаємо JSON в localStorage

        // Зберігаємо дату та час збереження
        const saveTime = new Date().toISOString();
        localStorage.setItem('saveTime', saveTime);

        // Створюємо Blob з JSON
        const blob = new Blob([jsonString], {type: 'application/json'});
        const fileUrl = URL.createObjectURL(blob);

        // Завантажуємо файл локально
        const a = document.createElement('a');
        a.href = fileUrl;
        a.download = 'Ukraine.json';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);

        URL.revokeObjectURL(fileUrl);

        // Відправка JSON на сервер
        uploadJsonToServer(blob);
        check_json_file_exist(downloadButtonServerWrap, saveTime);

        // Після завершення процесу генерації, показуємо посилання на завантаження файлу
        if (downloadLink) {
            let saveTimeTemp = localStorage.getItem('saveTime');
            if (saveTimeTemp) {
                document.getElementById('save-info-text').style.display = 'flex';
                displaySaveTime(saveTimeTemp);
            }
            downloadLink.style.display = 'inline';
            downloadButtonServer.style.display = 'block';
        }
    }

    function downloadJsonFile() {
        let savedJson = localStorage.getItem('mainLocalizationArr');
        if (savedJson) {
            const jsonObject = JSON.parse(savedJson);
            const jsonString = JSON.stringify(jsonObject, null, 2);
            const blob = new Blob([jsonString], {type: 'application/json'});
            const url = window.URL.createObjectURL(blob);

            const a = document.createElement('a');
            a.href = url;
            a.download = 'Ukraine.json';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);

            setTimeout(() => {
                window.URL.revokeObjectURL(url);
            }, 1000);
        }
    }

    function uploadJsonToServer(blob) {
        const formData = new FormData();
        formData.append('file', blob, 'Ukraine.json');

        fetch('/save-json.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                console.log('File successfully uploaded:', data);
            })
            .catch(error => {
                console.error('Error uploading file:', error);
            });
    }

    function check_json_file_exist(downloadButtonServerWrap, saveTime = false) {
        let checkFileUrl = '/check-file.php';

        if (saveTime) {
            downloadButtonServerWrap.querySelector('.txt-time')
                .textContent = `Створено: ${new Date(saveTime).toLocaleString()}`;
            return;
        }

        fetch(checkFileUrl)
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // Якщо файл існує, показуємо кнопку
                    downloadButtonServerWrap.style.display = 'block';
                    // Додаємо дату та час створення файла до тексту кнопки
                    downloadButtonServerWrap.querySelector('.txt-time')
                        .textContent = `Створено: ${data.fileTime}`;
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    // Перевірка наявності json файлу на сервері, та завантаження його по кліку
    (function (downloadButtonServer, downloadButtonServerWrap) {
        // URL для перевірки наявності файлу на сервері
        const checkFileUrl = '/check-file.php';

        // AJAX запит для перевірки наявності файлу
        check_json_file_exist(downloadButtonServerWrap);

        // Обробник події кліку для завантаження файлу
        downloadButtonServer.addEventListener('click', function () {
            fetch(checkFileUrl)
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        // Якщо файл існує, завантажуємо його
                        const downloadLink = document.createElement('a');
                        downloadLink.href = '/json-local/Ukraine.json';
                        downloadLink.download = 'Ukraine.json';
                        document.body.appendChild(downloadLink);
                        downloadLink.click();
                        document.body.removeChild(downloadLink);
                    } else {
                        // Відображаємо повідомлення про відсутність файлу
                        alert('Файл не знайдено на сервері.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    })(downloadButtonServer, downloadButtonServerWrap);


    if (downloadLink) {
        downloadLink.addEventListener('click', function (event) {
            event.preventDefault();
            downloadJsonFile();
        });
    }

    document.getElementById('generateBtn').addEventListener('click', function () {
        startGeneration();
    });
})();