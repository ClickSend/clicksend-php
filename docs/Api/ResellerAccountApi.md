# ClickSend\ResellerAccountApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**resellerAccountsByClientUserIdGet**](ResellerAccountApi.md#reselleraccountsbyclientuseridget) | **GET** /reseller/accounts/{client_user_id} | Get Reseller clients Account
[**resellerAccountsByClientUserIdPut**](ResellerAccountApi.md#reselleraccountsbyclientuseridput) | **PUT** /reseller/accounts/{client_user_id} | Update Reseller clients Account
[**resellerAccountsGet**](ResellerAccountApi.md#reselleraccountsget) | **GET** /reseller/accounts | Get list of reseller accounts
[**resellerAccountsPost**](ResellerAccountApi.md#reselleraccountspost) | **POST** /reseller/accounts | Create reseller account

# **resellerAccountsByClientUserIdGet**
> string resellerAccountsByClientUserIdGet($client_user_id)

Get Reseller clients Account

Get Reseller clients Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\ResellerAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_user_id = 56; // int | User ID of client

try {
    $result = $apiInstance->resellerAccountsByClientUserIdGet($client_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerAccountApi->resellerAccountsByClientUserIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_user_id** | **int**| User ID of client |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resellerAccountsByClientUserIdPut**
> string resellerAccountsByClientUserIdPut($body, $client_user_id)

Update Reseller clients Account

Update Reseller clients Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\ResellerAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\ResellerAccount(); // \ClickSend\Model\ResellerAccount | ResellerAccount model
$client_user_id = 56; // int | User ID of client

try {
    $result = $apiInstance->resellerAccountsByClientUserIdPut($body, $client_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerAccountApi->resellerAccountsByClientUserIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\ResellerAccount**](../Model/ResellerAccount.md)| ResellerAccount model |
 **client_user_id** | **int**| User ID of client |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resellerAccountsGet**
> string resellerAccountsGet($page, $limit)

Get list of reseller accounts

Get list of reseller accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\ResellerAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->resellerAccountsGet($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerAccountApi->resellerAccountsGet: ', $e->getMessage(), PHP_EOL;
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

# **resellerAccountsPost**
> string resellerAccountsPost($body)

Create reseller account

Create reseller account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\ResellerAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\ResellerAccount(); // \ClickSend\Model\ResellerAccount | ResellerAccount model

try {
    $result = $apiInstance->resellerAccountsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerAccountApi->resellerAccountsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\ResellerAccount**](../Model/ResellerAccount.md)| ResellerAccount model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

