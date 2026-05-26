# ClickSend\PostPostcardApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postPostcardsHistoryExportGet**](PostPostcardApi.md#postPostcardsHistoryExportGet) | **GET** /post/postcards/history/export | Export postcard history to a CSV file
[**postPostcardsHistoryGet**](PostPostcardApi.md#postPostcardsHistoryGet) | **GET** /post/postcards/history | Retrieve the history of postcards sent or scheduled
[**postPostcardsPricePost**](PostPostcardApi.md#postPostcardsPricePost) | **POST** /post/postcards/price | Calculate price for sending one or more postcards
[**postPostcardsSendPost**](PostPostcardApi.md#postPostcardsSendPost) | **POST** /post/postcards/send | Send one or more postcards


# **postPostcardsHistoryExportGet**
> string postPostcardsHistoryExportGet($filename)

Export postcard history to a CSV file

Export postcard history to a CSV file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\PostPostcardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filename = "filename_example"; // string | Filename to export to

try {
    $result = $apiInstance->postPostcardsHistoryExportGet($filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostPostcardApi->postPostcardsHistoryExportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filename** | **string**| Filename to export to |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPostcardsHistoryGet**
> string postPostcardsHistoryGet($page, $limit)

Retrieve the history of postcards sent or scheduled

Retrieve the history of postcards sent or scheduled

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\PostPostcardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->postPostcardsHistoryGet($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostPostcardApi->postPostcardsHistoryGet: ', $e->getMessage(), PHP_EOL;
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

# **postPostcardsPricePost**
> string postPostcardsPricePost($post_postcards)

Calculate price for sending one or more postcards

Calculate price for sending one or more postcards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\PostPostcardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_postcards = new \ClickSend\Model\PostPostcard(); // \ClickSend\Model\PostPostcard | PostPostcard model

try {
    $result = $apiInstance->postPostcardsPricePost($post_postcards);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostPostcardApi->postPostcardsPricePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_postcards** | [**\ClickSend\Model\PostPostcard**](../Model/PostPostcard.md)| PostPostcard model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPostcardsSendPost**
> string postPostcardsSendPost($post_postcards)

Send one or more postcards

Send one or more postcards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\PostPostcardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_postcards = new \ClickSend\Model\PostPostcard(); // \ClickSend\Model\PostPostcard | PostPostcard model

try {
    $result = $apiInstance->postPostcardsSendPost($post_postcards);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostPostcardApi->postPostcardsSendPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_postcards** | [**\ClickSend\Model\PostPostcard**](../Model/PostPostcard.md)| PostPostcard model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

