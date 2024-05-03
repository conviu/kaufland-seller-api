# KauflandSellerApi\CarriersApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCarriers()**](CarriersApi.md#getCarriers) | **GET** /carriers | Get a list of available carriers


## `getCarriers()`

```php
getCarriers(): \KauflandSellerApi\Model\ApiResponseCarriers
```

Get a list of available carriers

Get a list of available carriers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCarriers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->getCarriers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\KauflandSellerApi\Model\ApiResponseCarriers**](../Model/ApiResponseCarriers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
