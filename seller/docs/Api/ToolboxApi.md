# Crossly\ToolboxApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createToolboxAsset()**](ToolboxApi.md#createToolboxAsset) | **POST** /v1/toolbox/assets | Publish an asset (place nodes). Scanned (lint, text, credits, uploads) then reviewed. Free by default; paid needs Pro and a verified identity.
[**createToolboxAssetPurchase()**](ToolboxApi.md#createToolboxAssetPurchase) | **POST** /v1/toolbox/assets/{assetId}/purchase | Open a Crossly checkout for a paid asset. Nothing is charged here: a person pays at checkoutUrl. The author earns 80% of net; the licence is use in your own experiences.
[**createToolboxAssetRetire()**](ToolboxApi.md#createToolboxAssetRetire) | **POST** /v1/toolbox/assets/{assetId}/retire | Take an asset off the store for good. Licences already sold keep working.
[**createToolboxAssetUse()**](ToolboxApi.md#createToolboxAssetUse) | **POST** /v1/toolbox/assets/{assetId}/use | Get the asset&#39;s nodes stamped with its id for a place you can edit; insert:true also inserts them into the place&#39;s live session. Paid assets need the experience owner&#39;s licence.
[**createToolboxAssetVersion()**](ToolboxApi.md#createToolboxAssetVersion) | **POST** /v1/toolbox/assets/{assetId}/versions | A new version (reviewed); the live one keeps serving until it is approved.
[**createToolboxPurchaseRefund()**](ToolboxApi.md#createToolboxPurchaseRefund) | **POST** /v1/toolbox/purchases/{purchaseId}/refund | Refund a licence within 14 days while no published version of yours uses the asset. Ends the licence; the author&#39;s share is reversed.
[**deleteToolboxAssetRatingMine()**](ToolboxApi.md#deleteToolboxAssetRatingMine) | **DELETE** /v1/toolbox/assets/{assetId}/ratings/mine | Remove your rating of an asset.
[**getToolboxAsset()**](ToolboxApi.md#getToolboxAsset) | **GET** /v1/toolbox/assets/{assetId} | One asset: versions, credits (assets it includes), licence, contents, your purchase.
[**getToolboxAssetRating()**](ToolboxApi.md#getToolboxAssetRating) | **GET** /v1/toolbox/assets/{assetId}/ratings | Ratings of an asset: average stars, breakdown, recent reviews, yours, and whether you may rate it.
[**getToolboxPurchase()**](ToolboxApi.md#getToolboxPurchase) | **GET** /v1/toolbox/purchases/{purchaseId} | A purchase: status, price, tax, refundable until.
[**listToolboxAssets()**](ToolboxApi.md#listToolboxAssets) | **GET** /v1/toolbox/assets | Search the Toolbox: models, scripts, sounds, images, packages. Free and paid; &#x60;owned&#x60; says whether you may insert it now.
[**listToolboxLibrary()**](ToolboxApi.md#listToolboxLibrary) | **GET** /v1/toolbox/library | Assets you may insert: licences you bought, your own, free ones you used.
[**listToolboxMine()**](ToolboxApi.md#listToolboxMine) | **GET** /v1/toolbox/mine | Your published assets: review state, reviewer note, what each earned you.
[**listToolboxSales()**](ToolboxApi.md#listToolboxSales) | **GET** /v1/toolbox/sales | Your Toolbox sales: gross, net, your 80% share after refunds. Never who bought.
[**updateToolboxAsset()**](ToolboxApi.md#updateToolboxAsset) | **PATCH** /v1/toolbox/assets/{assetId} | Edit name, description, tags, thumbnail or price.
[**updateToolboxAssetRatingMine()**](ToolboxApi.md#updateToolboxAssetRatingMine) | **PUT** /v1/toolbox/assets/{assetId}/ratings/mine | Rate an asset you bought or installed: 1–5 stars and an optional review (1000 characters). Not your own.


## `createToolboxAsset()`

```php
createToolboxAsset(): \Crossly\Model\Common\ToolboxAssetResponse
```

Publish an asset (place nodes). Scanned (lint, text, credits, uploads) then reviewed. Free by default; paid needs Pro and a verified identity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ToolboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createToolboxAsset();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolboxApi->createToolboxAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\ToolboxAssetResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createToolboxAssetPurchase()`

```php
createToolboxAssetPurchase($asset_id): \Crossly\Model\Toolbox\GetToolboxPurchaseResponse
```

Open a Crossly checkout for a paid asset. Nothing is charged here: a person pays at checkoutUrl. The author earns 80% of net; the licence is use in your own experiences.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ToolboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->createToolboxAssetPurchase($asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolboxApi->createToolboxAssetPurchase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**|  |

### Return type

**\Crossly\Model\Toolbox\GetToolboxPurchaseResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createToolboxAssetRetire()`

```php
createToolboxAssetRetire($asset_id): \Crossly\Model\Common\ToolboxAssetResponse
```

Take an asset off the store for good. Licences already sold keep working.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ToolboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->createToolboxAssetRetire($asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolboxApi->createToolboxAssetRetire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**|  |

### Return type

**\Crossly\Model\Common\ToolboxAssetResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createToolboxAssetUse()`

```php
createToolboxAssetUse($asset_id): \Crossly\Model\Toolbox\CreateToolboxAssetUseResponse
```

Get the asset's nodes stamped with its id for a place you can edit; insert:true also inserts them into the place's live session. Paid assets need the experience owner's licence.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ToolboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->createToolboxAssetUse($asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolboxApi->createToolboxAssetUse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**|  |

### Return type

**\Crossly\Model\Toolbox\CreateToolboxAssetUseResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createToolboxAssetVersion()`

```php
createToolboxAssetVersion($asset_id): \Crossly\Model\Common\ToolboxAssetResponse
```

A new version (reviewed); the live one keeps serving until it is approved.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ToolboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->createToolboxAssetVersion($asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolboxApi->createToolboxAssetVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**|  |

### Return type

**\Crossly\Model\Common\ToolboxAssetResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createToolboxPurchaseRefund()`

```php
createToolboxPurchaseRefund($purchase_id): \Crossly\Model\World\CreateWorldMeReceiptRefundResponse
```

Refund a licence within 14 days while no published version of yours uses the asset. Ends the licence; the author's share is reversed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ToolboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = 'purchase_id_example'; // string

try {
    $result = $apiInstance->createToolboxPurchaseRefund($purchase_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolboxApi->createToolboxPurchaseRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldMeReceiptRefundResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteToolboxAssetRatingMine()`

```php
deleteToolboxAssetRatingMine($asset_id): \Crossly\Model\Spatial\DeleteSpatialSceneGrantResponse
```

Remove your rating of an asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ToolboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->deleteToolboxAssetRatingMine($asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolboxApi->deleteToolboxAssetRatingMine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\DeleteSpatialSceneGrantResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getToolboxAsset()`

```php
getToolboxAsset($asset_id): \Crossly\Model\Toolbox\GetToolboxAssetResponse
```

One asset: versions, credits (assets it includes), licence, contents, your purchase.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ToolboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->getToolboxAsset($asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolboxApi->getToolboxAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**|  |

### Return type

**\Crossly\Model\Toolbox\GetToolboxAssetResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getToolboxAssetRating()`

```php
getToolboxAssetRating($asset_id): \Crossly\Model\Toolbox\GetToolboxAssetRatingResponse
```

Ratings of an asset: average stars, breakdown, recent reviews, yours, and whether you may rate it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ToolboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->getToolboxAssetRating($asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolboxApi->getToolboxAssetRating: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**|  |

### Return type

**\Crossly\Model\Toolbox\GetToolboxAssetRatingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getToolboxPurchase()`

```php
getToolboxPurchase($purchase_id): \Crossly\Model\Toolbox\GetToolboxPurchaseResponse
```

A purchase: status, price, tax, refundable until.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ToolboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = 'purchase_id_example'; // string

try {
    $result = $apiInstance->getToolboxPurchase($purchase_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolboxApi->getToolboxPurchase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_id** | **string**|  |

### Return type

**\Crossly\Model\Toolbox\GetToolboxPurchaseResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listToolboxAssets()`

```php
listToolboxAssets(): \Crossly\Model\Toolbox\ListToolboxAssetsResponse
```

Search the Toolbox: models, scripts, sounds, images, packages. Free and paid; `owned` says whether you may insert it now.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ToolboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listToolboxAssets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolboxApi->listToolboxAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Toolbox\ListToolboxAssetsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listToolboxLibrary()`

```php
listToolboxLibrary(): \Crossly\Model\Toolbox\ListToolboxLibraryResponse
```

Assets you may insert: licences you bought, your own, free ones you used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ToolboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listToolboxLibrary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolboxApi->listToolboxLibrary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Toolbox\ListToolboxLibraryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listToolboxMine()`

```php
listToolboxMine(): \Crossly\Model\Toolbox\ListToolboxMineResponse
```

Your published assets: review state, reviewer note, what each earned you.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ToolboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listToolboxMine();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolboxApi->listToolboxMine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Toolbox\ListToolboxMineResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listToolboxSales()`

```php
listToolboxSales(): \Crossly\Model\Toolbox\ListToolboxSalesResponse
```

Your Toolbox sales: gross, net, your 80% share after refunds. Never who bought.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ToolboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listToolboxSales();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolboxApi->listToolboxSales: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Toolbox\ListToolboxSalesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateToolboxAsset()`

```php
updateToolboxAsset($asset_id): \Crossly\Model\Common\ToolboxAssetResponse
```

Edit name, description, tags, thumbnail or price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ToolboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->updateToolboxAsset($asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolboxApi->updateToolboxAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**|  |

### Return type

**\Crossly\Model\Common\ToolboxAssetResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateToolboxAssetRatingMine()`

```php
updateToolboxAssetRatingMine($asset_id): \Crossly\Model\Toolbox\UpdateToolboxAssetRatingMineResponse
```

Rate an asset you bought or installed: 1–5 stars and an optional review (1000 characters). Not your own.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ToolboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string

try {
    $result = $apiInstance->updateToolboxAssetRatingMine($asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolboxApi->updateToolboxAssetRatingMine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**|  |

### Return type

**\Crossly\Model\Toolbox\UpdateToolboxAssetRatingMineResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
