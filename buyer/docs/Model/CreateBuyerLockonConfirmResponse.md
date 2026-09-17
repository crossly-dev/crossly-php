# # CreateBuyerLockonConfirmResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lockon_id** | **string** |  |
**status** | **string** |  |
**identifier** | [**\Crossly\Buyer\Model\CreateBuyerIdentifyResponseIdentifier**](CreateBuyerIdentifyResponseIdentifier.md) |  | [optional]
**candidates** | [**\Crossly\Buyer\Model\CreateBuyerLockonObserveResponseCandidates[]**](CreateBuyerLockonObserveResponseCandidates.md) | Present when we could not settle it alone. Show them; a pinch on one is the cheapest, strongest disambiguation available. |
**observation_count** | **float** |  |
**vision_calls** | **float** |  |
**vision_quota_exhausted** | **bool** |  |
**verdict** | **string** |  |
**crossly** | [**\Crossly\Buyer\Model\GetBuyerAnywhereResponseCrossly**](GetBuyerAnywhereResponseCrossly.md) |  | [optional]
**offsite** | [**\Crossly\Buyer\Model\GetBuyerAnywhereResponseOffsite**](GetBuyerAnywhereResponseOffsite.md) |  | [optional]
**alternates** | [**\Crossly\Buyer\Model\GetBuyerAnywhereResponseAlternates[]**](GetBuyerAnywhereResponseAlternates.md) |  |
**saving_cents** | **float** |  | [optional]
**shipping_unknown** | **bool** |  |
**hud** | [**\Crossly\Buyer\Model\CreateBuyerIdentifyResponseHud**](CreateBuyerIdentifyResponseHud.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
