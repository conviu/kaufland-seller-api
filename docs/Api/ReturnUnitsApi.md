# KauflandSellerApi\ReturnUnitsApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptReturnUnit()**](ReturnUnitsApi.md#acceptReturnUnit) | **PATCH** /return-units/{id_return_unit}/accept | Accept a return unit
[**clarifyReturnUnit()**](ReturnUnitsApi.md#clarifyReturnUnit) | **PATCH** /return-units/{id_return_unit}/clarify | Clarify a return unit
[**getReturnUnit()**](ReturnUnitsApi.md#getReturnUnit) | **GET** /return-units/{id_return_unit} | Get a return unit by ID
[**getReturnUnits()**](ReturnUnitsApi.md#getReturnUnits) | **GET** /return-units | Get a list of return units
[**rejectReturnUnit()**](ReturnUnitsApi.md#rejectReturnUnit) | **PATCH** /return-units/{id_return_unit}/reject | Reject a return unit
[**repairReturnUnit()**](ReturnUnitsApi.md#repairReturnUnit) | **PATCH** /return-units/{id_return_unit}/repair | Repair a return unit


## `acceptReturnUnit()`

```php
acceptReturnUnit($id_return_unit)
```

Accept a return unit

Mark a return unit as `return_accepted`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReturnUnitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_return_unit = 7896580917; // int | Return unit ID, unique across all return units

try {
    $apiInstance->acceptReturnUnit($id_return_unit);
} catch (Exception $e) {
    echo 'Exception when calling ReturnUnitsApi->acceptReturnUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_return_unit** | **int**| Return unit ID, unique across all return units |

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

## `clarifyReturnUnit()`

```php
clarifyReturnUnit($id_return_unit, $return_unit_clarify_request)
```

Clarify a return unit

Mark a return unit as `return_in_clarification` to indicate a problem with a return unit after it has been received. Will open a ticket addressing the customer with the given message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReturnUnitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_return_unit = 7896580917; // int | Return unit ID, unique across all return units
$return_unit_clarify_request = {"message":"needs clarification"}; // \KauflandSellerApi\Model\ReturnUnitClarifyRequest | Request body containing message for clarifying return unit

try {
    $apiInstance->clarifyReturnUnit($id_return_unit, $return_unit_clarify_request);
} catch (Exception $e) {
    echo 'Exception when calling ReturnUnitsApi->clarifyReturnUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_return_unit** | **int**| Return unit ID, unique across all return units |
 **return_unit_clarify_request** | [**\KauflandSellerApi\Model\ReturnUnitClarifyRequest**](../Model/ReturnUnitClarifyRequest.md)| Request body containing message for clarifying return unit |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnUnit()`

```php
getReturnUnit($id_return_unit, $embedded): \KauflandSellerApi\Model\ApiResponseReturnUnitDetails
```

Get a return unit by ID

Get a return unit by <code>id_return_unit</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReturnUnitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_return_unit = 7896580917; // int | Return unit ID, unique across all return units
$embedded = array(new \KauflandSellerApi\Model\\KauflandSellerApi\Model\ReturnUnitEmbeddable()); // \KauflandSellerApi\Model\ReturnUnitEmbeddable[] | Additional data to be returned

try {
    $result = $apiInstance->getReturnUnit($id_return_unit, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnUnitsApi->getReturnUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_return_unit** | **int**| Return unit ID, unique across all return units |
 **embedded** | [**\KauflandSellerApi\Model\ReturnUnitEmbeddable[]**](../Model/\KauflandSellerApi\Model\ReturnUnitEmbeddable.md)| Additional data to be returned | [optional]

### Return type

[**\KauflandSellerApi\Model\ApiResponseReturnUnitDetails**](../Model/ApiResponseReturnUnitDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnUnits()`

```php
getReturnUnits($storefront, $ts_created_from_iso, $status, $fulfillment_type, $sort, $limit, $offset): \KauflandSellerApi\Model\CollectionApiResponseReturnUnit
```

Get a list of return units

Get a list of return units.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReturnUnitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Locale of storefront
$ts_created_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only return units which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$status = [return_arrived]; // \KauflandSellerApi\Model\ReturnUnitStatus[] | Get only return units which are in the given status
$fulfillment_type = [fulfilled_by_merchant]; // \KauflandSellerApi\Model\FulfillmentType[] | Get only return units which are fulfilled by the given type
$sort = ts_created:desc; // string | Specify sorting
$limit = 56; // int | Desired size of result set<br>max: 100, default: 30
$offset = 56; // int | Offset applied to result set<br>default: 0

try {
    $result = $apiInstance->getReturnUnits($storefront, $ts_created_from_iso, $status, $fulfillment_type, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnUnitsApi->getReturnUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Locale of storefront | [optional]
 **ts_created_from_iso** | **\DateTime**| Get only return units which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional]
 **status** | [**\KauflandSellerApi\Model\ReturnUnitStatus[]**](../Model/\KauflandSellerApi\Model\ReturnUnitStatus.md)| Get only return units which are in the given status | [optional]
 **fulfillment_type** | [**\KauflandSellerApi\Model\FulfillmentType[]**](../Model/\KauflandSellerApi\Model\FulfillmentType.md)| Get only return units which are fulfilled by the given type | [optional]
 **sort** | **string**| Specify sorting | [optional] [default to &#39;ts_created:desc&#39;]
 **limit** | **int**| Desired size of result set&lt;br&gt;max: 100, default: 30 | [optional]
 **offset** | **int**| Offset applied to result set&lt;br&gt;default: 0 | [optional]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseReturnUnit**](../Model/CollectionApiResponseReturnUnit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectReturnUnit()`

```php
rejectReturnUnit($id_return_unit, $return_unit_reject_request)
```

Reject a return unit

Mark a return unit as `return_rejected`. Will open a ticket addressing the customer with the given message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReturnUnitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_return_unit = 7896580917; // int | Return unit ID, unique across all return units
$return_unit_reject_request = {"message":"Can not be returned"}; // \KauflandSellerApi\Model\ReturnUnitRejectRequest | Request body containing message for rejecting return unit

try {
    $apiInstance->rejectReturnUnit($id_return_unit, $return_unit_reject_request);
} catch (Exception $e) {
    echo 'Exception when calling ReturnUnitsApi->rejectReturnUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_return_unit** | **int**| Return unit ID, unique across all return units |
 **return_unit_reject_request** | [**\KauflandSellerApi\Model\ReturnUnitRejectRequest**](../Model/ReturnUnitRejectRequest.md)| Request body containing message for rejecting return unit |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `repairReturnUnit()`

```php
repairReturnUnit($id_return_unit)
```

Repair a return unit

Mark a return unit as `return_in_repair`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\ReturnUnitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_return_unit = 7896580917; // int | Return unit ID, unique across all return units

try {
    $apiInstance->repairReturnUnit($id_return_unit);
} catch (Exception $e) {
    echo 'Exception when calling ReturnUnitsApi->repairReturnUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_return_unit** | **int**| Return unit ID, unique across all return units |

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
