# KauflandSellerApi\TicketsApi

All URIs are relative to /v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**closeTicket()**](TicketsApi.md#closeTicket) | **PATCH** /tickets/{id_ticket}/close | Close a ticket by ID
[**createTicketMessage()**](TicketsApi.md#createTicketMessage) | **POST** /tickets/{id_ticket}/messages | Create a new message for the ticket
[**getTicket()**](TicketsApi.md#getTicket) | **GET** /tickets/{id_ticket} | Get a ticket by ID
[**getTicketMessages()**](TicketsApi.md#getTicketMessages) | **GET** /tickets/messages | Get a list of ticket messages
[**getTickets()**](TicketsApi.md#getTickets) | **GET** /tickets | Get a list of tickets
[**openTicket()**](TicketsApi.md#openTicket) | **POST** /tickets | Open a ticket


## `closeTicket()`

```php
closeTicket($id_ticket)
```

Close a ticket by ID

Close a ticket given its `id_ticket`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_ticket = 'id_ticket_example'; // string | The unique ID of a ticket

try {
    $apiInstance->closeTicket($id_ticket);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->closeTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_ticket** | **string**| The unique ID of a ticket |

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

## `createTicketMessage()`

```php
createTicketMessage($id_ticket, $create_ticket_message_request)
```

Create a new message for the ticket

Create a new message for the ticket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_ticket = 'id_ticket_example'; // string | The unique ID of a ticket
$create_ticket_message_request = new \KauflandSellerApi\Model\CreateTicketMessageRequest(); // \KauflandSellerApi\Model\CreateTicketMessageRequest | Body params for the new message.

try {
    $apiInstance->createTicketMessage($id_ticket, $create_ticket_message_request);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->createTicketMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_ticket** | **string**| The unique ID of a ticket |
 **create_ticket_message_request** | [**\KauflandSellerApi\Model\CreateTicketMessageRequest**](../Model/CreateTicketMessageRequest.md)| Body params for the new message. |

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

## `getTicket()`

```php
getTicket($id_ticket, $embedded): \KauflandSellerApi\Model\ApiResponseTicketWithEmbedded
```

Get a ticket by ID

Get a ticket given its `id_ticket`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id_ticket = 'id_ticket_example'; // string | The unique ID of a ticket
$embedded = array(new \KauflandSellerApi\Model\\KauflandSellerApi\Model\TicketEmbeddable()); // \KauflandSellerApi\Model\TicketEmbeddable[] | A string of comma-separated values. Possible values: buyer, product, messages, order_units, files

try {
    $result = $apiInstance->getTicket($id_ticket, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->getTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_ticket** | **string**| The unique ID of a ticket |
 **embedded** | [**\KauflandSellerApi\Model\TicketEmbeddable[]**](../Model/\KauflandSellerApi\Model\TicketEmbeddable.md)| A string of comma-separated values. Possible values: buyer, product, messages, order_units, files | [optional]

### Return type

[**\KauflandSellerApi\Model\ApiResponseTicketWithEmbedded**](../Model/ApiResponseTicketWithEmbedded.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTicketMessages()`

```php
getTicketMessages($limit, $sort, $offset, $ts_created_from_iso, $fulfillment_type): \KauflandSellerApi\Model\CollectionApiResponseTicketMessage
```

Get a list of ticket messages

Get a list of your ticket messages. If you want to get only ticket messages for a specific ticket, you should use the `/tickets/{id_ticket}/` endpoint and call it with `embedded=messages`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$limit = 56; // int | Desired size of result set (default: 30)
$sort = new \KauflandSellerApi\Model\TicketMessagesSort(); // TicketMessagesSort | The sort direction
$offset = 56; // int | Offset applied to result set (default: 0)
$ts_created_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter ticket messages by their creation timestamp in iso 8601
$fulfillment_type = array(new \KauflandSellerApi\Model\\KauflandSellerApi\Model\FulfillmentType()); // \KauflandSellerApi\Model\FulfillmentType[] | Filter tickets by their fulfillment type

try {
    $result = $apiInstance->getTicketMessages($limit, $sort, $offset, $ts_created_from_iso, $fulfillment_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->getTicketMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Desired size of result set (default: 30) | [optional]
 **sort** | [**TicketMessagesSort**](../Model/.md)| The sort direction | [optional]
 **offset** | **int**| Offset applied to result set (default: 0) | [optional]
 **ts_created_from_iso** | **\DateTime**| Filter ticket messages by their creation timestamp in iso 8601 | [optional]
 **fulfillment_type** | [**\KauflandSellerApi\Model\FulfillmentType[]**](../Model/\KauflandSellerApi\Model\FulfillmentType.md)| Filter tickets by their fulfillment type | [optional]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseTicketMessage**](../Model/CollectionApiResponseTicketMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTickets()`

```php
getTickets($sort, $limit, $status, $open_reason, $topic, $id_buyer, $ts_created_from_iso, $ts_updated_from_iso, $offset, $storefront, $fulfillment_type): \KauflandSellerApi\Model\CollectionApiResponseTicket
```

Get a list of tickets

Get a list of tickets for given parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$sort = new \KauflandSellerApi\Model\TicketsSort(); // TicketsSort | The sort direction
$limit = 56; // int | Desired size of result set (default: 30)
$status = array(new \KauflandSellerApi\Model\\KauflandSellerApi\Model\TicketStatus()); // \KauflandSellerApi\Model\TicketStatus[] | The status of the ticket
$open_reason = array(new \KauflandSellerApi\Model\\KauflandSellerApi\Model\TicketReason()); // \KauflandSellerApi\Model\TicketReason[] | The reason for this ticket.
$topic = array(new \KauflandSellerApi\Model\\KauflandSellerApi\Model\TicketTopic()); // \KauflandSellerApi\Model\TicketTopic[] | The topic of this ticket.
$id_buyer = 56; // int | The buyer's internal id
$ts_created_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter tickets by their creation timestamp in ISO 8601
$ts_updated_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter tickets by their update timestamp in ISO 8601
$offset = 56; // int | Offset applied to the result set (default: 0)
$storefront = array(new \KauflandSellerApi\Model\\KauflandSellerApi\Model\Storefront()); // \KauflandSellerApi\Model\Storefront[] | Identifier for the storefront the tickets should belong to
$fulfillment_type = array(new \KauflandSellerApi\Model\\KauflandSellerApi\Model\FulfillmentType()); // \KauflandSellerApi\Model\FulfillmentType[] | Filter tickets by their fulfillment type

try {
    $result = $apiInstance->getTickets($sort, $limit, $status, $open_reason, $topic, $id_buyer, $ts_created_from_iso, $ts_updated_from_iso, $offset, $storefront, $fulfillment_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->getTickets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**TicketsSort**](../Model/.md)| The sort direction | [optional]
 **limit** | **int**| Desired size of result set (default: 30) | [optional]
 **status** | [**\KauflandSellerApi\Model\TicketStatus[]**](../Model/\KauflandSellerApi\Model\TicketStatus.md)| The status of the ticket | [optional]
 **open_reason** | [**\KauflandSellerApi\Model\TicketReason[]**](../Model/\KauflandSellerApi\Model\TicketReason.md)| The reason for this ticket. | [optional]
 **topic** | [**\KauflandSellerApi\Model\TicketTopic[]**](../Model/\KauflandSellerApi\Model\TicketTopic.md)| The topic of this ticket. | [optional]
 **id_buyer** | **int**| The buyer&#39;s internal id | [optional]
 **ts_created_from_iso** | **\DateTime**| Filter tickets by their creation timestamp in ISO 8601 | [optional]
 **ts_updated_from_iso** | **\DateTime**| Filter tickets by their update timestamp in ISO 8601 | [optional]
 **offset** | **int**| Offset applied to the result set (default: 0) | [optional]
 **storefront** | [**\KauflandSellerApi\Model\Storefront[]**](../Model/\KauflandSellerApi\Model\Storefront.md)| Identifier for the storefront the tickets should belong to | [optional]
 **fulfillment_type** | [**\KauflandSellerApi\Model\FulfillmentType[]**](../Model/\KauflandSellerApi\Model\FulfillmentType.md)| Filter tickets by their fulfillment type | [optional]

### Return type

[**\KauflandSellerApi\Model\CollectionApiResponseTicket**](../Model/CollectionApiResponseTicket.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openTicket()`

```php
openTicket($open_ticket_request): \KauflandSellerApi\Model\ApiResponseOpenTicketResponse
```

Open a ticket

Open a ticket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KauflandSellerApi\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$open_ticket_request = new \KauflandSellerApi\Model\OpenTicketRequest(); // \KauflandSellerApi\Model\OpenTicketRequest

try {
    $result = $apiInstance->openTicket($open_ticket_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->openTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_ticket_request** | [**\KauflandSellerApi\Model\OpenTicketRequest**](../Model/OpenTicketRequest.md)|  |

### Return type

[**\KauflandSellerApi\Model\ApiResponseOpenTicketResponse**](../Model/ApiResponseOpenTicketResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
