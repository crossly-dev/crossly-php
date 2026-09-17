# # GetOrderProofOfDeliveryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** |  |
**platform** | **string** |  |
**platform_order_id** | **string** |  | [optional]
**item_title** | **string** |  | [optional]
**buyer_username** | **string** |  | [optional]
**ship_to_postal_code** | **string** | The ZIP we shipped to, for comparison against the delivery scan. | [optional]
**ship_to_city_state** | **string** |  | [optional]
**carrier** | **string** |  | [optional]
**tracking_number** | **string** |  | [optional]
**tracking_url** | **string** |  | [optional]
**shipped_at** | **string** |  | [optional]
**delivered_at** | **string** |  | [optional]
**delivery_location** | **string** |  | [optional]
**signature** | **string** | Null means the carrier captured none — NOT that delivery is unproven. | [optional]
**scans** | [**\Crossly\Buyer\Model\GetOrderProofOfDeliveryResponseScans[]**](GetOrderProofOfDeliveryResponseScans.md) |  |
**gaps** | **string[]** | Why this document is weak, stated plainly so the seller isn&#39;t surprised  by the marketplace&#39;s response. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
