# Crossly\TeamApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTeamAccept()**](TeamApi.md#createTeamAccept) | **POST** /v1/team/accept | Accept a pending team invitation by raw token.
[**createTeamInvite()**](TeamApi.md#createTeamInvite) | **POST** /v1/team/invite | Mint a team invitation; returns the one-time accept URL.
[**createTeamLeave()**](TeamApi.md#createTeamLeave) | **POST** /v1/team/leave | Leave every team this user is currently a member of.
[**createTeamRevoke()**](TeamApi.md#createTeamRevoke) | **POST** /v1/team/revoke | Revoke a pending invite OR an active team member.
[**getTeam()**](TeamApi.md#getTeam) | **GET** /v1/team | List pending team invitations + active members.
[**updateTeam()**](TeamApi.md#updateTeam) | **PATCH** /v1/team/{memberId} | Update a team member&#39;s scopes (owner only).


## `createTeamAccept()`

```php
createTeamAccept(): \Crossly\Model\CreateTeamAcceptResponse
```

Accept a pending team invitation by raw token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createTeamAccept();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->createTeamAccept: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateTeamAcceptResponse**](../Model/CreateTeamAcceptResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTeamInvite()`

```php
createTeamInvite(): \Crossly\Model\CreateTeamInviteResponse
```

Mint a team invitation; returns the one-time accept URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createTeamInvite();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->createTeamInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateTeamInviteResponse**](../Model/CreateTeamInviteResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTeamLeave()`

```php
createTeamLeave(): \Crossly\Model\CreateTeamLeaveResponse
```

Leave every team this user is currently a member of.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createTeamLeave();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->createTeamLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateTeamLeaveResponse**](../Model/CreateTeamLeaveResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTeamRevoke()`

```php
createTeamRevoke(): \Crossly\Model\CreateTeamRevokeResponse
```

Revoke a pending invite OR an active team member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createTeamRevoke();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->createTeamRevoke: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateTeamRevokeResponse**](../Model/CreateTeamRevokeResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTeam()`

```php
getTeam(): \Crossly\Model\GetTeamResponse
```

List pending team invitations + active members.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTeam();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\GetTeamResponse**](../Model/GetTeamResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTeam()`

```php
updateTeam($member_id): \Crossly\Model\UpdateTeamResponse
```

Update a team member's scopes (owner only).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_id = 'member_id_example'; // string

try {
    $result = $apiInstance->updateTeam($member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->updateTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **member_id** | **string**|  |

### Return type

[**\Crossly\Model\UpdateTeamResponse**](../Model/UpdateTeamResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
