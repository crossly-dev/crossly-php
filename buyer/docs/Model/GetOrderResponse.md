# # GetOrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**user_id** | **string** |  |
**quantity** | **float** |  |
**notes** | **string** |  | [optional]
**status** | **string** |  |
**platform** | **string** |  |
**cancelled_at** | **\DateTime** |  | [optional]
**listing_id** | **string** |  | [optional]
**inventory_item_id** | **string** |  | [optional]
**platform_listing_id** | **string** |  | [optional]
**handling_time_days** | **float** |  | [optional]
**platform_order_id** | **string** |  | [optional]
**buyer_username** | **string** |  | [optional]
**sales_channel** | **string** |  |
**channel_location_id** | **string** |  | [optional]
**package_preset_id** | **string** |  | [optional]
**carrier** | **string** |  | [optional]
**service** | **string** |  | [optional]
**tracking_number** | **string** |  | [optional]
**easypost_shipment_id** | **string** |  | [optional]
**easypost_tracker_id** | **string** |  | [optional]
**easypost_rate_id** | **string** |  | [optional]
**shipping_label_url** | **string** |  | [optional]
**label_purchased_at** | **\DateTime** |  | [optional]
**shipped_at** | **\DateTime** |  | [optional]
**estimated_delivery** | **string** |  | [optional]
**delivered_at** | **\DateTime** |  | [optional]
**carrier_status** | **string** |  | [optional]
**carrier_status_detail** | **string** |  | [optional]
**tracking_history** | [**\Crossly\Buyer\Model\ListOrdersItemTrackingHistory[]**](ListOrdersItemTrackingHistory.md) |  | [optional]
**delivery_location** | **string** |  | [optional]
**delivery_signature** | **string** |  | [optional]
**tracking_submitted_at** | **\DateTime** |  | [optional]
**tracking_submit_status** | **string** |  | [optional]
**label_cost** | **string** |  | [optional]
**cost_of_goods** | **string** |  | [optional]
**requested_carrier** | **string** |  | [optional]
**requested_service** | **string** |  | [optional]
**ship_by_at** | **\DateTime** |  | [optional]
**ship_by_alerted_at** | **\DateTime** |  | [optional]
**oversold_by** | **float** |  |
**last_status_check_at** | **\DateTime** |  | [optional]
**last_chat_check_at** | **\DateTime** |  | [optional]
**is_disputed** | **bool** |  |
**dispute_reason** | **string** |  | [optional]
**dispute_platform_case_id** | **string** |  | [optional]
**dispute_resolved_at** | **\DateTime** |  | [optional]
**refund_amount** | **string** |  | [optional]
**refund_reason** | **string** |  | [optional]
**refund_platform_id** | **string** |  | [optional]
**refunded_at** | **\DateTime** |  | [optional]
**cancellation_reason** | **string** |  | [optional]
**arrival_condition_requested_at** | **\DateTime** |  | [optional]
**arrival_condition_submitted_at** | **\DateTime** |  | [optional]
**arrival_condition_declined_at** | **\DateTime** |  | [optional]
**delivery_photo_url** | **string** |  | [optional]
**purchase_order_ref** | **string** |  | [optional]
**arrival_condition_photos** | **string[]** |  |
**buyer_email** | **string** |  | [optional]
**fulfillment_method** | **string** |  |
**deleted_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
