# Crossly\ActivityApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getActionLog()**](ActivityApi.md#getActionLog) | **GET** /v1/action-log/{id} | Get one action-log event by id (ownership-checked).
[**getActionLogFacet()**](ActivityApi.md#getActionLogFacet) | **GET** /v1/action-log/facets | Distinct platforms / actions / categories present in the caller&#39;s action log (last 90 days) — powers filter dropdowns before you query.
[**listActionLog()**](ActivityApi.md#listActionLog) | **GET** /v1/action-log | List action-log events — the semantic \&quot;what happened\&quot; record of every user + platform action. Filter by platform / action / category / status / source / target, and a since/until created_at window.
[**listActionLogCalls()**](ActivityApi.md#listActionLogCalls) | **GET** /v1/action-log/{id}/calls | The outbound platform HTTP calls under an event (oldest first) — url, method, status, latency, redacted request/response bodies, proxy + recipe/hash. Answers \&quot;what was sent / what went wrong\&quot;.


## `getActionLog()`

```php
getActionLog($id): \Crossly\Model\GetActionLogResponse
```

Get one action-log event by id (ownership-checked).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getActionLog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getActionLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Crossly\Model\GetActionLogResponse**](../Model/GetActionLogResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActionLogFacet()`

```php
getActionLogFacet(): \Crossly\Model\GetActionLogFacetResponse
```

Distinct platforms / actions / categories present in the caller's action log (last 90 days) — powers filter dropdowns before you query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getActionLogFacet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getActionLogFacet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\GetActionLogFacetResponse**](../Model/GetActionLogFacetResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listActionLog()`

```php
listActionLog($platform, $action, $category, $status, $source, $target_type, $target_id, $since, $until, $limit, $offset): V1List
```

List action-log events — the semantic \"what happened\" record of every user + platform action. Filter by platform / action / category / status / source / target, and a since/until created_at window.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string
$action = 'action_example'; // string
$category = 'category_example'; // string
$status = 'status_example'; // string
$source = 'source_example'; // string
$target_type = 'target_type_example'; // string
$target_id = 'target_id_example'; // string
$since = 'since_example'; // string | ISO lower bound (inclusive) on created_at.
$until = 'until_example'; // string | ISO upper bound (exclusive) on created_at.
$limit = 50; // int
$offset = 0; // int

try {
    $result = $apiInstance->listActionLog($platform, $action, $category, $status, $source, $target_type, $target_id, $since, $until, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->listActionLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  | [optional]
 **action** | **string**|  | [optional]
 **category** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **source** | **string**|  | [optional]
 **target_type** | **string**|  | [optional]
 **target_id** | **string**|  | [optional]
 **since** | **string**| ISO lower bound (inclusive) on created_at. | [optional]
 **until** | **string**| ISO upper bound (exclusive) on created_at. | [optional]
 **limit** | **int**|  | [optional] [default to 50]
 **offset** | **int**|  | [optional] [default to 0]

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listActionLogCalls()`

```php
listActionLogCalls($id): V1List
```

The outbound platform HTTP calls under an event (oldest first) — url, method, status, latency, redacted request/response bodies, proxy + recipe/hash. Answers \"what was sent / what went wrong\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listActionLogCalls($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->listActionLogCalls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
