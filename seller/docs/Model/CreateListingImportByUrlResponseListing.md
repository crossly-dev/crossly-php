# # CreateListingImportByUrlResponseListing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_listing_id** | **string** |  |
**title** | **string** |  |
**description** | **string** |  | [optional]
**price** | **float** |  | [optional]
**images** | **string[]** |  | [optional]
**brand** | **string** |  | [optional]
**condition** | **string** |  | [optional]
**size** | **string** |  | [optional]
**color** | **string[]** | Color(s) the platform&#39;s own response exposes (e.g. Poshmark&#39;s  &#x60;colors&#x60; array). Only set when actually present in the scrape. | [optional]
**sku** | **string** |  | [optional]
**url** | **string** |  | [optional]
**category** | **string[]** | The platform&#39;s OWN category, as a top-down path (e.g. Poshmark&#39;s  [\&quot;Kids\&quot;, \&quot;Toys\&quot;, \&quot;Dolls &amp; Accessories\&quot;] from department → category →  feature). Only set when the platform&#39;s list/scrape response actually  carries this — never guessed. Mapped onto Crossly&#39;s category.main/  sub/sub2 (listings) or categoryMain/categorySub (inventory_items) at  create/enrich time. | [optional]
**category_id** | **string** | The platform&#39;s raw numeric category id, same space as  overrides.&lt;platform&gt;.categoryId — distinct from &#x60;category&#x60;&#39;s  human-readable path. Only set by platforms whose id space is directly  comparable to what we publish (currently eBay&#39;s drift-check second  call — see diff-fields/second-call.ts&#39;s ebayRemoteFields). eBay&#39;s own  CategoryName wording/depth is a different vocabulary from Crossly&#39;s  master taxonomy breadcrumb and will essentially never string-match  it, so drift-detection compares ids instead of names. | [optional]
**tags** | **string[]** | Tag-like strings the platform&#39;s own response exposes (e.g. Poshmark&#39;s  marketing \&quot;experience\&quot; tags). Distinct from a full search-tag  generator — just whatever real tag data the scrape already carries. | [optional]
**material** | **string** | Structured item aspects — the same shape the listing form&#39;s Item  Details section captures (and templates already persist), now sourced  from the platform&#39;s own data instead of only manual entry. Only set  when the platform&#39;s response genuinely carries a semantically-matching  field (eBay item specifics, Facebook attributes, Poshmark catalog,  Depop&#39;s detail-call ride-along) — never derived or guessed. | [optional]
**style** | **string** |  | [optional]
**pattern** | **string** |  | [optional]
**department** | **string** |  | [optional]
**gender** | **string** |  | [optional]
**item_type** | **string** |  | [optional]
**size_system** | **string** |  | [optional]
**item_specifics** | **object** | Category-specific facets from a per-item DETAIL call (e.g. Facebook&#39;s  Age Range/Character/Age Group), keyed the same way eBay item-specifics  are: aspect name -&gt; value array. Only set by platforms with a genuine  per-item attribute source — costs one extra call per listing, so  populated by a dedicated enrichment pass, not the main list mapper.  Maps onto listings.itemSpecifics; inventory_items has no equivalent  column. | [optional]
**listed_at** | **\DateTime** | When the listing was first published on the platform. Used by  the Advanced filter&#39;s listedAfter / listedBefore knobs. Optional  because not every platform returns it on the listing endpoint. | [optional]
**quantity** | **float** | Units this platform reports. Only meaningful for platforms  &#x60;PLATFORM_QUANTITY_SYNC&#x60; marks &#39;native&#39; — relist platforms show one item  and say 1 forever, so they leave this undefined rather than voting with  a number they cannot actually express. See &#x60;_quantity.ts&#x60;. | [optional]
**account_slot** | **float** | Which of the user&#39;s connected accounts on this platform this listing  was scraped from — stamped by fetchCookieListings as it loops each  connected account (see listActiveForPlatform in  user-platform-accounts/read.ts). Undefined for API-track platforms  (single connection, no multi-account concept) and for any cookie path  that hasn&#39;t been threaded yet; importOne treats undefined as slot 1,  matching the historical single-account default. | [optional]
**weight_oz** | **float** | Total item weight in ounces (already summed, not split lb+oz —  the write path converts to the DB&#39;s weightLb+weightOz split). | [optional]
**dimension_lin** | **float** |  | [optional]
**dimension_win** | **float** |  | [optional]
**dimension_hin** | **float** |  | [optional]
**handling_time_days** | **float** | Max days the platform&#39;s own listing commits to ship within (eBay&#39;s  DispatchTimeMax, Etsy&#39;s processing_max). | [optional]
**best_offer_auto_accept_cents** | **float** |  | [optional]
**best_offer_auto_decline_cents** | **float** |  | [optional]
**item_location** | **string** | Free text as the platform itself expresses it (e.g. eBay&#39;s &#x60;Location&#x60;  is a single seller-typed string like \&quot;Austin, TX\&quot;, not a structured  address) — never parsed into city/state. | [optional]
**item_location_zip** | **string** |  | [optional]
**item_location_country** | **string** |  | [optional]
**declared_shipping_cost** | **float** | What the platform&#39;s OWN listing declares shipping costs — reference  only, distinct from a realized post-sale shipping cost. | [optional]
**return_policy_text** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
