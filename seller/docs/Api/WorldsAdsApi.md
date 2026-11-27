# Crossly\WorldsAdsApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWorldExperienceAd()**](WorldsAdsApi.md#getWorldExperienceAd) | **GET** /v1/worlds/experiences/{experienceId}/ads | The ads for a game&#39;s in-world ad surfaces (parts tagged CrosslyAdSurface), for the token&#39;s owner: Sponsored Listings labelled \&quot;Ad\&quot;, served only to signed-in adults where the game&#39;s creator turned ads on, never to its team. A click is POST /api/public/shop/ads/click { token }.
[**getWorldExperienceAdReport()**](WorldsAdsApi.md#getWorldExperienceAdReport) | **GET** /v1/worlds/experiences/{experienceId}/ads/report | In-game ads over the last N days (default 30, max 90): impressions, clicks, charged clicks, advertiser spend and your earned share, per day.
[**getWorldExperienceAdSetting()**](WorldsAdsApi.md#getWorldExperienceAdSetting) | **GET** /v1/worlds/experiences/{experienceId}/ad-settings | Whether this game shows in-game ads (opt-in, default off) and the creator&#39;s share of Crossly&#39;s ad revenue in force.
[**updateWorldExperienceAdSetting()**](WorldsAdsApi.md#updateWorldExperienceAdSetting) | **PUT** /v1/worlds/experiences/{experienceId}/ad-settings | Turn in-game ads on or off for this game. Ads fill the game&#39;s ad surfaces (parts tagged CrosslyAdSurface); nothing shows until it has one.


## `getWorldExperienceAd()`

```php
getWorldExperienceAd($experience_id): \Crossly\Model\World\GetWorldExperienceAdResponse
```

The ads for a game's in-world ad surfaces (parts tagged CrosslyAdSurface), for the token's owner: Sponsored Listings labelled \"Ad\", served only to signed-in adults where the game's creator turned ads on, never to its team. A click is POST /api/public/shop/ads/click { token }.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->getWorldExperienceAd($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsAdsApi->getWorldExperienceAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceAdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperienceAdReport()`

```php
getWorldExperienceAdReport($experience_id): \Crossly\Model\World\GetWorldExperienceAdReportResponse
```

In-game ads over the last N days (default 30, max 90): impressions, clicks, charged clicks, advertiser spend and your earned share, per day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->getWorldExperienceAdReport($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsAdsApi->getWorldExperienceAdReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceAdReportResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperienceAdSetting()`

```php
getWorldExperienceAdSetting($experience_id): \Crossly\Model\World\GetWorldExperienceAdSettingResponse
```

Whether this game shows in-game ads (opt-in, default off) and the creator's share of Crossly's ad revenue in force.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->getWorldExperienceAdSetting($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsAdsApi->getWorldExperienceAdSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceAdSettingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldExperienceAdSetting()`

```php
updateWorldExperienceAdSetting($experience_id): \Crossly\Model\World\GetWorldExperienceAdSettingResponse
```

Turn in-game ads on or off for this game. Ads fill the game's ad surfaces (parts tagged CrosslyAdSurface); nothing shows until it has one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->updateWorldExperienceAdSetting($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsAdsApi->updateWorldExperienceAdSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceAdSettingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
