# Crossly\OffersApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOfferRespond()**](OffersApi.md#createOfferRespond) | **POST** /v1/offers/{id}/respond | Accept, decline, or counter a buyer offer on a Crossly marketplace listing.
[**getOffer()**](OffersApi.md#getOffer) | **GET** /v1/offers | List buyer offers on your Crossly marketplace listings, including bundles.


## `createOfferRespond()`

```php
createOfferRespond($id, $inline_object2): \Crossly\Model\CreateOfferRespondResponse
```

Accept, decline, or counter a buyer offer on a Crossly marketplace listing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Offer UUID.
$inline_object2 = new \Crossly\Model\InlineObject2(); // \Crossly\Model\InlineObject2

try {
    $result = $apiInstance->createOfferRespond($id, $inline_object2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->createOfferRespond: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Offer UUID. |
 **inline_object2** | [**\Crossly\Model\InlineObject2**](../Model/InlineObject2.md)|  |

### Return type

[**\Crossly\Model\CreateOfferRespondResponse**](../Model/CreateOfferRespondResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffer()`

```php
getOffer($status, $limit): \Crossly\Model\GetOfferResponse
```

List buyer offers on your Crossly marketplace listings, including bundles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string | Filter to one status. Omit for all.
$limit = 50; // int

try {
    $result = $apiInstance->getOffer($status, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->getOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Filter to one status. Omit for all. | [optional]
 **limit** | **int**|  | [optional] [default to 50]

### Return type

[**\Crossly\Model\GetOfferResponse**](../Model/GetOfferResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
