# # CreateBuyerIdentifyResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tier** | **string** |  |
**confidence** | **float** |  |
**identifier** | [**\Crossly\Model\CreateBuyerIdentifyResponseIdentifier**](CreateBuyerIdentifyResponseIdentifier.md) |  | [optional]
**vision_label** | **string** |  | [optional]
**vision_quota_exhausted** | **bool** | Surfaced rather than hidden: \&quot;we could not look harder\&quot; and \&quot;we looked and found nothing\&quot; are different answers, and a client that cannot tell them apart shows the wrong message on both. |
**visual_matches** | [**\Crossly\Model\CreateBuyerIdentifyResponseVisualMatches[]**](CreateBuyerIdentifyResponseVisualMatches.md) |  |
**verdict** | **string** |  |
**crossly** | [**\Crossly\Model\GetBuyerAnywhereResponseCrossly**](GetBuyerAnywhereResponseCrossly.md) |  | [optional]
**offsite** | [**\Crossly\Model\GetBuyerAnywhereResponseOffsite**](GetBuyerAnywhereResponseOffsite.md) |  | [optional]
**alternates** | [**\Crossly\Model\GetBuyerAnywhereResponseAlternates[]**](GetBuyerAnywhereResponseAlternates.md) |  |
**saving_cents** | **float** |  | [optional]
**shipping_unknown** | **bool** |  |
**hud** | [**\Crossly\Model\CreateBuyerIdentifyResponseHud**](CreateBuyerIdentifyResponseHud.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
