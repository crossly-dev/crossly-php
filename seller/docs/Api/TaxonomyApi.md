# Crossly\TaxonomyApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCategoryById()**](TaxonomyApi.md#getCategoryById) | **GET** /v1/categories/{id} | One canonical category and the category it maps to on each marketplace.
[**getTaxonomyCategory()**](TaxonomyApi.md#getTaxonomyCategory) | **GET** /v1/taxonomy/{platform}/categories | Categories for a platform. Default is top-level; pass &#x60;?parent&#x3D;&lt;categoryId&gt;&#x60; to drill down one level (supported on cookie platforms whose recipe returns flat parent_id-linked rows).
[**getTaxonomyCategoryAspect()**](TaxonomyApi.md#getTaxonomyCategoryAspect) | **GET** /v1/taxonomy/{platform}/categories/{id}/aspects | Item-specific aspects (eBay) / properties (Etsy) / hard-coded enums (cookie platforms) for a category.
[**getTaxonomyCategoryChildren()**](TaxonomyApi.md#getTaxonomyCategoryChildren) | **GET** /v1/taxonomy/{platform}/categories/{id}/children | Direct children of a category node.
[**getTaxonomyRequiredField()**](TaxonomyApi.md#getTaxonomyRequiredField) | **GET** /v1/taxonomy/{platform}/required-fields | Normalized field schema the seller needs to fill before crossposting to this platform. Combines master fields (title/description/price/condition) with platform-specific overrides.
[**listCategoryAspects()**](TaxonomyApi.md#listCategoryAspects) | **GET** /v1/categories/{id}/aspects | Item specifics for a canonical category: required/optional, known values, per-marketplace names.
[**listCategorySearch()**](TaxonomyApi.md#listCategorySearch) | **GET** /v1/categories/search | Search or browse Crossly&#39;s canonical categories (the ids listings take as categoryId).
[**listTaxonomyEbayCharities()**](TaxonomyApi.md#listTaxonomyEbayCharities) | **GET** /v1/taxonomy/ebay/charities | Search eBay for Charity organisations (the charityId an eBay listing donates to).
[**listTaxonomySuggest()**](TaxonomyApi.md#listTaxonomySuggest) | **GET** /v1/taxonomy/{platform}/suggest | Reverse lookup — suggest categories matching a search phrase: eBay live; Poshmark, Mercari, Depop, Grailed, Vinted, Whatnot, Vestiaire, OfferUp, Facebook and Curtsy over their harvested trees. Etsy answers an empty list (browse its tree instead).


## `getCategoryById()`

```php
getCategoryById($id): \Crossly\Model\Category\GetCategoryByIdResponse
```

One canonical category and the category it maps to on each marketplace.

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->getCategoryById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxonomyApi->getCategoryById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Category\GetCategoryByIdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTaxonomyCategory()`

```php
getTaxonomyCategory($platform, $parent): \Crossly\Model\Taxonomy\GetTaxonomyCategoryResponse
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

**\Crossly\Model\Taxonomy\GetTaxonomyCategoryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTaxonomyCategoryAspect()`

```php
getTaxonomyCategoryAspect($platform, $id): \Crossly\Model\Taxonomy\GetTaxonomyCategoryAspectResponse
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

**\Crossly\Model\Taxonomy\GetTaxonomyCategoryAspectResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTaxonomyCategoryChildren()`

```php
getTaxonomyCategoryChildren($platform, $id): \Crossly\Model\Taxonomy\GetTaxonomyCategoryChildrenResponse
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

**\Crossly\Model\Taxonomy\GetTaxonomyCategoryChildrenResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTaxonomyRequiredField()`

```php
getTaxonomyRequiredField($platform, $category_id): \Crossly\Model\Taxonomy\GetTaxonomyRequiredFieldResponse
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

**\Crossly\Model\Taxonomy\GetTaxonomyRequiredFieldResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listCategoryAspects()`

```php
listCategoryAspects($id, $values_limit): \Crossly\Model\Category\ListCategoryAspectsResponse
```

Item specifics for a canonical category: required/optional, known values, per-marketplace names.

Required-ness and cardinality come from the eBay category the concept maps to. `freeText` = any text is accepted; otherwise `values` are the known values (up to `valuesLimit`). `marketplaces` gives the attribute name each marketplace uses for the aspect. Send them as `itemSpecifics` on POST /v1/listings.

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
$id = 'id_example'; // string
$values_limit = 50; // int

try {
    $result = $apiInstance->listCategoryAspects($id, $values_limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxonomyApi->listCategoryAspects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **values_limit** | **int**|  | [optional] [default to 50]

### Return type

**\Crossly\Model\Category\ListCategoryAspectsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listCategorySearch()`

```php
listCategorySearch($q, $path, $limit): \Crossly\Model\Category\ListCategorySearchResponse
```

Search or browse Crossly's canonical categories (the ids listings take as categoryId).

`q` matches the category name and path. `path` (e.g. \"Clothing & Shoes > Men\") limits to one branch. Without `q`, `meta.branches` lists the next level under `path` (the root when omitted) so a client can walk the tree down to a leaf.

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
$q = 'q_example'; // string
$path = 'path_example'; // string
$limit = 25; // int

try {
    $result = $apiInstance->listCategorySearch($q, $path, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxonomyApi->listCategorySearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  | [optional]
 **path** | **string**|  | [optional]
 **limit** | **int**|  | [optional] [default to 25]

### Return type

**\Crossly\Model\Category\ListCategorySearchResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listTaxonomyEbayCharities()`

```php
listTaxonomyEbayCharities($q, $limit, $marketplace): \Crossly\Model\Taxonomy\ListTaxonomyEbayCharitiesResponse
```

Search eBay for Charity organisations (the charityId an eBay listing donates to).

Send the chosen `charityOrgId` as `overrides.ebay.charityId` with `overrides.ebay.donationPercentage` (10-100 in steps of 5) on a listing to donate that share of the eBay sale. `q` needs at least 2 characters.

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
$q = 'q_example'; // string
$limit = 20; // int
$marketplace = 'EBAY_US'; // string

try {
    $result = $apiInstance->listTaxonomyEbayCharities($q, $limit, $marketplace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxonomyApi->listTaxonomyEbayCharities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **marketplace** | **string**|  | [optional] [default to &#39;EBAY_US&#39;]

### Return type

**\Crossly\Model\Taxonomy\ListTaxonomyEbayCharitiesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listTaxonomySuggest()`

```php
listTaxonomySuggest($platform, $q): \Crossly\Model\Taxonomy\ListTaxonomySuggestResponse
```

Reverse lookup — suggest categories matching a search phrase: eBay live; Poshmark, Mercari, Depop, Grailed, Vinted, Whatnot, Vestiaire, OfferUp, Facebook and Curtsy over their harvested trees. Etsy answers an empty list (browse its tree instead).

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

**\Crossly\Model\Taxonomy\ListTaxonomySuggestResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
