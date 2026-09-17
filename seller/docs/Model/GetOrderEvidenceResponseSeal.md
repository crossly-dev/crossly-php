# # GetOrderEvidenceResponseSeal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assessment** | [**\Crossly\Model\GetOrderEvidenceResponseSealAssessment**](GetOrderEvidenceResponseSealAssessment.md) |  |
**dispatch_searched_frames** | **float** | How many packing frames were searched to find the dispatch frame shot closest to the arrival angle. Null when the dispatch reading was simply the frame the recorder ended on.  Surfaced rather than kept internal: \&quot;the best of eighteen frames matched\&quot; is a weaker claim than \&quot;the frame we took matched\&quot;, and a reviewer has to be able to tell them apart. See frame-match.ts. | [optional]
**has_dispatch** | **bool** |  |
**has_arrival** | **bool** |  |
**has_courier_photo** | **bool** | A courier photo exists, even if the seal was not legible in it. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
