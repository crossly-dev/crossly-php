# Crossly\AccountApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccountCancelDeletion()**](AccountApi.md#createAccountCancelDeletion) | **POST** /v1/account/cancel-deletion | Cancel a pending account deletion.
[**createAccountLogoutAll()**](AccountApi.md#createAccountLogoutAll) | **POST** /v1/account/logout-all | Revoke every browser auth session for this user.
[**createAccountRequestDeletion()**](AccountApi.md#createAccountRequestDeletion) | **POST** /v1/account/request-deletion | Schedule account deletion after a grace period.
[**deleteAuthSession()**](AccountApi.md#deleteAuthSession) | **DELETE** /v1/auth/sessions | Revoke all active browser sessions.
[**deleteAuthSessionBySessionId()**](AccountApi.md#deleteAuthSessionBySessionId) | **DELETE** /v1/auth/sessions/{sessionId} | Revoke a single browser session by id.
[**deleteConnectedApp()**](AccountApi.md#deleteConnectedApp) | **DELETE** /v1/connected-apps/{grantId} | Disconnect a third-party app. Its tokens stop working immediately.
[**getAccountDeletionStatus()**](AccountApi.md#getAccountDeletionStatus) | **GET** /v1/account/deletion-status | Get the currently-pending deletion request, if any.
[**getMe()**](AccountApi.md#getMe) | **GET** /v1/me | Identity check — authenticated user + PAT scopes + account state.
[**listAuthSessions()**](AccountApi.md#listAuthSessions) | **GET** /v1/auth/sessions | List active browser auth sessions.
[**listConnectedApps()**](AccountApi.md#listConnectedApps) | **GET** /v1/connected-apps | List third-party OAuth apps with access to this account.


## `createAccountCancelDeletion()`

```php
createAccountCancelDeletion(): \Crossly\Model\CreateAccountCancelDeletionResponse
```

Cancel a pending account deletion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAccountCancelDeletion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->createAccountCancelDeletion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateAccountCancelDeletionResponse**](../Model/CreateAccountCancelDeletionResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccountLogoutAll()`

```php
createAccountLogoutAll(): \Crossly\Model\CreateAccountLogoutAllResponse
```

Revoke every browser auth session for this user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAccountLogoutAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->createAccountLogoutAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateAccountLogoutAllResponse**](../Model/CreateAccountLogoutAllResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccountRequestDeletion()`

```php
createAccountRequestDeletion(): \Crossly\Model\CreateAccountRequestDeletionResponse
```

Schedule account deletion after a grace period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAccountRequestDeletion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->createAccountRequestDeletion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateAccountRequestDeletionResponse**](../Model/CreateAccountRequestDeletionResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAuthSession()`

```php
deleteAuthSession(): \Crossly\Model\DeleteAuthSessionResponse
```

Revoke all active browser sessions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteAuthSession();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->deleteAuthSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\DeleteAuthSessionResponse**](../Model/DeleteAuthSessionResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAuthSessionBySessionId()`

```php
deleteAuthSessionBySessionId($session_id): \Crossly\Model\DeleteAuthSessionBySessionIdResponse
```

Revoke a single browser session by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string

try {
    $result = $apiInstance->deleteAuthSessionBySessionId($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->deleteAuthSessionBySessionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**|  |

### Return type

[**\Crossly\Model\DeleteAuthSessionBySessionIdResponse**](../Model/DeleteAuthSessionBySessionIdResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteConnectedApp()`

```php
deleteConnectedApp($grant_id): \Crossly\Model\DeleteConnectedAppResponse
```

Disconnect a third-party app. Its tokens stop working immediately.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grant_id = 'grant_id_example'; // string

try {
    $result = $apiInstance->deleteConnectedApp($grant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->deleteConnectedApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_id** | **string**|  |

### Return type

[**\Crossly\Model\DeleteConnectedAppResponse**](../Model/DeleteConnectedAppResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountDeletionStatus()`

```php
getAccountDeletionStatus(): \Crossly\Model\GetAccountDeletionStatusResponse
```

Get the currently-pending deletion request, if any.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccountDeletionStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountDeletionStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\GetAccountDeletionStatusResponse**](../Model/GetAccountDeletionStatusResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMe()`

```php
getMe(): \Crossly\Model\InlineResponse200
```

Identity check — authenticated user + PAT scopes + account state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAuthSessions()`

```php
listAuthSessions(): V1List
```

List active browser auth sessions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listAuthSessions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->listAuthSessions: ', $e->getMessage(), PHP_EOL;
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

## `listConnectedApps()`

```php
listConnectedApps(): V1List
```

List third-party OAuth apps with access to this account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listConnectedApps();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->listConnectedApps: ', $e->getMessage(), PHP_EOL;
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
