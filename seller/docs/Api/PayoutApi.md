# Crossly\PayoutApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPayoutConnectOnboard()**](PayoutApi.md#createPayoutConnectOnboard) | **POST** /v1/payout/connect/onboard | Start or resume payout-account onboarding; returns a Stripe-hosted URL.
[**getPayoutConnect()**](PayoutApi.md#getPayoutConnect) | **GET** /v1/payout/connect | Your Stripe payout account: status, country, agreement and payout currency.
[**getPayoutEstimate()**](PayoutApi.md#getPayoutEstimate) | **GET** /v1/payout/estimate | What one platform nets at a given price, after fees and shipping.
[**getPayoutGrossForNet()**](PayoutApi.md#getPayoutGrossForNet) | **GET** /v1/payout/gross-for-net | The gross price needed to clear a target net on one platform.
[**listPayoutCompare()**](PayoutApi.md#listPayoutCompare) | **GET** /v1/payout/compare | Rank platforms by what they net at a given price. Defaults to connected ones.


## `createPayoutConnectOnboard()`

```php
createPayoutConnectOnboard($create_payout_connect_onboard_request): \Crossly\Model\Payout\CreatePayoutConnectOnboardResponse
```

Start or resume payout-account onboarding; returns a Stripe-hosted URL.

country (ISO 3166-1 alpha-2) defaults to the storefront ship-from country, then US. Fixed once the account exists. Nothing is set up until a person completes the link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_payout_connect_onboard_request = new \Crossly\Model\Payout\CreatePayoutConnectOnboardRequest(); // \Crossly\Model\Payout\CreatePayoutConnectOnboardRequest

try {
    $result = $apiInstance->createPayoutConnectOnboard($create_payout_connect_onboard_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->createPayoutConnectOnboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_payout_connect_onboard_request** | **\Crossly\Model\Payout\CreatePayoutConnectOnboardRequest**|  |

### Return type

**\Crossly\Model\Payout\CreatePayoutConnectOnboardResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getPayoutConnect()`

```php
getPayoutConnect(): \Crossly\Model\Payout\GetPayoutConnectResponse
```

Your Stripe payout account: status, country, agreement and payout currency.

status is not_started (with defaultCountry), pending, active, restricted or payouts_unavailable. Only active can be paid; payouts_unavailable means Stripe offers no payout path to the account's country yet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPayoutConnect();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->getPayoutConnect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Payout\GetPayoutConnectResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getPayoutEstimate()`

```php
getPayoutEstimate(): \Crossly\Model\Payout\GetPayoutEstimateResponse
```

What one platform nets at a given price, after fees and shipping.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPayoutEstimate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->getPayoutEstimate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Payout\GetPayoutEstimateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getPayoutGrossForNet()`

```php
getPayoutGrossForNet(): \Crossly\Model\Payout\GetPayoutGrossForNetResponse
```

The gross price needed to clear a target net on one platform.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPayoutGrossForNet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->getPayoutGrossForNet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Payout\GetPayoutGrossForNetResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listPayoutCompare()`

```php
listPayoutCompare(): \Crossly\Model\Payout\ListPayoutCompareResponse
```

Rank platforms by what they net at a given price. Defaults to connected ones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listPayoutCompare();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->listPayoutCompare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Payout\ListPayoutCompareResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
