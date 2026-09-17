# Crossly\SourcingApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSourcingReceipt()**](SourcingApi.md#createSourcingReceipt) | **POST** /v1/sourcing/receipts | Append a parsed receipt to the sourcing ledger.
[**getSourcingReceipt()**](SourcingApi.md#getSourcingReceipt) | **GET** /v1/sourcing/receipts | List parsed sourcing receipts in this user&#39;s ledger.
[**listSourcingDemand()**](SourcingApi.md#listSourcingDemand) | **GET** /v1/sourcing/demand | Items buyers looked for on other sites that Crossly did not have.
[**listSourcingDemandMine()**](SourcingApi.md#listSourcingDemandMine) | **GET** /v1/sourcing/demand/mine | Unmet buyer demand for items you hold or have sold before.


## `createSourcingReceipt()`

```php
createSourcingReceipt(): \Crossly\Model\CreateSourcingReceiptResponse
```

Append a parsed receipt to the sourcing ledger.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SourcingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createSourcingReceipt();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcingApi->createSourcingReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateSourcingReceiptResponse**](../Model/CreateSourcingReceiptResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSourcingReceipt()`

```php
getSourcingReceipt(): \Crossly\Model\GetSourcingReceiptResponse
```

List parsed sourcing receipts in this user's ledger.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SourcingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSourcingReceipt();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcingApi->getSourcingReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\GetSourcingReceiptResponse**](../Model/GetSourcingReceiptResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSourcingDemand()`

```php
listSourcingDemand($days, $min_looks, $limit): V1List
```

Items buyers looked for on other sites that Crossly did not have.

Aggregate demand observed by the Scout extension, ranked by MISSES — the times somebody asked and we had nothing. `medianPageCents` is what the retailers were charging, which is the number to source against. Anonymous in every case; there is no per-buyer view of this.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SourcingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$days = 30; // int
$min_looks = 3; // int
$limit = 50; // int

try {
    $result = $apiInstance->listSourcingDemand($days, $min_looks, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcingApi->listSourcingDemand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **days** | **int**|  | [optional] [default to 30]
 **min_looks** | **int**|  | [optional] [default to 3]
 **limit** | **int**|  | [optional] [default to 50]

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSourcingDemandMine()`

```php
listSourcingDemandMine($days, $min_lookers, $limit): V1List
```

Unmet buyer demand for items you hold or have sold before.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SourcingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$days = 60; // int
$min_lookers = 2; // int
$limit = 25; // int

try {
    $result = $apiInstance->listSourcingDemandMine($days, $min_lookers, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcingApi->listSourcingDemandMine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **days** | **int**|  | [optional] [default to 60]
 **min_lookers** | **int**|  | [optional] [default to 2]
 **limit** | **int**|  | [optional] [default to 25]

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
