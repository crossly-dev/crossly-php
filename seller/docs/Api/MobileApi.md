# Crossly\MobileApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMobilePushTest()**](MobileApi.md#createMobilePushTest) | **POST** /v1/mobile/push-test | Fire a no-op test push to this user&#39;s devices.
[**createMobilePushToken()**](MobileApi.md#createMobilePushToken) | **POST** /v1/mobile/push-token | Register an Expo push token for this user.
[**deleteMobilePushToken()**](MobileApi.md#deleteMobilePushToken) | **DELETE** /v1/mobile/push-tokens | Clear ALL registered push tokens for this user.
[**listMobilePushTokens()**](MobileApi.md#listMobilePushTokens) | **GET** /v1/mobile/push-tokens | List registered Expo push tokens (masked).


## `createMobilePushTest()`

```php
createMobilePushTest(): \Crossly\Model\CreateMobilePushTestResponse
```

Fire a no-op test push to this user's devices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\MobileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createMobilePushTest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileApi->createMobilePushTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateMobilePushTestResponse**](../Model/CreateMobilePushTestResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMobilePushToken()`

```php
createMobilePushToken(): \Crossly\Model\CreateMobilePushTokenResponse
```

Register an Expo push token for this user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\MobileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createMobilePushToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileApi->createMobilePushToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateMobilePushTokenResponse**](../Model/CreateMobilePushTokenResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMobilePushToken()`

```php
deleteMobilePushToken(): \Crossly\Model\DeleteMobilePushTokenResponse
```

Clear ALL registered push tokens for this user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\MobileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteMobilePushToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileApi->deleteMobilePushToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\DeleteMobilePushTokenResponse**](../Model/DeleteMobilePushTokenResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMobilePushTokens()`

```php
listMobilePushTokens(): V1List
```

List registered Expo push tokens (masked).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\MobileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listMobilePushTokens();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileApi->listMobilePushTokens: ', $e->getMessage(), PHP_EOL;
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
