# Crossly\Buyer\BuyerCheckoutApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBuyerCheckout()**](BuyerCheckoutApi.md#createBuyerCheckout) | **POST** /v1/buyer/checkout | Buy a listing without being present.
[**getBuyerCheckoutControl()**](BuyerCheckoutApi.md#getBuyerCheckoutControl) | **GET** /v1/buyer/checkout/controls | What this key is allowed to spend.
[**updateBuyerCheckoutControl()**](BuyerCheckoutApi.md#updateBuyerCheckoutControl) | **PUT** /v1/buyer/checkout/controls | Switch this key on for spending, and set its limits.


## `createBuyerCheckout()`

```php
createBuyerCheckout(): \Crossly\Buyer\Model\CreateBuyerCheckoutResponse
```

Buy a listing without being present.

An Idempotency-Key header is REQUIRED — this endpoint refuses without one, because a retried request would otherwise buy the item twice and a retry is the most likely thing an automated buyer does. Derive the key from what you are buying and reuse it across retries; a fresh random value per attempt satisfies the check and keeps the bug. The item is QUOTED first and the delivered total is checked against both your maxTotalCents and this key's limits before anything is charged. A card that demands 3-D Secure cannot be charged unattended; that answers 402 with `authentication_required` and the purchase must be finished on Crossly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createBuyerCheckout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCheckoutApi->createBuyerCheckout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Buyer\Model\CreateBuyerCheckoutResponse**](../Model/CreateBuyerCheckoutResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBuyerCheckoutControl()`

```php
getBuyerCheckoutControl(): \Crossly\Buyer\Model\GetBuyerCheckoutControlResponse
```

What this key is allowed to spend.

Reports the controls for the key making the call — not for your account. Every key has its own switch and its own limits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBuyerCheckoutControl();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCheckoutApi->getBuyerCheckoutControl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Buyer\Model\GetBuyerCheckoutControlResponse**](../Model/GetBuyerCheckoutControlResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBuyerCheckoutControl()`

```php
updateBuyerCheckoutControl(): \Crossly\Buyer\Model\UpdateBuyerCheckoutControlResponse
```

Switch this key on for spending, and set its limits.

A key can only ever raise or lower ITS OWN limits, and only if the token already carries buyer:checkout:write. Turning it off takes effect immediately.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateBuyerCheckoutControl();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCheckoutApi->updateBuyerCheckoutControl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Buyer\Model\UpdateBuyerCheckoutControlResponse**](../Model/UpdateBuyerCheckoutControlResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
