# Crossly\Buyer\BuyerCatalogApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBuyerIdentify()**](BuyerCatalogApi.md#createBuyerIdentify) | **POST** /v1/buyer/identify | Identify a held object and return a HUD-ready answer.
[**createBuyerLockon()**](BuyerCatalogApi.md#createBuyerLockon) | **POST** /v1/buyer/lockons | Lock on to an object the buyer is holding.
[**createBuyerLockonConfirm()**](BuyerCatalogApi.md#createBuyerLockonConfirm) | **POST** /v1/buyer/lockons/{id}/confirm | The buyer picked one of the candidates.
[**createBuyerLockonObserve()**](BuyerCatalogApi.md#createBuyerLockonObserve) | **POST** /v1/buyer/lockons/{id}/observe | Add what this frame revealed, and get the current best answer.
[**createBuyerScan()**](BuyerCatalogApi.md#createBuyerScan) | **POST** /v1/buyer/scan | Identify a physical item and find the cheapest place to buy it.
[**createBuyerScanSession()**](BuyerCatalogApi.md#createBuyerScanSession) | **POST** /v1/buyer/scan/sessions | Open a Live Shop session.
[**createBuyerScanSessionEnd()**](BuyerCatalogApi.md#createBuyerScanSessionEnd) | **POST** /v1/buyer/scan/sessions/{id}/end | Close a Live Shop session.
[**getBuyerAnywhere()**](BuyerCatalogApi.md#getBuyerAnywhere) | **GET** /v1/buyer/anywhere | Cheapest source for an item — Crossly first, then other retailers.
[**getBuyerCatalogFacet()**](BuyerCatalogApi.md#getBuyerCatalogFacet) | **GET** /v1/buyer/catalog/facets | Brands, categories and conditions that currently have stock.
[**getBuyerCatalogFx()**](BuyerCatalogApi.md#getBuyerCatalogFx) | **GET** /v1/buyer/catalog/fx | Display-only exchange rates (units per 1 USD).
[**getBuyerCatalogListing()**](BuyerCatalogApi.md#getBuyerCatalogListing) | **GET** /v1/buyer/catalog/listings/{slug} | One listing, in full.
[**getBuyerCatalogListingAvailability()**](BuyerCatalogApi.md#getBuyerCatalogListingAvailability) | **GET** /v1/buyer/catalog/listings/{slug}/availability | Is it still buyable, and at what price.
[**getBuyerCatalogListingShipping()**](BuyerCatalogApi.md#getBuyerCatalogListingShipping) | **GET** /v1/buyer/catalog/listings/{slug}/shipping | Shipping services and prices to a destination.
[**getBuyerListingLandedCost()**](BuyerCatalogApi.md#getBuyerListingLandedCost) | **GET** /v1/buyer/listings/{slug}/landed-cost | Import duties, taxes and fees to a country (landed cost).
[**getBuyerScanSession()**](BuyerCatalogApi.md#getBuyerScanSession) | **GET** /v1/buyer/scan/sessions/{id} | One trip and everything it found.
[**listBuyerCatalogBrowse()**](BuyerCatalogApi.md#listBuyerCatalogBrowse) | **GET** /v1/buyer/catalog/browse | Browse the way the shop does — buying format, returns, size, color, sold items, Best Match.
[**listBuyerCatalogListingSoldHistory()**](BuyerCatalogApi.md#listBuyerCatalogListingSoldHistory) | **GET** /v1/buyer/catalog/listings/{slug}/sold-history | What THIS listing has sold for, newest first (last 50), with the median.
[**listBuyerCatalogSearch()**](BuyerCatalogApi.md#listBuyerCatalogSearch) | **GET** /v1/buyer/catalog/search | Search the Crossly catalogue.
[**listBuyerCatalogSellers()**](BuyerCatalogApi.md#listBuyerCatalogSellers) | **GET** /v1/buyer/catalog/sellers | Find a seller by shop handle or shop name.
[**listBuyerScanSessions()**](BuyerCatalogApi.md#listBuyerScanSessions) | **GET** /v1/buyer/scan/sessions | Your scanning trips, newest first.


## `createBuyerIdentify()`

```php
createBuyerIdentify(): \Crossly\Buyer\Model\Common\CreateBuyerIdentifyResponse
```

Identify a held object and return a HUD-ready answer.

The gesture endpoint for Live Shop. Runs a cost ladder: a decoded BARCODE resolves in ~50ms for nothing; failing that, self-hosted CLIP matches the catalogue; failing that, a vision model names it (the only rung that costs anything, capped per buyer per day). `hud` is pre-formatted for a 600×600 lens — one headline, one subline, up to three fact chips and exactly ONE action, because a pinch cannot choose between buttons. A vision label is WORDS, never an identity: it names the thing so the buyer can search, and never drives a price comparison.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createBuyerIdentify();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->createBuyerIdentify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\CreateBuyerIdentifyResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerLockon()`

```php
createBuyerLockon(): \Crossly\Buyer\Model\Lockon\CreateBuyerLockonResponse
```

Lock on to an object the buyer is holding.

Open this when on-device tracking acquires an object, then post observations to it as the buyer turns the thing over. The answer improves as evidence arrives — the style code inside a shoe settles what the front of it could not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createBuyerLockon();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->createBuyerLockon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Lockon\CreateBuyerLockonResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerLockonConfirm()`

```php
createBuyerLockonConfirm($id): \Crossly\Buyer\Model\Lockon\CreateBuyerLockonConfirmResponse
```

The buyer picked one of the candidates.

Promotes a text match to a CONFIRMED identity — the strongest evidence in the system, because a person holding the object said yes. Validated against the candidates we actually offered, so it cannot be claimed about an arbitrary product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerLockonConfirm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->createBuyerLockonConfirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Lockon\CreateBuyerLockonConfirmResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerLockonObserve()`

```php
createBuyerLockonObserve($id): \Crossly\Buyer\Model\Lockon\CreateBuyerLockonConfirmResponse
```

Add what this frame revealed, and get the current best answer.

Send only what you LEARNED: a decoded barcode, newly-read OCR text, or a frame when neither settled it. Do not post every frame — tracking and decoding happen on-device for free, and this endpoint is for evidence, not video. Evidence is RANKED (confirmed > barcode > ocr > visual), so a late weak reading can never overwrite a strong early one. When text evidence finds several products, `candidates` comes back for the buyer to pick from — a vision label is words, and only a human confirmation turns it into an identity we will price against.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerLockonObserve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->createBuyerLockonObserve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Lockon\CreateBuyerLockonConfirmResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerScan()`

```php
createBuyerScan(): \Crossly\Buyer\Model\Scan\CreateBuyerScanResponse
```

Identify a physical item and find the cheapest place to buy it.

Send a barcode identifier OR a photo. A BARCODE establishes identity, so the response carries a full price verdict across Crossly and other retailers. A PHOTO establishes resemblance only: you get visual matches from the Crossly catalogue, and a price verdict ONLY if the matched listing carries a real identifier. When it does not, `comparable` is false and there is no verdict — a price comparison built on a visual guess is a claim about a different product. Most second-hand items have no identifier by nature, so this is expected rather than a failure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createBuyerScan();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->createBuyerScan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Scan\CreateBuyerScanResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerScanSession()`

```php
createBuyerScanSession(): \Crossly\Buyer\Model\Scan\CreateBuyerScanSessionResponse
```

Open a Live Shop session.

Call this when the glasses connect, then pass the returned id as `sessionId` on each scan. Opening a session CLOSES any other live one — a person is in one shop at a time, and two live sessions split a trip across both.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createBuyerScanSession();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->createBuyerScanSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Scan\CreateBuyerScanSessionResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerScanSessionEnd()`

```php
createBuyerScanSessionEnd($id): \Crossly\Buyer\Model\Scan\CreateBuyerScanSessionEndResponse
```

Close a Live Shop session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerScanSessionEnd($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->createBuyerScanSessionEnd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Scan\CreateBuyerScanSessionEndResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerAnywhere()`

```php
getBuyerAnywhere(): \Crossly\Buyer\Model\Common\GetBuyerAnywhereResponse
```

Cheapest source for an item — Crossly first, then other retailers.

Answers with a VERDICT, not a list: crossly_best, offsite_cheaper, offsite_only or no_match. Offsite offers come from licensed affiliate product feeds, are ranked CHEAPEST-FIRST — commission only ever breaks a sub-$1 tie — and only appear when they beat the price you passed in. `shippingUnknown: true` means a compared price omitted postage, so present the result as \"before postage\" rather than as a delivered total. Crossly wins ties within $1; beyond that the honest answer wins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBuyerAnywhere();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->getBuyerAnywhere: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\GetBuyerAnywhereResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerCatalogFacet()`

```php
getBuyerCatalogFacet(): \Crossly\Buyer\Model\Catalog\GetBuyerCatalogFacetResponse
```

Brands, categories and conditions that currently have stock.

The vocabulary the search filters accept. Counts are live, so a filter built from this will never return an empty page for a value that has since sold out.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBuyerCatalogFacet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->getBuyerCatalogFacet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Catalog\GetBuyerCatalogFacetResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerCatalogFx()`

```php
getBuyerCatalogFx(): \Crossly\Buyer\Model\Catalog\GetBuyerCatalogFxResponse
```

Display-only exchange rates (units per 1 USD).

ECB daily reference rates rebased to US dollars: `rates.EUR = 0.92` means $1 ≈ €0.92. `asOf` is the ECB publication date (null until the first refresh). For showing an approximate price only — every Crossly price and charge is in USD, and the card issuer sets the final exchange rate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBuyerCatalogFx();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->getBuyerCatalogFx: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Catalog\GetBuyerCatalogFxResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerCatalogListing()`

```php
getBuyerCatalogListing($slug): \Crossly\Buyer\Model\Catalog\GetBuyerCatalogListingResponse
```

One listing, in full.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getBuyerCatalogListing($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->getBuyerCatalogListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Catalog\GetBuyerCatalogListingResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerCatalogListingAvailability()`

```php
getBuyerCatalogListingAvailability($slug): \Crossly\Buyer\Model\Catalog\GetBuyerCatalogListingAvailabilityResponse
```

Is it still buyable, and at what price.

The cheapest endpoint here, and the one to poll if you are going to poll — a single indexed row, no joins beyond stock, and an ETag so an unchanged answer is a 304. If you want to be TOLD instead of asking, create a monitor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getBuyerCatalogListingAvailability($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->getBuyerCatalogListingAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Catalog\GetBuyerCatalogListingAvailabilityResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerCatalogListingShipping()`

```php
getBuyerCatalogListingShipping($slug, $zip, $country, $quantity): \Crossly\Buyer\Model\Catalog\GetBuyerCatalogListingShippingResponse
```

Shipping services and prices to a destination.

Lists every shipping service the seller offers to `country` (default: the seller’s own country) with its price for `quantity` units and its delivery window in business days (handling included). `zip` is required for a domestic quote. `shipsToCountry: false` means the seller does not ship there. Pass a service `id` as `shippingServiceId` to POST /api/v1/buyer/checkout, or in `shippingServiceBySeller` to POST /api/v1/buyer/cart/quote.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string
$zip = 'zip_example'; // string
$country = 'country_example'; // string
$quantity = 56; // int

try {
    $result = $apiInstance->getBuyerCatalogListingShipping($slug, $zip, $country, $quantity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->getBuyerCatalogListingShipping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |
 **zip** | **string**|  | [optional]
 **country** | **string**|  | [optional]
 **quantity** | **int**|  | [optional]

### Return type

**\Crossly\Buyer\Model\Catalog\GetBuyerCatalogListingShippingResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerListingLandedCost()`

```php
getBuyerListingLandedCost($country, $slug, $postal_code, $quantity): \Crossly\Buyer\Model\Listing\GetBuyerListingLandedCostResponse
```

Import duties, taxes and fees to a country (landed cost).

Quotes the import duties, import taxes and fees for this listing shipped to `country` (ISO 3166-1 alpha-2), using the cheapest shipping service the seller offers there. `status: included` means checkout charges them now and the parcel ships DDP — no bill at the door; `unavailable` means it ships DDU and `notice` says the carrier or customs may charge on delivery; `none` means the parcel does not cross a border. Amounts are US-dollar cents. Answers 503 with `missingEnv` when landed-cost quoting is not configured on this deployment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = 'country_example'; // string
$slug = 'slug_example'; // string
$postal_code = 'postal_code_example'; // string
$quantity = 56; // int

try {
    $result = $apiInstance->getBuyerListingLandedCost($country, $slug, $postal_code, $quantity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->getBuyerListingLandedCost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**|  |
 **slug** | **string**|  |
 **postal_code** | **string**|  | [optional]
 **quantity** | **int**|  | [optional]

### Return type

**\Crossly\Buyer\Model\Listing\GetBuyerListingLandedCostResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerScanSession()`

```php
getBuyerScanSession($id): \Crossly\Buyer\Model\Scan\GetBuyerScanSessionResponse
```

One trip and everything it found.

Verdicts are returned EXACTLY as they were given at the time, not re-priced. A history screen that silently refreshes old prices shows a saving that was never actually on offer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBuyerScanSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->getBuyerScanSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Scan\GetBuyerScanSessionResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerCatalogBrowse()`

```php
listBuyerCatalogBrowse($q, $format, $returns, $sold, $size, $color, $ships_to, $sort, $min_price_cents, $max_price_cents, $page, $limit): \Crossly\Buyer\Model\Catalog\ListBuyerCatalogBrowseResponse
```

Browse the way the shop does — buying format, returns, size, color, sold items, Best Match.

Page-numbered and capped at 50 pages of up to 60, like the storefront. For walking the whole catalogue use /v1/buyer/catalog/search, which pages by cursor. Prices are integer CENTS (`minPriceCents=2500` is $25.00). `sold=true` returns recent sales of matching listings (last 90 days) with `soldPriceCents` and `soldAt`, instead of live stock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Free text; every word must appear in the title or brand.
$format = 'format_example'; // string | auction, buy_it_now, or offers (accepts offers).
$returns = 'returns_example'; // string | true = only listings that accept returns.
$sold = 'sold_example'; // string | true = recent sales instead of live listings.
$size = 'size_example'; // string | Exact size, case-insensitive (M does not match XL).
$color = 'color_example'; // string | Exact colour, case-insensitive.
$ships_to = 'ships_to_example'; // string | ISO 3166-1 alpha-2 destination (e.g. GB): only listings whose seller ships there, decided as checkout decides it (the listing's shipping policy and its own restricted countries). An embargoed destination matches nothing. Omitted, or `any`, means no destination filter — the storefront grid defaults to the buyer's country, this endpoint does not.
$sort = 'sort_example'; // string | Default best_match with q, newest without.
$min_price_cents = 56; // int | Lowest price, in cents.
$max_price_cents = 56; // int | Highest price, in cents.
$page = 1; // int | 1-indexed page.
$limit = 24; // int | Rows per page.

try {
    $result = $apiInstance->listBuyerCatalogBrowse($q, $format, $returns, $sold, $size, $color, $ships_to, $sort, $min_price_cents, $max_price_cents, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->listBuyerCatalogBrowse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Free text; every word must appear in the title or brand. | [optional]
 **format** | **string**| auction, buy_it_now, or offers (accepts offers). | [optional]
 **returns** | **string**| true &#x3D; only listings that accept returns. | [optional]
 **sold** | **string**| true &#x3D; recent sales instead of live listings. | [optional]
 **size** | **string**| Exact size, case-insensitive (M does not match XL). | [optional]
 **color** | **string**| Exact colour, case-insensitive. | [optional]
 **ships_to** | **string**| ISO 3166-1 alpha-2 destination (e.g. GB): only listings whose seller ships there, decided as checkout decides it (the listing&#39;s shipping policy and its own restricted countries). An embargoed destination matches nothing. Omitted, or &#x60;any&#x60;, means no destination filter — the storefront grid defaults to the buyer&#39;s country, this endpoint does not. | [optional]
 **sort** | **string**| Default best_match with q, newest without. | [optional]
 **min_price_cents** | **int**| Lowest price, in cents. | [optional]
 **max_price_cents** | **int**| Highest price, in cents. | [optional]
 **page** | **int**| 1-indexed page. | [optional] [default to 1]
 **limit** | **int**| Rows per page. | [optional] [default to 24]

### Return type

**\Crossly\Buyer\Model\Catalog\ListBuyerCatalogBrowseResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerCatalogListingSoldHistory()`

```php
listBuyerCatalogListingSoldHistory($slug): \Crossly\Buyer\Model\Catalog\ListBuyerCatalogListingSoldHistoryResponse
```

What THIS listing has sold for, newest first (last 50), with the median.

This listing only — never \"similar items\", which would mean matching other listings by resemblance. Prices are per unit, in cents, excluding shipping and tax.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | The listing slug.

try {
    $result = $apiInstance->listBuyerCatalogListingSoldHistory($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->listBuyerCatalogListingSoldHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**| The listing slug. |

### Return type

**\Crossly\Buyer\Model\Catalog\ListBuyerCatalogListingSoldHistoryResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerCatalogSearch()`

```php
listBuyerCatalogSearch(): \Crossly\Buyer\Model\Catalog\ListBuyerCatalogSearchResponse
```

Search the Crossly catalogue.

Keyset-paginated. Pass the `nextCursor` you were given back as `cursor`; page 500 costs the same as page 1. Cursors are opaque — do not parse them. Responses carry an ETag: send it back as If-None-Match and an unchanged page answers 304, which is free. `sort=popular` is deliberately unavailable, because a cursor into a continuously-reordering list silently skips rows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listBuyerCatalogSearch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->listBuyerCatalogSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Catalog\ListBuyerCatalogSearchResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerCatalogSellers()`

```php
listBuyerCatalogSellers($q, $limit): \Crossly\Buyer\Model\Catalog\ListBuyerCatalogSellersResponse
```

Find a seller by shop handle or shop name.

Only shops that have listed on Crossly. Exact matches first, then prefix, then by live listing count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | At least two characters of a handle or shop name.
$limit = 12; // int | How many shops to return.

try {
    $result = $apiInstance->listBuyerCatalogSellers($q, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->listBuyerCatalogSellers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| At least two characters of a handle or shop name. |
 **limit** | **int**| How many shops to return. | [optional] [default to 12]

### Return type

**\Crossly\Buyer\Model\Catalog\ListBuyerCatalogSellersResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerScanSessions()`

```php
listBuyerScanSessions(): \Crossly\Buyer\Model\Scan\ListBuyerScanSessionsResponse
```

Your scanning trips, newest first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listBuyerScanSessions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerCatalogApi->listBuyerScanSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Scan\ListBuyerScanSessionsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
