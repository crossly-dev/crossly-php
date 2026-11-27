# Crossly\ConversationsApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createConversationMessage()**](ConversationsApi.md#createConversationMessage) | **POST** /v1/conversations/{id}/messages | Reply to the buyer, on the marketplace the conversation is on (Crossly marketplace: straight into the thread). The message is in the thread at once with deliveryStatus &#39;sending&#39;; it settles to &#39;sent&#39; or &#39;failed&#39;. reply_not_supported when the thread cannot take a reply (a no-reply sender, a platform with no reply wire).
[**listConversationMessages()**](ConversationsApi.md#listConversationMessages) | **GET** /v1/conversations/{id}/messages | A conversation&#39;s messages, oldest first. sender is buyer | seller; a reply you sent shows deliveryStatus sending → sent | failed. since (ISO 8601): only messages sent at or after it.
[**listConversations()**](ConversationsApi.md#listConversations) | **GET** /v1/conversations | List buyer conversations, newest activity first. orderId: the conversation(s) about that order (same platform, its listing, its buyer). listingId: about that listing. updatedSince (ISO 8601): only threads with activity at or after it, for polling. search: contains-match on the buyer username or the subject (case-insensitive). Pair with the message.received webhook.


## `createConversationMessage()`

```php
createConversationMessage($id, $create_conversation_message_request): \Crossly\Model\Conversation\CreateConversationMessageResponse
```

Reply to the buyer, on the marketplace the conversation is on (Crossly marketplace: straight into the thread). The message is in the thread at once with deliveryStatus 'sending'; it settles to 'sent' or 'failed'. reply_not_supported when the thread cannot take a reply (a no-reply sender, a platform with no reply wire).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$create_conversation_message_request = new \Crossly\Model\Conversation\CreateConversationMessageRequest(); // \Crossly\Model\Conversation\CreateConversationMessageRequest

try {
    $result = $apiInstance->createConversationMessage($id, $create_conversation_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->createConversationMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **create_conversation_message_request** | **\Crossly\Model\Conversation\CreateConversationMessageRequest**|  |

### Return type

**\Crossly\Model\Conversation\CreateConversationMessageResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listConversationMessages()`

```php
listConversationMessages($id, $page, $limit, $since): \Crossly\Model\Conversation\ListConversationMessagesResponse
```

A conversation's messages, oldest first. sender is buyer | seller; a reply you sent shows deliveryStatus sending → sent | failed. since (ISO 8601): only messages sent at or after it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$page = 1; // int
$limit = 50; // int
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->listConversationMessages($id, $page, $limit, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->listConversationMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **page** | **int**|  | [optional] [default to 1]
 **limit** | **int**|  | [optional] [default to 50]
 **since** | **\DateTime**|  | [optional]

### Return type

**\Crossly\Model\Conversation\ListConversationMessagesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listConversations()`

```php
listConversations($page, $limit, $order_id, $listing_id, $platform, $updated_since, $search): \Crossly\Model\Conversation\ListConversationsResponse
```

List buyer conversations, newest activity first. orderId: the conversation(s) about that order (same platform, its listing, its buyer). listingId: about that listing. updatedSince (ISO 8601): only threads with activity at or after it, for polling. search: contains-match on the buyer username or the subject (case-insensitive). Pair with the message.received webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int
$limit = 25; // int
$order_id = 'order_id_example'; // string
$listing_id = 'listing_id_example'; // string
$platform = 'platform_example'; // string
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$search = 'search_example'; // string | Contains-match (case-insensitive) on the buyer username or the thread subject.

try {
    $result = $apiInstance->listConversations($page, $limit, $order_id, $listing_id, $platform, $updated_since, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->listConversations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional] [default to 1]
 **limit** | **int**|  | [optional] [default to 25]
 **order_id** | **string**|  | [optional]
 **listing_id** | **string**|  | [optional]
 **platform** | **string**|  | [optional]
 **updated_since** | **\DateTime**|  | [optional]
 **search** | **string**| Contains-match (case-insensitive) on the buyer username or the thread subject. | [optional]

### Return type

**\Crossly\Model\Conversation\ListConversationsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
