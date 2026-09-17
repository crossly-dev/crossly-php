# Crossly\Buyer\BuyerMonitorsApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBuyerMonitor()**](BuyerMonitorsApi.md#createBuyerMonitor) | **POST** /v1/buyer/monitors | Watch a search, and be told when it matches.
[**deleteBuyerMonitor()**](BuyerMonitorsApi.md#deleteBuyerMonitor) | **DELETE** /v1/buyer/monitors/{id} | Delete a monitor.
[**listBuyerMonitorMatches()**](BuyerMonitorsApi.md#listBuyerMonitorMatches) | **GET** /v1/buyer/monitors/{id}/matches | What this monitor has matched.
[**listBuyerMonitors()**](BuyerMonitorsApi.md#listBuyerMonitors) | **GET** /v1/buyer/monitors | Your monitors.
[**updateBuyerMonitor()**](BuyerMonitorsApi.md#updateBuyerMonitor) | **PATCH** /v1/buyer/monitors/{id} | Pause, resume or rename a monitor.


## `createBuyerMonitor()`

```php
createBuyerMonitor(): \Crossly\Buyer\Model\CreateBuyerMonitorResponse
```

Watch a search, and be told when it matches.

Works immediately — there is no review step. The signing secret is returned ONCE, here; it is never readable again. The first sweep SEEDS without firing: a restock alert created while the item is already in stock has not observed a restock, and a new-listing monitor would otherwise deliver the entire back catalogue.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerMonitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createBuyerMonitor();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerMonitorsApi->createBuyerMonitor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Buyer\Model\CreateBuyerMonitorResponse**](../Model/CreateBuyerMonitorResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBuyerMonitor()`

```php
deleteBuyerMonitor($id)
```

Delete a monitor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerMonitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteBuyerMonitor($id);
} catch (Exception $e) {
    echo 'Exception when calling BuyerMonitorsApi->deleteBuyerMonitor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBuyerMonitorMatches()`

```php
listBuyerMonitorMatches($id): V1List
```

What this monitor has matched.

The read side of a `poll` monitor, and an audit trail for a `webhook` one — so a missed delivery does not mean lost data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerMonitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listBuyerMonitorMatches($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerMonitorsApi->listBuyerMonitorMatches: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBuyerMonitors()`

```php
listBuyerMonitors(): V1List
```

Your monitors.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerMonitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listBuyerMonitors();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerMonitorsApi->listBuyerMonitors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBuyerMonitor()`

```php
updateBuyerMonitor($id): \Crossly\Buyer\Model\UpdateBuyerMonitorResponse
```

Pause, resume or rename a monitor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerMonitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateBuyerMonitor($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerMonitorsApi->updateBuyerMonitor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Crossly\Buyer\Model\UpdateBuyerMonitorResponse**](../Model/UpdateBuyerMonitorResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
