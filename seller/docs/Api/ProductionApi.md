# Crossly\ProductionApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductionCandidateAccept()**](ProductionApi.md#createProductionCandidateAccept) | **POST** /v1/production/candidates/{id}/accept | Accept a graduated design&#39;s production terms (edition size, cost, holder access).
[**createProductionCandidatePo()**](ProductionApi.md#createProductionCandidatePo) | **POST** /v1/production/candidates/{id}/po | Ops: open a purchase order for a candidate. Admin PAT only.
[**createProductionCandidateVote()**](ProductionApi.md#createProductionCandidateVote) | **POST** /v1/production/candidates/{id}/vote | Back (support: true) or un-back a design on the production ballot. One vote per person per design; voters must have bought on Crossly.
[**createProductionDesignBrief()**](ProductionApi.md#createProductionDesignBrief) | **POST** /v1/production/designs/{cosmeticId}/brief | Set a design&#39;s production brief (materials, finish, box, reference images).
[**createProductionDesignConsent()**](ProductionApi.md#createProductionDesignConsent) | **POST** /v1/production/designs/{cosmeticId}/consent | Opt a design in or out of physical production.
[**createProductionDesignSpec()**](ProductionApi.md#createProductionDesignSpec) | **POST** /v1/production/designs/{cosmeticId}/spec | Set a design&#39;s production spec (category, materials, complexity, packaging).
[**createProductionEstimate()**](ProductionApi.md#createProductionEstimate) | **POST** /v1/production/estimate | Estimate a run&#39;s landed cost from a spec + edition size (overshoots for safety).
[**createProductionRunPurchase()**](ProductionApi.md#createProductionRunPurchase) | **POST** /v1/production/runs/{id}/purchase | Buy a limited-edition unit of a physical run (holder pricing applies).
[**createReceiptRelist()**](ProductionApi.md#createReceiptRelist) | **POST** /v1/receipts/{id}/relist | Sell it again: a draft listing of something you bought on Crossly, carrying its purchase receipt so the next buyer inherits its provenance.
[**getProductionBallot()**](ProductionApi.md#getProductionBallot) | **GET** /v1/production/ballot | The ballot: designs waiting for a physical run, most backed first, and whether you may vote.
[**getProductionCandidate()**](ProductionApi.md#getProductionCandidate) | **GET** /v1/production/candidates | Your designs that have graduated toward a physical run.
[**getProductionDesignPref()**](ProductionApi.md#getProductionDesignPref) | **GET** /v1/production/designs/{cosmeticId}/prefs | Read a design&#39;s production preferences (spec, brief, opt-out).
[**getProductionDrop()**](ProductionApi.md#getProductionDrop) | **GET** /v1/production/drops | Limited-edition units you own, with fulfillment status.
[**getProductionEarning()**](ProductionApi.md#getProductionEarning) | **GET** /v1/production/earnings | Your CBX earnings from physical production (royalties + balance + lines).
[**getProductionLine()**](ProductionApi.md#getProductionLine) | **GET** /v1/production/lines | Your production lines dashboard (candidate + run + inventory).
[**getProductionPo()**](ProductionApi.md#getProductionPo) | **GET** /v1/production/pos | Ops: list purchase orders (optionally for one candidate). Admin PAT only.
[**getProductionPoReconcile()**](ProductionApi.md#getProductionPoReconcile) | **GET** /v1/production/pos/{poId}/reconcile | Ops: reconcile a PO&#39;s actuals against the estimate. Admin PAT only.
[**getProductionRun()**](ProductionApi.md#getProductionRun) | **GET** /v1/production/runs | Browse open limited-edition physical runs (graduated designs).
[**getShopListingProvenance()**](ProductionApi.md#getShopListingProvenance) | **GET** /v1/shop/listings/{slug}/provenance | Crossly provenance behind a shop listing: owners on Crossly and since when (never who or for how much). Null when not bought here.
[**updateProductionPo()**](ProductionApi.md#updateProductionPo) | **PATCH** /v1/production/pos/{poId} | Ops: update a PO (supplier, freight, actuals, QC, status). Admin PAT only.


## `createProductionCandidateAccept()`

```php
createProductionCandidateAccept($id): \Crossly\Model\Production\CreateProductionCandidateAcceptResponse
```

Accept a graduated design's production terms (edition size, cost, holder access).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createProductionCandidateAccept($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->createProductionCandidateAccept: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Production\CreateProductionCandidateAcceptResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createProductionCandidatePo()`

```php
createProductionCandidatePo($id): \Crossly\Model\Production\UpdateProductionPoResponse
```

Ops: open a purchase order for a candidate. Admin PAT only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createProductionCandidatePo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->createProductionCandidatePo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Production\UpdateProductionPoResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createProductionCandidateVote()`

```php
createProductionCandidateVote($id): \Crossly\Model\Production\CreateProductionCandidateVoteResponse
```

Back (support: true) or un-back a design on the production ballot. One vote per person per design; voters must have bought on Crossly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createProductionCandidateVote($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->createProductionCandidateVote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Production\CreateProductionCandidateVoteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createProductionDesignBrief()`

```php
createProductionDesignBrief($cosmetic_id): \Crossly\Model\Production\CreateProductionDesignSpecResponse
```

Set a design's production brief (materials, finish, box, reference images).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cosmetic_id = 'cosmetic_id_example'; // string

try {
    $result = $apiInstance->createProductionDesignBrief($cosmetic_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->createProductionDesignBrief: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cosmetic_id** | **string**|  |

### Return type

**\Crossly\Model\Production\CreateProductionDesignSpecResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createProductionDesignConsent()`

```php
createProductionDesignConsent($cosmetic_id): \Crossly\Model\Production\CreateProductionDesignSpecResponse
```

Opt a design in or out of physical production.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cosmetic_id = 'cosmetic_id_example'; // string

try {
    $result = $apiInstance->createProductionDesignConsent($cosmetic_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->createProductionDesignConsent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cosmetic_id** | **string**|  |

### Return type

**\Crossly\Model\Production\CreateProductionDesignSpecResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createProductionDesignSpec()`

```php
createProductionDesignSpec($cosmetic_id): \Crossly\Model\Production\CreateProductionDesignSpecResponse
```

Set a design's production spec (category, materials, complexity, packaging).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cosmetic_id = 'cosmetic_id_example'; // string

try {
    $result = $apiInstance->createProductionDesignSpec($cosmetic_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->createProductionDesignSpec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cosmetic_id** | **string**|  |

### Return type

**\Crossly\Model\Production\CreateProductionDesignSpecResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createProductionEstimate()`

```php
createProductionEstimate(): \Crossly\Model\Production\CreateProductionEstimateResponse
```

Estimate a run's landed cost from a spec + edition size (overshoots for safety).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createProductionEstimate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->createProductionEstimate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Production\CreateProductionEstimateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createProductionRunPurchase()`

```php
createProductionRunPurchase($id): \Crossly\Model\Production\CreateProductionRunPurchaseResponse
```

Buy a limited-edition unit of a physical run (holder pricing applies).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createProductionRunPurchase($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->createProductionRunPurchase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Production\CreateProductionRunPurchaseResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createReceiptRelist()`

```php
createReceiptRelist($id): \Crossly\Model\Common\CreateReceiptRelistResponse
```

Sell it again: a draft listing of something you bought on Crossly, carrying its purchase receipt so the next buyer inherits its provenance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createReceiptRelist($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->createReceiptRelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\CreateReceiptRelistResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductionBallot()`

```php
getProductionBallot(): \Crossly\Model\Production\GetProductionBallotResponse
```

The ballot: designs waiting for a physical run, most backed first, and whether you may vote.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getProductionBallot();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->getProductionBallot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Production\GetProductionBallotResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductionCandidate()`

```php
getProductionCandidate(): \Crossly\Model\Production\GetProductionCandidateResponse
```

Your designs that have graduated toward a physical run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getProductionCandidate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->getProductionCandidate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Production\GetProductionCandidateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductionDesignPref()`

```php
getProductionDesignPref($cosmetic_id): \Crossly\Model\Production\GetProductionDesignPrefResponse
```

Read a design's production preferences (spec, brief, opt-out).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cosmetic_id = 'cosmetic_id_example'; // string

try {
    $result = $apiInstance->getProductionDesignPref($cosmetic_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->getProductionDesignPref: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cosmetic_id** | **string**|  |

### Return type

**\Crossly\Model\Production\GetProductionDesignPrefResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductionDrop()`

```php
getProductionDrop(): \Crossly\Model\Production\GetProductionDropResponse
```

Limited-edition units you own, with fulfillment status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getProductionDrop();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->getProductionDrop: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Production\GetProductionDropResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductionEarning()`

```php
getProductionEarning(): \Crossly\Model\Production\GetProductionEarningResponse
```

Your CBX earnings from physical production (royalties + balance + lines).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getProductionEarning();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->getProductionEarning: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Production\GetProductionEarningResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductionLine()`

```php
getProductionLine(): \Crossly\Model\Production\GetProductionLineResponse
```

Your production lines dashboard (candidate + run + inventory).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getProductionLine();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->getProductionLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Production\GetProductionLineResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductionPo()`

```php
getProductionPo($candidate_id): \Crossly\Model\Production\GetProductionPoResponse
```

Ops: list purchase orders (optionally for one candidate). Admin PAT only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$candidate_id = 'candidate_id_example'; // string

try {
    $result = $apiInstance->getProductionPo($candidate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->getProductionPo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **candidate_id** | **string**|  | [optional]

### Return type

**\Crossly\Model\Production\GetProductionPoResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductionPoReconcile()`

```php
getProductionPoReconcile($po_id): \Crossly\Model\Production\GetProductionPoReconcileResponse
```

Ops: reconcile a PO's actuals against the estimate. Admin PAT only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$po_id = 'po_id_example'; // string

try {
    $result = $apiInstance->getProductionPoReconcile($po_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->getProductionPoReconcile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **po_id** | **string**|  |

### Return type

**\Crossly\Model\Production\GetProductionPoReconcileResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductionRun()`

```php
getProductionRun(): \Crossly\Model\Production\GetProductionRunResponse
```

Browse open limited-edition physical runs (graduated designs).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getProductionRun();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->getProductionRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Production\GetProductionRunResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getShopListingProvenance()`

```php
getShopListingProvenance($slug): \Crossly\Model\Common\GetShopListingProvenanceResponse
```

Crossly provenance behind a shop listing: owners on Crossly and since when (never who or for how much). Null when not bought here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getShopListingProvenance($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->getShopListingProvenance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Common\GetShopListingProvenanceResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateProductionPo()`

```php
updateProductionPo($po_id): \Crossly\Model\Production\UpdateProductionPoResponse
```

Ops: update a PO (supplier, freight, actuals, QC, status). Admin PAT only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ProductionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$po_id = 'po_id_example'; // string

try {
    $result = $apiInstance->updateProductionPo($po_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionApi->updateProductionPo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **po_id** | **string**|  |

### Return type

**\Crossly\Model\Production\UpdateProductionPoResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
