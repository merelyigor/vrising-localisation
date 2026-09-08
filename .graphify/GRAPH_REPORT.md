# Graph Report - .  (2026-09-08)

## Corpus Check
- 365 files · ~122,029 words
- Verdict: corpus is large enough that graph structure adds value.

## Summary
- 3080 nodes · 3093 edges · 316 communities detected
- Extraction: 100% EXTRACTED · 0% INFERRED · 0% AMBIGUOUS
- Token cost: 0 input · 0 output
- Edge kinds: method: 2213 · contains: 505 · calls: 375


## Input Scope
- Requested: tracked
- Resolved: tracked (source: cli)
- Included files: 365 · Candidates: 468
- Excluded: 1 untracked · 7092 ignored · 0 sensitive · 0 missing committed
- Recommendation: Use --scope all or graphify.yaml inputs.corpus for a knowledge-base folder.

## Graph Freshness
- Built from Git commit: `2fa067d`
- Compare this hash to `git rev-parse HEAD` before trusting freshness-sensitive graph output.
## God Nodes (most connected - your core abstractions)
1. `Project` - 96 edges
2. `Uri` - 43 edges
3. `Task` - 39 edges
4. `Utils` - 34 edges
5. `StringComment` - 30 edges
6. `File` - 29 edges
7. `SetCookie` - 27 edges
8. `User` - 26 edges
9. `SourceString` - 26 edges
10. `Webhook` - 24 edges

## Surprising Connections (you probably didn't know these)
- None detected - all connections are within the same source files.

## Communities

### Community 0 - "Community 0"
Cohesion: 0.02
Nodes (1): Project

### Community 1 - "Community 1"
Cohesion: 0.09
Nodes (1): Uri

### Community 2 - "Community 2"
Cohesion: 0.05
Nodes (1): Task

### Community 3 - "Community 3"
Cohesion: 0.06
Nodes (1): Utils

### Community 4 - "Community 4"
Cohesion: 0.06
Nodes (1): StringComment

### Community 5 - "Community 5"
Cohesion: 0.07
Nodes (1): File

### Community 6 - "Community 6"
Cohesion: 0.12
Nodes (1): SetCookie

### Community 7 - "Community 7"
Cohesion: 0.07
Nodes (1): User

### Community 8 - "Community 8"
Cohesion: 0.07
Nodes (1): SourceString

### Community 9 - "Community 9"
Cohesion: 0.08
Nodes (1): Webhook

### Community 10 - "Community 10"
Cohesion: 0.09
Nodes (2): ClassLoader, includeFile()

### Community 11 - "Community 11"
Cohesion: 0.08
Nodes (1): OrganizationWebhook

### Community 12 - "Community 12"
Cohesion: 0.09
Nodes (1): Language

### Community 13 - "Community 13"
Cohesion: 0.14
Nodes (1): StreamHandler

### Community 14 - "Community 14"
Cohesion: 0.09
Nodes (1): FnStream

### Community 15 - "Community 15"
Cohesion: 0.11
Nodes (1): ServerRequest

### Community 16 - "Community 16"
Cohesion: 0.15
Nodes (1): AbstractApi

### Community 17 - "Community 17"
Cohesion: 0.13
Nodes (7): createStream(), __get(), getContents(), isSeekable(), rewind(), seek(), __toString()

### Community 18 - "Community 18"
Cohesion: 0.11
Nodes (1): BundleExport

### Community 19 - "Community 19"
Cohesion: 0.11
Nodes (1): Directory

### Community 20 - "Community 20"
Cohesion: 0.11
Nodes (1): GlossaryExport

### Community 21 - "Community 21"
Cohesion: 0.11
Nodes (1): PreTranslation

### Community 22 - "Community 22"
Cohesion: 0.11
Nodes (1): Report

### Community 23 - "Community 23"
Cohesion: 0.11
Nodes (1): TranslationMemoryExport

### Community 24 - "Community 24"
Cohesion: 0.11
Nodes (1): TranslationMemoryImport

### Community 25 - "Community 25"
Cohesion: 0.16
Nodes (1): AppendStream

### Community 26 - "Community 26"
Cohesion: 0.14
Nodes (1): PumpStream

### Community 27 - "Community 27"
Cohesion: 0.15
Nodes (1): Stream

### Community 28 - "Community 28"
Cohesion: 0.11
Nodes (1): GlossaryApi

### Community 29 - "Community 29"
Cohesion: 0.14
Nodes (1): Crowdin

### Community 30 - "Community 30"
Cohesion: 0.11
Nodes (1): CrowdinTest

### Community 31 - "Community 31"
Cohesion: 0.17
Nodes (1): CurlFactory

### Community 32 - "Community 32"
Cohesion: 0.11
Nodes (1): Bundle

### Community 33 - "Community 33"
Cohesion: 0.13
Nodes (1): BufferStream

### Community 34 - "Community 34"
Cohesion: 0.12
Nodes (1): StringTranslationApi

### Community 35 - "Community 35"
Cohesion: 0.12
Nodes (1): Distribution

### Community 36 - "Community 36"
Cohesion: 0.12
Nodes (1): StringTranslationApproval

### Community 37 - "Community 37"
Cohesion: 0.12
Nodes (1): TranslationProjectDirectory

### Community 38 - "Community 38"
Cohesion: 0.16
Nodes (1): HandlerStack

### Community 39 - "Community 39"
Cohesion: 0.18
Nodes (9): assertHeader(), assertValue(), getHeader(), getHeaderLine(), normalizeHeaderValue(), setHeaders(), trimAndValidateHeaderValues(), withAddedHeader() (+1 more)

### Community 41 - "Community 41"
Cohesion: 0.18
Nodes (1): CookieJar

### Community 42 - "Community 42"
Cohesion: 0.13
Nodes (1): Group

### Community 43 - "Community 43"
Cohesion: 0.13
Nodes (1): StringTranslationApiTest

### Community 44 - "Community 44"
Cohesion: 0.13
Nodes (1): Group

### Community 45 - "Community 45"
Cohesion: 0.13
Nodes (1): Term

### Community 46 - "Community 46"
Cohesion: 0.25
Nodes (1): Client

### Community 48 - "Community 48"
Cohesion: 0.13
Nodes (1): GlossaryApiTest

### Community 49 - "Community 49"
Cohesion: 0.13
Nodes (1): ScreenshotApi

### Community 50 - "Community 50"
Cohesion: 0.13
Nodes (1): TaskApi

### Community 51 - "Community 51"
Cohesion: 0.13
Nodes (1): ProjectTeamMemberResource

### Community 52 - "Community 52"
Cohesion: 0.13
Nodes (1): TeamMember

### Community 53 - "Community 53"
Cohesion: 0.25
Nodes (13): check_json_file_exist(), displaySaveTime(), hideSpinner(), processAllFileStrings(), processingAllStringsTranslate(), processingStringAsFile(), retryFetch(), saveJsonFile() (+5 more)

### Community 54 - "Community 54"
Cohesion: 0.13
Nodes (1): Branch

### Community 55 - "Community 55"
Cohesion: 0.13
Nodes (1): StringTranslation

### Community 56 - "Community 56"
Cohesion: 0.25
Nodes (14): delete(), deleteAsync(), get(), getAsync(), head(), headAsync(), patch(), patchAsync() (+6 more)

### Community 57 - "Community 57"
Cohesion: 0.26
Nodes (1): Promise

### Community 58 - "Community 58"
Cohesion: 0.21
Nodes (1): UploadedFile

### Community 59 - "Community 59"
Cohesion: 0.14
Nodes (1): Issue

### Community 60 - "Community 60"
Cohesion: 0.24
Nodes (1): Coroutine

### Community 62 - "Community 62"
Cohesion: 0.14
Nodes (1): StreamWrapper

### Community 63 - "Community 63"
Cohesion: 0.15
Nodes (1): FileApi

### Community 64 - "Community 64"
Cohesion: 0.15
Nodes (1): ScreenshotApiTest

### Community 65 - "Community 65"
Cohesion: 0.15
Nodes (1): TaskApiTest

### Community 66 - "Community 66"
Cohesion: 0.15
Nodes (1): TranslationApi

### Community 67 - "Community 67"
Cohesion: 0.15
Nodes (1): TranslationMemoryApi

### Community 68 - "Community 68"
Cohesion: 0.26
Nodes (1): CurlHttpClient

### Community 69 - "Community 69"
Cohesion: 0.15
Nodes (1): ReviewedSourceFileBuild

### Community 70 - "Community 70"
Cohesion: 0.15
Nodes (1): Team

### Community 71 - "Community 71"
Cohesion: 0.15
Nodes (1): UserApi

### Community 72 - "Community 72"
Cohesion: 0.15
Nodes (1): UserApiTest

### Community 73 - "Community 73"
Cohesion: 0.15
Nodes (1): WorkflowStep

### Community 74 - "Community 74"
Cohesion: 0.15
Nodes (1): DistributionRelease

### Community 75 - "Community 75"
Cohesion: 0.15
Nodes (1): LanguageTranslation

### Community 76 - "Community 76"
Cohesion: 0.15
Nodes (1): Screenshot

### Community 77 - "Community 77"
Cohesion: 0.15
Nodes (1): TaskForUpdate

### Community 78 - "Community 78"
Cohesion: 0.15
Nodes (1): TranslationMemory

### Community 79 - "Community 79"
Cohesion: 0.15
Nodes (1): TranslationProjectBuild

### Community 80 - "Community 80"
Cohesion: 0.15
Nodes (1): Vote

### Community 81 - "Community 81"
Cohesion: 0.17
Nodes (1): FileApiTest

### Community 82 - "Community 82"
Cohesion: 0.17
Nodes (1): TranslationApiTest

### Community 83 - "Community 83"
Cohesion: 0.17
Nodes (1): TranslationMemoryApiTest

### Community 84 - "Community 84"
Cohesion: 0.17
Nodes (1): TranslationApiTest

### Community 85 - "Community 85"
Cohesion: 0.24
Nodes (1): CurlMultiHandler

### Community 86 - "Community 86"
Cohesion: 0.17
Nodes (1): Glossary

### Community 87 - "Community 87"
Cohesion: 0.17
Nodes (1): MachineTranslationEngine

### Community 88 - "Community 88"
Cohesion: 0.17
Nodes (1): User

### Community 90 - "Community 90"
Cohesion: 0.17
Nodes (1): Middleware

### Community 91 - "Community 91"
Cohesion: 0.18
Nodes (1): BundleApi

### Community 92 - "Community 92"
Cohesion: 0.18
Nodes (1): BundleApiTest

### Community 93 - "Community 93"
Cohesion: 0.18
Nodes (1): Collection

### Community 94 - "Community 94"
Cohesion: 0.18
Nodes (1): ProjectTeam

### Community 95 - "Community 95"
Cohesion: 0.18
Nodes (1): Vendor

### Community 96 - "Community 96"
Cohesion: 0.22
Nodes (1): MockHandler

### Community 97 - "Community 97"
Cohesion: 0.18
Nodes (1): FileRevision

### Community 98 - "Community 98"
Cohesion: 0.18
Nodes (1): GlossaryImport

### Community 99 - "Community 99"
Cohesion: 0.18
Nodes (1): MachineTranslation

### Community 100 - "Community 100"
Cohesion: 0.18
Nodes (1): QaCheck

### Community 101 - "Community 101"
Cohesion: 0.18
Nodes (1): StringsExporterSetting

### Community 102 - "Community 102"
Cohesion: 0.29
Nodes (1): CachingStream

### Community 104 - "Community 104"
Cohesion: 0.25
Nodes (1): Request

### Community 105 - "Community 105"
Cohesion: 0.18
Nodes (1): TransferStats

### Community 106 - "Community 106"
Cohesion: 0.22
Nodes (1): StringTranslationApiTest

### Community 107 - "Community 107"
Cohesion: 0.20
Nodes (1): RequestException

### Community 108 - "Community 108"
Cohesion: 0.20
Nodes (1): Tag

### Community 109 - "Community 109"
Cohesion: 0.20
Nodes (1): TaskSettingsTemplate

### Community 110 - "Community 110"
Cohesion: 0.40
Nodes (1): EachPromise

### Community 111 - "Community 111"
Cohesion: 0.27
Nodes (1): FulfilledPromise

### Community 112 - "Community 112"
Cohesion: 0.20
Nodes (1): HttpFactory

### Community 113 - "Community 113"
Cohesion: 0.36
Nodes (1): LimitStream

### Community 114 - "Community 114"
Cohesion: 0.29
Nodes (1): MultipartStream

### Community 115 - "Community 115"
Cohesion: 0.27
Nodes (1): RejectedPromise

### Community 116 - "Community 116"
Cohesion: 0.22
Nodes (1): DistributionApi

### Community 117 - "Community 117"
Cohesion: 0.22
Nodes (1): LabelApi

### Community 118 - "Community 118"
Cohesion: 0.22
Nodes (1): ProjectTeamMemberAddedStatistics

### Community 119 - "Community 119"
Cohesion: 0.22
Nodes (1): ProgressLanguage

### Community 120 - "Community 120"
Cohesion: 0.22
Nodes (1): Message

### Community 121 - "Community 121"
Cohesion: 0.33
Nodes (1): RedirectMiddleware

### Community 122 - "Community 122"
Cohesion: 0.39
Nodes (1): AbstractTestApi

### Community 123 - "Community 123"
Cohesion: 0.25
Nodes (1): DistributionApiTest

### Community 124 - "Community 124"
Cohesion: 0.25
Nodes (1): LabelApiTest

### Community 125 - "Community 125"
Cohesion: 0.25
Nodes (1): TranslationStatusApi

### Community 126 - "Community 126"
Cohesion: 0.25
Nodes (1): TranslationStatusApiTest

### Community 127 - "Community 127"
Cohesion: 0.29
Nodes (1): CollectionIterator

### Community 128 - "Community 128"
Cohesion: 0.25
Nodes (1): GlossaryApiTest

### Community 129 - "Community 129"
Cohesion: 0.25
Nodes (1): GroupApi

### Community 130 - "Community 130"
Cohesion: 0.25
Nodes (1): TeamApi

### Community 131 - "Community 131"
Cohesion: 0.25
Nodes (1): WorkflowTemplate

### Community 132 - "Community 132"
Cohesion: 0.25
Nodes (1): CurlHttpClientTest

### Community 133 - "Community 133"
Cohesion: 0.25
Nodes (1): Progress

### Community 135 - "Community 135"
Cohesion: 0.36
Nodes (1): Response

### Community 136 - "Community 136"
Cohesion: 0.39
Nodes (1): RetryMiddleware

### Community 137 - "Community 137"
Cohesion: 0.29
Nodes (1): BranchApi

### Community 138 - "Community 138"
Cohesion: 0.29
Nodes (1): BranchApiTest

### Community 139 - "Community 139"
Cohesion: 0.29
Nodes (1): DirectoryApi

### Community 140 - "Community 140"
Cohesion: 0.29
Nodes (1): LanguageApi

### Community 141 - "Community 141"
Cohesion: 0.29
Nodes (1): OrganizationWebhookApi

### Community 142 - "Community 142"
Cohesion: 0.29
Nodes (1): ProjectApi

### Community 143 - "Community 143"
Cohesion: 0.29
Nodes (1): SourceStringApi

### Community 144 - "Community 144"
Cohesion: 0.29
Nodes (1): StringCommentApi

### Community 145 - "Community 145"
Cohesion: 0.29
Nodes (1): StringsExporterSettingApi

### Community 146 - "Community 146"
Cohesion: 0.29
Nodes (1): StringsExporterSettingApiTest

### Community 147 - "Community 147"
Cohesion: 0.29
Nodes (1): WebhookApi

### Community 149 - "Community 149"
Cohesion: 0.33
Nodes (1): RequestsCrowdin

### Community 150 - "Community 150"
Cohesion: 0.43
Nodes (1): AbstractTestApi

### Community 151 - "Community 151"
Cohesion: 0.29
Nodes (1): AddedProjectTeamInfo

### Community 152 - "Community 152"
Cohesion: 0.29
Nodes (1): AddedTeamMembers

### Community 153 - "Community 153"
Cohesion: 0.29
Nodes (1): GroupApiTest

### Community 154 - "Community 154"
Cohesion: 0.29
Nodes (1): ProjectApiTest

### Community 155 - "Community 155"
Cohesion: 0.29
Nodes (1): TeamApiTest

### Community 156 - "Community 156"
Cohesion: 0.29
Nodes (1): ExceptionsTest

### Community 157 - "Community 157"
Cohesion: 0.29
Nodes (1): DownloadFile

### Community 158 - "Community 158"
Cohesion: 0.29
Nodes (1): DownloadFilePreview

### Community 159 - "Community 159"
Cohesion: 0.29
Nodes (1): Label

### Community 162 - "Community 162"
Cohesion: 0.33
Nodes (1): TaskQueue

### Community 164 - "Community 164"
Cohesion: 0.29
Nodes (1): UriNormalizer

### Community 165 - "Community 165"
Cohesion: 0.29
Nodes (1): UriResolver

### Community 166 - "Community 166"
Cohesion: 0.29
Nodes (1): MimetypesTest

### Community 167 - "Community 167"
Cohesion: 0.33
Nodes (1): DirectoryApiTest

### Community 168 - "Community 168"
Cohesion: 0.33
Nodes (1): LanguageApiTest

### Community 169 - "Community 169"
Cohesion: 0.33
Nodes (1): OrganizationWebhookApiTest

### Community 170 - "Community 170"
Cohesion: 0.33
Nodes (1): ProjectApiTest

### Community 171 - "Community 171"
Cohesion: 0.33
Nodes (1): SourceStringApiTest

### Community 172 - "Community 172"
Cohesion: 0.33
Nodes (1): StorageApi

### Community 173 - "Community 173"
Cohesion: 0.33
Nodes (1): StorageApiTest

### Community 174 - "Community 174"
Cohesion: 0.33
Nodes (1): StringCommentApiTest

### Community 175 - "Community 175"
Cohesion: 0.33
Nodes (1): WebhookApiTest

### Community 176 - "Community 176"
Cohesion: 0.47
Nodes (1): FileCookieJar

### Community 177 - "Community 177"
Cohesion: 0.47
Nodes (1): SessionCookieJar

### Community 178 - "Community 178"
Cohesion: 0.33
Nodes (1): FileApi

### Community 179 - "Community 179"
Cohesion: 0.33
Nodes (1): FileApiTest

### Community 180 - "Community 180"
Cohesion: 0.33
Nodes (1): TaskApiTest

### Community 181 - "Community 181"
Cohesion: 0.33
Nodes (1): TeamMemberApi

### Community 182 - "Community 182"
Cohesion: 0.33
Nodes (1): TeamMemberApiTest

### Community 183 - "Community 183"
Cohesion: 0.33
Nodes (1): BaseModel

### Community 184 - "Community 184"
Cohesion: 0.40
Nodes (1): BranchTest

### Community 185 - "Community 185"
Cohesion: 0.47
Nodes (1): StringsExporterSettingTest

### Community 186 - "Community 186"
Cohesion: 0.33
Nodes (1): Create

### Community 187 - "Community 187"
Cohesion: 0.33
Nodes (1): Is

### Community 188 - "Community 188"
Cohesion: 0.40
Nodes (1): Pool

### Community 189 - "Community 189"
Cohesion: 0.40
Nodes (1): MachineTranslationEngineApi

### Community 190 - "Community 190"
Cohesion: 0.40
Nodes (1): MachineTranslationEngineApiTest

### Community 191 - "Community 191"
Cohesion: 0.40
Nodes (1): ReportApi

### Community 192 - "Community 192"
Cohesion: 0.40
Nodes (1): ReportApiTest

### Community 193 - "Community 193"
Cohesion: 0.40
Nodes (1): UserApi

### Community 194 - "Community 194"
Cohesion: 0.40
Nodes (1): UserApiTest

### Community 195 - "Community 195"
Cohesion: 0.40
Nodes (1): GuzzleHttpClient

### Community 196 - "Community 196"
Cohesion: 0.50
Nodes (2): ComposerAutoloaderInit3eae54d6eea1c0a1783596325fe08e8d, composerRequire3eae54d6eea1c0a1783596325fe08e8d()

### Community 197 - "Community 197"
Cohesion: 0.50
Nodes (1): AddedProjectTeamInfoTest

### Community 198 - "Community 198"
Cohesion: 0.50
Nodes (1): AddedTeamMembersTest

### Community 199 - "Community 199"
Cohesion: 0.50
Nodes (1): GroupTest

### Community 200 - "Community 200"
Cohesion: 0.40
Nodes (1): MachineTranslationEngineApi

### Community 201 - "Community 201"
Cohesion: 0.40
Nodes (1): MachineTranslationEngineApiTest

### Community 202 - "Community 202"
Cohesion: 0.50
Nodes (1): ProjectTeamMemberAddedStatisticsTest

### Community 203 - "Community 203"
Cohesion: 0.50
Nodes (1): ProjectTeamMemberResourceTest

### Community 204 - "Community 204"
Cohesion: 0.50
Nodes (1): ProjectTeamTest

### Community 205 - "Community 205"
Cohesion: 0.50
Nodes (1): TeamMemberTest

### Community 206 - "Community 206"
Cohesion: 0.50
Nodes (1): TeamTest

### Community 207 - "Community 207"
Cohesion: 0.60
Nodes (1): UserTest

### Community 208 - "Community 208"
Cohesion: 0.60
Nodes (1): VendorTest

### Community 209 - "Community 209"
Cohesion: 0.40
Nodes (1): BadResponseException

### Community 210 - "Community 210"
Cohesion: 0.40
Nodes (1): ConnectException

### Community 211 - "Community 211"
Cohesion: 0.40
Nodes (1): ResponseDecoratorTest

### Community 212 - "Community 212"
Cohesion: 0.40
Nodes (1): ResponseErrorHandlerTest

### Community 213 - "Community 213"
Cohesion: 0.40
Nodes (1): CrowdinServiceProvider

### Community 214 - "Community 214"
Cohesion: 0.50
Nodes (1): BundleTest

### Community 215 - "Community 215"
Cohesion: 0.50
Nodes (1): DirectoryTest

### Community 216 - "Community 216"
Cohesion: 0.50
Nodes (1): DistributionReleaseTest

### Community 217 - "Community 217"
Cohesion: 0.50
Nodes (1): DistributionTest

### Community 218 - "Community 218"
Cohesion: 0.60
Nodes (1): DownloadFilePreviewTest

### Community 219 - "Community 219"
Cohesion: 0.60
Nodes (1): DownloadFileTest

### Community 220 - "Community 220"
Cohesion: 0.40
Nodes (1): DownloadFileTranslation

### Community 221 - "Community 221"
Cohesion: 0.60
Nodes (1): DownloadFileTranslationTest

### Community 222 - "Community 222"
Cohesion: 0.50
Nodes (1): FileTest

### Community 223 - "Community 223"
Cohesion: 0.60
Nodes (1): GlossaryExportTest

### Community 224 - "Community 224"
Cohesion: 0.50
Nodes (1): GlossaryTest

### Community 225 - "Community 225"
Cohesion: 0.50
Nodes (1): GroupTest

### Community 226 - "Community 226"
Cohesion: 0.50
Nodes (1): LabelTest

### Community 227 - "Community 227"
Cohesion: 0.50
Nodes (1): LanguageTest

### Community 228 - "Community 228"
Cohesion: 0.50
Nodes (1): MachineTranslationEngineTest

### Community 229 - "Community 229"
Cohesion: 0.50
Nodes (1): MachineTranslationTest

### Community 230 - "Community 230"
Cohesion: 0.50
Nodes (1): OrganizationWebhookTest

### Community 231 - "Community 231"
Cohesion: 0.60
Nodes (1): PreTranslationTest

### Community 232 - "Community 232"
Cohesion: 0.40
Nodes (1): ProgressFile

### Community 233 - "Community 233"
Cohesion: 0.50
Nodes (1): ProjectTest

### Community 234 - "Community 234"
Cohesion: 0.60
Nodes (1): ReportTest

### Community 235 - "Community 235"
Cohesion: 0.50
Nodes (1): ScreenshotTest

### Community 236 - "Community 236"
Cohesion: 0.50
Nodes (1): SourceStringTest

### Community 237 - "Community 237"
Cohesion: 0.40
Nodes (1): Storage

### Community 238 - "Community 238"
Cohesion: 0.50
Nodes (1): StringCommentTest

### Community 239 - "Community 239"
Cohesion: 0.60
Nodes (1): StringTranslationApprovalTest

### Community 240 - "Community 240"
Cohesion: 0.50
Nodes (1): TagTest

### Community 241 - "Community 241"
Cohesion: 0.50
Nodes (1): TaskForUpdateTest

### Community 242 - "Community 242"
Cohesion: 0.50
Nodes (1): TaskSettingsTemplateTest

### Community 243 - "Community 243"
Cohesion: 0.50
Nodes (1): TaskTest

### Community 244 - "Community 244"
Cohesion: 0.50
Nodes (1): TermTest

### Community 245 - "Community 245"
Cohesion: 0.60
Nodes (1): TranslationMemoryExportTest

### Community 246 - "Community 246"
Cohesion: 0.60
Nodes (1): TranslationMemoryImportTest

### Community 247 - "Community 247"
Cohesion: 0.50
Nodes (1): TranslationMemoryTest

### Community 248 - "Community 248"
Cohesion: 0.60
Nodes (1): TranslationProjectBuildTest

### Community 249 - "Community 249"
Cohesion: 0.60
Nodes (1): VoteTest

### Community 250 - "Community 250"
Cohesion: 0.50
Nodes (1): WebhookTest

### Community 251 - "Community 251"
Cohesion: 0.40
Nodes (1): Each

### Community 252 - "Community 252"
Cohesion: 0.40
Nodes (1): Header

### Community 253 - "Community 253"
Cohesion: 0.50
Nodes (1): MessageFormatter

### Community 254 - "Community 254"
Cohesion: 0.50
Nodes (1): PrepareBodyMiddleware

### Community 255 - "Community 255"
Cohesion: 0.40
Nodes (1): UriComparator

### Community 256 - "Community 256"
Cohesion: 0.50
Nodes (1): Mimetypes

### Community 257 - "Community 257"
Cohesion: 0.40
Nodes (4): CssMinimizerPlugin, MiniCssExtractPlugin, path, TerserPlugin

### Community 258 - "Community 258"
Cohesion: 0.50
Nodes (1): IssueApi

### Community 259 - "Community 259"
Cohesion: 0.50
Nodes (1): IssueApiTest

### Community 260 - "Community 260"
Cohesion: 0.50
Nodes (1): NotificationApi

### Community 261 - "Community 261"
Cohesion: 0.50
Nodes (1): NotificationApiTest

### Community 263 - "Community 263"
Cohesion: 0.50
Nodes (1): CollectionTest

### Community 264 - "Community 264"
Cohesion: 0.50
Nodes (1): ModelCollection

### Community 265 - "Community 265"
Cohesion: 0.50
Nodes (1): WorkflowStepApi

### Community 266 - "Community 266"
Cohesion: 0.50
Nodes (1): WorkflowStepApiTest

### Community 267 - "Community 267"
Cohesion: 0.50
Nodes (1): WorkflowTemplateApi

### Community 268 - "Community 268"
Cohesion: 0.50
Nodes (1): WorkflowTemplateApiTest

### Community 269 - "Community 269"
Cohesion: 0.50
Nodes (1): ApiValidationException

### Community 270 - "Community 270"
Cohesion: 0.50
Nodes (1): CurlHandler

### Community 271 - "Community 271"
Cohesion: 0.50
Nodes (1): EasyHandle

### Community 272 - "Community 272"
Cohesion: 0.50
Nodes (1): Proxy

### Community 273 - "Community 273"
Cohesion: 0.50
Nodes (1): CrowdinHttpClientFactoryTest

### Community 274 - "Community 274"
Cohesion: 0.50
Nodes (1): GuzzleHttpClientTest

### Community 275 - "Community 275"
Cohesion: 0.50
Nodes (1): ResponseErrorHandlerFactoryTest

### Community 276 - "Community 276"
Cohesion: 0.67
Nodes (1): GlossaryImportImportTest

### Community 277 - "Community 277"
Cohesion: 0.67
Nodes (1): ProgressFileTest

### Community 278 - "Community 278"
Cohesion: 0.67
Nodes (1): ProgressLanguageTest

### Community 279 - "Community 279"
Cohesion: 0.67
Nodes (1): ProgressTest

### Community 280 - "Community 280"
Cohesion: 0.50
Nodes (1): StorageTest

### Community 281 - "Community 281"
Cohesion: 0.67
Nodes (1): StringTranslationTest

### Community 282 - "Community 282"
Cohesion: 0.67
Nodes (1): UserTest

### Community 283 - "Community 283"
Cohesion: 0.50
Nodes (1): ResponseModelDecorator

### Community 284 - "Community 284"
Cohesion: 0.50
Nodes (1): ResponseModelListDecorator

### Community 285 - "Community 285"
Cohesion: 0.50
Nodes (1): BodySummarizer

### Community 286 - "Community 286"
Cohesion: 0.50
Nodes (1): DroppingStream

### Community 287 - "Community 287"
Cohesion: 0.50
Nodes (1): LazyOpenStream

### Community 288 - "Community 288"
Cohesion: 0.50
Nodes (1): MimeType

### Community 289 - "Community 289"
Cohesion: 0.50
Nodes (1): NoSeekStream

### Community 290 - "Community 290"
Cohesion: 0.50
Nodes (1): Query

### Community 291 - "Community 291"
Cohesion: 0.50
Nodes (1): RejectionException

### Community 295 - "Community 295"
Cohesion: 0.67
Nodes (1): CrowdinHttpClientFactory

### Community 296 - "Community 296"
Cohesion: 0.67
Nodes (1): ComposerStaticInit3eae54d6eea1c0a1783596325fe08e8d

### Community 297 - "Community 297"
Cohesion: 0.67
Nodes (1): CollectionIteratorTest

### Community 298 - "Community 298"
Cohesion: 0.67
Nodes (1): ModelCollectionTest

### Community 299 - "Community 299"
Cohesion: 0.67
Nodes (1): NotificationApi

### Community 300 - "Community 300"
Cohesion: 0.67
Nodes (1): NotificationApiTest

### Community 301 - "Community 301"
Cohesion: 0.67
Nodes (1): ReportApi

### Community 302 - "Community 302"
Cohesion: 0.67
Nodes (1): ReportApiTest

### Community 303 - "Community 303"
Cohesion: 0.67
Nodes (1): VendorApi

### Community 304 - "Community 304"
Cohesion: 0.67
Nodes (1): VendorApiTest

### Community 305 - "Community 305"
Cohesion: 0.67
Nodes (1): WorkflowStepTest

### Community 306 - "Community 306"
Cohesion: 0.67
Nodes (1): WorkflowTemplateTest

### Community 308 - "Community 308"
Cohesion: 0.67
Nodes (1): HeaderProcessor

### Community 309 - "Community 309"
Cohesion: 0.67
Nodes (1): ResponseErrorHandlerFactory

### Community 310 - "Community 310"
Cohesion: 0.67
Nodes (1): ResponseErrorHandler

### Community 311 - "Community 311"
Cohesion: 0.67
Nodes (1): CrowdinFacade

### Community 312 - "Community 312"
Cohesion: 0.67
Nodes (1): FileRevisionTest

### Community 313 - "Community 313"
Cohesion: 0.67
Nodes (1): IssueTest

### Community 314 - "Community 314"
Cohesion: 0.67
Nodes (1): QaCheckTest

### Community 315 - "Community 315"
Cohesion: 0.67
Nodes (1): ResponseArrayDecorator

### Community 316 - "Community 316"
Cohesion: 0.67
Nodes (1): AggregateException

### Community 317 - "Community 317"
Cohesion: 0.67
Nodes (1): InflateStream

### Community 320 - "Community 320"
Cohesion: 1.00
Nodes (1): ClientException

### Community 321 - "Community 321"
Cohesion: 1.00
Nodes (1): InvalidArgumentException

### Community 322 - "Community 322"
Cohesion: 1.00
Nodes (1): MalformedUriException

### Community 323 - "Community 323"
Cohesion: 1.00
Nodes (1): ServerException

### Community 324 - "Community 324"
Cohesion: 1.00
Nodes (1): TooManyRedirectsException

### Community 325 - "Community 325"
Cohesion: 1.00
Nodes (1): TransferException

### Community 326 - "Community 326"
Cohesion: 1.00
Nodes (1): ApiException

### Community 327 - "Community 327"
Cohesion: 1.00
Nodes (1): CrowdinClientException

### Community 328 - "Community 328"
Cohesion: 1.00
Nodes (1): CrowdinException

### Community 329 - "Community 329"
Cohesion: 1.00
Nodes (1): HttpException

### Community 333 - "Community 333"
Cohesion: 1.00
Nodes (1): CancellationException

### Community 340 - "Community 340"
Cohesion: 1.00
Nodes (1): RequestOptions

### Community 342 - "Community 342"
Cohesion: 1.00
Nodes (1): Rfc7230

## Knowledge Gaps
- **17 isolated node(s):** `ApiException`, `CrowdinClientException`, `CrowdinException`, `HttpException`, `ClientException` (+12 more)
  These have ≤1 connection - possible missing edges or undocumented components.
- **Thin community `Community 0`** (1 nodes): `Project`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 1`** (1 nodes): `Uri`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 2`** (1 nodes): `Task`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 3`** (1 nodes): `Utils`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 4`** (1 nodes): `StringComment`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 5`** (1 nodes): `File`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 6`** (1 nodes): `SetCookie`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 7`** (1 nodes): `User`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 8`** (1 nodes): `SourceString`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 9`** (1 nodes): `Webhook`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 10`** (2 nodes): `ClassLoader`, `includeFile()`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 11`** (1 nodes): `OrganizationWebhook`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 12`** (1 nodes): `Language`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 13`** (1 nodes): `StreamHandler`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 14`** (1 nodes): `FnStream`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 15`** (1 nodes): `ServerRequest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 16`** (1 nodes): `AbstractApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 18`** (1 nodes): `BundleExport`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 19`** (1 nodes): `Directory`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 20`** (1 nodes): `GlossaryExport`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 21`** (1 nodes): `PreTranslation`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 22`** (1 nodes): `Report`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 23`** (1 nodes): `TranslationMemoryExport`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 24`** (1 nodes): `TranslationMemoryImport`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 25`** (1 nodes): `AppendStream`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 26`** (1 nodes): `PumpStream`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 27`** (1 nodes): `Stream`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 28`** (1 nodes): `GlossaryApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 29`** (1 nodes): `Crowdin`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 30`** (1 nodes): `CrowdinTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 31`** (1 nodes): `CurlFactory`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 32`** (1 nodes): `Bundle`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 33`** (1 nodes): `BufferStream`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 34`** (1 nodes): `StringTranslationApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 35`** (1 nodes): `Distribution`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 36`** (1 nodes): `StringTranslationApproval`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 37`** (1 nodes): `TranslationProjectDirectory`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 38`** (1 nodes): `HandlerStack`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 41`** (1 nodes): `CookieJar`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 42`** (1 nodes): `Group`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 43`** (1 nodes): `StringTranslationApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 44`** (1 nodes): `Group`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 45`** (1 nodes): `Term`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 46`** (1 nodes): `Client`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 48`** (1 nodes): `GlossaryApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 49`** (1 nodes): `ScreenshotApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 50`** (1 nodes): `TaskApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 51`** (1 nodes): `ProjectTeamMemberResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 52`** (1 nodes): `TeamMember`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 54`** (1 nodes): `Branch`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 55`** (1 nodes): `StringTranslation`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 57`** (1 nodes): `Promise`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 58`** (1 nodes): `UploadedFile`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 59`** (1 nodes): `Issue`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 60`** (1 nodes): `Coroutine`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 62`** (1 nodes): `StreamWrapper`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 63`** (1 nodes): `FileApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 64`** (1 nodes): `ScreenshotApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 65`** (1 nodes): `TaskApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 66`** (1 nodes): `TranslationApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 67`** (1 nodes): `TranslationMemoryApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 68`** (1 nodes): `CurlHttpClient`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 69`** (1 nodes): `ReviewedSourceFileBuild`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 70`** (1 nodes): `Team`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 71`** (1 nodes): `UserApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 72`** (1 nodes): `UserApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 73`** (1 nodes): `WorkflowStep`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 74`** (1 nodes): `DistributionRelease`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 75`** (1 nodes): `LanguageTranslation`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 76`** (1 nodes): `Screenshot`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 77`** (1 nodes): `TaskForUpdate`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 78`** (1 nodes): `TranslationMemory`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 79`** (1 nodes): `TranslationProjectBuild`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 80`** (1 nodes): `Vote`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 81`** (1 nodes): `FileApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 82`** (1 nodes): `TranslationApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 83`** (1 nodes): `TranslationMemoryApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 84`** (1 nodes): `TranslationApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 85`** (1 nodes): `CurlMultiHandler`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 86`** (1 nodes): `Glossary`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 87`** (1 nodes): `MachineTranslationEngine`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 88`** (1 nodes): `User`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 90`** (1 nodes): `Middleware`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 91`** (1 nodes): `BundleApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 92`** (1 nodes): `BundleApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 93`** (1 nodes): `Collection`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 94`** (1 nodes): `ProjectTeam`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 95`** (1 nodes): `Vendor`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 96`** (1 nodes): `MockHandler`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 97`** (1 nodes): `FileRevision`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 98`** (1 nodes): `GlossaryImport`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 99`** (1 nodes): `MachineTranslation`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 100`** (1 nodes): `QaCheck`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 101`** (1 nodes): `StringsExporterSetting`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 102`** (1 nodes): `CachingStream`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 104`** (1 nodes): `Request`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 105`** (1 nodes): `TransferStats`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 106`** (1 nodes): `StringTranslationApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 107`** (1 nodes): `RequestException`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 108`** (1 nodes): `Tag`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 109`** (1 nodes): `TaskSettingsTemplate`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 110`** (1 nodes): `EachPromise`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 111`** (1 nodes): `FulfilledPromise`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 112`** (1 nodes): `HttpFactory`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 113`** (1 nodes): `LimitStream`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 114`** (1 nodes): `MultipartStream`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 115`** (1 nodes): `RejectedPromise`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 116`** (1 nodes): `DistributionApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 117`** (1 nodes): `LabelApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 118`** (1 nodes): `ProjectTeamMemberAddedStatistics`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 119`** (1 nodes): `ProgressLanguage`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 120`** (1 nodes): `Message`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 121`** (1 nodes): `RedirectMiddleware`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 122`** (1 nodes): `AbstractTestApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 123`** (1 nodes): `DistributionApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 124`** (1 nodes): `LabelApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 125`** (1 nodes): `TranslationStatusApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 126`** (1 nodes): `TranslationStatusApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 127`** (1 nodes): `CollectionIterator`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 128`** (1 nodes): `GlossaryApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 129`** (1 nodes): `GroupApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 130`** (1 nodes): `TeamApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 131`** (1 nodes): `WorkflowTemplate`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 132`** (1 nodes): `CurlHttpClientTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 133`** (1 nodes): `Progress`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 135`** (1 nodes): `Response`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 136`** (1 nodes): `RetryMiddleware`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 137`** (1 nodes): `BranchApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 138`** (1 nodes): `BranchApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 139`** (1 nodes): `DirectoryApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 140`** (1 nodes): `LanguageApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 141`** (1 nodes): `OrganizationWebhookApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 142`** (1 nodes): `ProjectApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 143`** (1 nodes): `SourceStringApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 144`** (1 nodes): `StringCommentApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 145`** (1 nodes): `StringsExporterSettingApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 146`** (1 nodes): `StringsExporterSettingApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 147`** (1 nodes): `WebhookApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 149`** (1 nodes): `RequestsCrowdin`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 150`** (1 nodes): `AbstractTestApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 151`** (1 nodes): `AddedProjectTeamInfo`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 152`** (1 nodes): `AddedTeamMembers`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 153`** (1 nodes): `GroupApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 154`** (1 nodes): `ProjectApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 155`** (1 nodes): `TeamApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 156`** (1 nodes): `ExceptionsTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 157`** (1 nodes): `DownloadFile`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 158`** (1 nodes): `DownloadFilePreview`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 159`** (1 nodes): `Label`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 162`** (1 nodes): `TaskQueue`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 164`** (1 nodes): `UriNormalizer`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 165`** (1 nodes): `UriResolver`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 166`** (1 nodes): `MimetypesTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 167`** (1 nodes): `DirectoryApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 168`** (1 nodes): `LanguageApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 169`** (1 nodes): `OrganizationWebhookApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 170`** (1 nodes): `ProjectApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 171`** (1 nodes): `SourceStringApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 172`** (1 nodes): `StorageApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 173`** (1 nodes): `StorageApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 174`** (1 nodes): `StringCommentApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 175`** (1 nodes): `WebhookApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 176`** (1 nodes): `FileCookieJar`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 177`** (1 nodes): `SessionCookieJar`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 178`** (1 nodes): `FileApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 179`** (1 nodes): `FileApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 180`** (1 nodes): `TaskApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 181`** (1 nodes): `TeamMemberApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 182`** (1 nodes): `TeamMemberApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 183`** (1 nodes): `BaseModel`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 184`** (1 nodes): `BranchTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 185`** (1 nodes): `StringsExporterSettingTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 186`** (1 nodes): `Create`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 187`** (1 nodes): `Is`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 188`** (1 nodes): `Pool`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 189`** (1 nodes): `MachineTranslationEngineApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 190`** (1 nodes): `MachineTranslationEngineApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 191`** (1 nodes): `ReportApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 192`** (1 nodes): `ReportApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 193`** (1 nodes): `UserApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 194`** (1 nodes): `UserApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 195`** (1 nodes): `GuzzleHttpClient`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 196`** (2 nodes): `ComposerAutoloaderInit3eae54d6eea1c0a1783596325fe08e8d`, `composerRequire3eae54d6eea1c0a1783596325fe08e8d()`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 197`** (1 nodes): `AddedProjectTeamInfoTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 198`** (1 nodes): `AddedTeamMembersTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 199`** (1 nodes): `GroupTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 200`** (1 nodes): `MachineTranslationEngineApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 201`** (1 nodes): `MachineTranslationEngineApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 202`** (1 nodes): `ProjectTeamMemberAddedStatisticsTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 203`** (1 nodes): `ProjectTeamMemberResourceTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 204`** (1 nodes): `ProjectTeamTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 205`** (1 nodes): `TeamMemberTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 206`** (1 nodes): `TeamTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 207`** (1 nodes): `UserTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 208`** (1 nodes): `VendorTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 209`** (1 nodes): `BadResponseException`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 210`** (1 nodes): `ConnectException`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 211`** (1 nodes): `ResponseDecoratorTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 212`** (1 nodes): `ResponseErrorHandlerTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 213`** (1 nodes): `CrowdinServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 214`** (1 nodes): `BundleTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 215`** (1 nodes): `DirectoryTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 216`** (1 nodes): `DistributionReleaseTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 217`** (1 nodes): `DistributionTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 218`** (1 nodes): `DownloadFilePreviewTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 219`** (1 nodes): `DownloadFileTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 220`** (1 nodes): `DownloadFileTranslation`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 221`** (1 nodes): `DownloadFileTranslationTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 222`** (1 nodes): `FileTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 223`** (1 nodes): `GlossaryExportTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 224`** (1 nodes): `GlossaryTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 225`** (1 nodes): `GroupTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 226`** (1 nodes): `LabelTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 227`** (1 nodes): `LanguageTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 228`** (1 nodes): `MachineTranslationEngineTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 229`** (1 nodes): `MachineTranslationTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 230`** (1 nodes): `OrganizationWebhookTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 231`** (1 nodes): `PreTranslationTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 232`** (1 nodes): `ProgressFile`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 233`** (1 nodes): `ProjectTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 234`** (1 nodes): `ReportTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 235`** (1 nodes): `ScreenshotTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 236`** (1 nodes): `SourceStringTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 237`** (1 nodes): `Storage`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 238`** (1 nodes): `StringCommentTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 239`** (1 nodes): `StringTranslationApprovalTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 240`** (1 nodes): `TagTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 241`** (1 nodes): `TaskForUpdateTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 242`** (1 nodes): `TaskSettingsTemplateTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 243`** (1 nodes): `TaskTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 244`** (1 nodes): `TermTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 245`** (1 nodes): `TranslationMemoryExportTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 246`** (1 nodes): `TranslationMemoryImportTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 247`** (1 nodes): `TranslationMemoryTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 248`** (1 nodes): `TranslationProjectBuildTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 249`** (1 nodes): `VoteTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 250`** (1 nodes): `WebhookTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 251`** (1 nodes): `Each`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 252`** (1 nodes): `Header`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 253`** (1 nodes): `MessageFormatter`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 254`** (1 nodes): `PrepareBodyMiddleware`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 255`** (1 nodes): `UriComparator`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 256`** (1 nodes): `Mimetypes`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 258`** (1 nodes): `IssueApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 259`** (1 nodes): `IssueApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 260`** (1 nodes): `NotificationApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 261`** (1 nodes): `NotificationApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 263`** (1 nodes): `CollectionTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 264`** (1 nodes): `ModelCollection`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 265`** (1 nodes): `WorkflowStepApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 266`** (1 nodes): `WorkflowStepApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 267`** (1 nodes): `WorkflowTemplateApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 268`** (1 nodes): `WorkflowTemplateApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 269`** (1 nodes): `ApiValidationException`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 270`** (1 nodes): `CurlHandler`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 271`** (1 nodes): `EasyHandle`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 272`** (1 nodes): `Proxy`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 273`** (1 nodes): `CrowdinHttpClientFactoryTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 274`** (1 nodes): `GuzzleHttpClientTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 275`** (1 nodes): `ResponseErrorHandlerFactoryTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 276`** (1 nodes): `GlossaryImportImportTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 277`** (1 nodes): `ProgressFileTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 278`** (1 nodes): `ProgressLanguageTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 279`** (1 nodes): `ProgressTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 280`** (1 nodes): `StorageTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 281`** (1 nodes): `StringTranslationTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 282`** (1 nodes): `UserTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 283`** (1 nodes): `ResponseModelDecorator`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 284`** (1 nodes): `ResponseModelListDecorator`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 285`** (1 nodes): `BodySummarizer`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 286`** (1 nodes): `DroppingStream`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 287`** (1 nodes): `LazyOpenStream`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 288`** (1 nodes): `MimeType`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 289`** (1 nodes): `NoSeekStream`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 290`** (1 nodes): `Query`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 291`** (1 nodes): `RejectionException`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 295`** (1 nodes): `CrowdinHttpClientFactory`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 296`** (1 nodes): `ComposerStaticInit3eae54d6eea1c0a1783596325fe08e8d`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 297`** (1 nodes): `CollectionIteratorTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 298`** (1 nodes): `ModelCollectionTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 299`** (1 nodes): `NotificationApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 300`** (1 nodes): `NotificationApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 301`** (1 nodes): `ReportApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 302`** (1 nodes): `ReportApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 303`** (1 nodes): `VendorApi`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 304`** (1 nodes): `VendorApiTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 305`** (1 nodes): `WorkflowStepTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 306`** (1 nodes): `WorkflowTemplateTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 308`** (1 nodes): `HeaderProcessor`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 309`** (1 nodes): `ResponseErrorHandlerFactory`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 310`** (1 nodes): `ResponseErrorHandler`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 311`** (1 nodes): `CrowdinFacade`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 312`** (1 nodes): `FileRevisionTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 313`** (1 nodes): `IssueTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 314`** (1 nodes): `QaCheckTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 315`** (1 nodes): `ResponseArrayDecorator`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 316`** (1 nodes): `AggregateException`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 317`** (1 nodes): `InflateStream`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 320`** (1 nodes): `ClientException`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 321`** (1 nodes): `InvalidArgumentException`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 322`** (1 nodes): `MalformedUriException`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 323`** (1 nodes): `ServerException`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 324`** (1 nodes): `TooManyRedirectsException`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 325`** (1 nodes): `TransferException`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 326`** (1 nodes): `ApiException`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 327`** (1 nodes): `CrowdinClientException`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 328`** (1 nodes): `CrowdinException`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 329`** (1 nodes): `HttpException`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 333`** (1 nodes): `CancellationException`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 340`** (1 nodes): `RequestOptions`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 342`** (1 nodes): `Rfc7230`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.

## Suggested Questions
_Questions this graph is uniquely positioned to answer:_

- **What connects `ApiException`, `CrowdinClientException`, `CrowdinException` to the rest of the system?**
  _17 weakly-connected nodes found - possible documentation gaps or missing edges._
- **Should `Community 0` be split into smaller, more focused modules?**
  _Cohesion score 0.020618556701030927 - nodes in this community are weakly interconnected._
- **Should `Community 1` be split into smaller, more focused modules?**
  _Cohesion score 0.09408033826638477 - nodes in this community are weakly interconnected._
- **Should `Community 2` be split into smaller, more focused modules?**
  _Cohesion score 0.05 - nodes in this community are weakly interconnected._
- **Should `Community 3` be split into smaller, more focused modules?**
  _Cohesion score 0.05714285714285714 - nodes in this community are weakly interconnected._
- **Should `Community 4` be split into smaller, more focused modules?**
  _Cohesion score 0.06451612903225806 - nodes in this community are weakly interconnected._
- **Should `Community 5` be split into smaller, more focused modules?**
  _Cohesion score 0.06666666666666667 - nodes in this community are weakly interconnected._