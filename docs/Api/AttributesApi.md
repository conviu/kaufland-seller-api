# KauflandSellerApi\AttributesApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAttribute()**](AttributesApi.md#getAttribute) | **GET** /attributes/{id_attribute} | Get attribute by ID
[**getAttributeByName()**](AttributesApi.md#getAttributeByName) | **GET** /attributes/by-name/{name} | Get attribute by name
[**getAttributeList()**](AttributesApi.md#getAttributeList) | **GET** /attributes | Get an attribute list
[**getAttributeListBySearch()**](AttributesApi.md#getAttributeListBySearch) | **GET** /attributes/search | Get attributes by search term
[**getSharedSetListBySearchAndAttributeId()**](AttributesApi.md#getSharedSetListBySearchAndAttributeId) | **GET** /attributes/{id_attribute}/shared-set | Get shared-set by search term and attribute id


## `getAttribute()`

```php
getAttribute($id_attribute, $storefront, $locale): \KauflandSellerApi\Model\ApiResponseAttribute
```

Get attribute by ID

Get an attribute by <code>id_attribute</code>.

### Example

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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_attribute** | **int**| The ID of the attribute |
 **storefront** | [**Storefront**](../Model/.md)| Specifies the store by country |
 **locale** | [**ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional]

### Return type

[**\KauflandSellerApi\Model\ApiResponseAttribute**](../Model/ApiResponseAttribute.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttributeByName()`

```php
getAttributeByName($name, $storefront, $locale): \KauflandSellerApi\Model\ApiResponseAttribute
```

Get attribute by name

Get an attribute by its name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$name = colour; // string | The name of the attribute
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Specifies the store by country
$locale = new \KauflandSellerApi\Model\ProductDataLocale(); // ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getAttributeByName($name, $storefront, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getAttributeByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the attribute |
 **storefront** | [**Storefront**](../Model/.md)| Specifies the store by country |
 **locale** | [**ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional]

### Return type

[**\KauflandSellerApi\Model\ApiResponseAttribute**](../Model/ApiResponseAttribute.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttributeList()`

```php
getAttributeList($storefront, $limit, $offset, $locale): \KauflandSellerApi\Model\CollectionApiResponseAttribute
```

Get an attribute list

Get a list of all available attributes for a specific language.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Specifies the store by country
$limit = 56; // int | Desired size of result set. Max: 100
$offset = 56; // int | Offset applied to result set
$locale = new \KauflandSellerApi\Model\ProductDataLocale(); // ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getAttributeList($storefront, $limit, $offset, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getAttributeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Specifies the store by country |
 **limit** | **int**| Desired size of result set. Max: 100 | [optional]
 **offset** | **int**| Offset applied to result set | [optional]
 **locale** | [**ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseAttribute**](../Model/CollectionApiResponseAttribute.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttributeListBySearch()`

```php
getAttributeListBySearch($storefront, $q, $limit, $offset, $locale): \KauflandSellerApi\Model\CollectionApiResponseAttribute
```

Get attributes by search term

Get a list of attributes by a search term.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Specifies the store by country
$q = colour; // string | Search term for finding a specific attribute
$limit = 56; // int | Desired size of result set. Max: 100
$offset = 56; // int | Offset applied to result set
$locale = new \KauflandSellerApi\Model\ProductDataLocale(); // ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getAttributeListBySearch($storefront, $q, $limit, $offset, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getAttributeListBySearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Specifies the store by country |
 **q** | **string**| Search term for finding a specific attribute |
 **limit** | **int**| Desired size of result set. Max: 100 | [optional]
 **offset** | **int**| Offset applied to result set | [optional]
 **locale** | [**ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseAttribute**](../Model/CollectionApiResponseAttribute.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSharedSetListBySearchAndAttributeId()`

```php
getSharedSetListBySearchAndAttributeId($id_attribute, $locale, $q, $limit, $offset): \KauflandSellerApi\Model\CollectionApiResponseSharedSet
```

Get shared-set by search term and attribute id

Get a list of shared-set for a given attribute id by a search term.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_attribute = 351; // int | The ID of the attribute
$locale = new \KauflandSellerApi\Model\ProductDataLocale(); // ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale
$q = Braun; // string | Search term for finding a specific shared set value
$limit = 30; // int | Desired size of result set. Max: 100
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getSharedSetListBySearchAndAttributeId($id_attribute, $locale, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getSharedSetListBySearchAndAttributeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_attribute** | **int**| The ID of the attribute |
 **locale** | [**ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale |
 **q** | **string**| Search term for finding a specific shared set value | [optional]
 **limit** | **int**| Desired size of result set. Max: 100 | [optional]
 **offset** | **int**| Offset applied to result set | [optional]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseSharedSet**](../Model/CollectionApiResponseSharedSet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
