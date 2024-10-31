# KauflandSellerApi\ShippingLabelsApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShippingLabel()**](ShippingLabelsApi.md#createShippingLabel) | **POST** /shipping-labels | Request and create a shipping label.


## `createShippingLabel()`

```php
createShippingLabel($create_shipping_label_request): \KauflandSellerApi\Model\ApiResponseCreateShippingLabelResponse
```

Request and create a shipping label.

You can read about Kaufland Shipment Solutions (KSS) soon.  This endpoint provides a temporary link to a PDF file that contains the shipping label.  Please consider shipping restrictions that apply.  `ids_order_units` is a list of order unit IDs that are to be shipped in the same package.  `carriers` is a list of carriers you are able to use to ship the package. If you want to use a specific carrier, you can pass only the desired carrier. The carrier must be one of the following: `GLS`  `package_measurements` are the properties of the package. The `weight` is in grams, the `width`, `height`, and `length` are in centimeters.  If the response is successful, the response will contain the following properties: - `id` is the ID of the shipment label. - `tracking_number` is the tracking number of the shipment. - `carrier` is the carrier used to ship the package. - `download_url` is the URL to download the shipping label, the download url works for 7 days.  If you are using the playground environment, the response will always return a dummy success response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ShippingLabelsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$create_shipping_label_request = {"ids_order_units":[123456789,987654321],"carriers":["GLS"],"package_measurements":{"weight_gram":1500,"width_cm":10,"height_cm":20,"length_cm":30}}; // \KauflandSellerApi\Model\CreateShippingLabelRequest | Request body containing information about the specification of the shipment.

try {
    $result = $apiInstance->createShippingLabel($create_shipping_label_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLabelsApi->createShippingLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_shipping_label_request** | [**\KauflandSellerApi\Model\CreateShippingLabelRequest**](../Model/CreateShippingLabelRequest.md)| Request body containing information about the specification of the shipment. |

### Return type

[**\KauflandSellerApi\Model\ApiResponseCreateShippingLabelResponse**](../Model/ApiResponseCreateShippingLabelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
