# ClickSend\VoiceDeliveryReceiptRulesApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**voiceDeliveryReceiptAutomationDelete**](VoiceDeliveryReceiptRulesApi.md#voicedeliveryreceiptautomationdelete) | **DELETE** /automations/voice/receipts/{receipt_rule_id} | Delete voice delivery receipt automation
[**voiceDeliveryReceiptAutomationGet**](VoiceDeliveryReceiptRulesApi.md#voicedeliveryreceiptautomationget) | **GET** /automations/voice/receipts/{receipt_rule_id} | Get specific voice delivery receipt automation
[**voiceDeliveryReceiptAutomationPost**](VoiceDeliveryReceiptRulesApi.md#voicedeliveryreceiptautomationpost) | **POST** /automations/voice/receipts | Create voice delivery receipt automations
[**voiceDeliveryReceiptAutomationPut**](VoiceDeliveryReceiptRulesApi.md#voicedeliveryreceiptautomationput) | **PUT** /automations/voice/receipts/{receipt_rule_id} | Update voice delivery receipt automation
[**voiceDeliveryReceiptAutomationsGet**](VoiceDeliveryReceiptRulesApi.md#voicedeliveryreceiptautomationsget) | **GET** /automations/voice/receipts | Get all voice delivery receipt automations

# **voiceDeliveryReceiptAutomationDelete**
> string voiceDeliveryReceiptAutomationDelete($receipt_rule_id)

Delete voice delivery receipt automation

Delete voice delivery receipt automation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\VoiceDeliveryReceiptRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_rule_id = 56; // int | Receipt rule id

try {
    $result = $apiInstance->voiceDeliveryReceiptAutomationDelete($receipt_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceDeliveryReceiptRulesApi->voiceDeliveryReceiptAutomationDelete: ', $e->getMessage(), PHP_EOL;
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

# **voiceDeliveryReceiptAutomationGet**
> string voiceDeliveryReceiptAutomationGet($receipt_rule_id)

Get specific voice delivery receipt automation

Get specific voice delivery receipt automation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\VoiceDeliveryReceiptRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_rule_id = 56; // int | Receipt rule id

try {
    $result = $apiInstance->voiceDeliveryReceiptAutomationGet($receipt_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceDeliveryReceiptRulesApi->voiceDeliveryReceiptAutomationGet: ', $e->getMessage(), PHP_EOL;
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

# **voiceDeliveryReceiptAutomationPost**
> string voiceDeliveryReceiptAutomationPost($body)

Create voice delivery receipt automations

Create voice delivery receipt automations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\VoiceDeliveryReceiptRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\DeliveryReceiptRule(); // \ClickSend\Model\DeliveryReceiptRule | voice delivery receipt rule model

try {
    $result = $apiInstance->voiceDeliveryReceiptAutomationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceDeliveryReceiptRulesApi->voiceDeliveryReceiptAutomationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\DeliveryReceiptRule**](../Model/DeliveryReceiptRule.md)| voice delivery receipt rule model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voiceDeliveryReceiptAutomationPut**
> string voiceDeliveryReceiptAutomationPut($body, $receipt_rule_id)

Update voice delivery receipt automation

Update voice delivery receipt automation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\VoiceDeliveryReceiptRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\DeliveryReceiptRule(); // \ClickSend\Model\DeliveryReceiptRule | Delivery receipt rule model
$receipt_rule_id = 56; // int | Receipt rule id

try {
    $result = $apiInstance->voiceDeliveryReceiptAutomationPut($body, $receipt_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceDeliveryReceiptRulesApi->voiceDeliveryReceiptAutomationPut: ', $e->getMessage(), PHP_EOL;
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

# **voiceDeliveryReceiptAutomationsGet**
> string voiceDeliveryReceiptAutomationsGet($q, $page, $limit)

Get all voice delivery receipt automations

Get all voice delivery receipt automations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\VoiceDeliveryReceiptRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Your keyword or query.
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->voiceDeliveryReceiptAutomationsGet($q, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceDeliveryReceiptRulesApi->voiceDeliveryReceiptAutomationsGet: ', $e->getMessage(), PHP_EOL;
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

