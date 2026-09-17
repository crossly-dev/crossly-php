# # GetBuyerScanSessionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**device** | **string** |  |
**label** | **string** |  | [optional]
**started_at** | **string** |  |
**ended_at** | **string** |  | [optional]
**live** | **bool** |  |
**capture_count** | **float** |  |
**saved_cents** | **float** | Sum of measured savings. Unmeasured captures contribute 0, not null. |
**captures** | [**\Crossly\Model\GetBuyerScanSessionResponseCaptures[]**](GetBuyerScanSessionResponseCaptures.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
