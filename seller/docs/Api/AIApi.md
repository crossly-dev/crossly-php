# Crossly\AIApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAiCategorize()**](AIApi.md#createAiCategorize) | **POST** /v1/ai/categorize | Taxonomy guess from a single image URL.
[**createAiCategorizeFromImage()**](AIApi.md#createAiCategorizeFromImage) | **POST** /v1/ai/categorize-from-image | Taxonomy guess from a single base64 image.
[**createAiEnhanceDescription()**](AIApi.md#createAiEnhanceDescription) | **POST** /v1/ai/enhance-description | SEO-rewrite a listing description.
[**createAiEnhanceListing()**](AIApi.md#createAiEnhanceListing) | **POST** /v1/ai/enhance-listing | Rewrite title + description + tags in one call.
[**createAiEnhanceTitle()**](AIApi.md#createAiEnhanceTitle) | **POST** /v1/ai/enhance-title | SEO-rewrite a listing title.
[**createAiExtractReceipt()**](AIApi.md#createAiExtractReceipt) | **POST** /v1/ai/extract-receipt | Structured data extraction from a receipt photo.
[**createAiGenerateListing()**](AIApi.md#createAiGenerateListing) | **POST** /v1/ai/generate-listing | Generate full listing fields from up to 4 image URLs.
[**createAiHelp()**](AIApi.md#createAiHelp) | **POST** /v1/ai/help | In-app help Q&amp;A grounded in supplied docs.
[**createAiMagicListing()**](AIApi.md#createAiMagicListing) | **POST** /v1/ai/magic-listing | Generate full listing fields from base64 photos.
[**createAiTestKey()**](AIApi.md#createAiTestKey) | **POST** /v1/ai/test-key | Live-ping a candidate BYO-key.
[**deleteAiKey()**](AIApi.md#deleteAiKey) | **DELETE** /v1/ai/key | Remove the BYO-key for a provider.
[**getAiProvider()**](AIApi.md#getAiProvider) | **GET** /v1/ai/providers | Static catalog of supported AI providers.
[**getAiStatus()**](AIApi.md#getAiStatus) | **GET** /v1/ai/status | BYO-key state for the calling user.
[**updateAiKey()**](AIApi.md#updateAiKey) | **PUT** /v1/ai/key | Save an encrypted BYO-key for an AI provider.


## `createAiCategorize()`

```php
createAiCategorize(): \Crossly\Model\CreateAiCategorizeResponse
```

Taxonomy guess from a single image URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAiCategorize();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->createAiCategorize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateAiCategorizeResponse**](../Model/CreateAiCategorizeResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAiCategorizeFromImage()`

```php
createAiCategorizeFromImage(): \Crossly\Model\CreateAiCategorizeFromImageResponse
```

Taxonomy guess from a single base64 image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAiCategorizeFromImage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->createAiCategorizeFromImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateAiCategorizeFromImageResponse**](../Model/CreateAiCategorizeFromImageResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAiEnhanceDescription()`

```php
createAiEnhanceDescription(): \Crossly\Model\CreateAiEnhanceDescriptionResponse
```

SEO-rewrite a listing description.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAiEnhanceDescription();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->createAiEnhanceDescription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateAiEnhanceDescriptionResponse**](../Model/CreateAiEnhanceDescriptionResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAiEnhanceListing()`

```php
createAiEnhanceListing(): \Crossly\Model\CreateAiEnhanceListingResponse
```

Rewrite title + description + tags in one call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAiEnhanceListing();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->createAiEnhanceListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateAiEnhanceListingResponse**](../Model/CreateAiEnhanceListingResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAiEnhanceTitle()`

```php
createAiEnhanceTitle(): \Crossly\Model\CreateAiEnhanceTitleResponse
```

SEO-rewrite a listing title.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAiEnhanceTitle();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->createAiEnhanceTitle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateAiEnhanceTitleResponse**](../Model/CreateAiEnhanceTitleResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAiExtractReceipt()`

```php
createAiExtractReceipt(): \Crossly\Model\CreateAiExtractReceiptResponse
```

Structured data extraction from a receipt photo.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAiExtractReceipt();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->createAiExtractReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateAiExtractReceiptResponse**](../Model/CreateAiExtractReceiptResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAiGenerateListing()`

```php
createAiGenerateListing(): \Crossly\Model\CreateAiGenerateListingResponse
```

Generate full listing fields from up to 4 image URLs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAiGenerateListing();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->createAiGenerateListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateAiGenerateListingResponse**](../Model/CreateAiGenerateListingResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAiHelp()`

```php
createAiHelp(): \Crossly\Model\CreateAiHelpResponse
```

In-app help Q&A grounded in supplied docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAiHelp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->createAiHelp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateAiHelpResponse**](../Model/CreateAiHelpResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAiMagicListing()`

```php
createAiMagicListing(): \Crossly\Model\CreateAiMagicListingResponse
```

Generate full listing fields from base64 photos.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAiMagicListing();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->createAiMagicListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateAiMagicListingResponse**](../Model/CreateAiMagicListingResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAiTestKey()`

```php
createAiTestKey(): \Crossly\Model\CreateAiTestKeyResponse
```

Live-ping a candidate BYO-key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAiTestKey();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->createAiTestKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateAiTestKeyResponse**](../Model/CreateAiTestKeyResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAiKey()`

```php
deleteAiKey(): \Crossly\Model\DeleteAiKeyResponse
```

Remove the BYO-key for a provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteAiKey();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->deleteAiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\DeleteAiKeyResponse**](../Model/DeleteAiKeyResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAiProvider()`

```php
getAiProvider(): \Crossly\Model\GetAiProviderResponse
```

Static catalog of supported AI providers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAiProvider();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->getAiProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\GetAiProviderResponse**](../Model/GetAiProviderResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAiStatus()`

```php
getAiStatus(): \Crossly\Model\GetAiStatusResponse
```

BYO-key state for the calling user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAiStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->getAiStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\GetAiStatusResponse**](../Model/GetAiStatusResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAiKey()`

```php
updateAiKey(): \Crossly\Model\UpdateAiKeyResponse
```

Save an encrypted BYO-key for an AI provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateAiKey();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->updateAiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\UpdateAiKeyResponse**](../Model/UpdateAiKeyResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
