# ClickSend\MmsCampaignApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mmsCampaignByMmsCampaignIdGet**](MmsCampaignApi.md#mmsCampaignByMmsCampaignIdGet) | **GET** /mms-campaigns/{mms_campaign_id} | Get specific mms campaign
[**mmsCampaignsByMmsCampaignIdPut**](MmsCampaignApi.md#mmsCampaignsByMmsCampaignIdPut) | **PUT** /mms-campaigns/{mms_campaign_id} | Update mms campaign
[**mmsCampaignsCancelByMmsCampaignIdPut**](MmsCampaignApi.md#mmsCampaignsCancelByMmsCampaignIdPut) | **PUT** /mms-campaigns/{mms_campaign_id}/cancel | Cancel mms campaign
[**mmsCampaignsGet**](MmsCampaignApi.md#mmsCampaignsGet) | **GET** /mms-campaigns | Get list of mms campaigns
[**mmsCampaignsPricePost**](MmsCampaignApi.md#mmsCampaignsPricePost) | **POST** /mms-campaigns/price | Calculate price for mms campaign
[**mmsCampaignsSendPost**](MmsCampaignApi.md#mmsCampaignsSendPost) | **POST** /mms-campaigns/send | Create mms campaign


# **mmsCampaignByMmsCampaignIdGet**
> string mmsCampaignByMmsCampaignIdGet($mms_campaign_id)

Get specific mms campaign

Get specific mms campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\MmsCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mms_campaign_id = 56; // int | ID of MMS campaign to retrieve

try {
    $result = $apiInstance->mmsCampaignByMmsCampaignIdGet($mms_campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MmsCampaignApi->mmsCampaignByMmsCampaignIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mms_campaign_id** | **int**| ID of MMS campaign to retrieve |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mmsCampaignsByMmsCampaignIdPut**
> string mmsCampaignsByMmsCampaignIdPut($mms_campaign_id, $campaign)

Update mms campaign

Update mms campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\MmsCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mms_campaign_id = 56; // int | ID of MMS campaign to update
$campaign = new \ClickSend\Model\MmsCampaign(); // \ClickSend\Model\MmsCampaign | MmsCampaign model

try {
    $result = $apiInstance->mmsCampaignsByMmsCampaignIdPut($mms_campaign_id, $campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MmsCampaignApi->mmsCampaignsByMmsCampaignIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mms_campaign_id** | **int**| ID of MMS campaign to update |
 **campaign** | [**\ClickSend\Model\MmsCampaign**](../Model/MmsCampaign.md)| MmsCampaign model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mmsCampaignsCancelByMmsCampaignIdPut**
> string mmsCampaignsCancelByMmsCampaignIdPut($mms_campaign_id)

Cancel mms campaign

Cancel sms campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\MmsCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mms_campaign_id = 56; // int | ID of MMS Campaign to cancel

try {
    $result = $apiInstance->mmsCampaignsCancelByMmsCampaignIdPut($mms_campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MmsCampaignApi->mmsCampaignsCancelByMmsCampaignIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mms_campaign_id** | **int**| ID of MMS Campaign to cancel |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mmsCampaignsGet**
> string mmsCampaignsGet($page, $limit)

Get list of mms campaigns

Get list of mms campaigns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\MmsCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->mmsCampaignsGet($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MmsCampaignApi->mmsCampaignsGet: ', $e->getMessage(), PHP_EOL;
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

# **mmsCampaignsPricePost**
> string mmsCampaignsPricePost($campaign)

Calculate price for mms campaign

Calculate price for sms campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\MmsCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign = new \ClickSend\Model\MmsCampaign(); // \ClickSend\Model\MmsCampaign | MmsCampaign model

try {
    $result = $apiInstance->mmsCampaignsPricePost($campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MmsCampaignApi->mmsCampaignsPricePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign** | [**\ClickSend\Model\MmsCampaign**](../Model/MmsCampaign.md)| MmsCampaign model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mmsCampaignsSendPost**
> string mmsCampaignsSendPost($campaign)

Create mms campaign

Create mms campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\MmsCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign = new \ClickSend\Model\MmsCampaign(); // \ClickSend\Model\MmsCampaign | MmsCampaign model

try {
    $result = $apiInstance->mmsCampaignsSendPost($campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MmsCampaignApi->mmsCampaignsSendPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign** | [**\ClickSend\Model\MmsCampaign**](../Model/MmsCampaign.md)| MmsCampaign model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

