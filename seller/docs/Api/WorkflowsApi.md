# Crossly\WorkflowsApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWorkflow()**](WorkflowsApi.md#createWorkflow) | **POST** /v1/workflows | Create a workflow: from blank ({ name, graph? }), from a template ({ from: \&quot;template\&quot;, templateId, setup?, activate? }) or from an export document ({ from: \&quot;import\&quot;, document }). New workflows start paused; activate one with POST /v1/workflows/{id}/activate. Returns the workflow and its validation issues.
[**createWorkflowActivate()**](WorkflowsApi.md#createWorkflowActivate) | **POST** /v1/workflows/{id}/activate | Activate a workflow: its triggers start firing. A graph with blocking issues is refused (422, details.issues).
[**createWorkflowApprovalDecide()**](WorkflowsApi.md#createWorkflowApprovalDecide) | **POST** /v1/workflow-approvals/{id}/decide | Approve or reject a pending flow.approval request: the waiting run resumes down the approved or rejected port. 409 when it was already decided (another device, Telegram, or the timeout).
[**createWorkflowChain()**](WorkflowsApi.md#createWorkflowChain) | **POST** /v1/workflow-chains | Create a multi-step workflow chain.
[**createWorkflowChainRunNow()**](WorkflowsApi.md#createWorkflowChainRunNow) | **POST** /v1/workflow-chains/{id}/run-now | Enqueue an ad-hoc run of a workflow chain.
[**createWorkflowChainToggle()**](WorkflowsApi.md#createWorkflowChainToggle) | **POST** /v1/workflow-chains/{id}/toggle | Flip a workflow chain between active and inactive.
[**createWorkflowDeactivate()**](WorkflowsApi.md#createWorkflowDeactivate) | **POST** /v1/workflows/{id}/deactivate | Pause a workflow: its triggers stop firing. Runs already started finish.
[**createWorkflowDuplicate()**](WorkflowsApi.md#createWorkflowDuplicate) | **POST** /v1/workflows/{id}/duplicate | Copy a workflow (graph, description, tags) into a new paused workflow.
[**createWorkflowExpressionPreview()**](WorkflowsApi.md#createWorkflowExpressionPreview) | **POST** /v1/workflows/expressions/preview | Resolve one param value (\&quot;{{ $json.priceCents * 0.9 }}\&quot;) with the engine&#39;s evaluator against an item, the trigger item, earlier nodes&#39; items or a stored run. A bad expression is an answer (ok&#x3D;false with the message), not an HTTP error. Changes nothing.
[**createWorkflowImport()**](WorkflowsApi.md#createWorkflowImport) | **POST** /v1/workflows/import | Import a crossly.workflow export document (or { document, name }) as a new, paused workflow. Integration and workflow references are cleared (they belong to the exporting account) and listed in stripped.
[**createWorkflowRun()**](WorkflowsApi.md#createWorkflowRun) | **POST** /v1/workflows/{id}/run | Run a workflow (active or paused) live now, on items you pass or on selected listings / orders / inventory items (one kind per call, up to 1,000). The graph must validate (422 with issues otherwise).
[**createWorkflowRunCancel()**](WorkflowsApi.md#createWorkflowRunCancel) | **POST** /v1/workflow-runs/{runId}/cancel | Cancel a queued, running or waiting run. 409 when it already finished.
[**createWorkflowRunOn()**](WorkflowsApi.md#createWorkflowRunOn) | **POST** /v1/workflows/run-on | \&quot;Run workflow on…\&quot;: the same as POST /v1/workflows/{id}/run with the workflow named in the body.
[**createWorkflowRunRetry()**](WorkflowsApi.md#createWorkflowRunRetry) | **POST** /v1/workflow-runs/{runId}/retry | Retry a failed run from the node that failed: a new run (retryOfRunId) seeded from the failed run&#39;s checkpoint, so nodes that succeeded are not repeated. 409 unless the run failed.
[**createWorkflowSaleEnd()**](WorkflowsApi.md#createWorkflowSaleEnd) | **POST** /v1/workflows/sales/{saleEventId}/end | End a sale now. A sale that has not started is cancelled; a live one closes and every discounted price is put back now (reverted &#x3D; how many listings were restored). 404 for a sale that is not yours.
[**createWorkflowTemplateUse()**](WorkflowsApi.md#createWorkflowTemplateUse) | **POST** /v1/workflows/templates/{id}/use | Create a workflow from a template, filling its setup fields; activate&#x3D;true activates it when it validates.
[**createWorkflowTest()**](WorkflowsApi.md#createWorkflowTest) | **POST** /v1/workflows/{id}/test | Test a workflow (the saved graph, or a draft graph you pass). mode&#x3D;test runs it for real, using pinned data where a node has it; mode&#x3D;dry is a safe test: write, destructive and money nodes report what they would do and change nothing. Trigger items: the ones you pass, else pinned, else the last real ones, else the trigger sample.
[**createWorkflowValidate()**](WorkflowsApi.md#createWorkflowValidate) | **POST** /v1/workflows/validate | Validate a graph without saving it: unknown node types, missing required params, bad ports, cycles, expression errors. blocking&#x3D;true means activation would be refused.
[**createWorkflowVersionRestore()**](WorkflowsApi.md#createWorkflowVersionRestore) | **POST** /v1/workflows/{id}/versions/{v}/restore | Restore an earlier version&#39;s graph as a new version. Pass version (the current one you read) to refuse the restore when someone saved meanwhile (409). Body optional: { version?: integer }.
[**createWorkflowWebhookRotate()**](WorkflowsApi.md#createWorkflowWebhookRotate) | **POST** /v1/workflows/{id}/webhooks/{nodeId}/rotate | Issue a new inbound URL for an on.webhook trigger node (the old one stops working). The URL, and the signing secret when withSecret&#x3D;true, are returned ONCE: store them now.
[**deleteWorkflow()**](WorkflowsApi.md#deleteWorkflow) | **DELETE** /v1/workflows/{id} | Delete (archive) a workflow: its triggers stop, open runs are cancelled, run history stays readable.
[**deleteWorkflowChain()**](WorkflowsApi.md#deleteWorkflowChain) | **DELETE** /v1/workflow-chains/{id} | Delete a workflow chain (cascades steps + runs).
[**getWorkflow()**](WorkflowsApi.md#getWorkflow) | **GET** /v1/workflows/{id} | Get one workflow with its full graph and current version.
[**getWorkflowCatalog()**](WorkflowsApi.md#getWorkflowCatalog) | **GET** /v1/workflows/catalog | Everything needed to build a workflow: every node type (params, ports, output fields, risk, platforms capability), which platforms each capability covers and which of those you have connected, the expression helpers and bindings ({{ $json.listingId }}…) and the condition operators. Read this before composing a graph rather than guessing node types or param keys.
[**getWorkflowChain()**](WorkflowsApi.md#getWorkflowChain) | **GET** /v1/workflow-chains/{id} | Get one workflow chain with its steps.
[**getWorkflowExport()**](WorkflowsApi.md#getWorkflowExport) | **GET** /v1/workflows/{id}/export | Export a workflow as a portable document (format crossly.workflow) that POST /v1/workflows/import accepts. Credentials and account handles are stripped; pinned test data only with pinnedData&#x3D;true.
[**getWorkflowRun()**](WorkflowsApi.md#getWorkflowRun) | **GET** /v1/workflow-runs/{runId} | One run: its summary, the graph version it ran, and every node execution (status, item counts per port, timing, errors). Item data per node: GET …/nodes/{nodeId}.
[**getWorkflowRunNode()**](WorkflowsApi.md#getWorkflowRunNode) | **GET** /v1/workflow-runs/{runId}/nodes/{nodeId} | Every execution of one node in a run with its input and output items (each port keeps the first 50 items, 16 KB per item; truncated&#x3D;true when cut). Data older than the retention window, or not kept by settings.saveSuccessData&#x3D;false, is pruned: that execution has input/output null and pruned&#x3D;true, and when every execution is pruned the response is { data: null, meta: { pruned: true } } (never an empty list).
[**listWorkflowApprovals()**](WorkflowsApi.md#listWorkflowApprovals) | **GET** /v1/workflow-approvals | Approval requests from flow.approval nodes, newest first (pending only unless status says otherwise). Decide one with POST /v1/workflow-approvals/{id}/decide.
[**listWorkflowChains()**](WorkflowsApi.md#listWorkflowChains) | **GET** /v1/workflow-chains | List workflow chains with their step graph.
[**listWorkflowRuns()**](WorkflowsApi.md#listWorkflowRuns) | **GET** /v1/workflows/{id}/runs | Run history of one workflow, newest first, with per-node status and item counts.
[**listWorkflowRuns2()**](WorkflowsApi.md#listWorkflowRuns2) | **GET** /v1/workflow-runs | Runs of every workflow, newest first. Filter by workflow, status, mode and time.
[**listWorkflowSaleActive()**](WorkflowsApi.md#listWorkflowSaleActive) | **GET** /v1/workflows/sales/active | Every live or upcoming sale (a sales event started by a sale.start node) with the workflow that runs it: percent off, window, and how many listings it applies to.
[**listWorkflowTemplates()**](WorkflowsApi.md#listWorkflowTemplates) | **GET** /v1/workflows/templates | Ready-made workflows (weekend sale, stale-listing markdowns, offer responder, ship-by alerts…), each a complete graph plus the setup fields its \&quot;use\&quot; call asks for.
[**listWorkflowVersions()**](WorkflowsApi.md#listWorkflowVersions) | **GET** /v1/workflows/{id}/versions | The saved versions of a workflow, newest first (restore one with POST …/versions/{v}/restore).
[**listWorkflows()**](WorkflowsApi.md#listWorkflows) | **GET** /v1/workflows | List workflows, newest change first. A workflow is a graph of nodes: one or more triggers, then actions, lookups and flow nodes (if, switch, wait, approval…). Each row carries its trigger and node types and a 7-day run sparkline, not the graph (GET /v1/workflows/{id} has it).
[**updateWorkflow()**](WorkflowsApi.md#updateWorkflow) | **PUT** /v1/workflows/{id} | Save a workflow. Pass the version you edited: a save over a newer version is 409 version_conflict (re-read and merge). Saving an active workflow validates it like activation does (422 with issues).
[**updateWorkflowChain()**](WorkflowsApi.md#updateWorkflowChain) | **PUT** /v1/workflow-chains/{id} | Replace a workflow chain wholesale.


## `createWorkflow()`

```php
createWorkflow($create_workflow_request): \Crossly\Model\Workflow\CreateWorkflowResponse
```

Create a workflow: from blank ({ name, graph? }), from a template ({ from: \"template\", templateId, setup?, activate? }) or from an export document ({ from: \"import\", document }). New workflows start paused; activate one with POST /v1/workflows/{id}/activate. Returns the workflow and its validation issues.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_workflow_request = new \Crossly\Model\Workflow\CreateWorkflowRequest(); // \Crossly\Model\Workflow\CreateWorkflowRequest

try {
    $result = $apiInstance->createWorkflow($create_workflow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_workflow_request** | **\Crossly\Model\Workflow\CreateWorkflowRequest**|  |

### Return type

**\Crossly\Model\Workflow\CreateWorkflowResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowActivate()`

```php
createWorkflowActivate($id): \Crossly\Model\Common\WorkflowResponse
```

Activate a workflow: its triggers start firing. A graph with blocking issues is refused (422, details.issues).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Workflow id.

try {
    $result = $apiInstance->createWorkflowActivate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowActivate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Workflow id. |

### Return type

**\Crossly\Model\Common\WorkflowResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowApprovalDecide()`

```php
createWorkflowApprovalDecide($id, $create_workflow_approval_decide_request): \Crossly\Model\Workflow\CreateWorkflowApprovalDecideResponse
```

Approve or reject a pending flow.approval request: the waiting run resumes down the approved or rejected port. 409 when it was already decided (another device, Telegram, or the timeout).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Approval id from GET /v1/workflow-approvals.
$create_workflow_approval_decide_request = new \Crossly\Model\Workflow\CreateWorkflowApprovalDecideRequest(); // \Crossly\Model\Workflow\CreateWorkflowApprovalDecideRequest

try {
    $result = $apiInstance->createWorkflowApprovalDecide($id, $create_workflow_approval_decide_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowApprovalDecide: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Approval id from GET /v1/workflow-approvals. |
 **create_workflow_approval_decide_request** | **\Crossly\Model\Workflow\CreateWorkflowApprovalDecideRequest**|  |

### Return type

**\Crossly\Model\Workflow\CreateWorkflowApprovalDecideResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowChain()`

```php
createWorkflowChain(): \Crossly\Model\Common\IdResponse
```

Create a multi-step workflow chain.

Deprecated: workflow chains are workflows now. Use /v1/workflows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorkflowChain();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\IdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowChainRunNow()`

```php
createWorkflowChainRunNow($id): \Crossly\Model\Workflow\CreateWorkflowChainRunNowResponse
```

Enqueue an ad-hoc run of a workflow chain.

Deprecated: workflow chains are workflows now. Use /v1/workflows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorkflowChainRunNow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowChainRunNow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Workflow\CreateWorkflowChainRunNowResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowChainToggle()`

```php
createWorkflowChainToggle($id): \Crossly\Model\Workflow\CreateWorkflowChainToggleResponse
```

Flip a workflow chain between active and inactive.

Deprecated: workflow chains are workflows now. Use /v1/workflows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorkflowChainToggle($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowChainToggle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Workflow\CreateWorkflowChainToggleResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowDeactivate()`

```php
createWorkflowDeactivate($id): \Crossly\Model\Common\WorkflowResponse
```

Pause a workflow: its triggers stop firing. Runs already started finish.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Workflow id.

try {
    $result = $apiInstance->createWorkflowDeactivate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowDeactivate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Workflow id. |

### Return type

**\Crossly\Model\Common\WorkflowResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowDuplicate()`

```php
createWorkflowDuplicate($id, $create_workflow_duplicate_request): \Crossly\Model\Workflow\CreateWorkflowDuplicateResponse
```

Copy a workflow (graph, description, tags) into a new paused workflow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Workflow id.
$create_workflow_duplicate_request = new \Crossly\Model\Workflow\CreateWorkflowDuplicateRequest(); // \Crossly\Model\Workflow\CreateWorkflowDuplicateRequest

try {
    $result = $apiInstance->createWorkflowDuplicate($id, $create_workflow_duplicate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Workflow id. |
 **create_workflow_duplicate_request** | **\Crossly\Model\Workflow\CreateWorkflowDuplicateRequest**|  |

### Return type

**\Crossly\Model\Workflow\CreateWorkflowDuplicateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowExpressionPreview()`

```php
createWorkflowExpressionPreview($create_workflow_expression_preview_request): \Crossly\Model\Workflow\CreateWorkflowExpressionPreviewResponse
```

Resolve one param value (\"{{ $json.priceCents * 0.9 }}\") with the engine's evaluator against an item, the trigger item, earlier nodes' items or a stored run. A bad expression is an answer (ok=false with the message), not an HTTP error. Changes nothing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_workflow_expression_preview_request = new \Crossly\Model\Workflow\CreateWorkflowExpressionPreviewRequest(); // \Crossly\Model\Workflow\CreateWorkflowExpressionPreviewRequest

try {
    $result = $apiInstance->createWorkflowExpressionPreview($create_workflow_expression_preview_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowExpressionPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_workflow_expression_preview_request** | **\Crossly\Model\Workflow\CreateWorkflowExpressionPreviewRequest**|  |

### Return type

**\Crossly\Model\Workflow\CreateWorkflowExpressionPreviewResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowImport()`

```php
createWorkflowImport($request_body): \Crossly\Model\Workflow\CreateWorkflowImportResponse
```

Import a crossly.workflow export document (or { document, name }) as a new, paused workflow. Integration and workflow references are cleared (they belong to the exporting account) and listed in stripped.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->createWorkflowImport($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | **array<string,mixed>**|  |

### Return type

**\Crossly\Model\Workflow\CreateWorkflowImportResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowRun()`

```php
createWorkflowRun($id, $create_workflow_run_request): \Crossly\Model\Workflow\CreateWorkflowRunResponse
```

Run a workflow (active or paused) live now, on items you pass or on selected listings / orders / inventory items (one kind per call, up to 1,000). The graph must validate (422 with issues otherwise).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Workflow id.
$create_workflow_run_request = new \Crossly\Model\Workflow\CreateWorkflowRunRequest(); // \Crossly\Model\Workflow\CreateWorkflowRunRequest

try {
    $result = $apiInstance->createWorkflowRun($id, $create_workflow_run_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Workflow id. |
 **create_workflow_run_request** | **\Crossly\Model\Workflow\CreateWorkflowRunRequest**|  |

### Return type

**\Crossly\Model\Workflow\CreateWorkflowRunResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowRunCancel()`

```php
createWorkflowRunCancel($run_id): \Crossly\Model\Workflow\CreateWorkflowRunCancelResponse
```

Cancel a queued, running or waiting run. 409 when it already finished.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 'run_id_example'; // string | Workflow run id.

try {
    $result = $apiInstance->createWorkflowRunCancel($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowRunCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **run_id** | **string**| Workflow run id. |

### Return type

**\Crossly\Model\Workflow\CreateWorkflowRunCancelResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowRunOn()`

```php
createWorkflowRunOn($create_workflow_run_on_request): \Crossly\Model\Workflow\CreateWorkflowRunOnResponse
```

\"Run workflow on…\": the same as POST /v1/workflows/{id}/run with the workflow named in the body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_workflow_run_on_request = new \Crossly\Model\Workflow\CreateWorkflowRunOnRequest(); // \Crossly\Model\Workflow\CreateWorkflowRunOnRequest

try {
    $result = $apiInstance->createWorkflowRunOn($create_workflow_run_on_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowRunOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_workflow_run_on_request** | **\Crossly\Model\Workflow\CreateWorkflowRunOnRequest**|  |

### Return type

**\Crossly\Model\Workflow\CreateWorkflowRunOnResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowRunRetry()`

```php
createWorkflowRunRetry($run_id): \Crossly\Model\Workflow\CreateWorkflowRunRetryResponse
```

Retry a failed run from the node that failed: a new run (retryOfRunId) seeded from the failed run's checkpoint, so nodes that succeeded are not repeated. 409 unless the run failed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 'run_id_example'; // string | Workflow run id.

try {
    $result = $apiInstance->createWorkflowRunRetry($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowRunRetry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **run_id** | **string**| Workflow run id. |

### Return type

**\Crossly\Model\Workflow\CreateWorkflowRunRetryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowSaleEnd()`

```php
createWorkflowSaleEnd($sale_event_id): \Crossly\Model\Workflow\CreateWorkflowSaleEndResponse
```

End a sale now. A sale that has not started is cancelled; a live one closes and every discounted price is put back now (reverted = how many listings were restored). 404 for a sale that is not yours.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sale_event_id = 'sale_event_id_example'; // string | Sale id from GET /v1/workflows/sales/active.

try {
    $result = $apiInstance->createWorkflowSaleEnd($sale_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowSaleEnd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sale_event_id** | **string**| Sale id from GET /v1/workflows/sales/active. |

### Return type

**\Crossly\Model\Workflow\CreateWorkflowSaleEndResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowTemplateUse()`

```php
createWorkflowTemplateUse($id, $create_workflow_template_use_request): \Crossly\Model\Workflow\CreateWorkflowResponse
```

Create a workflow from a template, filling its setup fields; activate=true activates it when it validates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Template id from GET /v1/workflows/templates.
$create_workflow_template_use_request = new \Crossly\Model\Workflow\CreateWorkflowTemplateUseRequest(); // \Crossly\Model\Workflow\CreateWorkflowTemplateUseRequest

try {
    $result = $apiInstance->createWorkflowTemplateUse($id, $create_workflow_template_use_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowTemplateUse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Template id from GET /v1/workflows/templates. |
 **create_workflow_template_use_request** | **\Crossly\Model\Workflow\CreateWorkflowTemplateUseRequest**|  |

### Return type

**\Crossly\Model\Workflow\CreateWorkflowResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowTest()`

```php
createWorkflowTest($id, $create_workflow_test_request): \Crossly\Model\Workflow\CreateWorkflowTestResponse
```

Test a workflow (the saved graph, or a draft graph you pass). mode=test runs it for real, using pinned data where a node has it; mode=dry is a safe test: write, destructive and money nodes report what they would do and change nothing. Trigger items: the ones you pass, else pinned, else the last real ones, else the trigger sample.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Workflow id.
$create_workflow_test_request = new \Crossly\Model\Workflow\CreateWorkflowTestRequest(); // \Crossly\Model\Workflow\CreateWorkflowTestRequest

try {
    $result = $apiInstance->createWorkflowTest($id, $create_workflow_test_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Workflow id. |
 **create_workflow_test_request** | **\Crossly\Model\Workflow\CreateWorkflowTestRequest**|  |

### Return type

**\Crossly\Model\Workflow\CreateWorkflowTestResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowValidate()`

```php
createWorkflowValidate($create_workflow_validate_request): \Crossly\Model\Workflow\CreateWorkflowValidateResponse
```

Validate a graph without saving it: unknown node types, missing required params, bad ports, cycles, expression errors. blocking=true means activation would be refused.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_workflow_validate_request = new \Crossly\Model\Workflow\CreateWorkflowValidateRequest(); // \Crossly\Model\Workflow\CreateWorkflowValidateRequest

try {
    $result = $apiInstance->createWorkflowValidate($create_workflow_validate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowValidate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_workflow_validate_request** | **\Crossly\Model\Workflow\CreateWorkflowValidateRequest**|  |

### Return type

**\Crossly\Model\Workflow\CreateWorkflowValidateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowVersionRestore()`

```php
createWorkflowVersionRestore($id, $v): \Crossly\Model\Common\WorkflowResponse
```

Restore an earlier version's graph as a new version. Pass version (the current one you read) to refuse the restore when someone saved meanwhile (409). Body optional: { version?: integer }.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Workflow id.
$v = 56; // int | The version number to restore.

try {
    $result = $apiInstance->createWorkflowVersionRestore($id, $v);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowVersionRestore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Workflow id. |
 **v** | **int**| The version number to restore. |

### Return type

**\Crossly\Model\Common\WorkflowResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkflowWebhookRotate()`

```php
createWorkflowWebhookRotate($id, $node_id, $create_workflow_webhook_rotate_request): \Crossly\Model\Workflow\CreateWorkflowWebhookRotateResponse
```

Issue a new inbound URL for an on.webhook trigger node (the old one stops working). The URL, and the signing secret when withSecret=true, are returned ONCE: store them now.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Workflow id.
$node_id = 'node_id_example'; // string | The on.webhook trigger node id.
$create_workflow_webhook_rotate_request = new \Crossly\Model\Workflow\CreateWorkflowWebhookRotateRequest(); // \Crossly\Model\Workflow\CreateWorkflowWebhookRotateRequest

try {
    $result = $apiInstance->createWorkflowWebhookRotate($id, $node_id, $create_workflow_webhook_rotate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflowWebhookRotate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Workflow id. |
 **node_id** | **string**| The on.webhook trigger node id. |
 **create_workflow_webhook_rotate_request** | **\Crossly\Model\Workflow\CreateWorkflowWebhookRotateRequest**|  |

### Return type

**\Crossly\Model\Workflow\CreateWorkflowWebhookRotateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorkflow()`

```php
deleteWorkflow($id): \Crossly\Model\Workflow\DeleteWorkflowResponse
```

Delete (archive) a workflow: its triggers stop, open runs are cancelled, run history stays readable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Workflow id.

try {
    $result = $apiInstance->deleteWorkflow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->deleteWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Workflow id. |

### Return type

**\Crossly\Model\Workflow\DeleteWorkflowResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorkflowChain()`

```php
deleteWorkflowChain($id): \Crossly\Model\Common\OkResponse
```

Delete a workflow chain (cascades steps + runs).

Deprecated: workflow chains are workflows now. Use /v1/workflows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteWorkflowChain($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->deleteWorkflowChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\OkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorkflow()`

```php
getWorkflow($id): \Crossly\Model\Workflow\GetWorkflowResponse
```

Get one workflow with its full graph and current version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Workflow id.

try {
    $result = $apiInstance->getWorkflow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->getWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Workflow id. |

### Return type

**\Crossly\Model\Workflow\GetWorkflowResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorkflowCatalog()`

```php
getWorkflowCatalog(): \Crossly\Model\Workflow\GetWorkflowCatalogResponse
```

Everything needed to build a workflow: every node type (params, ports, output fields, risk, platforms capability), which platforms each capability covers and which of those you have connected, the expression helpers and bindings ({{ $json.listingId }}…) and the condition operators. Read this before composing a graph rather than guessing node types or param keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorkflowCatalog();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->getWorkflowCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Workflow\GetWorkflowCatalogResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorkflowChain()`

```php
getWorkflowChain($id): \Crossly\Model\Workflow\GetWorkflowChainResponse
```

Get one workflow chain with its steps.

Deprecated: workflow chains are workflows now. Use /v1/workflows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWorkflowChain($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->getWorkflowChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Workflow\GetWorkflowChainResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorkflowExport()`

```php
getWorkflowExport($id, $pinned_data): \Crossly\Model\Workflow\GetWorkflowExportResponse
```

Export a workflow as a portable document (format crossly.workflow) that POST /v1/workflows/import accepts. Credentials and account handles are stripped; pinned test data only with pinnedData=true.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Workflow id.
$pinned_data = 'pinned_data_example'; // string | Keep the nodes' pinned test data.

try {
    $result = $apiInstance->getWorkflowExport($id, $pinned_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->getWorkflowExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Workflow id. |
 **pinned_data** | **string**| Keep the nodes&#39; pinned test data. | [optional]

### Return type

**\Crossly\Model\Workflow\GetWorkflowExportResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorkflowRun()`

```php
getWorkflowRun($run_id): \Crossly\Model\Workflow\GetWorkflowRunResponse
```

One run: its summary, the graph version it ran, and every node execution (status, item counts per port, timing, errors). Item data per node: GET …/nodes/{nodeId}.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 'run_id_example'; // string | Workflow run id.

try {
    $result = $apiInstance->getWorkflowRun($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->getWorkflowRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **run_id** | **string**| Workflow run id. |

### Return type

**\Crossly\Model\Workflow\GetWorkflowRunResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorkflowRunNode()`

```php
getWorkflowRunNode($run_id, $node_id): \Crossly\Model\Workflow\GetWorkflowRunNodeResponse
```

Every execution of one node in a run with its input and output items (each port keeps the first 50 items, 16 KB per item; truncated=true when cut). Data older than the retention window, or not kept by settings.saveSuccessData=false, is pruned: that execution has input/output null and pruned=true, and when every execution is pruned the response is { data: null, meta: { pruned: true } } (never an empty list).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 'run_id_example'; // string | Workflow run id.
$node_id = 'node_id_example'; // string | Node id within the run's graph.

try {
    $result = $apiInstance->getWorkflowRunNode($run_id, $node_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->getWorkflowRunNode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **run_id** | **string**| Workflow run id. |
 **node_id** | **string**| Node id within the run&#39;s graph. |

### Return type

**\Crossly\Model\Workflow\GetWorkflowRunNodeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorkflowApprovals()`

```php
listWorkflowApprovals($status, $workflow_id, $page, $limit): \Crossly\Model\Workflow\ListWorkflowApprovalsResponse
```

Approval requests from flow.approval nodes, newest first (pending only unless status says otherwise). Decide one with POST /v1/workflow-approvals/{id}/decide.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string | Comma-separated: pending, approved, rejected, expired. Default pending.
$workflow_id = 'workflow_id_example'; // string | Only approvals of this workflow.
$page = 1; // int | 1-indexed page.
$limit = 25; // int | Rows per page (1-100).

try {
    $result = $apiInstance->listWorkflowApprovals($status, $workflow_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->listWorkflowApprovals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Comma-separated: pending, approved, rejected, expired. Default pending. | [optional]
 **workflow_id** | **string**| Only approvals of this workflow. | [optional]
 **page** | **int**| 1-indexed page. | [optional] [default to 1]
 **limit** | **int**| Rows per page (1-100). | [optional] [default to 25]

### Return type

**\Crossly\Model\Workflow\ListWorkflowApprovalsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorkflowChains()`

```php
listWorkflowChains(): \Crossly\Model\Workflow\ListWorkflowChainsResponse
```

List workflow chains with their step graph.

Deprecated: workflow chains are workflows now. Use /v1/workflows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorkflowChains();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->listWorkflowChains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Workflow\ListWorkflowChainsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorkflowRuns()`

```php
listWorkflowRuns($id, $status, $mode, $since, $until, $page, $limit): \Crossly\Model\Workflow\ListWorkflowRunsResponse
```

Run history of one workflow, newest first, with per-node status and item counts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Workflow id.
$status = 'status_example'; // string | Comma-separated run statuses: queued, running, waiting, succeeded, failed, cancelled.
$mode = 'mode_example'; // string | live (triggers), test (editor test run) or dry (safe test: no writes).
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Runs queued at or after this time (ISO 8601).
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Runs queued at or before this time (ISO 8601).
$page = 1; // int | 1-indexed page.
$limit = 25; // int | Rows per page (1-100).

try {
    $result = $apiInstance->listWorkflowRuns($id, $status, $mode, $since, $until, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->listWorkflowRuns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Workflow id. |
 **status** | **string**| Comma-separated run statuses: queued, running, waiting, succeeded, failed, cancelled. | [optional]
 **mode** | **string**| live (triggers), test (editor test run) or dry (safe test: no writes). | [optional]
 **since** | **\DateTime**| Runs queued at or after this time (ISO 8601). | [optional]
 **until** | **\DateTime**| Runs queued at or before this time (ISO 8601). | [optional]
 **page** | **int**| 1-indexed page. | [optional] [default to 1]
 **limit** | **int**| Rows per page (1-100). | [optional] [default to 25]

### Return type

**\Crossly\Model\Workflow\ListWorkflowRunsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorkflowRuns2()`

```php
listWorkflowRuns2($workflow_id, $status, $mode, $since, $until, $page, $limit): \Crossly\Model\Workflow\ListWorkflowRunsResponse
```

Runs of every workflow, newest first. Filter by workflow, status, mode and time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 'workflow_id_example'; // string | Only runs of this workflow.
$status = 'status_example'; // string | Comma-separated run statuses: queued, running, waiting, succeeded, failed, cancelled.
$mode = 'mode_example'; // string | live (triggers), test (editor test run) or dry (safe test: no writes).
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Runs queued at or after this time (ISO 8601).
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Runs queued at or before this time (ISO 8601).
$page = 1; // int | 1-indexed page.
$limit = 25; // int | Rows per page (1-100).

try {
    $result = $apiInstance->listWorkflowRuns2($workflow_id, $status, $mode, $since, $until, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->listWorkflowRuns2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workflow_id** | **string**| Only runs of this workflow. | [optional]
 **status** | **string**| Comma-separated run statuses: queued, running, waiting, succeeded, failed, cancelled. | [optional]
 **mode** | **string**| live (triggers), test (editor test run) or dry (safe test: no writes). | [optional]
 **since** | **\DateTime**| Runs queued at or after this time (ISO 8601). | [optional]
 **until** | **\DateTime**| Runs queued at or before this time (ISO 8601). | [optional]
 **page** | **int**| 1-indexed page. | [optional] [default to 1]
 **limit** | **int**| Rows per page (1-100). | [optional] [default to 25]

### Return type

**\Crossly\Model\Workflow\ListWorkflowRunsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorkflowSaleActive()`

```php
listWorkflowSaleActive(): \Crossly\Model\Workflow\ListWorkflowSaleActiveResponse
```

Every live or upcoming sale (a sales event started by a sale.start node) with the workflow that runs it: percent off, window, and how many listings it applies to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorkflowSaleActive();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->listWorkflowSaleActive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Workflow\ListWorkflowSaleActiveResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorkflowTemplates()`

```php
listWorkflowTemplates($category, $q): \Crossly\Model\Workflow\ListWorkflowTemplatesResponse
```

Ready-made workflows (weekend sale, stale-listing markdowns, offer responder, ship-by alerts…), each a complete graph plus the setup fields its \"use\" call asks for.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = 'category_example'; // string | Exact template category, e.g. \"Sales & markdowns\".
$q = 'q_example'; // string | Matches name, description, category or tags.

try {
    $result = $apiInstance->listWorkflowTemplates($category, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->listWorkflowTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**| Exact template category, e.g. \&quot;Sales &amp; markdowns\&quot;. | [optional]
 **q** | **string**| Matches name, description, category or tags. | [optional]

### Return type

**\Crossly\Model\Workflow\ListWorkflowTemplatesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorkflowVersions()`

```php
listWorkflowVersions($id): \Crossly\Model\Workflow\ListWorkflowVersionsResponse
```

The saved versions of a workflow, newest first (restore one with POST …/versions/{v}/restore).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Workflow id.

try {
    $result = $apiInstance->listWorkflowVersions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->listWorkflowVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Workflow id. |

### Return type

**\Crossly\Model\Workflow\ListWorkflowVersionsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorkflows()`

```php
listWorkflows($active, $tag, $trigger, $q, $legacy_ref): \Crossly\Model\Workflow\ListWorkflowsResponse
```

List workflows, newest change first. A workflow is a graph of nodes: one or more triggers, then actions, lookups and flow nodes (if, switch, wait, approval…). Each row carries its trigger and node types and a 7-day run sparkline, not the graph (GET /v1/workflows/{id} has it).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$active = 'active_example'; // string | Only active (true) or paused (false) workflows.
$tag = 'tag_example'; // string | Only workflows carrying this tag.
$trigger = 'trigger_example'; // string | Only workflows started by this trigger node type, e.g. on.listing.sold.
$q = 'q_example'; // string | Name contains (case-insensitive).
$legacy_ref = 'legacy_ref_example'; // string | The workflow an old automation became: rule:<id>, chain:<id> or sale_event:<id>.

try {
    $result = $apiInstance->listWorkflows($active, $tag, $trigger, $q, $legacy_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->listWorkflows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **active** | **string**| Only active (true) or paused (false) workflows. | [optional]
 **tag** | **string**| Only workflows carrying this tag. | [optional]
 **trigger** | **string**| Only workflows started by this trigger node type, e.g. on.listing.sold. | [optional]
 **q** | **string**| Name contains (case-insensitive). | [optional]
 **legacy_ref** | **string**| The workflow an old automation became: rule:&lt;id&gt;, chain:&lt;id&gt; or sale_event:&lt;id&gt;. | [optional]

### Return type

**\Crossly\Model\Workflow\ListWorkflowsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorkflow()`

```php
updateWorkflow($id, $update_workflow_request): \Crossly\Model\Common\WorkflowResponse
```

Save a workflow. Pass the version you edited: a save over a newer version is 409 version_conflict (re-read and merge). Saving an active workflow validates it like activation does (422 with issues).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Workflow id.
$update_workflow_request = new \Crossly\Model\Workflow\UpdateWorkflowRequest(); // \Crossly\Model\Workflow\UpdateWorkflowRequest

try {
    $result = $apiInstance->updateWorkflow($id, $update_workflow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->updateWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Workflow id. |
 **update_workflow_request** | **\Crossly\Model\Workflow\UpdateWorkflowRequest**|  |

### Return type

**\Crossly\Model\Common\WorkflowResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorkflowChain()`

```php
updateWorkflowChain($id): \Crossly\Model\Common\OkResponse
```

Replace a workflow chain wholesale.

Deprecated: workflow chains are workflows now. Use /v1/workflows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateWorkflowChain($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->updateWorkflowChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\OkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
