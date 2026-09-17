# Crossly\AutomationApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAutomationRule()**](AutomationApi.md#createAutomationRule) | **POST** /v1/automation/rules | Create an automation rule.
[**createAutomationRuleImport()**](AutomationApi.md#createAutomationRuleImport) | **POST** /v1/automation/rules/import | Import one or more rules from recipe JSON (single or bundle).
[**createAutomationRuleRunNow()**](AutomationApi.md#createAutomationRuleRunNow) | **POST** /v1/automation/rules/{id}/run-now | Fire an automation rule immediately.
[**createAutomationRuleToggle()**](AutomationApi.md#createAutomationRuleToggle) | **POST** /v1/automation/rules/{id}/toggle | Flip an automation rule between active and inactive.
[**createAutomationRuleValidateRecipe()**](AutomationApi.md#createAutomationRuleValidateRecipe) | **POST** /v1/automation/rules/validate-recipe | Dry-run validate one or more recipes against the live catalog.
[**deleteAutomationRule()**](AutomationApi.md#deleteAutomationRule) | **DELETE** /v1/automation/rules/{id} | Delete an automation rule.
[**getAutomationCatalog()**](AutomationApi.md#getAutomationCatalog) | **GET** /v1/automation/catalog | Supported triggerType / actionType / conditionType values for automation rules.
[**getAutomationRule()**](AutomationApi.md#getAutomationRule) | **GET** /v1/automation/rules/{id} | Get a single automation rule.
[**getAutomationRuleExport()**](AutomationApi.md#getAutomationRuleExport) | **GET** /v1/automation/rules/export | Export the user&#39;s full rule library as a portable recipe bundle.
[**getAutomationRuleExportById()**](AutomationApi.md#getAutomationRuleExportById) | **GET** /v1/automation/rules/{id}/export | Export a single automation rule as a portable recipe.
[**listAutomationRules()**](AutomationApi.md#listAutomationRules) | **GET** /v1/automation/rules | List automation rules.
[**listAutomationRuns()**](AutomationApi.md#listAutomationRuns) | **GET** /v1/automation/runs | Per-fire history for automation rules and workflow chain runs.
[**updateAutomationRule()**](AutomationApi.md#updateAutomationRule) | **PUT** /v1/automation/rules/{id} | Update an automation rule (full replace).


## `createAutomationRule()`

```php
createAutomationRule(): \Crossly\Model\CreateAutomationRuleResponse
```

Create an automation rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAutomationRule();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->createAutomationRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateAutomationRuleResponse**](../Model/CreateAutomationRuleResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAutomationRuleImport()`

```php
createAutomationRuleImport($activate): \Crossly\Model\CreateAutomationRuleImportResponse
```

Import one or more rules from recipe JSON (single or bundle).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activate = false; // bool

try {
    $result = $apiInstance->createAutomationRuleImport($activate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->createAutomationRuleImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activate** | **bool**|  | [optional] [default to false]

### Return type

[**\Crossly\Model\CreateAutomationRuleImportResponse**](../Model/CreateAutomationRuleImportResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAutomationRuleRunNow()`

```php
createAutomationRuleRunNow($id): \Crossly\Model\CreateAutomationRuleRunNowResponse
```

Fire an automation rule immediately.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createAutomationRuleRunNow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->createAutomationRuleRunNow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Crossly\Model\CreateAutomationRuleRunNowResponse**](../Model/CreateAutomationRuleRunNowResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAutomationRuleToggle()`

```php
createAutomationRuleToggle($id): \Crossly\Model\CreateAutomationRuleToggleResponse
```

Flip an automation rule between active and inactive.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createAutomationRuleToggle($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->createAutomationRuleToggle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Crossly\Model\CreateAutomationRuleToggleResponse**](../Model/CreateAutomationRuleToggleResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAutomationRuleValidateRecipe()`

```php
createAutomationRuleValidateRecipe(): \Crossly\Model\CreateAutomationRuleValidateRecipeResponse
```

Dry-run validate one or more recipes against the live catalog.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAutomationRuleValidateRecipe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->createAutomationRuleValidateRecipe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateAutomationRuleValidateRecipeResponse**](../Model/CreateAutomationRuleValidateRecipeResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAutomationRule()`

```php
deleteAutomationRule($id): \Crossly\Model\DeleteAutomationRuleResponse
```

Delete an automation rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteAutomationRule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->deleteAutomationRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Crossly\Model\DeleteAutomationRuleResponse**](../Model/DeleteAutomationRuleResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomationCatalog()`

```php
getAutomationCatalog(): \Crossly\Model\GetAutomationCatalogResponse
```

Supported triggerType / actionType / conditionType values for automation rules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAutomationCatalog();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->getAutomationCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\GetAutomationCatalogResponse**](../Model/GetAutomationCatalogResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomationRule()`

```php
getAutomationRule($id): \Crossly\Model\GetAutomationRuleResponse
```

Get a single automation rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getAutomationRule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->getAutomationRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Crossly\Model\GetAutomationRuleResponse**](../Model/GetAutomationRuleResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomationRuleExport()`

```php
getAutomationRuleExport(): \Crossly\Model\GetAutomationRuleExportResponse
```

Export the user's full rule library as a portable recipe bundle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAutomationRuleExport();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->getAutomationRuleExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\GetAutomationRuleExportResponse**](../Model/GetAutomationRuleExportResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomationRuleExportById()`

```php
getAutomationRuleExportById($id): \Crossly\Model\GetAutomationRuleExportByIdResponse
```

Export a single automation rule as a portable recipe.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getAutomationRuleExportById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->getAutomationRuleExportById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Crossly\Model\GetAutomationRuleExportByIdResponse**](../Model/GetAutomationRuleExportByIdResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAutomationRules()`

```php
listAutomationRules(): V1List
```

List automation rules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listAutomationRules();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->listAutomationRules: ', $e->getMessage(), PHP_EOL;
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

## `listAutomationRuns()`

```php
listAutomationRuns($rule_id, $chain_id, $limit): V1List
```

Per-fire history for automation rules and workflow chain runs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 'rule_id_example'; // string
$chain_id = 'chain_id_example'; // string
$limit = 100; // int

try {
    $result = $apiInstance->listAutomationRuns($rule_id, $chain_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->listAutomationRuns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **string**|  | [optional]
 **chain_id** | **string**|  | [optional]
 **limit** | **int**|  | [optional] [default to 100]

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

## `updateAutomationRule()`

```php
updateAutomationRule($id): \Crossly\Model\UpdateAutomationRuleResponse
```

Update an automation rule (full replace).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateAutomationRule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->updateAutomationRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Crossly\Model\UpdateAutomationRuleResponse**](../Model/UpdateAutomationRuleResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
