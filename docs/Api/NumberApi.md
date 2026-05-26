# ClickSend\NumberApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**numbersBuyByDedicatedNumberPost**](NumberApi.md#numbersBuyByDedicatedNumberPost) | **POST** /numbers/buy/{dedicated_number} | Buy dedicated number
[**numbersGet**](NumberApi.md#numbersGet) | **GET** /numbers | Get all availible dedicated numbers
[**numbersSearchByCountryGet**](NumberApi.md#numbersSearchByCountryGet) | **GET** /numbers/search/{country} | Get all dedicated numbers by country


# **numbersBuyByDedicatedNumberPost**
> string numbersBuyByDedicatedNumberPost($dedicated_number)

Buy dedicated number

Buy dedicated number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\NumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dedicated_number = "dedicated_number_example"; // string | Phone number to purchase

try {
    $result = $apiInstance->numbersBuyByDedicatedNumberPost($dedicated_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberApi->numbersBuyByDedicatedNumberPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dedicated_number** | **string**| Phone number to purchase |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **numbersGet**
> string numbersGet($page, $limit)

Get all availible dedicated numbers

Get all availible dedicated numbers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\NumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->numbersGet($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberApi->numbersGet: ', $e->getMessage(), PHP_EOL;
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

# **numbersSearchByCountryGet**
> string numbersSearchByCountryGet($country, $search, $search_type, $page, $limit)

Get all dedicated numbers by country

Get all dedicated numbers by country

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\NumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = "country_example"; // string | Country code to search
$search = "search_example"; // string | Your search pattern or query.
$search_type = 56; // int | Your strategy for searching, 0 = starts with, 1 = anywhere, 2 = ends with.
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->numbersSearchByCountryGet($country, $search, $search_type, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberApi->numbersSearchByCountryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**| Country code to search |
 **search** | **string**| Your search pattern or query. | [optional]
 **search_type** | **int**| Your strategy for searching, 0 &#x3D; starts with, 1 &#x3D; anywhere, 2 &#x3D; ends with. | [optional]
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

