# # CreateBuyerLockonObserveResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lockon_id** | **string** |  |
**status** | **string** |  |
**identifier** | [**\Crossly\Model\CreateBuyerIdentifyResponseIdentifier**](CreateBuyerIdentifyResponseIdentifier.md) |  | [optional]
**candidates** | [**\Crossly\Model\CreateBuyerLockonObserveResponseCandidates[]**](CreateBuyerLockonObserveResponseCandidates.md) | Present when we could not settle it alone. Show them; a pinch on one is the cheapest, strongest disambiguation available. |
**observation_count** | **float** |  |
**vision_calls** | **float** |  |
**vision_quota_exhausted** | **bool** |  |
**verdict** | **string** |  |
**crossly** | [**\Crossly\Model\GetBuyerAnywhereResponseCrossly**](GetBuyerAnywhereResponseCrossly.md) |  | [optional]
**offsite** | [**\Crossly\Model\GetBuyerAnywhereResponseOffsite**](GetBuyerAnywhereResponseOffsite.md) |  | [optional]
**alternates** | [**\Crossly\Model\GetBuyerAnywhereResponseAlternates[]**](GetBuyerAnywhereResponseAlternates.md) |  |
**saving_cents** | **float** |  | [optional]
**shipping_unknown** | **bool** |  |
**hud** | [**\Crossly\Model\CreateBuyerIdentifyResponseHud**](CreateBuyerIdentifyResponseHud.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
