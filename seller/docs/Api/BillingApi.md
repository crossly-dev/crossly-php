# Crossly\BillingApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBillingUpgrade()**](BillingApi.md#createBillingUpgrade) | **POST** /v1/billing/upgrade | Start an upgrade to a higher plan.


## `createBillingUpgrade()`

```php
createBillingUpgrade($create_billing_upgrade_request): \Crossly\Model\Common\CreateBillingUpgradeResponse
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
$create_billing_upgrade_request = new \Crossly\Model\Common\CreateBillingUpgradeRequest(); // \Crossly\Model\Common\CreateBillingUpgradeRequest

try {
    $result = $apiInstance->createBillingUpgrade($create_billing_upgrade_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->createBillingUpgrade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_billing_upgrade_request** | **\Crossly\Model\Common\CreateBillingUpgradeRequest**|  |

### Return type

**\Crossly\Model\Common\CreateBillingUpgradeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
