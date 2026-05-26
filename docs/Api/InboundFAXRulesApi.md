# ClickSend\InboundFAXRulesApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**faxInboundAutomationDelete**](InboundFAXRulesApi.md#faxInboundAutomationDelete) | **DELETE** /automations/fax/inbound/{inbound_rule_id} | Delete inbound fax automation
[**faxInboundAutomationGet**](InboundFAXRulesApi.md#faxInboundAutomationGet) | **GET** /automations/fax/inbound/{inbound_rule_id} | Get specific inbound fax automation
[**faxInboundAutomationPost**](InboundFAXRulesApi.md#faxInboundAutomationPost) | **POST** /automations/fax/inbound | Create new inbound fax automation
[**faxInboundAutomationPut**](InboundFAXRulesApi.md#faxInboundAutomationPut) | **PUT** /automations/fax/inbound/{inbound_rule_id} | Update inbound fax automation
[**faxInboundAutomationsGet**](InboundFAXRulesApi.md#faxInboundAutomationsGet) | **GET** /automations/fax/inbound | Get all inbound fax automations


# **faxInboundAutomationDelete**
> string faxInboundAutomationDelete($inbound_rule_id)

Delete inbound fax automation

Delete inbound fax automation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\InboundFAXRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbound_rule_id = 56; // int | Inbound rule id

try {
    $result = $apiInstance->faxInboundAutomationDelete($inbound_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundFAXRulesApi->faxInboundAutomationDelete: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faxInboundAutomationGet**
> string faxInboundAutomationGet($inbound_rule_id)

Get specific inbound fax automation

Get specific inbound fax automation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\InboundFAXRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbound_rule_id = 56; // int | Inbound rule id

try {
    $result = $apiInstance->faxInboundAutomationGet($inbound_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundFAXRulesApi->faxInboundAutomationGet: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faxInboundAutomationPost**
> string faxInboundAutomationPost($inbound_fax_rule)

Create new inbound fax automation

Create new inbound fax automation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\InboundFAXRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbound_fax_rule = new \ClickSend\Model\InboundFaxRule(); // \ClickSend\Model\InboundFaxRule | Inbound fax rule model

try {
    $result = $apiInstance->faxInboundAutomationPost($inbound_fax_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundFAXRulesApi->faxInboundAutomationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_fax_rule** | [**\ClickSend\Model\InboundFaxRule**](../Model/InboundFaxRule.md)| Inbound fax rule model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faxInboundAutomationPut**
> string faxInboundAutomationPut($inbound_rule_id, $inbound_fax_rule)

Update inbound fax automation

Update inbound fax automation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\InboundFAXRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbound_rule_id = 56; // int | Inbound rule id
$inbound_fax_rule = new \ClickSend\Model\InboundFaxRule(); // \ClickSend\Model\InboundFaxRule | Inbound fax rule model

try {
    $result = $apiInstance->faxInboundAutomationPut($inbound_rule_id, $inbound_fax_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundFAXRulesApi->faxInboundAutomationPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_rule_id** | **int**| Inbound rule id |
 **inbound_fax_rule** | [**\ClickSend\Model\InboundFaxRule**](../Model/InboundFaxRule.md)| Inbound fax rule model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faxInboundAutomationsGet**
> string faxInboundAutomationsGet($q, $page, $limit)

Get all inbound fax automations

Get all inbound fax automations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\InboundFAXRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Your keyword or query.
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->faxInboundAutomationsGet($q, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundFAXRulesApi->faxInboundAutomationsGet: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

