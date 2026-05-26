# ClickSend\DetectAddressApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**detectAddressPost**](DetectAddressApi.md#detectAddressPost) | **POST** /post/letters/detect-address | Detects address in uploaded file.


# **detectAddressPost**
> string detectAddressPost($upload_file)

Detects address in uploaded file.

Detects address in uploaded file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\DetectAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_file = new \ClickSend\Model\UploadFile(); // \ClickSend\Model\UploadFile | Your file to be uploaded

try {
    $result = $apiInstance->detectAddressPost($upload_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DetectAddressApi->detectAddressPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_file** | [**\ClickSend\Model\UploadFile**](../Model/UploadFile.md)| Your file to be uploaded |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

