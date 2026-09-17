# Crossly\BillingApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBillingUpgrade()**](BillingApi.md#createBillingUpgrade) | **POST** /v1/billing/upgrade | Start an upgrade to a higher plan.


## `createBillingUpgrade()`

```php
createBillingUpgrade($inline_object): \Crossly\Model\CreateBillingUpgradeResponse
```

Start an upgrade to a higher plan.

Returns a Stripe Checkout URL. Nothing is charged by this call — a person completes the payment. Downgrades and cancellation are not available to a token at all; they stay with the account owner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object = new \Crossly\Model\InlineObject(); // \Crossly\Model\InlineObject

try {
    $result = $apiInstance->createBillingUpgrade($inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->createBillingUpgrade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object** | [**\Crossly\Model\InlineObject**](../Model/InlineObject.md)|  |

### Return type

[**\Crossly\Model\CreateBillingUpgradeResponse**](../Model/CreateBillingUpgradeResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
