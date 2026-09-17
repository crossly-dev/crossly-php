# # UpdateMeTemplateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**user_id** | **string** |  |
**scope** | **string** |  |
**name** | **string** |  |
**notes** | **string** | Optional short blurb the seller can attach to remember what it&#39;s for. | [optional]
**description** | **string** | Primary description body. For scope&#x3D;&#39;description&#39; this is the  snippet body; for scope&#x3D;&#39;listing&#39; this is the default description  the seller wants pre-filled. | [optional]
**description_variants** | **string[]** | A/B variants for description. Populated for scope&#x3D;&#39;listing&#39;;  typically null for scope&#x3D;&#39;description&#39; (a snippet is one string). | [optional]
**title** | **string** |  | [optional]
**title_variants** | **string[]** |  | [optional]
**brand** | **string** |  | [optional]
**condition** | **string** | Master condition enum — new/like_new/good/fair/poor. | [optional]
**color** | **string** |  | [optional]
**material** | **string** |  | [optional]
**size** | **string** |  | [optional]
**size_system** | **string** |  | [optional]
**weight_oz** | **float** |  | [optional]
**department** | **string** |  | [optional]
**gender** | **string** |  | [optional]
**style** | **string** |  | [optional]
**pattern** | **string** |  | [optional]
**item_type** | **string** |  | [optional]
**tags** | **string[]** |  | [optional]
**default_for_category** | **string** | When set, form&#39;s category picker prompts \&quot;Use your default for  this category\&quot; on match. | [optional]
**is_default** | **bool** |  |
**share_token** | **string** | URL-safe random token. Populated by POST /me/templates/:id/share;  the /public/templates/:token route surfaces a read-only view any  visitor can browse + import. | [optional]
**sort_order** | **float** | Snippet ordering — kept for scope&#x3D;&#39;description&#39; back-compat with  the description_templates.sort_order behavior. |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
