# Crossly\WorldsPackagesApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWorldExperiencePlacePackage()**](WorldsPackagesApi.md#createWorldExperiencePlacePackage) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/packages | Insert a copy of a package (default: the newest version, auto-update on).
[**createWorldExperiencePlacePackageUpdate()**](WorldsPackagesApi.md#createWorldExperiencePlacePackageUpdate) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/packages/{nodeId}/update | Update a copy to a version (default newest). A copy edited in the place needs force: true (its edits are replaced).
[**createWorldPackage()**](WorldsPackagesApi.md#createWorldPackage) | **POST** /v1/worlds/packages | Create a package (v1) from one node (place JSON) or from a node in a place — which then becomes copy v1, auto-updating.
[**createWorldPackageToolbox()**](WorldsPackagesApi.md#createWorldPackageToolbox) | **POST** /v1/worlds/packages/{packageId}/toolbox | List the latest version in the Toolbox as an asset of kind package (Toolbox review and pricing rules apply).
[**createWorldPackageVersion()**](WorldsPackagesApi.md#createWorldPackageVersion) | **POST** /v1/worlds/packages/{packageId}/versions | Publish a new version; every auto-updating, unmodified copy in your places is updated through its co-editing session. Returns what happened per place.
[**deleteWorldPackage()**](WorldsPackagesApi.md#deleteWorldPackage) | **DELETE** /v1/worlds/packages/{packageId} | Archive a package. Copies in places keep working; they just stop receiving updates.
[**getWorldPackage()**](WorldsPackagesApi.md#getWorldPackage) | **GET** /v1/worlds/packages/{packageId} | A package with its versions.
[**getWorldPackageVersion()**](WorldsPackagesApi.md#getWorldPackageVersion) | **GET** /v1/worlds/packages/{packageId}/versions/{number} | One version, with its payload (one root node in place JSON).
[**listWorldExperiencePlacePackages()**](WorldsPackagesApi.md#listWorldExperiencePlacePackages) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/packages | Package copies in a place: version, newest version, modified, auto-update.
[**listWorldPackages()**](WorldsPackagesApi.md#listWorldPackages) | **GET** /v1/worlds/packages | Your package library: reusable models and modules, newest first, with how many places hold copies.
[**updateWorldExperiencePlacePackage()**](WorldsPackagesApi.md#updateWorldExperiencePlacePackage) | **PATCH** /v1/worlds/experiences/{experienceId}/places/{placeId}/packages/{nodeId} | Turn auto-update on or off for one copy.
[**updateWorldPackage()**](WorldsPackagesApi.md#updateWorldPackage) | **PATCH** /v1/worlds/packages/{packageId} | Rename a package or change its description.


## `createWorldExperiencePlacePackage()`

```php
createWorldExperiencePlacePackage($experience_id, $place_id): \Crossly\Model\World\CreateWorldExperiencePlacePackageResponse
```

Insert a copy of a package (default: the newest version, auto-update on).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsPackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->createWorldExperiencePlacePackage($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsPackagesApi->createWorldExperiencePlacePackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperiencePlacePackageResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldExperiencePlacePackageUpdate()`

```php
createWorldExperiencePlacePackageUpdate($experience_id, $place_id, $node_id): \Crossly\Model\World\CreateWorldExperiencePlacePackageUpdateResponse
```

Update a copy to a version (default newest). A copy edited in the place needs force: true (its edits are replaced).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsPackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string
$node_id = 'node_id_example'; // string

try {
    $result = $apiInstance->createWorldExperiencePlacePackageUpdate($experience_id, $place_id, $node_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsPackagesApi->createWorldExperiencePlacePackageUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |
 **node_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldExperiencePlacePackageUpdateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldPackage()`

```php
createWorldPackage(): \Crossly\Model\World\GetWorldPackageResponse
```

Create a package (v1) from one node (place JSON) or from a node in a place — which then becomes copy v1, auto-updating.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsPackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldPackage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsPackagesApi->createWorldPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldPackageResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldPackageToolbox()`

```php
createWorldPackageToolbox($package_id): \Crossly\Model\World\CreateWorldPackageToolboxResponse
```

List the latest version in the Toolbox as an asset of kind package (Toolbox review and pricing rules apply).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsPackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 'package_id_example'; // string

try {
    $result = $apiInstance->createWorldPackageToolbox($package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsPackagesApi->createWorldPackageToolbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldPackageToolboxResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldPackageVersion()`

```php
createWorldPackageVersion($package_id): \Crossly\Model\World\CreateWorldPackageVersionResponse
```

Publish a new version; every auto-updating, unmodified copy in your places is updated through its co-editing session. Returns what happened per place.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsPackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 'package_id_example'; // string

try {
    $result = $apiInstance->createWorldPackageVersion($package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsPackagesApi->createWorldPackageVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldPackageVersionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldPackage()`

```php
deleteWorldPackage($package_id): \Crossly\Model\World\DeleteWorldPackageResponse
```

Archive a package. Copies in places keep working; they just stop receiving updates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsPackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 'package_id_example'; // string

try {
    $result = $apiInstance->deleteWorldPackage($package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsPackagesApi->deleteWorldPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**|  |

### Return type

**\Crossly\Model\World\DeleteWorldPackageResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldPackage()`

```php
getWorldPackage($package_id): \Crossly\Model\World\GetWorldPackageResponse
```

A package with its versions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsPackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 'package_id_example'; // string

try {
    $result = $apiInstance->getWorldPackage($package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsPackagesApi->getWorldPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldPackageResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldPackageVersion()`

```php
getWorldPackageVersion($package_id, $number): \Crossly\Model\World\GetWorldPackageVersionResponse
```

One version, with its payload (one root node in place JSON).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsPackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 'package_id_example'; // string
$number = 'number_example'; // string

try {
    $result = $apiInstance->getWorldPackageVersion($package_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsPackagesApi->getWorldPackageVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**|  |
 **number** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldPackageVersionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldExperiencePlacePackages()`

```php
listWorldExperiencePlacePackages($experience_id, $place_id): \Crossly\Model\World\ListWorldExperiencePlacePackagesResponse
```

Package copies in a place: version, newest version, modified, auto-update.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsPackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string

try {
    $result = $apiInstance->listWorldExperiencePlacePackages($experience_id, $place_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsPackagesApi->listWorldExperiencePlacePackages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldExperiencePlacePackagesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldPackages()`

```php
listWorldPackages(): \Crossly\Model\World\ListWorldPackagesResponse
```

Your package library: reusable models and modules, newest first, with how many places hold copies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsPackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldPackages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsPackagesApi->listWorldPackages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldPackagesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldExperiencePlacePackage()`

```php
updateWorldExperiencePlacePackage($experience_id, $place_id, $node_id): \Crossly\Model\World\UpdateWorldExperiencePlacePackageResponse
```

Turn auto-update on or off for one copy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsPackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_id = 'experience_id_example'; // string
$place_id = 'place_id_example'; // string
$node_id = 'node_id_example'; // string

try {
    $result = $apiInstance->updateWorldExperiencePlacePackage($experience_id, $place_id, $node_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsPackagesApi->updateWorldExperiencePlacePackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experience_id** | **string**|  |
 **place_id** | **string**|  |
 **node_id** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldExperiencePlacePackageResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldPackage()`

```php
updateWorldPackage($package_id): \Crossly\Model\World\DeleteWorldPackageResponse
```

Rename a package or change its description.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldsPackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 'package_id_example'; // string

try {
    $result = $apiInstance->updateWorldPackage($package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldsPackagesApi->updateWorldPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**|  |

### Return type

**\Crossly\Model\World\DeleteWorldPackageResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
