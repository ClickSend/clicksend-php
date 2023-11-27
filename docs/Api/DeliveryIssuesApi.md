# ClickSend\DeliveryIssuesApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deliveryIssuesGet**](DeliveryIssuesApi.md#deliveryissuesget) | **GET** /delivery-issues | Get all delivery issues
[**deliveryIssuesPost**](DeliveryIssuesApi.md#deliveryissuespost) | **POST** /delivery-issues | Create delivery Issue

# **deliveryIssuesGet**
> string deliveryIssuesGet($page, $limit)

Get all delivery issues

Get all delivery issues

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\DeliveryIssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->deliveryIssuesGet($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryIssuesApi->deliveryIssuesGet: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deliveryIssuesPost**
> string deliveryIssuesPost($body)

Create delivery Issue

Create delivery Issue

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\DeliveryIssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\DeliveryIssue(); // \ClickSend\Model\DeliveryIssue | DeliveryIssue model

try {
    $result = $apiInstance->deliveryIssuesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryIssuesApi->deliveryIssuesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\DeliveryIssue**](../Model/DeliveryIssue.md)| DeliveryIssue model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

