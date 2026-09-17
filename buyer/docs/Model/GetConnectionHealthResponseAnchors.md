# # GetConnectionHealthResponseAnchors

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expected** | **string[]** | What we were looking for. Empty ⇒ this platform is unmonitored. |
**observations** | **object[]** |  |
**present** | **string[]** | Name found carrying a non-empty value — the only honest \&quot;logged in\&quot;. |
**empty** | **string[]** | Name found, value is the empty string. The Whatnot class. |
**missing** | **string[]** | Name not in the jar at all. |
**cookie_count** | **float** |  |
**observed_cookie_names** | **string[]** | Cookie names actually in the jar, truncated. This is the payload that turns \&quot;anchors missing\&quot; into a diagnosis: if the jar holds 30 cookies and none are ours, a rename is the likely story; if it holds three device cookies, the browser is signed out. NAMES ONLY — never values. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
