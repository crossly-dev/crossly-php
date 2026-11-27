# Crossly\SandboxApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSandboxReset()**](SandboxApi.md#createSandboxReset) | **POST** /v1/sandbox/reset | Restore the sandbox seller to its seed. Your grant and webhook subscriptions are kept.
[**createSandboxSimulateInventory()**](SandboxApi.md#createSandboxSimulateInventory) | **POST** /v1/sandbox/simulate/inventory | Change stock (set, increase or decrease); the new quantity is pushed to every channel.
[**createSandboxSimulateListingSoldOut()**](SandboxApi.md#createSandboxSimulateListingSoldOut) | **POST** /v1/sandbox/simulate/listing.sold_out | A listing sells out on a marketplace with no order (stock moves, other channels delist).
[**createSandboxSimulateOrder()**](SandboxApi.md#createSandboxSimulateOrder) | **POST** /v1/sandbox/simulate/order | Simulate a sale through the real sale pipeline (order.created, sale.detected, stock and cross-channel updates).
[**createSandboxSimulateOrderAddress()**](SandboxApi.md#createSandboxSimulateOrderAddress) | **POST** /v1/sandbox/simulate/order.address | The buyer address of an order simulated with address \&quot;delayed\&quot; arrives now (order.address_available).
[**createSandboxSimulateOrderCancelled()**](SandboxApi.md#createSandboxSimulateOrderCancelled) | **POST** /v1/sandbox/simulate/order.cancelled | The buyer or the marketplace cancels an order (order.cancelled).
[**createSandboxSimulateOrderDelivered()**](SandboxApi.md#createSandboxSimulateOrderDelivered) | **POST** /v1/sandbox/simulate/order.delivered | The carrier delivers a shipped order (order.delivered).
[**createSandboxSimulateRefund()**](SandboxApi.md#createSandboxSimulateRefund) | **POST** /v1/sandbox/simulate/refund | Refund an order in full or in part (refund.issued).
[**getSandbox()**](SandboxApi.md#getSandbox) | **GET** /v1/sandbox | The sandbox seller this token acts on, its simulated channels and the failure modes.
[**listSandboxEvents()**](SandboxApi.md#listSandboxEvents) | **GET** /v1/sandbox/events | The simulated marketplaces&#39; call log: verb, channel, outcome, latency.


## `createSandboxReset()`

```php
createSandboxReset(): \Crossly\Model\Sandbox\CreateSandboxResetResponse
```

Restore the sandbox seller to its seed. Your grant and webhook subscriptions are kept.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createSandboxReset();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->createSandboxReset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Sandbox\CreateSandboxResetResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSandboxSimulateInventory()`

```php
createSandboxSimulateInventory(): \Crossly\Model\Inbox\CreateInboxConversationBulkResponse
```

Change stock (set, increase or decrease); the new quantity is pushed to every channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createSandboxSimulateInventory();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->createSandboxSimulateInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Inbox\CreateInboxConversationBulkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSandboxSimulateListingSoldOut()`

```php
createSandboxSimulateListingSoldOut(): \Crossly\Model\Sandbox\CreateSandboxSimulateListingSoldOutResponse
```

A listing sells out on a marketplace with no order (stock moves, other channels delist).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createSandboxSimulateListingSoldOut();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->createSandboxSimulateListingSoldOut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Sandbox\CreateSandboxSimulateListingSoldOutResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSandboxSimulateOrder()`

```php
createSandboxSimulateOrder(): \Crossly\Model\Sandbox\CreateSandboxSimulateOrderResponse
```

Simulate a sale through the real sale pipeline (order.created, sale.detected, stock and cross-channel updates).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createSandboxSimulateOrder();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->createSandboxSimulateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Sandbox\CreateSandboxSimulateOrderResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSandboxSimulateOrderAddress()`

```php
createSandboxSimulateOrderAddress(): \Crossly\Model\Sandbox\CreateSandboxSimulateOrderAddressResponse
```

The buyer address of an order simulated with address \"delayed\" arrives now (order.address_available).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createSandboxSimulateOrderAddress();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->createSandboxSimulateOrderAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Sandbox\CreateSandboxSimulateOrderAddressResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSandboxSimulateOrderCancelled()`

```php
createSandboxSimulateOrderCancelled(): \Crossly\Model\Sandbox\CreateSandboxSimulateOrderCancelledResponse
```

The buyer or the marketplace cancels an order (order.cancelled).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createSandboxSimulateOrderCancelled();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->createSandboxSimulateOrderCancelled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Sandbox\CreateSandboxSimulateOrderCancelledResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSandboxSimulateOrderDelivered()`

```php
createSandboxSimulateOrderDelivered(): \Crossly\Model\Sandbox\CreateSandboxSimulateOrderDeliveredResponse
```

The carrier delivers a shipped order (order.delivered).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createSandboxSimulateOrderDelivered();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->createSandboxSimulateOrderDelivered: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Sandbox\CreateSandboxSimulateOrderDeliveredResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSandboxSimulateRefund()`

```php
createSandboxSimulateRefund(): \Crossly\Model\Sandbox\CreateSandboxSimulateRefundResponse
```

Refund an order in full or in part (refund.issued).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createSandboxSimulateRefund();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->createSandboxSimulateRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Sandbox\CreateSandboxSimulateRefundResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getSandbox()`

```php
getSandbox(): \Crossly\Model\Sandbox\GetSandboxResponse
```

The sandbox seller this token acts on, its simulated channels and the failure modes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSandbox();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->getSandbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Sandbox\GetSandboxResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listSandboxEvents()`

```php
listSandboxEvents(): \Crossly\Model\Sandbox\ListSandboxEventsResponse
```

The simulated marketplaces' call log: verb, channel, outcome, latency.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listSandboxEvents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->listSandboxEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Sandbox\ListSandboxEventsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
