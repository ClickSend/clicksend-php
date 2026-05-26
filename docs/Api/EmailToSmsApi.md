# ClickSend\EmailToSmsApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**smsEmailSmsGet**](EmailToSmsApi.md#smsEmailSmsGet) | **GET** /sms/email-sms | Get list of email to sms allowed addresses
[**smsEmailSmsPost**](EmailToSmsApi.md#smsEmailSmsPost) | **POST** /sms/email-sms | Create email to sms allowed address
[**smsEmailSmsStrippedStringDelete**](EmailToSmsApi.md#smsEmailSmsStrippedStringDelete) | **DELETE** /sms/email-sms-stripped-strings/{rule_id} | Delete email to sms stripped string rule
[**smsEmailSmsStrippedStringGet**](EmailToSmsApi.md#smsEmailSmsStrippedStringGet) | **GET** /sms/email-sms-stripped-strings/{rule_id} | Get email to sms stripped string rule
[**smsEmailSmsStrippedStringPost**](EmailToSmsApi.md#smsEmailSmsStrippedStringPost) | **POST** /sms/email-sms-stripped-strings | Create email to sms stripped string rule
[**smsEmailSmsStrippedStringPut**](EmailToSmsApi.md#smsEmailSmsStrippedStringPut) | **PUT** /sms/email-sms-stripped-strings/{rule_id} | Update email to sms stripped string rule
[**smsEmailSmsStrippedStringsGet**](EmailToSmsApi.md#smsEmailSmsStrippedStringsGet) | **GET** /sms/email-sms-stripped-strings | Get list of email to sms stripped string rules


# **smsEmailSmsGet**
> string smsEmailSmsGet($page, $limit)

Get list of email to sms allowed addresses

Get list of email to sms allowed addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailToSmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->smsEmailSmsGet($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailToSmsApi->smsEmailSmsGet: ', $e->getMessage(), PHP_EOL;
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

# **smsEmailSmsPost**
> string smsEmailSmsPost($email_sms_address)

Create email to sms allowed address

Create email to sms allowed address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailToSmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_sms_address = new \ClickSend\Model\EmailSMSAddress(); // \ClickSend\Model\EmailSMSAddress | EmailSMSAddress model

try {
    $result = $apiInstance->smsEmailSmsPost($email_sms_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailToSmsApi->smsEmailSmsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_sms_address** | [**\ClickSend\Model\EmailSMSAddress**](../Model/EmailSMSAddress.md)| EmailSMSAddress model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsEmailSmsStrippedStringDelete**
> string smsEmailSmsStrippedStringDelete($rule_id)

Delete email to sms stripped string rule

Delete email to sms stripped string rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailToSmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 56; // int | Your rule id

try {
    $result = $apiInstance->smsEmailSmsStrippedStringDelete($rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailToSmsApi->smsEmailSmsStrippedStringDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **int**| Your rule id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsEmailSmsStrippedStringGet**
> string smsEmailSmsStrippedStringGet($rule_id)

Get email to sms stripped string rule

Get email to sms stripped string rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailToSmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 56; // int | Your rule id

try {
    $result = $apiInstance->smsEmailSmsStrippedStringGet($rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailToSmsApi->smsEmailSmsStrippedStringGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **int**| Your rule id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsEmailSmsStrippedStringPost**
> string smsEmailSmsStrippedStringPost($stripped_string)

Create email to sms stripped string rule

Create email to sms stripped string rules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailToSmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stripped_string = new \ClickSend\Model\StrippedString(); // \ClickSend\Model\StrippedString | StrippedString model

try {
    $result = $apiInstance->smsEmailSmsStrippedStringPost($stripped_string);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailToSmsApi->smsEmailSmsStrippedStringPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stripped_string** | [**\ClickSend\Model\StrippedString**](../Model/StrippedString.md)| StrippedString model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsEmailSmsStrippedStringPut**
> string smsEmailSmsStrippedStringPut($stripped_string, $rule_id)

Update email to sms stripped string rule

Update email to sms stripped string rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailToSmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stripped_string = new \ClickSend\Model\StrippedString(); // \ClickSend\Model\StrippedString | StrippedString model
$rule_id = 56; // int | Your rule id

try {
    $result = $apiInstance->smsEmailSmsStrippedStringPut($stripped_string, $rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailToSmsApi->smsEmailSmsStrippedStringPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stripped_string** | [**\ClickSend\Model\StrippedString**](../Model/StrippedString.md)| StrippedString model |
 **rule_id** | **int**| Your rule id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsEmailSmsStrippedStringsGet**
> string smsEmailSmsStrippedStringsGet($page, $limit)

Get list of email to sms stripped string rules

Get list of email to sms stripped string rules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailToSmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->smsEmailSmsStrippedStringsGet($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailToSmsApi->smsEmailSmsStrippedStringsGet: ', $e->getMessage(), PHP_EOL;
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

