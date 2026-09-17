# # ListBuyerCatalogSearchItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**slug** | **string** |  |
**title** | **string** |  |
**price_cents** | **float** |  |
**compare_at_cents** | **float** | MSRP above the ask, or null. Never fabricated from a stale value. | [optional]
**currency** | **string** |  |
**condition** | **string** |  | [optional]
**brand** | **string** |  | [optional]
**category_main** | **string** |  | [optional]
**category_sub** | **string** |  | [optional]
**thumbnail** | **string** |  | [optional]
**images** | **string[]** |  |
**seller_username** | **string** |  | [optional]
**seller_display_name** | **string** |  | [optional]
**quantity_available** | **float** | Units a buyer can actually take right now. Reserved units are excluded. |
**listed_at** | **string** |  | [optional]
**url** | **string** | Canonical buyer-facing URL, so a client never has to build one. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
