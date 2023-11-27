# ClickSend\SubaccountApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subaccountsBySubaccountIdDelete**](SubaccountApi.md#subaccountsbysubaccountiddelete) | **DELETE** /subaccounts/{subaccount_id} | Delete a subaccount
[**subaccountsBySubaccountIdGet**](SubaccountApi.md#subaccountsbysubaccountidget) | **GET** /subaccounts/{subaccount_id} | Get specific subaccount
[**subaccountsBySubaccountIdPut**](SubaccountApi.md#subaccountsbysubaccountidput) | **PUT** /subaccounts/{subaccount_id} | Update subaccount
[**subaccountsGet**](SubaccountApi.md#subaccountsget) | **GET** /subaccounts | Get all subaccounts
[**subaccountsPost**](SubaccountApi.md#subaccountspost) | **POST** /subaccounts | Create new subaccount
[**subaccountsRegenApiKeyBySubaccountIdPut**](SubaccountApi.md#subaccountsregenapikeybysubaccountidput) | **PUT** /subaccounts/{subaccount_id}/regen-api-key | Regenerate an API Key

# **subaccountsBySubaccountIdDelete**
> string subaccountsBySubaccountIdDelete($subaccount_id)

Delete a subaccount

Delete a subaccount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subaccount_id = 56; // int | ID of subaccount to delete

try {
    $result = $apiInstance->subaccountsBySubaccountIdDelete($subaccount_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountApi->subaccountsBySubaccountIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subaccount_id** | **int**| ID of subaccount to delete |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subaccountsBySubaccountIdGet**
> string subaccountsBySubaccountIdGet($subaccount_id)

Get specific subaccount

Get specific subaccount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subaccount_id = 56; // int | ID of subaccount to get

try {
    $result = $apiInstance->subaccountsBySubaccountIdGet($subaccount_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountApi->subaccountsBySubaccountIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subaccount_id** | **int**| ID of subaccount to get |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subaccountsBySubaccountIdPut**
> string subaccountsBySubaccountIdPut($body, $subaccount_id)

Update subaccount

Update subaccount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\Subaccount(); // \ClickSend\Model\Subaccount | Subaccount model
$subaccount_id = 56; // int | ID of subaccount to update

try {
    $result = $apiInstance->subaccountsBySubaccountIdPut($body, $subaccount_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountApi->subaccountsBySubaccountIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\Subaccount**](../Model/Subaccount.md)| Subaccount model |
 **subaccount_id** | **int**| ID of subaccount to update |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subaccountsGet**
> string subaccountsGet($page, $limit)

Get all subaccounts

Get all subaccounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->subaccountsGet($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountApi->subaccountsGet: ', $e->getMessage(), PHP_EOL;
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

# **subaccountsPost**
> string subaccountsPost($body)

Create new subaccount

Create new subaccount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\Subaccount(); // \ClickSend\Model\Subaccount | Subaccount model

try {
    $result = $apiInstance->subaccountsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountApi->subaccountsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\Subaccount**](../Model/Subaccount.md)| Subaccount model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subaccountsRegenApiKeyBySubaccountIdPut**
> string subaccountsRegenApiKeyBySubaccountIdPut($subaccount_id)

Regenerate an API Key

Regenerate an API Key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\SubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subaccount_id = 56; // int | ID of subaccount to regenerate API key for

try {
    $result = $apiInstance->subaccountsRegenApiKeyBySubaccountIdPut($subaccount_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountApi->subaccountsRegenApiKeyBySubaccountIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subaccount_id** | **int**| ID of subaccount to regenerate API key for |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

