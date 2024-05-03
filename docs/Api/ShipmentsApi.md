# KauflandSellerApi\ShipmentsApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addShipment()**](ShipmentsApi.md#addShipment) | **POST** /shipments | Add a shipment to an order unit which is already marked as sent.


## `addShipment()`

```php
addShipment($add_shipment_request)
```

Add a shipment to an order unit which is already marked as sent.

Add a shipment to an order unit which is already marked as sent by providing a carrier code and a tracking number.<br> Valid values for `carrier_code` can be found in the <a href=\"https://sellerapi.kaufland.com/?page=order-files#carrier-codes\" target=\"_blank\">documentation</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$add_shipment_request = {"id_order_unit":"123456789","shipment_information":{"carrier_code":"DHL","tracking_number":"0034987654321"}}; // \KauflandSellerApi\Model\AddShipmentRequest | Request body containing information about a shipment related to an order unit

try {
    $apiInstance->addShipment($add_shipment_request);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->addShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **add_shipment_request** | [**\KauflandSellerApi\Model\AddShipmentRequest**](../Model/AddShipmentRequest.md)| Request body containing information about a shipment related to an order unit |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
