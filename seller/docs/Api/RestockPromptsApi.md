# Crossly\RestockPromptsApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRestockPromptDismiss()**](RestockPromptsApi.md#createRestockPromptDismiss) | **POST** /v1/restock-prompts/{id}/dismiss | Dismiss a pending restock prompt.
[**createRestockPromptRepublish()**](RestockPromptsApi.md#createRestockPromptRepublish) | **POST** /v1/restock-prompts/{id}/republish | Republish a restock prompt to platforms.
[**listRestockPrompts()**](RestockPromptsApi.md#listRestockPrompts) | **GET** /v1/restock-prompts | List pending restock prompts.


## `createRestockPromptDismiss()`

```php
createRestockPromptDismiss($id): \Crossly\Model\CreateRestockPromptDismissResponse
```

Dismiss a pending restock prompt.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\RestockPromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createRestockPromptDismiss($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestockPromptsApi->createRestockPromptDismiss: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Crossly\Model\CreateRestockPromptDismissResponse**](../Model/CreateRestockPromptDismissResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRestockPromptRepublish()`

```php
createRestockPromptRepublish($id): \Crossly\Model\CreateRestockPromptRepublishResponse
```

Republish a restock prompt to platforms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\RestockPromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createRestockPromptRepublish($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestockPromptsApi->createRestockPromptRepublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Crossly\Model\CreateRestockPromptRepublishResponse**](../Model/CreateRestockPromptRepublishResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRestockPrompts()`

```php
listRestockPrompts(): V1List
```

List pending restock prompts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\RestockPromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listRestockPrompts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestockPromptsApi->listRestockPrompts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
