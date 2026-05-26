# ClickSend\PostReturnAddressApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postReturnAddressesByReturnAddressIdDelete**](PostReturnAddressApi.md#postReturnAddressesByReturnAddressIdDelete) | **DELETE** /post/return-addresses/{return_address_id} | Delete specific post return address
[**postReturnAddressesByReturnAddressIdGet**](PostReturnAddressApi.md#postReturnAddressesByReturnAddressIdGet) | **GET** /post/return-addresses/{return_address_id} | Get specific post return address
[**postReturnAddressesByReturnAddressIdPut**](PostReturnAddressApi.md#postReturnAddressesByReturnAddressIdPut) | **PUT** /post/return-addresses/{return_address_id} | Update post return address
[**postReturnAddressesGet**](PostReturnAddressApi.md#postReturnAddressesGet) | **GET** /post/return-addresses | Get list of post return addresses
[**postReturnAddressesPost**](PostReturnAddressApi.md#postReturnAddressesPost) | **POST** /post/return-addresses | Create post return address


# **postReturnAddressesByReturnAddressIdDelete**
> string postReturnAddressesByReturnAddressIdDelete($return_address_id)

Delete specific post return address

Delete specific post return address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\PostReturnAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_address_id = 56; // int | Return address ID

try {
    $result = $apiInstance->postReturnAddressesByReturnAddressIdDelete($return_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostReturnAddressApi->postReturnAddressesByReturnAddressIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_address_id** | **int**| Return address ID |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postReturnAddressesByReturnAddressIdGet**
> string postReturnAddressesByReturnAddressIdGet($return_address_id)

Get specific post return address

Get specific post return address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\PostReturnAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_address_id = 56; // int | Return address ID

try {
    $result = $apiInstance->postReturnAddressesByReturnAddressIdGet($return_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostReturnAddressApi->postReturnAddressesByReturnAddressIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_address_id** | **int**| Return address ID |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postReturnAddressesByReturnAddressIdPut**
> string postReturnAddressesByReturnAddressIdPut($return_address_id, $return_address)

Update post return address

Update post return address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\PostReturnAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_address_id = 56; // int | Return address ID
$return_address = new \ClickSend\Model\Address(); // \ClickSend\Model\Address | Address model

try {
    $result = $apiInstance->postReturnAddressesByReturnAddressIdPut($return_address_id, $return_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostReturnAddressApi->postReturnAddressesByReturnAddressIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_address_id** | **int**| Return address ID |
 **return_address** | [**\ClickSend\Model\Address**](../Model/Address.md)| Address model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postReturnAddressesGet**
> string postReturnAddressesGet($page, $limit)

Get list of post return addresses

Get list of post return addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\PostReturnAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->postReturnAddressesGet($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostReturnAddressApi->postReturnAddressesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Number of records per page | [optional] [default to 10]

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postReturnAddressesPost**
> string postReturnAddressesPost($return_address)

Create post return address

Create post return address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\PostReturnAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_address = new \ClickSend\Model\Address(); // \ClickSend\Model\Address | Address model

try {
    $result = $apiInstance->postReturnAddressesPost($return_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostReturnAddressApi->postReturnAddressesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_address** | [**\ClickSend\Model\Address**](../Model/Address.md)| Address model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

