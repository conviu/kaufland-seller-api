# # PickupLocation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pickup_location_id** | **string** | The unique identifier for the pickup location. (Also known as branch ID) For Packeta this is a numeric string, but for other carriers it may have a different format. |
**provider** | **string** | Identifies the provider of the pickup location. |
**carrier** | **string** | Specifies the carrier responsible for delivering the order to the pickup location. In some instances, the carrier may be different from the provider. |
**services** | **string** | Describes the delivery services associated with the pickup location delivery (e.g., \&quot;inpost_locker_standard\&quot; for deliveries to InPost pickup locations). For Packeta this is going to be always an empty string. Services is a reserved field that Packeta did not implement it yet: https://docs.packetery.com/03-creating-packets/06-packetery-api-reference.html#toc-services For PPL it would be a CSV like \&quot;COD, PPCK\&quot;. |
**dhl_post_number** | **string** | This field contains the DHL post number (Postnummer) for deliveries to DHL Packstations. This field is nullable and will only contain data for DHL deliveries. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
