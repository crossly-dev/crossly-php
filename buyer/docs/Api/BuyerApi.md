# Crossly\Buyer\BuyerApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBuyerActivity()**](BuyerApi.md#createBuyerActivity) | **POST** /v1/buyer/activity | Report an item your user is looking at, and get our answer.
[**createBuyerCartItem()**](BuyerApi.md#createBuyerCartItem) | **POST** /v1/buyer/cart/items | Add a listing to your cart.
[**createBuyerCartQuote()**](BuyerApi.md#createBuyerCartQuote) | **POST** /v1/buyer/cart/quote | Price the cart, delivered — item, shipping, tax, total.
[**createBuyerOffer()**](BuyerApi.md#createBuyerOffer) | **POST** /v1/buyer/offers | Offer a price on a listing.
[**createBuyerWishlist()**](BuyerApi.md#createBuyerWishlist) | **POST** /v1/buyer/wishlists | Create a wishlist.
[**createBuyerWishlistItem()**](BuyerApi.md#createBuyerWishlistItem) | **POST** /v1/buyer/wishlists/{id}/items | Add a listing to a wishlist.
[**deleteBuyerCartItem()**](BuyerApi.md#deleteBuyerCartItem) | **DELETE** /v1/buyer/cart/items/{id} | Remove a line from your cart.
[**getBuyerPreference()**](BuyerApi.md#getBuyerPreference) | **GET** /v1/buyer/preferences | The shopping profile derived from that activity.
[**getBuyerProfile()**](BuyerApi.md#getBuyerProfile) | **GET** /v1/buyer/profile | Your Crossly shopping profile — name, email, saved address, Bucks balance.
[**listBuyerActivity()**](BuyerApi.md#listBuyerActivity) | **GET** /v1/buyer/activity | What this buyer has compared lately.
[**listBuyerCart()**](BuyerApi.md#listBuyerCart) | **GET** /v1/buyer/cart | What is in your Crossly cart.
[**listBuyerCashback()**](BuyerApi.md#listBuyerCashback) | **GET** /v1/buyer/cashback | Your Scout cashback — pending, confirmed, paid.
[**listBuyerOrders()**](BuyerApi.md#listBuyerOrders) | **GET** /v1/buyer/orders | What you have bought on Crossly, newest first.
[**listBuyerWishlistItems()**](BuyerApi.md#listBuyerWishlistItems) | **GET** /v1/buyer/wishlists/{id}/items | What is on one wishlist.
[**listBuyerWishlists()**](BuyerApi.md#listBuyerWishlists) | **GET** /v1/buyer/wishlists | Your wishlists.


## `createBuyerActivity()`

```php
createBuyerActivity($inline_object4): \Crossly\Buyer\Model\CreateBuyerActivityResponse
```

Report an item your user is looking at, and get our answer.

Records the look and returns whether Crossly has the item and at what price. Send an identifier and a store DOMAIN — a full URL is refused. Nothing about the page itself is stored.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object4 = new \Crossly\Buyer\Model\InlineObject4(); // \Crossly\Buyer\Model\InlineObject4

try {
    $result = $apiInstance->createBuyerActivity($inline_object4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object4** | [**\Crossly\Buyer\Model\InlineObject4**](../Model/InlineObject4.md)|  |

### Return type

[**\Crossly\Buyer\Model\CreateBuyerActivityResponse**](../Model/CreateBuyerActivityResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBuyerCartItem()`

```php
createBuyerCartItem($inline_object2): \Crossly\Buyer\Model\CreateBuyerCartItemResponse
```

Add a listing to your cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object2 = new \Crossly\Buyer\Model\InlineObject2(); // \Crossly\Buyer\Model\InlineObject2

try {
    $result = $apiInstance->createBuyerCartItem($inline_object2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerCartItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object2** | [**\Crossly\Buyer\Model\InlineObject2**](../Model/InlineObject2.md)|  |

### Return type

[**\Crossly\Buyer\Model\CreateBuyerCartItemResponse**](../Model/CreateBuyerCartItemResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBuyerCartQuote()`

```php
createBuyerCartQuote(): \Crossly\Buyer\Model\CreateBuyerCartQuoteResponse
```

Price the cart, delivered — item, shipping, tax, total.

Runs the real checkout cascade and returns the totals instead of charging. Nothing is purchased. `taxComplete: false` means there is no saved delivery address, so the total is a floor rather than a final figure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createBuyerCartQuote();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerCartQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Buyer\Model\CreateBuyerCartQuoteResponse**](../Model/CreateBuyerCartQuoteResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBuyerOffer()`

```php
createBuyerOffer($inline_object3): \Crossly\Buyer\Model\CreateBuyerOfferResponse
```

Offer a price on a listing.

Sends an offer to the seller. Spends nothing — a seller accepting still leaves you to complete checkout. Offers at or above the asking price are refused; buy it instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object3 = new \Crossly\Buyer\Model\InlineObject3(); // \Crossly\Buyer\Model\InlineObject3

try {
    $result = $apiInstance->createBuyerOffer($inline_object3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object3** | [**\Crossly\Buyer\Model\InlineObject3**](../Model/InlineObject3.md)|  |

### Return type

[**\Crossly\Buyer\Model\CreateBuyerOfferResponse**](../Model/CreateBuyerOfferResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBuyerWishlist()`

```php
createBuyerWishlist($inline_object): \Crossly\Buyer\Model\CreateBuyerWishlistResponse
```

Create a wishlist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object = new \Crossly\Buyer\Model\InlineObject(); // \Crossly\Buyer\Model\InlineObject

try {
    $result = $apiInstance->createBuyerWishlist($inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerWishlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object** | [**\Crossly\Buyer\Model\InlineObject**](../Model/InlineObject.md)|  |

### Return type

[**\Crossly\Buyer\Model\CreateBuyerWishlistResponse**](../Model/CreateBuyerWishlistResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBuyerWishlistItem()`

```php
createBuyerWishlistItem($id, $inline_object1): \Crossly\Buyer\Model\CreateBuyerWishlistItemResponse
```

Add a listing to a wishlist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$inline_object1 = new \Crossly\Buyer\Model\InlineObject1(); // \Crossly\Buyer\Model\InlineObject1

try {
    $result = $apiInstance->createBuyerWishlistItem($id, $inline_object1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerWishlistItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **inline_object1** | [**\Crossly\Buyer\Model\InlineObject1**](../Model/InlineObject1.md)|  |

### Return type

[**\Crossly\Buyer\Model\CreateBuyerWishlistItemResponse**](../Model/CreateBuyerWishlistItemResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBuyerCartItem()`

```php
deleteBuyerCartItem($id)
```

Remove a line from your cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteBuyerCartItem($id);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerCartItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBuyerPreference()`

```php
getBuyerPreference(): \Crossly\Buyer\Model\GetBuyerPreferenceResponse
```

The shopping profile derived from that activity.

Derived, never declared — there is no preferences form anywhere. `matchRate` is the share of this person's searches Crossly could answer; a low number is an inventory problem, not a personalisation one, which is why it is here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBuyerPreference();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerPreference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Buyer\Model\GetBuyerPreferenceResponse**](../Model/GetBuyerPreferenceResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBuyerProfile()`

```php
getBuyerProfile(): \Crossly\Buyer\Model\GetBuyerProfileResponse
```

Your Crossly shopping profile — name, email, saved address, Bucks balance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBuyerProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Buyer\Model\GetBuyerProfileResponse**](../Model/GetBuyerProfileResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBuyerActivity()`

```php
listBuyerActivity(): V1List
```

What this buyer has compared lately.

Newest first, and only as far back as the retention window — the link between a person and a comparison is dropped after 180 days, so this thins out rather than growing forever.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listBuyerActivity();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBuyerCart()`

```php
listBuyerCart(): V1List
```

What is in your Crossly cart.

Line items with the price captured when each was added. This is NOT a quote — shipping, tax and any discounts are computed at checkout against a delivery address, and the sum of these lines is not what you will be charged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listBuyerCart();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBuyerCashback()`

```php
listBuyerCashback($status, $page, $limit): V1List
```

Your Scout cashback — pending, confirmed, paid.

Newest first. `pending` means an order was reported and the retailer's return window has not closed; nothing is paid until it does. `expired` means a click was never reported as converting, which is the ordinary outcome for most clicks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string
$page = 1; // int
$limit = 25; // int

try {
    $result = $apiInstance->listBuyerCashback($status, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerCashback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **limit** | **int**|  | [optional] [default to 25]

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBuyerOrders()`

```php
listBuyerOrders($page, $limit): V1List
```

What you have bought on Crossly, newest first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int
$limit = 25; // int

try {
    $result = $apiInstance->listBuyerOrders($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional] [default to 1]
 **limit** | **int**|  | [optional] [default to 25]

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBuyerWishlistItems()`

```php
listBuyerWishlistItems($id): V1List
```

What is on one wishlist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listBuyerWishlistItems($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerWishlistItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBuyerWishlists()`

```php
listBuyerWishlists(): V1List
```

Your wishlists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listBuyerWishlists();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerWishlists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
