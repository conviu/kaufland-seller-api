# KauflandSellerApi\WarehousesApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWarehouse()**](WarehousesApi.md#createWarehouse) | **POST** /warehouses | Create a new Warehouse
[**deleteWarehouse()**](WarehousesApi.md#deleteWarehouse) | **DELETE** /warehouses/{id_warehouse} | Delete a warehouse
[**getWarehouse()**](WarehousesApi.md#getWarehouse) | **GET** /warehouses/{id_warehouse} | Get a warehouse by its ID
[**getWarehouses()**](WarehousesApi.md#getWarehouses) | **GET** /warehouses | Get a list of your Warehouses
[**updateWarehouse()**](WarehousesApi.md#updateWarehouse) | **PUT** /warehouses/{id_warehouse} | Update a Warehouse


## `createWarehouse()`

```php
createWarehouse($warehouse_body_request): \KauflandSellerApi\Model\ApiResponseWarehouse
```

Create a new Warehouse

Create a new warehouse.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$warehouse_body_request = new \KauflandSellerApi\Model\WarehouseBodyRequest(); // \KauflandSellerApi\Model\WarehouseBodyRequest | Information about the warehouse that will be generated

try {
    $result = $apiInstance->createWarehouse($warehouse_body_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->createWarehouse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_body_request** | [**\KauflandSellerApi\Model\WarehouseBodyRequest**](../Model/WarehouseBodyRequest.md)| Information about the warehouse that will be generated |

### Return type

[**\KauflandSellerApi\Model\ApiResponseWarehouse**](../Model/ApiResponseWarehouse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWarehouse()`

```php
deleteWarehouse($id_warehouse)
```

Delete a warehouse

Delete a warehouse.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_warehouse = 56; // int | Internal ID of Warehouse, unique across all Warehouses

try {
    $apiInstance->deleteWarehouse($id_warehouse);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->deleteWarehouse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_warehouse** | **int**| Internal ID of Warehouse, unique across all Warehouses |

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

## `getWarehouse()`

```php
getWarehouse($id_warehouse): \KauflandSellerApi\Model\ApiResponseWarehouse
```

Get a warehouse by its ID

Gets a warehouse by <code>id_warehouse</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_warehouse = 56; // int | Internal ID of Warehouse, unique across all Warehouses

try {
    $result = $apiInstance->getWarehouse($id_warehouse);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->getWarehouse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_warehouse** | **int**| Internal ID of Warehouse, unique across all Warehouses |

### Return type

[**\KauflandSellerApi\Model\ApiResponseWarehouse**](../Model/ApiResponseWarehouse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWarehouses()`

```php
getWarehouses($limit, $offset): \KauflandSellerApi\Model\CollectionApiResponseWarehouse
```

Get a list of your Warehouses

Get a list of your warehouses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getWarehouses($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->getWarehouses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Desired size of result set | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set | [optional] [default to 0]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseWarehouse**](../Model/CollectionApiResponseWarehouse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWarehouse()`

```php
updateWarehouse($id_warehouse, $warehouse_body_request): \KauflandSellerApi\Model\ApiResponseWarehouse
```

Update a Warehouse

Update a warehouse.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_warehouse = 56; // int | Internal ID of Warehouse, unique across all Warehouses
$warehouse_body_request = new \KauflandSellerApi\Model\WarehouseBodyRequest(); // \KauflandSellerApi\Model\WarehouseBodyRequest | Update Object

try {
    $result = $apiInstance->updateWarehouse($id_warehouse, $warehouse_body_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->updateWarehouse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_warehouse** | **int**| Internal ID of Warehouse, unique across all Warehouses |
 **warehouse_body_request** | [**\KauflandSellerApi\Model\WarehouseBodyRequest**](../Model/WarehouseBodyRequest.md)| Update Object |

### Return type

[**\KauflandSellerApi\Model\ApiResponseWarehouse**](../Model/ApiResponseWarehouse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
