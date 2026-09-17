# # CreateBuyerActivityResponseMatchOffer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | **string** |  |
**price_cents** | **float** |  |
**condition** | **string** | Free-text on listings, an order-book grade (&#39;DS&#39;) on asks. Never null on asks; frequently null on listings, which is itself informative. | [optional]
**title** | **string** |  | [optional]
**image_url** | **string** |  | [optional]
**url** | **string** |  |
**slug** | **string** | The public slug, when this offer is a marketplace listing.  Present so Scout can buy it without parsing the URL it was given back. Null on an order-book ask, which is deliberate rather than an omission: an ask is a price in a book, not a thing with a checkout, and a Buy button on one would be a promise the market side cannot keep. | [optional]
**available** | **float** | How many the seller has. Caps the quantity stepper honestly. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
