<?php

namespace Localization;


use CrowdinApiClient\Crowdin;
use ReflectionClass;
use ReflectionException;

class RequestsCrowdin
{
    public Crowdin $crowdin;
    private array $usernames_translation_priority = [];

    public function __construct()
    {
        $this->crowdin = new Crowdin([
            'access_token' => API_KEY,
        ]);

        $this->usernames_translation_priority[] = 'merelyigor';
        $this->usernames_translation_priority[] = 'tor187';
    }

    /**
     * @throws ReflectionException
     */
    public function GetAllFilesTranslations($projectId): array
    {
        // Отримуємо список файлів з проекту
        $localization_files = $this->crowdin->file->list($projectId);

        // Використовуємо рефлексію для доступу до захищених властивостей
        $reflection = new ReflectionClass($localization_files);
        $property = $reflection->getProperty('_items');
        $property->setAccessible(true);
        $items = $property->getValue($localization_files);

        // Масив для зберігання всіх файлів
        $allFiles = [];

        foreach ($items as $item) {
            $fileReflection = new ReflectionClass($item);
            $dataProperty = $fileReflection->getProperty('data');
            $dataProperty->setAccessible(true);
            $allFiles[] = $dataProperty->getValue($item);
        }

        # для тестування на одному файлі де мало строк перекладів!
        return [
            0=> $allFiles[0]
        ];

        return $allFiles;
    }

    /**
     * @throws ReflectionException
     */
    public function GetAllStringsByFile($projectId, $fileId, $offset = 0): array
    {
        $strings = $this->crowdin->sourceString->list($projectId, [
            'fileId' => intval($fileId),
            'limit' => 500,
            'offset' => $offset,
        ]);
        $all_strings_id_arr = [];

        $i = 0;
        foreach ($strings as $string) {
            $stringId = $string->getId();
            $stringIdentifier = $string->getIdentifier();
            $all_strings_id_arr[$i]['stringId'] = $stringId;
            $all_strings_id_arr[$i]['fileId'] = $fileId;
            $all_strings_id_arr[$i]['stringIdentifier'] = $stringIdentifier;
            $i++;
        }

        return $all_strings_id_arr;
    }

    /**
     * @throws ReflectionException
     */
    public function GetAllStringTranslate($projectId, $stringIdentifier, $stringId, $languageId = 'uk', $offset = 0): array
    {
        $string_translate_arr = [];

        // Отримуємо переклади для кожного рядка
        $translations = $this->crowdin->stringTranslation->list($projectId, [
            'stringId' => intval($stringId),
            'languageId' => $languageId,
            'limit' => 100,
            'offset' => $offset,
        ]);

        $i = 0;
        foreach ($translations as $translation) {
            $reflection = new ReflectionClass($translation);
            $property = $reflection->getProperty('data');
            $property->setAccessible(true);
            $translation_data = $property->getValue($translation);

            $string_translate_arr['stringIdentifier'] = $stringIdentifier;
            $string_translate_arr[$i]['rating'] = $translation_data['rating'];
            $string_translate_arr[$i]['username'] = $translation_data['user']['username'];
            $string_translate_arr[$i]['text'] = $translation_data['text'];
            $i++;
        }

        if (empty($string_translate_arr)) {
            $string_translate_arr = [
                'stringIdentifier' => $stringIdentifier,
                0 => [
                    'rating' => 0,
                    'username' => 'null',
                    'text' => '',
                ]
            ];
        }

        $filteredTranslation = $this->filterTranslations($string_translate_arr, $this->usernames_translation_priority);

        if (!empty($filteredTranslation)) {
            return [
                'stringIdentifier' => $filteredTranslation['stringIdentifier'],
                'text' => ($filteredTranslation['translation']['text']),
            ];
        }
        exit;
    }

    // Функція для фільтрації перекладів
    private function filterTranslations($translationsArr, $usernames_translation_priority): array
    {
        // Зберігаємо stringIdentifier
        $stringIdentifier = $translationsArr['stringIdentifier'];
        unset($translationsArr['stringIdentifier']);

        // Шукаємо переклад від пріоритетного юзера
        foreach ($translationsArr as $translation) {
            if (in_array($translation['username'], $usernames_translation_priority)) {
                return [
                    "stringIdentifier" => $stringIdentifier,
                    "translation" => $translation
                ];
            }
        }

        // Якщо немає пріоритетного юзера, шукаємо переклад з найбільшим рейтингом
        $bestTranslation = null;
        foreach ($translationsArr as $translation) {
            if ($bestTranslation === null || $translation['rating'] > $bestTranslation['rating']) {
                $bestTranslation = $translation;
            }
        }

        return [
            "stringIdentifier" => $stringIdentifier,
            "translation" => $bestTranslation
        ];
    }
}