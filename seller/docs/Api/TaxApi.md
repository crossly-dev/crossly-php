# Crossly\TaxApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMileage()**](TaxApi.md#createMileage) | **POST** /v1/mileage | Create a mileage entry.
[**deleteMileage()**](TaxApi.md#deleteMileage) | **DELETE** /v1/mileage/{id} | Delete a mileage entry.
[**getMileageSummary()**](TaxApi.md#getMileageSummary) | **GET** /v1/mileage/summary | Annual mileage totals + IRS deduction.
[**getTaxScheduleC()**](TaxApi.md#getTaxScheduleC) | **GET** /v1/tax/schedule-c | Schedule C JSON for a tax year.
[**listMileage()**](TaxApi.md#listMileage) | **GET** /v1/mileage | List mileage entries.
[**updateMileage()**](TaxApi.md#updateMileage) | **PATCH** /v1/mileage/{id} | Update a mileage entry.


## `createMileage()`

```php
createMileage(): \Crossly\Model\CreateMileageResponse
```

Create a mileage entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createMileage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->createMileage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateMileageResponse**](../Model/CreateMileageResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMileage()`

```php
deleteMileage($id): \Crossly\Model\DeleteMileageResponse
```

Delete a mileage entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteMileage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->deleteMileage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Crossly\Model\DeleteMileageResponse**](../Model/DeleteMileageResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMileageSummary()`

```php
getMileageSummary(): \Crossly\Model\GetMileageSummaryResponse
```

Annual mileage totals + IRS deduction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMileageSummary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->getMileageSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\GetMileageSummaryResponse**](../Model/GetMileageSummaryResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxScheduleC()`

```php
getTaxScheduleC(): \Crossly\Model\GetTaxScheduleCResponse
```

Schedule C JSON for a tax year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTaxScheduleC();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->getTaxScheduleC: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\GetTaxScheduleCResponse**](../Model/GetTaxScheduleCResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMileage()`

```php
listMileage(): V1List
```

List mileage entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listMileage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->listMileage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `updateMileage()`

```php
updateMileage($id): \Crossly\Model\UpdateMileageResponse
```

Update a mileage entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateMileage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->updateMileage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Crossly\Model\UpdateMileageResponse**](../Model/UpdateMileageResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
