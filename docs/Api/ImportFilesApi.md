# KauflandSellerApi\ImportFilesApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInventoryCommandImportFile()**](ImportFilesApi.md#createInventoryCommandImportFile) | **POST** /import-files/inventory-command | Add an INVENTORY_COMMAND file URL
[**createInventoryFeedImportFile()**](ImportFilesApi.md#createInventoryFeedImportFile) | **POST** /import-files/inventory-feed | Add an INVENTORY_FEED file URL
[**createOrderCommandImportFile()**](ImportFilesApi.md#createOrderCommandImportFile) | **POST** /import-files/order-command | Add an ORDER_COMMAND file URL
[**getInventoryCommandImportFile()**](ImportFilesApi.md#getInventoryCommandImportFile) | **GET** /import-files/inventory-command/{id_import_file} | Get an inventory command import file by ID
[**getInventoryCommandImportFiles()**](ImportFilesApi.md#getInventoryCommandImportFiles) | **GET** /import-files/inventory-command | Get a list of your inventory command import files
[**getInventoryFeedImportFile()**](ImportFilesApi.md#getInventoryFeedImportFile) | **GET** /import-files/inventory-feed/{id_import_file} | Get an inventory feed import file by ID
[**getInventoryFeedImportFiles()**](ImportFilesApi.md#getInventoryFeedImportFiles) | **GET** /import-files/inventory-feed | Get a list of your inventory feed import files
[**getOrderCommandImportFile()**](ImportFilesApi.md#getOrderCommandImportFile) | **GET** /import-files/order-command/{id_import_file} | Get an order command import file by ID
[**getOrderCommandImportFiles()**](ImportFilesApi.md#getOrderCommandImportFiles) | **GET** /import-files/order-command | Get a list of your order command import files


## `createInventoryCommandImportFile()`

```php
createInventoryCommandImportFile($storefront, $import_file_inventory_command_post_request): \KauflandSellerApi\Model\ApiResponseImportFileInventoryCommand
```

Add an INVENTORY_COMMAND file URL

Saves an URL where a new import file is located. The file located at the URL will be downloaded and processed asynchronously and the contents imported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$import_file_inventory_command_post_request = new \KauflandSellerApi\Model\ImportFileInventoryCommandPostRequest(); // \KauflandSellerApi\Model\ImportFileInventoryCommandPostRequest

try {
    $result = $apiInstance->createInventoryCommandImportFile($storefront, $import_file_inventory_command_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->createInventoryCommandImportFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **import_file_inventory_command_post_request** | [**\KauflandSellerApi\Model\ImportFileInventoryCommandPostRequest**](../Model/ImportFileInventoryCommandPostRequest.md)|  |

### Return type

[**\KauflandSellerApi\Model\ApiResponseImportFileInventoryCommand**](../Model/ApiResponseImportFileInventoryCommand.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInventoryFeedImportFile()`

```php
createInventoryFeedImportFile($storefront, $import_file_inventory_feed_post_request): \KauflandSellerApi\Model\ApiResponseImportFileInventoryFeed
```

Add an INVENTORY_FEED file URL

Saves an URL where a new import file is located. The file located at the URL will be downloaded and processed asynchronously and the contents imported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$import_file_inventory_feed_post_request = new \KauflandSellerApi\Model\ImportFileInventoryFeedPostRequest(); // \KauflandSellerApi\Model\ImportFileInventoryFeedPostRequest

try {
    $result = $apiInstance->createInventoryFeedImportFile($storefront, $import_file_inventory_feed_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->createInventoryFeedImportFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **import_file_inventory_feed_post_request** | [**\KauflandSellerApi\Model\ImportFileInventoryFeedPostRequest**](../Model/ImportFileInventoryFeedPostRequest.md)|  |

### Return type

[**\KauflandSellerApi\Model\ApiResponseImportFileInventoryFeed**](../Model/ApiResponseImportFileInventoryFeed.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrderCommandImportFile()`

```php
createOrderCommandImportFile($import_file_order_command_post_request): \KauflandSellerApi\Model\ApiResponseImportFileOrderCommand
```

Add an ORDER_COMMAND file URL

Saves an URL where a new import file is located. The file located at the URL will be downloaded and processed asynchronously and the contents imported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$import_file_order_command_post_request = new \KauflandSellerApi\Model\ImportFileOrderCommandPostRequest(); // \KauflandSellerApi\Model\ImportFileOrderCommandPostRequest

try {
    $result = $apiInstance->createOrderCommandImportFile($import_file_order_command_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->createOrderCommandImportFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **import_file_order_command_post_request** | [**\KauflandSellerApi\Model\ImportFileOrderCommandPostRequest**](../Model/ImportFileOrderCommandPostRequest.md)|  |

### Return type

[**\KauflandSellerApi\Model\ApiResponseImportFileOrderCommand**](../Model/ApiResponseImportFileOrderCommand.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInventoryCommandImportFile()`

```php
getInventoryCommandImportFile($storefront, $id_import_file): \KauflandSellerApi\Model\ApiResponseImportFileInventoryCommand
```

Get an inventory command import file by ID

Get an inventory command import file by its <code>id_import_file</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$id_import_file = 56; // int | Internal ID of Import File

try {
    $result = $apiInstance->getInventoryCommandImportFile($storefront, $id_import_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->getInventoryCommandImportFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **id_import_file** | **int**| Internal ID of Import File |

### Return type

[**\KauflandSellerApi\Model\ApiResponseImportFileInventoryCommand**](../Model/ApiResponseImportFileInventoryCommand.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInventoryCommandImportFiles()`

```php
getInventoryCommandImportFiles($storefront, $status, $ts_created_iso, $ts_updated_iso, $sort, $limit, $offset): \KauflandSellerApi\Model\CollectionApiResponseImportFileInventoryCommand
```

Get a list of your inventory command import files

Get a list of your inventory command import files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$status = new \KauflandSellerApi\Model\ImportStatus(); // ImportStatus | File status filter
$ts_created_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$ts_updated_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$sort = new \KauflandSellerApi\Model\ImportFilesSortBy(); // ImportFilesSortBy
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getInventoryCommandImportFiles($storefront, $status, $ts_created_iso, $ts_updated_iso, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->getInventoryCommandImportFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **status** | [**ImportStatus**](../Model/.md)| File status filter | [optional]
 **ts_created_iso** | **\DateTime**|  | [optional]
 **ts_updated_iso** | **\DateTime**|  | [optional]
 **sort** | [**ImportFilesSortBy**](../Model/.md)|  | [optional]
 **limit** | **int**| Desired size of result set | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set | [optional] [default to 0]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseImportFileInventoryCommand**](../Model/CollectionApiResponseImportFileInventoryCommand.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInventoryFeedImportFile()`

```php
getInventoryFeedImportFile($storefront, $id_import_file): \KauflandSellerApi\Model\ApiResponseImportFileInventoryFeed
```

Get an inventory feed import file by ID

Get an inventory feed import file by its <code>id_import_file</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$id_import_file = 56; // int | Internal ID of Import File

try {
    $result = $apiInstance->getInventoryFeedImportFile($storefront, $id_import_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->getInventoryFeedImportFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **id_import_file** | **int**| Internal ID of Import File |

### Return type

[**\KauflandSellerApi\Model\ApiResponseImportFileInventoryFeed**](../Model/ApiResponseImportFileInventoryFeed.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInventoryFeedImportFiles()`

```php
getInventoryFeedImportFiles($storefront, $status, $ts_created_iso, $ts_updated_iso, $sort, $limit, $offset): \KauflandSellerApi\Model\CollectionApiResponseImportFileInventoryFeed
```

Get a list of your inventory feed import files

Get a list of your inventory feed import files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$status = new \KauflandSellerApi\Model\ImportStatus(); // ImportStatus | File status filter
$ts_created_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$ts_updated_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$sort = new \KauflandSellerApi\Model\ImportFilesSortBy(); // ImportFilesSortBy
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getInventoryFeedImportFiles($storefront, $status, $ts_created_iso, $ts_updated_iso, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->getInventoryFeedImportFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **status** | [**ImportStatus**](../Model/.md)| File status filter | [optional]
 **ts_created_iso** | **\DateTime**|  | [optional]
 **ts_updated_iso** | **\DateTime**|  | [optional]
 **sort** | [**ImportFilesSortBy**](../Model/.md)|  | [optional]
 **limit** | **int**| Desired size of result set | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set | [optional] [default to 0]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseImportFileInventoryFeed**](../Model/CollectionApiResponseImportFileInventoryFeed.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderCommandImportFile()`

```php
getOrderCommandImportFile($id_import_file): \KauflandSellerApi\Model\ApiResponseImportFileOrderCommand
```

Get an order command import file by ID

Get an order command import file by its <code>id_import_file</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_import_file = 56; // int | Internal ID of Import File

try {
    $result = $apiInstance->getOrderCommandImportFile($id_import_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->getOrderCommandImportFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_import_file** | **int**| Internal ID of Import File |

### Return type

[**\KauflandSellerApi\Model\ApiResponseImportFileOrderCommand**](../Model/ApiResponseImportFileOrderCommand.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderCommandImportFiles()`

```php
getOrderCommandImportFiles($status, $ts_created_iso, $ts_updated_iso, $sort, $limit, $offset): \KauflandSellerApi\Model\CollectionApiResponseImportFileOrderCommand
```

Get a list of your order command import files

Get a list of your order command import files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$status = new \KauflandSellerApi\Model\ImportStatus(); // ImportStatus | File status filter
$ts_created_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$ts_updated_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$sort = new \KauflandSellerApi\Model\ImportFilesSortBy(); // ImportFilesSortBy
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getOrderCommandImportFiles($status, $ts_created_iso, $ts_updated_iso, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->getOrderCommandImportFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**ImportStatus**](../Model/.md)| File status filter | [optional]
 **ts_created_iso** | **\DateTime**|  | [optional]
 **ts_updated_iso** | **\DateTime**|  | [optional]
 **sort** | [**ImportFilesSortBy**](../Model/.md)|  | [optional]
 **limit** | **int**| Desired size of result set | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set | [optional] [default to 0]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseImportFileOrderCommand**](../Model/CollectionApiResponseImportFileOrderCommand.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
