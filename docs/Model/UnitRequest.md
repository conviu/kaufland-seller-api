# # UnitRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | Amount of available Units | [optional]
**handling_time** | **int** | handling time |
**listing_price** | **int** | Listing price, in integral cents of the storefront&#39;s currency (CZK for cz, EUR for de, sk). Minimum 1 cent, maximum differs by storefront (1 million EUR or 25 million CZK). |
**minimum_price** | **int** | Minimum price, in integral cents of the storefront&#39;s currency. Only relevant for sellers subscribed to Tiefstpreisautomatik | [optional]
**note** | **string** | A note for this unit | [optional]
**id_shipping_group** | **int** | ID of the shipping group | [optional]
**id_warehouse** | **int** | ID of warehouse | [optional]
**ean** | **string** | EAN, 13 or 14 digits | [optional]
**id_product** | **int** | Internal ID of Product, unique across all Products | [optional]
**id_offer** | **string** | Seller&#39;s unique ID for offer(s) |
**condition** | [**\KauflandSellerApi\Model\UnitRequestCondition**](UnitRequestCondition.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
