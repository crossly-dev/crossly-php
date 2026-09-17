# Crossly\TaxonomyApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTaxonomyCategory()**](TaxonomyApi.md#getTaxonomyCategory) | **GET** /v1/taxonomy/{platform}/categories | Categories for a platform. Default is top-level; pass &#x60;?parent&#x3D;&lt;categoryId&gt;&#x60; to drill down one level (supported on cookie platforms whose recipe returns flat parent_id-linked rows).
[**getTaxonomyCategoryAspect()**](TaxonomyApi.md#getTaxonomyCategoryAspect) | **GET** /v1/taxonomy/{platform}/categories/{id}/aspects | Item-specific aspects (eBay) / properties (Etsy) / hard-coded enums (cookie platforms) for a category.
[**getTaxonomyCategoryChildren()**](TaxonomyApi.md#getTaxonomyCategoryChildren) | **GET** /v1/taxonomy/{platform}/categories/{id}/children | Direct children of a category node.
[**getTaxonomyRequiredField()**](TaxonomyApi.md#getTaxonomyRequiredField) | **GET** /v1/taxonomy/{platform}/required-fields | Normalized field schema the seller needs to fill before crossposting to this platform. Combines master fields (title/description/price/condition) with platform-specific overrides.
[**listTaxonomySuggest()**](TaxonomyApi.md#listTaxonomySuggest) | **GET** /v1/taxonomy/{platform}/suggest | Reverse lookup — suggest categories matching a search phrase. eBay-only today.


## `getTaxonomyCategory()`

```php
getTaxonomyCategory($platform, $parent): \Crossly\Model\GetTaxonomyCategoryResponse
```

Categories for a platform. Default is top-level; pass `?parent=<categoryId>` to drill down one level (supported on cookie platforms whose recipe returns flat parent_id-linked rows).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TaxonomyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string
$parent = 'parent_example'; // string

try {
    $result = $apiInstance->getTaxonomyCategory($platform, $parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxonomyApi->getTaxonomyCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  |
 **parent** | **string**|  | [optional]

### Return type

[**\Crossly\Model\GetTaxonomyCategoryResponse**](../Model/GetTaxonomyCategoryResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxonomyCategoryAspect()`

```php
getTaxonomyCategoryAspect($platform, $id): \Crossly\Model\GetTaxonomyCategoryAspectResponse
```

Item-specific aspects (eBay) / properties (Etsy) / hard-coded enums (cookie platforms) for a category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TaxonomyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->getTaxonomyCategoryAspect($platform, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxonomyApi->getTaxonomyCategoryAspect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Crossly\Model\GetTaxonomyCategoryAspectResponse**](../Model/GetTaxonomyCategoryAspectResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxonomyCategoryChildren()`

```php
getTaxonomyCategoryChildren($platform, $id): \Crossly\Model\GetTaxonomyCategoryChildrenResponse
```

Direct children of a category node.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TaxonomyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->getTaxonomyCategoryChildren($platform, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxonomyApi->getTaxonomyCategoryChildren: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Crossly\Model\GetTaxonomyCategoryChildrenResponse**](../Model/GetTaxonomyCategoryChildrenResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxonomyRequiredField()`

```php
getTaxonomyRequiredField($platform, $category_id): \Crossly\Model\GetTaxonomyRequiredFieldResponse
```

Normalized field schema the seller needs to fill before crossposting to this platform. Combines master fields (title/description/price/condition) with platform-specific overrides.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TaxonomyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string
$category_id = 'category_id_example'; // string | Optional — used to inline aspects when present.

try {
    $result = $apiInstance->getTaxonomyRequiredField($platform, $category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxonomyApi->getTaxonomyRequiredField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  |
 **category_id** | **string**| Optional — used to inline aspects when present. | [optional]

### Return type

[**\Crossly\Model\GetTaxonomyRequiredFieldResponse**](../Model/GetTaxonomyRequiredFieldResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTaxonomySuggest()`

```php
listTaxonomySuggest($platform, $q): V1List
```

Reverse lookup — suggest categories matching a search phrase. eBay-only today.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TaxonomyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string
$q = 'q_example'; // string

try {
    $result = $apiInstance->listTaxonomySuggest($platform, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxonomyApi->listTaxonomySuggest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  |
 **q** | **string**|  | [optional]

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
