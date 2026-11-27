# Crossly\SourceSyncApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSourceSyncSync()**](SourceSyncApi.md#createSourceSyncSync) | **POST** /v1/source-sync/{platform}/sync | Reconcile a store now: re-read its whole catalogue and apply every change (runs in the background; 202).
[**getSourceSyncLocation()**](SourceSyncApi.md#getSourceSyncLocation) | **GET** /v1/source-sync/{platform}/locations | POS only (lightspeed_r, lightspeed_x, square): the shops/outlets/locations on the account and which one Crossly syncs stock and sales with.
[**listSourceSync()**](SourceSyncApi.md#listSourceSync) | **GET** /v1/source-sync | List source-capable stores with their continuous-sync settings and status.
[**listSourceSyncEvents()**](SourceSyncApi.md#listSourceSyncEvents) | **GET** /v1/source-sync/events | Recent source-sync activity: each webhook delivery and reconcile change, with its outcome.
[**updateSourceSync()**](SourceSyncApi.md#updateSourceSync) | **PATCH** /v1/source-sync/{platform} | Update a store&#39;s source-sync settings: on/off, source-owned fields, deletion handling, auto-export channels.
[**updateSourceSyncLocation()**](SourceSyncApi.md#updateSourceSyncLocation) | **PUT** /v1/source-sync/{platform}/location | POS only: choose the shop (R-Series) / outlet (X-Series) / Square location whose stock and sales Crossly syncs. Must be one GET .../locations lists.


## `createSourceSyncSync()`

```php
createSourceSyncSync($platform): \Crossly\Model\Source\CreateSourceSyncSyncResponse
```

Reconcile a store now: re-read its whole catalogue and apply every change (runs in the background; 202).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SourceSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string

try {
    $result = $apiInstance->createSourceSyncSync($platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceSyncApi->createSourceSyncSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  |

### Return type

**\Crossly\Model\Source\CreateSourceSyncSyncResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getSourceSyncLocation()`

```php
getSourceSyncLocation($platform): \Crossly\Model\Source\GetSourceSyncLocationResponse
```

POS only (lightspeed_r, lightspeed_x, square): the shops/outlets/locations on the account and which one Crossly syncs stock and sales with.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SourceSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string

try {
    $result = $apiInstance->getSourceSyncLocation($platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceSyncApi->getSourceSyncLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  |

### Return type

**\Crossly\Model\Source\GetSourceSyncLocationResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listSourceSync()`

```php
listSourceSync(): \Crossly\Model\Source\ListSourceSyncResponse
```

List source-capable stores with their continuous-sync settings and status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SourceSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listSourceSync();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceSyncApi->listSourceSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Source\ListSourceSyncResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listSourceSyncEvents()`

```php
listSourceSyncEvents($platform, $limit): \Crossly\Model\Source\ListSourceSyncEventsResponse
```

Recent source-sync activity: each webhook delivery and reconcile change, with its outcome.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SourceSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->listSourceSyncEvents($platform, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceSyncApi->listSourceSyncEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

**\Crossly\Model\Source\ListSourceSyncEventsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateSourceSync()`

```php
updateSourceSync($platform): \Crossly\Model\Source\ListSourceSyncItem
```

Update a store's source-sync settings: on/off, source-owned fields, deletion handling, auto-export channels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SourceSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string

try {
    $result = $apiInstance->updateSourceSync($platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceSyncApi->updateSourceSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  |

### Return type

**\Crossly\Model\Source\ListSourceSyncItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateSourceSyncLocation()`

```php
updateSourceSyncLocation($platform, $update_source_sync_location_request): \Crossly\Model\Source\GetSourceSyncLocationResponse
```

POS only: choose the shop (R-Series) / outlet (X-Series) / Square location whose stock and sales Crossly syncs. Must be one GET .../locations lists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SourceSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string
$update_source_sync_location_request = new \Crossly\Model\Source\UpdateSourceSyncLocationRequest(); // \Crossly\Model\Source\UpdateSourceSyncLocationRequest

try {
    $result = $apiInstance->updateSourceSyncLocation($platform, $update_source_sync_location_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceSyncApi->updateSourceSyncLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  |
 **update_source_sync_location_request** | **\Crossly\Model\Source\UpdateSourceSyncLocationRequest**|  |

### Return type

**\Crossly\Model\Source\GetSourceSyncLocationResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
