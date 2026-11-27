# Crossly\TCGCreatorsApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTcgCreatorGame()**](TCGCreatorsApi.md#createTcgCreatorGame) | **POST** /v1/tcg/creator/games | Submit a card-game package version for review: game.json, cards.json, rules/game.js, thumb.png, art/_*.png as { path, base64 }. Checked, conformance-run, art quarantined, then reviewed by a person.
[**createTcgCreatorGameCheck()**](TCGCreatorsApi.md#createTcgCreatorGameCheck) | **POST** /v1/tcg/creator/games/check | Check a card-game package exactly as a submission is checked -- the static report and bot games played against your rules in the sandbox -- storing nothing. Files as { path, base64 }.
[**createTcgCreatorGamePackOpen()**](TCGCreatorsApi.md#createTcgCreatorGamePackOpen) | **POST** /v1/tcg/creator/games/{id}/packs/{packId}/open | Open a booster you hold: the game&#39;s rules pick the pulls, the pack is used up, and one COSM copy per card joins your collection (logged with its seed).
[**createTcgCreatorGameStarter()**](TCGCreatorsApi.md#createTcgCreatorGameStarter) | **POST** /v1/tcg/creator/games/{id}/starter | Claim a creator game&#39;s free starter deck by its key (once per account; account-bound, never tradeable).
[**createTcgCreatorGameVersionWithdraw()**](TCGCreatorsApi.md#createTcgCreatorGameVersionWithdraw) | **POST** /v1/tcg/creator/games/{id}/versions/{v}/withdraw | Withdraw one of your versions that is still waiting for review.
[**getTcgCreatorGame()**](TCGCreatorsApi.md#getTcgCreatorGame) | **GET** /v1/tcg/creator/games/{id} | One live creator card game: its set, every card (rules text, rarity, art URL, game data) and its COSM prices.
[**getTcgCreatorGameCollection()**](TCGCreatorsApi.md#getTcgCreatorGameCollection) | **GET** /v1/tcg/creator/games/{id}/collection | Your playable copies of a creator game: card id -&gt; copies (free starter plus every COSM copy you hold).
[**getTcgCreatorGamePopularity()**](TCGCreatorsApi.md#getTcgCreatorGamePopularity) | **GET** /v1/tcg/creator/games/{id}/popularity | The set&#39;s progress toward going on chain: distinct collectors, packs opened and resales against the bar; when it passes, every holder may mint their cards as NFTs.
[**getTcgCreatorGameShelf()**](TCGCreatorsApi.md#getTcgCreatorGameShelf) | **GET** /v1/tcg/creator/games/{id}/shelf | The game&#39;s COSM shelf: the booster and every single, each with its COSM design id (buy via /api/v1/cosm/cosmetics/:id/buy), price, edition cap and copies issued.
[**listTcgCreatorGamePacks()**](TCGCreatorsApi.md#listTcgCreatorGamePacks) | **GET** /v1/tcg/creator/games/{id}/packs | Your unopened boosters of a creator game.
[**listTcgCreatorGames()**](TCGCreatorsApi.md#listTcgCreatorGames) | **GET** /v1/tcg/creator/games | Live creator card games: name, set, description, typical match length, frame colours, thumbnail.
[**listTcgCreatorMine()**](TCGCreatorsApi.md#listTcgCreatorMine) | **GET** /v1/tcg/creator/mine | Your creator card games and every version with its review state and note.


## `createTcgCreatorGame()`

```php
createTcgCreatorGame(): \Crossly\Model\Tcg\CreateTcgCreatorGameResponse
```

Submit a card-game package version for review: game.json, cards.json, rules/game.js, thumb.png, art/_*.png as { path, base64 }. Checked, conformance-run, art quarantined, then reviewed by a person.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TCGCreatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createTcgCreatorGame();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCGCreatorsApi->createTcgCreatorGame: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Tcg\CreateTcgCreatorGameResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createTcgCreatorGameCheck()`

```php
createTcgCreatorGameCheck(): \Crossly\Model\Tcg\CreateTcgCreatorGameCheckResponse
```

Check a card-game package exactly as a submission is checked -- the static report and bot games played against your rules in the sandbox -- storing nothing. Files as { path, base64 }.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TCGCreatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createTcgCreatorGameCheck();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCGCreatorsApi->createTcgCreatorGameCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Tcg\CreateTcgCreatorGameCheckResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createTcgCreatorGamePackOpen()`

```php
createTcgCreatorGamePackOpen($id, $pack_id): \Crossly\Model\Tcg\CreateTcgCreatorGamePackOpenResponse
```

Open a booster you hold: the game's rules pick the pulls, the pack is used up, and one COSM copy per card joins your collection (logged with its seed).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TCGCreatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$pack_id = 'pack_id_example'; // string

try {
    $result = $apiInstance->createTcgCreatorGamePackOpen($id, $pack_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCGCreatorsApi->createTcgCreatorGamePackOpen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **pack_id** | **string**|  |

### Return type

**\Crossly\Model\Tcg\CreateTcgCreatorGamePackOpenResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createTcgCreatorGameStarter()`

```php
createTcgCreatorGameStarter($id): \Crossly\Model\Tcg\CreateTcgStarterResponse
```

Claim a creator game's free starter deck by its key (once per account; account-bound, never tradeable).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TCGCreatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createTcgCreatorGameStarter($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCGCreatorsApi->createTcgCreatorGameStarter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Tcg\CreateTcgStarterResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createTcgCreatorGameVersionWithdraw()`

```php
createTcgCreatorGameVersionWithdraw($id, $v)
```

Withdraw one of your versions that is still waiting for review.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TCGCreatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$v = 'v_example'; // string

try {
    $apiInstance->createTcgCreatorGameVersionWithdraw($id, $v);
} catch (Exception $e) {
    echo 'Exception when calling TCGCreatorsApi->createTcgCreatorGameVersionWithdraw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **v** | **string**|  |

### Return type

void (empty response body)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTcgCreatorGame()`

```php
getTcgCreatorGame($id): \Crossly\Model\Tcg\GetTcgCreatorGameResponse
```

One live creator card game: its set, every card (rules text, rarity, art URL, game data) and its COSM prices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TCGCreatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getTcgCreatorGame($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCGCreatorsApi->getTcgCreatorGame: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Tcg\GetTcgCreatorGameResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTcgCreatorGameCollection()`

```php
getTcgCreatorGameCollection($id): \Crossly\Model\Tcg\GetTcgCreatorGameCollectionResponse
```

Your playable copies of a creator game: card id -> copies (free starter plus every COSM copy you hold).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TCGCreatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getTcgCreatorGameCollection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCGCreatorsApi->getTcgCreatorGameCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Tcg\GetTcgCreatorGameCollectionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTcgCreatorGamePopularity()`

```php
getTcgCreatorGamePopularity($id): \Crossly\Model\Tcg\GetTcgCreatorGamePopularityResponse
```

The set's progress toward going on chain: distinct collectors, packs opened and resales against the bar; when it passes, every holder may mint their cards as NFTs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TCGCreatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getTcgCreatorGamePopularity($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCGCreatorsApi->getTcgCreatorGamePopularity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Tcg\GetTcgCreatorGamePopularityResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTcgCreatorGameShelf()`

```php
getTcgCreatorGameShelf($id): \Crossly\Model\Tcg\GetTcgCreatorGameShelfResponse
```

The game's COSM shelf: the booster and every single, each with its COSM design id (buy via /api/v1/cosm/cosmetics/:id/buy), price, edition cap and copies issued.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TCGCreatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getTcgCreatorGameShelf($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCGCreatorsApi->getTcgCreatorGameShelf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Tcg\GetTcgCreatorGameShelfResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listTcgCreatorGamePacks()`

```php
listTcgCreatorGamePacks($id): \Crossly\Model\Tcg\ListTcgCreatorGamePacksResponse
```

Your unopened boosters of a creator game.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TCGCreatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listTcgCreatorGamePacks($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCGCreatorsApi->listTcgCreatorGamePacks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Tcg\ListTcgCreatorGamePacksResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listTcgCreatorGames()`

```php
listTcgCreatorGames(): \Crossly\Model\Tcg\ListTcgCreatorGamesResponse
```

Live creator card games: name, set, description, typical match length, frame colours, thumbnail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TCGCreatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listTcgCreatorGames();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCGCreatorsApi->listTcgCreatorGames: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Tcg\ListTcgCreatorGamesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listTcgCreatorMine()`

```php
listTcgCreatorMine(): \Crossly\Model\Tcg\ListTcgCreatorMineResponse
```

Your creator card games and every version with its review state and note.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TCGCreatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listTcgCreatorMine();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCGCreatorsApi->listTcgCreatorMine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Tcg\ListTcgCreatorMineResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
