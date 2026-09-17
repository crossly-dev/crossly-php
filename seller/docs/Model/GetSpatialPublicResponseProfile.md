# # GetSpatialPublicResponseProfile

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_slug** | **string** | Matches &#x60;crossly_market_categories.slug&#x60;, or &#39;*&#39; for the fallback. |
**label** | **string** | Room title, shown in the switcher. |
**tagline** | **string** | One line of why this space is shaped the way it is. Surfaced in the UI. |
**presentation** | **string** |  |
**item_model_variants** | **string[]** | Other meshes items in this category may be drawn as, chosen PER ITEM.    One model per category is right for a card room, where every object is the  same object. It is wrong for a wardrobe: a rail holds tees and jeans and  jackets, and drawing all of them as a tee would be a worse lie than the  flat quad it replaced, because a wrong SHAPE reads as information.    The renderer picks from &#x60;[itemModel, ...itemModelVariants]&#x60; using the  item&#39;s title — the same heuristic &#x60;silhouetteFor&#x60; already uses to choose a  garment outline, and for the same reason: the title is the only signal  present on every item, and a wrong guess costs a slightly odd shape rather  than the wrong item. &#x60;itemModel&#x60; is the fallback when nothing matches.    Deliberately NOT fuzzy-matched against a catalog — this picks a SHAPE, not  an identity. See docs/IDENTIFIER-FIRST.md for where that line sits. | [optional]
**item_size** | [**\Crossly\Model\GetSpatialPublicResponseProfileItemSize**](GetSpatialPublicResponseProfileItemSize.md) |  |
**containers** | [**\Crossly\Model\GetSpatialPublicResponseProfileContainers[]**](GetSpatialPublicResponseProfileContainers.md) | The container ladder, OUTERMOST FIRST. A binder holds pages, a page holds  cards. The solver walks this to decide what to create next when the  current container fills up. |
**default_group_by** | **string[]** | Default grouping, in order. Each level becomes a divider or a container. |
**default_sort_by** | **string[]** | Default ordering inside a group. |
**graded_variant** | **string** | A SEPARATE profile for graded/sealed copies of the same category.    This is not a flourish. Nobody puts a slabbed card in a binder — it does  not fit and it would be vandalism. Graded cards go on a wall, raw cards go  in pockets, and a space that ignores that is immediately wrong to the only  people who would use it. Same for CGC comics. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
