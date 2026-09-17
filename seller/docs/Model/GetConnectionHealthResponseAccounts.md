# # GetConnectionHealthResponseAccounts

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_name** | **string** |  |
**account_id** | **string** |  | [optional]
**account_slot** | **float** |  | [optional]
**label** | **string** |  | [optional]
**platform_username** | **string** |  | [optional]
**summary** | **string** | Plain-English \&quot;what is true\&quot; + \&quot;what to do\&quot;. Never empty. |
**action** | **string** |  |
**liveness** | [**\Crossly\Model\GetConnectionHealthResponseLiveness**](GetConnectionHealthResponseLiveness.md) |  |
**browser** | [**\Crossly\Model\GetConnectionHealthResponseBrowser**](GetConnectionHealthResponseBrowser.md) |  | [optional]
**platform** | **string** |  |
**state** | **string** |  |
**severity** | **string** |  |
**audience** | **string** |  |
**anchors** | [**\Crossly\Model\GetConnectionHealthResponseAnchors**](GetConnectionHealthResponseAnchors.md) |  | [optional]
**notes** | **string[]** | Secondary observations that do not change the verdict but change the debugging. Always safe to show; never the only thing shown. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
