# Crossly\NetworkApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNetworkPool()**](NetworkApi.md#createNetworkPool) | **POST** /v1/network/pool | Join the Crossly Network reciprocal engagement pool.
[**deleteNetworkPool()**](NetworkApi.md#deleteNetworkPool) | **DELETE** /v1/network/pool | Leave the Crossly Network pool.
[**getNetworkPool()**](NetworkApi.md#getNetworkPool) | **GET** /v1/network/pool | The seller&#39;s Crossly Network pool membership row.
[**getNetworkPoolSize()**](NetworkApi.md#getNetworkPoolSize) | **GET** /v1/network/pool/size | Total members in the Crossly Network pool.
[**listNetworkPoolLog()**](NetworkApi.md#listNetworkPoolLog) | **GET** /v1/network/pool/log | Recent engagement history — both sent and received.
[**updateNetworkPool()**](NetworkApi.md#updateNetworkPool) | **PATCH** /v1/network/pool | Update per-action toggles + platforms on pool membership.


## `createNetworkPool()`

```php
createNetworkPool(): \Crossly\Model\Network\CreateNetworkPoolResponse
```

Join the Crossly Network reciprocal engagement pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createNetworkPool();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->createNetworkPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Network\CreateNetworkPoolResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteNetworkPool()`

```php
deleteNetworkPool(): \Crossly\Model\Common\OkResponse
```

Leave the Crossly Network pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteNetworkPool();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->deleteNetworkPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\OkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getNetworkPool()`

```php
getNetworkPool(): \Crossly\Model\Network\GetNetworkPoolResponse
```

The seller's Crossly Network pool membership row.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getNetworkPool();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->getNetworkPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Network\GetNetworkPoolResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getNetworkPoolSize()`

```php
getNetworkPoolSize(): \Crossly\Model\Network\GetNetworkPoolSizeResponse
```

Total members in the Crossly Network pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getNetworkPoolSize();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->getNetworkPoolSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Network\GetNetworkPoolSizeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listNetworkPoolLog()`

```php
listNetworkPoolLog($limit): \Crossly\Model\Network\ListNetworkPoolLogResponse
```

Recent engagement history — both sent and received.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int

try {
    $result = $apiInstance->listNetworkPoolLog($limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->listNetworkPoolLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional] [default to 100]

### Return type

**\Crossly\Model\Network\ListNetworkPoolLogResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateNetworkPool()`

```php
updateNetworkPool(): \Crossly\Model\Common\OkResponse
```

Update per-action toggles + platforms on pool membership.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateNetworkPool();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->updateNetworkPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\OkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
