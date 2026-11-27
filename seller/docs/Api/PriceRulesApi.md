# Crossly\PriceRulesApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPriceRulePreview()**](PriceRulesApi.md#createPriceRulePreview) | **POST** /v1/price-rules/preview | Compute the price each marketplace would list a listing (or a price) at.
[**deletePriceRule()**](PriceRulesApi.md#deletePriceRule) | **DELETE** /v1/price-rules/{id} | Delete a price rule.
[**listPriceRules()**](PriceRulesApi.md#listPriceRules) | **GET** /v1/price-rules | List the seller&#39;s per-channel price rules.
[**updatePriceRule()**](PriceRulesApi.md#updatePriceRule) | **PUT** /v1/price-rules | Create or replace the price rule for a platform (and optional account / category).
[**updatePriceRuleById()**](PriceRulesApi.md#updatePriceRuleById) | **PATCH** /v1/price-rules/{id} | Update a price rule.


## `createPriceRulePreview()`

```php
createPriceRulePreview(): \Crossly\Model\Common\CreatePriceRulePreviewResponse
```

Compute the price each marketplace would list a listing (or a price) at.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\PriceRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createPriceRulePreview();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceRulesApi->createPriceRulePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\CreatePriceRulePreviewResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deletePriceRule()`

```php
deletePriceRule($id): \Crossly\Model\Common\OkResponse
```

Delete a price rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\PriceRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deletePriceRule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceRulesApi->deletePriceRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\OkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listPriceRules()`

```php
listPriceRules($platform): \Crossly\Model\Common\ListPriceRulesResponse
```

List the seller's per-channel price rules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\PriceRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string

try {
    $result = $apiInstance->listPriceRules($platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceRulesApi->listPriceRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  | [optional]

### Return type

**\Crossly\Model\Common\ListPriceRulesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updatePriceRule()`

```php
updatePriceRule(): \Crossly\Model\Common\ListPriceRulesItem
```

Create or replace the price rule for a platform (and optional account / category).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\PriceRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updatePriceRule();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceRulesApi->updatePriceRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\ListPriceRulesItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updatePriceRuleById()`

```php
updatePriceRuleById($id): \Crossly\Model\Common\ListPriceRulesItem
```

Update a price rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\PriceRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updatePriceRuleById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceRulesApi->updatePriceRuleById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\ListPriceRulesItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
