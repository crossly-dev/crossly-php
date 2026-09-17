# # CreateMagicScanResponseEbayHits

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **string** |  |
**legacy_item_id** | **string** |  | [optional]
**title** | **string** |  |
**brand** | **string** |  | [optional]
**price_cents** | **float** | Normalized cents. eBay returns string + currency on &#x60;price.value&#x60;. | [optional]
**currency** | **string** |  | [optional]
**condition** | **string** |  | [optional]
**category_id** | **string** | Top-level category eBay assigned to the match (id + path). | [optional]
**category_path** | **string** |  | [optional]
**item_url** | **string** |  |
**thumbnail_url** | **string** |  | [optional]
**aspects** | **object** | Loosely-typed aspect bag — Brand, Color, Material, etc. when eBay inlines them. Always inspected defensively by the synthesizer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
