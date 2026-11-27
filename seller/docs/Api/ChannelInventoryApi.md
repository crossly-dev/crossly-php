# Crossly\ChannelInventoryApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteChannelInventory()**](ChannelInventoryApi.md#deleteChannelInventory) | **DELETE** /v1/channel-inventory/{platform}/{slot} | Reset a channel&#39;s inventory controls to the default (no cap, no buffer, sync on, end on sell-out).
[**getChannelInventory()**](ChannelInventoryApi.md#getChannelInventory) | **GET** /v1/channel-inventory/{platform}/{slot} | Get one channel&#39;s inventory controls.
[**listChannelInventory()**](ChannelInventoryApi.md#listChannelInventory) | **GET** /v1/channel-inventory | List every sales channel with its inventory controls (cap, buffer, sync, out-of-stock action, exclusions).
[**updateChannelInventory()**](ChannelInventoryApi.md#updateChannelInventory) | **PUT** /v1/channel-inventory/{platform}/{slot} | Set a channel&#39;s quantity cap, buffer, sync toggle, out-of-stock action and exclusion lists (merge write).


## `deleteChannelInventory()`

```php
deleteChannelInventory($platform, $slot): \Crossly\Model\Channel\ListChannelInventoryItem
```

Reset a channel's inventory controls to the default (no cap, no buffer, sync on, end on sell-out).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ChannelInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string
$slot = 56; // int

try {
    $result = $apiInstance->deleteChannelInventory($platform, $slot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelInventoryApi->deleteChannelInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  |
 **slot** | **int**|  |

### Return type

**\Crossly\Model\Channel\ListChannelInventoryItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getChannelInventory()`

```php
getChannelInventory($platform, $slot): \Crossly\Model\Channel\ListChannelInventoryItem
```

Get one channel's inventory controls.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ChannelInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string
$slot = 56; // int

try {
    $result = $apiInstance->getChannelInventory($platform, $slot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelInventoryApi->getChannelInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  |
 **slot** | **int**|  |

### Return type

**\Crossly\Model\Channel\ListChannelInventoryItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listChannelInventory()`

```php
listChannelInventory(): \Crossly\Model\Channel\ListChannelInventoryResponse
```

List every sales channel with its inventory controls (cap, buffer, sync, out-of-stock action, exclusions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ChannelInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listChannelInventory();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelInventoryApi->listChannelInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Channel\ListChannelInventoryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateChannelInventory()`

```php
updateChannelInventory($platform, $slot): \Crossly\Model\Channel\ListChannelInventoryItem
```

Set a channel's quantity cap, buffer, sync toggle, out-of-stock action and exclusion lists (merge write).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ChannelInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string
$slot = 56; // int

try {
    $result = $apiInstance->updateChannelInventory($platform, $slot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelInventoryApi->updateChannelInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  |
 **slot** | **int**|  |

### Return type

**\Crossly\Model\Channel\ListChannelInventoryItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
