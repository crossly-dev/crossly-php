# # GetConnectionHealthResponseExtension

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**online** | **bool** | Heartbeat within the last 15 minutes. False is NOT proof of breakage — a closed browser looks the same — so it is always paired with the durable timestamp below. |
**last_browser_push_at** | **string** | Newest browser push across every account. The durable answer to \&quot;when did the extension last do anything\&quot;, surviving a Redis flush. | [optional]
**last_browser_push_ago** | **string** |  |
**reported_version** | **string** | Highest version any platform&#39;s browser report carried, or null when the extension has never told us (it does not send one today — see the service README notes in routes/extension-health.ts). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
