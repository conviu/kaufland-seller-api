# KauflandSellerApi\StatusApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ping()**](StatusApi.md#ping) | **GET** /status/ping | Ping the Marketplace Seller API by Kaufland


## `ping()`

```php
ping(): \KauflandSellerApi\Model\ApiResponsePingMessage
```

Ping the Marketplace Seller API by Kaufland

A simple method you can call that will return a constant value as long as everything is good.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->ping();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->ping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\KauflandSellerApi\Model\ApiResponsePingMessage**](../Model/ApiResponsePingMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
