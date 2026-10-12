# Crossly\ScanApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listScanCaptures()**](ScanApi.md#listScanCaptures) | **GET** /v1/scan/captures | Your capture sessions and what they produced.
[**listScanModels()**](ScanApi.md#listScanModels) | **GET** /v1/scan/models | Which items already have a 3D model.


## `listScanCaptures()`

```php
listScanCaptures($status, $limit): \Crossly\Model\Common\ListScanCapturesResponse
```

Your capture sessions and what they produced.

One row per scan, newest first. `status` is capturing | uploaded | processing | ready | failed | rejected; `rejectReason` says why in the same words the seller was shown. A capture that reports `ready` with no mesh is normal — most items are textured onto a known shape rather than having geometry generated, which is cheaper and looks the same. When an item that WOULD have been generated was not, `generationSkipped` says why: out of monthly allowance, too few distinct angles, or you had already had a model built from this object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ScanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string | Filter to one status.
$limit = 25; // int

try {
    $result = $apiInstance->listScanCaptures($status, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScanApi->listScanCaptures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Filter to one status. | [optional]
 **limit** | **int**|  | [optional] [default to 25]

### Return type

**\Crossly\Model\Common\ListScanCapturesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listScanModels()`

```php
listScanModels($variant_ids, $inventory_item_ids): \Crossly\Model\Common\ListScanModelsResponse
```

Which items already have a 3D model.

Ask by CATALOGUE variant (`variantIds`) or by your own inventory rows (`inventoryItemIds`), comma separated, up to 200 of each. At least one is required. Returns only the ones that have a model. The two are different KINDS of answer. A catalogue model belongs to the product and is shared: a hit means your listing gets it with nothing to capture, because somebody else already paid to generate it. An inventory model belongs to one of your rows, because an object with no catalogue identity — a lamp, a one-off — is not a product anyone else can claim. `longestEdgeMm` is present only when a capture MEASURED the item against something of known size; null means the mesh has correct proportions and no real-world scale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ScanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$variant_ids = 'variant_ids_example'; // string | Comma-separated catalogue variant ids, max 200.
$inventory_item_ids = 'inventory_item_ids_example'; // string | Comma-separated inventory item ids, max 200.

try {
    $result = $apiInstance->listScanModels($variant_ids, $inventory_item_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScanApi->listScanModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variant_ids** | **string**| Comma-separated catalogue variant ids, max 200. | [optional]
 **inventory_item_ids** | **string**| Comma-separated inventory item ids, max 200. | [optional]

### Return type

**\Crossly\Model\Common\ListScanModelsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
