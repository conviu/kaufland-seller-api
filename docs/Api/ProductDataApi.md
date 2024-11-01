# KauflandSellerApi\ProductDataApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductData()**](ProductDataApi.md#createProductData) | **PUT** /product-data | Add new product data for an EAN or replace your existing one
[**createProductDataFile()**](ProductDataApi.md#createProductDataFile) | **POST** /product-data/import-files | Add an import file URL
[**deleteProductData()**](ProductDataApi.md#deleteProductData) | **DELETE** /product-data/{ean} | Delete your product data for an EAN
[**getProductData()**](ProductDataApi.md#getProductData) | **GET** /product-data/{ean} | Get your product data for an EAN
[**getProductDataFile()**](ProductDataApi.md#getProductDataFile) | **GET** /product-data/import-files/{id_import_file} | Get import file by ID
[**getProductDataFileList()**](ProductDataApi.md#getProductDataFileList) | **GET** /product-data/import-files | Get import files
[**getProductDataStatus()**](ProductDataApi.md#getProductDataStatus) | **GET** /product-data/status/{ean} | Get the process status for your product data
[**updateProductData()**](ProductDataApi.md#updateProductData) | **PATCH** /product-data | Update existing product data for an EAN


## `createProductData()`

```php
createProductData($locale, $product_data_object): \KauflandSellerApi\Model\ApiResponse
```

Add new product data for an EAN or replace your existing one

Add new product data for an EAN or replace your existing one. The API expects to receive each attribute key only once. If you send the same attribute key multiple times, only the last value will be used. For attributes that can have multiple values (for example: picture), you can send an array of values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$locale = new \KauflandSellerApi\Model\Locale(); // Locale | The language code of the product data (ISO 3166-2)
$product_data_object = {"ean":["4009750243800"],"attributes":{"title":["Chocolat"],"description":["In einem verschlafenen Städtchen in Frankreich im Jahr 1959. ...Doch am Ende zählt nur eins: Die pure Lust am Leben!"],"picture":["https://media.cdn.kaufland.de/product-images/1024x1024/883b961019d9ec22e56719f5a9f3ad22.jpg"],"product_safety_contact":{"name":"Musterbetrieb","email_address":"someone@example.net","address":"Musterstraße 1, Musterstadt, 12345, DE","phone_number":"+491234567890"}}}; // \KauflandSellerApi\Model\ProductDataObject | JSON contains ean and attributes. Attributes contain all attributes with values

try {
    $result = $apiInstance->createProductData($locale, $product_data_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->createProductData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locale** | [**Locale**](../Model/.md)| The language code of the product data (ISO 3166-2) |
 **product_data_object** | [**\KauflandSellerApi\Model\ProductDataObject**](../Model/ProductDataObject.md)| JSON contains ean and attributes. Attributes contain all attributes with values |

### Return type

[**\KauflandSellerApi\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProductDataFile()`

```php
createProductDataFile($import_file_request_body): \KauflandSellerApi\Model\ApiResponseProductDataImportFileResponse
```

Add an import file URL

Saves an URL where a new import file is located. The file located at the URL will be downloaded and processed asynchronously and the contents imported. For the upload of product feed data there is a limit of 30 feeds per day, so please combine data for multiple products in one CSV file if possible.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$import_file_request_body = {"url":"http://www.example.com/my_products.csv"}; // \KauflandSellerApi\Model\ImportFileRequestBody | Json object with import file data

try {
    $result = $apiInstance->createProductDataFile($import_file_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->createProductDataFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **import_file_request_body** | [**\KauflandSellerApi\Model\ImportFileRequestBody**](../Model/ImportFileRequestBody.md)| Json object with import file data |

### Return type

[**\KauflandSellerApi\Model\ApiResponseProductDataImportFileResponse**](../Model/ApiResponseProductDataImportFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductData()`

```php
deleteProductData($ean, $locale): \KauflandSellerApi\Model\ApiResponse
```

Delete your product data for an EAN

Delete the product data that you provided for a specific product via its EAN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$ean = 4009750243800; // string | European Article Number with 13, 14 or 15 digits
$locale = new \KauflandSellerApi\Model\Locale(); // Locale | The language code of the product data (ISO 3166-2)

try {
    $result = $apiInstance->deleteProductData($ean, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->deleteProductData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| European Article Number with 13, 14 or 15 digits |
 **locale** | [**Locale**](../Model/.md)| The language code of the product data (ISO 3166-2) |

### Return type

[**\KauflandSellerApi\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductData()`

```php
getProductData($ean, $locale): \KauflandSellerApi\Model\ApiResponseProductDataObject
```

Get your product data for an EAN

Get the product data that you provided for a specific product via its EAN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$ean = 4009750243800; // string | European Article Number with 13, 14 or 15 digits
$locale = new \KauflandSellerApi\Model\Locale(); // Locale | The language code of the product data (ISO 3166-2)

try {
    $result = $apiInstance->getProductData($ean, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->getProductData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| European Article Number with 13, 14 or 15 digits |
 **locale** | [**Locale**](../Model/.md)| The language code of the product data (ISO 3166-2) |

### Return type

[**\KauflandSellerApi\Model\ApiResponseProductDataObject**](../Model/ApiResponseProductDataObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductDataFile()`

```php
getProductDataFile($id_import_file): \KauflandSellerApi\Model\ApiResponseProductDataImportFileResponse
```

Get import file by ID

Get an import file by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_import_file = 56; // int

try {
    $result = $apiInstance->getProductDataFile($id_import_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->getProductDataFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_import_file** | **int**|  |

### Return type

[**\KauflandSellerApi\Model\ApiResponseProductDataImportFileResponse**](../Model/ApiResponseProductDataImportFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductDataFileList()`

```php
getProductDataFileList($status, $ts_created, $ts_updated, $sort, $limit, $offset): \KauflandSellerApi\Model\CollectionApiResponseProductDataImportFileResponse
```

Get import files

Get a list of all your import files. You can narrow down the search using various parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$status = new \KauflandSellerApi\Model\ProductDataImportFileStatus(); // ProductDataImportFileStatus | The status of your import
$ts_created = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Creation timestamp of the import file in ISO 8601
$ts_updated = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Update timestamp of the import file in ISO 8601
$sort = new \KauflandSellerApi\Model\ProductDataImportFileSorting(); // ProductDataImportFileSorting | Select the field (time created or time updated) and the direction of sorting (ascending or descending)
$limit = 56; // int | Desired size of result set. Max: 100
$offset = 56; // int | Offset applied to result set

try {
    $result = $apiInstance->getProductDataFileList($status, $ts_created, $ts_updated, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->getProductDataFileList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**ProductDataImportFileStatus**](../Model/.md)| The status of your import | [optional]
 **ts_created** | **\DateTime**| Creation timestamp of the import file in ISO 8601 | [optional]
 **ts_updated** | **\DateTime**| Update timestamp of the import file in ISO 8601 | [optional]
 **sort** | [**ProductDataImportFileSorting**](../Model/.md)| Select the field (time created or time updated) and the direction of sorting (ascending or descending) | [optional]
 **limit** | **int**| Desired size of result set. Max: 100 | [optional]
 **offset** | **int**| Offset applied to result set | [optional]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseProductDataImportFileResponse**](../Model/CollectionApiResponseProductDataImportFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductDataStatus()`

```php
getProductDataStatus($ean, $locale): \KauflandSellerApi\Model\ApiResponseProductDataStatusResponse
```

Get the process status for your product data

Get the process status for your provided product data via EAN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$ean = 4009750243800; // string | European Article Number with 13, 14 or 15 digits
$locale = new \KauflandSellerApi\Model\Locale(); // Locale | The language code of the product data (ISO 3166-2)

try {
    $result = $apiInstance->getProductDataStatus($ean, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->getProductDataStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| European Article Number with 13, 14 or 15 digits |
 **locale** | [**Locale**](../Model/.md)| The language code of the product data (ISO 3166-2) |

### Return type

[**\KauflandSellerApi\Model\ApiResponseProductDataStatusResponse**](../Model/ApiResponseProductDataStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductData()`

```php
updateProductData($locale, $product_data_object): \KauflandSellerApi\Model\ApiResponse
```

Update existing product data for an EAN

Add product data for a specific product (this will overwrite already provided values). The API expects to receive each attribute key only once. If you send the same attribute key multiple times, only the last value will be used. For attributes that can have multiple values (for example: picture), you can send an array of values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$locale = new \KauflandSellerApi\Model\Locale(); // Locale | The language code of the product data (ISO 3166-2)
$product_data_object = {"ean":["4009750243800"],"attributes":{"description":["Another description..."]}}; // \KauflandSellerApi\Model\ProductDataObject | JSON contains ean and attributes. Attributes contain all attributes with values JSON can contain ean and attributes. Attributes contain all attributes with values

try {
    $result = $apiInstance->updateProductData($locale, $product_data_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->updateProductData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locale** | [**Locale**](../Model/.md)| The language code of the product data (ISO 3166-2) |
 **product_data_object** | [**\KauflandSellerApi\Model\ProductDataObject**](../Model/ProductDataObject.md)| JSON contains ean and attributes. Attributes contain all attributes with values JSON can contain ean and attributes. Attributes contain all attributes with values |

### Return type

[**\KauflandSellerApi\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
