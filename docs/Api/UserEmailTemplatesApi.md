# ClickSend\UserEmailTemplatesApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**emailTemplateDelete**](UserEmailTemplatesApi.md#emailtemplatedelete) | **DELETE** /email/templates/{template_id} | Delete user email template
[**emailTemplateGet**](UserEmailTemplatesApi.md#emailtemplateget) | **GET** /email/templates/{template_id} | Get specific user email template
[**emailTemplatePost**](UserEmailTemplatesApi.md#emailtemplatepost) | **POST** /email/templates | Create email template
[**emailTemplatePut**](UserEmailTemplatesApi.md#emailtemplateput) | **PUT** /email/templates/{template_id} | Update email template
[**emailTemplatesGet**](UserEmailTemplatesApi.md#emailtemplatesget) | **GET** /email/templates | Get all user email templates

# **emailTemplateDelete**
> string emailTemplateDelete($template_id)

Delete user email template

Delete user email template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\UserEmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 56; // int | Email template id

try {
    $result = $apiInstance->emailTemplateDelete($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEmailTemplatesApi->emailTemplateDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| Email template id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailTemplateGet**
> string emailTemplateGet($template_id)

Get specific user email template

Get specific user email templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\UserEmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 56; // int | Email template id

try {
    $result = $apiInstance->emailTemplateGet($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEmailTemplatesApi->emailTemplateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| Email template id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailTemplatePost**
> string emailTemplatePost($body)

Create email template

Create email template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\UserEmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\EmailTemplateNew(); // \ClickSend\Model\EmailTemplateNew | Email template model

try {
    $result = $apiInstance->emailTemplatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEmailTemplatesApi->emailTemplatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\EmailTemplateNew**](../Model/EmailTemplateNew.md)| Email template model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailTemplatePut**
> string emailTemplatePut($body, $template_id)

Update email template

Update email template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\UserEmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\EmailTemplateUpdate(); // \ClickSend\Model\EmailTemplateUpdate | Email template model
$template_id = 56; // int | Email template id

try {
    $result = $apiInstance->emailTemplatePut($body, $template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEmailTemplatesApi->emailTemplatePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\EmailTemplateUpdate**](../Model/EmailTemplateUpdate.md)| Email template model |
 **template_id** | **int**| Email template id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailTemplatesGet**
> string emailTemplatesGet($page, $limit)

Get all user email templates

Get all user email templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\UserEmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->emailTemplatesGet($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEmailTemplatesApi->emailTemplatesGet: ', $e->getMessage(), PHP_EOL;
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

