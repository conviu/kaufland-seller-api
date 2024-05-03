# KauflandSellerApi\OrderInvoicesApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOrderInvoice()**](OrderInvoicesApi.md#deleteOrderInvoice) | **DELETE** /order-invoices/{id_order}/{id_invoice} | Delete an order invoice by given order ID and invoice ID
[**getOrderInvoice()**](OrderInvoicesApi.md#getOrderInvoice) | **GET** /order-invoices/{id_order}/{id_invoice} | Get an order invoice by order ID and invoice ID
[**getOrderInvoices()**](OrderInvoicesApi.md#getOrderInvoices) | **GET** /order-invoices | Get a list of order invoices
[**uploadOrderInvoice()**](OrderInvoicesApi.md#uploadOrderInvoice) | **POST** /order-invoices/{id_order} | Upload an order invoice to a given order


## `deleteOrderInvoice()`

```php
deleteOrderInvoice($id_order, $id_invoice)
```

Delete an order invoice by given order ID and invoice ID

Delete an order invoice by <code>id_order</code> and <code>id_invoice</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\OrderInvoicesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_order = MB7UWLD; // string | Order ID, unique across all orders
$id_invoice = 56; // int | Invoice ID, <b>not unique</b> across all invoices.

try {
    $apiInstance->deleteOrderInvoice($id_order, $id_invoice);
} catch (Exception $e) {
    echo 'Exception when calling OrderInvoicesApi->deleteOrderInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_order** | **string**| Order ID, unique across all orders |
 **id_invoice** | **int**| Invoice ID, &lt;b&gt;not unique&lt;/b&gt; across all invoices. |

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

## `getOrderInvoice()`

```php
getOrderInvoice($id_order, $id_invoice): \KauflandSellerApi\Model\ApiResponseOrderInvoice
```

Get an order invoice by order ID and invoice ID

Get an order invoice by <code>id_order</code> and <code>id_invoice</code>.<br> Note: Invoice IDs are <b>not unique</b> across all invoices as there are two types of order invoices: <ul>  <li>- Invoices uploaded by the seller</li>  <li>- Invoices provided by Kaufland.de which fall under the deemed supplier model (DSM)</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\OrderInvoicesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_order = MB7UWLD; // string | Order ID, unique across all orders
$id_invoice = 9346462; // int | Invoice ID, <b>not unique</b> across all invoices.

try {
    $result = $apiInstance->getOrderInvoice($id_order, $id_invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderInvoicesApi->getOrderInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_order** | **string**| Order ID, unique across all orders |
 **id_invoice** | **int**| Invoice ID, &lt;b&gt;not unique&lt;/b&gt; across all invoices. |

### Return type

[**\KauflandSellerApi\Model\ApiResponseOrderInvoice**](../Model/ApiResponseOrderInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderInvoices()`

```php
getOrderInvoices($storefront, $ts_created_from_iso, $limit, $offset): \KauflandSellerApi\Model\CollectionApiResponseOrderInvoice
```

Get a list of order invoices

Get a list of order invoices. The list contains invoices uploaded by the seller as well as invoices provided by Kaufland.de, i.e. those which fall under the deemed supplier model (DSM).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\OrderInvoicesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Locale of storefront
$ts_created_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only order units which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$limit = 30; // int | Desired size of result set<br>max: 100, default: 30
$offset = 0; // int | Offset applied to result set<br>default: 0

try {
    $result = $apiInstance->getOrderInvoices($storefront, $ts_created_from_iso, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderInvoicesApi->getOrderInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Locale of storefront | [optional]
 **ts_created_from_iso** | **\DateTime**| Get only order units which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional]
 **limit** | **int**| Desired size of result set&lt;br&gt;max: 100, default: 30 | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set&lt;br&gt;default: 0 | [optional] [default to 0]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseOrderInvoice**](../Model/CollectionApiResponseOrderInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadOrderInvoice()`

```php
uploadOrderInvoice($id_order, $order_invoice_upload_request): \KauflandSellerApi\Model\ApiResponseOrderInvoice
```

Upload an order invoice to a given order

Upload an order invoice to a given order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\OrderInvoicesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_order = MB7UWLD; // string | Order ID, unique across all orders
$order_invoice_upload_request = {"original_name":"invoice_MB7UWLD.pdf","mime_type":"application/pdf","data":"JVBERi0xLjQKJcOkw7zDtsOfCj...VmCjEyNzg3CiUlRU9GCg=="}; // \KauflandSellerApi\Model\OrderInvoiceUploadRequest | Request body containing invoice related information and binary invoice data base64 encoded

try {
    $result = $apiInstance->uploadOrderInvoice($id_order, $order_invoice_upload_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderInvoicesApi->uploadOrderInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_order** | **string**| Order ID, unique across all orders |
 **order_invoice_upload_request** | [**\KauflandSellerApi\Model\OrderInvoiceUploadRequest**](../Model/OrderInvoiceUploadRequest.md)| Request body containing invoice related information and binary invoice data base64 encoded |

### Return type

[**\KauflandSellerApi\Model\ApiResponseOrderInvoice**](../Model/ApiResponseOrderInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
