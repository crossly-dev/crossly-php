# Crossly\WorldsEngagementApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWorldExperienceExperienceEvent()**](WorldsEngagementApi.md#createWorldExperienceExperienceEvent) | **POST** /v1/worlds/experiences/{experienceId}/experience-events | Schedule an Experience Event shown on the game&#39;s card: title, description, start/end (5 min–14 days, ≤ 180 days ahead), thumbnail, place. With liveEventId it follows that live-ops event&#39;s schedule.
[**createWorldExperienceExperienceEventCancel()**](WorldsEngagementApi.md#createWorldExperienceExperienceEventCancel) | **POST** /v1/worlds/experiences/{experienceId}/experience-events/{eventId}/cancel | Cancel an event (it disappears from the game&#39;s card; no reminder goes out).
[**createWorldExperienceExperienceEventRsvp()**](WorldsEngagementApi.md#createWorldExperienceExperienceEventRsvp) | **POST** /v1/worlds/experiences/{experienceId}/experience-events/{eventId}/rsvp | RSVP (going: true) or take it back. remind: true also turns the experience&#39;s notifications on, so the 15-minute reminder can reach you.
[**createWorldExperienceNotification()**](WorldsEngagementApi.md#createWorldExperienceNotification) | **POST** /v1/worlds/experiences/{experienceId}/notifications | Send an approved template to one player (sub) or up to 100 (subs). Only players who turned notifications on, 13+, not banned, at most 2 a day per player and outside their quiet hours receive it; every other send is logged as suppressed with its reason.
[**createWorldExperienceNotificationTemplateRetire()**](WorldsEngagementApi.md#createWorldExperienceNotificationTemplateRetire) | **POST** /v1/worlds/experiences/{experienceId}/notification-templates/{key}/retire | Retire a template: sends by its key stop.
[**getWorldExperienceNotificationOptIn()**](WorldsEngagementApi.md#getWorldExperienceNotificationOptIn) | **GET** /v1/worlds/experiences/{experienceId}/notifications/opt-in | Whether you turned this experience&#39;s notifications on.
[**getWorldExperienceNotificationReport()**](WorldsEngagementApi.md#getWorldExperienceNotificationReport) | **GET** /v1/worlds/experiences/{experienceId}/notifications/report | Sends over the last N days (default 7, max 90): delivered, suppressed by reason, per template, and how many players turned notifications on.
[**listWorldExperienceEventUpcoming()**](WorldsEngagementApi.md#listWorldExperienceEventUpcoming) | **GET** /v1/worlds/experience-events/upcoming | Events across public experiences in the next 7 days (and live now), soonest first — the Carnival Plaza&#39;s \&quot;Coming up\&quot; board.
[**listWorldExperienceExperienceEventUpcoming()**](WorldsEngagementApi.md#listWorldExperienceExperienceEventUpcoming) | **GET** /v1/worlds/experiences/{experienceId}/experience-events/upcoming | An experience&#39;s upcoming and live events as players see them, with whether you are going.
[**listWorldExperienceExperienceEvents()**](WorldsEngagementApi.md#listWorldExperienceExperienceEvents) | **GET** /v1/worlds/experiences/{experienceId}/experience-events | Your scheduled Experience Events (upcoming, live and the last 30 days) with RSVP counts.
[**listWorldExperienceNotificationTemplates()**](WorldsEngagementApi.md#listWorldExperienceNotificationTemplates) | **GET** /v1/worlds/experiences/{experienceId}/notification-templates | Notification templates: key, title and body with {placeholders}, review status (approved ones can be sent).
[**listWorldMeExperienceEvents()**](WorldsEngagementApi.md#listWorldMeExperienceEvents) | **GET** /v1/worlds/me/experience-events | Events you are going to that have not ended.
[**listWorldMeNotificationOptIns()**](WorldsEngagementApi.md#listWorldMeNotificationOptIns) | **GET** /v1/worlds/me/notification-opt-ins | Every experience whose notifications you turned on.
[**updateWorldExperienceExperienceEvent()**](WorldsEngagementApi.md#updateWorldExperienceExperienceEvent) | **PATCH** /v1/worlds/experiences/{experienceId}/experience-events/{eventId} | Change an event. A started event keeps its start; a new start time earns RSVPs a new reminder.
[**updateWorldExperienceNotificationOptIn()**](WorldsEngagementApi.md#updateWorldExperienceNotificationOptIn) | **PUT** /v1/worlds/experiences/{experienceId}/notifications/opt-in | Turn this experience&#39;s notifications on or off for you. timeZone (IANA) keeps them out of your night.
[**updateWorldExperienceNotificationTemplate()**](WorldsEngagementApi.md#updateWorldExperienceNotificationTemplate) | **PUT** /v1/worlds/experiences/{experienceId}/notification-templates/{key} | Create or reword a template. Clean words with no link are approved at once; anything the text filter flags, or any link, waits for Crossly review (24 h). Rewording re-reviews.


## `createWorldExperienceExperienceEvent()`

```php
createWorldExperienceExperienceEvent($experience_id): \Crossly\Model\Common\WorldExperienceExperienceEventResponse
```

Schedule an Experience Event shown on the game's card: title, description, start/end (5 min–14 days, ≤ 180 days ahead), thumbnail, place. With liveEventId it follows that live-ops event's schedule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->createWorldExperienceExperienceEvent($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsEngagementApi->createWorldExperienceExperienceEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\Common\WorldExperienceExperienceEventResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperienceExperienceEventCancel()`

```php
createWorldExperienceExperienceEventCancel($experience_id, $event_id): \Crossly\Model\Common\WorldExperienceExperienceEventResponse
```

Cancel an event (it disappears from the game's card; no reminder goes out).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$event_id = 'event_id_example'; // string

try {
    $result = $apiInstance->createWorldExperienceExperienceEventCancel($experience_id, $event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsEngagementApi->createWorldExperienceExperienceEventCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **event_id** | **string**|  |

### Return type

**\Crossly\Model\Common\WorldExperienceExperienceEventResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperienceExperienceEventRsvp()`

```php
createWorldExperienceExperienceEventRsvp($experience_id, $event_id): \Crossly\Model\Common\WorldExperienceExperienceEventResponse
```

RSVP (going: true) or take it back. remind: true also turns the experience's notifications on, so the 15-minute reminder can reach you.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$event_id = 'event_id_example'; // string

try {
    $result = $apiInstance->createWorldExperienceExperienceEventRsvp($experience_id, $event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsEngagementApi->createWorldExperienceExperienceEventRsvp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **event_id** | **string**|  |

### Return type

**\Crossly\Model\Common\WorldExperienceExperienceEventResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperienceNotification()`

```php
createWorldExperienceNotification($experience_id): \Crossly\Model\World\CreateWorldExperienceNotificationResponse
```

Send an approved template to one player (sub) or up to 100 (subs). Only players who turned notifications on, 13+, not banned, at most 2 a day per player and outside their quiet hours receive it; every other send is logged as suppressed with its reason.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->createWorldExperienceNotification($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsEngagementApi->createWorldExperienceNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperienceNotificationResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperienceNotificationTemplateRetire()`

```php
createWorldExperienceNotificationTemplateRetire($experience_id, $key): \Crossly\Model\World\UpdateWorldExperienceNotificationTemplateResponse
```

Retire a template: sends by its key stop.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->createWorldExperienceNotificationTemplateRetire($experience_id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsEngagementApi->createWorldExperienceNotificationTemplateRetire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **key** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldExperienceNotificationTemplateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperienceNotificationOptIn()`

```php
getWorldExperienceNotificationOptIn($experience_id): \Crossly\Model\World\GetWorldExperienceNotificationOptInResponse
```

Whether you turned this experience's notifications on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->getWorldExperienceNotificationOptIn($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsEngagementApi->getWorldExperienceNotificationOptIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceNotificationOptInResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperienceNotificationReport()`

```php
getWorldExperienceNotificationReport($experience_id): \Crossly\Model\World\GetWorldExperienceNotificationReportResponse
```

Sends over the last N days (default 7, max 90): delivered, suppressed by reason, per template, and how many players turned notifications on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->getWorldExperienceNotificationReport($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsEngagementApi->getWorldExperienceNotificationReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceNotificationReportResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldExperienceEventUpcoming()`

```php
listWorldExperienceEventUpcoming(): \Crossly\Model\World\ListWorldExperienceEventUpcomingResponse
```

Events across public experiences in the next 7 days (and live now), soonest first — the Carnival Plaza's \"Coming up\" board.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldExperienceEventUpcoming();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsEngagementApi->listWorldExperienceEventUpcoming: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldExperienceEventUpcomingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldExperienceExperienceEventUpcoming()`

```php
listWorldExperienceExperienceEventUpcoming($experience_id): \Crossly\Model\World\ListWorldExperienceExperienceEventsResponse
```

An experience's upcoming and live events as players see them, with whether you are going.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->listWorldExperienceExperienceEventUpcoming($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsEngagementApi->listWorldExperienceExperienceEventUpcoming: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldExperienceExperienceEventsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldExperienceExperienceEvents()`

```php
listWorldExperienceExperienceEvents($experience_id): \Crossly\Model\World\ListWorldExperienceExperienceEventsResponse
```

Your scheduled Experience Events (upcoming, live and the last 30 days) with RSVP counts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->listWorldExperienceExperienceEvents($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsEngagementApi->listWorldExperienceExperienceEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldExperienceExperienceEventsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldExperienceNotificationTemplates()`

```php
listWorldExperienceNotificationTemplates($experience_id): \Crossly\Model\World\ListWorldExperienceNotificationTemplatesResponse
```

Notification templates: key, title and body with {placeholders}, review status (approved ones can be sent).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->listWorldExperienceNotificationTemplates($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsEngagementApi->listWorldExperienceNotificationTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldExperienceNotificationTemplatesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldMeExperienceEvents()`

```php
listWorldMeExperienceEvents(): \Crossly\Model\World\ListWorldMeExperienceEventsResponse
```

Events you are going to that have not ended.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldMeExperienceEvents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsEngagementApi->listWorldMeExperienceEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldMeExperienceEventsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldMeNotificationOptIns()`

```php
listWorldMeNotificationOptIns(): \Crossly\Model\World\ListWorldMeNotificationOptInsResponse
```

Every experience whose notifications you turned on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldMeNotificationOptIns();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsEngagementApi->listWorldMeNotificationOptIns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldMeNotificationOptInsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldExperienceExperienceEvent()`

```php
updateWorldExperienceExperienceEvent($experience_id, $event_id): \Crossly\Model\Common\WorldExperienceExperienceEventResponse
```

Change an event. A started event keeps its start; a new start time earns RSVPs a new reminder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$event_id = 'event_id_example'; // string

try {
    $result = $apiInstance->updateWorldExperienceExperienceEvent($experience_id, $event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsEngagementApi->updateWorldExperienceExperienceEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **event_id** | **string**|  |

### Return type

**\Crossly\Model\Common\WorldExperienceExperienceEventResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldExperienceNotificationOptIn()`

```php
updateWorldExperienceNotificationOptIn($experience_id): \Crossly\Model\World\GetWorldExperienceNotificationOptInResponse
```

Turn this experience's notifications on or off for you. timeZone (IANA) keeps them out of your night.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->updateWorldExperienceNotificationOptIn($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsEngagementApi->updateWorldExperienceNotificationOptIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceNotificationOptInResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldExperienceNotificationTemplate()`

```php
updateWorldExperienceNotificationTemplate($experience_id, $key): \Crossly\Model\World\UpdateWorldExperienceNotificationTemplateResponse
```

Create or reword a template. Clean words with no link are approved at once; anything the text filter flags, or any link, waits for Crossly review (24 h). Rewording re-reviews.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->updateWorldExperienceNotificationTemplate($experience_id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsEngagementApi->updateWorldExperienceNotificationTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **key** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldExperienceNotificationTemplateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
