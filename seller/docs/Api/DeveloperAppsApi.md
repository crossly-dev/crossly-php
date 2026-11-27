# Crossly\DeveloperAppsApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDeveloperAppCertificationSubmit()**](DeveloperAppsApi.md#createDeveloperAppCertificationSubmit) | **POST** /v1/developer/apps/{appId}/certification/submit | Send the application to Crossly review. Needs a passing conformance run on this client version and report-menu evidence.
[**createDeveloperAppCertificationWithdraw()**](DeveloperAppsApi.md#createDeveloperAppCertificationWithdraw) | **POST** /v1/developer/apps/{appId}/certification/withdraw | Take the application out of review to edit it.
[**createDeveloperAppClientVersion()**](DeveloperAppsApi.md#createDeveloperAppClientVersion) | **POST** /v1/developer/apps/{appId}/client-versions | Register a new release of your certified client and start its conformance run. A pass on the same major version carries the certification automatically; a new major version goes to Crossly review; a failure keeps your previous certified version.
[**createDeveloperAppClientVersionRun()**](DeveloperAppsApi.md#createDeveloperAppClientVersionRun) | **POST** /v1/developer/apps/{appId}/client-versions/{versionId}/run | Start a new conformance run for a release whose run failed, expired or was aborted.
[**createDeveloperAppConformanceRun()**](DeveloperAppsApi.md#createDeveloperAppConformanceRun) | **POST** /v1/developer/apps/{appId}/conformance-runs | Start a conformance run: a test experience only your app, signed in as you, can join. Join it with POST /v1/worlds/experiences/{experienceId}/join and follow the instruction.
[**createDeveloperAppConformanceRunAbort()**](DeveloperAppsApi.md#createDeveloperAppConformanceRunAbort) | **POST** /v1/developer/apps/{appId}/conformance-runs/{runId}/abort | Abort an open run.
[**createDeveloperAppVerificationCheckDomain()**](DeveloperAppsApi.md#createDeveloperAppVerificationCheckDomain) | **POST** /v1/developer/apps/{appId}/verification/check-domain | Look up the DNS TXT record crossly-app-verification&#x3D;&lt;token&gt; on your domain (or _crossly.&lt;domain&gt;) now.
[**createDeveloperAppVerificationSubmit()**](DeveloperAppsApi.md#createDeveloperAppVerificationSubmit) | **POST** /v1/developer/apps/{appId}/verification/submit | Send the verification to Crossly review (each scope is decided separately).
[**createDeveloperAppVerificationWithdraw()**](DeveloperAppsApi.md#createDeveloperAppVerificationWithdraw) | **POST** /v1/developer/apps/{appId}/verification/withdraw | Take the verification out of review to edit it.
[**getDeveloperAppCertification()**](DeveloperAppsApi.md#getDeveloperAppCertification) | **GET** /v1/developer/apps/{appId}/certification | The Crossly Carnival client certification application (null until you create it): status, client, evidence, the passing run and what still blocks submission.
[**getDeveloperAppClientVersion()**](DeveloperAppsApi.md#getDeveloperAppClientVersion) | **GET** /v1/developer/apps/{appId}/client-versions/{versionId} | One client release and its re-certification.
[**getDeveloperAppConformanceRun()**](DeveloperAppsApi.md#getDeveloperAppConformanceRun) | **GET** /v1/developer/apps/{appId}/conformance-runs/{runId} | A run&#39;s step, instruction and every check with its verdict.
[**getDeveloperAppHealth()**](DeveloperAppsApi.md#getDeveloperAppHealth) | **GET** /v1/developer/apps/{appId}/health | Your app&#39;s API health: write-request counts by status class (24 h, 7 d) across every seller using it, top error codes with advice, a retry-storm flag, the last 50 failed requests (message and correlation id only on requests made with your own account), and from Atlas: how many people authorized the app and with which scopes (counts, never who) and the token endpoint&#39;s OAuth errors by code (e.g. invalid_grant) with the latest one.
[**getDeveloperAppProfile()**](DeveloperAppsApi.md#getDeveloperAppProfile) | **GET** /v1/developer/apps/{appId}/profile | Your app&#39;s public directory profile: every editable field, the listing status, what still needs review, and &#x60;preview&#x60; — the profile exactly as /seller-apps or /buyer-apps will show it.
[**getDeveloperAppReview()**](DeveloperAppsApi.md#getDeveloperAppReview) | **GET** /v1/developer/apps/{appId}/review | Your app&#39;s Crossly Carnival client certification, verification and review history in one read.
[**getDeveloperAppVerification()**](DeveloperAppsApi.md#getDeveloperAppVerification) | **GET** /v1/developer/apps/{appId}/verification | The app verification for worlds:publish / worlds:monetize (null until created): domain proof, policies, justifications and per-scope decisions.
[**listDeveloperAppClientVersions()**](DeveloperAppsApi.md#listDeveloperAppClientVersions) | **GET** /v1/developer/apps/{appId}/client-versions | Releases of your certified client, newest first: the re-certification status (awaiting_run, running, carried, ops_review, approved, rejected, failed, superseded), the rule that decided it and its checks.
[**listDeveloperAppConformanceRuns()**](DeveloperAppsApi.md#listDeveloperAppConformanceRuns) | **GET** /v1/developer/apps/{appId}/conformance-runs | Your app&#39;s conformance runs, newest first.
[**updateDeveloperAppCertification()**](DeveloperAppsApi.md#updateDeveloperAppCertification) | **PUT** /v1/developer/apps/{appId}/certification | Create or edit the application: client name, platform, version, build and source URLs, description and evidence (report menu, chat, Policy UI). Changing the client clears the passing run.
[**updateDeveloperAppListing()**](DeveloperAppsApi.md#updateDeveloperAppListing) | **PUT** /v1/developer/apps/{appId}/listing | Turn \&quot;Listed publicly\&quot; on or off. On: an app Crossly approved whose name, scopes and audience are unchanged is listed at once; anything else goes to review (pending_review). Off: unlisted immediately.
[**updateDeveloperAppProfile()**](DeveloperAppsApi.md#updateDeveloperAppProfile) | **PATCH** /v1/developer/apps/{appId}/profile | Edit your app&#39;s directory profile: name, slug, tagline, description, longDescription (markdown), category, audience (auto|seller|buyer|both), logoUrl, bannerUrl (4:1, 1600×400), screenshots (≤6), demoVideoUrl, homepageUrl, installUrl, support/privacy/terms links, docsLinks [{label,url}] and pricingNote. Absent keys are kept, null clears. Images not on Crossly&#39;s CDN are copied onto it. Renaming a listed app or changing its audience sends it back to review.
[**updateDeveloperAppVerification()**](DeveloperAppsApi.md#updateDeveloperAppVerification) | **PUT** /v1/developer/apps/{appId}/verification | Create or edit the verification: domain, requested scopes with a justification each, privacy policy, terms, support email, demo.


## `createDeveloperAppCertificationSubmit()`

```php
createDeveloperAppCertificationSubmit($app_id): \Crossly\Model\Common\DeveloperAppCertificationResponse
```

Send the application to Crossly review. Needs a passing conformance run on this client version and report-menu evidence.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->createDeveloperAppCertificationSubmit($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->createDeveloperAppCertificationSubmit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**\Crossly\Model\Common\DeveloperAppCertificationResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDeveloperAppCertificationWithdraw()`

```php
createDeveloperAppCertificationWithdraw($app_id): \Crossly\Model\Common\DeveloperAppCertificationResponse
```

Take the application out of review to edit it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->createDeveloperAppCertificationWithdraw($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->createDeveloperAppCertificationWithdraw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**\Crossly\Model\Common\DeveloperAppCertificationResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDeveloperAppClientVersion()`

```php
createDeveloperAppClientVersion($app_id): \Crossly\Model\Developer\CreateDeveloperAppClientVersionResponse
```

Register a new release of your certified client and start its conformance run. A pass on the same major version carries the certification automatically; a new major version goes to Crossly review; a failure keeps your previous certified version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->createDeveloperAppClientVersion($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->createDeveloperAppClientVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**\Crossly\Model\Developer\CreateDeveloperAppClientVersionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDeveloperAppClientVersionRun()`

```php
createDeveloperAppClientVersionRun($app_id, $version_id): \Crossly\Model\Developer\CreateDeveloperAppClientVersionResponse
```

Start a new conformance run for a release whose run failed, expired or was aborted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$version_id = 'version_id_example'; // string

try {
    $result = $apiInstance->createDeveloperAppClientVersionRun($app_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->createDeveloperAppClientVersionRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **version_id** | **string**|  |

### Return type

**\Crossly\Model\Developer\CreateDeveloperAppClientVersionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDeveloperAppConformanceRun()`

```php
createDeveloperAppConformanceRun($app_id): \Crossly\Model\Developer\GetDeveloperAppConformanceRunResponse
```

Start a conformance run: a test experience only your app, signed in as you, can join. Join it with POST /v1/worlds/experiences/{experienceId}/join and follow the instruction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->createDeveloperAppConformanceRun($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->createDeveloperAppConformanceRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**\Crossly\Model\Developer\GetDeveloperAppConformanceRunResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDeveloperAppConformanceRunAbort()`

```php
createDeveloperAppConformanceRunAbort($app_id, $run_id): \Crossly\Model\Developer\CreateDeveloperAppConformanceRunAbortResponse
```

Abort an open run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$run_id = 'run_id_example'; // string

try {
    $result = $apiInstance->createDeveloperAppConformanceRunAbort($app_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->createDeveloperAppConformanceRunAbort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **run_id** | **string**|  |

### Return type

**\Crossly\Model\Developer\CreateDeveloperAppConformanceRunAbortResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDeveloperAppVerificationCheckDomain()`

```php
createDeveloperAppVerificationCheckDomain($app_id): \Crossly\Model\Common\DeveloperAppVerificationResponse
```

Look up the DNS TXT record crossly-app-verification=<token> on your domain (or _crossly.<domain>) now.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->createDeveloperAppVerificationCheckDomain($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->createDeveloperAppVerificationCheckDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**\Crossly\Model\Common\DeveloperAppVerificationResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDeveloperAppVerificationSubmit()`

```php
createDeveloperAppVerificationSubmit($app_id): \Crossly\Model\Common\DeveloperAppVerificationResponse
```

Send the verification to Crossly review (each scope is decided separately).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->createDeveloperAppVerificationSubmit($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->createDeveloperAppVerificationSubmit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**\Crossly\Model\Common\DeveloperAppVerificationResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDeveloperAppVerificationWithdraw()`

```php
createDeveloperAppVerificationWithdraw($app_id): \Crossly\Model\Common\DeveloperAppVerificationResponse
```

Take the verification out of review to edit it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->createDeveloperAppVerificationWithdraw($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->createDeveloperAppVerificationWithdraw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**\Crossly\Model\Common\DeveloperAppVerificationResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDeveloperAppCertification()`

```php
getDeveloperAppCertification($app_id): \Crossly\Model\Developer\GetDeveloperAppCertificationResponse
```

The Crossly Carnival client certification application (null until you create it): status, client, evidence, the passing run and what still blocks submission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->getDeveloperAppCertification($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->getDeveloperAppCertification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**\Crossly\Model\Developer\GetDeveloperAppCertificationResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDeveloperAppClientVersion()`

```php
getDeveloperAppClientVersion($app_id, $version_id): \Crossly\Model\Developer\GetDeveloperAppClientVersionResponse
```

One client release and its re-certification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$version_id = 'version_id_example'; // string

try {
    $result = $apiInstance->getDeveloperAppClientVersion($app_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->getDeveloperAppClientVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **version_id** | **string**|  |

### Return type

**\Crossly\Model\Developer\GetDeveloperAppClientVersionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDeveloperAppConformanceRun()`

```php
getDeveloperAppConformanceRun($app_id, $run_id): \Crossly\Model\Developer\GetDeveloperAppConformanceRunResponse
```

A run's step, instruction and every check with its verdict.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$run_id = 'run_id_example'; // string

try {
    $result = $apiInstance->getDeveloperAppConformanceRun($app_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->getDeveloperAppConformanceRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **run_id** | **string**|  |

### Return type

**\Crossly\Model\Developer\GetDeveloperAppConformanceRunResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDeveloperAppHealth()`

```php
getDeveloperAppHealth($app_id): \Crossly\Model\Developer\GetDeveloperAppHealthResponse
```

Your app's API health: write-request counts by status class (24 h, 7 d) across every seller using it, top error codes with advice, a retry-storm flag, the last 50 failed requests (message and correlation id only on requests made with your own account), and from Atlas: how many people authorized the app and with which scopes (counts, never who) and the token endpoint's OAuth errors by code (e.g. invalid_grant) with the latest one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->getDeveloperAppHealth($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->getDeveloperAppHealth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**\Crossly\Model\Developer\GetDeveloperAppHealthResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDeveloperAppProfile()`

```php
getDeveloperAppProfile($app_id): \Crossly\Model\Developer\GetDeveloperAppProfileResponse
```

Your app's public directory profile: every editable field, the listing status, what still needs review, and `preview` — the profile exactly as /seller-apps or /buyer-apps will show it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->getDeveloperAppProfile($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->getDeveloperAppProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**\Crossly\Model\Developer\GetDeveloperAppProfileResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDeveloperAppReview()`

```php
getDeveloperAppReview($app_id): \Crossly\Model\Developer\GetDeveloperAppReviewResponse
```

Your app's Crossly Carnival client certification, verification and review history in one read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->getDeveloperAppReview($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->getDeveloperAppReview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**\Crossly\Model\Developer\GetDeveloperAppReviewResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDeveloperAppVerification()`

```php
getDeveloperAppVerification($app_id): \Crossly\Model\Developer\GetDeveloperAppVerificationResponse
```

The app verification for worlds:publish / worlds:monetize (null until created): domain proof, policies, justifications and per-scope decisions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->getDeveloperAppVerification($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->getDeveloperAppVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**\Crossly\Model\Developer\GetDeveloperAppVerificationResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listDeveloperAppClientVersions()`

```php
listDeveloperAppClientVersions($app_id): \Crossly\Model\Developer\ListDeveloperAppClientVersionsResponse
```

Releases of your certified client, newest first: the re-certification status (awaiting_run, running, carried, ops_review, approved, rejected, failed, superseded), the rule that decided it and its checks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->listDeveloperAppClientVersions($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->listDeveloperAppClientVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**\Crossly\Model\Developer\ListDeveloperAppClientVersionsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listDeveloperAppConformanceRuns()`

```php
listDeveloperAppConformanceRuns($app_id): \Crossly\Model\Developer\ListDeveloperAppConformanceRunsResponse
```

Your app's conformance runs, newest first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->listDeveloperAppConformanceRuns($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->listDeveloperAppConformanceRuns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**\Crossly\Model\Developer\ListDeveloperAppConformanceRunsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateDeveloperAppCertification()`

```php
updateDeveloperAppCertification($app_id): \Crossly\Model\Common\DeveloperAppCertificationResponse
```

Create or edit the application: client name, platform, version, build and source URLs, description and evidence (report menu, chat, Policy UI). Changing the client clears the passing run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->updateDeveloperAppCertification($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->updateDeveloperAppCertification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**\Crossly\Model\Common\DeveloperAppCertificationResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateDeveloperAppListing()`

```php
updateDeveloperAppListing($app_id): \Crossly\Model\Developer\UpdateDeveloperAppListingResponse
```

Turn \"Listed publicly\" on or off. On: an app Crossly approved whose name, scopes and audience are unchanged is listed at once; anything else goes to review (pending_review). Off: unlisted immediately.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->updateDeveloperAppListing($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->updateDeveloperAppListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**\Crossly\Model\Developer\UpdateDeveloperAppListingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateDeveloperAppProfile()`

```php
updateDeveloperAppProfile($app_id): \Crossly\Model\Developer\UpdateDeveloperAppProfileResponse
```

Edit your app's directory profile: name, slug, tagline, description, longDescription (markdown), category, audience (auto|seller|buyer|both), logoUrl, bannerUrl (4:1, 1600×400), screenshots (≤6), demoVideoUrl, homepageUrl, installUrl, support/privacy/terms links, docsLinks [{label,url}] and pricingNote. Absent keys are kept, null clears. Images not on Crossly's CDN are copied onto it. Renaming a listed app or changing its audience sends it back to review.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->updateDeveloperAppProfile($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->updateDeveloperAppProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**\Crossly\Model\Developer\UpdateDeveloperAppProfileResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateDeveloperAppVerification()`

```php
updateDeveloperAppVerification($app_id): \Crossly\Model\Common\DeveloperAppVerificationResponse
```

Create or edit the verification: domain, requested scopes with a justification each, privacy policy, terms, support email, demo.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DeveloperAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->updateDeveloperAppVerification($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperAppsApi->updateDeveloperAppVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**\Crossly\Model\Common\DeveloperAppVerificationResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
