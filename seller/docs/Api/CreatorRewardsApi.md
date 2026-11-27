# Crossly\CreatorRewardsApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCreatorRewardFormula()**](CreatorRewardsApi.md#getCreatorRewardFormula) | **GET** /v1/creator-rewards/formula | The Creator Rewards formula: the pool&#39;s share of Crossly&#39;s Crossly Carnival take in force, the counting rules, and any scheduled change (announced at least 90 days ahead).
[**getCreatorRewardMe()**](CreatorRewardsApi.md#getCreatorRewardMe) | **GET** /v1/creator-rewards/me/{month} | One month of your Creator Rewards (YYYY-MM).
[**getPublicCreatorRewardReconciliation()**](CreatorRewardsApi.md#getPublicCreatorRewardReconciliation) | **GET** /v1/public/creator-rewards/reconciliation | Public monthly reconciliation of Creator Rewards (no auth): per month the pool funded from Crossly&#39;s take, carried in, distributed, paid (from the ledger), carried over, the formula version and weights, eligible experiences and every check; plus the formula in force and scheduled changes (90-day notice).
[**listCreatorRewardMe()**](CreatorRewardsApi.md#listCreatorRewardMe) | **GET** /v1/creator-rewards/me | Your Creator Rewards: each month, each experience you own or are paid for (counted minutes and players, exclusions, its amount, your part).
[**listCreatorRewardMonths()**](CreatorRewardsApi.md#listCreatorRewardMonths) | **GET** /v1/creator-rewards/months | Every calculated month: Crossly&#39;s take, the funded share, the pool, what was distributed and carried, counted minutes and exclusions by reason.


## `getCreatorRewardFormula()`

```php
getCreatorRewardFormula(): \Crossly\Model\Creator\GetCreatorRewardFormulaResponse
```

The Creator Rewards formula: the pool's share of Crossly's Crossly Carnival take in force, the counting rules, and any scheduled change (announced at least 90 days ahead).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CreatorRewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCreatorRewardFormula();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorRewardsApi->getCreatorRewardFormula: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Creator\GetCreatorRewardFormulaResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getCreatorRewardMe()`

```php
getCreatorRewardMe($month): \Crossly\Model\Creator\GetCreatorRewardMeResponse
```

One month of your Creator Rewards (YYYY-MM).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CreatorRewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = 'month_example'; // string

try {
    $result = $apiInstance->getCreatorRewardMe($month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorRewardsApi->getCreatorRewardMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **month** | **string**|  |

### Return type

**\Crossly\Model\Creator\GetCreatorRewardMeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getPublicCreatorRewardReconciliation()`

```php
getPublicCreatorRewardReconciliation($limit): \Crossly\Model\Publics\GetPublicCreatorRewardReconciliationResponse
```

Public monthly reconciliation of Creator Rewards (no auth): per month the pool funded from Crossly's take, carried in, distributed, paid (from the ledger), carried over, the formula version and weights, eligible experiences and every check; plus the formula in force and scheduled changes (90-day notice).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Crossly\Api\CreatorRewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Months to return, newest first (default 24).

try {
    $result = $apiInstance->getPublicCreatorRewardReconciliation($limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorRewardsApi->getPublicCreatorRewardReconciliation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Months to return, newest first (default 24). | [optional]

### Return type

**\Crossly\Model\Publics\GetPublicCreatorRewardReconciliationResponse**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listCreatorRewardMe()`

```php
listCreatorRewardMe(): \Crossly\Model\Creator\ListCreatorRewardMeResponse
```

Your Creator Rewards: each month, each experience you own or are paid for (counted minutes and players, exclusions, its amount, your part).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CreatorRewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCreatorRewardMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorRewardsApi->listCreatorRewardMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Creator\ListCreatorRewardMeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listCreatorRewardMonths()`

```php
listCreatorRewardMonths(): \Crossly\Model\Creator\ListCreatorRewardMonthsResponse
```

Every calculated month: Crossly's take, the funded share, the pool, what was distributed and carried, counted minutes and exclusions by reason.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CreatorRewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCreatorRewardMonths();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorRewardsApi->listCreatorRewardMonths: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Creator\ListCreatorRewardMonthsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
