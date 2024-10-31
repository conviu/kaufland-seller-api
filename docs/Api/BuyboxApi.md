# KauflandSellerApi\BuyboxApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOffersRankings()**](BuyboxApi.md#getOffersRankings) | **GET** /buybox | Get a list of offers rankings for a product


## `getOffersRankings()`

```php
getOffersRankings($id_product, $storefront, $condition, $limit): \KauflandSellerApi\Model\ApiResponseOffersRankings
```

Get a list of offers rankings for a product

This endpoint retrieves the top-ranked offers for a specified product, with an optional limit parameter to specify the maximum number of offers (up to 10).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\BuyboxApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_product = 56; // int | Our internal id_product
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$condition = new \KauflandSellerApi\Model\BuyboxCondition(); // BuyboxCondition | The condition of the offers
$limit = 10; // int | Desired size of offsets set, maximum is 10

try {
    $result = $apiInstance->getOffersRankings($id_product, $storefront, $condition, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyboxApi->getOffersRankings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_product** | **int**| Our internal id_product |
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **condition** | [**BuyboxCondition**](../Model/.md)| The condition of the offers |
 **limit** | **int**| Desired size of offsets set, maximum is 10 | [optional] [default to 10]

### Return type

[**\KauflandSellerApi\Model\ApiResponseOffersRankings**](../Model/ApiResponseOffersRankings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
