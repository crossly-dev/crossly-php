# Crossly\IntegrationsApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNotificationIntegration()**](IntegrationsApi.md#createNotificationIntegration) | **POST** /v1/notification-integrations | Add a Slack/Discord/Webhook destination.
[**createNotificationIntegrationTest()**](IntegrationsApi.md#createNotificationIntegrationTest) | **POST** /v1/notification-integrations/{id}/test | Fire a canned test message to a notification destination.
[**deleteNotificationIntegration()**](IntegrationsApi.md#deleteNotificationIntegration) | **DELETE** /v1/notification-integrations/{id} | Delete a notification destination.
[**listNotificationIntegrations()**](IntegrationsApi.md#listNotificationIntegrations) | **GET** /v1/notification-integrations | List Slack/Discord/Webhook destinations for notify.* automation actions.
[**updateNotificationIntegration()**](IntegrationsApi.md#updateNotificationIntegration) | **PATCH** /v1/notification-integrations/{id} | Edit a notification destination.


## `createNotificationIntegration()`

```php
createNotificationIntegration(): \Crossly\Model\CreateNotificationIntegrationResponse
```

Add a Slack/Discord/Webhook destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createNotificationIntegration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->createNotificationIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateNotificationIntegrationResponse**](../Model/CreateNotificationIntegrationResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNotificationIntegrationTest()`

```php
createNotificationIntegrationTest($id): \Crossly\Model\CreateNotificationIntegrationTestResponse
```

Fire a canned test message to a notification destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createNotificationIntegrationTest($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->createNotificationIntegrationTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Crossly\Model\CreateNotificationIntegrationTestResponse**](../Model/CreateNotificationIntegrationTestResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNotificationIntegration()`

```php
deleteNotificationIntegration($id): \Crossly\Model\DeleteNotificationIntegrationResponse
```

Delete a notification destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteNotificationIntegration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->deleteNotificationIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Crossly\Model\DeleteNotificationIntegrationResponse**](../Model/DeleteNotificationIntegrationResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listNotificationIntegrations()`

```php
listNotificationIntegrations(): V1List
```

List Slack/Discord/Webhook destinations for notify.* automation actions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listNotificationIntegrations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->listNotificationIntegrations: ', $e->getMessage(), PHP_EOL;
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

## `updateNotificationIntegration()`

```php
updateNotificationIntegration($id): \Crossly\Model\UpdateNotificationIntegrationResponse
```

Edit a notification destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateNotificationIntegration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->updateNotificationIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Crossly\Model\UpdateNotificationIntegrationResponse**](../Model/UpdateNotificationIntegrationResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
