# # GetSpatialSceneResponseItems

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**unit_id** | **string** |  | [optional]
**title** | **string** |  |
**image_url** | **string** |  | [optional]
**thumb_url** | **string** | A small copy of &#x60;imageUrl&#x60;, when the catalog has one.    The room binds this for everything except the few items you are standing  in front of. A 600x600 original costs 1.83 MiB of VRAM; a 150x150 thumb  costs 0.11 MiB, and at more than a couple of metres they are the same  handful of pixels on screen. Null when the catalog never made one, which  the renderer treats as \&quot;use the original\&quot; rather than as \&quot;draw nothing\&quot;. | [optional]
**size** | [**\Crossly\Model\GetSpatialSceneResponseSize**](GetSpatialSceneResponseSize.md) |  | [optional]
**cost_cents** | **float** | Cents the seller paid. Drives the &#x60;value&#x60; overlay and capital density. | [optional]
**age_days** | **float** | Days since first listed anywhere. Drives the &#x60;aging&#x60; overlay. | [optional]
**status** | **string** |  |
**location** | **string** | Free-text or structured location, when the unit has one. | [optional]
**market_tagged** | **bool** | True when this row resolved to a catalog product. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
