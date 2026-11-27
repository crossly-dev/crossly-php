# Crossly\AnalyticsApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAnalyticExperiment()**](AnalyticsApi.md#createAnalyticExperiment) | **POST** /v1/analytics/experiments | Start a listing experiment. split: 2-4 live platform listings observed over the same window; sequential: one platform listing, before vs after changeAt (optionally applying a new price).
[**createAnalyticExperimentDeclare()**](AnalyticsApi.md#createAnalyticExperimentDeclare) | **POST** /v1/analytics/experiments/{id}/declare | Record the outcome: a winning arm, no difference, or inconclusive. Concludes the experiment.
[**createAnalyticExperimentStop()**](AnalyticsApi.md#createAnalyticExperimentStop) | **POST** /v1/analytics/experiments/{id}/stop | Stop an experiment: no more data is counted after now.
[**deleteAnalyticExperiment()**](AnalyticsApi.md#deleteAnalyticExperiment) | **DELETE** /v1/analytics/experiments/{id} | Delete an experiment. The listings are untouched.
[**getAnalyticBookkeeping()**](AnalyticsApi.md#getAnalyticBookkeeping) | **GET** /v1/analytics/bookkeeping | Monthly P&amp;L + per-platform breakdown for a calendar year.
[**getAnalyticByPlatform()**](AnalyticsApi.md#getAnalyticByPlatform) | **GET** /v1/analytics/by-platform | Sales, net sales, fees and net profit by platform for the last N days.
[**getAnalyticCompare()**](AnalyticsApi.md#getAnalyticCompare) | **GET** /v1/analytics/compare | Compare 2-4 of your listings: columns of price, quality, channels, views, favorites, offers and outcome, engagement curves, the fields that differ, and observational tests of favorite rate, view-to-offer rate and views per day.
[**getAnalyticDashboard()**](AnalyticsApi.md#getAnalyticDashboard) | **GET** /v1/analytics/dashboard | Composite dashboard: KPIs + breakdowns + recent activity.
[**getAnalyticExperiment()**](AnalyticsApi.md#getAnalyticExperiment) | **GET** /v1/analytics/experiments | Your listing A/B experiments, newest first, with status, days running and the current verdict.
[**getAnalyticExperimentById()**](AnalyticsApi.md#getAnalyticExperimentById) | **GET** /v1/analytics/experiments/{id} | One experiment: arms with their windows, exposure and rates, the primary-metric test per arm against A, guardrail tests, the daily series and what to do next.
[**getAnalyticInventory()**](AnalyticsApi.md#getAnalyticInventory) | **GET** /v1/analytics/inventory | Unsold stock: aging buckets with cost, listed value and market value, the 20 listings most in need of attention, shelf value over time, cohort sell-through at the chosen maturity, listed vs sold velocity and data health.
[**getAnalyticItem()**](AnalyticsApi.md#getAnalyticItem) | **GET** /v1/analytics/items | Per-item P&amp;L for sold inventory.
[**getAnalyticItemByListingId()**](AnalyticsApi.md#getAnalyticItemByListingId) | **GET** /v1/analytics/items/{listingId} | One listing in depth: channels with views, favorites and offers, the merged timeline, engagement series, price history, comps, money waterfall, days on market, offers, messages, experiments and suggestions.
[**getAnalyticMarketplace()**](AnalyticsApi.md#getAnalyticMarketplace) | **GET** /v1/analytics/marketplaces | Every marketplace side by side: net sales and profit, units, ASP, take rate, margin, shipping subsidy, days to sell, sell-through, cancel and return rates, offers and engagement; with vs&#x3D;2-3 platforms, a head-to-head over listings live on all of them.
[**getAnalyticMarketplaceByPlatform()**](AnalyticsApi.md#getAnalyticMarketplaceByPlatform) | **GET** /v1/analytics/marketplaces/{platform} | One marketplace in depth: its row, the money series, fee breakdown, days-to-sell and price-realization histograms, categories, top items, at-risk listings, a day-by-hour sales heatmap and offer stats.
[**getAnalyticOverview()**](AnalyticsApi.md#getAnalyticOverview) | **GET** /v1/analytics/overview | KPIs with deltas (net sales, net profit, units, ASP, margin, sell-through, median days to sell, active listings, take rate), the trend series, by-marketplace split, top categories, brands and items, sell-through cohort, data health and insights.
[**getAnalyticPerformance()**](AnalyticsApi.md#getAnalyticPerformance) | **GET** /v1/analytics/performance | Per-listing performance: channels, views, favorites, offers and conversations in the period, units sold, net sales and profit, margin, days to sell and a 0-100 health score, paged and sortable.
[**getAnalyticProgram()**](AnalyticsApi.md#getAnalyticProgram) | **GET** /v1/analytics/programs/{program} | One program&#39;s report over a date range (default the last 30 days, at most 366): KPIs, a daily trend and a breakdown table. Money in integer cents.
[**getAnalyticSegment()**](AnalyticsApi.md#getAnalyticSegment) | **GET** /v1/analytics/segments | Niches along one dimension: listed and active counts, units sold, cohort sell-through, median days to sell, net sales and profit, margin, ROI, ASP and discount from ask; rows under minN are flagged lowSample.
[**getAnalyticSegmentByKey()**](AnalyticsApi.md#getAnalyticSegmentByKey) | **GET** /v1/analytics/segments/{dim}/{key} | One niche in depth: its row, series, by-marketplace split, days-to-sell histogram, price bands, top items and the 10 oldest unsold listings in it.
[**getAnalyticSummary()**](AnalyticsApi.md#getAnalyticSummary) | **GET** /v1/analytics/summary | Headline KPIs for the last N days (the same numbers as the analytics overview).
[**getAnalyticTimesery()**](AnalyticsApi.md#getAnalyticTimesery) | **GET** /v1/analytics/timeseries | Sales and net sales over the last N days, zero-filled, one row per calendar day.
[**getAnalyticToday()**](AnalyticsApi.md#getAnalyticToday) | **GET** /v1/analytics/today | Today&#39;s checklist + 14-day activity streak.
[**listInsightByPlatform()**](AnalyticsApi.md#listInsightByPlatform) | **GET** /v1/insights/by-platform | Platform velocity + margin insight (90-day window): units, net sales, median days to sell, ASP and net after the real marketplace fees.
[**updateAnalyticExperiment()**](AnalyticsApi.md#updateAnalyticExperiment) | **PATCH** /v1/analytics/experiments/{id} | Rename an experiment or change its hypothesis, notes or planned end.


## `createAnalyticExperiment()`

```php
createAnalyticExperiment(): \Crossly\Model\Common\AnalyticExperimentResponse
```

Start a listing experiment. split: 2-4 live platform listings observed over the same window; sequential: one platform listing, before vs after changeAt (optionally applying a new price).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAnalyticExperiment();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->createAnalyticExperiment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\AnalyticExperimentResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createAnalyticExperimentDeclare()`

```php
createAnalyticExperimentDeclare($id): \Crossly\Model\Common\AnalyticExperimentResponse
```

Record the outcome: a winning arm, no difference, or inconclusive. Concludes the experiment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The experiment id (a uuid; any other id is a 404).

try {
    $result = $apiInstance->createAnalyticExperimentDeclare($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->createAnalyticExperimentDeclare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The experiment id (a uuid; any other id is a 404). |

### Return type

**\Crossly\Model\Common\AnalyticExperimentResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createAnalyticExperimentStop()`

```php
createAnalyticExperimentStop($id): \Crossly\Model\Common\AnalyticExperimentResponse
```

Stop an experiment: no more data is counted after now.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The experiment id (a uuid; any other id is a 404).

try {
    $result = $apiInstance->createAnalyticExperimentStop($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->createAnalyticExperimentStop: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The experiment id (a uuid; any other id is a 404). |

### Return type

**\Crossly\Model\Common\AnalyticExperimentResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteAnalyticExperiment()`

```php
deleteAnalyticExperiment($id): \Crossly\Model\Common\DeleteStoryResponse
```

Delete an experiment. The listings are untouched.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The experiment id (a uuid; any other id is a 404).

try {
    $result = $apiInstance->deleteAnalyticExperiment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->deleteAnalyticExperiment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The experiment id (a uuid; any other id is a 404). |

### Return type

**\Crossly\Model\Common\DeleteStoryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticBookkeeping()`

```php
getAnalyticBookkeeping(): \Crossly\Model\Analytic\GetAnalyticBookkeepingResponse
```

Monthly P&L + per-platform breakdown for a calendar year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAnalyticBookkeeping();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticBookkeeping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Analytic\GetAnalyticBookkeepingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticByPlatform()`

```php
getAnalyticByPlatform($days, $tz): \Crossly\Model\Analytic\GetAnalyticByPlatformResponse
```

Sales, net sales, fees and net profit by platform for the last N days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$days = 30; // int | Calendar days back, today included. Larger values are clamped to 365.
$tz = 'tz_example'; // string | IANA time zone for day boundaries. Default UTC.

try {
    $result = $apiInstance->getAnalyticByPlatform($days, $tz);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticByPlatform: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **days** | **int**| Calendar days back, today included. Larger values are clamped to 365. | [optional] [default to 30]
 **tz** | **string**| IANA time zone for day boundaries. Default UTC. | [optional]

### Return type

**\Crossly\Model\Analytic\GetAnalyticByPlatformResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticCompare()`

```php
getAnalyticCompare($ids, $align, $platform, $tz): \Crossly\Model\Analytic\GetAnalyticCompareResponse
```

Compare 2-4 of your listings: columns of price, quality, channels, views, favorites, offers and outcome, engagement curves, the fields that differ, and observational tests of favorite rate, view-to-offer rate and views per day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = 'ids_example'; // string | Comma-separated listing ids, 2 to 4. The first is arm A.
$align = 'align_example'; // string | age = x is days since first listed (default); calendar = x is the date.
$platform = 'platform_example'; // string | Restrict engagement to one channel (platform id).
$tz = 'tz_example'; // string | IANA time zone. Default UTC.

try {
    $result = $apiInstance->getAnalyticCompare($ids, $align, $platform, $tz);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticCompare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| Comma-separated listing ids, 2 to 4. The first is arm A. |
 **align** | **string**| age &#x3D; x is days since first listed (default); calendar &#x3D; x is the date. | [optional]
 **platform** | **string**| Restrict engagement to one channel (platform id). | [optional]
 **tz** | **string**| IANA time zone. Default UTC. | [optional]

### Return type

**\Crossly\Model\Analytic\GetAnalyticCompareResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticDashboard()`

```php
getAnalyticDashboard(): \Crossly\Model\Analytic\GetAnalyticDashboardResponse
```

Composite dashboard: KPIs + breakdowns + recent activity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAnalyticDashboard();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticDashboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Analytic\GetAnalyticDashboardResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticExperiment()`

```php
getAnalyticExperiment($status, $page, $size): \Crossly\Model\Analytic\GetAnalyticExperimentResponse
```

Your listing A/B experiments, newest first, with status, days running and the current verdict.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string | Default all.
$page = 56; // int | 1-indexed page. Default 1.
$size = 56; // int | Rows per page. Default 20.

try {
    $result = $apiInstance->getAnalyticExperiment($status, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticExperiment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Default all. | [optional]
 **page** | **int**| 1-indexed page. Default 1. | [optional]
 **size** | **int**| Rows per page. Default 20. | [optional]

### Return type

**\Crossly\Model\Analytic\GetAnalyticExperimentResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticExperimentById()`

```php
getAnalyticExperimentById($id): \Crossly\Model\Analytic\GetAnalyticExperimentByIdResponse
```

One experiment: arms with their windows, exposure and rates, the primary-metric test per arm against A, guardrail tests, the daily series and what to do next.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The experiment id (a uuid).

try {
    $result = $apiInstance->getAnalyticExperimentById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticExperimentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The experiment id (a uuid). |

### Return type

**\Crossly\Model\Analytic\GetAnalyticExperimentByIdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticInventory()`

```php
getAnalyticInventory($range, $from, $to, $compare, $cmp_from, $cmp_to, $labels, $platforms, $category, $brand, $tz, $maturity): \Crossly\Model\Analytic\GetAnalyticInventoryResponse
```

Unsold stock: aging buckets with cost, listed value and market value, the 20 listings most in need of attention, shelf value over time, cohort sell-through at the chosen maturity, listed vs sold velocity and data health.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$range = 'range_example'; // string | Reporting window. Default 30d. custom needs from and to.
$from = 'from_example'; // string | YYYY-MM-DD, inclusive, in tz. Only with range=custom.
$to = 'to_example'; // string | YYYY-MM-DD, inclusive, in tz. Only with range=custom.
$compare = 'compare_example'; // string | Comparison window for deltas: prev (same length just before), yoy, none, custom (cmpFrom/cmpTo).
$cmp_from = 'cmp_from_example'; // string | YYYY-MM-DD. Only with compare=custom.
$cmp_to = 'cmp_to_example'; // string | YYYY-MM-DD. Only with compare=custom.
$labels = 'labels_example'; // string | Comma-separated inventory labels (any of them).
$platforms = 'platforms_example'; // string | Comma-separated platform ids.
$category = 'category_example'; // string | Canonical main-category key.
$brand = 'brand_example'; // string | Brand name.
$tz = 'tz_example'; // string | IANA time zone for day boundaries. Default UTC. An invalid name is a 400.
$maturity = 56; // int | Days an item has to sell within to count as sold in the cohort. Default 30.

try {
    $result = $apiInstance->getAnalyticInventory($range, $from, $to, $compare, $cmp_from, $cmp_to, $labels, $platforms, $category, $brand, $tz, $maturity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **range** | **string**| Reporting window. Default 30d. custom needs from and to. | [optional]
 **from** | **string**| YYYY-MM-DD, inclusive, in tz. Only with range&#x3D;custom. | [optional]
 **to** | **string**| YYYY-MM-DD, inclusive, in tz. Only with range&#x3D;custom. | [optional]
 **compare** | **string**| Comparison window for deltas: prev (same length just before), yoy, none, custom (cmpFrom/cmpTo). | [optional]
 **cmp_from** | **string**| YYYY-MM-DD. Only with compare&#x3D;custom. | [optional]
 **cmp_to** | **string**| YYYY-MM-DD. Only with compare&#x3D;custom. | [optional]
 **labels** | **string**| Comma-separated inventory labels (any of them). | [optional]
 **platforms** | **string**| Comma-separated platform ids. | [optional]
 **category** | **string**| Canonical main-category key. | [optional]
 **brand** | **string**| Brand name. | [optional]
 **tz** | **string**| IANA time zone for day boundaries. Default UTC. An invalid name is a 400. | [optional]
 **maturity** | **int**| Days an item has to sell within to count as sold in the cohort. Default 30. | [optional]

### Return type

**\Crossly\Model\Analytic\GetAnalyticInventoryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticItem()`

```php
getAnalyticItem(): \Crossly\Model\Analytic\GetAnalyticItemResponse
```

Per-item P&L for sold inventory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAnalyticItem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Analytic\GetAnalyticItemResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticItemByListingId()`

```php
getAnalyticItemByListingId($listing_id, $by, $tz): \Crossly\Model\Analytic\GetAnalyticItemByListingIdResponse
```

One listing in depth: channels with views, favorites and offers, the merged timeline, engagement series, price history, comps, money waterfall, days on market, offers, messages, experiments and suggestions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_id = 'listing_id_example'; // string | A listings.id you own (or an inventory item id with by=inventory).
$by = 'by_example'; // string | inventory = the id is an inventory item id; the answer is { redirectListingId }. Default listing.
$tz = 'tz_example'; // string | IANA time zone for day boundaries. Default UTC.

try {
    $result = $apiInstance->getAnalyticItemByListingId($listing_id, $by, $tz);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticItemByListingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_id** | **string**| A listings.id you own (or an inventory item id with by&#x3D;inventory). |
 **by** | **string**| inventory &#x3D; the id is an inventory item id; the answer is { redirectListingId }. Default listing. | [optional]
 **tz** | **string**| IANA time zone for day boundaries. Default UTC. | [optional]

### Return type

**\Crossly\Model\Analytic\GetAnalyticItemByListingIdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticMarketplace()`

```php
getAnalyticMarketplace($range, $from, $to, $compare, $cmp_from, $cmp_to, $labels, $platforms, $category, $brand, $tz, $vs, $sort, $dir): \Crossly\Model\Analytic\GetAnalyticMarketplaceResponse
```

Every marketplace side by side: net sales and profit, units, ASP, take rate, margin, shipping subsidy, days to sell, sell-through, cancel and return rates, offers and engagement; with vs=2-3 platforms, a head-to-head over listings live on all of them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$range = 'range_example'; // string | Reporting window. Default 30d. custom needs from and to.
$from = 'from_example'; // string | YYYY-MM-DD, inclusive, in tz. Only with range=custom.
$to = 'to_example'; // string | YYYY-MM-DD, inclusive, in tz. Only with range=custom.
$compare = 'compare_example'; // string | Comparison window for deltas: prev (same length just before), yoy, none, custom (cmpFrom/cmpTo).
$cmp_from = 'cmp_from_example'; // string | YYYY-MM-DD. Only with compare=custom.
$cmp_to = 'cmp_to_example'; // string | YYYY-MM-DD. Only with compare=custom.
$labels = 'labels_example'; // string | Comma-separated inventory labels (any of them).
$platforms = 'platforms_example'; // string | Comma-separated platform ids.
$category = 'category_example'; // string | Canonical main-category key.
$brand = 'brand_example'; // string | Brand name.
$tz = 'tz_example'; // string | IANA time zone for day boundaries. Default UTC. An invalid name is a 400.
$vs = 'vs_example'; // string | Comma-separated 2-3 platform ids for the head-to-head.
$sort = 'sort_example'; // string | Default netSales.
$dir = 'dir_example'; // string | Default desc.

try {
    $result = $apiInstance->getAnalyticMarketplace($range, $from, $to, $compare, $cmp_from, $cmp_to, $labels, $platforms, $category, $brand, $tz, $vs, $sort, $dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticMarketplace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **range** | **string**| Reporting window. Default 30d. custom needs from and to. | [optional]
 **from** | **string**| YYYY-MM-DD, inclusive, in tz. Only with range&#x3D;custom. | [optional]
 **to** | **string**| YYYY-MM-DD, inclusive, in tz. Only with range&#x3D;custom. | [optional]
 **compare** | **string**| Comparison window for deltas: prev (same length just before), yoy, none, custom (cmpFrom/cmpTo). | [optional]
 **cmp_from** | **string**| YYYY-MM-DD. Only with compare&#x3D;custom. | [optional]
 **cmp_to** | **string**| YYYY-MM-DD. Only with compare&#x3D;custom. | [optional]
 **labels** | **string**| Comma-separated inventory labels (any of them). | [optional]
 **platforms** | **string**| Comma-separated platform ids. | [optional]
 **category** | **string**| Canonical main-category key. | [optional]
 **brand** | **string**| Brand name. | [optional]
 **tz** | **string**| IANA time zone for day boundaries. Default UTC. An invalid name is a 400. | [optional]
 **vs** | **string**| Comma-separated 2-3 platform ids for the head-to-head. | [optional]
 **sort** | **string**| Default netSales. | [optional]
 **dir** | **string**| Default desc. | [optional]

### Return type

**\Crossly\Model\Analytic\GetAnalyticMarketplaceResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticMarketplaceByPlatform()`

```php
getAnalyticMarketplaceByPlatform($platform, $range, $from, $to, $compare, $cmp_from, $cmp_to, $labels, $platforms, $category, $brand, $tz): \Crossly\Model\Analytic\GetAnalyticMarketplaceByPlatformResponse
```

One marketplace in depth: its row, the money series, fee breakdown, days-to-sell and price-realization histograms, categories, top items, at-risk listings, a day-by-hour sales heatmap and offer stats.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string | A platform id, e.g. ebay, poshmark.
$range = 'range_example'; // string | Reporting window. Default 30d. custom needs from and to.
$from = 'from_example'; // string | YYYY-MM-DD, inclusive, in tz. Only with range=custom.
$to = 'to_example'; // string | YYYY-MM-DD, inclusive, in tz. Only with range=custom.
$compare = 'compare_example'; // string | Comparison window for deltas: prev (same length just before), yoy, none, custom (cmpFrom/cmpTo).
$cmp_from = 'cmp_from_example'; // string | YYYY-MM-DD. Only with compare=custom.
$cmp_to = 'cmp_to_example'; // string | YYYY-MM-DD. Only with compare=custom.
$labels = 'labels_example'; // string | Comma-separated inventory labels (any of them).
$platforms = 'platforms_example'; // string | Comma-separated platform ids.
$category = 'category_example'; // string | Canonical main-category key.
$brand = 'brand_example'; // string | Brand name.
$tz = 'tz_example'; // string | IANA time zone for day boundaries. Default UTC. An invalid name is a 400.

try {
    $result = $apiInstance->getAnalyticMarketplaceByPlatform($platform, $range, $from, $to, $compare, $cmp_from, $cmp_to, $labels, $platforms, $category, $brand, $tz);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticMarketplaceByPlatform: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| A platform id, e.g. ebay, poshmark. |
 **range** | **string**| Reporting window. Default 30d. custom needs from and to. | [optional]
 **from** | **string**| YYYY-MM-DD, inclusive, in tz. Only with range&#x3D;custom. | [optional]
 **to** | **string**| YYYY-MM-DD, inclusive, in tz. Only with range&#x3D;custom. | [optional]
 **compare** | **string**| Comparison window for deltas: prev (same length just before), yoy, none, custom (cmpFrom/cmpTo). | [optional]
 **cmp_from** | **string**| YYYY-MM-DD. Only with compare&#x3D;custom. | [optional]
 **cmp_to** | **string**| YYYY-MM-DD. Only with compare&#x3D;custom. | [optional]
 **labels** | **string**| Comma-separated inventory labels (any of them). | [optional]
 **platforms** | **string**| Comma-separated platform ids. | [optional]
 **category** | **string**| Canonical main-category key. | [optional]
 **brand** | **string**| Brand name. | [optional]
 **tz** | **string**| IANA time zone for day boundaries. Default UTC. An invalid name is a 400. | [optional]

### Return type

**\Crossly\Model\Analytic\GetAnalyticMarketplaceByPlatformResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticOverview()`

```php
getAnalyticOverview($range, $from, $to, $compare, $cmp_from, $cmp_to, $labels, $platforms, $category, $brand, $tz, $stores): \Crossly\Model\Analytic\GetAnalyticOverviewResponse
```

KPIs with deltas (net sales, net profit, units, ASP, margin, sell-through, median days to sell, active listings, take rate), the trend series, by-marketplace split, top categories, brands and items, sell-through cohort, data health and insights.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$range = 'range_example'; // string | Reporting window. Default 30d. custom needs from and to.
$from = 'from_example'; // string | YYYY-MM-DD, inclusive, in tz. Only with range=custom.
$to = 'to_example'; // string | YYYY-MM-DD, inclusive, in tz. Only with range=custom.
$compare = 'compare_example'; // string | Comparison window for deltas: prev (same length just before), yoy, none, custom (cmpFrom/cmpTo).
$cmp_from = 'cmp_from_example'; // string | YYYY-MM-DD. Only with compare=custom.
$cmp_to = 'cmp_to_example'; // string | YYYY-MM-DD. Only with compare=custom.
$labels = 'labels_example'; // string | Comma-separated inventory labels (any of them).
$platforms = 'platforms_example'; // string | Comma-separated platform ids.
$category = 'category_example'; // string | Canonical main-category key.
$brand = 'brand_example'; // string | Brand name.
$tz = 'tz_example'; // string | IANA time zone for day boundaries. Default UTC. An invalid name is a 400.
$stores = 'stores_example'; // string | Comma-separated store ids.

try {
    $result = $apiInstance->getAnalyticOverview($range, $from, $to, $compare, $cmp_from, $cmp_to, $labels, $platforms, $category, $brand, $tz, $stores);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **range** | **string**| Reporting window. Default 30d. custom needs from and to. | [optional]
 **from** | **string**| YYYY-MM-DD, inclusive, in tz. Only with range&#x3D;custom. | [optional]
 **to** | **string**| YYYY-MM-DD, inclusive, in tz. Only with range&#x3D;custom. | [optional]
 **compare** | **string**| Comparison window for deltas: prev (same length just before), yoy, none, custom (cmpFrom/cmpTo). | [optional]
 **cmp_from** | **string**| YYYY-MM-DD. Only with compare&#x3D;custom. | [optional]
 **cmp_to** | **string**| YYYY-MM-DD. Only with compare&#x3D;custom. | [optional]
 **labels** | **string**| Comma-separated inventory labels (any of them). | [optional]
 **platforms** | **string**| Comma-separated platform ids. | [optional]
 **category** | **string**| Canonical main-category key. | [optional]
 **brand** | **string**| Brand name. | [optional]
 **tz** | **string**| IANA time zone for day boundaries. Default UTC. An invalid name is a 400. | [optional]
 **stores** | **string**| Comma-separated store ids. | [optional]

### Return type

**\Crossly\Model\Analytic\GetAnalyticOverviewResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticPerformance()`

```php
getAnalyticPerformance($range, $from, $to, $compare, $cmp_from, $cmp_to, $labels, $platforms, $category, $brand, $tz, $status, $q, $sort, $dir, $page, $size, $min_days): \Crossly\Model\Analytic\GetAnalyticPerformanceResponse
```

Per-listing performance: channels, views, favorites, offers and conversations in the period, units sold, net sales and profit, margin, days to sell and a 0-100 health score, paged and sortable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$range = 'range_example'; // string | Reporting window. Default 30d. custom needs from and to.
$from = 'from_example'; // string | YYYY-MM-DD, inclusive, in tz. Only with range=custom.
$to = 'to_example'; // string | YYYY-MM-DD, inclusive, in tz. Only with range=custom.
$compare = 'compare_example'; // string | Comparison window for deltas: prev (same length just before), yoy, none, custom (cmpFrom/cmpTo).
$cmp_from = 'cmp_from_example'; // string | YYYY-MM-DD. Only with compare=custom.
$cmp_to = 'cmp_to_example'; // string | YYYY-MM-DD. Only with compare=custom.
$labels = 'labels_example'; // string | Comma-separated inventory labels (any of them).
$platforms = 'platforms_example'; // string | Comma-separated platform ids.
$category = 'category_example'; // string | Canonical main-category key.
$brand = 'brand_example'; // string | Brand name.
$tz = 'tz_example'; // string | IANA time zone for day boundaries. Default UTC. An invalid name is a 400.
$status = 'status_example'; // string | unsold = listed at least minDays with no completed sale.
$q = 'q_example'; // string | Title, SKU or brand contains.
$sort = 'sort_example'; // string | Default lastActivity.
$dir = 'dir_example'; // string | Default desc.
$page = 56; // int | 1-indexed page. Default 1.
$size = 56; // int | Rows per page. Default 50.
$min_days = 56; // int | Minimum days listed (for status=unsold). Default 0.

try {
    $result = $apiInstance->getAnalyticPerformance($range, $from, $to, $compare, $cmp_from, $cmp_to, $labels, $platforms, $category, $brand, $tz, $status, $q, $sort, $dir, $page, $size, $min_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticPerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **range** | **string**| Reporting window. Default 30d. custom needs from and to. | [optional]
 **from** | **string**| YYYY-MM-DD, inclusive, in tz. Only with range&#x3D;custom. | [optional]
 **to** | **string**| YYYY-MM-DD, inclusive, in tz. Only with range&#x3D;custom. | [optional]
 **compare** | **string**| Comparison window for deltas: prev (same length just before), yoy, none, custom (cmpFrom/cmpTo). | [optional]
 **cmp_from** | **string**| YYYY-MM-DD. Only with compare&#x3D;custom. | [optional]
 **cmp_to** | **string**| YYYY-MM-DD. Only with compare&#x3D;custom. | [optional]
 **labels** | **string**| Comma-separated inventory labels (any of them). | [optional]
 **platforms** | **string**| Comma-separated platform ids. | [optional]
 **category** | **string**| Canonical main-category key. | [optional]
 **brand** | **string**| Brand name. | [optional]
 **tz** | **string**| IANA time zone for day boundaries. Default UTC. An invalid name is a 400. | [optional]
 **status** | **string**| unsold &#x3D; listed at least minDays with no completed sale. | [optional]
 **q** | **string**| Title, SKU or brand contains. | [optional]
 **sort** | **string**| Default lastActivity. | [optional]
 **dir** | **string**| Default desc. | [optional]
 **page** | **int**| 1-indexed page. Default 1. | [optional]
 **size** | **int**| Rows per page. Default 50. | [optional]
 **min_days** | **int**| Minimum days listed (for status&#x3D;unsold). Default 0. | [optional]

### Return type

**\Crossly\Model\Analytic\GetAnalyticPerformanceResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticProgram()`

```php
getAnalyticProgram($program, $from, $to, $by): \Crossly\Model\Analytic\GetAnalyticProgramResponse
```

One program's report over a date range (default the last 30 days, at most 366): KPIs, a daily trend and a breakdown table. Money in integer cents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$program = 'program_example'; // string
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | First UTC day (YYYY-MM-DD), inclusive.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last UTC day (YYYY-MM-DD), inclusive. Default today.
$by = 'by_example'; // string | Breakdown dimension, when the program offers one (worlds: showroom, property, event).

try {
    $result = $apiInstance->getAnalyticProgram($program, $from, $to, $by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program** | **string**|  |
 **from** | **\DateTime**| First UTC day (YYYY-MM-DD), inclusive. | [optional]
 **to** | **\DateTime**| Last UTC day (YYYY-MM-DD), inclusive. Default today. | [optional]
 **by** | **string**| Breakdown dimension, when the program offers one (worlds: showroom, property, event). | [optional]

### Return type

**\Crossly\Model\Analytic\GetAnalyticProgramResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticSegment()`

```php
getAnalyticSegment($range, $from, $to, $compare, $cmp_from, $cmp_to, $labels, $platforms, $category, $brand, $tz, $dim, $sort, $dir, $min_n, $q): \Crossly\Model\Analytic\GetAnalyticSegmentResponse
```

Niches along one dimension: listed and active counts, units sold, cohort sell-through, median days to sell, net sales and profit, margin, ROI, ASP and discount from ask; rows under minN are flagged lowSample.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$range = 'range_example'; // string | Reporting window. Default 30d. custom needs from and to.
$from = 'from_example'; // string | YYYY-MM-DD, inclusive, in tz. Only with range=custom.
$to = 'to_example'; // string | YYYY-MM-DD, inclusive, in tz. Only with range=custom.
$compare = 'compare_example'; // string | Comparison window for deltas: prev (same length just before), yoy, none, custom (cmpFrom/cmpTo).
$cmp_from = 'cmp_from_example'; // string | YYYY-MM-DD. Only with compare=custom.
$cmp_to = 'cmp_to_example'; // string | YYYY-MM-DD. Only with compare=custom.
$labels = 'labels_example'; // string | Comma-separated inventory labels (any of them).
$platforms = 'platforms_example'; // string | Comma-separated platform ids.
$category = 'category_example'; // string | Canonical main-category key.
$brand = 'brand_example'; // string | Brand name.
$tz = 'tz_example'; // string | IANA time zone for day boundaries. Default UTC. An invalid name is a 400.
$dim = 'dim_example'; // string | category = main category; subcategory = main > sub; brand; condition; size; source = where you acquired it; department; priceBand = ask in <$10, $10-25, $25-50, $50-100, $100-250, $250+; ageBand = days live at sale or now (<7, 7-30, 30-90, 90+).
$sort = 'sort_example'; // string | Default netSales.
$dir = 'dir_example'; // string | Default desc.
$min_n = 56; // int | Minimum sample for a row to count as a winner or loser. Default 3.
$q = 'q_example'; // string | Segment label contains.

try {
    $result = $apiInstance->getAnalyticSegment($range, $from, $to, $compare, $cmp_from, $cmp_to, $labels, $platforms, $category, $brand, $tz, $dim, $sort, $dir, $min_n, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticSegment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **range** | **string**| Reporting window. Default 30d. custom needs from and to. | [optional]
 **from** | **string**| YYYY-MM-DD, inclusive, in tz. Only with range&#x3D;custom. | [optional]
 **to** | **string**| YYYY-MM-DD, inclusive, in tz. Only with range&#x3D;custom. | [optional]
 **compare** | **string**| Comparison window for deltas: prev (same length just before), yoy, none, custom (cmpFrom/cmpTo). | [optional]
 **cmp_from** | **string**| YYYY-MM-DD. Only with compare&#x3D;custom. | [optional]
 **cmp_to** | **string**| YYYY-MM-DD. Only with compare&#x3D;custom. | [optional]
 **labels** | **string**| Comma-separated inventory labels (any of them). | [optional]
 **platforms** | **string**| Comma-separated platform ids. | [optional]
 **category** | **string**| Canonical main-category key. | [optional]
 **brand** | **string**| Brand name. | [optional]
 **tz** | **string**| IANA time zone for day boundaries. Default UTC. An invalid name is a 400. | [optional]
 **dim** | **string**| category &#x3D; main category; subcategory &#x3D; main &gt; sub; brand; condition; size; source &#x3D; where you acquired it; department; priceBand &#x3D; ask in &lt;$10, $10-25, $25-50, $50-100, $100-250, $250+; ageBand &#x3D; days live at sale or now (&lt;7, 7-30, 30-90, 90+). | [optional]
 **sort** | **string**| Default netSales. | [optional]
 **dir** | **string**| Default desc. | [optional]
 **min_n** | **int**| Minimum sample for a row to count as a winner or loser. Default 3. | [optional]
 **q** | **string**| Segment label contains. | [optional]

### Return type

**\Crossly\Model\Analytic\GetAnalyticSegmentResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticSegmentByKey()`

```php
getAnalyticSegmentByKey($dim, $key, $range, $from, $to, $compare, $cmp_from, $cmp_to, $labels, $platforms, $category, $brand, $tz): \Crossly\Model\Analytic\GetAnalyticSegmentByKeyResponse
```

One niche in depth: its row, series, by-marketplace split, days-to-sell histogram, price bands, top items and the 10 oldest unsold listings in it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dim = 'dim_example'; // string | One of category, subcategory, brand, condition, size, source, department, priceBand, ageBand. category = main category; subcategory = main > sub; brand; condition; size; source = where you acquired it; department; priceBand = ask in <$10, $10-25, $25-50, $50-100, $100-250, $250+; ageBand = days live at sale or now (<7, 7-30, 30-90, 90+).
$key = 'key_example'; // string | The segment key from a segments row (URL-encoded). A key with no data in scope is a 404.
$range = 'range_example'; // string | Reporting window. Default 30d. custom needs from and to.
$from = 'from_example'; // string | YYYY-MM-DD, inclusive, in tz. Only with range=custom.
$to = 'to_example'; // string | YYYY-MM-DD, inclusive, in tz. Only with range=custom.
$compare = 'compare_example'; // string | Comparison window for deltas: prev (same length just before), yoy, none, custom (cmpFrom/cmpTo).
$cmp_from = 'cmp_from_example'; // string | YYYY-MM-DD. Only with compare=custom.
$cmp_to = 'cmp_to_example'; // string | YYYY-MM-DD. Only with compare=custom.
$labels = 'labels_example'; // string | Comma-separated inventory labels (any of them).
$platforms = 'platforms_example'; // string | Comma-separated platform ids.
$category = 'category_example'; // string | Canonical main-category key.
$brand = 'brand_example'; // string | Brand name.
$tz = 'tz_example'; // string | IANA time zone for day boundaries. Default UTC. An invalid name is a 400.

try {
    $result = $apiInstance->getAnalyticSegmentByKey($dim, $key, $range, $from, $to, $compare, $cmp_from, $cmp_to, $labels, $platforms, $category, $brand, $tz);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticSegmentByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dim** | **string**| One of category, subcategory, brand, condition, size, source, department, priceBand, ageBand. category &#x3D; main category; subcategory &#x3D; main &gt; sub; brand; condition; size; source &#x3D; where you acquired it; department; priceBand &#x3D; ask in &lt;$10, $10-25, $25-50, $50-100, $100-250, $250+; ageBand &#x3D; days live at sale or now (&lt;7, 7-30, 30-90, 90+). |
 **key** | **string**| The segment key from a segments row (URL-encoded). A key with no data in scope is a 404. |
 **range** | **string**| Reporting window. Default 30d. custom needs from and to. | [optional]
 **from** | **string**| YYYY-MM-DD, inclusive, in tz. Only with range&#x3D;custom. | [optional]
 **to** | **string**| YYYY-MM-DD, inclusive, in tz. Only with range&#x3D;custom. | [optional]
 **compare** | **string**| Comparison window for deltas: prev (same length just before), yoy, none, custom (cmpFrom/cmpTo). | [optional]
 **cmp_from** | **string**| YYYY-MM-DD. Only with compare&#x3D;custom. | [optional]
 **cmp_to** | **string**| YYYY-MM-DD. Only with compare&#x3D;custom. | [optional]
 **labels** | **string**| Comma-separated inventory labels (any of them). | [optional]
 **platforms** | **string**| Comma-separated platform ids. | [optional]
 **category** | **string**| Canonical main-category key. | [optional]
 **brand** | **string**| Brand name. | [optional]
 **tz** | **string**| IANA time zone for day boundaries. Default UTC. An invalid name is a 400. | [optional]

### Return type

**\Crossly\Model\Analytic\GetAnalyticSegmentByKeyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticSummary()`

```php
getAnalyticSummary($days, $tz): \Crossly\Model\Analytic\GetAnalyticSummaryResponse
```

Headline KPIs for the last N days (the same numbers as the analytics overview).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$days = 30; // int | Calendar days back, today included. Larger values are clamped to 365.
$tz = 'tz_example'; // string | IANA time zone for day boundaries. Default UTC.

try {
    $result = $apiInstance->getAnalyticSummary($days, $tz);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **days** | **int**| Calendar days back, today included. Larger values are clamped to 365. | [optional] [default to 30]
 **tz** | **string**| IANA time zone for day boundaries. Default UTC. | [optional]

### Return type

**\Crossly\Model\Analytic\GetAnalyticSummaryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticTimesery()`

```php
getAnalyticTimesery($days, $tz): \Crossly\Model\Analytic\GetAnalyticTimeseryResponse
```

Sales and net sales over the last N days, zero-filled, one row per calendar day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$days = 30; // int | Calendar days back, today included. Larger values are clamped to 365.
$tz = 'tz_example'; // string | IANA time zone for day boundaries. Default UTC.

try {
    $result = $apiInstance->getAnalyticTimesery($days, $tz);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticTimesery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **days** | **int**| Calendar days back, today included. Larger values are clamped to 365. | [optional] [default to 30]
 **tz** | **string**| IANA time zone for day boundaries. Default UTC. | [optional]

### Return type

**\Crossly\Model\Analytic\GetAnalyticTimeseryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAnalyticToday()`

```php
getAnalyticToday(): \Crossly\Model\Analytic\GetAnalyticTodayResponse
```

Today's checklist + 14-day activity streak.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAnalyticToday();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticToday: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Analytic\GetAnalyticTodayResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listInsightByPlatform()`

```php
listInsightByPlatform($tz): \Crossly\Model\Common\ListInsightByPlatformResponse
```

Platform velocity + margin insight (90-day window): units, net sales, median days to sell, ASP and net after the real marketplace fees.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tz = 'tz_example'; // string | IANA time zone for day boundaries. Default UTC.

try {
    $result = $apiInstance->listInsightByPlatform($tz);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->listInsightByPlatform: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tz** | **string**| IANA time zone for day boundaries. Default UTC. | [optional]

### Return type

**\Crossly\Model\Common\ListInsightByPlatformResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateAnalyticExperiment()`

```php
updateAnalyticExperiment($id): \Crossly\Model\Common\AnalyticExperimentResponse
```

Rename an experiment or change its hypothesis, notes or planned end.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The experiment id (a uuid; any other id is a 404).

try {
    $result = $apiInstance->updateAnalyticExperiment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->updateAnalyticExperiment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The experiment id (a uuid; any other id is a 404). |

### Return type

**\Crossly\Model\Common\AnalyticExperimentResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
