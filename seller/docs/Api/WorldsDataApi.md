# Crossly\WorldsDataApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWorldExperienceDatastoreEntryIncrement()**](WorldsDataApi.md#createWorldExperienceDatastoreEntryIncrement) | **POST** /v1/worlds/experiences/{experienceId}/datastores/{store}/entries/{key}/increment | Atomically add &#x60;by&#x60; to a numeric key (absent counts as 0).
[**createWorldExperienceMemoryQueueItem()**](WorldsDataApi.md#createWorldExperienceMemoryQueueItem) | **POST** /v1/worlds/experiences/{experienceId}/memory/queues/{queue}/items | Add an item to a MemoryStore queue (ttlSeconds ≤ 45 days, priority 0-1000).
[**createWorldExperienceMemoryQueueRead()**](WorldsDataApi.md#createWorldExperienceMemoryQueueRead) | **POST** /v1/worlds/experiences/{experienceId}/memory/queues/{queue}/read | Read and hide up to &#x60;count&#x60; queue items for invisibilitySeconds; remove them with the readId.
[**createWorldExperienceMessaging()**](WorldsDataApi.md#createWorldExperienceMessaging) | **POST** /v1/worlds/experiences/{experienceId}/messaging/{topic} | Publish a message (≤ 1 KB) to every live server of the experience subscribed to the topic.
[**createWorldExperienceOrderedEntryIncrement()**](WorldsDataApi.md#createWorldExperienceOrderedEntryIncrement) | **POST** /v1/worlds/experiences/{experienceId}/ordered/{store}/entries/{key}/increment | Atomically add &#x60;by&#x60; to an OrderedStore entry.
[**deleteWorldExperienceDatastoreEntry()**](WorldsDataApi.md#deleteWorldExperienceDatastoreEntry) | **DELETE** /v1/worlds/experiences/{experienceId}/datastores/{store}/entries/{key} | Remove a key (a tombstone version; history stays readable for 30 days). Honours If-Match.
[**deleteWorldExperienceMemoryMap()**](WorldsDataApi.md#deleteWorldExperienceMemoryMap) | **DELETE** /v1/worlds/experiences/{experienceId}/memory/maps/{map}/{key} | Remove a hash map item.
[**deleteWorldExperienceMemoryQueueRead()**](WorldsDataApi.md#deleteWorldExperienceMemoryQueueRead) | **DELETE** /v1/worlds/experiences/{experienceId}/memory/queues/{queue}/reads/{readId} | Remove the items of one read (409 if the read lapsed).
[**deleteWorldExperienceMemorySorted()**](WorldsDataApi.md#deleteWorldExperienceMemorySorted) | **DELETE** /v1/worlds/experiences/{experienceId}/memory/sorted/{map}/{key} | Remove a sorted map item.
[**deleteWorldExperienceOrderedEntry()**](WorldsDataApi.md#deleteWorldExperienceOrderedEntry) | **DELETE** /v1/worlds/experiences/{experienceId}/ordered/{store}/entries/{key} | Remove an OrderedStore entry.
[**getWorldExperienceDataUsage()**](WorldsDataApi.md#getWorldExperienceDataUsage) | **GET** /v1/worlds/experiences/{experienceId}/data/usage | Live quotas and usage: CCU, request budgets per minute, DataStore storage, MemoryStore memory.
[**getWorldExperienceDatastoreEntry()**](WorldsDataApi.md#getWorldExperienceDatastoreEntry) | **GET** /v1/worlds/experiences/{experienceId}/datastores/{store}/entries/{key} | The current value of a key: version (ETag \&quot;v&lt;n&gt;\&quot;), userIds and attributes.
[**getWorldExperienceDatastoreEntryVersion()**](WorldsDataApi.md#getWorldExperienceDatastoreEntryVersion) | **GET** /v1/worlds/experiences/{experienceId}/datastores/{store}/entries/{key}/versions/{version} | One version of a key, including a removed one.
[**getWorldExperienceMemoryMap()**](WorldsDataApi.md#getWorldExperienceMemoryMap) | **GET** /v1/worlds/experiences/{experienceId}/memory/maps/{map} | Items of a MemoryStore hash map (cursor-paged, unordered).
[**getWorldExperienceMemoryMapByKey()**](WorldsDataApi.md#getWorldExperienceMemoryMapByKey) | **GET** /v1/worlds/experiences/{experienceId}/memory/maps/{map}/{key} | One MemoryStore hash map item with its version and expiry.
[**getWorldExperienceMemoryQueue()**](WorldsDataApi.md#getWorldExperienceMemoryQueue) | **GET** /v1/worlds/experiences/{experienceId}/memory/queues/{queue} | Queue length (visible, in flight) and the head, without hiding anything.
[**getWorldExperienceMemorySorted()**](WorldsDataApi.md#getWorldExperienceMemorySorted) | **GET** /v1/worlds/experiences/{experienceId}/memory/sorted/{map} | A MemoryStore sorted map in order (sortKey, then key); ?order&#x3D;&amp;cursor&#x3D;&amp;limit&#x3D;.
[**getWorldExperienceMemorySortedByKey()**](WorldsDataApi.md#getWorldExperienceMemorySortedByKey) | **GET** /v1/worlds/experiences/{experienceId}/memory/sorted/{map}/{key} | One sorted map item.
[**getWorldExperienceOrdered()**](WorldsDataApi.md#getWorldExperienceOrdered) | **GET** /v1/worlds/experiences/{experienceId}/ordered/{store} | An OrderedStore page ranked by value; ?order&#x3D;desc|asc&amp;min&#x3D;&amp;max&#x3D;&amp;cursor&#x3D;&amp;limit&#x3D;.
[**getWorldExperienceOrderedEntry()**](WorldsDataApi.md#getWorldExperienceOrderedEntry) | **GET** /v1/worlds/experiences/{experienceId}/ordered/{store}/entries/{key} | One OrderedStore entry.
[**listWorldExperienceDatastoreEntries()**](WorldsDataApi.md#listWorldExperienceDatastoreEntries) | **GET** /v1/worlds/experiences/{experienceId}/datastores/{store}/entries | Keys of a DataStore in key order; ?prefix&#x3D;&amp;scope&#x3D;&amp;cursor&#x3D;&amp;limit&#x3D;.
[**listWorldExperienceDatastoreEntryVersions()**](WorldsDataApi.md#listWorldExperienceDatastoreEntryVersions) | **GET** /v1/worlds/experiences/{experienceId}/datastores/{store}/entries/{key}/versions | Versions of a key, newest first (30-day history; the current version is kept).
[**listWorldExperienceDatastores()**](WorldsDataApi.md#listWorldExperienceDatastores) | **GET** /v1/worlds/experiences/{experienceId}/datastores | The DataStores of an experience, with key counts and bytes.
[**updateWorldExperienceDatastoreEntry()**](WorldsDataApi.md#updateWorldExperienceDatastoreEntry) | **PUT** /v1/worlds/experiences/{experienceId}/datastores/{store}/entries/{key} | Write a new version. If-Match \&quot;v&lt;n&gt;\&quot; (or ifVersion) writes only at that version; If-None-Match: * only if absent. 412 on a mismatch.
[**updateWorldExperienceMemoryMap()**](WorldsDataApi.md#updateWorldExperienceMemoryMap) | **PUT** /v1/worlds/experiences/{experienceId}/memory/maps/{map}/{key} | Set a hash map item (ttlSeconds required; ifVersion for compare-and-set).
[**updateWorldExperienceMemorySorted()**](WorldsDataApi.md#updateWorldExperienceMemorySorted) | **PUT** /v1/worlds/experiences/{experienceId}/memory/sorted/{map}/{key} | Set a sorted map item (ttlSeconds, optional sortKey and ifVersion).
[**updateWorldExperienceOrderedEntry()**](WorldsDataApi.md#updateWorldExperienceOrderedEntry) | **PUT** /v1/worlds/experiences/{experienceId}/ordered/{store}/entries/{key} | Set an OrderedStore entry to a whole number.


## `createWorldExperienceDatastoreEntryIncrement()`

```php
createWorldExperienceDatastoreEntryIncrement($experience_id, $store, $key): \Crossly\Model\World\CreateWorldExperienceDatastoreEntryIncrementResponse
```

Atomically add `by` to a numeric key (absent counts as 0).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$store = 'store_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->createWorldExperienceDatastoreEntryIncrement($experience_id, $store, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->createWorldExperienceDatastoreEntryIncrement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **store** | **string**|  |
 **key** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperienceDatastoreEntryIncrementResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperienceMemoryQueueItem()`

```php
createWorldExperienceMemoryQueueItem($experience_id, $queue): \Crossly\Model\World\CreateWorldPartyInviteResponse
```

Add an item to a MemoryStore queue (ttlSeconds ≤ 45 days, priority 0-1000).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$queue = 'queue_example'; // string

try {
    $result = $apiInstance->createWorldExperienceMemoryQueueItem($experience_id, $queue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->createWorldExperienceMemoryQueueItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **queue** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldPartyInviteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperienceMemoryQueueRead()`

```php
createWorldExperienceMemoryQueueRead($experience_id, $queue): \Crossly\Model\World\CreateWorldExperienceMemoryQueueReadResponse
```

Read and hide up to `count` queue items for invisibilitySeconds; remove them with the readId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$queue = 'queue_example'; // string

try {
    $result = $apiInstance->createWorldExperienceMemoryQueueRead($experience_id, $queue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->createWorldExperienceMemoryQueueRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **queue** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperienceMemoryQueueReadResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperienceMessaging()`

```php
createWorldExperienceMessaging($experience_id, $topic): \Crossly\Model\World\CreateWorldExperienceMessagingResponse
```

Publish a message (≤ 1 KB) to every live server of the experience subscribed to the topic.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$topic = 'topic_example'; // string

try {
    $result = $apiInstance->createWorldExperienceMessaging($experience_id, $topic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->createWorldExperienceMessaging: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **topic** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperienceMessagingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperienceOrderedEntryIncrement()`

```php
createWorldExperienceOrderedEntryIncrement($experience_id, $store, $key): \Crossly\Model\Common\WorldExperienceOrderedEntryResponse
```

Atomically add `by` to an OrderedStore entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$store = 'store_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->createWorldExperienceOrderedEntryIncrement($experience_id, $store, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->createWorldExperienceOrderedEntryIncrement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **store** | **string**|  |
 **key** | **string**|  |

### Return type

**\Crossly\Model\Common\WorldExperienceOrderedEntryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldExperienceDatastoreEntry()`

```php
deleteWorldExperienceDatastoreEntry($experience_id, $store, $key): \Crossly\Model\World\DeleteWorldExperienceDatastoreEntryResponse
```

Remove a key (a tombstone version; history stays readable for 30 days). Honours If-Match.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$store = 'store_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->deleteWorldExperienceDatastoreEntry($experience_id, $store, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->deleteWorldExperienceDatastoreEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **store** | **string**|  |
 **key** | **string**|  |

### Return type

**\Crossly\Model\World\DeleteWorldExperienceDatastoreEntryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldExperienceMemoryMap()`

```php
deleteWorldExperienceMemoryMap($experience_id, $map, $key): \Crossly\Model\Spatial\DeleteSpatialSceneGrantResponse
```

Remove a hash map item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$map = 'map_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->deleteWorldExperienceMemoryMap($experience_id, $map, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->deleteWorldExperienceMemoryMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **map** | **string**|  |
 **key** | **string**|  |

### Return type

**\Crossly\Model\Spatial\DeleteSpatialSceneGrantResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldExperienceMemoryQueueRead()`

```php
deleteWorldExperienceMemoryQueueRead($experience_id, $queue, $read_id): \Crossly\Model\Spatial\DeleteSpatialSceneNodeResponse
```

Remove the items of one read (409 if the read lapsed).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$queue = 'queue_example'; // string
$read_id = 'read_id_example'; // string

try {
    $result = $apiInstance->deleteWorldExperienceMemoryQueueRead($experience_id, $queue, $read_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->deleteWorldExperienceMemoryQueueRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **queue** | **string**|  |
 **read_id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\DeleteSpatialSceneNodeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldExperienceMemorySorted()`

```php
deleteWorldExperienceMemorySorted($experience_id, $map, $key): \Crossly\Model\Spatial\DeleteSpatialSceneGrantResponse
```

Remove a sorted map item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$map = 'map_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->deleteWorldExperienceMemorySorted($experience_id, $map, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->deleteWorldExperienceMemorySorted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **map** | **string**|  |
 **key** | **string**|  |

### Return type

**\Crossly\Model\Spatial\DeleteSpatialSceneGrantResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldExperienceOrderedEntry()`

```php
deleteWorldExperienceOrderedEntry($experience_id, $store, $key): \Crossly\Model\World\DeleteWorldExperienceOrderedEntryResponse
```

Remove an OrderedStore entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$store = 'store_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->deleteWorldExperienceOrderedEntry($experience_id, $store, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->deleteWorldExperienceOrderedEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **store** | **string**|  |
 **key** | **string**|  |

### Return type

**\Crossly\Model\World\DeleteWorldExperienceOrderedEntryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperienceDataUsage()`

```php
getWorldExperienceDataUsage($experience_id): \Crossly\Model\World\GetWorldExperienceDataUsageResponse
```

Live quotas and usage: CCU, request budgets per minute, DataStore storage, MemoryStore memory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->getWorldExperienceDataUsage($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->getWorldExperienceDataUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceDataUsageResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperienceDatastoreEntry()`

```php
getWorldExperienceDatastoreEntry($experience_id, $store, $key): \Crossly\Model\World\GetWorldExperienceDatastoreEntryResponse
```

The current value of a key: version (ETag \"v<n>\"), userIds and attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$store = 'store_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->getWorldExperienceDatastoreEntry($experience_id, $store, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->getWorldExperienceDatastoreEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **store** | **string**|  |
 **key** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceDatastoreEntryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperienceDatastoreEntryVersion()`

```php
getWorldExperienceDatastoreEntryVersion($experience_id, $store, $key, $version): \Crossly\Model\World\GetWorldExperienceDatastoreEntryResponse
```

One version of a key, including a removed one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$store = 'store_example'; // string
$key = 'key_example'; // string
$version = 'version_example'; // string

try {
    $result = $apiInstance->getWorldExperienceDatastoreEntryVersion($experience_id, $store, $key, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->getWorldExperienceDatastoreEntryVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **store** | **string**|  |
 **key** | **string**|  |
 **version** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceDatastoreEntryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperienceMemoryMap()`

```php
getWorldExperienceMemoryMap($experience_id, $map): \Crossly\Model\World\GetWorldExperienceMemoryMapResponse
```

Items of a MemoryStore hash map (cursor-paged, unordered).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$map = 'map_example'; // string

try {
    $result = $apiInstance->getWorldExperienceMemoryMap($experience_id, $map);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->getWorldExperienceMemoryMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **map** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceMemoryMapResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperienceMemoryMapByKey()`

```php
getWorldExperienceMemoryMapByKey($experience_id, $map, $key): \Crossly\Model\World\GetWorldExperienceMemoryMapByKeyResponse
```

One MemoryStore hash map item with its version and expiry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$map = 'map_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->getWorldExperienceMemoryMapByKey($experience_id, $map, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->getWorldExperienceMemoryMapByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **map** | **string**|  |
 **key** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceMemoryMapByKeyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperienceMemoryQueue()`

```php
getWorldExperienceMemoryQueue($experience_id, $queue): \Crossly\Model\World\GetWorldExperienceMemoryQueueResponse
```

Queue length (visible, in flight) and the head, without hiding anything.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$queue = 'queue_example'; // string

try {
    $result = $apiInstance->getWorldExperienceMemoryQueue($experience_id, $queue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->getWorldExperienceMemoryQueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **queue** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceMemoryQueueResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperienceMemorySorted()`

```php
getWorldExperienceMemorySorted($experience_id, $map): \Crossly\Model\World\GetWorldExperienceMemoryMapResponse
```

A MemoryStore sorted map in order (sortKey, then key); ?order=&cursor=&limit=.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$map = 'map_example'; // string

try {
    $result = $apiInstance->getWorldExperienceMemorySorted($experience_id, $map);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->getWorldExperienceMemorySorted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **map** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceMemoryMapResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperienceMemorySortedByKey()`

```php
getWorldExperienceMemorySortedByKey($experience_id, $map, $key): \Crossly\Model\World\GetWorldExperienceMemoryMapByKeyResponse
```

One sorted map item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$map = 'map_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->getWorldExperienceMemorySortedByKey($experience_id, $map, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->getWorldExperienceMemorySortedByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **map** | **string**|  |
 **key** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceMemoryMapByKeyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperienceOrdered()`

```php
getWorldExperienceOrdered($experience_id, $store): \Crossly\Model\World\GetWorldExperienceOrderedResponse
```

An OrderedStore page ranked by value; ?order=desc|asc&min=&max=&cursor=&limit=.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$store = 'store_example'; // string

try {
    $result = $apiInstance->getWorldExperienceOrdered($experience_id, $store);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->getWorldExperienceOrdered: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **store** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceOrderedResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperienceOrderedEntry()`

```php
getWorldExperienceOrderedEntry($experience_id, $store, $key): \Crossly\Model\Common\WorldExperienceOrderedEntryResponse
```

One OrderedStore entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$store = 'store_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->getWorldExperienceOrderedEntry($experience_id, $store, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->getWorldExperienceOrderedEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **store** | **string**|  |
 **key** | **string**|  |

### Return type

**\Crossly\Model\Common\WorldExperienceOrderedEntryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldExperienceDatastoreEntries()`

```php
listWorldExperienceDatastoreEntries($experience_id, $store): \Crossly\Model\World\ListWorldExperienceDatastoreEntriesResponse
```

Keys of a DataStore in key order; ?prefix=&scope=&cursor=&limit=.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$store = 'store_example'; // string

try {
    $result = $apiInstance->listWorldExperienceDatastoreEntries($experience_id, $store);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->listWorldExperienceDatastoreEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **store** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldExperienceDatastoreEntriesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldExperienceDatastoreEntryVersions()`

```php
listWorldExperienceDatastoreEntryVersions($experience_id, $store, $key): \Crossly\Model\World\ListWorldExperienceDatastoreEntryVersionsResponse
```

Versions of a key, newest first (30-day history; the current version is kept).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$store = 'store_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->listWorldExperienceDatastoreEntryVersions($experience_id, $store, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->listWorldExperienceDatastoreEntryVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **store** | **string**|  |
 **key** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldExperienceDatastoreEntryVersionsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldExperienceDatastores()`

```php
listWorldExperienceDatastores($experience_id): \Crossly\Model\World\ListWorldExperienceDatastoresResponse
```

The DataStores of an experience, with key counts and bytes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->listWorldExperienceDatastores($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->listWorldExperienceDatastores: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldExperienceDatastoresResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldExperienceDatastoreEntry()`

```php
updateWorldExperienceDatastoreEntry($experience_id, $store, $key): \Crossly\Model\World\UpdateWorldExperienceDatastoreEntryResponse
```

Write a new version. If-Match \"v<n>\" (or ifVersion) writes only at that version; If-None-Match: * only if absent. 412 on a mismatch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$store = 'store_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->updateWorldExperienceDatastoreEntry($experience_id, $store, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->updateWorldExperienceDatastoreEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **store** | **string**|  |
 **key** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldExperienceDatastoreEntryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldExperienceMemoryMap()`

```php
updateWorldExperienceMemoryMap($experience_id, $map, $key): \Crossly\Model\World\UpdateWorldExperienceMemoryMapResponse
```

Set a hash map item (ttlSeconds required; ifVersion for compare-and-set).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$map = 'map_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->updateWorldExperienceMemoryMap($experience_id, $map, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->updateWorldExperienceMemoryMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **map** | **string**|  |
 **key** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldExperienceMemoryMapResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldExperienceMemorySorted()`

```php
updateWorldExperienceMemorySorted($experience_id, $map, $key): \Crossly\Model\World\UpdateWorldExperienceMemoryMapResponse
```

Set a sorted map item (ttlSeconds, optional sortKey and ifVersion).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$map = 'map_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->updateWorldExperienceMemorySorted($experience_id, $map, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->updateWorldExperienceMemorySorted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **map** | **string**|  |
 **key** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldExperienceMemoryMapResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldExperienceOrderedEntry()`

```php
updateWorldExperienceOrderedEntry($experience_id, $store, $key): \Crossly\Model\Common\WorldExperienceOrderedEntryResponse
```

Set an OrderedStore entry to a whole number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$store = 'store_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->updateWorldExperienceOrderedEntry($experience_id, $store, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsDataApi->updateWorldExperienceOrderedEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **store** | **string**|  |
 **key** | **string**|  |

### Return type

**\Crossly\Model\Common\WorldExperienceOrderedEntryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
