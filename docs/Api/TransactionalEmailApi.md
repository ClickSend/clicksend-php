# ClickSend\TransactionalEmailApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**emailHistoryExportGet**](TransactionalEmailApi.md#emailHistoryExportGet) | **GET** /email/history/export | Export all Transactional Email history
[**emailHistoryGet**](TransactionalEmailApi.md#emailHistoryGet) | **GET** /email/history | Get all transactional email history
[**emailPricePost**](TransactionalEmailApi.md#emailPricePost) | **POST** /email/price | Get transactional email price
[**emailSendPost**](TransactionalEmailApi.md#emailSendPost) | **POST** /email/send | Send transactional email


# **emailHistoryExportGet**
> string emailHistoryExportGet($filename, $date_from, $date_to)

Export all Transactional Email history

Export all Transactional Email history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\TransactionalEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filename = "filename_example"; // string | Filename to download history as
$date_from = 56; // int | Start date
$date_to = 56; // int | End date

try {
    $result = $apiInstance->emailHistoryExportGet($filename, $date_from, $date_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailApi->emailHistoryExportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filename** | **string**| Filename to download history as |
 **date_from** | **int**| Start date | [optional]
 **date_to** | **int**| End date | [optional]

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailHistoryGet**
> string emailHistoryGet($date_from, $date_to, $page, $limit)

Get all transactional email history

Get all transactional email history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\TransactionalEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = 56; // int | Start date
$date_to = 56; // int | End date
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->emailHistoryGet($date_from, $date_to, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailApi->emailHistoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **emailPricePost**
> string emailPricePost($email)

Get transactional email price

Get transactional email price

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\TransactionalEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = new \ClickSend\Model\Email(); // \ClickSend\Model\Email | Email model

try {
    $result = $apiInstance->emailPricePost($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailApi->emailPricePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | [**\ClickSend\Model\Email**](../Model/Email.md)| Email model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailSendPost**
> string emailSendPost($email)

Send transactional email

Send transactional email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\TransactionalEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = new \ClickSend\Model\Email(); // \ClickSend\Model\Email | Email model

try {
    $result = $apiInstance->emailSendPost($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailApi->emailSendPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | [**\ClickSend\Model\Email**](../Model/Email.md)| Email model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

