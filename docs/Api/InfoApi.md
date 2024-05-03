# KauflandSellerApi\InfoApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllLocales()**](InfoApi.md#getAllLocales) | **GET** /info/locale | Get values for parameter &#39;locale&#39;
[**getAllStorefronts()**](InfoApi.md#getAllStorefronts) | **GET** /info/storefront | Get values for parameter &#39;storefront&#39;


## `getAllLocales()`

```php
getAllLocales(): \KauflandSellerApi\Model\ApiResponseInfoLocaleObject
```

Get values for parameter 'locale'

Get all available values for the parameter 'locale'. This parameter specifies the language of e.g. product data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllLocales();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->getAllLocales: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\KauflandSellerApi\Model\ApiResponseInfoLocaleObject**](../Model/ApiResponseInfoLocaleObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllStorefronts()`

```php
getAllStorefronts(): \KauflandSellerApi\Model\ApiResponseStringArray
```

Get values for parameter 'storefront'

Get current seller available values for the parameter 'storefront'. This parameter specifies the country of the store. Returns a list of storefronts the seller has created in the sellerportal regardless of storefront status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllStorefronts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->getAllStorefronts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\KauflandSellerApi\Model\ApiResponseStringArray**](../Model/ApiResponseStringArray.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
