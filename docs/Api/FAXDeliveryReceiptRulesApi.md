# ClickSend\FAXDeliveryReceiptRulesApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**faxDeliveryReceiptAutomationDelete**](FAXDeliveryReceiptRulesApi.md#faxdeliveryreceiptautomationdelete) | **DELETE** /automations/fax/receipts/{receipt_rule_id} | Delete fax delivery receipt automation
[**faxDeliveryReceiptAutomationGet**](FAXDeliveryReceiptRulesApi.md#faxdeliveryreceiptautomationget) | **GET** /automations/fax/receipts/{receipt_rule_id} | Get specific fax delivery receipt automation
[**faxDeliveryReceiptAutomationPost**](FAXDeliveryReceiptRulesApi.md#faxdeliveryreceiptautomationpost) | **POST** /automations/fax/receipts | Create fax delivery receipt automations
[**faxDeliveryReceiptAutomationPut**](FAXDeliveryReceiptRulesApi.md#faxdeliveryreceiptautomationput) | **PUT** /automations/fax/receipts/{receipt_rule_id} | Update fax delivery receipt automation
[**faxDeliveryReceiptAutomationsGet**](FAXDeliveryReceiptRulesApi.md#faxdeliveryreceiptautomationsget) | **GET** /automations/fax/receipts | Get all fax delivery receipt automations

# **faxDeliveryReceiptAutomationDelete**
> string faxDeliveryReceiptAutomationDelete($receipt_rule_id)

Delete fax delivery receipt automation

Delete fax delivery receipt automation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\FAXDeliveryReceiptRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_rule_id = 56; // int | Receipt rule id

try {
    $result = $apiInstance->faxDeliveryReceiptAutomationDelete($receipt_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FAXDeliveryReceiptRulesApi->faxDeliveryReceiptAutomationDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_rule_id** | **int**| Receipt rule id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faxDeliveryReceiptAutomationGet**
> string faxDeliveryReceiptAutomationGet($receipt_rule_id)

Get specific fax delivery receipt automation

Get specific fax delivery receipt automation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\FAXDeliveryReceiptRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_rule_id = 56; // int | Receipt rule id

try {
    $result = $apiInstance->faxDeliveryReceiptAutomationGet($receipt_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FAXDeliveryReceiptRulesApi->faxDeliveryReceiptAutomationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_rule_id** | **int**| Receipt rule id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faxDeliveryReceiptAutomationPost**
> string faxDeliveryReceiptAutomationPost($body)

Create fax delivery receipt automations

Create fax delivery receipt automations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\FAXDeliveryReceiptRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\DeliveryReceiptRule(); // \ClickSend\Model\DeliveryReceiptRule | fax delivery receipt rule model

try {
    $result = $apiInstance->faxDeliveryReceiptAutomationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FAXDeliveryReceiptRulesApi->faxDeliveryReceiptAutomationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\DeliveryReceiptRule**](../Model/DeliveryReceiptRule.md)| fax delivery receipt rule model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faxDeliveryReceiptAutomationPut**
> string faxDeliveryReceiptAutomationPut($body, $receipt_rule_id)

Update fax delivery receipt automation

Update fax delivery receipt automation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\FAXDeliveryReceiptRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\DeliveryReceiptRule(); // \ClickSend\Model\DeliveryReceiptRule | Delivery receipt rule model
$receipt_rule_id = 56; // int | Receipt rule id

try {
    $result = $apiInstance->faxDeliveryReceiptAutomationPut($body, $receipt_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FAXDeliveryReceiptRulesApi->faxDeliveryReceiptAutomationPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\DeliveryReceiptRule**](../Model/DeliveryReceiptRule.md)| Delivery receipt rule model |
 **receipt_rule_id** | **int**| Receipt rule id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faxDeliveryReceiptAutomationsGet**
> string faxDeliveryReceiptAutomationsGet($q, $page, $limit)

Get all fax delivery receipt automations

Get all fax delivery receipt automations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\FAXDeliveryReceiptRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Your keyword or query.
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->faxDeliveryReceiptAutomationsGet($q, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FAXDeliveryReceiptRulesApi->faxDeliveryReceiptAutomationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Your keyword or query. | [optional]
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

