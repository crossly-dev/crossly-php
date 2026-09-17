# # ListSourcingDemandMineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identifier_value** | **string** |  |
**lookers** | **float** | How many distinct shoppers looked, in the window. |
**misses** | **float** | How many of those looks Crossly could not answer at all. |
**median_retail_cents** | **float** | What the retailers were charging, median of what Scout saw. | [optional]
**relation** | **string** | &#39;in_stock&#39; — it is in their inventory. &#39;sold_before&#39; — they have sold one. |
**inventory_item_id** | **string** | Their own row, for the link. | [optional]
**title** | **string** |  | [optional]
**last_sold_cents** | **float** | What they got for it last time, when they have sold one. | [optional]
**last_sold_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
