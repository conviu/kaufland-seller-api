# # UnitPatchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\KauflandSellerApi\Model\WriteableUnitStatuses**](WriteableUnitStatuses.md) |  | [optional]
**amount** | **int** | Amount of available Units | [optional]
**handling_time** | **int** | handling time | [optional]
**listing_price** | **int** | Listing price, in integral cents of the storefront&#39;s currency (CZK for cz, EUR for de, sk, at and PLN for pl). Minimum 1 cent, maximum differs by storefront (25 million CZK, 1 million EUR or 4.5 million PLN). | [optional]
**minimum_price** | **int** | Minimum price, in integral cents of the storefront&#39;s currency. Only relevant if you want to use Smart Pricing. | [optional]
**note** | **string** | A note for this unit | [optional]
**id_shipping_group** | **int** | ID of the shipping group | [optional]
**id_warehouse** | **int** | ID of warehouse | [optional]
**vat_indicator** | [**\KauflandSellerApi\Model\WriteableVatIndicator**](WriteableVatIndicator.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
