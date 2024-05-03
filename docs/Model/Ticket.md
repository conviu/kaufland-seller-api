# # Ticket

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_ticket** | **string** | Unique id of the ticket. |
**ids_order_units** | **int[]** | The list of order units IDs |
**id_buyer** | **int** |  |
**ts_created_iso** | **\DateTime** | Creation date of the ticket in iso 8601 |
**ts_updated_iso** | **\DateTime** | Last update on the ticket in iso 8601 |
**status** | [**\KauflandSellerApi\Model\TicketStatus**](TicketStatus.md) |  |
**open_reason** | [**\KauflandSellerApi\Model\TicketReason**](TicketReason.md) |  |
**topic** | [**\KauflandSellerApi\Model\TicketTopic**](TicketTopic.md) | The topic of the ticket |
**is_seller_responsible** | **bool** | An indicator, whether the seller needs to take action |
**fulfillment_type** | [**\KauflandSellerApi\Model\FulfillmentType**](FulfillmentType.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
