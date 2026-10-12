# Crossly\OffersApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOfferRespond()**](OffersApi.md#createOfferRespond) | **POST** /v1/offers/{id}/respond | Accept, decline, or counter a buyer offer on a Crossly marketplace listing.
[**getOffer()**](OffersApi.md#getOffer) | **GET** /v1/offers | List buyer offers on your Crossly marketplace listings, including bundles.


## `createOfferRespond()`

```php
createOfferRespond($id, $create_offer_respond_request): \Crossly\Model\Common\CreateOfferRespondResponse
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
$create_offer_respond_request = new \Crossly\Model\Common\CreateOfferRespondRequest(); // \Crossly\Model\Common\CreateOfferRespondRequest

try {
    $result = $apiInstance->createOfferRespond($id, $create_offer_respond_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->createOfferRespond: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Offer UUID. |
 **create_offer_respond_request** | **\Crossly\Model\Common\CreateOfferRespondRequest**|  |

### Return type

**\Crossly\Model\Common\CreateOfferRespondResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getOffer()`

```php
getOffer($status, $limit): \Crossly\Model\Common\GetOfferResponse
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

**\Crossly\Model\Common\GetOfferResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
