# # GetPlatformLimitResponseEbay

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  |
**used** | **float** |  |
**limit** | **float** |  |
**remaining** | **float** |  |
**tier_configured** | **bool** | False if the user hasn&#39;t picked a tier (we default to 250 but flag it so the UI can prompt). |
**respect_quota** | **bool** |  |
**period_start** | **string** |  |
**per_overage_fee_usd** | **float** | Approximate cost if &#x60;used&#x60; overflows &#x60;limit&#x60; — informational. |
**selling_cap** | [**\Crossly\Model\GetPlatformLimitResponseEbaySellingCap**](GetPlatformLimitResponseEbaySellingCap.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
