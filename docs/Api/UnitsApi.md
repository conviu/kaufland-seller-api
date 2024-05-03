# KauflandSellerApi\UnitsApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkUpdateUnits()**](UnitsApi.md#bulkUpdateUnits) | **POST** /units/bulk | Update some fields of a given set of units
[**createUnit()**](UnitsApi.md#createUnit) | **POST** /units | Add a unit
[**deleteUnit()**](UnitsApi.md#deleteUnit) | **DELETE** /units/{id_unit} | Delete a unit
[**getUnit()**](UnitsApi.md#getUnit) | **GET** /units/{id_unit} | Get a unit by ID
[**getUnits()**](UnitsApi.md#getUnits) | **GET** /units | Get a list of your units
[**patchUnit()**](UnitsApi.md#patchUnit) | **PATCH** /units/{id_unit} | Update some of the fields of a unit


## `bulkUpdateUnits()`

```php
bulkUpdateUnits($storefront, $units_bulk_update_request): \KauflandSellerApi\Model\UnitsBulkUpdateResponse
```

Update some fields of a given set of units

Update some fields of a given set of units. Please notice that you have to specify a listing price greater than zero.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$units_bulk_update_request = array(new \KauflandSellerApi\Model\UnitsBulkUpdateRequest()); // \KauflandSellerApi\Model\UnitsBulkUpdateRequest[] | Update Object

try {
    $result = $apiInstance->bulkUpdateUnits($storefront, $units_bulk_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->bulkUpdateUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **units_bulk_update_request** | [**\KauflandSellerApi\Model\UnitsBulkUpdateRequest[]**](../Model/UnitsBulkUpdateRequest.md)| Update Object |

### Return type

[**\KauflandSellerApi\Model\UnitsBulkUpdateResponse**](../Model/UnitsBulkUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUnit()`

```php
createUnit($storefront, $unit_request): \KauflandSellerApi\Model\ApiResponseUnit
```

Add a unit

Add a new unit for an existing product. You must specify either an <code>id_product</code> or an <code>ean</code> (or both), to identify the product to which the unit belongs. Please notice that you have to specify a listing price greater than zero.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$unit_request = new \KauflandSellerApi\Model\UnitRequest(); // \KauflandSellerApi\Model\UnitRequest | Information about the unit that will be generated

try {
    $result = $apiInstance->createUnit($storefront, $unit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->createUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **unit_request** | [**\KauflandSellerApi\Model\UnitRequest**](../Model/UnitRequest.md)| Information about the unit that will be generated |

### Return type

[**\KauflandSellerApi\Model\ApiResponseUnit**](../Model/ApiResponseUnit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUnit()`

```php
deleteUnit($id_unit, $storefront)
```

Delete a unit

Delete a unit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_unit = 56; // int | Internal ID of Unit, unique across all Units
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront

try {
    $apiInstance->deleteUnit($id_unit, $storefront);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->deleteUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_unit** | **int**| Internal ID of Unit, unique across all Units |
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |

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

## `getUnit()`

```php
getUnit($id_unit, $storefront, $embedded): \KauflandSellerApi\Model\ApiResponseUnit
```

Get a unit by ID

Get a unit by its <code>id_unit</code>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_unit = 56; // int | Internal ID of Unit, unique across all Units
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$embedded = array(new \KauflandSellerApi\Model\\KauflandSellerApi\Model\UnitEmbeddedEnum()); // \KauflandSellerApi\Model\UnitEmbeddedEnum[]

try {
    $result = $apiInstance->getUnit($id_unit, $storefront, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->getUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_unit** | **int**| Internal ID of Unit, unique across all Units |
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **embedded** | [**\KauflandSellerApi\Model\UnitEmbeddedEnum[]**](../Model/\KauflandSellerApi\Model\UnitEmbeddedEnum.md)|  | [optional]

### Return type

[**\KauflandSellerApi\Model\ApiResponseUnit**](../Model/ApiResponseUnit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUnits()`

```php
getUnits($storefront, $limit, $offset, $id_offer, $id_product, $ean, $embedded, $fulfillment_type): \KauflandSellerApi\Model\CollectionApiResponseUnitEmbedded
```

Get a list of your units

Get a list of your units. Note that there may a delay of up to several minutes between adding a new unit and when it will be available through this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$limit = 30; // int | Desired size of result set, maximum is 100
$offset = 0; // int | Offset applied to result set
$id_offer = 'id_offer_example'; // string | Provided ID of your stock
$id_product = 56; // int | Our internal id_product
$ean = 'ean_example'; // string | EAN, 13 or 14 digits
$embedded = array(new \KauflandSellerApi\Model\\KauflandSellerApi\Model\UnitEmbeddedEnum()); // \KauflandSellerApi\Model\UnitEmbeddedEnum[]
$fulfillment_type = array(new \KauflandSellerApi\Model\\KauflandSellerApi\Model\FulfillmentType()); // \KauflandSellerApi\Model\FulfillmentType[] | Get only units which are fulfilled by the given type

try {
    $result = $apiInstance->getUnits($storefront, $limit, $offset, $id_offer, $id_product, $ean, $embedded, $fulfillment_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->getUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **limit** | **int**| Desired size of result set, maximum is 100 | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set | [optional] [default to 0]
 **id_offer** | **string**| Provided ID of your stock | [optional]
 **id_product** | **int**| Our internal id_product | [optional]
 **ean** | **string**| EAN, 13 or 14 digits | [optional]
 **embedded** | [**\KauflandSellerApi\Model\UnitEmbeddedEnum[]**](../Model/\KauflandSellerApi\Model\UnitEmbeddedEnum.md)|  | [optional]
 **fulfillment_type** | [**\KauflandSellerApi\Model\FulfillmentType[]**](../Model/\KauflandSellerApi\Model\FulfillmentType.md)| Get only units which are fulfilled by the given type | [optional]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseUnitEmbedded**](../Model/CollectionApiResponseUnitEmbedded.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchUnit()`

```php
patchUnit($id_unit, $storefront, $unit_patch_request): \KauflandSellerApi\Model\ApiResponseUnit
```

Update some of the fields of a unit

Update some of the fields of a unit. Please notice that you have to specify a listing price greater than zero.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_unit = 56; // int | Internal ID of Unit, unique across all Units
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$unit_patch_request = new \KauflandSellerApi\Model\UnitPatchRequest(); // \KauflandSellerApi\Model\UnitPatchRequest | Update Object

try {
    $result = $apiInstance->patchUnit($id_unit, $storefront, $unit_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->patchUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_unit** | **int**| Internal ID of Unit, unique across all Units |
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **unit_patch_request** | [**\KauflandSellerApi\Model\UnitPatchRequest**](../Model/UnitPatchRequest.md)| Update Object |

### Return type

[**\KauflandSellerApi\Model\ApiResponseUnit**](../Model/ApiResponseUnit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
