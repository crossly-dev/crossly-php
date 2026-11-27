# Crossly\BooksApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBookExpense()**](BooksApi.md#createBookExpense) | **POST** /v1/books/expenses | Log a business expense: date, amountCents, a Schedule C category, vendor, description, receipt link, optionally recurring monthly or yearly.
[**deleteBookExpense()**](BooksApi.md#deleteBookExpense) | **DELETE** /v1/books/expenses/{id} | Delete a logged expense. It leaves the P&amp;L and the exports.
[**getBook()**](BooksApi.md#getBook) | **GET** /v1/books | Profit and loss for a year and period on the Schedule C lines: income, COGS, gross profit, expenses (marketplace fees, postage, mileage, your categories), net profit, monthly table, per-marketplace table with 1099-K expectations, Part III COGS, estimated tax and sales tax collected by marketplaces. Money in cents.
[**getBook1099k()**](BooksApi.md#getBook1099k) | **GET** /v1/books/1099k | Per marketplace for a year: the 1099-K gross you recorded beside the gross Crossly computed, the difference, and whether a form is expected (federal: over $20,000 and over 200 transactions).
[**getBookExpense()**](BooksApi.md#getBookExpense) | **GET** /v1/books/expenses | Your logged business expenses in a year and period (recurring ones expanded), with their Schedule C category. Amounts in cents.
[**getBookTaxProfile()**](BooksApi.md#getBookTaxProfile) | **GET** /v1/books/tax-profile | Your tax profile: time zone for books boundaries, filing status, state, set-aside and rate assumptions, accounting method, and business name, EIN and address.
[**getBookTransaction()**](BooksApi.md#getBookTransaction) | **GET** /v1/books/transactions | The sale rows behind any P&amp;L line, newest first: gross, refunded, fee and fee source, shipping, COGS, tax collected and net, in cents.
[**updateBook1099k()**](BooksApi.md#updateBook1099k) | **PUT** /v1/books/1099k | Record what a marketplace reported on its 1099-K for a year (gross in cents, transactions, notes). Answers the year&#39;s reconciliation, as GET /v1/books/1099k does.
[**updateBookExpense()**](BooksApi.md#updateBookExpense) | **PATCH** /v1/books/expenses/{id} | Change a logged expense.
[**updateBookTaxProfile()**](BooksApi.md#updateBookTaxProfile) | **PUT** /v1/books/tax-profile | Update your tax profile: time zone, filing status, state, set-aside and rate assumptions (basis points), accounting method, business name, EIN and address. Fields left out are unchanged.


## `createBookExpense()`

```php
createBookExpense(): \Crossly\Model\Book\CreateBookExpenseResponse
```

Log a business expense: date, amountCents, a Schedule C category, vendor, description, receipt link, optionally recurring monthly or yearly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\BooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createBookExpense();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BooksApi->createBookExpense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Book\CreateBookExpenseResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBookExpense()`

```php
deleteBookExpense($id): \Crossly\Model\Common\DeleteStoryResponse
```

Delete a logged expense. It leaves the P&L and the exports.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\BooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The expense id.

try {
    $result = $apiInstance->deleteBookExpense($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BooksApi->deleteBookExpense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The expense id. |

### Return type

**\Crossly\Model\Common\DeleteStoryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBook()`

```php
getBook($year, $period, $tz): \Crossly\Model\Book\GetBookResponse
```

Profit and loss for a year and period on the Schedule C lines: income, COGS, gross profit, expenses (marketplace fees, postage, mileage, your categories), net profit, monthly table, per-marketplace table with 1099-K expectations, Part III COGS, estimated tax and sales tax collected by marketplaces. Money in cents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\BooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Tax year. Default the current year.
$period = 'period_example'; // string | fy = full year (default), ytd, q1-q4, m01-m12. Boundaries are in your tax-profile time zone.
$tz = 'tz_example'; // string | IANA zone; default your tax profile zone.

try {
    $result = $apiInstance->getBook($year, $period, $tz);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BooksApi->getBook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Tax year. Default the current year. | [optional]
 **period** | **string**| fy &#x3D; full year (default), ytd, q1-q4, m01-m12. Boundaries are in your tax-profile time zone. | [optional]
 **tz** | **string**| IANA zone; default your tax profile zone. | [optional]

### Return type

**\Crossly\Model\Book\GetBookResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBook1099k()`

```php
getBook1099k($year): \Crossly\Model\Common\GetBook1099kResponse
```

Per marketplace for a year: the 1099-K gross you recorded beside the gross Crossly computed, the difference, and whether a form is expected (federal: over $20,000 and over 200 transactions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\BooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Tax year. Default the current year.

try {
    $result = $apiInstance->getBook1099k($year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BooksApi->getBook1099k: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Tax year. Default the current year. | [optional]

### Return type

**\Crossly\Model\Common\GetBook1099kResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBookExpense()`

```php
getBookExpense($year, $period, $category, $page, $size): \Crossly\Model\Book\GetBookExpenseResponse
```

Your logged business expenses in a year and period (recurring ones expanded), with their Schedule C category. Amounts in cents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\BooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Tax year. Default the current year.
$period = 'period_example'; // string | fy = full year (default), ytd, q1-q4, m01-m12. Boundaries are in your tax-profile time zone.
$category = 'category_example'; // string | An expense category id, e.g. supplies, postage, software_subscriptions.
$page = 56; // int | 1-indexed page. Default 1.
$size = 56; // int | Rows per page, at most 100. Default 25.

try {
    $result = $apiInstance->getBookExpense($year, $period, $category, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BooksApi->getBookExpense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Tax year. Default the current year. | [optional]
 **period** | **string**| fy &#x3D; full year (default), ytd, q1-q4, m01-m12. Boundaries are in your tax-profile time zone. | [optional]
 **category** | **string**| An expense category id, e.g. supplies, postage, software_subscriptions. | [optional]
 **page** | **int**| 1-indexed page. Default 1. | [optional]
 **size** | **int**| Rows per page, at most 100. Default 25. | [optional]

### Return type

**\Crossly\Model\Book\GetBookExpenseResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBookTaxProfile()`

```php
getBookTaxProfile(): \Crossly\Model\Book\GetBookTaxProfileResponse
```

Your tax profile: time zone for books boundaries, filing status, state, set-aside and rate assumptions, accounting method, and business name, EIN and address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\BooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBookTaxProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BooksApi->getBookTaxProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Book\GetBookTaxProfileResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBookTransaction()`

```php
getBookTransaction($year, $period, $tz, $platform, $status, $page, $size): \Crossly\Model\Book\GetBookTransactionResponse
```

The sale rows behind any P&L line, newest first: gross, refunded, fee and fee source, shipping, COGS, tax collected and net, in cents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\BooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Tax year. Default the current year.
$period = 'period_example'; // string | fy = full year (default), ytd, q1-q4, m01-m12. Boundaries are in your tax-profile time zone.
$tz = 'tz_example'; // string | IANA zone; default your tax profile zone.
$platform = 'platform_example'; // string | One platform id.
$status = 'status_example'; // string | completed = counted in income; pending = details not in yet (no money); default all.
$page = 56; // int | 1-indexed page. Default 1.
$size = 56; // int | Rows per page, at most 100. Default 50.

try {
    $result = $apiInstance->getBookTransaction($year, $period, $tz, $platform, $status, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BooksApi->getBookTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Tax year. Default the current year. | [optional]
 **period** | **string**| fy &#x3D; full year (default), ytd, q1-q4, m01-m12. Boundaries are in your tax-profile time zone. | [optional]
 **tz** | **string**| IANA zone; default your tax profile zone. | [optional]
 **platform** | **string**| One platform id. | [optional]
 **status** | **string**| completed &#x3D; counted in income; pending &#x3D; details not in yet (no money); default all. | [optional]
 **page** | **int**| 1-indexed page. Default 1. | [optional]
 **size** | **int**| Rows per page, at most 100. Default 50. | [optional]

### Return type

**\Crossly\Model\Book\GetBookTransactionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateBook1099k()`

```php
updateBook1099k(): \Crossly\Model\Common\GetBook1099kResponse
```

Record what a marketplace reported on its 1099-K for a year (gross in cents, transactions, notes). Answers the year's reconciliation, as GET /v1/books/1099k does.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\BooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateBook1099k();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BooksApi->updateBook1099k: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\GetBook1099kResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateBookExpense()`

```php
updateBookExpense($id): \Crossly\Model\Book\CreateBookExpenseResponse
```

Change a logged expense.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\BooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The expense id.

try {
    $result = $apiInstance->updateBookExpense($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BooksApi->updateBookExpense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The expense id. |

### Return type

**\Crossly\Model\Book\CreateBookExpenseResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateBookTaxProfile()`

```php
updateBookTaxProfile(): \Crossly\Model\Book\GetBookTaxProfileResponse
```

Update your tax profile: time zone, filing status, state, set-aside and rate assumptions (basis points), accounting method, business name, EIN and address. Fields left out are unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\BooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateBookTaxProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BooksApi->updateBookTaxProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Book\GetBookTaxProfileResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
