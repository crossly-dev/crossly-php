# # ListActionLogItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**created_at** | **\DateTime** |  |
**user_id** | **string** |  | [optional]
**status** | **string** |  |
**source** | **string** |  |
**platform** | **string** |  | [optional]
**action** | **string** |  |
**latency_ms** | **float** |  | [optional]
**error_class** | **string** |  | [optional]
**error_message** | **string** |  | [optional]
**ip_address** | **string** |  | [optional]
**user_agent** | **string** |  | [optional]
**oauth_app_id** | **string** |  | [optional]
**category** | **string** |  |
**actor_user_id** | **string** |  | [optional]
**finished_at** | **\DateTime** |  | [optional]
**correlation_id** | **string** |  |
**track** | **string** |  | [optional]
**target_type** | **string** |  | [optional]
**target_id** | **string** |  | [optional]
**http_status** | **float** |  | [optional]
**actor_email** | **string** | Resolved from actorUserId so the UI can say \&quot;Jane relisted this\&quot; rather than printing a UUID. Null for worker/system actions, which genuinely had no human actor. | [optional]
**actor_display_name** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
