# KauflandSellerApi\ReturnsApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReturn()**](ReturnsApi.md#getReturn) | **GET** /returns/{id_return} | Get a return by ID
[**getReturns()**](ReturnsApi.md#getReturns) | **GET** /returns | Get a list of returns
[**initiateReturn()**](ReturnsApi.md#initiateReturn) | **POST** /returns | Initialize a return
[**updateReturn()**](ReturnsApi.md#updateReturn) | **PUT** /returns/{id_return} | Add one or more order units to an already existing return


## `getReturn()`

```php
getReturn($id_return, $embedded): \KauflandSellerApi\Model\ApiResponseReturnDetails
```

Get a return by ID

Get a return by <code>id_return</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_return = 675849321; // int | Return ID, unique across all returns
$embedded = array(new \KauflandSellerApi\Model\\KauflandSellerApi\Model\ReturnEmbeddable()); // \KauflandSellerApi\Model\ReturnEmbeddable[] | Additional data to be returned

try {
    $result = $apiInstance->getReturn($id_return, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_return** | **int**| Return ID, unique across all returns |
 **embedded** | [**\KauflandSellerApi\Model\ReturnEmbeddable[]**](../Model/\KauflandSellerApi\Model\ReturnEmbeddable.md)| Additional data to be returned | [optional]

### Return type

[**\KauflandSellerApi\Model\ApiResponseReturnDetails**](../Model/ApiResponseReturnDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturns()`

```php
getReturns($storefront, $ts_created_from_iso, $ts_updated_from_iso, $tracking_code, $status, $fulfillment_type, $sort, $limit, $offset): \KauflandSellerApi\Model\CollectionApiResponseReturn
```

Get a list of returns

Get a list of returns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Locale of storefront
$ts_created_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only returns which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$ts_updated_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only returns which were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$tracking_code = 0034123456789; // string | The tracking code of a particular return
$status = [package_received]; // \KauflandSellerApi\Model\ReturnStatus[] | Get only returns which are in the given status
$fulfillment_type = [fulfilled_by_merchant]; // \KauflandSellerApi\Model\FulfillmentType[] | Get only returns which are fulfilled by the given type
$sort = ts_created:desc; // string | Specify sorting
$limit = 30; // int | Desired size of result set<br>max: 100, default: 30
$offset = 0; // int | Offset applied to result set<br>default: 0

try {
    $result = $apiInstance->getReturns($storefront, $ts_created_from_iso, $ts_updated_from_iso, $tracking_code, $status, $fulfillment_type, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Locale of storefront | [optional]
 **ts_created_from_iso** | **\DateTime**| Get only returns which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional]
 **ts_updated_from_iso** | **\DateTime**| Get only returns which were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional]
 **tracking_code** | **string**| The tracking code of a particular return | [optional]
 **status** | [**\KauflandSellerApi\Model\ReturnStatus[]**](../Model/\KauflandSellerApi\Model\ReturnStatus.md)| Get only returns which are in the given status | [optional]
 **fulfillment_type** | [**\KauflandSellerApi\Model\FulfillmentType[]**](../Model/\KauflandSellerApi\Model\FulfillmentType.md)| Get only returns which are fulfilled by the given type | [optional]
 **sort** | **string**| Specify sorting | [optional] [default to &#39;ts_created:desc&#39;]
 **limit** | **int**| Desired size of result set&lt;br&gt;max: 100, default: 30 | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set&lt;br&gt;default: 0 | [optional] [default to 0]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseReturn**](../Model/CollectionApiResponseReturn.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initiateReturn()`

```php
initiateReturn($initialize_return_request): \KauflandSellerApi\Model\ApiResponseInitializeReturn
```

Initialize a return

Initialize a return for one or more order units. All order units must belong to the same order.<br> Valid values for `reason` can be found in the <a href=\"https://sellerapi.kaufland.com/?page=returns\" target=\"_blank\">documentation</a>.<br> `note` must be at least 5 and maximal 100 characters long.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$initialize_return_request = [{"id_order_unit":314567898654242,"reason":"wrong_size","note":"A note"}]; // \KauflandSellerApi\Model\InitializeReturnRequest[] | Request body containing return data for one or more order units

try {
    $result = $apiInstance->initiateReturn($initialize_return_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->initiateReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **initialize_return_request** | [**\KauflandSellerApi\Model\InitializeReturnRequest[]**](../Model/InitializeReturnRequest.md)| Request body containing return data for one or more order units |

### Return type

[**\KauflandSellerApi\Model\ApiResponseInitializeReturn**](../Model/ApiResponseInitializeReturn.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReturn()`

```php
updateReturn($id_return, $update_return_request): \KauflandSellerApi\Model\ApiResponseUpdateReturn
```

Add one or more order units to an already existing return

Add one or more order units to an already existing return. All order units must belong to the same order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_return = 675849321; // string | Return ID, unique across all returns
$update_return_request = [{"id_order_unit":314567898654242,"reason":"wrong_size","note":"A note"}]; // \KauflandSellerApi\Model\UpdateReturnRequest[] | Request body containing return data for one or more order units

try {
    $result = $apiInstance->updateReturn($id_return, $update_return_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->updateReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_return** | **string**| Return ID, unique across all returns |
 **update_return_request** | [**\KauflandSellerApi\Model\UpdateReturnRequest[]**](../Model/UpdateReturnRequest.md)| Request body containing return data for one or more order units |

### Return type

[**\KauflandSellerApi\Model\ApiResponseUpdateReturn**](../Model/ApiResponseUpdateReturn.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
