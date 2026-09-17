# # CreateBuyerIdentifyResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tier** | **string** |  |
**confidence** | **float** |  |
**identifier** | [**\Crossly\Buyer\Model\CreateBuyerIdentifyResponseIdentifier**](CreateBuyerIdentifyResponseIdentifier.md) |  | [optional]
**vision_label** | **string** |  | [optional]
**vision_quota_exhausted** | **bool** | Surfaced rather than hidden: \&quot;we could not look harder\&quot; and \&quot;we looked and found nothing\&quot; are different answers, and a client that cannot tell them apart shows the wrong message on both. |
**visual_matches** | [**\Crossly\Buyer\Model\CreateBuyerIdentifyResponseVisualMatches[]**](CreateBuyerIdentifyResponseVisualMatches.md) |  |
**verdict** | **string** |  |
**crossly** | [**\Crossly\Buyer\Model\GetBuyerAnywhereResponseCrossly**](GetBuyerAnywhereResponseCrossly.md) |  | [optional]
**offsite** | [**\Crossly\Buyer\Model\GetBuyerAnywhereResponseOffsite**](GetBuyerAnywhereResponseOffsite.md) |  | [optional]
**alternates** | [**\Crossly\Buyer\Model\GetBuyerAnywhereResponseAlternates[]**](GetBuyerAnywhereResponseAlternates.md) |  |
**saving_cents** | **float** |  | [optional]
**shipping_unknown** | **bool** |  |
**hud** | [**\Crossly\Buyer\Model\CreateBuyerIdentifyResponseHud**](CreateBuyerIdentifyResponseHud.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
