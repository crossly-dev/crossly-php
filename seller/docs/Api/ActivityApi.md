# Crossly\ActivityApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createActionLogExport()**](ActivityApi.md#createActionLogExport) | **POST** /v1/action-log/exports | Queue an export of the Activity Log: every event (csv, ndjson, pdf) or a summary report (pdf, ndjson). Poll GET /api/v1/action-log/exports/{exportId}, then download it. Exports never contain IP addresses.
[**createActionLogSearchTranslate()**](ActivityApi.md#createActionLogSearchTranslate) | **POST** /v1/action-log/search/translate | Turn a question in words (\&quot;failed delists on Mercari last week\&quot;) into an Activity Log search: pass the returned &#x60;q&#x60; to GET /api/v1/action-log (or the histogram and csv/ndjson exports). Nothing is run. A 404 with details.code &#x60;not_enabled&#x60; means natural-language search is off for this account.
[**createDetectedEventEventConfirm()**](ActivityApi.md#createDetectedEventEventConfirm) | **POST** /v1/detected-events/events/{id}/confirm | Answer an open ask (canConfirm true): optionally which item it is (itemId, one of the match candidates) and which actions to run instead of the ask&#39;s preselected ones. Returns the event. 409 ask_not_open when the event is not waiting.
[**createDetectedEventEventUndo()**](ActivityApi.md#createDetectedEventEventUndo) | **POST** /v1/detected-events/events/{id}/undo | Undo what Crossly did for an event (canUndo true): every executed action&#39;s stored inverse runs, newest first (restore stock, relist, unlink…). Returns the event. 409 nothing_to_undo when nothing is reversible.
[**createDetectedEventRule()**](ActivityApi.md#createDetectedEventRule) | **POST** /v1/detected-events/rules | Create a detection rule: which detected events it applies to (filter + optional condition over any event axis) and what Crossly does then (and else). Without order it is placed most-specific-first, above the default set. Returns the stored rule with its id.
[**createDetectedEventRulePlace()**](ActivityApi.md#createDetectedEventRulePlace) | **POST** /v1/detected-events/rules/place | Save one rule and the whole evaluation order in one transaction: rule.id is an existing id (replace) or any new client id (create); ids is every rule id top-down, naming the rule by that id. Returns the stored rule and the list.
[**createDetectedEventRuleReorder()**](ActivityApi.md#createDetectedEventRuleReorder) | **POST** /v1/detected-events/rules/reorder | Set the evaluation order: ids top-down, defaults included (ids from the rules list). Rules are re-numbered 10, 20, 30…; a default moved above one of your rules is stored as your edit. Returns the list.
[**createDetectedEventRuleResetDefault()**](ActivityApi.md#createDetectedEventRuleResetDefault) | **POST** /v1/detected-events/rules/reset-defaults | Drop your edits of the shipped default rules (keys, or all when omitted). Returns the list.
[**createDetectedEventSimulate()**](ActivityApi.md#createDetectedEventSimulate) | **POST** /v1/detected-events/simulate | Run one event through the rules without acting: the winning rule, rules it shadowed, the trace, the guards that held actions back and the plan per target with how it would run (direct / relay / ask / skip). event needs only kind; every axis left out takes its default. rules &#x3D; an unsaved draft list.
[**createDetectedEventSimulateImpact()**](ActivityApi.md#createDetectedEventSimulateImpact) | **POST** /v1/detected-events/simulate/impact | What a rule edit would change: your detected events of the last days (default 30, at most 500) re-resolved against the draft rules and against the stored ones. Per event: winning rule and actions before and after, and whether it changed. Nothing runs.
[**createEmailEventConfirm()**](ActivityApi.md#createEmailEventConfirm) | **POST** /v1/email-events/{id}/confirm | Confirm an email-detected event: re-run it as certain (a possible sale records the sale and delists the item elsewhere). When several listings could be meant, pass platformListingDbId to choose one.
[**createEmailEventDismiss()**](ActivityApi.md#createEmailEventDismiss) | **POST** /v1/email-events/{id}/dismiss | Dismiss an email-detected event (\&quot;not a sale\&quot;): closes the card without acting.
[**createEventPolicyDecisionConfirm()**](ActivityApi.md#createEventPolicyDecisionConfirm) | **POST** /v1/event-policies/decisions/{id}/confirm | Confirm a review decision from a webhook, order poller or app relay (canConfirm true): the event runs again with the seller confirmed, so a review rule runs the strongest allowed non-review action for that cell. Returns the new decision. 409 when the decision was already confirmed or is not confirmable (email review decisions are confirmed on their review card).
[**deleteDetectedEventRule()**](ActivityApi.md#deleteDetectedEventRule) | **DELETE** /v1/detected-events/rules/{id} | Delete a detection rule. Deleting your edit of a default (its id, or default:&lt;key&gt;) brings the shipped default back; deleting a translated event-policy rule deletes that policy rule too.
[**deleteEventPolicyRule()**](ActivityApi.md#deleteEventPolicyRule) | **DELETE** /v1/event-policies/rules/{id} | Delete a rule: its cell falls back to the next scope (platform → global → the built-in default).
[**getActionLog()**](ActivityApi.md#getActionLog) | **GET** /v1/action-log/{id} | One Activity Log event by id, with &#x60;view&#x60; including its steps and, for bulk jobs, its children.
[**getActionLogExport()**](ActivityApi.md#getActionLogExport) | **GET** /v1/action-log/exports/{exportId} | The state of one Activity Log export.
[**getActionLogExportDownload()**](ActivityApi.md#getActionLogExportDownload) | **GET** /v1/action-log/exports/{exportId}/download | Download a finished Activity Log export (for 24 hours after it completes).
[**getActionLogFacet()**](ActivityApi.md#getActionLogFacet) | **GET** /v1/action-log/facets | Filter options of the caller&#39;s Activity Log (last 90 days): areas with their actions and counts, the team members who acted, platforms and outcomes.
[**getDetectedEventEvent()**](ActivityApi.md#getDetectedEventEvent) | **GET** /v1/detected-events/events/{id} | One detected event with every report of it (first + corroborations, with correlation and contradiction), the guards that held actions back, the plan and each executed action&#39;s outcome and reversibility.
[**getEventPolicy()**](ActivityApi.md#getEventPolicy) | **GET** /v1/event-policies | What Crossly does with each detected marketplace event (sale, listing ended, offer, cancellation, label, shipped, delivered, refund, return, payout, message), per who owns the item (crossly, imported, app_managed, other_tool, untracked). Each matrix cell lists the allowed actions and the effective one, with the scope it comes from (app &gt; platform &gt; global &gt; default). Pass platform (or appId) to see the matrix as that platform&#39;s (or app&#39;s) items see it. Also returns the rules, platforms and connected apps.
[**listActionLog()**](ActivityApi.md#listActionLog) | **GET** /v1/action-log | List Activity Log events, newest first. Each event carries &#x60;view&#x60; (title, sentence, fields, failure advice, who did it) and typed &#x60;detail&#x60;. Page with &#x60;cursor&#x60;; &#x60;pagination.total&#x60; counts matches.
[**listActionLogCalls()**](ActivityApi.md#listActionLogCalls) | **GET** /v1/action-log/{id}/calls | The outbound platform HTTP calls under an event (oldest first) — platform, operation, method, host, status, latency, error class/message, proxy + recipe id. Answers \&quot;what was sent / what went wrong\&quot;. The URL path, request/response bodies and persisted-query hash are never returned.
[**listActionLogHistogram()**](ActivityApi.md#listActionLogHistogram) | **GET** /v1/action-log/histogram | Events per UTC day for the list filters (default: the last 30 days; at most 366).
[**listDetectedEventEvents()**](ActivityApi.md#listDetectedEventEvents) | **GET** /v1/detected-events/events | Every event Crossly detected (sales, order changes, listing changes, offers, messages, account notices), newest first: all its axes, the rule that decided it, its corroborating reports, the plan per target and how each action went, with canConfirm (an open ask) and canUndo. Cursor-paged; filter by kinds, platforms statuses and accounts (comma-separated) and since (ISO time).
[**listDetectedEventRules()**](ActivityApi.md#listDetectedEventRules) | **GET** /v1/detected-events/rules | The seller&#39;s detection rules, top-down in the order they are evaluated (first match wins unless a rule says continue): the seller&#39;s own rules, translations of their event-policy rules (source legacy), then the shipped default set (source default, ids default:&lt;key&gt;; a stored edit of a default replaces it). Each rule has a filter (event kinds, platforms, accounts, apps, tags, items), an optional condition over any event axis, the actions it runs (then / else) and its guard loosenings.
[**listEmailEvents()**](ActivityApi.md#listEmailEvents) | **GET** /v1/email-events | List email-detected events waiting for the seller (status&#x3D;needs_review): a possible sale, ended listing, cancellation or other event an email reported that was not certain enough to act on automatically.
[**listEventPolicyDecisions()**](ActivityApi.md#listEventPolicyDecisions) | **GET** /v1/event-policies/decisions | The decision log, newest first: for each detected event, what the rule or default asked for, what was done (after capability fallback and the email confidence ceiling), the rule that decided it, and the outcome (done / skipped / failed / review). Cursor-paged; filter by event, ownership, platform or outcome (outcome&#x3D;review: still waiting for the seller). Kept 90 days.
[**updateDetectedEventRule()**](ActivityApi.md#updateDetectedEventRule) | **PUT** /v1/detected-events/rules/{id} | Replace a detection rule. An id default:&lt;key&gt; stores your edit of that shipped default (delete it, or reset-defaults, to go back to the shipped one).
[**updateEventPolicyRule()**](ActivityApi.md#updateEventPolicyRule) | **PUT** /v1/event-policies/rules | Set what Crossly does with one kind of detected event for one kind of item: scope global (scopeValue null), platform (scopeValue &#x3D; platform id) or app (scopeValue &#x3D; OAuth app id, app_managed items only). Replaces the rule for the same cell and scope. The action must be one the matrix allows for that cell; import actions exist only for untracked items.


## `createActionLogExport()`

```php
createActionLogExport($create_action_log_export_request): \Crossly\Model\Action\GetActionLogExportResponse
```

Queue an export of the Activity Log: every event (csv, ndjson, pdf) or a summary report (pdf, ndjson). Poll GET /api/v1/action-log/exports/{exportId}, then download it. Exports never contain IP addresses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_action_log_export_request = new \Crossly\Model\Action\CreateActionLogExportRequest(); // \Crossly\Model\Action\CreateActionLogExportRequest

try {
    $result = $apiInstance->createActionLogExport($create_action_log_export_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->createActionLogExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_action_log_export_request** | **\Crossly\Model\Action\CreateActionLogExportRequest**|  |

### Return type

**\Crossly\Model\Action\GetActionLogExportResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createActionLogSearchTranslate()`

```php
createActionLogSearchTranslate($create_action_log_search_translate_request): \Crossly\Model\Action\CreateActionLogSearchTranslateResponse
```

Turn a question in words (\"failed delists on Mercari last week\") into an Activity Log search: pass the returned `q` to GET /api/v1/action-log (or the histogram and csv/ndjson exports). Nothing is run. A 404 with details.code `not_enabled` means natural-language search is off for this account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_action_log_search_translate_request = new \Crossly\Model\Action\CreateActionLogSearchTranslateRequest(); // \Crossly\Model\Action\CreateActionLogSearchTranslateRequest

try {
    $result = $apiInstance->createActionLogSearchTranslate($create_action_log_search_translate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->createActionLogSearchTranslate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_action_log_search_translate_request** | **\Crossly\Model\Action\CreateActionLogSearchTranslateRequest**|  |

### Return type

**\Crossly\Model\Action\CreateActionLogSearchTranslateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDetectedEventEventConfirm()`

```php
createDetectedEventEventConfirm($id, $create_detected_event_event_confirm_request): \Crossly\Model\Detected\CreateDetectedEventEventUndoResponse
```

Answer an open ask (canConfirm true): optionally which item it is (itemId, one of the match candidates) and which actions to run instead of the ask's preselected ones. Returns the event. 409 ask_not_open when the event is not waiting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$create_detected_event_event_confirm_request = new \Crossly\Model\Detected\CreateDetectedEventEventConfirmRequest(); // \Crossly\Model\Detected\CreateDetectedEventEventConfirmRequest

try {
    $result = $apiInstance->createDetectedEventEventConfirm($id, $create_detected_event_event_confirm_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->createDetectedEventEventConfirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **create_detected_event_event_confirm_request** | **\Crossly\Model\Detected\CreateDetectedEventEventConfirmRequest**|  |

### Return type

**\Crossly\Model\Detected\CreateDetectedEventEventUndoResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDetectedEventEventUndo()`

```php
createDetectedEventEventUndo($id): \Crossly\Model\Detected\CreateDetectedEventEventUndoResponse
```

Undo what Crossly did for an event (canUndo true): every executed action's stored inverse runs, newest first (restore stock, relist, unlink…). Returns the event. 409 nothing_to_undo when nothing is reversible.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createDetectedEventEventUndo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->createDetectedEventEventUndo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Detected\CreateDetectedEventEventUndoResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDetectedEventRule()`

```php
createDetectedEventRule($create_detected_event_rule_request): \Crossly\Model\Detected\CreateDetectedEventRuleResponse
```

Create a detection rule: which detected events it applies to (filter + optional condition over any event axis) and what Crossly does then (and else). Without order it is placed most-specific-first, above the default set. Returns the stored rule with its id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_detected_event_rule_request = new \Crossly\Model\Detected\CreateDetectedEventRuleRequest(); // \Crossly\Model\Detected\CreateDetectedEventRuleRequest

try {
    $result = $apiInstance->createDetectedEventRule($create_detected_event_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->createDetectedEventRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_detected_event_rule_request** | **\Crossly\Model\Detected\CreateDetectedEventRuleRequest**|  |

### Return type

**\Crossly\Model\Detected\CreateDetectedEventRuleResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDetectedEventRulePlace()`

```php
createDetectedEventRulePlace($create_detected_event_rule_place_request): \Crossly\Model\Detected\CreateDetectedEventRulePlaceResponse
```

Save one rule and the whole evaluation order in one transaction: rule.id is an existing id (replace) or any new client id (create); ids is every rule id top-down, naming the rule by that id. Returns the stored rule and the list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_detected_event_rule_place_request = new \Crossly\Model\Detected\CreateDetectedEventRulePlaceRequest(); // \Crossly\Model\Detected\CreateDetectedEventRulePlaceRequest

try {
    $result = $apiInstance->createDetectedEventRulePlace($create_detected_event_rule_place_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->createDetectedEventRulePlace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_detected_event_rule_place_request** | **\Crossly\Model\Detected\CreateDetectedEventRulePlaceRequest**|  |

### Return type

**\Crossly\Model\Detected\CreateDetectedEventRulePlaceResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDetectedEventRuleReorder()`

```php
createDetectedEventRuleReorder($create_detected_event_rule_reorder_request): \Crossly\Model\Detected\CreateDetectedEventRuleReorderResponse
```

Set the evaluation order: ids top-down, defaults included (ids from the rules list). Rules are re-numbered 10, 20, 30…; a default moved above one of your rules is stored as your edit. Returns the list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_detected_event_rule_reorder_request = new \Crossly\Model\Detected\CreateDetectedEventRuleReorderRequest(); // \Crossly\Model\Detected\CreateDetectedEventRuleReorderRequest

try {
    $result = $apiInstance->createDetectedEventRuleReorder($create_detected_event_rule_reorder_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->createDetectedEventRuleReorder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_detected_event_rule_reorder_request** | **\Crossly\Model\Detected\CreateDetectedEventRuleReorderRequest**|  |

### Return type

**\Crossly\Model\Detected\CreateDetectedEventRuleReorderResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDetectedEventRuleResetDefault()`

```php
createDetectedEventRuleResetDefault($create_detected_event_rule_reset_default_request): \Crossly\Model\Detected\CreateDetectedEventRuleReorderResponse
```

Drop your edits of the shipped default rules (keys, or all when omitted). Returns the list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_detected_event_rule_reset_default_request = new \Crossly\Model\Detected\CreateDetectedEventRuleResetDefaultRequest(); // \Crossly\Model\Detected\CreateDetectedEventRuleResetDefaultRequest

try {
    $result = $apiInstance->createDetectedEventRuleResetDefault($create_detected_event_rule_reset_default_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->createDetectedEventRuleResetDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_detected_event_rule_reset_default_request** | **\Crossly\Model\Detected\CreateDetectedEventRuleResetDefaultRequest**|  |

### Return type

**\Crossly\Model\Detected\CreateDetectedEventRuleReorderResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDetectedEventSimulate()`

```php
createDetectedEventSimulate($create_detected_event_simulate_request): \Crossly\Model\Detected\CreateDetectedEventSimulateResponse
```

Run one event through the rules without acting: the winning rule, rules it shadowed, the trace, the guards that held actions back and the plan per target with how it would run (direct / relay / ask / skip). event needs only kind; every axis left out takes its default. rules = an unsaved draft list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_detected_event_simulate_request = new \Crossly\Model\Detected\CreateDetectedEventSimulateRequest(); // \Crossly\Model\Detected\CreateDetectedEventSimulateRequest

try {
    $result = $apiInstance->createDetectedEventSimulate($create_detected_event_simulate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->createDetectedEventSimulate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_detected_event_simulate_request** | **\Crossly\Model\Detected\CreateDetectedEventSimulateRequest**|  |

### Return type

**\Crossly\Model\Detected\CreateDetectedEventSimulateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDetectedEventSimulateImpact()`

```php
createDetectedEventSimulateImpact($create_detected_event_simulate_impact_request): \Crossly\Model\Detected\CreateDetectedEventSimulateImpactResponse
```

What a rule edit would change: your detected events of the last days (default 30, at most 500) re-resolved against the draft rules and against the stored ones. Per event: winning rule and actions before and after, and whether it changed. Nothing runs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_detected_event_simulate_impact_request = new \Crossly\Model\Detected\CreateDetectedEventSimulateImpactRequest(); // \Crossly\Model\Detected\CreateDetectedEventSimulateImpactRequest

try {
    $result = $apiInstance->createDetectedEventSimulateImpact($create_detected_event_simulate_impact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->createDetectedEventSimulateImpact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_detected_event_simulate_impact_request** | **\Crossly\Model\Detected\CreateDetectedEventSimulateImpactRequest**|  |

### Return type

**\Crossly\Model\Detected\CreateDetectedEventSimulateImpactResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createEmailEventConfirm()`

```php
createEmailEventConfirm($id, $create_email_event_confirm_request): \Crossly\Model\Email\CreateEmailEventConfirmResponse
```

Confirm an email-detected event: re-run it as certain (a possible sale records the sale and delists the item elsewhere). When several listings could be meant, pass platformListingDbId to choose one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$create_email_event_confirm_request = new \Crossly\Model\Email\CreateEmailEventConfirmRequest(); // \Crossly\Model\Email\CreateEmailEventConfirmRequest

try {
    $result = $apiInstance->createEmailEventConfirm($id, $create_email_event_confirm_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->createEmailEventConfirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **create_email_event_confirm_request** | **\Crossly\Model\Email\CreateEmailEventConfirmRequest**|  |

### Return type

**\Crossly\Model\Email\CreateEmailEventConfirmResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createEmailEventDismiss()`

```php
createEmailEventDismiss($id): \Crossly\Model\Common\IdStatusResponse
```

Dismiss an email-detected event (\"not a sale\"): closes the card without acting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createEmailEventDismiss($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->createEmailEventDismiss: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\IdStatusResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createEventPolicyDecisionConfirm()`

```php
createEventPolicyDecisionConfirm($id): \Crossly\Model\Event\CreateEventPolicyDecisionConfirmResponse
```

Confirm a review decision from a webhook, order poller or app relay (canConfirm true): the event runs again with the seller confirmed, so a review rule runs the strongest allowed non-review action for that cell. Returns the new decision. 409 when the decision was already confirmed or is not confirmable (email review decisions are confirmed on their review card).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createEventPolicyDecisionConfirm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->createEventPolicyDecisionConfirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Event\CreateEventPolicyDecisionConfirmResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteDetectedEventRule()`

```php
deleteDetectedEventRule($id): \Crossly\Model\Common\DeleteStoryResponse
```

Delete a detection rule. Deleting your edit of a default (its id, or default:<key>) brings the shipped default back; deleting a translated event-policy rule deletes that policy rule too.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteDetectedEventRule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->deleteDetectedEventRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\DeleteStoryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteEventPolicyRule()`

```php
deleteEventPolicyRule($id): \Crossly\Model\Common\DeleteStoryResponse
```

Delete a rule: its cell falls back to the next scope (platform → global → the built-in default).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteEventPolicyRule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->deleteEventPolicyRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\DeleteStoryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getActionLog()`

```php
getActionLog($id): \Crossly\Model\Action\ListActionLogItem
```

One Activity Log event by id, with `view` including its steps and, for bulk jobs, its children.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getActionLog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getActionLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Action\ListActionLogItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getActionLogExport()`

```php
getActionLogExport($export_id): \Crossly\Model\Action\GetActionLogExportResponse
```

The state of one Activity Log export.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_id = 'export_id_example'; // string

try {
    $result = $apiInstance->getActionLogExport($export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getActionLogExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_id** | **string**|  |

### Return type

**\Crossly\Model\Action\GetActionLogExportResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getActionLogExportDownload()`

```php
getActionLogExportDownload($export_id): \Crossly\Model\Action\GetActionLogExportDownloadResponse
```

Download a finished Activity Log export (for 24 hours after it completes).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_id = 'export_id_example'; // string

try {
    $result = $apiInstance->getActionLogExportDownload($export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getActionLogExportDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_id** | **string**|  |

### Return type

**\Crossly\Model\Action\GetActionLogExportDownloadResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getActionLogFacet()`

```php
getActionLogFacet(): \Crossly\Model\Action\GetActionLogFacetResponse
```

Filter options of the caller's Activity Log (last 90 days): areas with their actions and counts, the team members who acted, platforms and outcomes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getActionLogFacet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getActionLogFacet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Action\GetActionLogFacetResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDetectedEventEvent()`

```php
getDetectedEventEvent($id): \Crossly\Model\Detected\GetDetectedEventEventResponse
```

One detected event with every report of it (first + corroborations, with correlation and contradiction), the guards that held actions back, the plan and each executed action's outcome and reversibility.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getDetectedEventEvent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getDetectedEventEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Detected\GetDetectedEventEventResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getEventPolicy()`

```php
getEventPolicy($platform, $app_id): \Crossly\Model\Event\GetEventPolicyResponse
```

What Crossly does with each detected marketplace event (sale, listing ended, offer, cancellation, label, shipped, delivered, refund, return, payout, message), per who owns the item (crossly, imported, app_managed, other_tool, untracked). Each matrix cell lists the allowed actions and the effective one, with the scope it comes from (app > platform > global > default). Pass platform (or appId) to see the matrix as that platform's (or app's) items see it. Also returns the rules, platforms and connected apps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string
$app_id = 'app_id_example'; // string

try {
    $result = $apiInstance->getEventPolicy($platform, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getEventPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  | [optional]
 **app_id** | **string**|  | [optional]

### Return type

**\Crossly\Model\Event\GetEventPolicyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listActionLog()`

```php
listActionLog($platform, $action, $category, $area, $status, $source, $target_type, $target_id, $actor_user_id, $q, $since, $until, $at, $cursor, $limit, $offset): \Crossly\Model\Action\ListActionLogResponse
```

List Activity Log events, newest first. Each event carries `view` (title, sentence, fields, failure advice, who did it) and typed `detail`. Page with `cursor`; `pagination.total` counts matches.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string | Platform id (`ebay`, `poshmark`, ...).
$action = 'action_example'; // string | A canonical action key (`listing.delist`, see the public action catalog) or a legacy action word.
$category = 'category_example'; // string
$area = 'area_example'; // string | A seller area: every action of that area (the grouped filter of the dashboard).
$status = 'status_example'; // string
$source = 'source_example'; // string
$target_type = 'target_type_example'; // string | With targetId: events about that object (any of their targets).
$target_id = 'target_id_example'; // string
$actor_user_id = 'actor_user_id_example'; // string | Only what one team member did.
$q = 'q_example'; // string | A search in the activity query language (`action:listing.* -outcome:failure \"free text\"`), ANDed with the other filters. POST /api/v1/action-log/search/translate turns a question in words into one.
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Inclusive lower bound on when the action happened.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Exclusive upper bound.
$at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Jump to a time: the page starts at the newest event at or before it.
$cursor = 'cursor_example'; // string | `pagination.nextCursor` of the previous page.
$limit = 50; // int
$offset = 56; // int | Deprecated: use cursor. offset + limit may reach at most 1000 events.

try {
    $result = $apiInstance->listActionLog($platform, $action, $category, $area, $status, $source, $target_type, $target_id, $actor_user_id, $q, $since, $until, $at, $cursor, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->listActionLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| Platform id (&#x60;ebay&#x60;, &#x60;poshmark&#x60;, ...). | [optional]
 **action** | **string**| A canonical action key (&#x60;listing.delist&#x60;, see the public action catalog) or a legacy action word. | [optional]
 **category** | **string**|  | [optional]
 **area** | **string**| A seller area: every action of that area (the grouped filter of the dashboard). | [optional]
 **status** | **string**|  | [optional]
 **source** | **string**|  | [optional]
 **target_type** | **string**| With targetId: events about that object (any of their targets). | [optional]
 **target_id** | **string**|  | [optional]
 **actor_user_id** | **string**| Only what one team member did. | [optional]
 **q** | **string**| A search in the activity query language (&#x60;action:listing.* -outcome:failure \&quot;free text\&quot;&#x60;), ANDed with the other filters. POST /api/v1/action-log/search/translate turns a question in words into one. | [optional]
 **since** | **\DateTime**| Inclusive lower bound on when the action happened. | [optional]
 **until** | **\DateTime**| Exclusive upper bound. | [optional]
 **at** | **\DateTime**| Jump to a time: the page starts at the newest event at or before it. | [optional]
 **cursor** | **string**| &#x60;pagination.nextCursor&#x60; of the previous page. | [optional]
 **limit** | **int**|  | [optional] [default to 50]
 **offset** | **int**| Deprecated: use cursor. offset + limit may reach at most 1000 events. | [optional]

### Return type

**\Crossly\Model\Action\ListActionLogResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listActionLogCalls()`

```php
listActionLogCalls($id): \Crossly\Model\Action\ListActionLogCallsResponse
```

The outbound platform HTTP calls under an event (oldest first) — platform, operation, method, host, status, latency, error class/message, proxy + recipe id. Answers \"what was sent / what went wrong\". The URL path, request/response bodies and persisted-query hash are never returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listActionLogCalls($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->listActionLogCalls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Action\ListActionLogCallsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listActionLogHistogram()`

```php
listActionLogHistogram($platform, $action, $category, $area, $status, $source, $target_type, $target_id, $actor_user_id, $q, $since, $until): \Crossly\Model\Action\ListActionLogHistogramResponse
```

Events per UTC day for the list filters (default: the last 30 days; at most 366).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string | Platform id (`ebay`, `poshmark`, ...).
$action = 'action_example'; // string | A canonical action key (`listing.delist`, see the public action catalog) or a legacy action word.
$category = 'category_example'; // string
$area = 'area_example'; // string | A seller area: every action of that area (the grouped filter of the dashboard).
$status = 'status_example'; // string
$source = 'source_example'; // string
$target_type = 'target_type_example'; // string | With targetId: events about that object (any of their targets).
$target_id = 'target_id_example'; // string
$actor_user_id = 'actor_user_id_example'; // string | Only what one team member did.
$q = 'q_example'; // string | A search in the activity query language (`action:listing.* -outcome:failure \"free text\"`), ANDed with the other filters. POST /api/v1/action-log/search/translate turns a question in words into one.
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Inclusive lower bound on when the action happened.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Exclusive upper bound.

try {
    $result = $apiInstance->listActionLogHistogram($platform, $action, $category, $area, $status, $source, $target_type, $target_id, $actor_user_id, $q, $since, $until);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->listActionLogHistogram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| Platform id (&#x60;ebay&#x60;, &#x60;poshmark&#x60;, ...). | [optional]
 **action** | **string**| A canonical action key (&#x60;listing.delist&#x60;, see the public action catalog) or a legacy action word. | [optional]
 **category** | **string**|  | [optional]
 **area** | **string**| A seller area: every action of that area (the grouped filter of the dashboard). | [optional]
 **status** | **string**|  | [optional]
 **source** | **string**|  | [optional]
 **target_type** | **string**| With targetId: events about that object (any of their targets). | [optional]
 **target_id** | **string**|  | [optional]
 **actor_user_id** | **string**| Only what one team member did. | [optional]
 **q** | **string**| A search in the activity query language (&#x60;action:listing.* -outcome:failure \&quot;free text\&quot;&#x60;), ANDed with the other filters. POST /api/v1/action-log/search/translate turns a question in words into one. | [optional]
 **since** | **\DateTime**| Inclusive lower bound on when the action happened. | [optional]
 **until** | **\DateTime**| Exclusive upper bound. | [optional]

### Return type

**\Crossly\Model\Action\ListActionLogHistogramResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listDetectedEventEvents()`

```php
listDetectedEventEvents($kinds, $platforms, $accounts, $statuses, $since, $cursor, $limit): \Crossly\Model\Detected\ListDetectedEventEventsResponse
```

Every event Crossly detected (sales, order changes, listing changes, offers, messages, account notices), newest first: all its axes, the rule that decided it, its corroborating reports, the plan per target and how each action went, with canConfirm (an open ask) and canUndo. Cursor-paged; filter by kinds, platforms statuses and accounts (comma-separated) and since (ISO time).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kinds = 'kinds_example'; // string
$platforms = 'platforms_example'; // string
$accounts = 'accounts_example'; // string | Comma-separated platform account ids (scope.account).
$statuses = 'statuses_example'; // string | Comma-separated: acted, held, asked, confirmed, ignored, undone, failed, received, corrected
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$cursor = 'cursor_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->listDetectedEventEvents($kinds, $platforms, $accounts, $statuses, $since, $cursor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->listDetectedEventEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kinds** | **string**|  | [optional]
 **platforms** | **string**|  | [optional]
 **accounts** | **string**| Comma-separated platform account ids (scope.account). | [optional]
 **statuses** | **string**| Comma-separated: acted, held, asked, confirmed, ignored, undone, failed, received, corrected | [optional]
 **since** | **\DateTime**|  | [optional]
 **cursor** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

**\Crossly\Model\Detected\ListDetectedEventEventsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listDetectedEventRules()`

```php
listDetectedEventRules(): \Crossly\Model\Detected\ListDetectedEventRulesResponse
```

The seller's detection rules, top-down in the order they are evaluated (first match wins unless a rule says continue): the seller's own rules, translations of their event-policy rules (source legacy), then the shipped default set (source default, ids default:<key>; a stored edit of a default replaces it). Each rule has a filter (event kinds, platforms, accounts, apps, tags, items), an optional condition over any event axis, the actions it runs (then / else) and its guard loosenings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listDetectedEventRules();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->listDetectedEventRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Detected\ListDetectedEventRulesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listEmailEvents()`

```php
listEmailEvents($status): \Crossly\Model\Email\ListEmailEventsResponse
```

List email-detected events waiting for the seller (status=needs_review): a possible sale, ended listing, cancellation or other event an email reported that was not certain enough to act on automatically.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'needs_review'; // string

try {
    $result = $apiInstance->listEmailEvents($status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->listEmailEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**|  | [optional] [default to &#39;needs_review&#39;]

### Return type

**\Crossly\Model\Email\ListEmailEventsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listEventPolicyDecisions()`

```php
listEventPolicyDecisions($cursor, $limit, $event, $ownership, $platform, $outcome): \Crossly\Model\Event\ListEventPolicyDecisionsResponse
```

The decision log, newest first: for each detected event, what the rule or default asked for, what was done (after capability fallback and the email confidence ceiling), the rule that decided it, and the outcome (done / skipped / failed / review). Cursor-paged; filter by event, ownership, platform or outcome (outcome=review: still waiting for the seller). Kept 90 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string
$limit = 56; // int
$event = 'event_example'; // string
$ownership = 'ownership_example'; // string
$platform = 'platform_example'; // string
$outcome = 'outcome_example'; // string

try {
    $result = $apiInstance->listEventPolicyDecisions($cursor, $limit, $event, $ownership, $platform, $outcome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->listEventPolicyDecisions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **event** | **string**|  | [optional]
 **ownership** | **string**|  | [optional]
 **platform** | **string**|  | [optional]
 **outcome** | **string**|  | [optional]

### Return type

**\Crossly\Model\Event\ListEventPolicyDecisionsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateDetectedEventRule()`

```php
updateDetectedEventRule($id, $create_detected_event_rule_request): \Crossly\Model\Detected\CreateDetectedEventRuleResponse
```

Replace a detection rule. An id default:<key> stores your edit of that shipped default (delete it, or reset-defaults, to go back to the shipped one).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$create_detected_event_rule_request = new \Crossly\Model\Detected\CreateDetectedEventRuleRequest(); // \Crossly\Model\Detected\CreateDetectedEventRuleRequest

try {
    $result = $apiInstance->updateDetectedEventRule($id, $create_detected_event_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->updateDetectedEventRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **create_detected_event_rule_request** | **\Crossly\Model\Detected\CreateDetectedEventRuleRequest**|  |

### Return type

**\Crossly\Model\Detected\CreateDetectedEventRuleResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateEventPolicyRule()`

```php
updateEventPolicyRule($update_event_policy_rule_request): \Crossly\Model\Event\UpdateEventPolicyRuleResponse
```

Set what Crossly does with one kind of detected event for one kind of item: scope global (scopeValue null), platform (scopeValue = platform id) or app (scopeValue = OAuth app id, app_managed items only). Replaces the rule for the same cell and scope. The action must be one the matrix allows for that cell; import actions exist only for untracked items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_event_policy_rule_request = new \Crossly\Model\Event\UpdateEventPolicyRuleRequest(); // \Crossly\Model\Event\UpdateEventPolicyRuleRequest

try {
    $result = $apiInstance->updateEventPolicyRule($update_event_policy_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->updateEventPolicyRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_event_policy_rule_request** | **\Crossly\Model\Event\UpdateEventPolicyRuleRequest**|  |

### Return type

**\Crossly\Model\Event\UpdateEventPolicyRuleResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
