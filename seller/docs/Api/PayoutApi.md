# Crossly\PayoutApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPayoutConnectOnboard()**](PayoutApi.md#createPayoutConnectOnboard) | **POST** /v1/payout/connect/onboard | Start or resume payout-account onboarding; returns a Stripe-hosted URL.
[**createPayoutIdentityLink()**](PayoutApi.md#createPayoutIdentityLink) | **POST** /v1/payouts/identity/link | Continue with Stripe: a one-time Stripe-hosted link that collects what Stripe needs.
[**createPayoutPayout()**](PayoutApi.md#createPayoutPayout) | **POST** /v1/payout/payouts | Pay out now: instant (fee, minutes, to an eligible card/bank) or standard (free, manual schedule only).
[**getPayoutConnect()**](PayoutApi.md#getPayoutConnect) | **GET** /v1/payout/connect | Your Stripe payout account: status, country, agreement and payout currency.
[**getPayoutEstimate()**](PayoutApi.md#getPayoutEstimate) | **GET** /v1/payout/estimate | What one platform nets at a given price, after fees and shipping.
[**getPayoutGrossForNet()**](PayoutApi.md#getPayoutGrossForNet) | **GET** /v1/payout/gross-for-net | The gross price needed to clear a target net on one platform.
[**getPayoutIdentity()**](PayoutApi.md#getPayoutIdentity) | **GET** /v1/payouts/identity | Stripe&#39;s verification of your payout account: status and what Stripe still needs, in plain words.
[**getPayoutWallet()**](PayoutApi.md#getPayoutWallet) | **GET** /v1/payout/wallet | Your payout wallet: balances, schedule, next payout, instant-payout quote, methods, payouts, transactions.
[**listPayoutCompare()**](PayoutApi.md#listPayoutCompare) | **GET** /v1/payout/compare | Rank platforms by what they net at a given price. Defaults to connected ones.
[**updatePayoutSchedule()**](PayoutApi.md#updatePayoutSchedule) | **PUT** /v1/payout/schedule | Change the automatic payout schedule.


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

## `createPayoutIdentityLink()`

```php
createPayoutIdentityLink($create_payout_connect_onboard_request): \Crossly\Model\Payout\CreatePayoutIdentityLinkResponse
```

Continue with Stripe: a one-time Stripe-hosted link that collects what Stripe needs.

Creates the payout account first when there is none (country: ISO alpha-2, default the ship-from country). type is account_onboarding (Stripe shows only what is outstanding) or account_update. The link expires in minutes; ask for a new one rather than storing it. Nothing changes until a person completes it.

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
    $result = $apiInstance->createPayoutIdentityLink($create_payout_connect_onboard_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->createPayoutIdentityLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_payout_connect_onboard_request** | **\Crossly\Model\Payout\CreatePayoutConnectOnboardRequest**|  |

### Return type

**\Crossly\Model\Payout\CreatePayoutIdentityLinkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createPayoutPayout()`

```php
createPayoutPayout($create_payout_payout_request): \Crossly\Model\Payout\CreatePayoutPayoutResponse
```

Pay out now: instant (fee, minutes, to an eligible card/bank) or standard (free, manual schedule only).

amountCents defaults to everything eligible. Pass idempotencyKey so a retry is the same payout. Returns { payout, feeCents }. 409 when the account cannot be paid or instant is unavailable.

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
$create_payout_payout_request = new \Crossly\Model\Payout\CreatePayoutPayoutRequest(); // \Crossly\Model\Payout\CreatePayoutPayoutRequest

try {
    $result = $apiInstance->createPayoutPayout($create_payout_payout_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->createPayoutPayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_payout_payout_request** | **\Crossly\Model\Payout\CreatePayoutPayoutRequest**|  |

### Return type

**\Crossly\Model\Payout\CreatePayoutPayoutResponse**

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

## `getPayoutIdentity()`

```php
getPayoutIdentity($fresh): \Crossly\Model\Payout\GetPayoutIdentityResponse
```

Stripe's verification of your payout account: status and what Stripe still needs, in plain words.

status is not_started, pending (Stripe is checking), action_required (dueNow lists what to add), verified (payouts on) or restricted (disabledReasonText says why). dueNow / dueLater / inReview are Stripe's requirement keys as plain-words lines ({ keys, label }); errors carry Stripe's reason. Cached up to 60 s; fresh=1 re-reads Stripe. Payouts are gated on payoutsEnabled only.

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
$fresh = 'fresh_example'; // string

try {
    $result = $apiInstance->getPayoutIdentity($fresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->getPayoutIdentity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fresh** | **string**|  | [optional]

### Return type

**\Crossly\Model\Payout\GetPayoutIdentityResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getPayoutWallet()`

```php
getPayoutWallet(): \Crossly\Model\Payout\GetPayoutWalletResponse
```

Your payout wallet: balances, schedule, next payout, instant-payout quote, methods, payouts, transactions.

connected:false (with defaultCountry) before onboarding. balance has availableCents, pendingCents and instantAvailableCents in the account currency. instant.available says whether an instant payout can be made now, with feeCents/netCents for the full instant-available amount and reason when not.

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
    $result = $apiInstance->getPayoutWallet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->getPayoutWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Payout\GetPayoutWalletResponse**

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

## `updatePayoutSchedule()`

```php
updatePayoutSchedule($update_payout_schedule_request): \Crossly\Model\Payout\UpdatePayoutScheduleResponse
```

Change the automatic payout schedule.

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
$update_payout_schedule_request = new \Crossly\Model\Payout\UpdatePayoutScheduleRequest(); // \Crossly\Model\Payout\UpdatePayoutScheduleRequest

try {
    $result = $apiInstance->updatePayoutSchedule($update_payout_schedule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->updatePayoutSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_payout_schedule_request** | **\Crossly\Model\Payout\UpdatePayoutScheduleRequest**|  |

### Return type

**\Crossly\Model\Payout\UpdatePayoutScheduleResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
