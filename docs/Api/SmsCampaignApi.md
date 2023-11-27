# ClickSend\SmsCampaignApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**smsCampaignBySmsCampaignIdGet**](SmsCampaignApi.md#smscampaignbysmscampaignidget) | **GET** /sms-campaigns/{sms_campaign_id} | Get specific sms campaign
[**smsCampaignsBySmsCampaignIdPut**](SmsCampaignApi.md#smscampaignsbysmscampaignidput) | **PUT** /sms-campaigns/{sms_campaign_id} | Update sms campaign
[**smsCampaignsCancelBySmsCampaignIdPut**](SmsCampaignApi.md#smscampaignscancelbysmscampaignidput) | **PUT** /sms-campaigns/{sms_campaign_id}/cancel | Cancel sms campaign
[**smsCampaignsGet**](SmsCampaignApi.md#smscampaignsget) | **GET** /sms-campaigns | Get list of sms campaigns
[**smsCampaignsPricePost**](SmsCampaignApi.md#smscampaignspricepost) | **POST** /sms-campaigns/price | Calculate price for sms campaign
[**smsCampaignsSendPost**](SmsCampaignApi.md#smscampaignssendpost) | **POST** /sms-campaigns/send | Create sms campaign

# **smsCampaignBySmsCampaignIdGet**
> string smsCampaignBySmsCampaignIdGet($sms_campaign_id)

Get specific sms campaign

Get specific sms campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SmsCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_campaign_id = 56; // int | ID of SMS campaign to retrieve

try {
    $result = $apiInstance->smsCampaignBySmsCampaignIdGet($sms_campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsCampaignApi->smsCampaignBySmsCampaignIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sms_campaign_id** | **int**| ID of SMS campaign to retrieve |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsCampaignsBySmsCampaignIdPut**
> string smsCampaignsBySmsCampaignIdPut($body, $sms_campaign_id)

Update sms campaign

Update sms campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SmsCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\SmsCampaign(); // \ClickSend\Model\SmsCampaign | SmsCampaign model
$sms_campaign_id = 56; // int | ID of SMS campaign to update

try {
    $result = $apiInstance->smsCampaignsBySmsCampaignIdPut($body, $sms_campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsCampaignApi->smsCampaignsBySmsCampaignIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\SmsCampaign**](../Model/SmsCampaign.md)| SmsCampaign model |
 **sms_campaign_id** | **int**| ID of SMS campaign to update |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsCampaignsCancelBySmsCampaignIdPut**
> string smsCampaignsCancelBySmsCampaignIdPut($sms_campaign_id)

Cancel sms campaign

Cancel sms campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SmsCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_campaign_id = 56; // int | ID of SMS Campaign to cancel

try {
    $result = $apiInstance->smsCampaignsCancelBySmsCampaignIdPut($sms_campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsCampaignApi->smsCampaignsCancelBySmsCampaignIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sms_campaign_id** | **int**| ID of SMS Campaign to cancel |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsCampaignsGet**
> string smsCampaignsGet($page, $limit)

Get list of sms campaigns

Get list of sms campaigns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SmsCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->smsCampaignsGet($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsCampaignApi->smsCampaignsGet: ', $e->getMessage(), PHP_EOL;
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

# **smsCampaignsPricePost**
> string smsCampaignsPricePost($body)

Calculate price for sms campaign

Calculate price for sms campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SmsCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\SmsCampaign(); // \ClickSend\Model\SmsCampaign | SmsCampaign model

try {
    $result = $apiInstance->smsCampaignsPricePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsCampaignApi->smsCampaignsPricePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\SmsCampaign**](../Model/SmsCampaign.md)| SmsCampaign model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsCampaignsSendPost**
> string smsCampaignsSendPost($body)

Create sms campaign

Create sms campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SmsCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\SmsCampaign(); // \ClickSend\Model\SmsCampaign | SmsCampaign model

try {
    $result = $apiInstance->smsCampaignsSendPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsCampaignApi->smsCampaignsSendPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\SmsCampaign**](../Model/SmsCampaign.md)| SmsCampaign model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

