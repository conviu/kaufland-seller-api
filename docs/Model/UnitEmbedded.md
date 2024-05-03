# # UnitEmbedded

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\KauflandSellerApi\Model\UnitStatuses**](UnitStatuses.md) |  |
**currency** | [**\KauflandSellerApi\Model\Currency**](Currency.md) |  |
**condition** | [**\KauflandSellerApi\Model\UnitCondition**](UnitCondition.md) |  |
**id_unit** | **int** | Internal ID of Unit, unique across all Units |
**note** | **string** | A note for this unit |
**listing_price** | **int** | Listing price, available only for Seller |
**minimum_price** | **int** | Minimum price, available only for Seller with Tiefstpreisautomatik |
**price** | **int** | Price at which this unit will be offered on Kaufland.de |
**id_offer** | **string** | Seller&#39;s unique ID for offer(s) |
**id_product** | **int** | Internal ID of Product, unique across all Products |
**id_shipping_group** | **int** | ID of the shipping group |
**id_warehouse** | **int** | ID of warehouse |
**amount** | **int** | Amount of available Units |
**date_inserted_iso** | **\DateTime** | DateTime when unit was created |
**date_lastchange_iso** | **\DateTime** | DateTime when unit has been edited for the last time |
**handling_time** | **int** | handling time |
**shipping_rate** | **int** |  |
**storefront** | [**\KauflandSellerApi\Model\Storefront**](Storefront.md) |  |
**transport_time_min** | **int** | Transport time minimum |
**transport_time_max** | **int** | Transport time maximum |
**product** | [**\KauflandSellerApi\Model\Product**](Product.md) |  | [optional]
**fulfillment_type** | [**\KauflandSellerApi\Model\FulfillmentType**](FulfillmentType.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
