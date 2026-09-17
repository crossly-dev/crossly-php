# # GetBuyerAnywhereResponseAlternates

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**store_id** | **string** |  |
**host** | **string** | The retailer&#39;s hostname, e.g. &#x60;rei.com&#x60;. |
**store_name** | **string** |  |
**title** | **string** |  |
**price_cents** | **float** |  |
**shipping_cents** | **float** | Null &#x3D; UNKNOWN, never free. | [optional]
**currency** | **string** |  |
**condition** | **string** |  | [optional]
**url** | **string** |  |
**image_url** | **string** |  | [optional]
**buyer_cashback_cents** | **float** | What the buyer gets back, in cents, if they buy through us.  Shown because a cashback figure the buyer cannot see is a figure they have no reason to believe. Derived from the store&#39;s rate, never stored per offer — rates change and a copied one goes stale silently. |
**delivered_cents** | **float** | Item + shipping when known; item alone otherwise. See &#x60;shippingUnknown&#x60;. |
**shipping_unknown** | **bool** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
