# ClickSend\InboundSMSRulesApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**smsInboundAutomationDelete**](InboundSMSRulesApi.md#smsinboundautomationdelete) | **DELETE** /automations/sms/inbound/{inbound_rule_id} | Delete inbound sms automation
[**smsInboundAutomationGet**](InboundSMSRulesApi.md#smsinboundautomationget) | **GET** /automations/sms/inbound/{inbound_rule_id} | Get specific inbound sms automation
[**smsInboundAutomationPost**](InboundSMSRulesApi.md#smsinboundautomationpost) | **POST** /automations/sms/inbound | Create new inbound sms automation
[**smsInboundAutomationPut**](InboundSMSRulesApi.md#smsinboundautomationput) | **PUT** /automations/sms/inbound/{inbound_rule_id} | Update inbound sms automation
[**smsInboundAutomationsGet**](InboundSMSRulesApi.md#smsinboundautomationsget) | **GET** /automations/sms/inbound | Get all inbound sms automations

# **smsInboundAutomationDelete**
> string smsInboundAutomationDelete($inbound_rule_id)

Delete inbound sms automation

Delete inbound sms automation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\InboundSMSRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbound_rule_id = 56; // int | Inbound rule id

try {
    $result = $apiInstance->smsInboundAutomationDelete($inbound_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundSMSRulesApi->smsInboundAutomationDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_rule_id** | **int**| Inbound rule id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsInboundAutomationGet**
> string smsInboundAutomationGet($inbound_rule_id)

Get specific inbound sms automation

Get specific inbound sms automation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\InboundSMSRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbound_rule_id = 56; // int | Inbound rule id

try {
    $result = $apiInstance->smsInboundAutomationGet($inbound_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundSMSRulesApi->smsInboundAutomationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_rule_id** | **int**| Inbound rule id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsInboundAutomationPost**
> string smsInboundAutomationPost($body)

Create new inbound sms automation

Create new inbound sms automation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\InboundSMSRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\InboundSMSRule(); // \ClickSend\Model\InboundSMSRule | Inbound sms rule model

try {
    $result = $apiInstance->smsInboundAutomationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundSMSRulesApi->smsInboundAutomationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\InboundSMSRule**](../Model/InboundSMSRule.md)| Inbound sms rule model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsInboundAutomationPut**
> string smsInboundAutomationPut($body, $inbound_rule_id)

Update inbound sms automation

Update inbound sms automation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\InboundSMSRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\InboundSMSRule(); // \ClickSend\Model\InboundSMSRule | Inbound sms rule model
$inbound_rule_id = 56; // int | Inbound rule id

try {
    $result = $apiInstance->smsInboundAutomationPut($body, $inbound_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundSMSRulesApi->smsInboundAutomationPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\InboundSMSRule**](../Model/InboundSMSRule.md)| Inbound sms rule model |
 **inbound_rule_id** | **int**| Inbound rule id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsInboundAutomationsGet**
> string smsInboundAutomationsGet($q, $page, $limit)

Get all inbound sms automations

Get all inbound sms automations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\InboundSMSRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Your keyword or query.
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->smsInboundAutomationsGet($q, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundSMSRulesApi->smsInboundAutomationsGet: ', $e->getMessage(), PHP_EOL;
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

