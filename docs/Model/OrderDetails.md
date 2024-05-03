# # OrderDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_order** | **string** |  |
**ts_created_iso** | **\DateTime** |  |
**is_marketplace_deemed_supplier** | **bool** |  |
**storefront** | [**\KauflandSellerApi\Model\Storefront**](Storefront.md) |  |
**fulfillment_type** | [**\KauflandSellerApi\Model\FulfillmentType**](FulfillmentType.md) |  |
**order_units** | [**\KauflandSellerApi\Model\OrderDetailsOrderUnitsInner[]**](OrderDetailsOrderUnitsInner.md) |  |
**billing_address** | [**\KauflandSellerApi\Model\Address**](Address.md) |  |
**shipping_address** | [**\KauflandSellerApi\Model\Address**](Address.md) |  |
**buyer** | [**\KauflandSellerApi\Model\Buyer**](Buyer.md) |  |
**order_invoices** | [**\KauflandSellerApi\Model\OrderInvoice[]**](OrderInvoice.md) |  | [optional]
**delivery** | [**\KauflandSellerApi\Model\Delivery**](Delivery.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
