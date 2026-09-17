# # CreateInventoryCsvImportResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**problems** | [**\Crossly\Model\CreateInventoryCsvImportResponseProblems[]**](CreateInventoryCsvImportResponseProblems.md) |  |
**problem_count** | **float** |  |
**max_rows** | **float** |  |
**created** | **float** |  |
**updated** | **float** |  |
**usable** | **float** | Rows that mapped cleanly. &#x60;created + updated&#x60; when not a dry run. |
**total_rows** | **float** |  |
**listings_created** | **float** |  |
**dry_run** | **bool** | True when nothing was written — a preview pass. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
