# KauflandSellerApi\OrderUnitsApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrderUnit()**](OrderUnitsApi.md#cancelOrderUnit) | **PATCH** /order-units/{id_order_unit}/cancel | Cancel an order unit
[**fulfilOrderUnit()**](OrderUnitsApi.md#fulfilOrderUnit) | **PATCH** /order-units/{id_order_unit}/fulfil | Mark an order unit to be in fulfillment
[**getOrderUnit()**](OrderUnitsApi.md#getOrderUnit) | **GET** /order-units/{id_order_unit} | Get an order unit by ID
[**getOrderUnits()**](OrderUnitsApi.md#getOrderUnits) | **GET** /order-units | Get a list of order units
[**refundOrderUnit()**](OrderUnitsApi.md#refundOrderUnit) | **PATCH** /order-units/{id_order_unit}/refund | Send a refund to a customer
[**sendOrderUnit()**](OrderUnitsApi.md#sendOrderUnit) | **PATCH** /order-units/{id_order_unit}/send | Mark an order unit as sent


## `cancelOrderUnit()`

```php
cancelOrderUnit($id_order_unit, $order_unit_cancel_request)
```

Cancel an order unit

Cancel an order unit. Valid values for `reason` can be found in the <a href=\"https://sellerapi.kaufland.com/?page=order-files#cancellation-reasons\" target=\"_blank\">documentation</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_order_unit = 314567898654242; // int | Order unit ID, unique across all order units
$order_unit_cancel_request = new \KauflandSellerApi\Model\OrderUnitCancelRequest(); // \KauflandSellerApi\Model\OrderUnitCancelRequest | Reason of the cancellation

try {
    $apiInstance->cancelOrderUnit($id_order_unit, $order_unit_cancel_request);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->cancelOrderUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_order_unit** | **int**| Order unit ID, unique across all order units |
 **order_unit_cancel_request** | [**\KauflandSellerApi\Model\OrderUnitCancelRequest**](../Model/OrderUnitCancelRequest.md)| Reason of the cancellation |

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

## `fulfilOrderUnit()`

```php
fulfilOrderUnit($id_order_unit)
```

Mark an order unit to be in fulfillment

Mark an order unit to be in fulfillment (It will update the order unit status to `need_to_be_sent`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_order_unit = 314567898654242; // int | Order unit ID, unique across all order units

try {
    $apiInstance->fulfilOrderUnit($id_order_unit);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->fulfilOrderUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_order_unit** | **int**| Order unit ID, unique across all order units |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderUnit()`

```php
getOrderUnit($id_order_unit, $embedded): \KauflandSellerApi\Model\ApiResponseOrderUnitDetails
```

Get an order unit by ID

Get an order unit by <code>id_order_unit</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_order_unit = 314567898654242; // int | Order unit ID, unique across all order units
$embedded = array(new \KauflandSellerApi\Model\\KauflandSellerApi\Model\OrderUnitEmbeddable()); // \KauflandSellerApi\Model\OrderUnitEmbeddable[] | Additional data to be returned

try {
    $result = $apiInstance->getOrderUnit($id_order_unit, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->getOrderUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_order_unit** | **int**| Order unit ID, unique across all order units |
 **embedded** | [**\KauflandSellerApi\Model\OrderUnitEmbeddable[]**](../Model/\KauflandSellerApi\Model\OrderUnitEmbeddable.md)| Additional data to be returned | [optional]

### Return type

[**\KauflandSellerApi\Model\ApiResponseOrderUnitDetails**](../Model/ApiResponseOrderUnitDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderUnits()`

```php
getOrderUnits($storefront, $id_offer, $status, $ts_created_from_iso, $ts_updated_from_iso, $fulfillment_type, $sort, $limit, $offset): \KauflandSellerApi\Model\CollectionApiResponseOrderUnit
```

Get a list of order units

Get a list of order units.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Locale of storefront
$id_offer = 'id_offer_example'; // string | Unique ID for offer(s)
$status = need_to_be_sent; // \KauflandSellerApi\Model\OrderUnitStatus[] | Get only order units which are in the given status
$ts_created_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only order units which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$ts_updated_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only order units which were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$fulfillment_type = [fulfilled_by_merchant]; // \KauflandSellerApi\Model\FulfillmentType[] | Get only order units which are fulfilled by the given type
$sort = ts_created:desc; // string | Specify sorting
$limit = 30; // int | Desired size of result set<br>max: 100, default: 30
$offset = 0; // int | Offset applied to result set<br>default: 0

try {
    $result = $apiInstance->getOrderUnits($storefront, $id_offer, $status, $ts_created_from_iso, $ts_updated_from_iso, $fulfillment_type, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->getOrderUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Locale of storefront | [optional]
 **id_offer** | **string**| Unique ID for offer(s) | [optional]
 **status** | [**\KauflandSellerApi\Model\OrderUnitStatus[]**](../Model/\KauflandSellerApi\Model\OrderUnitStatus.md)| Get only order units which are in the given status | [optional]
 **ts_created_from_iso** | **\DateTime**| Get only order units which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional]
 **ts_updated_from_iso** | **\DateTime**| Get only order units which were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional]
 **fulfillment_type** | [**\KauflandSellerApi\Model\FulfillmentType[]**](../Model/\KauflandSellerApi\Model\FulfillmentType.md)| Get only order units which are fulfilled by the given type | [optional]
 **sort** | **string**| Specify sorting | [optional] [default to &#39;ts_created:desc&#39;]
 **limit** | **int**| Desired size of result set&lt;br&gt;max: 100, default: 30 | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set&lt;br&gt;default: 0 | [optional] [default to 0]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseOrderUnit**](../Model/CollectionApiResponseOrderUnit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundOrderUnit()`

```php
refundOrderUnit($id_order_unit, $order_unit_refund_request)
```

Send a refund to a customer

Send a refund to a customer for a particular order unit.<br>`amount` must be in Eurocents.<br> Allowed values for `reason` can be found in the <a href=\"https://sellerapi.kaufland.com/?page=orders#refunding-order-unit\" target=\"_blank\">documentation</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_order_unit = 314567898654242; // int | Order unit ID, unique across all order units
$order_unit_refund_request = {"amount":1299,"reason":"delivery_delay"}; // \KauflandSellerApi\Model\OrderUnitRefundRequest | Request body containing amount and reason of the refund.

try {
    $apiInstance->refundOrderUnit($id_order_unit, $order_unit_refund_request);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->refundOrderUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_order_unit** | **int**| Order unit ID, unique across all order units |
 **order_unit_refund_request** | [**\KauflandSellerApi\Model\OrderUnitRefundRequest**](../Model/OrderUnitRefundRequest.md)| Request body containing amount and reason of the refund. |

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

## `sendOrderUnit()`

```php
sendOrderUnit($id_order_unit, $order_unit_send_request)
```

Mark an order unit as sent

Mark an order unit as sent. Valid values for `carrier_code` can be found in the <a href=\"https://sellerapi.kaufland.com/?page=order-files#carrier-codes\" target=\"_blank\">documentation</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_order_unit = 314567898654242; // int | Order unit ID, unique across all order units
$order_unit_send_request = {"tracking_numbers":"0034123456789,0034987654321","carrier_code":"DHL"}; // \KauflandSellerApi\Model\OrderUnitSendRequest | Request body containing tracking number(s) and carrier code of the shipment(s)

try {
    $apiInstance->sendOrderUnit($id_order_unit, $order_unit_send_request);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->sendOrderUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_order_unit** | **int**| Order unit ID, unique across all order units |
 **order_unit_send_request** | [**\KauflandSellerApi\Model\OrderUnitSendRequest**](../Model/OrderUnitSendRequest.md)| Request body containing tracking number(s) and carrier code of the shipment(s) |

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
