# Crossly\DefaultApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCosmDesignerChainAutoUnlock()**](DefaultApi.md#createCosmDesignerChainAutoUnlock) | **POST** /v1/cosm/designer/chain-auto-unlock | 
[**createCosmDesignerChainUnlock()**](DefaultApi.md#createCosmDesignerChainUnlock) | **POST** /v1/cosm/designer/chain-unlock | 
[**createCosmDesignerMaterialise()**](DefaultApi.md#createCosmDesignerMaterialise) | **POST** /v1/cosm/designer/materialise | 
[**createCosmDesignerMaterialiseConfirm()**](DefaultApi.md#createCosmDesignerMaterialiseConfirm) | **POST** /v1/cosm/designer/materialise/confirm | 
[**createCosmDesignerMaterialiseRelease()**](DefaultApi.md#createCosmDesignerMaterialiseRelease) | **POST** /v1/cosm/designer/materialise/release | 
[**createCosmDesignerSubmitForReview()**](DefaultApi.md#createCosmDesignerSubmitForReview) | **POST** /v1/cosm/designer/submit-for-review | 
[**createCosmDesignerTerm()**](DefaultApi.md#createCosmDesignerTerm) | **POST** /v1/cosm/designer/terms | 
[**getCosmDesignerCopyState()**](DefaultApi.md#getCosmDesignerCopyState) | **GET** /v1/cosm/designer/copy-state | 
[**getCosmDesignerEarning()**](DefaultApi.md#getCosmDesignerEarning) | **GET** /v1/cosm/designer/earnings | 
[**getCosmDesignerTerm()**](DefaultApi.md#getCosmDesignerTerm) | **GET** /v1/cosm/designer/terms | 
[**getListingVariationGroup()**](DefaultApi.md#getListingVariationGroup) | **GET** /v1/listings/{id}/variation-group | 
[**getMarketMetalSpotHistory()**](DefaultApi.md#getMarketMetalSpotHistory) | **GET** /v1/market/metals/spot/history | 
[**getMarketProduct()**](DefaultApi.md#getMarketProduct) | **GET** /v1/market/products/{id} | 
[**getMarketProductRelated()**](DefaultApi.md#getMarketProductRelated) | **GET** /v1/market/products/{id}/related | 
[**getMarketScrapQuote()**](DefaultApi.md#getMarketScrapQuote) | **GET** /v1/market/scrap/quote | 
[**getMarketVariantBook()**](DefaultApi.md#getMarketVariantBook) | **GET** /v1/market/variants/{id}/book | 
[**getVariationGroup()**](DefaultApi.md#getVariationGroup) | **GET** /v1/variation-groups/{id} | 
[**getVariationGroupPublishPlan()**](DefaultApi.md#getVariationGroupPublishPlan) | **GET** /v1/variation-groups/{id}/publish-plan | 
[**listMarketBullion()**](DefaultApi.md#listMarketBullion) | **GET** /v1/market/bullion | 
[**listMarketGraders()**](DefaultApi.md#listMarketGraders) | **GET** /v1/market/graders | 
[**listMarketMetalSpot()**](DefaultApi.md#listMarketMetalSpot) | **GET** /v1/market/metals/spot | 
[**listMarketProducts()**](DefaultApi.md#listMarketProducts) | **GET** /v1/market/products | 
[**listMarketVariantTiers()**](DefaultApi.md#listMarketVariantTiers) | **GET** /v1/market/variants/{id}/tiers | 
[**listVariationGroups()**](DefaultApi.md#listVariationGroups) | **GET** /v1/variation-groups | 


## `createCosmDesignerChainAutoUnlock()`

```php
createCosmDesignerChainAutoUnlock($request_body): \Crossly\Model\Cosm\CreateCosmDesignerChainAutoUnlockResponse
```



Opt a design in or out of the free chain unlock a popular limited design earns (on by default). Designer-only. Answers the popularity of the design toward the bar.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->createCosmDesignerChainAutoUnlock($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCosmDesignerChainAutoUnlock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | **array<string,mixed>**|  |

### Return type

**\Crossly\Model\Cosm\CreateCosmDesignerChainAutoUnlockResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createCosmDesignerChainUnlock()`

```php
createCosmDesignerChainUnlock($request_body): \Crossly\Model\Cosm\CreateCosmDesignerChainUnlockResponse
```



Burn COSM to make a design mintable on chain. Designer-only and idempotent: paying twice is impossible, and a second call returns the existing unlock without charging. The fee is DESTROYED rather than collected. Limited editions only. Once unlocked, any holder may take their own copy on chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->createCosmDesignerChainUnlock($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCosmDesignerChainUnlock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | **array<string,mixed>**|  |

### Return type

**\Crossly\Model\Cosm\CreateCosmDesignerChainUnlockResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createCosmDesignerMaterialise()`

```php
createCosmDesignerMaterialise($request_body): \Crossly\Model\Cosm\CreateCosmDesignerMaterialiseResponse
```



Lock a copy and return an UNSIGNED Metaplex Core mint for the holder to sign. One call: it resolves the designer royalty, locks the copy, publishes immutable content-addressed metadata and builds the transaction — so a lock is never taken without a transaction to go with it, and a failure after the lock releases it. Does NOT void the copy; call confirm once the chain reaches FINALIZED commitment. Every royalty recipient needs a connected wallet first, and the designer must have unlocked the design.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->createCosmDesignerMaterialise($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCosmDesignerMaterialise: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | **array<string,mixed>**|  |

### Return type

**\Crossly\Model\Cosm\CreateCosmDesignerMaterialiseResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createCosmDesignerMaterialiseConfirm()`

```php
createCosmDesignerMaterialiseConfirm($request_body): \Crossly\Model\Cosm\CreateCosmDesignerMaterialiseConfirmResponse
```



Record a confirmed mint and void the in-world copy, in one transaction. The caller MUST have verified the transaction at finalized commitment first — an NFT recorded against a transaction that never landed cannot be recalled, and the copy it voided is gone. Idempotent on an already-confirmed request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->createCosmDesignerMaterialiseConfirm($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCosmDesignerMaterialiseConfirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | **array<string,mixed>**|  |

### Return type

**\Crossly\Model\Cosm\CreateCosmDesignerMaterialiseConfirmResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createCosmDesignerMaterialiseRelease()`

```php
createCosmDesignerMaterialiseRelease($request_body): \Crossly\Model\World\CreateWorldJobShiftReleaseResponse
```



Release a mint lock that was never signed. The ordinary outcome of somebody closing a wallet prompt, and it leaves the copy exactly as it was. Refuses a request that has already minted, because releasing one would unlock a copy that is on chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->createCosmDesignerMaterialiseRelease($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCosmDesignerMaterialiseRelease: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | **array<string,mixed>**|  |

### Return type

**\Crossly\Model\World\CreateWorldJobShiftReleaseResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createCosmDesignerSubmitForReview()`

```php
createCosmDesignerSubmitForReview($request_body): \Crossly\Model\Cosm\CreateCosmDesignerSubmitForReviewResponse
```



Submit a user-authored design for moderation. Designer-only, and refuses a design with no preview image HERE rather than at approval so the designer learns what is missing while they can still fix it. Submitting twice returns the existing pending review instead of queueing a second one — a moderator facing two reviews of one piece does not know which they are deciding. A design already on sale is refused.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->createCosmDesignerSubmitForReview($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCosmDesignerSubmitForReview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | **array<string,mixed>**|  |

### Return type

**\Crossly\Model\Cosm\CreateCosmDesignerSubmitForReviewResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createCosmDesignerTerm()`

```php
createCosmDesignerTerm($request_body): \Crossly\Model\Cosm\CreateCosmDesignerTermResponse
```



Publish terms for a design. Never edits: every change is a new version, and a copy sold under an earlier one keeps those terms forever. Only the designer may call it. Collaborator shares are of the ROYALTY rather than the sale price and may total at most 100%, with the remainder staying with the designer; a total above 100% is refused rather than scaled down.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->createCosmDesignerTerm($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCosmDesignerTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | **array<string,mixed>**|  |

### Return type

**\Crossly\Model\Cosm\CreateCosmDesignerTermResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getCosmDesignerCopyState()`

```php
getCosmDesignerCopyState($ownership_id): \Crossly\Model\Cosm\GetCosmDesignerCopyStateResponse
```



Where a copy currently is: held (in-world, wearable, listable for COSM), minting (locked while a mint is in flight) or materialised (an NFT in the holder wallet). A copy is in exactly one of these, never two.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ownership_id = 'ownership_id_example'; // string

try {
    $result = $apiInstance->getCosmDesignerCopyState($ownership_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCosmDesignerCopyState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ownership_id** | **string**|  |

### Return type

**\Crossly\Model\Cosm\GetCosmDesignerCopyStateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getCosmDesignerEarning()`

```php
getCosmDesignerEarning($subject_id): \Crossly\Model\Cosm\GetCosmDesignerEarningResponse
```



What a designer has earned, in both denominations. COSM royalties come from COSM-priced sales; cash earnings come from cash-priced sales and are funded by the buyer payment itself. The two are never converted into one another, and COSM is never cashed out.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject_id = 'subject_id_example'; // string

try {
    $result = $apiInstance->getCosmDesignerEarning($subject_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCosmDesignerEarning: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subject_id** | **string**|  |

### Return type

**\Crossly\Model\Cosm\GetCosmDesignerEarningResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getCosmDesignerTerm()`

```php
getCosmDesignerTerm($cosmetic_id): \Crossly\Model\Cosm\GetCosmDesignerTermResponse
```



The published terms for a design: resale, price window, secondary royalty and collaborator splits. Also reports the platform rates a designer does not control, and whether the terms are enforceable on chain — inside Crossly every rule is enforced, but a third-party marketplace honours a royalty voluntarily at best.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cosmetic_id = 'cosmetic_id_example'; // string

try {
    $result = $apiInstance->getCosmDesignerTerm($cosmetic_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCosmDesignerTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cosmetic_id** | **string**|  |

### Return type

**\Crossly\Model\Cosm\GetCosmDesignerTermResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getListingVariationGroup()`

```php
getListingVariationGroup($id): \Crossly\Model\Listing\GetListingVariationGroupResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getListingVariationGroup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getListingVariationGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Listing\GetListingVariationGroupResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getMarketMetalSpotHistory()`

```php
getMarketMetalSpotHistory(): \Crossly\Model\Market\GetMarketMetalSpotHistoryResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMarketMetalSpotHistory();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMarketMetalSpotHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Market\GetMarketMetalSpotHistoryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getMarketProduct()`

```php
getMarketProduct($id): \Crossly\Model\Market\GetMarketProductResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getMarketProduct($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMarketProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Market\GetMarketProductResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getMarketProductRelated()`

```php
getMarketProductRelated($id): \Crossly\Model\Market\GetMarketProductRelatedResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getMarketProductRelated($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMarketProductRelated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Market\GetMarketProductRelatedResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getMarketScrapQuote()`

```php
getMarketScrapQuote(): \Crossly\Model\Market\GetMarketScrapQuoteResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMarketScrapQuote();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMarketScrapQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Market\GetMarketScrapQuoteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getMarketVariantBook()`

```php
getMarketVariantBook($id): \Crossly\Model\Market\GetMarketVariantBookResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getMarketVariantBook($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMarketVariantBook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Market\GetMarketVariantBookResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVariationGroup()`

```php
getVariationGroup($id): \Crossly\Model\Variation\ListVariationGroupsItem
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVariationGroup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getVariationGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Variation\ListVariationGroupsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVariationGroupPublishPlan()`

```php
getVariationGroupPublishPlan($id): \Crossly\Model\Variation\GetVariationGroupPublishPlanResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVariationGroupPublishPlan($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getVariationGroupPublishPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Variation\GetVariationGroupPublishPlanResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listMarketBullion()`

```php
listMarketBullion(): \Crossly\Model\Market\ListMarketBullionResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listMarketBullion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMarketBullion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Market\ListMarketBullionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listMarketGraders()`

```php
listMarketGraders(): \Crossly\Model\Market\ListMarketGradersResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listMarketGraders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMarketGraders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Market\ListMarketGradersResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listMarketMetalSpot()`

```php
listMarketMetalSpot(): \Crossly\Model\Market\ListMarketMetalSpotResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listMarketMetalSpot();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMarketMetalSpot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Market\ListMarketMetalSpotResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listMarketProducts()`

```php
listMarketProducts(): \Crossly\Model\Market\ListMarketProductsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listMarketProducts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMarketProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Market\ListMarketProductsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listMarketVariantTiers()`

```php
listMarketVariantTiers($id): \Crossly\Model\Market\ListMarketVariantTiersResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listMarketVariantTiers($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMarketVariantTiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Market\ListMarketVariantTiersResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVariationGroups()`

```php
listVariationGroups(): \Crossly\Model\Variation\ListVariationGroupsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVariationGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listVariationGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Variation\ListVariationGroupsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
