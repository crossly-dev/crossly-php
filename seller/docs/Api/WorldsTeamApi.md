# Crossly\WorldsTeamApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWorldCollaborationAccept()**](WorldsTeamApi.md#createWorldCollaborationAccept) | **POST** /v1/worlds/collaborations/{experienceId}/accept | Accept an invitation.
[**createWorldCollaborationDecline()**](WorldsTeamApi.md#createWorldCollaborationDecline) | **POST** /v1/worlds/collaborations/{experienceId}/decline | Decline an invitation.
[**createWorldExperienceActivityRevert()**](WorldsTeamApi.md#createWorldExperienceActivityRevert) | **POST** /v1/worlds/experiences/{experienceId}/activity/{activityId}/revert | Revert an instance change: its undo is applied as a new edit by you; anything changed since by others is left alone.
[**createWorldExperienceCollaborator()**](WorldsTeamApi.md#createWorldExperienceCollaborator) | **POST** /v1/worlds/experiences/{experienceId}/collaborators | Invite a Crossly handle with a role. Owner or admin; only the owner makes admins. Counts against the owner&#39;s plan cap.
[**createWorldExperiencePlaceCollabOp()**](WorldsTeamApi.md#createWorldExperiencePlaceCollabOp) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/collab/ops | Apply a batch of ops (insert, delete, move, prop, attr, name, tags, world) in server order. Each op is checked against your role; a retried batch id is answered, not re-applied.
[**createWorldExperiencePlaceCollabSave()**](WorldsTeamApi.md#createWorldExperiencePlaceCollabSave) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/collab/save | Write the session into the place draft now (publishing and cloud tests do this themselves).
[**createWorldExperiencePlaceCollabScriptCommit()**](WorldsTeamApi.md#createWorldExperiencePlaceCollabScriptCommit) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/collab/scripts/{nodeId}/commit | Commit your draft with a three-way merge. 409 merge_conflict carries the merged text with conflict blocks and the current source.
[**deleteWorldExperienceCollaborator()**](WorldsTeamApi.md#deleteWorldExperienceCollaborator) | **DELETE** /v1/worlds/experiences/{experienceId}/collaborators/{userId} | Remove a collaborator, or leave (your own user id). Their revenue share returns to the owner from next month.
[**deleteWorldExperiencePlaceCollabScript()**](WorldsTeamApi.md#deleteWorldExperiencePlaceCollabScript) | **DELETE** /v1/worlds/experiences/{experienceId}/places/{placeId}/collab/scripts/{nodeId} | Discard your draft of a script.
[**getWorldExperiencePlaceCollab()**](WorldsTeamApi.md#getWorldExperiencePlaceCollab) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/collab | The live co-editing document of a place (node ids every editor shares), its op sequence and your role.
[**getWorldExperiencePlaceCollabOp()**](WorldsTeamApi.md#getWorldExperiencePlaceCollabOp) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/collab/ops | Ops after a sequence number, grouped by batch. 409 resync when they are no longer kept: reload the session.
[**getWorldExperienceSplit()**](WorldsTeamApi.md#getWorldExperienceSplit) | **GET** /v1/worlds/experiences/{experienceId}/splits | Revenue split of the creator share: current, scheduled, history.
[**getWorldExperienceTeam()**](WorldsTeamApi.md#getWorldExperienceTeam) | **GET** /v1/worlds/experiences/{experienceId}/team | The team: owner, collaborators with roles (owner, admin, editor, scripter, builder, tester, analyst), your role and permissions, the plan cap.
[**listWorldCollaborations()**](WorldsTeamApi.md#listWorldCollaborations) | **GET** /v1/worlds/collaborations | Experiences you are invited to or work on, with your role.
[**listWorldExperienceActivity()**](WorldsTeamApi.md#listWorldExperienceActivity) | **GET** /v1/worlds/experiences/{experienceId}/activity | Activity history, newest first: who changed what, when, from where (studio, api, mcp, cli); instance changes are revertible.
[**listWorldExperiencePlaceCollabScripts()**](WorldsTeamApi.md#listWorldExperiencePlaceCollabScripts) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/collab/scripts | Your script drafts in this place, with whether someone committed since you started.
[**updateWorldExperienceCollaborator()**](WorldsTeamApi.md#updateWorldExperienceCollaborator) | **PATCH** /v1/worlds/experiences/{experienceId}/collaborators/{userId} | Change a collaborator&#39;s role.
[**updateWorldExperiencePlaceCollabScript()**](WorldsTeamApi.md#updateWorldExperiencePlaceCollabScript) | **PUT** /v1/worlds/experiences/{experienceId}/places/{placeId}/collab/scripts/{nodeId} | Save your own draft of a script (needs edit scripts).
[**updateWorldExperienceSplit()**](WorldsTeamApi.md#updateWorldExperienceSplit) | **PUT** /v1/worlds/experiences/{experienceId}/splits | Owner only: split the creator share (70% of net) in basis points summing to 10000. Takes effect the 1st of next month; every party is notified. The 70% total never changes.


## `createWorldCollaborationAccept()`

```php
createWorldCollaborationAccept($experience_id): \Crossly\Model\World\CreateWorldCollaborationAcceptResponse
```

Accept an invitation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->createWorldCollaborationAccept($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->createWorldCollaborationAccept: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldCollaborationAcceptResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldCollaborationDecline()`

```php
createWorldCollaborationDecline($experience_id): \Crossly\Model\World\CreateWorldCollaborationDeclineResponse
```

Decline an invitation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->createWorldCollaborationDecline($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->createWorldCollaborationDecline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldCollaborationDeclineResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperienceActivityRevert()`

```php
createWorldExperienceActivityRevert($experience_id, $activity_id): \Crossly\Model\World\CreateWorldExperienceActivityRevertResponse
```

Revert an instance change: its undo is applied as a new edit by you; anything changed since by others is left alone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$activity_id = 'activity_id_example'; // string

try {
    $result = $apiInstance->createWorldExperienceActivityRevert($experience_id, $activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->createWorldExperienceActivityRevert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **activity_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperienceActivityRevertResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperienceCollaborator()`

```php
createWorldExperienceCollaborator($experience_id): \Crossly\Model\World\CreateWorldExperienceCollaboratorResponse
```

Invite a Crossly handle with a role. Owner or admin; only the owner makes admins. Counts against the owner's plan cap.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->createWorldExperienceCollaborator($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->createWorldExperienceCollaborator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperienceCollaboratorResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperiencePlaceCollabOp()`

```php
createWorldExperiencePlaceCollabOp($experience_id, $place_id): \Crossly\Model\World\CreateWorldExperiencePlaceCollabOpResponse
```

Apply a batch of ops (insert, delete, move, prop, attr, name, tags, world) in server order. Each op is checked against your role; a retried batch id is answered, not re-applied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->createWorldExperiencePlaceCollabOp($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->createWorldExperiencePlaceCollabOp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperiencePlaceCollabOpResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperiencePlaceCollabSave()`

```php
createWorldExperiencePlaceCollabSave($experience_id, $place_id): \Crossly\Model\World\CreateWorldExperiencePlaceCollabSaveResponse
```

Write the session into the place draft now (publishing and cloud tests do this themselves).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->createWorldExperiencePlaceCollabSave($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->createWorldExperiencePlaceCollabSave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperiencePlaceCollabSaveResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperiencePlaceCollabScriptCommit()`

```php
createWorldExperiencePlaceCollabScriptCommit($experience_id, $place_id, $node_id): \Crossly\Model\World\CreateWorldExperiencePlaceCollabScriptCommitResponse
```

Commit your draft with a three-way merge. 409 merge_conflict carries the merged text with conflict blocks and the current source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string
$node_id = 'node_id_example'; // string

try {
    $result = $apiInstance->createWorldExperiencePlaceCollabScriptCommit($experience_id, $place_id, $node_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->createWorldExperiencePlaceCollabScriptCommit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |
 **node_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperiencePlaceCollabScriptCommitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldExperienceCollaborator()`

```php
deleteWorldExperienceCollaborator($experience_id, $user_id): \Crossly\Model\Spatial\DeleteSpatialSceneGrantResponse
```

Remove a collaborator, or leave (your own user id). Their revenue share returns to the owner from next month.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->deleteWorldExperienceCollaborator($experience_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->deleteWorldExperienceCollaborator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **user_id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\DeleteSpatialSceneGrantResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldExperiencePlaceCollabScript()`

```php
deleteWorldExperiencePlaceCollabScript($experience_id, $place_id, $node_id): \Crossly\Model\World\DeleteWorldExperiencePlaceCollabScriptResponse
```

Discard your draft of a script.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string
$node_id = 'node_id_example'; // string

try {
    $result = $apiInstance->deleteWorldExperiencePlaceCollabScript($experience_id, $place_id, $node_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->deleteWorldExperiencePlaceCollabScript: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |
 **node_id** | **string**|  |

### Return type

**\Crossly\Model\World\DeleteWorldExperiencePlaceCollabScriptResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperiencePlaceCollab()`

```php
getWorldExperiencePlaceCollab($experience_id, $place_id): \Crossly\Model\World\GetWorldExperiencePlaceCollabResponse
```

The live co-editing document of a place (node ids every editor shares), its op sequence and your role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->getWorldExperiencePlaceCollab($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->getWorldExperiencePlaceCollab: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperiencePlaceCollabResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperiencePlaceCollabOp()`

```php
getWorldExperiencePlaceCollabOp($experience_id, $place_id): \Crossly\Model\World\GetWorldExperiencePlaceCollabOpResponse
```

Ops after a sequence number, grouped by batch. 409 resync when they are no longer kept: reload the session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->getWorldExperiencePlaceCollabOp($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->getWorldExperiencePlaceCollabOp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperiencePlaceCollabOpResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperienceSplit()`

```php
getWorldExperienceSplit($experience_id): \Crossly\Model\World\GetWorldExperienceSplitResponse
```

Revenue split of the creator share: current, scheduled, history.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->getWorldExperienceSplit($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->getWorldExperienceSplit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceSplitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldExperienceTeam()`

```php
getWorldExperienceTeam($experience_id): \Crossly\Model\World\GetWorldExperienceTeamResponse
```

The team: owner, collaborators with roles (owner, admin, editor, scripter, builder, tester, analyst), your role and permissions, the plan cap.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->getWorldExperienceTeam($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->getWorldExperienceTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceTeamResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldCollaborations()`

```php
listWorldCollaborations(): \Crossly\Model\World\ListWorldCollaborationsResponse
```

Experiences you are invited to or work on, with your role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldCollaborations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->listWorldCollaborations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldCollaborationsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldExperienceActivity()`

```php
listWorldExperienceActivity($experience_id): \Crossly\Model\World\ListWorldExperienceActivityResponse
```

Activity history, newest first: who changed what, when, from where (studio, api, mcp, cli); instance changes are revertible.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->listWorldExperienceActivity($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->listWorldExperienceActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldExperienceActivityResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldExperiencePlaceCollabScripts()`

```php
listWorldExperiencePlaceCollabScripts($experience_id, $place_id): \Crossly\Model\World\ListWorldExperiencePlaceCollabScriptsResponse
```

Your script drafts in this place, with whether someone committed since you started.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->listWorldExperiencePlaceCollabScripts($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->listWorldExperiencePlaceCollabScripts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldExperiencePlaceCollabScriptsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldExperienceCollaborator()`

```php
updateWorldExperienceCollaborator($experience_id, $user_id): \Crossly\Model\World\CreateWorldExperienceCollaboratorResponse
```

Change a collaborator's role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->updateWorldExperienceCollaborator($experience_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->updateWorldExperienceCollaborator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **user_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperienceCollaboratorResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldExperiencePlaceCollabScript()`

```php
updateWorldExperiencePlaceCollabScript($experience_id, $place_id, $node_id): \Crossly\Model\World\UpdateWorldExperiencePlaceCollabScriptResponse
```

Save your own draft of a script (needs edit scripts).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string
$node_id = 'node_id_example'; // string

try {
    $result = $apiInstance->updateWorldExperiencePlaceCollabScript($experience_id, $place_id, $node_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->updateWorldExperiencePlaceCollabScript: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |
 **node_id** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldExperiencePlaceCollabScriptResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldExperienceSplit()`

```php
updateWorldExperienceSplit($experience_id): \Crossly\Model\World\GetWorldExperienceSplitResponse
```

Owner only: split the creator share (70% of net) in basis points summing to 10000. Takes effect the 1st of next month; every party is notified. The 70% total never changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsTeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string

try {
    $result = $apiInstance->updateWorldExperienceSplit($experience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsTeamApi->updateWorldExperienceSplit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldExperienceSplitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
