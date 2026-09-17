# # CreateListingByIdResponseItems

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**effective_title** | **string** |  |
**effective_price** | **string** |  | [optional]
**effective_description** | **string** |  | [optional]
**effective_images** | **string[]** |  |
**effective_brand** | **string** |  | [optional]
**effective_condition** | **string** |  | [optional]
**effective_size** | **string** |  | [optional]
**effective_sku** | **string** |  | [optional]
**effective_color** | **string[]** |  |
**effective_tags** | **string[]** |  |
**platform_listings** | **object[]** |  |
**inventory_item_id** | **string** |  | [optional]
**id** | **string** |  |
**user_id** | **string** |  |
**name** | **string** |  | [optional]
**title** | **string** |  | [optional]
**description** | **string** |  | [optional]
**description_html** | **string** |  | [optional]
**price** | **string** |  | [optional]
**images** | **string[]** |  | [optional]
**video_url** | **string** | Optional single product video (R2/CDN URL). Shown on the Crossly buyer page. | [optional]
**status** | **string** |  |
**condition** | **string** |  | [optional]
**grade_key** | **string** | Third-party grading, when the item is slabbed. Migration 0277.    Separate from &#x60;condition&#x60; on purpose and never derived from it: a grade  is a claim about what a GRADING COMPANY certified, and inferring \&quot;PSA 10\&quot;  from a coarse condition would be a false authenticity claim. It is also  never filled from our own AI estimate (&#x60;bulk_market_items.grade&#x60;), which  carries an explicit \&quot;not a professional grade\&quot; disclaimer.    &#x60;gradeKey&#x60; is the canonical form from &#x60;gradeKey()&#x60; in  shared/constants/graders.ts; &#x60;grading&#x60; holds the full GradingInfo  including the cert number and whether a cert lookup verified it. | [optional]
**grading** | [**\Crossly\Buyer\Model\ListListingsItemGrading**](ListListingsItemGrading.md) |  | [optional]
**brand** | **string** |  | [optional]
**size** | **string** |  | [optional]
**material** | **string** | Migration 0179 — see the matching fields on inventory_items above. | [optional]
**style** | **string** |  | [optional]
**pattern** | **string** |  | [optional]
**department** | **string** |  | [optional]
**gender** | **string** |  | [optional]
**item_type** | **string** |  | [optional]
**size_system** | **string** |  | [optional]
**color** | **string[]** |  |
**tags** | **string[]** |  |
**sku** | **string** |  | [optional]
**quantity** | **float** |  |
**quantity_available** | **float** |  |
**weight_lb** | **string** |  | [optional]
**weight_oz** | **string** |  | [optional]
**dimension_lin** | **string** |  | [optional]
**dimension_win** | **string** |  | [optional]
**dimension_hin** | **string** |  | [optional]
**publish_at** | **\DateTime** | Scheduled go-live time. When set on a draft, the listing-scheduler  worker waits until this passes then dispatches the crosspost to  scheduledPlatforms and flips status from &#39;draft&#39; to &#39;active&#39;. | [optional]
**scheduled_platforms** | **string[]** | Which platforms to publish to when publishAt fires. JSON array of  platform ids. Null/empty &#x3D; scheduler skips (listing won&#39;t auto-  publish, even after publishAt — gives the seller an escape hatch). | [optional]
**parent_listing_id** | **string** | Parent listing when this row is a CHILD in a listing chain. Null &#x3D;  standalone. What being a child means depends on the parent&#39;s  &#x60;groupKind&#x60; — see it. | [optional]
**is_bundle** | **bool** |  |
**automation_assigned_rule_ids** | **string[]** | Per-listing automation overrides. See migration 0098.     automationAssignedRuleIds  — force-include for these rules   automationBlockedRuleIds   — exempt from these rules   automationAssignedChainIds — force-include for these workflow chains   automationBlockedChainIds  — exempt from these workflow chains |
**automation_blocked_rule_ids** | **string[]** |  |
**automation_assigned_chain_ids** | **string[]** |  |
**automation_blocked_chain_ids** | **string[]** |  |
**hs_code** | **string** | Harmonised System customs code — international shipping declarations. | [optional]
**country_of_origin** | **string** | Customs country of origin. Distinct from the seller&#39;s location. | [optional]
**price_floor_cents** | **float** | Never let a repricing rule go below this. On the ITEM because it is a  fact about the thing owned, not about any one rule — \&quot;this jacket never  goes below $45\&quot; should apply to every rule, and before this it was  expressible only as one rule per jacket. Listings inherit when null. | [optional]
**floor_is_net** | **bool** | When true the floor is a TAKE-HOME target, converted to a per-platform  gross at reprice time. A gross floor is four different promises across  four platforms; this is the one number a seller actually cares about. |
**delisted_at** | **\DateTime** |  | [optional]
**sold_at** | **\DateTime** |  | [optional]
**source** | **string** | Mirrors inventory_items.source. &#39;manual&#39; for every seller-created  listing; external-stub.ts sets &#39;external_sale&#39; on the synthetic  listing it fabricates for a sale detected on a platform id Crossly  never listed — those rows have no real photos/description of their  own (everything is lifted from the platform&#39;s sale payload) and are  otherwise indistinguishable from a real listing in the UI. |
**duplicate_of_listing_id** | **string** | Set when import&#39;s bin-packing (see _import-one.ts) created THIS  listing to hold a same-platform straggler it couldn&#39;t fit onto an  existing candidate listing for the same physical item — points at  the primary/first candidate. Purely informational: this listing  is a real, independently listable/delistable row, not a shadow.  Null for every ordinarily-created listing. | [optional]
**client_draft_id** | **string** | UUID minted on a seller&#39;s machine for a draft written offline.    The idempotency key for desktop sync. The failure it guards is a POST  that succeeds server-side whose reply is lost — the client cannot tell  that from a failure, retries, and one item becomes two live listings  against one piece of stock. Unique per user (partial index, migration  0268); null for every listing that did not come from an offline draft. | [optional]
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
