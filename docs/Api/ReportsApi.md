# KauflandSellerApi\ReportsApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReport()**](ReportsApi.md#getReport) | **GET** /reports/{id_report} | Get meta-data for a single report by ID
[**getReports()**](ReportsApi.md#getReports) | **GET** /reports | Get a list of your reports
[**requestAccountListingReport()**](ReportsApi.md#requestAccountListingReport) | **POST** /reports/account-listing | Queue an inventory report
[**requestAccountListingWithShopPriceReport()**](ReportsApi.md#requestAccountListingWithShopPriceReport) | **POST** /reports/account-listing-with-shop-price | Queue an inventory report
[**requestCancellationsReport()**](ReportsApi.md#requestCancellationsReport) | **POST** /reports/cancellations | Queue a cancellations report.
[**requestCompetitorsComparerReport()**](ReportsApi.md#requestCompetitorsComparerReport) | **POST** /reports/competitors-comparer | Queue a competitors comparison report
[**requestEansNotFoundReport()**](ReportsApi.md#requestEansNotFoundReport) | **POST** /reports/eans-not-found | Queue an EANs not found report
[**requestNewBookingsReport()**](ReportsApi.md#requestNewBookingsReport) | **POST** /reports/bookings-new | Queue a bookings report
[**requestNewSalesReport()**](ReportsApi.md#requestNewSalesReport) | **POST** /reports/sales-new | Queue a sales report
[**requestProductDataChangesReport()**](ReportsApi.md#requestProductDataChangesReport) | **POST** /reports/product-data-changes | Queue a product data changes report
[**requestProductDataImportFileErrorsReport()**](ReportsApi.md#requestProductDataImportFileErrorsReport) | **POST** /reports/product-data-import-file-errors | Queue a product data import file errors report


## `getReport()`

```php
getReport($id_report): \KauflandSellerApi\Model\ApiResponseReport
```

Get meta-data for a single report by ID

Returns the full meta-data for a single report, specified by ID. You can download the report itself by requesting the file in the \"url\" property of the response, as long as the report is in the <code>done</code> state. To get a list of the IDs of your reports, use the <code>/reports/seller/</code> endpoint.     * @summary Get meta-data for a single report by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_report = 56; // int

try {
    $result = $apiInstance->getReport($id_report);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_report** | **int**|  |

### Return type

[**\KauflandSellerApi\Model\ApiResponseReport**](../Model/ApiResponseReport.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReports()`

```php
getReports($storefront, $limit, $offset, $sort): \KauflandSellerApi\Model\CollectionApiResponseReport
```

Get a list of your reports

Returns the full meta-data for all of your reports. You can download any of the actual reports by requesting the file in the \"url\" property of one of the objects in the response, as long as the report is in the <code>done</code> state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set
$sort = new \KauflandSellerApi\Model\ReportsSorting(); // ReportsSorting | Sorting of result set

try {
    $result = $apiInstance->getReports($storefront, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront | [optional]
 **limit** | **int**| Desired size of result set | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set | [optional] [default to 0]
 **sort** | [**ReportsSorting**](../Model/.md)| Sorting of result set | [optional]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseReport**](../Model/CollectionApiResponseReport.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestAccountListingReport()`

```php
requestAccountListingReport($storefront, $version): \KauflandSellerApi\Model\ApiResponseRequestedReport
```

Queue an inventory report

Queues the generation of a CSV file that lists all of your items that are currently for sale on Kaufland Global Marketplace. You can use the generated file as the basis for an offers import file by downloading it and editing the fields, then reuploading it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$version = new \KauflandSellerApi\Model\AccountListingReportVersion(); // AccountListingReportVersion | Parameter to select the preferred version

try {
    $result = $apiInstance->requestAccountListingReport($storefront, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->requestAccountListingReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **version** | [**AccountListingReportVersion**](../Model/.md)| Parameter to select the preferred version | [optional]

### Return type

[**\KauflandSellerApi\Model\ApiResponseRequestedReport**](../Model/ApiResponseRequestedReport.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestAccountListingWithShopPriceReport()`

```php
requestAccountListingWithShopPriceReport($storefront): \KauflandSellerApi\Model\ApiResponseRequestedReport
```

Queue an inventory report

Queues the generation of a CSV file that lists all of your items that are currently for sale on the kaufland.de site. The new report file includes the current item prices on the marketplace. You can use the generated file as the basis for an inventory import file by downloading it and editing the fields, then reuploading it. The generated file includes the following fields for each item in your inventory: <ul>    <li><b>title_item:</b> The title (i.e. name) of the item</li>    <li><b>ean:</b> The EAN of the item</li>    <li><b>condition:</b> The condition of the item (e.g. <code>new</code> or <code>used - very good</code>)</li>    <li><b>price:</b> The price at which you have listed the item in Eurocents (e.g. 4999)</li>    <li><b>shop_price:</b> The item price which is being shown on the marketplace in Eurocents (e.g. 4999)</li>    <li><b>note:</b> If you added a note to the offer (i.e. unit), it is listed here</li>    <li><b>offer_id:</b> The ID of this offer (i.e. unit)</li>    <li><b>location:</b> (Deprecated) The location of the item (e.g. <code>DE</code> for Germany)</li>    <li><b>warehouse:</b> The name of the warehouse where the item is</li>    <li><b>shipping_group:</b> The name of the shipping group which the item is part of</li>    <li><b>count:</b> How many of the item you have in your inventory</li>    <li><b>delivery_time:</b> The delivery time class of the item (e.g. <code>a</code> if it ships within 24 hours)</li>    <li><b>minimum_price:</b> The minimum price you are willing to sell the item for in Eurocents</li>    <li><b>price_cs:</b> The price at which you have listed the item in Euros (e.g. 49,99)</li>    <li><b>shipping_cost_DE:</b> The shipping cost within Germany listed in Euros (e.g. 4,95)</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->requestAccountListingWithShopPriceReport($storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->requestAccountListingWithShopPriceReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\KauflandSellerApi\Model\ApiResponseRequestedReport**](../Model/ApiResponseRequestedReport.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestCancellationsReport()`

```php
requestCancellationsReport($storefront, $cancellation_type): \KauflandSellerApi\Model\ApiResponseRequestedReport
```

Queue a cancellations report.

Queues the generation of a CSV file that lists all orders in the <code>cancelled</code> state. The generated file includes the following fields for each cancelled order: <ul>    <li><b>Datum der Stornierung:</b> The date of the cancellation</li>    <li><b>Datum der Order:</b> The date of the order</li>    <li><b>Grund der Stornierung:</b> The reason for cancelling</li>    <li><b>EAN des Artikels:</b> The EAN of the item</li>    <li><b>Hersteller des Artikels:</b> The manufacturer of the item</li>    <li><b>Titel des Artikels:</b> The title (i.e. name) of the item</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$cancellation_type = new \KauflandSellerApi\Model\CancellationType(); // CancellationType | Filter to select what cancellations are Considered (defaults to no filter applied)

try {
    $result = $apiInstance->requestCancellationsReport($storefront, $cancellation_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->requestCancellationsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **cancellation_type** | [**CancellationType**](../Model/.md)| Filter to select what cancellations are Considered (defaults to no filter applied) | [optional]

### Return type

[**\KauflandSellerApi\Model\ApiResponseRequestedReport**](../Model/ApiResponseRequestedReport.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestCompetitorsComparerReport()`

```php
requestCompetitorsComparerReport($storefront): \KauflandSellerApi\Model\ApiResponseRequestedReport
```

Queue a competitors comparison report

Queues the generation of a CSV file that contains a list of all of your listed items along with the cheapest price of each item on the kaufland.de site. The generated file includes the following fields for each item: <ul>    <li><b>EAN:</b> The EAN of the item</li>    <li><b>Offer_id:</b> The ID of your offer (i.e. unit)</li>    <li><b>Titel:</b> The title (i.e. name) of the item</li>    <li><b>Günstigster Preis neu:</b> The price of the cheapest new product listing for the item on kaufland.de in Eurocents</li>    <li><b>Günstigster Preis gebraucht:</b> The price of the cheapest used product listing for the item on kaufland.de in Eurocents</li>    <li><b>Ihr Preis:</b> Your price</li>    <li><b>Differenz zu neu absolut:</b> The difference between your price and the cheapest new product price in Eurocents</li>    <li><b>Differenz zu neu %:</b> The difference between your price and the cheapest new product price as a percentage</li>    <li><b>Differenz zu gebraucht absolut:</b>The difference between your price and the cheapest used product price in Eurocents</li>    <li><b>Differenz zu gebraucht %:</b> The difference between your price and the cheapest used product price as a percentage</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->requestCompetitorsComparerReport($storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->requestCompetitorsComparerReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\KauflandSellerApi\Model\ApiResponseRequestedReport**](../Model/ApiResponseRequestedReport.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestEansNotFoundReport()`

```php
requestEansNotFoundReport($storefront): \KauflandSellerApi\Model\ApiResponseRequestedReport
```

Queue an EANs not found report

Queues the generation of a CSV file that lists all EANs of the seller, for that no or not enough product data was provided. The generated file includes the following fields for each EAN: <ul>    <li><b>ean:</b> EAN of the offer or product</li>    <li><b>reason:</b> Error reason</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->requestEansNotFoundReport($storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->requestEansNotFoundReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\KauflandSellerApi\Model\ApiResponseRequestedReport**](../Model/ApiResponseRequestedReport.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestNewBookingsReport()`

```php
requestNewBookingsReport($storefront, $request_bookings_report_request, $version): \KauflandSellerApi\Model\ApiResponseRequestedReport
```

Queue a bookings report

Queues the generation of a CSV file that lists all of your bookings on or after the given <code>date_from</code> timestamp and on or before the given <code>date_to</code> timestamp.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$request_bookings_report_request = new \KauflandSellerApi\Model\RequestBookingsReportRequest(); // \KauflandSellerApi\Model\RequestBookingsReportRequest
$version = new \KauflandSellerApi\Model\BookingsReportVersion(); // BookingsReportVersion | Parameter to select the preferred version

try {
    $result = $apiInstance->requestNewBookingsReport($storefront, $request_bookings_report_request, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->requestNewBookingsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **request_bookings_report_request** | [**\KauflandSellerApi\Model\RequestBookingsReportRequest**](../Model/RequestBookingsReportRequest.md)|  |
 **version** | [**BookingsReportVersion**](../Model/.md)| Parameter to select the preferred version | [optional]

### Return type

[**\KauflandSellerApi\Model\ApiResponseRequestedReport**](../Model/ApiResponseRequestedReport.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestNewSalesReport()`

```php
requestNewSalesReport($storefront, $request_new_sales_report_request): \KauflandSellerApi\Model\ApiResponseRequestedReport
```

Queue a sales report

Queues the generation of a CSV file that contains a list of all of your sales on or after the given <code>date_from</code> timestamp and on or before the given <code>date_to</code> timestamp.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$request_new_sales_report_request = new \KauflandSellerApi\Model\RequestNewSalesReportRequest(); // \KauflandSellerApi\Model\RequestNewSalesReportRequest

try {
    $result = $apiInstance->requestNewSalesReport($storefront, $request_new_sales_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->requestNewSalesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **request_new_sales_report_request** | [**\KauflandSellerApi\Model\RequestNewSalesReportRequest**](../Model/RequestNewSalesReportRequest.md)|  |

### Return type

[**\KauflandSellerApi\Model\ApiResponseRequestedReport**](../Model/ApiResponseRequestedReport.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestProductDataChangesReport()`

```php
requestProductDataChangesReport($storefront): \KauflandSellerApi\Model\ApiResponseRequestedReport
```

Queue a product data changes report

Queues the generation of a CSV file that lists the important changes on products, for that the seller has provided offers. The generated file includes the following fields for each product data change: <ul>    <li><b>ean:</b> EAN of the product</li>    <li><b>title:</b> The title of the product</li>    <li><b>changed_attributes:</b> Title and ID of an attribute, which value was changed</li>    <li><b>date_changed:</b> The date of a value change</li>    <li><b>id_item:</b> Kaufland's Product ID</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->requestProductDataChangesReport($storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->requestProductDataChangesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\KauflandSellerApi\Model\ApiResponseRequestedReport**](../Model/ApiResponseRequestedReport.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestProductDataImportFileErrorsReport()`

```php
requestProductDataImportFileErrorsReport($request_product_data_import_file_errors_report_request): \KauflandSellerApi\Model\ApiResponseRequestedReport
```

Queue a product data import file errors report

Queues the generation of a CSV file that contains a list of errors, occured during import of product data file with id <code>id_import_file</code>. The generated file includes the following fields for each error: <ul>    <li><b>ean:</b> The EAN of the item</li>    <li><b>id_attribute:</b> The ID of the attribute</li>    <li><b>status:</b> Status of error</li>    <li><b>log_message:</b> Log message</li>    <li><b>type_hook:</b> Type of the hook</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$request_product_data_import_file_errors_report_request = new \KauflandSellerApi\Model\RequestProductDataImportFileErrorsReportRequest(); // \KauflandSellerApi\Model\RequestProductDataImportFileErrorsReportRequest

try {
    $result = $apiInstance->requestProductDataImportFileErrorsReport($request_product_data_import_file_errors_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->requestProductDataImportFileErrorsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_product_data_import_file_errors_report_request** | [**\KauflandSellerApi\Model\RequestProductDataImportFileErrorsReportRequest**](../Model/RequestProductDataImportFileErrorsReportRequest.md)|  |

### Return type

[**\KauflandSellerApi\Model\ApiResponseRequestedReport**](../Model/ApiResponseRequestedReport.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
