# KauflandSellerApi\OrdersApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrder()**](OrdersApi.md#getOrder) | **GET** /orders/{id_order} | Get an order by ID
[**getOrders()**](OrdersApi.md#getOrders) | **GET** /orders | Get a list of orders


## `getOrder()`

```php
getOrder($id_order, $embedded): \KauflandSellerApi\Model\ApiResponseOrderDetails
```

Get an order by ID

Get an order by <code>id_order</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_order = MB7UWLD; // string | Order ID, unique across all orders
$embedded = array(new \KauflandSellerApi\Model\\KauflandSellerApi\Model\OrderEmbeddable()); // \KauflandSellerApi\Model\OrderEmbeddable[] | Add 'order_invoices' to get order related invoices in the response.

try {
    $result = $apiInstance->getOrder($id_order, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_order** | **string**| Order ID, unique across all orders |
 **embedded** | [**\KauflandSellerApi\Model\OrderEmbeddable[]**](../Model/\KauflandSellerApi\Model\OrderEmbeddable.md)| Add &#39;order_invoices&#39; to get order related invoices in the response. | [optional]

### Return type

[**\KauflandSellerApi\Model\ApiResponseOrderDetails**](../Model/ApiResponseOrderDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($storefront, $ts_created_from_iso, $ts_units_updated_from_iso, $fulfillment_type, $limit, $offset): \KauflandSellerApi\Model\CollectionApiResponseOrder
```

Get a list of orders

Get a list of orders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Locale of storefront
$ts_created_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only orders which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$ts_units_updated_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only orders which units were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$fulfillment_type = [fulfilled_by_merchant]; // \KauflandSellerApi\Model\FulfillmentType[] | Get only orders which are fulfilled by the given type
$limit = 30; // int | Desired size of result set<br>max: 100, default: 30
$offset = 0; // int | Offset applied to result set<br>default: 0

try {
    $result = $apiInstance->getOrders($storefront, $ts_created_from_iso, $ts_units_updated_from_iso, $fulfillment_type, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Locale of storefront | [optional]
 **ts_created_from_iso** | **\DateTime**| Get only orders which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional]
 **ts_units_updated_from_iso** | **\DateTime**| Get only orders which units were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional]
 **fulfillment_type** | [**\KauflandSellerApi\Model\FulfillmentType[]**](../Model/\KauflandSellerApi\Model\FulfillmentType.md)| Get only orders which are fulfilled by the given type | [optional]
 **limit** | **int**| Desired size of result set&lt;br&gt;max: 100, default: 30 | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set&lt;br&gt;default: 0 | [optional] [default to 0]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseOrder**](../Model/CollectionApiResponseOrder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
