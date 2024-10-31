# # OrderUnitDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_order_unit** | **int** |  |
**id_order** | **string** |  |
**ts_created_iso** | **\DateTime** |  |
**is_marketplace_deemed_supplier** | **bool** |  |
**ts_updated_iso** | **\DateTime** |  |
**status** | [**\KauflandSellerApi\Model\OrderUnitStatus**](OrderUnitStatus.md) |  |
**price** | **int** |  |
**id_offer** | **string** |  |
**revenue_gross** | **int** |  |
**revenue_net** | **int** |  |
**note** | **string** |  |
**unit_condition** | **string** |  |
**storefront** | [**\KauflandSellerApi\Model\Storefront**](Storefront.md) |  |
**currency** | [**\KauflandSellerApi\Model\Currency**](Currency.md) |  |
**delivery_time_min** | **int** |  |
**delivery_time_max** | **int** |  |
**delivery_time_expires_iso** | **\DateTime** |  |
**order_received_timestamp_iso** | **\DateTime** |  |
**shipping_rate** | **int** |  |
**cancel_reason** | **string** |  |
**fulfillment_type** | [**\KauflandSellerApi\Model\FulfillmentType**](FulfillmentType.md) |  |
**buyer** | [**\KauflandSellerApi\Model\Buyer**](Buyer.md) |  |
**billing_address** | [**\KauflandSellerApi\Model\Address**](Address.md) |  |
**shipping_address** | [**\KauflandSellerApi\Model\Address**](Address.md) |  |
**product** | [**\KauflandSellerApi\Model\Product**](Product.md) |  |
**vat** | **float** |  |
**delivery_attempt_timestamp_iso** | **\DateTime** | The attribute is only responded when explicitly requested as an embedded field | [optional]
**tickets** | [**\KauflandSellerApi\Model\Ticket[]**](Ticket.md) | The attribute is only responded when explicitly requested as an embedded field | [optional]
**return_unit** | [**\KauflandSellerApi\Model\OrderUnitDetailsReturnUnit**](OrderUnitDetailsReturnUnit.md) |  | [optional]
**delivery** | [**\KauflandSellerApi\Model\Delivery**](Delivery.md) |  | [optional]
**kss_eligible** | **bool** | The attribute is only responded when explicitly requested as an embedded field | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
