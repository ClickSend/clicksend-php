# ClickSend\SMSApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**smsCancelAllPut**](SMSApi.md#smsCancelAllPut) | **PUT** /sms/cancel-all | Update all scheduled message as cancelled
[**smsCancelByMessageIdPut**](SMSApi.md#smsCancelByMessageIdPut) | **PUT** /sms/{message_id}/cancel | Update scheduled message as cancelled
[**smsHistoryExportGet**](SMSApi.md#smsHistoryExportGet) | **GET** /sms/history/export | Export all sms history
[**smsHistoryGet**](SMSApi.md#smsHistoryGet) | **GET** /sms/history | Get all sms history
[**smsInboundGet**](SMSApi.md#smsInboundGet) | **GET** /sms/inbound | Get all inbound sms
[**smsInboundPost**](SMSApi.md#smsInboundPost) | **POST** /sms/inbound | Create inbound sms
[**smsInboundReadByMessageIdPut**](SMSApi.md#smsInboundReadByMessageIdPut) | **PUT** /sms/inbound-read/{message_id} | Mark inbound SMS as read
[**smsInboundReadPut**](SMSApi.md#smsInboundReadPut) | **PUT** /sms/inbound-read | Mark inbound SMS as read
[**smsPricePost**](SMSApi.md#smsPricePost) | **POST** /sms/price | Calculate sms price
[**smsReceiptsByMessageIdGet**](SMSApi.md#smsReceiptsByMessageIdGet) | **GET** /sms/receipts/{message_id} | Get a Specific Delivery Receipt
[**smsReceiptsGet**](SMSApi.md#smsReceiptsGet) | **GET** /sms/receipts | Get all delivery receipts
[**smsReceiptsPost**](SMSApi.md#smsReceiptsPost) | **POST** /sms/receipts | Add a delivery receipt
[**smsReceiptsReadPut**](SMSApi.md#smsReceiptsReadPut) | **PUT** /sms/receipts-read | Mark delivery receipts as read
[**smsSendPost**](SMSApi.md#smsSendPost) | **POST** /sms/send | Send sms message(s)
[**smsTemplatesByTemplateIdDelete**](SMSApi.md#smsTemplatesByTemplateIdDelete) | **DELETE** /sms/templates/{template_id} | Delete sms template
[**smsTemplatesByTemplateIdPut**](SMSApi.md#smsTemplatesByTemplateIdPut) | **PUT** /sms/templates/{template_id} | Update sms template
[**smsTemplatesGet**](SMSApi.md#smsTemplatesGet) | **GET** /sms/templates | Get lists of all sms templates
[**smsTemplatesPost**](SMSApi.md#smsTemplatesPost) | **POST** /sms/templates | Create sms template


# **smsCancelAllPut**
> string smsCancelAllPut()

Update all scheduled message as cancelled

Update all scheduled message as cancelled

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->smsCancelAllPut();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsCancelAllPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsCancelByMessageIdPut**
> string smsCancelByMessageIdPut($message_id)

Update scheduled message as cancelled

Update scheduled message as cancelled

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = "message_id_example"; // string | The message ID you want to cancel

try {
    $result = $apiInstance->smsCancelByMessageIdPut($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsCancelByMessageIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**| The message ID you want to cancel |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsHistoryExportGet**
> string smsHistoryExportGet($filename)

Export all sms history

Export all sms history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filename = "filename_example"; // string | Filename to download history as

try {
    $result = $apiInstance->smsHistoryExportGet($filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsHistoryExportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filename** | **string**| Filename to download history as |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsHistoryGet**
> string smsHistoryGet($q, $date_from, $date_to, $page, $limit)

Get all sms history

Get all sms history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Custom query Example: from:{number},status_code:201.
$date_from = 56; // int | Start date
$date_to = 56; // int | End date
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->smsHistoryGet($q, $date_from, $date_to, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsHistoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Custom query Example: from:{number},status_code:201. | [optional]
 **date_from** | **int**| Start date | [optional]
 **date_to** | **int**| End date | [optional]
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

# **smsInboundGet**
> string smsInboundGet($q, $page, $limit)

Get all inbound sms

Get all inbound sms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Your keyword or query.
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->smsInboundGet($q, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsInboundGet: ', $e->getMessage(), PHP_EOL;
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

# **smsInboundPost**
> string smsInboundPost($url)

Create inbound sms

Create inbound sms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = new \ClickSend\Model\Url(); // \ClickSend\Model\Url | Url model

try {
    $result = $apiInstance->smsInboundPost($url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsInboundPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | [**\ClickSend\Model\Url**](../Model/Url.md)| Url model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsInboundReadByMessageIdPut**
> string smsInboundReadByMessageIdPut($message_id)

Mark inbound SMS as read

Mark specific inbound SMS as read

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = "message_id_example"; // string | Message ID

try {
    $result = $apiInstance->smsInboundReadByMessageIdPut($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsInboundReadByMessageIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**| Message ID |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsInboundReadPut**
> string smsInboundReadPut($date_before)

Mark inbound SMS as read

Mark all inbound SMS as read optionally before a certain date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_before = new \ClickSend\Model\DateBefore(); // \ClickSend\Model\DateBefore | DateBefore model

try {
    $result = $apiInstance->smsInboundReadPut($date_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsInboundReadPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_before** | [**\ClickSend\Model\DateBefore**](../Model/DateBefore.md)| DateBefore model | [optional]

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsPricePost**
> string smsPricePost($sms_messages)

Calculate sms price

Calculate sms price

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_messages = new \ClickSend\Model\SmsMessageCollection(); // \ClickSend\Model\SmsMessageCollection | SmsMessageCollection model

try {
    $result = $apiInstance->smsPricePost($sms_messages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsPricePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sms_messages** | [**\ClickSend\Model\SmsMessageCollection**](../Model/SmsMessageCollection.md)| SmsMessageCollection model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsReceiptsByMessageIdGet**
> string smsReceiptsByMessageIdGet($message_id)

Get a Specific Delivery Receipt

Get a Specific Delivery Receipt

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = "message_id_example"; // string | Message ID

try {
    $result = $apiInstance->smsReceiptsByMessageIdGet($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsReceiptsByMessageIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**| Message ID |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsReceiptsGet**
> string smsReceiptsGet($page, $limit)

Get all delivery receipts

Get all delivery receipts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->smsReceiptsGet($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsReceiptsGet: ', $e->getMessage(), PHP_EOL;
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

# **smsReceiptsPost**
> string smsReceiptsPost($url)

Add a delivery receipt

Add a delivery receipt

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = new \ClickSend\Model\Url(); // \ClickSend\Model\Url | Url model

try {
    $result = $apiInstance->smsReceiptsPost($url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsReceiptsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | [**\ClickSend\Model\Url**](../Model/Url.md)| Url model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsReceiptsReadPut**
> string smsReceiptsReadPut($date_before)

Mark delivery receipts as read

Mark delivery receipts as read

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_before = new \ClickSend\Model\DateBefore(); // \ClickSend\Model\DateBefore | DateBefore model

try {
    $result = $apiInstance->smsReceiptsReadPut($date_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsReceiptsReadPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_before** | [**\ClickSend\Model\DateBefore**](../Model/DateBefore.md)| DateBefore model | [optional]

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsSendPost**
> string smsSendPost($sms_messages)

Send sms message(s)

# Send one or more SMS messages  You can post up to 1000 messages with each API call. You can send to a mix of contacts and contact lists, as long as the total number of recipients is up to 1000.  The response contains status and details for each recipient.  *Refer to [Application Status Codes](https://developers.clicksend.com/docs/#application-status-codes) for the possible response message status strings.*

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_messages = new \ClickSend\Model\SmsMessageCollection(); // \ClickSend\Model\SmsMessageCollection | SmsMessageCollection model

try {
    $result = $apiInstance->smsSendPost($sms_messages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsSendPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sms_messages** | [**\ClickSend\Model\SmsMessageCollection**](../Model/SmsMessageCollection.md)| SmsMessageCollection model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsTemplatesByTemplateIdDelete**
> string smsTemplatesByTemplateIdDelete($template_id)

Delete sms template

Delete sms template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 56; // int | Template id

try {
    $result = $apiInstance->smsTemplatesByTemplateIdDelete($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsTemplatesByTemplateIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| Template id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsTemplatesByTemplateIdPut**
> string smsTemplatesByTemplateIdPut($template_id, $sms_template)

Update sms template

Update sms template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 56; // int | Template id
$sms_template = new \ClickSend\Model\SmsTemplate(); // \ClickSend\Model\SmsTemplate | Template item

try {
    $result = $apiInstance->smsTemplatesByTemplateIdPut($template_id, $sms_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsTemplatesByTemplateIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| Template id |
 **sms_template** | [**\ClickSend\Model\SmsTemplate**](../Model/SmsTemplate.md)| Template item |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsTemplatesGet**
> string smsTemplatesGet($page, $limit)

Get lists of all sms templates

Get lists of all sms templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->smsTemplatesGet($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsTemplatesGet: ', $e->getMessage(), PHP_EOL;
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

# **smsTemplatesPost**
> string smsTemplatesPost($sms_template)

Create sms template

Create sms template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_template = new \ClickSend\Model\SmsTemplate(); // \ClickSend\Model\SmsTemplate | SmsTemplate model

try {
    $result = $apiInstance->smsTemplatesPost($sms_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->smsTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sms_template** | [**\ClickSend\Model\SmsTemplate**](../Model/SmsTemplate.md)| SmsTemplate model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

