# Crossly\WorldsRewardsApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWorldExperienceRewardClose()**](WorldsRewardsApi.md#createWorldExperienceRewardClose) | **POST** /v1/worlds/experiences/{experienceId}/rewards/close | Close the pool: the unspent balance returns to your Crossly Carnival earnings. Free rewards keep working.
[**createWorldExperienceRewardDefinition()**](WorldsRewardsApi.md#createWorldExperienceRewardDefinition) | **POST** /v1/worlds/experiences/{experienceId}/rewards/definitions | Add a reward scripts can grant: pin, emote, decor, item (your own COSM design), cosm or cbx (with an amount).
[**createWorldExperienceRewardDeposit()**](WorldsRewardsApi.md#createWorldExperienceRewardDeposit) | **POST** /v1/worlds/experiences/{experienceId}/rewards/deposits | Move available Crossly Carnival earnings into the pool ($1-$10,000). Owner only; idempotent on idempotencyKey.
[**createWorldExperienceRewardTopup()**](WorldsRewardsApi.md#createWorldExperienceRewardTopup) | **POST** /v1/worlds/experiences/{experienceId}/rewards/topups | Open a card top-up ($5-$10,000 into the pool; the 2.9% + 30¢ card fee is added on top). Returns checkoutUrl, where the owner pays with Crossly checkout; the pool is credited once when the payment lands. Owner only.
[**createWorldRewardTopupCancel()**](WorldsRewardsApi.md#createWorldRewardTopupCancel) | **POST** /v1/worlds/rewards/topups/{topupId}/cancel | Cancel an unpaid top-up sheet.
[**getWorldExperienceReward()**](WorldsRewardsApi.md#getWorldExperienceReward) | **GET** /v1/worlds/experiences/{experienceId}/rewards | The funded reward pool: balance, reserved (owed) value, caps, today&#39;s grants, the reward catalogue and the published rates.
[**getWorldRewardTopup()**](WorldsRewardsApi.md#getWorldRewardTopup) | **GET** /v1/worlds/rewards/topups/{topupId} | One card top-up: its status (open, paying, paid, cancelled, expired, refused), amounts and the pool it funds.
[**listWorldExperienceRewardGrants()**](WorldsRewardsApi.md#listWorldExperienceRewardGrants) | **GET** /v1/worlds/experiences/{experienceId}/rewards/grants | Every grant, newest first: reward, player sub, amount, cost, status. Cursor-paged; ?sub&#x3D; for one player.
[**listWorldExperienceRewardLedger()**](WorldsRewardsApi.md#listWorldExperienceRewardLedger) | **GET** /v1/worlds/experiences/{experienceId}/rewards/ledger | The pool&#39;s own ledger: deposits, grant draw-downs, refunds. Cursor-paged.
[**listWorldExperienceRewardTopups()**](WorldsRewardsApi.md#listWorldExperienceRewardTopups) | **GET** /v1/worlds/experiences/{experienceId}/rewards/topups | Card top-ups of the reward pool, newest first: amount into the pool, card fee, status, what went back to the card.
[**updateWorldExperienceRewardDefinition()**](WorldsRewardsApi.md#updateWorldExperienceRewardDefinition) | **PATCH** /v1/worlds/experiences/{experienceId}/rewards/definitions/{rewardId} | Edit a reward: name, description, image, amount, per-player daily cap, on/off. Key and kind never change.
[**updateWorldExperienceRewardPool()**](WorldsRewardsApi.md#updateWorldExperienceRewardPool) | **PATCH** /v1/worlds/experiences/{experienceId}/rewards/pool | Set the pool&#39;s daily caps: total value per day, value and grant count per player per day.


## `createWorldExperienceRewardClose()`

```php
createWorldExperienceRewardClose($experience_id): \Crossly\Model\World\CreateWorldExperienceRewardCloseResponse
```

Close the pool: the unspent balance returns to your Crossly Carnival earnings. Free rewards keep working.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsRewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->createWorldExperienceRewardClose($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsRewardsApi->createWorldExperienceRewardClose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperienceRewardCloseResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperienceRewardDefinition()`

```php
createWorldExperienceRewardDefinition($experience_id): \Crossly\Model\World\CreateWorldExperienceRewardDefinitionResponse
```

Add a reward scripts can grant: pin, emote, decor, item (your own COSM design), cosm or cbx (with an amount).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsRewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->createWorldExperienceRewardDefinition($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsRewardsApi->createWorldExperienceRewardDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperienceRewardDefinitionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperienceRewardDeposit()`

```php
createWorldExperienceRewardDeposit($experience_id): \Crossly\Model\World\CreateWorldExperienceRewardDepositResponse
```

Move available Crossly Carnival earnings into the pool ($1-$10,000). Owner only; idempotent on idempotencyKey.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsRewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->createWorldExperienceRewardDeposit($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsRewardsApi->createWorldExperienceRewardDeposit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperienceRewardDepositResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperienceRewardTopup()`

```php
createWorldExperienceRewardTopup($experience_id): \Crossly\Model\World\CreateWorldExperienceRewardTopupResponse
```

Open a card top-up ($5-$10,000 into the pool; the 2.9% + 30¢ card fee is added on top). Returns checkoutUrl, where the owner pays with Crossly checkout; the pool is credited once when the payment lands. Owner only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsRewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->createWorldExperienceRewardTopup($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsRewardsApi->createWorldExperienceRewardTopup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperienceRewardTopupResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldRewardTopupCancel()`

```php
createWorldRewardTopupCancel($topup_id): \Crossly\Model\World\CreateWorldSpaceJoinResponse
```

Cancel an unpaid top-up sheet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsRewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topup_id = 'topup_id_example'; // string

try {
    $result = $apiInstance->createWorldRewardTopupCancel($topup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsRewardsApi->createWorldRewardTopupCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **topup_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldSpaceJoinResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperienceReward()`

```php
getWorldExperienceReward($experience_id): \Crossly\Model\World\GetWorldExperienceRewardResponse
```

The funded reward pool: balance, reserved (owed) value, caps, today's grants, the reward catalogue and the published rates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsRewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->getWorldExperienceReward($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsRewardsApi->getWorldExperienceReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceRewardResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldRewardTopup()`

```php
getWorldRewardTopup($topup_id): \Crossly\Model\World\GetWorldRewardTopupResponse
```

One card top-up: its status (open, paying, paid, cancelled, expired, refused), amounts and the pool it funds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsRewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topup_id = 'topup_id_example'; // string

try {
    $result = $apiInstance->getWorldRewardTopup($topup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsRewardsApi->getWorldRewardTopup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **topup_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldRewardTopupResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldExperienceRewardGrants()`

```php
listWorldExperienceRewardGrants($experience_id): \Crossly\Model\World\ListWorldExperienceRewardGrantsResponse
```

Every grant, newest first: reward, player sub, amount, cost, status. Cursor-paged; ?sub= for one player.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsRewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->listWorldExperienceRewardGrants($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsRewardsApi->listWorldExperienceRewardGrants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldExperienceRewardGrantsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldExperienceRewardLedger()`

```php
listWorldExperienceRewardLedger($experience_id): \Crossly\Model\World\ListWorldExperienceRewardLedgerResponse
```

The pool's own ledger: deposits, grant draw-downs, refunds. Cursor-paged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsRewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->listWorldExperienceRewardLedger($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsRewardsApi->listWorldExperienceRewardLedger: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldExperienceRewardLedgerResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldExperienceRewardTopups()`

```php
listWorldExperienceRewardTopups($experience_id): \Crossly\Model\World\ListWorldExperienceRewardTopupsResponse
```

Card top-ups of the reward pool, newest first: amount into the pool, card fee, status, what went back to the card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsRewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->listWorldExperienceRewardTopups($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsRewardsApi->listWorldExperienceRewardTopups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldExperienceRewardTopupsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldExperienceRewardDefinition()`

```php
updateWorldExperienceRewardDefinition($experience_id, $reward_id): \Crossly\Model\World\CreateWorldExperienceRewardDefinitionResponse
```

Edit a reward: name, description, image, amount, per-player daily cap, on/off. Key and kind never change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsRewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$reward_id = 'reward_id_example'; // string

try {
    $result = $apiInstance->updateWorldExperienceRewardDefinition($experience_id, $reward_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsRewardsApi->updateWorldExperienceRewardDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **reward_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperienceRewardDefinitionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldExperienceRewardPool()`

```php
updateWorldExperienceRewardPool($experience_id): \Crossly\Model\World\UpdateWorldExperienceRewardPoolResponse
```

Set the pool's daily caps: total value per day, value and grant count per player per day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsRewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->updateWorldExperienceRewardPool($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsRewardsApi->updateWorldExperienceRewardPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldExperienceRewardPoolResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
