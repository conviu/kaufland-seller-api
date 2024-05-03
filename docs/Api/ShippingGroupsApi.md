# KauflandSellerApi\ShippingGroupsApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getShippingGroup()**](ShippingGroupsApi.md#getShippingGroup) | **GET** /shipping-groups/{id_shipping_group} | Get a shipping group by ID
[**getShippingGroups()**](ShippingGroupsApi.md#getShippingGroups) | **GET** /shipping-groups | Get the list of your predefined shipping groups


## `getShippingGroup()`

```php
getShippingGroup($id_shipping_group, $storefront): \KauflandSellerApi\Model\ApiResponseShippingGroup
```

Get a shipping group by ID

Get a shipping group by <code>id_shipping_group</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ShippingGroupsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_shipping_group = 56; // int
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->getShippingGroup($id_shipping_group, $storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingGroupsApi->getShippingGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_shipping_group** | **int**|  |
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\KauflandSellerApi\Model\ApiResponseShippingGroup**](../Model/ApiResponseShippingGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingGroups()`

```php
getShippingGroups($storefront, $limit, $offset): \KauflandSellerApi\Model\CollectionApiResponseShippingGroup
```

Get the list of your predefined shipping groups

Get the list of your predefined shipping groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ShippingGroupsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getShippingGroups($storefront, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingGroupsApi->getShippingGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **limit** | **int**| Desired size of result set | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set | [optional] [default to 0]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseShippingGroup**](../Model/CollectionApiResponseShippingGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
