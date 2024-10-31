# OpenAPIClient-php

This is the Kaufland.de Seller API v2. You can find more information on [https://sellerapi.kaufland.com/](https://sellerapi.kaufland.com/)


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/conviu/kaufland-seller-api.git"
    }
  ],
  "require": {
    "conviu/kaufland-seller-api": "*@dev"
  }
}
```

Then run `composer install`

Your project is free to choose the http client of your choice
Please require packages that will provide http client functionality:
https://packagist.org/providers/psr/http-client-implementation
https://packagist.org/providers/php-http/async-client-implementation
https://packagist.org/providers/psr/http-factory-implementation

As an example:

```
composer require guzzlehttp/guzzle php-http/guzzle7-adapter http-interop/http-factory-guzzle
```

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new KauflandSellerApi\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_attribute = 21; // int | The ID of the attribute
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Specifies the store by country
$locale = new \KauflandSellerApi\Model\ProductDataLocale(); // ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getAttribute($id_attribute, $storefront, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getAttribute: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to */v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AttributesApi* | [**getAttribute**](docs/Api/AttributesApi.md#getattribute) | **GET** /attributes/{id_attribute} | Get attribute by ID
*AttributesApi* | [**getAttributeByName**](docs/Api/AttributesApi.md#getattributebyname) | **GET** /attributes/by-name/{name} | Get attribute by name
*AttributesApi* | [**getAttributeList**](docs/Api/AttributesApi.md#getattributelist) | **GET** /attributes | Get an attribute list
*AttributesApi* | [**getAttributeListBySearch**](docs/Api/AttributesApi.md#getattributelistbysearch) | **GET** /attributes/search | Get attributes by search term
*AttributesApi* | [**getSharedSetCsvFileByAttributeId**](docs/Api/AttributesApi.md#getsharedsetcsvfilebyattributeid) | **GET** /attributes/{id_attribute}/shared-set-values | Get the URL of a CSV file containing the shared set values for a specific attribute ID
*AttributesApi* | [**getSharedSetListBySearchAndAttributeId**](docs/Api/AttributesApi.md#getsharedsetlistbysearchandattributeid) | **GET** /attributes/{id_attribute}/shared-set | Get shared-set by search term and attribute id
*BuyboxApi* | [**getOffersRankings**](docs/Api/BuyboxApi.md#getoffersrankings) | **GET** /buybox | Get a list of offers rankings for a product
*CarriersApi* | [**getCarriers**](docs/Api/CarriersApi.md#getcarriers) | **GET** /carriers | Get a list of available carriers
*CategoriesApi* | [**decideCategory**](docs/Api/CategoriesApi.md#decidecategory) | **POST** /categories/decide | Guess categories
*CategoriesApi* | [**getCategoriesList**](docs/Api/CategoriesApi.md#getcategorieslist) | **GET** /categories | Get category list by search term
*CategoriesApi* | [**getCategory**](docs/Api/CategoriesApi.md#getcategory) | **GET** /categories/{id_category} | Get category by ID
*CategoriesApi* | [**getCategoryTree**](docs/Api/CategoriesApi.md#getcategorytree) | **GET** /categories/tree | Get complete category tree
*ImportFilesApi* | [**createInventoryCommandImportFile**](docs/Api/ImportFilesApi.md#createinventorycommandimportfile) | **POST** /import-files/inventory-command | Add an INVENTORY_COMMAND file URL
*ImportFilesApi* | [**createInventoryFeedImportFile**](docs/Api/ImportFilesApi.md#createinventoryfeedimportfile) | **POST** /import-files/inventory-feed | Add an INVENTORY_FEED file URL
*ImportFilesApi* | [**createOrderCommandImportFile**](docs/Api/ImportFilesApi.md#createordercommandimportfile) | **POST** /import-files/order-command | Add an ORDER_COMMAND file URL
*ImportFilesApi* | [**getInventoryCommandImportFile**](docs/Api/ImportFilesApi.md#getinventorycommandimportfile) | **GET** /import-files/inventory-command/{id_import_file} | Get an inventory command import file by ID
*ImportFilesApi* | [**getInventoryCommandImportFiles**](docs/Api/ImportFilesApi.md#getinventorycommandimportfiles) | **GET** /import-files/inventory-command | Get a list of your inventory command import files
*ImportFilesApi* | [**getInventoryFeedImportFile**](docs/Api/ImportFilesApi.md#getinventoryfeedimportfile) | **GET** /import-files/inventory-feed/{id_import_file} | Get an inventory feed import file by ID
*ImportFilesApi* | [**getInventoryFeedImportFiles**](docs/Api/ImportFilesApi.md#getinventoryfeedimportfiles) | **GET** /import-files/inventory-feed | Get a list of your inventory feed import files
*ImportFilesApi* | [**getOrderCommandImportFile**](docs/Api/ImportFilesApi.md#getordercommandimportfile) | **GET** /import-files/order-command/{id_import_file} | Get an order command import file by ID
*ImportFilesApi* | [**getOrderCommandImportFiles**](docs/Api/ImportFilesApi.md#getordercommandimportfiles) | **GET** /import-files/order-command | Get a list of your order command import files
*InfoApi* | [**getAllLocales**](docs/Api/InfoApi.md#getalllocales) | **GET** /info/locale | Get values for parameter &#39;locale&#39;
*InfoApi* | [**getAllStorefronts**](docs/Api/InfoApi.md#getallstorefronts) | **GET** /info/storefront | Get values for parameter &#39;storefront&#39;
*InfoApi* | [**getVatIndicators**](docs/Api/InfoApi.md#getvatindicators) | **GET** /info/vat-indicators | Get a list of Vat Indicators Mappings per Storefront
*OrderInvoicesApi* | [**deleteOrderInvoice**](docs/Api/OrderInvoicesApi.md#deleteorderinvoice) | **DELETE** /order-invoices/{id_order}/{id_invoice} | Delete an order invoice by given order ID and invoice ID
*OrderInvoicesApi* | [**getOrderInvoice**](docs/Api/OrderInvoicesApi.md#getorderinvoice) | **GET** /order-invoices/{id_order}/{id_invoice} | Get an order invoice by order ID and invoice ID
*OrderInvoicesApi* | [**getOrderInvoices**](docs/Api/OrderInvoicesApi.md#getorderinvoices) | **GET** /order-invoices | Get a list of order invoices
*OrderInvoicesApi* | [**uploadOrderInvoice**](docs/Api/OrderInvoicesApi.md#uploadorderinvoice) | **POST** /order-invoices/{id_order} | Upload an order invoice to a given order
*OrderUnitsApi* | [**cancelOrderUnit**](docs/Api/OrderUnitsApi.md#cancelorderunit) | **PATCH** /order-units/{id_order_unit}/cancel | Cancel an order unit
*OrderUnitsApi* | [**fulfilOrderUnit**](docs/Api/OrderUnitsApi.md#fulfilorderunit) | **PATCH** /order-units/{id_order_unit}/fulfil | Mark an order unit to be in fulfillment
*OrderUnitsApi* | [**getOrderUnit**](docs/Api/OrderUnitsApi.md#getorderunit) | **GET** /order-units/{id_order_unit} | Get an order unit by ID
*OrderUnitsApi* | [**getOrderUnits**](docs/Api/OrderUnitsApi.md#getorderunits) | **GET** /order-units | Get a list of order units
*OrderUnitsApi* | [**refundOrderUnit**](docs/Api/OrderUnitsApi.md#refundorderunit) | **PATCH** /order-units/{id_order_unit}/refund | Send a refund to a customer
*OrderUnitsApi* | [**sendOrderUnit**](docs/Api/OrderUnitsApi.md#sendorderunit) | **PATCH** /order-units/{id_order_unit}/send | Mark an order unit as sent
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /orders/{id_order} | Get an order by ID
*OrdersApi* | [**getOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /orders | Get a list of orders
*ProductDataApi* | [**createProductData**](docs/Api/ProductDataApi.md#createproductdata) | **PUT** /product-data | Add new product data for an EAN or replace your existing one
*ProductDataApi* | [**createProductDataFile**](docs/Api/ProductDataApi.md#createproductdatafile) | **POST** /product-data/import-files | Add an import file URL
*ProductDataApi* | [**deleteProductData**](docs/Api/ProductDataApi.md#deleteproductdata) | **DELETE** /product-data/{ean} | Delete your product data for an EAN
*ProductDataApi* | [**getProductData**](docs/Api/ProductDataApi.md#getproductdata) | **GET** /product-data/{ean} | Get your product data for an EAN
*ProductDataApi* | [**getProductDataFile**](docs/Api/ProductDataApi.md#getproductdatafile) | **GET** /product-data/import-files/{id_import_file} | Get import file by ID
*ProductDataApi* | [**getProductDataFileList**](docs/Api/ProductDataApi.md#getproductdatafilelist) | **GET** /product-data/import-files | Get import files
*ProductDataApi* | [**getProductDataStatus**](docs/Api/ProductDataApi.md#getproductdatastatus) | **GET** /product-data/status/{ean} | Get the process status for your product data
*ProductDataApi* | [**updateProductData**](docs/Api/ProductDataApi.md#updateproductdata) | **PATCH** /product-data | Update existing product data for an EAN
*ProductsApi* | [**getProduct**](docs/Api/ProductsApi.md#getproduct) | **GET** /products/{id_product} | Get product by ID
*ProductsApi* | [**getProductByEan**](docs/Api/ProductsApi.md#getproductbyean) | **GET** /products/ean/{ean} | Get a product by EAN
*ProductsApi* | [**getProductList**](docs/Api/ProductsApi.md#getproductlist) | **GET** /products/search | Get a list of products by search term
*ReportsApi* | [**getReport**](docs/Api/ReportsApi.md#getreport) | **GET** /reports/{id_report} | Get meta-data for a single report by ID
*ReportsApi* | [**getReports**](docs/Api/ReportsApi.md#getreports) | **GET** /reports | Get a list of your reports
*ReportsApi* | [**requestAccountListingReport**](docs/Api/ReportsApi.md#requestaccountlistingreport) | **POST** /reports/account-listing | Queue an inventory report
*ReportsApi* | [**requestAccountListingWithShopPriceReport**](docs/Api/ReportsApi.md#requestaccountlistingwithshoppricereport) | **POST** /reports/account-listing-with-shop-price | Queue an inventory report
*ReportsApi* | [**requestCancellationsReport**](docs/Api/ReportsApi.md#requestcancellationsreport) | **POST** /reports/cancellations | Queue a cancellations report.
*ReportsApi* | [**requestCompetitorsComparerReport**](docs/Api/ReportsApi.md#requestcompetitorscomparerreport) | **POST** /reports/competitors-comparer | Queue a competitors comparison report
*ReportsApi* | [**requestEansNotFoundReport**](docs/Api/ReportsApi.md#requesteansnotfoundreport) | **POST** /reports/eans-not-found | Queue an EANs not found report
*ReportsApi* | [**requestNewBookingsReport**](docs/Api/ReportsApi.md#requestnewbookingsreport) | **POST** /reports/bookings-new | Queue a bookings report
*ReportsApi* | [**requestNewSalesReport**](docs/Api/ReportsApi.md#requestnewsalesreport) | **POST** /reports/sales-new | Queue a sales report
*ReportsApi* | [**requestProductDataChangesReport**](docs/Api/ReportsApi.md#requestproductdatachangesreport) | **POST** /reports/product-data-changes | Queue a product data changes report
*ReportsApi* | [**requestProductDataImportFileErrorsReport**](docs/Api/ReportsApi.md#requestproductdataimportfileerrorsreport) | **POST** /reports/product-data-import-file-errors | Queue a product data import file errors report
*ReturnUnitsApi* | [**acceptReturnUnit**](docs/Api/ReturnUnitsApi.md#acceptreturnunit) | **PATCH** /return-units/{id_return_unit}/accept | Accept a return unit
*ReturnUnitsApi* | [**clarifyReturnUnit**](docs/Api/ReturnUnitsApi.md#clarifyreturnunit) | **PATCH** /return-units/{id_return_unit}/clarify | Clarify a return unit
*ReturnUnitsApi* | [**getReturnUnit**](docs/Api/ReturnUnitsApi.md#getreturnunit) | **GET** /return-units/{id_return_unit} | Get a return unit by ID
*ReturnUnitsApi* | [**getReturnUnits**](docs/Api/ReturnUnitsApi.md#getreturnunits) | **GET** /return-units | Get a list of return units
*ReturnUnitsApi* | [**rejectReturnUnit**](docs/Api/ReturnUnitsApi.md#rejectreturnunit) | **PATCH** /return-units/{id_return_unit}/reject | Reject a return unit
*ReturnUnitsApi* | [**repairReturnUnit**](docs/Api/ReturnUnitsApi.md#repairreturnunit) | **PATCH** /return-units/{id_return_unit}/repair | Repair a return unit
*ReturnsApi* | [**getReturn**](docs/Api/ReturnsApi.md#getreturn) | **GET** /returns/{id_return} | Get a return by ID
*ReturnsApi* | [**getReturns**](docs/Api/ReturnsApi.md#getreturns) | **GET** /returns | Get a list of returns
*ReturnsApi* | [**initiateReturn**](docs/Api/ReturnsApi.md#initiatereturn) | **POST** /returns | Initialize a return
*ReturnsApi* | [**updateReturn**](docs/Api/ReturnsApi.md#updatereturn) | **PUT** /returns/{id_return} | Add one or more order units to an already existing return
*ShipmentsApi* | [**addShipment**](docs/Api/ShipmentsApi.md#addshipment) | **POST** /shipments | Add a shipment to an order unit which is already marked as sent.
*ShippingGroupsApi* | [**getShippingGroup**](docs/Api/ShippingGroupsApi.md#getshippinggroup) | **GET** /shipping-groups/{id_shipping_group} | Get a shipping group by ID
*ShippingGroupsApi* | [**getShippingGroups**](docs/Api/ShippingGroupsApi.md#getshippinggroups) | **GET** /shipping-groups | Get the list of your predefined shipping groups
*ShippingLabelsApi* | [**createShippingLabel**](docs/Api/ShippingLabelsApi.md#createshippinglabel) | **POST** /shipping-labels | Request and create a shipping label.
*StatusApi* | [**ping**](docs/Api/StatusApi.md#ping) | **GET** /status/ping | Ping the Marketplace Seller API by Kaufland
*SubscriptionsApi* | [**addSubscription**](docs/Api/SubscriptionsApi.md#addsubscription) | **POST** /subscriptions | Subscribe for event
*SubscriptionsApi* | [**deleteSubscription**](docs/Api/SubscriptionsApi.md#deletesubscription) | **DELETE** /subscriptions/{id_subscription} | Unsubscribe from event
*SubscriptionsApi* | [**getSubscription**](docs/Api/SubscriptionsApi.md#getsubscription) | **GET** /subscriptions/{id_subscription} | Get a push notification subscription by ID
*SubscriptionsApi* | [**getSubscriptions**](docs/Api/SubscriptionsApi.md#getsubscriptions) | **GET** /subscriptions | Get a list of your push notification subscriptions
*SubscriptionsApi* | [**updateSubscription**](docs/Api/SubscriptionsApi.md#updatesubscription) | **PATCH** /subscriptions/{id_subscription} | Update subscription
*TicketsApi* | [**closeTicket**](docs/Api/TicketsApi.md#closeticket) | **PATCH** /tickets/{id_ticket}/close | Close a ticket by ID
*TicketsApi* | [**createTicketMessage**](docs/Api/TicketsApi.md#createticketmessage) | **POST** /tickets/{id_ticket}/messages | Create a new message for the ticket
*TicketsApi* | [**getTicket**](docs/Api/TicketsApi.md#getticket) | **GET** /tickets/{id_ticket} | Get a ticket by ID
*TicketsApi* | [**getTicketMessages**](docs/Api/TicketsApi.md#getticketmessages) | **GET** /tickets/messages | Get a list of ticket messages
*TicketsApi* | [**getTickets**](docs/Api/TicketsApi.md#gettickets) | **GET** /tickets | Get a list of tickets
*TicketsApi* | [**openTicket**](docs/Api/TicketsApi.md#openticket) | **POST** /tickets | Open a ticket
*UnitsApi* | [**bulkUpdateUnits**](docs/Api/UnitsApi.md#bulkupdateunits) | **POST** /units/bulk | Update some fields of a given set of units
*UnitsApi* | [**createUnit**](docs/Api/UnitsApi.md#createunit) | **POST** /units | Add a unit
*UnitsApi* | [**deleteUnit**](docs/Api/UnitsApi.md#deleteunit) | **DELETE** /units/{id_unit} | Delete a unit
*UnitsApi* | [**getUnit**](docs/Api/UnitsApi.md#getunit) | **GET** /units/{id_unit} | Get a unit by ID
*UnitsApi* | [**getUnits**](docs/Api/UnitsApi.md#getunits) | **GET** /units | Get a list of your units
*UnitsApi* | [**patchUnit**](docs/Api/UnitsApi.md#patchunit) | **PATCH** /units/{id_unit} | Update some of the fields of a unit
*WarehousesApi* | [**createWarehouse**](docs/Api/WarehousesApi.md#createwarehouse) | **POST** /warehouses | Create a new Warehouse
*WarehousesApi* | [**deleteWarehouse**](docs/Api/WarehousesApi.md#deletewarehouse) | **DELETE** /warehouses/{id_warehouse} | Delete a warehouse
*WarehousesApi* | [**getWarehouse**](docs/Api/WarehousesApi.md#getwarehouse) | **GET** /warehouses/{id_warehouse} | Get a warehouse by its ID
*WarehousesApi* | [**getWarehouses**](docs/Api/WarehousesApi.md#getwarehouses) | **GET** /warehouses | Get a list of your Warehouses
*WarehousesApi* | [**updateWarehouse**](docs/Api/WarehousesApi.md#updatewarehouse) | **PUT** /warehouses/{id_warehouse} | Update a Warehouse

## Models

- [AccountListingReportVersion](docs/Model/AccountListingReportVersion.md)
- [AddShipmentRequest](docs/Model/AddShipmentRequest.md)
- [AddShipmentRequestShipmentInformation](docs/Model/AddShipmentRequestShipmentInformation.md)
- [Address](docs/Model/Address.md)
- [ApiResponse](docs/Model/ApiResponse.md)
- [ApiResponseAttribute](docs/Model/ApiResponseAttribute.md)
- [ApiResponseCarriers](docs/Model/ApiResponseCarriers.md)
- [ApiResponseCategoryTree](docs/Model/ApiResponseCategoryTree.md)
- [ApiResponseCategoryWithEmbedded](docs/Model/ApiResponseCategoryWithEmbedded.md)
- [ApiResponseCountryVatRatesArray](docs/Model/ApiResponseCountryVatRatesArray.md)
- [ApiResponseCreateShippingLabelResponse](docs/Model/ApiResponseCreateShippingLabelResponse.md)
- [ApiResponseImportFileInventoryCommand](docs/Model/ApiResponseImportFileInventoryCommand.md)
- [ApiResponseImportFileInventoryFeed](docs/Model/ApiResponseImportFileInventoryFeed.md)
- [ApiResponseImportFileOrderCommand](docs/Model/ApiResponseImportFileOrderCommand.md)
- [ApiResponseInfoLocaleObject](docs/Model/ApiResponseInfoLocaleObject.md)
- [ApiResponseInitializeReturn](docs/Model/ApiResponseInitializeReturn.md)
- [ApiResponseOffersRankings](docs/Model/ApiResponseOffersRankings.md)
- [ApiResponseOpenTicketResponse](docs/Model/ApiResponseOpenTicketResponse.md)
- [ApiResponseOrderDetails](docs/Model/ApiResponseOrderDetails.md)
- [ApiResponseOrderInvoice](docs/Model/ApiResponseOrderInvoice.md)
- [ApiResponseOrderUnitDetails](docs/Model/ApiResponseOrderUnitDetails.md)
- [ApiResponsePingMessage](docs/Model/ApiResponsePingMessage.md)
- [ApiResponseProductDataImportFileResponse](docs/Model/ApiResponseProductDataImportFileResponse.md)
- [ApiResponseProductDataObject](docs/Model/ApiResponseProductDataObject.md)
- [ApiResponseProductDataStatusResponse](docs/Model/ApiResponseProductDataStatusResponse.md)
- [ApiResponseProductWithEmbedded](docs/Model/ApiResponseProductWithEmbedded.md)
- [ApiResponseReport](docs/Model/ApiResponseReport.md)
- [ApiResponseRequestedReport](docs/Model/ApiResponseRequestedReport.md)
- [ApiResponseReturnDetails](docs/Model/ApiResponseReturnDetails.md)
- [ApiResponseReturnUnitDetails](docs/Model/ApiResponseReturnUnitDetails.md)
- [ApiResponseShippingGroup](docs/Model/ApiResponseShippingGroup.md)
- [ApiResponseString](docs/Model/ApiResponseString.md)
- [ApiResponseStringArray](docs/Model/ApiResponseStringArray.md)
- [ApiResponseSubscription](docs/Model/ApiResponseSubscription.md)
- [ApiResponseTicketWithEmbedded](docs/Model/ApiResponseTicketWithEmbedded.md)
- [ApiResponseUnit](docs/Model/ApiResponseUnit.md)
- [ApiResponseUpdateReturn](docs/Model/ApiResponseUpdateReturn.md)
- [ApiResponseWarehouse](docs/Model/ApiResponseWarehouse.md)
- [Attribute](docs/Model/Attribute.md)
- [BookingsReportVersion](docs/Model/BookingsReportVersion.md)
- [BuyboxCondition](docs/Model/BuyboxCondition.md)
- [BuyboxUnit](docs/Model/BuyboxUnit.md)
- [Buyer](docs/Model/Buyer.md)
- [CancellationType](docs/Model/CancellationType.md)
- [Carrier](docs/Model/Carrier.md)
- [Carriers](docs/Model/Carriers.md)
- [Category](docs/Model/Category.md)
- [CategoryBasic](docs/Model/CategoryBasic.md)
- [CategoryDecideBodyProduct](docs/Model/CategoryDecideBodyProduct.md)
- [CategoryDecideRequestBody](docs/Model/CategoryDecideRequestBody.md)
- [CategoryEmbeddable](docs/Model/CategoryEmbeddable.md)
- [CategoryTree](docs/Model/CategoryTree.md)
- [CategoryWithEmbedded](docs/Model/CategoryWithEmbedded.md)
- [CollectionApiResponseAttribute](docs/Model/CollectionApiResponseAttribute.md)
- [CollectionApiResponseCategory](docs/Model/CollectionApiResponseCategory.md)
- [CollectionApiResponseImportFileInventoryCommand](docs/Model/CollectionApiResponseImportFileInventoryCommand.md)
- [CollectionApiResponseImportFileInventoryFeed](docs/Model/CollectionApiResponseImportFileInventoryFeed.md)
- [CollectionApiResponseImportFileOrderCommand](docs/Model/CollectionApiResponseImportFileOrderCommand.md)
- [CollectionApiResponseOrder](docs/Model/CollectionApiResponseOrder.md)
- [CollectionApiResponseOrderInvoice](docs/Model/CollectionApiResponseOrderInvoice.md)
- [CollectionApiResponseOrderUnit](docs/Model/CollectionApiResponseOrderUnit.md)
- [CollectionApiResponseProductDataImportFileResponse](docs/Model/CollectionApiResponseProductDataImportFileResponse.md)
- [CollectionApiResponseProductWithEmbedded](docs/Model/CollectionApiResponseProductWithEmbedded.md)
- [CollectionApiResponseReport](docs/Model/CollectionApiResponseReport.md)
- [CollectionApiResponseReturn](docs/Model/CollectionApiResponseReturn.md)
- [CollectionApiResponseReturnUnit](docs/Model/CollectionApiResponseReturnUnit.md)
- [CollectionApiResponseSharedSet](docs/Model/CollectionApiResponseSharedSet.md)
- [CollectionApiResponseShippingGroup](docs/Model/CollectionApiResponseShippingGroup.md)
- [CollectionApiResponseSubscription](docs/Model/CollectionApiResponseSubscription.md)
- [CollectionApiResponseTicket](docs/Model/CollectionApiResponseTicket.md)
- [CollectionApiResponseTicketMessage](docs/Model/CollectionApiResponseTicketMessage.md)
- [CollectionApiResponseUnitEmbedded](docs/Model/CollectionApiResponseUnitEmbedded.md)
- [CollectionApiResponseWarehouse](docs/Model/CollectionApiResponseWarehouse.md)
- [ComplianceContact](docs/Model/ComplianceContact.md)
- [CountryVatRates](docs/Model/CountryVatRates.md)
- [CreateShippingLabelRequest](docs/Model/CreateShippingLabelRequest.md)
- [CreateShippingLabelResponse](docs/Model/CreateShippingLabelResponse.md)
- [CreateTicketMessageRequest](docs/Model/CreateTicketMessageRequest.md)
- [Currency](docs/Model/Currency.md)
- [Delivery](docs/Model/Delivery.md)
- [ErrorDetails](docs/Model/ErrorDetails.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [FulfillmentType](docs/Model/FulfillmentType.md)
- [ImportFileInventoryCommand](docs/Model/ImportFileInventoryCommand.md)
- [ImportFileInventoryCommandPostRequest](docs/Model/ImportFileInventoryCommandPostRequest.md)
- [ImportFileInventoryFeed](docs/Model/ImportFileInventoryFeed.md)
- [ImportFileInventoryFeedPostRequest](docs/Model/ImportFileInventoryFeedPostRequest.md)
- [ImportFileOrderCommand](docs/Model/ImportFileOrderCommand.md)
- [ImportFileOrderCommandPostRequest](docs/Model/ImportFileOrderCommandPostRequest.md)
- [ImportFileRequestBody](docs/Model/ImportFileRequestBody.md)
- [ImportFilesSortBy](docs/Model/ImportFilesSortBy.md)
- [ImportStatus](docs/Model/ImportStatus.md)
- [ImportType](docs/Model/ImportType.md)
- [InitializeReturn](docs/Model/InitializeReturn.md)
- [InitializeReturnRequest](docs/Model/InitializeReturnRequest.md)
- [Locale](docs/Model/Locale.md)
- [ModelReturn](docs/Model/ModelReturn.md)
- [NotFoundResponse](docs/Model/NotFoundResponse.md)
- [OffersRankings](docs/Model/OffersRankings.md)
- [OpenTicketRequest](docs/Model/OpenTicketRequest.md)
- [OpenTicketResponse](docs/Model/OpenTicketResponse.md)
- [Order](docs/Model/Order.md)
- [OrderDetails](docs/Model/OrderDetails.md)
- [OrderDetailsOrderUnitsInner](docs/Model/OrderDetailsOrderUnitsInner.md)
- [OrderEmbeddable](docs/Model/OrderEmbeddable.md)
- [OrderInvoice](docs/Model/OrderInvoice.md)
- [OrderInvoiceUploadRequest](docs/Model/OrderInvoiceUploadRequest.md)
- [OrderUnit](docs/Model/OrderUnit.md)
- [OrderUnitCancelReason](docs/Model/OrderUnitCancelReason.md)
- [OrderUnitCancelRequest](docs/Model/OrderUnitCancelRequest.md)
- [OrderUnitDetails](docs/Model/OrderUnitDetails.md)
- [OrderUnitDetailsReturnUnit](docs/Model/OrderUnitDetailsReturnUnit.md)
- [OrderUnitEmbeddable](docs/Model/OrderUnitEmbeddable.md)
- [OrderUnitRefundReason](docs/Model/OrderUnitRefundReason.md)
- [OrderUnitRefundRequest](docs/Model/OrderUnitRefundRequest.md)
- [OrderUnitSendRequest](docs/Model/OrderUnitSendRequest.md)
- [OrderUnitStatus](docs/Model/OrderUnitStatus.md)
- [PackageMeasurements](docs/Model/PackageMeasurements.md)
- [Pagination](docs/Model/Pagination.md)
- [PartialPickSubscriptionCallbackUrlOrFallbackEmailOrEventNameOrIsActiveOrStorefront](docs/Model/PartialPickSubscriptionCallbackUrlOrFallbackEmailOrEventNameOrIsActiveOrStorefront.md)
- [PickSubscriptionCallbackUrlOrFallbackEmailOrEventName](docs/Model/PickSubscriptionCallbackUrlOrFallbackEmailOrEventName.md)
- [PickupLocation](docs/Model/PickupLocation.md)
- [PingMessage](docs/Model/PingMessage.md)
- [ProblemType](docs/Model/ProblemType.md)
- [Product](docs/Model/Product.md)
- [ProductDataAttributes](docs/Model/ProductDataAttributes.md)
- [ProductDataImportFileResponse](docs/Model/ProductDataImportFileResponse.md)
- [ProductDataImportFileSorting](docs/Model/ProductDataImportFileSorting.md)
- [ProductDataImportFileStatus](docs/Model/ProductDataImportFileStatus.md)
- [ProductDataLocale](docs/Model/ProductDataLocale.md)
- [ProductDataObject](docs/Model/ProductDataObject.md)
- [ProductDataStatus](docs/Model/ProductDataStatus.md)
- [ProductDataStatusAttribute](docs/Model/ProductDataStatusAttribute.md)
- [ProductDataStatusAttributeValueState](docs/Model/ProductDataStatusAttributeValueState.md)
- [ProductDataStatusProductNotReadyReason](docs/Model/ProductDataStatusProductNotReadyReason.md)
- [ProductDataStatusResponse](docs/Model/ProductDataStatusResponse.md)
- [ProductDataStatusUpdateFailReason](docs/Model/ProductDataStatusUpdateFailReason.md)
- [ProductEmbeddable](docs/Model/ProductEmbeddable.md)
- [ProductUnitEmbedded](docs/Model/ProductUnitEmbedded.md)
- [ProductUnitEmbeddedSeller](docs/Model/ProductUnitEmbeddedSeller.md)
- [ProductWithEmbedded](docs/Model/ProductWithEmbedded.md)
- [Report](docs/Model/Report.md)
- [ReportParameterValue](docs/Model/ReportParameterValue.md)
- [ReportsSorting](docs/Model/ReportsSorting.md)
- [RequestBookingsReportRequest](docs/Model/RequestBookingsReportRequest.md)
- [RequestNewSalesReportRequest](docs/Model/RequestNewSalesReportRequest.md)
- [RequestProductDataImportFileErrorsReportRequest](docs/Model/RequestProductDataImportFileErrorsReportRequest.md)
- [RequestedReport](docs/Model/RequestedReport.md)
- [ReturnDetails](docs/Model/ReturnDetails.md)
- [ReturnEmbeddable](docs/Model/ReturnEmbeddable.md)
- [ReturnReason](docs/Model/ReturnReason.md)
- [ReturnStatus](docs/Model/ReturnStatus.md)
- [ReturnUnit](docs/Model/ReturnUnit.md)
- [ReturnUnitClarifyRequest](docs/Model/ReturnUnitClarifyRequest.md)
- [ReturnUnitDetails](docs/Model/ReturnUnitDetails.md)
- [ReturnUnitEmbeddable](docs/Model/ReturnUnitEmbeddable.md)
- [ReturnUnitRejectRequest](docs/Model/ReturnUnitRejectRequest.md)
- [ReturnUnitStatus](docs/Model/ReturnUnitStatus.md)
- [SellerApiShippingGroupRegionOptionNameEnum](docs/Model/SellerApiShippingGroupRegionOptionNameEnum.md)
- [SellerApiShippingGroupType](docs/Model/SellerApiShippingGroupType.md)
- [SellerApiWarehouseType](docs/Model/SellerApiWarehouseType.md)
- [SharedSet](docs/Model/SharedSet.md)
- [ShippingGroup](docs/Model/ShippingGroup.md)
- [ShippingGroupOption](docs/Model/ShippingGroupOption.md)
- [ShippingGroupRegion](docs/Model/ShippingGroupRegion.md)
- [Storefront](docs/Model/Storefront.md)
- [Subscription](docs/Model/Subscription.md)
- [SubscriptionEventName](docs/Model/SubscriptionEventName.md)
- [Ticket](docs/Model/Ticket.md)
- [TicketEmbeddable](docs/Model/TicketEmbeddable.md)
- [TicketFile](docs/Model/TicketFile.md)
- [TicketMessage](docs/Model/TicketMessage.md)
- [TicketMessageAuthor](docs/Model/TicketMessageAuthor.md)
- [TicketMessageFile](docs/Model/TicketMessageFile.md)
- [TicketMessagesSort](docs/Model/TicketMessagesSort.md)
- [TicketReason](docs/Model/TicketReason.md)
- [TicketStatus](docs/Model/TicketStatus.md)
- [TicketTopic](docs/Model/TicketTopic.md)
- [TicketWithEmbedded](docs/Model/TicketWithEmbedded.md)
- [TicketWithEmbeddedBuyer](docs/Model/TicketWithEmbeddedBuyer.md)
- [TicketWithEmbeddedProduct](docs/Model/TicketWithEmbeddedProduct.md)
- [TicketsSort](docs/Model/TicketsSort.md)
- [Unit](docs/Model/Unit.md)
- [UnitCondition](docs/Model/UnitCondition.md)
- [UnitEmbedded](docs/Model/UnitEmbedded.md)
- [UnitEmbeddedEnum](docs/Model/UnitEmbeddedEnum.md)
- [UnitPatchRequest](docs/Model/UnitPatchRequest.md)
- [UnitRequest](docs/Model/UnitRequest.md)
- [UnitRequestCondition](docs/Model/UnitRequestCondition.md)
- [UnitStatuses](docs/Model/UnitStatuses.md)
- [UnitsBulkUpdateErrorDetail](docs/Model/UnitsBulkUpdateErrorDetail.md)
- [UnitsBulkUpdateErrorDetails](docs/Model/UnitsBulkUpdateErrorDetails.md)
- [UnitsBulkUpdateInternalError](docs/Model/UnitsBulkUpdateInternalError.md)
- [UnitsBulkUpdateRequest](docs/Model/UnitsBulkUpdateRequest.md)
- [UnitsBulkUpdateResponse](docs/Model/UnitsBulkUpdateResponse.md)
- [UnitsBulkUpdateResponseDataInner](docs/Model/UnitsBulkUpdateResponseDataInner.md)
- [UnitsBulkUpdatedUnit](docs/Model/UnitsBulkUpdatedUnit.md)
- [UpdateReturn](docs/Model/UpdateReturn.md)
- [UpdateReturnRequest](docs/Model/UpdateReturnRequest.md)
- [VatIndicator](docs/Model/VatIndicator.md)
- [VatRate](docs/Model/VatRate.md)
- [Warehouse](docs/Model/Warehouse.md)
- [WarehouseAddress](docs/Model/WarehouseAddress.md)
- [WarehouseAddressRequest](docs/Model/WarehouseAddressRequest.md)
- [WarehouseBodyRequest](docs/Model/WarehouseBodyRequest.md)
- [WriteableUnitStatuses](docs/Model/WriteableUnitStatuses.md)
- [WriteableVatIndicator](docs/Model/WriteableVatIndicator.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

seller-api-support@kaufland-online.de

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.17.2`
    - Generator version: `7.5.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
