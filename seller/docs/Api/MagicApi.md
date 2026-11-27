# Crossly\MagicApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMagicAutoDecisionUndo()**](MagicApi.md#createMagicAutoDecisionUndo) | **POST** /v1/magic/auto/decisions/{decisionId}/undo | Undo an automated Magic List decision, deleting its unpublished draft.
[**createMagicAutoItem()**](MagicApi.md#createMagicAutoItem) | **POST** /v1/magic/auto/items | Scan one item and match it automatically (drafts only, never publishes).
[**createMagicAutoRun()**](MagicApi.md#createMagicAutoRun) | **POST** /v1/magic/auto/runs/{runId} | Score a Magic List run automatically; a confident match in auto mode becomes a draft.
[**createMagicAutoRunSwipe()**](MagicApi.md#createMagicAutoRunSwipe) | **POST** /v1/magic/auto/runs/{runId}/swipes | Record a seller swipe session (kept and rejected match keys) for a Magic List run.
[**createMagicScan()**](MagicApi.md#createMagicScan) | **POST** /v1/magic/scan | Run a Magic List image scan.
[**createMagicScanSynthesize()**](MagicApi.md#createMagicScanSynthesize) | **POST** /v1/magic/scan/{runId}/synthesize | Synthesize a draft from confirmed matches.
[**getMagicAutoSetting()**](MagicApi.md#getMagicAutoSetting) | **GET** /v1/magic/auto/settings | The seller’s Magic List automated-matching mode.
[**getMagicDraft()**](MagicApi.md#getMagicDraft) | **GET** /v1/magic/drafts/{draftId} | Get a synthesized Magic List draft.
[**listMagicAutoRunDecisions()**](MagicApi.md#listMagicAutoRunDecisions) | **GET** /v1/magic/auto/runs/{runId}/decisions | Every match decision round (automated and seller) for a Magic List run.
[**listMagicRecent()**](MagicApi.md#listMagicRecent) | **GET** /v1/magic/recent | Recent Magic List scans for this seller.
[**updateMagicAutoSetting()**](MagicApi.md#updateMagicAutoSetting) | **PUT** /v1/magic/auto/settings | Set the Magic List automated-matching mode (off | auto | review_all).


## `createMagicAutoDecisionUndo()`

```php
createMagicAutoDecisionUndo($decision_id): \Crossly\Model\Magic\CreateMagicAutoDecisionUndoResponse
```

Undo an automated Magic List decision, deleting its unpublished draft.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\MagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$decision_id = 'decision_id_example'; // string

try {
    $result = $apiInstance->createMagicAutoDecisionUndo($decision_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MagicApi->createMagicAutoDecisionUndo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **decision_id** | **string**|  |

### Return type

**\Crossly\Model\Magic\CreateMagicAutoDecisionUndoResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createMagicAutoItem()`

```php
createMagicAutoItem(): \Crossly\Model\Magic\CreateMagicAutoItemResponse
```

Scan one item and match it automatically (drafts only, never publishes).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\MagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createMagicAutoItem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MagicApi->createMagicAutoItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Magic\CreateMagicAutoItemResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createMagicAutoRun()`

```php
createMagicAutoRun($run_id): \Crossly\Model\Magic\CreateMagicAutoRunResponse
```

Score a Magic List run automatically; a confident match in auto mode becomes a draft.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\MagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 'run_id_example'; // string

try {
    $result = $apiInstance->createMagicAutoRun($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MagicApi->createMagicAutoRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **run_id** | **string**|  |

### Return type

**\Crossly\Model\Magic\CreateMagicAutoRunResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createMagicAutoRunSwipe()`

```php
createMagicAutoRunSwipe($run_id): \Crossly\Model\Magic\CreateMagicAutoRunSwipeResponse
```

Record a seller swipe session (kept and rejected match keys) for a Magic List run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\MagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 'run_id_example'; // string

try {
    $result = $apiInstance->createMagicAutoRunSwipe($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MagicApi->createMagicAutoRunSwipe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **run_id** | **string**|  |

### Return type

**\Crossly\Model\Magic\CreateMagicAutoRunSwipeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createMagicScan()`

```php
createMagicScan(): \Crossly\Model\Magic\CreateMagicScanResponse
```

Run a Magic List image scan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\MagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createMagicScan();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MagicApi->createMagicScan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Magic\CreateMagicScanResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createMagicScanSynthesize()`

```php
createMagicScanSynthesize($run_id): \Crossly\Model\Magic\CreateMagicScanSynthesizeResponse
```

Synthesize a draft from confirmed matches.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\MagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 'run_id_example'; // string

try {
    $result = $apiInstance->createMagicScanSynthesize($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MagicApi->createMagicScanSynthesize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **run_id** | **string**|  |

### Return type

**\Crossly\Model\Magic\CreateMagicScanSynthesizeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getMagicAutoSetting()`

```php
getMagicAutoSetting(): \Crossly\Model\Magic\GetMagicAutoSettingResponse
```

The seller’s Magic List automated-matching mode.

mode: off (every match is swiped by hand), auto (confident matches become DRAFTS on their own, never published, always undoable) or review_all (Crossly pre-marks its picks; the seller confirms). Default review_all.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\MagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMagicAutoSetting();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MagicApi->getMagicAutoSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Magic\GetMagicAutoSettingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getMagicDraft()`

```php
getMagicDraft($draft_id): \Crossly\Model\Magic\GetMagicDraftResponse
```

Get a synthesized Magic List draft.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\MagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$draft_id = 'draft_id_example'; // string

try {
    $result = $apiInstance->getMagicDraft($draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MagicApi->getMagicDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **string**|  |

### Return type

**\Crossly\Model\Magic\GetMagicDraftResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listMagicAutoRunDecisions()`

```php
listMagicAutoRunDecisions($run_id): \Crossly\Model\Magic\ListMagicAutoRunDecisionsResponse
```

Every match decision round (automated and seller) for a Magic List run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\MagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 'run_id_example'; // string

try {
    $result = $apiInstance->listMagicAutoRunDecisions($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MagicApi->listMagicAutoRunDecisions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **run_id** | **string**|  |

### Return type

**\Crossly\Model\Magic\ListMagicAutoRunDecisionsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listMagicRecent()`

```php
listMagicRecent(): \Crossly\Model\Magic\ListMagicRecentResponse
```

Recent Magic List scans for this seller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\MagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listMagicRecent();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MagicApi->listMagicRecent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Magic\ListMagicRecentResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateMagicAutoSetting()`

```php
updateMagicAutoSetting($update_magic_auto_setting_request): \Crossly\Model\Magic\GetMagicAutoSettingResponse
```

Set the Magic List automated-matching mode (off | auto | review_all).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\MagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_magic_auto_setting_request = new \Crossly\Model\Magic\UpdateMagicAutoSettingRequest(); // \Crossly\Model\Magic\UpdateMagicAutoSettingRequest

try {
    $result = $apiInstance->updateMagicAutoSetting($update_magic_auto_setting_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MagicApi->updateMagicAutoSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_magic_auto_setting_request** | **\Crossly\Model\Magic\UpdateMagicAutoSettingRequest**|  |

### Return type

**\Crossly\Model\Magic\GetMagicAutoSettingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
