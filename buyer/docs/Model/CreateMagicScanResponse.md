# # CreateMagicScanResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**run_id** | **string** |  |
**ebay_match** | [**\Crossly\Buyer\Model\CreateMagicScanResponseEbayMatch**](CreateMagicScanResponseEbayMatch.md) |  | [optional]
**top_hits** | [**\Crossly\Buyer\Model\CreateMagicScanResponseTopHits[]**](CreateMagicScanResponseTopHits.md) | Unified top-10-globally list, ranked by CLIP visual similarity to  the seller&#39;s source photo. Each hit carries its origin platform. |
**ebay_hits** | [**\Crossly\Buyer\Model\CreateMagicScanResponseEbayHits[]**](CreateMagicScanResponseEbayHits.md) | Legacy compat — UI&#39;s existing render. ebayHits now &#x3D;&#x3D; visually-  validated eBay subset; otherMatches is re-grouped from topHits. |
**other_matches** | **object** |  |
**image_urls** | **string[]** | Every photo the seller uploaded for this scan, primary first. |
**vision_aspects** | **object** | Vision-LLM aspects extracted across all photos. Populated only  when the seller has magic-list-vision-aspects enabled + a vision  provider configured. Empty otherwise. |
**possible_duplicates** | [**\Crossly\Buyer\Model\CreateMagicScanResponsePossibleDuplicates[]**](CreateMagicScanResponsePossibleDuplicates.md) | The seller&#39;s OWN listings/inventory that this scan probably duplicates  (image + fuzzy-title self-dedup). Empty when nothing matched. Drives the  \&quot;you may already have this\&quot; prompt. |
**cached** | **bool** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
