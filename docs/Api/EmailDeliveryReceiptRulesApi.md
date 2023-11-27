# ClickSend\EmailDeliveryReceiptRulesApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**emailDeliveryReceiptAutomationDelete**](EmailDeliveryReceiptRulesApi.md#emaildeliveryreceiptautomationdelete) | **DELETE** /automations/email/receipts/{receipt_rule_id} | Delete email delivery receipt automation
[**emailDeliveryReceiptAutomationGet**](EmailDeliveryReceiptRulesApi.md#emaildeliveryreceiptautomationget) | **GET** /automations/email/receipts/{receipt_rule_id} | Get specific email delivery receipt automation
[**emailDeliveryReceiptAutomationPost**](EmailDeliveryReceiptRulesApi.md#emaildeliveryreceiptautomationpost) | **POST** /automations/email/receipts | Create email delivery receipt automations
[**emailDeliveryReceiptAutomationPut**](EmailDeliveryReceiptRulesApi.md#emaildeliveryreceiptautomationput) | **PUT** /automations/email/receipts/{receipt_rule_id} | Update email delivery receipt automation
[**emailDeliveryReceiptAutomationsGet**](EmailDeliveryReceiptRulesApi.md#emaildeliveryreceiptautomationsget) | **GET** /automations/email/receipts | Get all email delivery receipt automations

# **emailDeliveryReceiptAutomationDelete**
> string emailDeliveryReceiptAutomationDelete($receipt_rule_id)

Delete email delivery receipt automation

Delete email delivery receipt automation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailDeliveryReceiptRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_rule_id = 56; // int | Receipt rule id

try {
    $result = $apiInstance->emailDeliveryReceiptAutomationDelete($receipt_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailDeliveryReceiptRulesApi->emailDeliveryReceiptAutomationDelete: ', $e->getMessage(), PHP_EOL;
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

# **emailDeliveryReceiptAutomationGet**
> string emailDeliveryReceiptAutomationGet($receipt_rule_id)

Get specific email delivery receipt automation

Get specific email delivery receipt automation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailDeliveryReceiptRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_rule_id = 56; // int | Receipt rule id

try {
    $result = $apiInstance->emailDeliveryReceiptAutomationGet($receipt_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailDeliveryReceiptRulesApi->emailDeliveryReceiptAutomationGet: ', $e->getMessage(), PHP_EOL;
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

# **emailDeliveryReceiptAutomationPost**
> string emailDeliveryReceiptAutomationPost($body)

Create email delivery receipt automations

Create email delivery receipt automations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailDeliveryReceiptRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\DeliveryReceiptRule(); // \ClickSend\Model\DeliveryReceiptRule | Email delivery receipt rule model

try {
    $result = $apiInstance->emailDeliveryReceiptAutomationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailDeliveryReceiptRulesApi->emailDeliveryReceiptAutomationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\DeliveryReceiptRule**](../Model/DeliveryReceiptRule.md)| Email delivery receipt rule model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailDeliveryReceiptAutomationPut**
> string emailDeliveryReceiptAutomationPut($body, $receipt_rule_id)

Update email delivery receipt automation

Update email delivery receipt automation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailDeliveryReceiptRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\DeliveryReceiptRule(); // \ClickSend\Model\DeliveryReceiptRule | Delivery receipt rule model
$receipt_rule_id = 56; // int | Receipt rule id

try {
    $result = $apiInstance->emailDeliveryReceiptAutomationPut($body, $receipt_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailDeliveryReceiptRulesApi->emailDeliveryReceiptAutomationPut: ', $e->getMessage(), PHP_EOL;
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

# **emailDeliveryReceiptAutomationsGet**
> string emailDeliveryReceiptAutomationsGet($q, $page, $limit)

Get all email delivery receipt automations

Get all email delivery receipt automations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailDeliveryReceiptRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Your keyword or query.
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->emailDeliveryReceiptAutomationsGet($q, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailDeliveryReceiptRulesApi->emailDeliveryReceiptAutomationsGet: ', $e->getMessage(), PHP_EOL;
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

