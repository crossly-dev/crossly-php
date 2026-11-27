# Crossly\WorldsStudioApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWorldExperienceAssetMesh()**](WorldsStudioApi.md#createWorldExperienceAssetMesh) | **POST** /v1/worlds/experiences/{experienceId}/assets/meshes | Import a .glb (base64) as a MeshPart: safety parse + budgets, stored on the Crossly CDN, a phone LOD over 5k triangles, collision Box or convex Hull. Returns the asset and the MeshPart node; with placeId it is inserted into that place through its co-editing session.
[**createWorldExperienceAssetMeshCheck()**](WorldsStudioApi.md#createWorldExperienceAssetMeshCheck) | **POST** /v1/worlds/experiences/{experienceId}/assets/meshes/check | Check a .glb (base64) for import without storing it: the budget report per device, plain-English errors with a fix list, whether a phone LOD will be made, mesh bounds and hull points.
[**createWorldExperiencePlaceAssistant()**](WorldsStudioApi.md#createWorldExperiencePlaceAssistant) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/assistant | Ask the Studio Assistant (mode explain | edit | build): returns an explanation and a proposed change set (scripts, inserts, edits) checked against your role and linted. Nothing is applied.
[**createWorldExperiencePlaceAssistantApply()**](WorldsStudioApi.md#createWorldExperiencePlaceAssistantApply) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/assistant/apply | Apply accepted Assistant changes to the place as one co-editing batch (activity via assistant, revertible). Re-checked against the place as it is now.
[**createWorldExperiencePlaceStudioEdit()**](WorldsStudioApi.md#createWorldExperiencePlaceStudioEdit) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/edits | Apply set / insert / move / delete steps by path as ONE batch through Team Create (live in every open Studio, one revertible activity entry). All-or-nothing: any bad step refuses the batch with every problem listed.
[**createWorldExperiencePlaceStudioInsertAsset()**](WorldsStudioApi.md#createWorldExperiencePlaceStudioInsertAsset) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/insert-asset | Insert a Toolbox asset under a path (default Workspace; ServerScripts for scripts). Paid assets need the experience owner&#39;s licence.
[**createWorldExperiencePlaceStudioPlaytest()**](WorldsStudioApi.md#createWorldExperiencePlaceStudioPlaytest) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/playtest | Cloud test: flush the session, freeze a private test version and start a fleet server for it. 201 ready (ticket) or 202 starting; outputCursor reads only this test&#39;s Output.
[**createWorldExperiencePlaceStudioPlaytestStop()**](WorldsStudioApi.md#createWorldExperiencePlaceStudioPlaytestStop) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/playtest/stop | Stop this place&#39;s cloud-test servers now.
[**createWorldExperiencePlaceStudioPublish()**](WorldsStudioApi.md#createWorldExperiencePlaceStudioPublish) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/publish | Prepare a publish from the live session: checks, details, rating answers, access. Never submits and never acknowledges the money review — the person does (or submit_worlds_publish).
[**createWorldExperiencePlaceStudioScriptCommit()**](WorldsStudioApi.md#createWorldExperiencePlaceStudioScriptCommit) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/script/commit | Commit your draft with a three-way merge onto the script as it is now (collaborators&#39; edits kept). 409 merge_conflict carries merged text with conflict blocks and theirs.
[**deleteWorldExperiencePlaceStudioScript()**](WorldsStudioApi.md#deleteWorldExperiencePlaceStudioScript) | **DELETE** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/script | Discard your draft of a script.
[**getWorldAssistantStatus()**](WorldsStudioApi.md#getWorldAssistantStatus) | **GET** /v1/worlds/assistant/status | Studio Assistant status: whether Crossly&#39;s model key is configured, whether you have your own AI key, and your plan allowance (asks left today, budget left this month).
[**getWorldExperiencePlaceStudioFind()**](WorldsStudioApi.md#getWorldExperiencePlaceStudioFind) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/find | Find instances by name (contains), exact class and/or tag.
[**getWorldExperiencePlaceStudioInstance()**](WorldsStudioApi.md#getWorldExperiencePlaceStudioInstance) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/instance | One instance by path (or session id): class, properties, attributes, tags, children. Script source is read with …/studio/script.
[**getWorldExperiencePlaceStudioOutput()**](WorldsStudioApi.md#getWorldExperiencePlaceStudioOutput) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/output | Server Output (print, warnings, errors) after a cursor: every line of cloud tests, errors of live servers (scope&#x3D;all). Kept 24 hours.
[**getWorldExperiencePlaceStudioProblem()**](WorldsStudioApi.md#getWorldExperiencePlaceStudioProblem) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/problems | The publish checks on the place as the live session holds it: script lint, budgets per device, settings, shop listings, Toolbox licences. publishable &#x3D; no errors.
[**getWorldExperiencePlaceStudioScript()**](WorldsStudioApi.md#getWorldExperiencePlaceStudioScript) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/script | A script&#39;s current source, your draft of it (if any, with whether someone committed since) and the lint of each.
[**getWorldExperiencePlaceStudioSnapshot()**](WorldsStudioApi.md#getWorldExperiencePlaceStudioSnapshot) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/snapshot | A plan (top) or front drawing of the parts under a path as SVG, with bounds, spawns and unanchored parts that will fall.
[**getWorldExperiencePlaceStudioTree()**](WorldsStudioApi.md#getWorldExperiencePlaceStudioTree) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/tree | The live instance tree (what every open Studio shows) by dotted path, depth levels down (default 3, max 12).
[**getWorldStudioClass()**](WorldsStudioApi.md#getWorldStudioClass) | **GET** /v1/worlds/studio/classes | The engine&#39;s class table: insertable classes, services, and for ?name&#x3D; one class with every property, its type, default and the exact JSON a place (and a studio edit) takes.
[**listWorldExperienceAssets()**](WorldsStudioApi.md#listWorldExperienceAssets) | **GET** /v1/worlds/experiences/{experienceId}/assets | Meshes imported into this experience, newest first: paths, phone LOD, bounds, hull size, budget report, moderation (pending until a reviewed publish uses them) and a URL you can load now.
[**updateWorldExperiencePlaceStudioScript()**](WorldsStudioApi.md#updateWorldExperiencePlaceStudioScript) | **PUT** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/script | Save your draft of a script (the place does not change until you commit). Returns lint and the diff from the current source.


## `createWorldExperienceAssetMesh()`

```php
createWorldExperienceAssetMesh($experience_id): \Crossly\Model\World\CreateWorldExperienceAssetMeshResponse
```

Import a .glb (base64) as a MeshPart: safety parse + budgets, stored on the Crossly CDN, a phone LOD over 5k triangles, collision Box or convex Hull. Returns the asset and the MeshPart node; with placeId it is inserted into that place through its co-editing session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->createWorldExperienceAssetMesh($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->createWorldExperienceAssetMesh: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperienceAssetMeshResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperienceAssetMeshCheck()`

```php
createWorldExperienceAssetMeshCheck($experience_id): \Crossly\Model\World\CreateWorldExperienceAssetMeshCheckResponse
```

Check a .glb (base64) for import without storing it: the budget report per device, plain-English errors with a fix list, whether a phone LOD will be made, mesh bounds and hull points.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->createWorldExperienceAssetMeshCheck($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->createWorldExperienceAssetMeshCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperienceAssetMeshCheckResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperiencePlaceAssistant()`

```php
createWorldExperiencePlaceAssistant($experience_id, $place_id): \Crossly\Model\World\CreateWorldExperiencePlaceAssistantResponse
```

Ask the Studio Assistant (mode explain | edit | build): returns an explanation and a proposed change set (scripts, inserts, edits) checked against your role and linted. Nothing is applied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->createWorldExperiencePlaceAssistant($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->createWorldExperiencePlaceAssistant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperiencePlaceAssistantResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperiencePlaceAssistantApply()`

```php
createWorldExperiencePlaceAssistantApply($experience_id, $place_id): \Crossly\Model\World\CreateWorldExperiencePlaceAssistantApplyResponse
```

Apply accepted Assistant changes to the place as one co-editing batch (activity via assistant, revertible). Re-checked against the place as it is now.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->createWorldExperiencePlaceAssistantApply($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->createWorldExperiencePlaceAssistantApply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperiencePlaceAssistantApplyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperiencePlaceStudioEdit()`

```php
createWorldExperiencePlaceStudioEdit($experience_id, $place_id): \Crossly\Model\World\CreateWorldExperiencePlaceStudioEditResponse
```

Apply set / insert / move / delete steps by path as ONE batch through Team Create (live in every open Studio, one revertible activity entry). All-or-nothing: any bad step refuses the batch with every problem listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->createWorldExperiencePlaceStudioEdit($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->createWorldExperiencePlaceStudioEdit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperiencePlaceStudioEditResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperiencePlaceStudioInsertAsset()`

```php
createWorldExperiencePlaceStudioInsertAsset($experience_id, $place_id): \Crossly\Model\World\CreateWorldExperiencePlaceStudioInsertAssetResponse
```

Insert a Toolbox asset under a path (default Workspace; ServerScripts for scripts). Paid assets need the experience owner's licence.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->createWorldExperiencePlaceStudioInsertAsset($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->createWorldExperiencePlaceStudioInsertAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperiencePlaceStudioInsertAssetResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperiencePlaceStudioPlaytest()`

```php
createWorldExperiencePlaceStudioPlaytest($experience_id, $place_id): \Crossly\Model\World\CreateWorldExperiencePlaceStudioPlaytestResponse
```

Cloud test: flush the session, freeze a private test version and start a fleet server for it. 201 ready (ticket) or 202 starting; outputCursor reads only this test's Output.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->createWorldExperiencePlaceStudioPlaytest($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->createWorldExperiencePlaceStudioPlaytest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperiencePlaceStudioPlaytestResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperiencePlaceStudioPlaytestStop()`

```php
createWorldExperiencePlaceStudioPlaytestStop($experience_id, $place_id): \Crossly\Model\World\CreateWorldExperiencePlaceStudioPlaytestStopResponse
```

Stop this place's cloud-test servers now.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->createWorldExperiencePlaceStudioPlaytestStop($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->createWorldExperiencePlaceStudioPlaytestStop: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperiencePlaceStudioPlaytestStopResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperiencePlaceStudioPublish()`

```php
createWorldExperiencePlaceStudioPublish($experience_id, $place_id): \Crossly\Model\World\CreateWorldExperiencePlaceStudioPublishResponse
```

Prepare a publish from the live session: checks, details, rating answers, access. Never submits and never acknowledges the money review — the person does (or submit_worlds_publish).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->createWorldExperiencePlaceStudioPublish($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->createWorldExperiencePlaceStudioPublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperiencePlaceStudioPublishResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperiencePlaceStudioScriptCommit()`

```php
createWorldExperiencePlaceStudioScriptCommit($experience_id, $place_id): \Crossly\Model\World\CreateWorldExperiencePlaceStudioScriptCommitResponse
```

Commit your draft with a three-way merge onto the script as it is now (collaborators' edits kept). 409 merge_conflict carries merged text with conflict blocks and theirs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->createWorldExperiencePlaceStudioScriptCommit($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->createWorldExperiencePlaceStudioScriptCommit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperiencePlaceStudioScriptCommitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldExperiencePlaceStudioScript()`

```php
deleteWorldExperiencePlaceStudioScript($experience_id, $place_id): \Crossly\Model\World\DeleteWorldExperiencePlaceCollabScriptResponse
```

Discard your draft of a script.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->deleteWorldExperiencePlaceStudioScript($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->deleteWorldExperiencePlaceStudioScript: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\DeleteWorldExperiencePlaceCollabScriptResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldAssistantStatus()`

```php
getWorldAssistantStatus(): \Crossly\Model\World\GetWorldAssistantStatusResponse
```

Studio Assistant status: whether Crossly's model key is configured, whether you have your own AI key, and your plan allowance (asks left today, budget left this month).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldAssistantStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->getWorldAssistantStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldAssistantStatusResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperiencePlaceStudioFind()`

```php
getWorldExperiencePlaceStudioFind($experience_id, $place_id): \Crossly\Model\World\GetWorldExperiencePlaceStudioFindResponse
```

Find instances by name (contains), exact class and/or tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->getWorldExperiencePlaceStudioFind($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->getWorldExperiencePlaceStudioFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperiencePlaceStudioFindResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperiencePlaceStudioInstance()`

```php
getWorldExperiencePlaceStudioInstance($experience_id, $place_id): \Crossly\Model\World\GetWorldExperiencePlaceStudioInstanceResponse
```

One instance by path (or session id): class, properties, attributes, tags, children. Script source is read with …/studio/script.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->getWorldExperiencePlaceStudioInstance($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->getWorldExperiencePlaceStudioInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperiencePlaceStudioInstanceResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperiencePlaceStudioOutput()`

```php
getWorldExperiencePlaceStudioOutput($experience_id, $place_id): \Crossly\Model\World\GetWorldExperiencePlaceStudioOutputResponse
```

Server Output (print, warnings, errors) after a cursor: every line of cloud tests, errors of live servers (scope=all). Kept 24 hours.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->getWorldExperiencePlaceStudioOutput($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->getWorldExperiencePlaceStudioOutput: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperiencePlaceStudioOutputResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperiencePlaceStudioProblem()`

```php
getWorldExperiencePlaceStudioProblem($experience_id, $place_id): \Crossly\Model\World\GetWorldExperiencePlaceStudioProblemResponse
```

The publish checks on the place as the live session holds it: script lint, budgets per device, settings, shop listings, Toolbox licences. publishable = no errors.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->getWorldExperiencePlaceStudioProblem($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->getWorldExperiencePlaceStudioProblem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperiencePlaceStudioProblemResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperiencePlaceStudioScript()`

```php
getWorldExperiencePlaceStudioScript($experience_id, $place_id): \Crossly\Model\World\GetWorldExperiencePlaceStudioScriptResponse
```

A script's current source, your draft of it (if any, with whether someone committed since) and the lint of each.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->getWorldExperiencePlaceStudioScript($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->getWorldExperiencePlaceStudioScript: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperiencePlaceStudioScriptResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperiencePlaceStudioSnapshot()`

```php
getWorldExperiencePlaceStudioSnapshot($experience_id, $place_id): \Crossly\Model\World\GetWorldExperiencePlaceStudioSnapshotResponse
```

A plan (top) or front drawing of the parts under a path as SVG, with bounds, spawns and unanchored parts that will fall.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->getWorldExperiencePlaceStudioSnapshot($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->getWorldExperiencePlaceStudioSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperiencePlaceStudioSnapshotResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperiencePlaceStudioTree()`

```php
getWorldExperiencePlaceStudioTree($experience_id, $place_id): \Crossly\Model\World\GetWorldExperiencePlaceStudioTreeResponse
```

The live instance tree (what every open Studio shows) by dotted path, depth levels down (default 3, max 12).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->getWorldExperiencePlaceStudioTree($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->getWorldExperiencePlaceStudioTree: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperiencePlaceStudioTreeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldStudioClass()`

```php
getWorldStudioClass(): \Crossly\Model\World\GetWorldStudioClassResponse
```

The engine's class table: insertable classes, services, and for ?name= one class with every property, its type, default and the exact JSON a place (and a studio edit) takes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldStudioClass();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->getWorldStudioClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldStudioClassResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldExperienceAssets()`

```php
listWorldExperienceAssets($experience_id): \Crossly\Model\World\ListWorldExperienceAssetsResponse
```

Meshes imported into this experience, newest first: paths, phone LOD, bounds, hull size, budget report, moderation (pending until a reviewed publish uses them) and a URL you can load now.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->listWorldExperienceAssets($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->listWorldExperienceAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldExperienceAssetsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldExperiencePlaceStudioScript()`

```php
updateWorldExperiencePlaceStudioScript($experience_id, $place_id): \Crossly\Model\World\UpdateWorldExperiencePlaceStudioScriptResponse
```

Save your draft of a script (the place does not change until you commit). Returns lint and the diff from the current source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsStudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->updateWorldExperiencePlaceStudioScript($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsStudioApi->updateWorldExperiencePlaceStudioScript: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldExperiencePlaceStudioScriptResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
