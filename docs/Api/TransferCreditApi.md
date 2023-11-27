# ClickSend\TransferCreditApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**resellerTransferCreditPut**](TransferCreditApi.md#resellertransfercreditput) | **PUT** /reseller/transfer-credit | Transfer Credit

# **resellerTransferCreditPut**
> string resellerTransferCreditPut($body)

Transfer Credit

Transfer Credit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\TransferCreditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\ResellerAccountTransferCredit(); // \ClickSend\Model\ResellerAccountTransferCredit | ResellerAccountTransferCredit model

try {
    $result = $apiInstance->resellerTransferCreditPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferCreditApi->resellerTransferCreditPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\ResellerAccountTransferCredit**](../Model/ResellerAccountTransferCredit.md)| ResellerAccountTransferCredit model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

