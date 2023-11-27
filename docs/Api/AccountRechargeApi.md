# ClickSend\AccountRechargeApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rechargeCreditCardGet**](AccountRechargeApi.md#rechargecreditcardget) | **GET** /recharge/credit-card | Get Credit Card info
[**rechargeCreditCardPut**](AccountRechargeApi.md#rechargecreditcardput) | **PUT** /recharge/credit-card | Update credit card info
[**rechargePackagesGet**](AccountRechargeApi.md#rechargepackagesget) | **GET** /recharge/packages | Get list of all packages
[**rechargePurchaseByPackageIdPut**](AccountRechargeApi.md#rechargepurchasebypackageidput) | **PUT** /recharge/purchase/{package_id} | Purchase a package
[**rechargeTransactionsByTransactionIdGet**](AccountRechargeApi.md#rechargetransactionsbytransactionidget) | **GET** /recharge/transactions/{transaction_id} | Get specific Transaction
[**rechargeTransactionsGet**](AccountRechargeApi.md#rechargetransactionsget) | **GET** /recharge/transactions | Purchase a package

# **rechargeCreditCardGet**
> string rechargeCreditCardGet()

Get Credit Card info

Get Credit Card info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\AccountRechargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->rechargeCreditCardGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountRechargeApi->rechargeCreditCardGet: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rechargeCreditCardPut**
> string rechargeCreditCardPut($body)

Update credit card info

Update credit card info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\AccountRechargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\CreditCard(); // \ClickSend\Model\CreditCard | CreditCard model

try {
    $result = $apiInstance->rechargeCreditCardPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountRechargeApi->rechargeCreditCardPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\CreditCard**](../Model/CreditCard.md)| CreditCard model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rechargePackagesGet**
> string rechargePackagesGet($country)

Get list of all packages

Get list of all packages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\AccountRechargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = "country_example"; // string | Country code

try {
    $result = $apiInstance->rechargePackagesGet($country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountRechargeApi->rechargePackagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**| Country code | [optional]

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rechargePurchaseByPackageIdPut**
> string rechargePurchaseByPackageIdPut($package_id)

Purchase a package

Purchase a package

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\AccountRechargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 56; // int | ID of package to purchase

try {
    $result = $apiInstance->rechargePurchaseByPackageIdPut($package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountRechargeApi->rechargePurchaseByPackageIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **int**| ID of package to purchase |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rechargeTransactionsByTransactionIdGet**
> string rechargeTransactionsByTransactionIdGet($transaction_id)

Get specific Transaction

Get specific Transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\AccountRechargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = "transaction_id_example"; // string | ID of transaction to retrieve

try {
    $result = $apiInstance->rechargeTransactionsByTransactionIdGet($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountRechargeApi->rechargeTransactionsByTransactionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| ID of transaction to retrieve |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rechargeTransactionsGet**
> string rechargeTransactionsGet($page, $limit)

Purchase a package

Get all transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\AccountRechargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->rechargeTransactionsGet($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountRechargeApi->rechargeTransactionsGet: ', $e->getMessage(), PHP_EOL;
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

