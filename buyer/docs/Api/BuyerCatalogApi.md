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
[**getBuyerCatalogListing()**](BuyerCatalogApi.md#getBuyerCatalogListing) | **GET** /v1/buyer/catalog/listings/{slug} | One listing, in full.
[**getBuyerCatalogListingAvailability()**](BuyerCatalogApi.md#getBuyerCatalogListingAvailability) | **GET** /v1/buyer/catalog/listings/{slug}/availability | Is it still buyable, and at what price.
[**getBuyerScanSession()**](BuyerCatalogApi.md#getBuyerScanSession) | **GET** /v1/buyer/scan/sessions/{id} | One trip and everything it found.
[**listBuyerCatalogSearch()**](BuyerCatalogApi.md#listBuyerCatalogSearch) | **GET** /v1/buyer/catalog/search | Search the Crossly catalogue.
[**listBuyerScanSessions()**](BuyerCatalogApi.md#listBuyerScanSessions) | **GET** /v1/buyer/scan/sessions | Your scanning trips, newest first.


## `createBuyerIdentify()`

```php
createBuyerIdentify(): \Crossly\Buyer\Model\CreateBuyerIdentifyResponse
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

[**\Crossly\Buyer\Model\CreateBuyerIdentifyResponse**](../Model/CreateBuyerIdentifyResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBuyerLockon()`

```php
createBuyerLockon(): \Crossly\Buyer\Model\CreateBuyerLockonResponse
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

[**\Crossly\Buyer\Model\CreateBuyerLockonResponse**](../Model/CreateBuyerLockonResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBuyerLockonConfirm()`

```php
createBuyerLockonConfirm($id): \Crossly\Buyer\Model\CreateBuyerLockonConfirmResponse
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

[**\Crossly\Buyer\Model\CreateBuyerLockonConfirmResponse**](../Model/CreateBuyerLockonConfirmResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBuyerLockonObserve()`

```php
createBuyerLockonObserve($id): \Crossly\Buyer\Model\CreateBuyerLockonObserveResponse
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

[**\Crossly\Buyer\Model\CreateBuyerLockonObserveResponse**](../Model/CreateBuyerLockonObserveResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBuyerScan()`

```php
createBuyerScan(): \Crossly\Buyer\Model\CreateBuyerScanResponse
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

[**\Crossly\Buyer\Model\CreateBuyerScanResponse**](../Model/CreateBuyerScanResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBuyerScanSession()`

```php
createBuyerScanSession(): \Crossly\Buyer\Model\CreateBuyerScanSessionResponse
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

[**\Crossly\Buyer\Model\CreateBuyerScanSessionResponse**](../Model/CreateBuyerScanSessionResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBuyerScanSessionEnd()`

```php
createBuyerScanSessionEnd($id): \Crossly\Buyer\Model\CreateBuyerScanSessionEndResponse
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

[**\Crossly\Buyer\Model\CreateBuyerScanSessionEndResponse**](../Model/CreateBuyerScanSessionEndResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBuyerAnywhere()`

```php
getBuyerAnywhere(): \Crossly\Buyer\Model\GetBuyerAnywhereResponse
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

[**\Crossly\Buyer\Model\GetBuyerAnywhereResponse**](../Model/GetBuyerAnywhereResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBuyerCatalogFacet()`

```php
getBuyerCatalogFacet(): \Crossly\Buyer\Model\GetBuyerCatalogFacetResponse
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

[**\Crossly\Buyer\Model\GetBuyerCatalogFacetResponse**](../Model/GetBuyerCatalogFacetResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBuyerCatalogListing()`

```php
getBuyerCatalogListing($slug): \Crossly\Buyer\Model\GetBuyerCatalogListingResponse
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

[**\Crossly\Buyer\Model\GetBuyerCatalogListingResponse**](../Model/GetBuyerCatalogListingResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBuyerCatalogListingAvailability()`

```php
getBuyerCatalogListingAvailability($slug): \Crossly\Buyer\Model\GetBuyerCatalogListingAvailabilityResponse
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

[**\Crossly\Buyer\Model\GetBuyerCatalogListingAvailabilityResponse**](../Model/GetBuyerCatalogListingAvailabilityResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBuyerScanSession()`

```php
getBuyerScanSession($id): \Crossly\Buyer\Model\GetBuyerScanSessionResponse
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

[**\Crossly\Buyer\Model\GetBuyerScanSessionResponse**](../Model/GetBuyerScanSessionResponse.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBuyerCatalogSearch()`

```php
listBuyerCatalogSearch(): V1List
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

[**V1List**](../Model/V1List.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBuyerScanSessions()`

```php
listBuyerScanSessions(): V1List
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

[**V1List**](../Model/V1List.md)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
