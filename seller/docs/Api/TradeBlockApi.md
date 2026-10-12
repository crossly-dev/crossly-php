# Crossly\TradeBlockApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTradeBlockEvolutionClaim()**](TradeBlockApi.md#createTradeBlockEvolutionClaim) | **POST** /v1/trade-block/evolutions/{id}/claim | Burn COSM and mint the evolved (or set-master) NFT for one of your unlocks.
[**createTradeBlockEvolutionRecipe()**](TradeBlockApi.md#createTradeBlockEvolutionRecipe) | **POST** /v1/trade-block/evolution-recipes | Author a Trade Evolution recipe (a graded item or pair that, when swapped, unlocks a cosmetic you designed). Born unreviewed until ops approves.
[**createTradeBlockOfferRespond()**](TradeBlockApi.md#createTradeBlockOfferRespond) | **POST** /v1/trade-block/offers/{id}/respond | Accept, decline, counter, or withdraw a Trade Block offer.
[**createTradeBlockPostClose()**](TradeBlockApi.md#createTradeBlockPostClose) | **POST** /v1/trade-block/posts/{id}/close | Close one of your posts so it stops taking offers.
[**createTradeBlockPostOffer()**](TradeBlockApi.md#createTradeBlockPostOffer) | **POST** /v1/trade-block/posts/{id}/offers | Respond to a post with a concrete swap: items on each side (0..N), optional cash.
[**createTradeBlockSetRecipe()**](TradeBlockApi.md#createTradeBlockSetRecipe) | **POST** /v1/trade-block/set-recipes | Author a set-completion recipe (a set of items that, once assembled through trading, unlocks a set-master cosmetic you designed). Born unreviewed until ops approves.
[**getTradeBlockEvolution()**](TradeBlockApi.md#getTradeBlockEvolution) | **GET** /v1/trade-block/evolutions | List your Trade Evolution unlocks — completed swaps that unlocked an evolved or set-master NFT you can mint by burning COSM.
[**getTradeBlockPost()**](TradeBlockApi.md#getTradeBlockPost) | **GET** /v1/trade-block/posts | Browse open Trade Block posts (wants + offers) on the Crossly Market.
[**getTradeBlockPostById()**](TradeBlockApi.md#getTradeBlockPostById) | **GET** /v1/trade-block/posts/{id} | Get one Trade Block post with its items and open-offer count.
[**getTradeBlockTrade()**](TradeBlockApi.md#getTradeBlockTrade) | **GET** /v1/trade-block/trades | List the trades you are a party to, newest first.


## `createTradeBlockEvolutionClaim()`

```php
createTradeBlockEvolutionClaim($id): \Crossly\Model\Trade\CreateTradeBlockEvolutionClaimResponse
```

Burn COSM and mint the evolved (or set-master) NFT for one of your unlocks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TradeBlockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createTradeBlockEvolutionClaim($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeBlockApi->createTradeBlockEvolutionClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Trade\CreateTradeBlockEvolutionClaimResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createTradeBlockEvolutionRecipe()`

```php
createTradeBlockEvolutionRecipe(): \Crossly\Model\Trade\CreateTradeBlockEvolutionRecipeResponse
```

Author a Trade Evolution recipe (a graded item or pair that, when swapped, unlocks a cosmetic you designed). Born unreviewed until ops approves.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TradeBlockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createTradeBlockEvolutionRecipe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeBlockApi->createTradeBlockEvolutionRecipe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Trade\CreateTradeBlockEvolutionRecipeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createTradeBlockOfferRespond()`

```php
createTradeBlockOfferRespond($id): \Crossly\Model\Trade\CreateTradeBlockOfferRespondResponse
```

Accept, decline, counter, or withdraw a Trade Block offer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TradeBlockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createTradeBlockOfferRespond($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeBlockApi->createTradeBlockOfferRespond: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Trade\CreateTradeBlockOfferRespondResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createTradeBlockPostClose()`

```php
createTradeBlockPostClose($id): \Crossly\Model\Common\OkResponse
```

Close one of your posts so it stops taking offers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TradeBlockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createTradeBlockPostClose($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeBlockApi->createTradeBlockPostClose: ', $e->getMessage(), PHP_EOL;
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

## `createTradeBlockPostOffer()`

```php
createTradeBlockPostOffer($id): \Crossly\Model\Common\IdResponse
```

Respond to a post with a concrete swap: items on each side (0..N), optional cash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TradeBlockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createTradeBlockPostOffer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeBlockApi->createTradeBlockPostOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\IdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createTradeBlockSetRecipe()`

```php
createTradeBlockSetRecipe(): \Crossly\Model\Trade\CreateTradeBlockSetRecipeResponse
```

Author a set-completion recipe (a set of items that, once assembled through trading, unlocks a set-master cosmetic you designed). Born unreviewed until ops approves.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TradeBlockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createTradeBlockSetRecipe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeBlockApi->createTradeBlockSetRecipe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Trade\CreateTradeBlockSetRecipeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTradeBlockEvolution()`

```php
getTradeBlockEvolution(): \Crossly\Model\Trade\GetTradeBlockEvolutionResponse
```

List your Trade Evolution unlocks — completed swaps that unlocked an evolved or set-master NFT you can mint by burning COSM.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TradeBlockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTradeBlockEvolution();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeBlockApi->getTradeBlockEvolution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Trade\GetTradeBlockEvolutionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTradeBlockPost()`

```php
getTradeBlockPost($kind, $category_slug, $brand, $model, $q, $limit, $offset): \Crossly\Model\Trade\GetTradeBlockPostResponse
```

Browse open Trade Block posts (wants + offers) on the Crossly Market.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TradeBlockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kind = 'kind_example'; // string | Filter to wants or offers.
$category_slug = 'category_slug_example'; // string | Filter to a market category.
$brand = 'brand_example'; // string | Filter to posts with a product of this brand (case-insensitive).
$model = 'model_example'; // string | Filter to posts with a product of this catalogue model (case-insensitive).
$q = 'q_example'; // string | Search title + want text.
$limit = 40; // int
$offset = 0; // int

try {
    $result = $apiInstance->getTradeBlockPost($kind, $category_slug, $brand, $model, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeBlockApi->getTradeBlockPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kind** | **string**| Filter to wants or offers. | [optional]
 **category_slug** | **string**| Filter to a market category. | [optional]
 **brand** | **string**| Filter to posts with a product of this brand (case-insensitive). | [optional]
 **model** | **string**| Filter to posts with a product of this catalogue model (case-insensitive). | [optional]
 **q** | **string**| Search title + want text. | [optional]
 **limit** | **int**|  | [optional] [default to 40]
 **offset** | **int**|  | [optional] [default to 0]

### Return type

**\Crossly\Model\Trade\GetTradeBlockPostResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTradeBlockPostById()`

```php
getTradeBlockPostById($id): \Crossly\Model\Trade\GetTradeBlockPostByIdResponse
```

Get one Trade Block post with its items and open-offer count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TradeBlockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getTradeBlockPostById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeBlockApi->getTradeBlockPostById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Trade\GetTradeBlockPostByIdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTradeBlockTrade()`

```php
getTradeBlockTrade(): \Crossly\Model\Trade\GetTradeBlockTradeResponse
```

List the trades you are a party to, newest first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TradeBlockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTradeBlockTrade();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeBlockApi->getTradeBlockTrade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Trade\GetTradeBlockTradeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
