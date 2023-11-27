# ClickSend\EmailMarketingApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allowedEmailAddressGet**](EmailMarketingApi.md#allowedemailaddressget) | **GET** /email/addresses | Get all email addresses
[**allowedEmailAddressPost**](EmailMarketingApi.md#allowedemailaddresspost) | **POST** /email/addresses | Create allowed Email Address
[**cancelEmailCampaignPut**](EmailMarketingApi.md#cancelemailcampaignput) | **PUT** /email-campaigns/{email_campaign_id}/cancel | Cancel email campaign
[**emailCampaignGet**](EmailMarketingApi.md#emailcampaignget) | **GET** /email-campaigns/{email_campaign_id} | Get specific email campaign
[**emailCampaignHistoryExportGet**](EmailMarketingApi.md#emailcampaignhistoryexportget) | **GET** /email-campaigns/{email_campaign_id}/history/export | Export specific email campaign history
[**emailCampaignHistoryGet**](EmailMarketingApi.md#emailcampaignhistoryget) | **GET** /email-campaigns/{email_campaign_id}/history | Get specific email campaign history
[**emailCampaignPost**](EmailMarketingApi.md#emailcampaignpost) | **POST** /email-campaigns/send | Send email campaign
[**emailCampaignPricePost**](EmailMarketingApi.md#emailcampaignpricepost) | **POST** /email-campaigns/price | Calculate email campaign price
[**emailCampaignPut**](EmailMarketingApi.md#emailcampaignput) | **PUT** /email-campaigns/{email_campaign_id} | Edit email campaign
[**emailCampaignsGet**](EmailMarketingApi.md#emailcampaignsget) | **GET** /email-campaigns | Get all email campaigns
[**sendVerificationTokenGet**](EmailMarketingApi.md#sendverificationtokenget) | **PUT** /email/address-verify/{email_address_id}/send | Send verification token
[**specificAllowedEmailAddressDelete**](EmailMarketingApi.md#specificallowedemailaddressdelete) | **DELETE** /email/addresses/{email_address_id} | Delete specific email address
[**specificAllowedEmailAddressGet**](EmailMarketingApi.md#specificallowedemailaddressget) | **GET** /email/addresses/{email_address_id} | Get specific email address
[**verifyAllowedEmailAddressGet**](EmailMarketingApi.md#verifyallowedemailaddressget) | **PUT** /email/address-verify/{email_address_id}/verify/{activation_token} | Verify email address using verification token

# **allowedEmailAddressGet**
> string allowedEmailAddressGet($page, $limit)

Get all email addresses

Get all email addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailMarketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->allowedEmailAddressGet($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMarketingApi->allowedEmailAddressGet: ', $e->getMessage(), PHP_EOL;
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

# **allowedEmailAddressPost**
> string allowedEmailAddressPost($body)

Create allowed Email Address

Create allowed Email Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailMarketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\EmailAddress(); // \ClickSend\Model\EmailAddress | 

try {
    $result = $apiInstance->allowedEmailAddressPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMarketingApi->allowedEmailAddressPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\EmailAddress**](../Model/EmailAddress.md)|  | [optional]

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelEmailCampaignPut**
> string cancelEmailCampaignPut($email_campaign_id)

Cancel email campaign

Cancel email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailMarketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_campaign_id = 56; // int | Allowed email campaign id

try {
    $result = $apiInstance->cancelEmailCampaignPut($email_campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMarketingApi->cancelEmailCampaignPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_campaign_id** | **int**| Allowed email campaign id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailCampaignGet**
> string emailCampaignGet($email_campaign_id)

Get specific email campaign

Get specific email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailMarketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_campaign_id = 56; // int | Allowed email campaign id

try {
    $result = $apiInstance->emailCampaignGet($email_campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMarketingApi->emailCampaignGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_campaign_id** | **int**| Allowed email campaign id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailCampaignHistoryExportGet**
> string emailCampaignHistoryExportGet($email_campaign_id, $date_from, $date_to)

Export specific email campaign history

Export specific email campaign history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailMarketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_campaign_id = 56; // int | Allowed email campaign id
$date_from = 56; // int | Start date
$date_to = 56; // int | End date

try {
    $result = $apiInstance->emailCampaignHistoryExportGet($email_campaign_id, $date_from, $date_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMarketingApi->emailCampaignHistoryExportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_campaign_id** | **int**| Allowed email campaign id |
 **date_from** | **int**| Start date | [optional]
 **date_to** | **int**| End date | [optional]

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailCampaignHistoryGet**
> string emailCampaignHistoryGet($email_campaign_id, $date_from, $date_to, $page, $limit)

Get specific email campaign history

Get specific email campaign history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailMarketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_campaign_id = 56; // int | Allowed email campaign id
$date_from = 56; // int | Start date
$date_to = 56; // int | End date
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->emailCampaignHistoryGet($email_campaign_id, $date_from, $date_to, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMarketingApi->emailCampaignHistoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_campaign_id** | **int**| Allowed email campaign id |
 **date_from** | **int**| Start date | [optional]
 **date_to** | **int**| End date | [optional]
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

# **emailCampaignPost**
> string emailCampaignPost($body)

Send email campaign

Send email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailMarketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\EmailCampaign(); // \ClickSend\Model\EmailCampaign | Email model

try {
    $result = $apiInstance->emailCampaignPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMarketingApi->emailCampaignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\EmailCampaign**](../Model/EmailCampaign.md)| Email model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailCampaignPricePost**
> string emailCampaignPricePost($body)

Calculate email campaign price

Calculate email campaign price

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailMarketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\EmailCampaign(); // \ClickSend\Model\EmailCampaign | Email model

try {
    $result = $apiInstance->emailCampaignPricePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMarketingApi->emailCampaignPricePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\EmailCampaign**](../Model/EmailCampaign.md)| Email model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailCampaignPut**
> string emailCampaignPut($body, $email_campaign_id)

Edit email campaign

Edit email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailMarketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\EmailCampaign(); // \ClickSend\Model\EmailCampaign | Email model
$email_campaign_id = 56; // int | Allowed email campaign id

try {
    $result = $apiInstance->emailCampaignPut($body, $email_campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMarketingApi->emailCampaignPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\EmailCampaign**](../Model/EmailCampaign.md)| Email model |
 **email_campaign_id** | **int**| Allowed email campaign id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailCampaignsGet**
> string emailCampaignsGet($page, $limit)

Get all email campaigns

Get all email campaigns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailMarketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->emailCampaignsGet($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMarketingApi->emailCampaignsGet: ', $e->getMessage(), PHP_EOL;
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

# **sendVerificationTokenGet**
> string sendVerificationTokenGet($email_address_id)

Send verification token

Send verification token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailMarketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_address_id = 56; // int | Allowed email address id

try {
    $result = $apiInstance->sendVerificationTokenGet($email_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMarketingApi->sendVerificationTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_address_id** | **int**| Allowed email address id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **specificAllowedEmailAddressDelete**
> string specificAllowedEmailAddressDelete($email_address_id)

Delete specific email address

Delete specific email address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailMarketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_address_id = 56; // int | Allowed email address id

try {
    $result = $apiInstance->specificAllowedEmailAddressDelete($email_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMarketingApi->specificAllowedEmailAddressDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_address_id** | **int**| Allowed email address id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **specificAllowedEmailAddressGet**
> string specificAllowedEmailAddressGet($email_address_id)

Get specific email address

Get specific email address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailMarketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_address_id = 56; // int | Allowed email address id

try {
    $result = $apiInstance->specificAllowedEmailAddressGet($email_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMarketingApi->specificAllowedEmailAddressGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_address_id** | **int**| Allowed email address id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyAllowedEmailAddressGet**
> string verifyAllowedEmailAddressGet($email_address_id, $activation_token)

Verify email address using verification token

Verify email address using verification token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\EmailMarketingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_address_id = 56; // int | Allowed email address id
$activation_token = "activation_token_example"; // string | Your activation token.

try {
    $result = $apiInstance->verifyAllowedEmailAddressGet($email_address_id, $activation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMarketingApi->verifyAllowedEmailAddressGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_address_id** | **int**| Allowed email address id |
 **activation_token** | **string**| Your activation token. |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

