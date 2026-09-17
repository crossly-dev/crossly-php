# # CreateBuyerCartQuoteResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | **string** |  |
**tax_cents** | **float** |  |
**shipping_cents** | **float** |  |
**total_cents** | **float** |  |
**currency** | **string** |  |
**items_total_cents** | **float** |  |
**pickup_cart_item_ids** | **string[]** | Lines being collected in person, so a summary can name what ships free. |
**tax_complete** | **bool** | False means there is no saved delivery address, so &#x60;taxCents&#x60; is a floor rather than a final figure — not that tax is zero. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
