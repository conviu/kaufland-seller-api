# KauflandSellerApi\SubscriptionsApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSubscription()**](SubscriptionsApi.md#addSubscription) | **POST** /subscriptions | Subscribe for event
[**deleteSubscription()**](SubscriptionsApi.md#deleteSubscription) | **DELETE** /subscriptions/{id_subscription} | Unsubscribe from event
[**getSubscription()**](SubscriptionsApi.md#getSubscription) | **GET** /subscriptions/{id_subscription} | Get a push notification subscription by ID
[**getSubscriptions()**](SubscriptionsApi.md#getSubscriptions) | **GET** /subscriptions | Get a list of your push notification subscriptions
[**updateSubscription()**](SubscriptionsApi.md#updateSubscription) | **PATCH** /subscriptions/{id_subscription} | Update subscription


## `addSubscription()`

```php
addSubscription($storefront, $body): \KauflandSellerApi\Model\ApiResponseSubscription
```

Subscribe for event

Create a new push notification subscription for an event. Using this endpoint will result in a callback verification request being sent to the given callback_url. See the Push Notifications documentation page for more information on push notifications and callback verification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$body = new \KauflandSellerApi\Model\PickSubscriptionCallbackUrlOrFallbackEmailOrEventName(); // \KauflandSellerApi\Model\PickSubscriptionCallbackUrlOrFallbackEmailOrEventName

try {
    $result = $apiInstance->addSubscription($storefront, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->addSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **body** | **\KauflandSellerApi\Model\PickSubscriptionCallbackUrlOrFallbackEmailOrEventName**|  |

### Return type

[**\KauflandSellerApi\Model\ApiResponseSubscription**](../Model/ApiResponseSubscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSubscription()`

```php
deleteSubscription($id_subscription)
```

Unsubscribe from event

Deletes the specified push notification subscription from the database. To re-subscribe to the given event, you must use the add subscription endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_subscription = 56; // int

try {
    $apiInstance->deleteSubscription($id_subscription);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->deleteSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_subscription** | **int**|  |

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

## `getSubscription()`

```php
getSubscription($id_subscription): \KauflandSellerApi\Model\ApiResponseSubscription
```

Get a push notification subscription by ID

Get a push notification subscription by <code>id_subscription</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_subscription = 56; // int

try {
    $result = $apiInstance->getSubscription($id_subscription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_subscription** | **int**|  |

### Return type

[**\KauflandSellerApi\Model\ApiResponseSubscription**](../Model/ApiResponseSubscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptions()`

```php
getSubscriptions($storefront, $event_name, $limit, $offset): \KauflandSellerApi\Model\CollectionApiResponseSubscription
```

Get a list of your push notification subscriptions

Get a list of your push notification subscriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$storefront = new \KauflandSellerApi\Model\Storefront(); // Storefront | Parameter to select the affected storefront
$event_name = new \KauflandSellerApi\Model\SubscriptionEventName(); // SubscriptionEventName | Event name
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getSubscriptions($storefront, $event_name, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**Storefront**](../Model/.md)| Parameter to select the affected storefront | [optional]
 **event_name** | [**SubscriptionEventName**](../Model/.md)| Event name | [optional]
 **limit** | **int**| Desired size of result set | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set | [optional] [default to 0]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseSubscription**](../Model/CollectionApiResponseSubscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubscription()`

```php
updateSubscription($id_subscription, $body): \KauflandSellerApi\Model\ApiResponseSubscription
```

Update subscription

Update the fields of a push notification subscription. You can set the is_active flag to false to stop receiving notications for the subscription's event, or to true to re-enable a disabled subscription. If you change the value of the callback_url, the new callback_url will immediately receive a verification request. See the Callback URL Verification section of the Push Notifications documentation for details on validation requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_subscription = 56; // int
$body = new \KauflandSellerApi\Model\PartialPickSubscriptionCallbackUrlOrFallbackEmailOrEventNameOrIsActiveOrStorefront(); // \KauflandSellerApi\Model\PartialPickSubscriptionCallbackUrlOrFallbackEmailOrEventNameOrIsActiveOrStorefront

try {
    $result = $apiInstance->updateSubscription($id_subscription, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_subscription** | **int**|  |
 **body** | **\KauflandSellerApi\Model\PartialPickSubscriptionCallbackUrlOrFallbackEmailOrEventNameOrIsActiveOrStorefront**|  |

### Return type

[**\KauflandSellerApi\Model\ApiResponseSubscription**](../Model/ApiResponseSubscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
