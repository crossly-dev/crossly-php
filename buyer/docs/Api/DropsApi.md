# Crossly\Buyer\DropsApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBuyerDropJoin()**](DropsApi.md#createBuyerDropJoin) | **POST** /v1/buyer/drops/{id}/join | Join a drop&#39;s line while it is open: one entry per account, the same odds as joining in the world. Repeating it returns the same entry.
[**deleteBuyerDropJoin()**](DropsApi.md#deleteBuyerDropJoin) | **DELETE** /v1/buyer/drops/{id}/join | Leave a drop&#39;s line before the draw.
[**getBuyerDropMe()**](DropsApi.md#getBuyerDropMe) | **GET** /v1/buyer/drops/{id}/me | Your entry in a drop: in line or not, your draw rank and outcome, and the checkout path while your 15-minute hold is live.


## `createBuyerDropJoin()`

```php
createBuyerDropJoin($id): \Crossly\Buyer\Model\Common\CreateBuyerDropJoinResponse
```

Join a drop's line while it is open: one entry per account, the same odds as joining in the world. Repeating it returns the same entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\DropsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerDropJoin($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DropsApi->createBuyerDropJoin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\CreateBuyerDropJoinResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerDropJoin()`

```php
deleteBuyerDropJoin($id): \Crossly\Buyer\Model\Common\DeleteBuyerDropJoinResponse
```

Leave a drop's line before the draw.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\DropsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteBuyerDropJoin($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DropsApi->deleteBuyerDropJoin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\DeleteBuyerDropJoinResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerDropMe()`

```php
getBuyerDropMe($id): \Crossly\Buyer\Model\Common\GetBuyerDropMeResponse
```

Your entry in a drop: in line or not, your draw rank and outcome, and the checkout path while your 15-minute hold is live.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\DropsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBuyerDropMe($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DropsApi->getBuyerDropMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\GetBuyerDropMeResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
