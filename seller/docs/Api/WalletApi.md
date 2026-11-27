# Crossly\WalletApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWalletDefault()**](WalletApi.md#deleteWalletDefault) | **DELETE** /v1/wallet/defaults | Clear a default (the purpose falls back to your only wallet, or none) or one override (&#x60;refKind&#x60; + &#x60;refKey&#x60;).
[**listWalletDefaults()**](WalletApi.md#listWalletDefaults) | **GET** /v1/wallet/defaults | Your default wallet per purpose (royalties, deploys, drops, game rewards, staking, CBX withdrawals), with per-collection and per-game overrides and what each resolves to today.
[**updateWalletDefault()**](WalletApi.md#updateWalletDefault) | **PUT** /v1/wallet/defaults | Set the default wallet for a purpose, or an override for one collection (&#x60;ref: { kind: \&quot;collection\&quot;, chain, contract }&#x60;) or game (&#x60;ref: { kind: \&quot;game\&quot;, experienceId }&#x60;). The wallet must be yours, verified, and on a network the purpose accepts.


## `deleteWalletDefault()`

```php
deleteWalletDefault(): \Crossly\Model\Common\WalletResponse
```

Clear a default (the purpose falls back to your only wallet, or none) or one override (`refKind` + `refKey`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteWalletDefault();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->deleteWalletDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\WalletResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWalletDefaults()`

```php
listWalletDefaults(): \Crossly\Model\Common\WalletResponse
```

Your default wallet per purpose (royalties, deploys, drops, game rewards, staking, CBX withdrawals), with per-collection and per-game overrides and what each resolves to today.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWalletDefaults();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->listWalletDefaults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\WalletResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWalletDefault()`

```php
updateWalletDefault(): \Crossly\Model\Common\WalletResponse
```

Set the default wallet for a purpose, or an override for one collection (`ref: { kind: \"collection\", chain, contract }`) or game (`ref: { kind: \"game\", experienceId }`). The wallet must be yours, verified, and on a network the purpose accepts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateWalletDefault();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->updateWalletDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\WalletResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
