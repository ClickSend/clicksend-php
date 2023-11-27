# ClickSend\ContactListApi

All URIs are relative to *https://rest.clicksend.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listsByListIdDelete**](ContactListApi.md#listsbylistiddelete) | **DELETE** /lists/{list_id} | ListsByListIdDelete
[**listsByListIdGet**](ContactListApi.md#listsbylistidget) | **GET** /lists/{list_id} | Get specific contact list
[**listsByListIdPut**](ContactListApi.md#listsbylistidput) | **PUT** /lists/{list_id} | Update specific contact list
[**listsGet**](ContactListApi.md#listsget) | **GET** /lists | Get all contact lists
[**listsImportByListIdPost**](ContactListApi.md#listsimportbylistidpost) | **POST** /lists/{list_id}/import | Import contacts to list
[**listsPost**](ContactListApi.md#listspost) | **POST** /lists | Create new contact list
[**listsRemoveDuplicatesByListIdPut**](ContactListApi.md#listsremoveduplicatesbylistidput) | **PUT** /lists/{list_id}/remove-duplicates | Remove duplicate contacts

# **listsByListIdDelete**
> string listsByListIdDelete($list_id)

ListsByListIdDelete

Delete a specific contact list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\ContactListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | List ID

try {
    $result = $apiInstance->listsByListIdDelete($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListApi->listsByListIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| List ID |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsByListIdGet**
> string listsByListIdGet($list_id)

Get specific contact list

Get specific contact list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\ContactListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | List ID

try {
    $result = $apiInstance->listsByListIdGet($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListApi->listsByListIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| List ID |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsByListIdPut**
> string listsByListIdPut($body, $list_id)

Update specific contact list

Update specific contact list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\ContactListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\ContactList(); // \ClickSend\Model\ContactList | Contact list model
$list_id = 56; // int | Your list id

try {
    $result = $apiInstance->listsByListIdPut($body, $list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListApi->listsByListIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\ContactList**](../Model/ContactList.md)| Contact list model |
 **list_id** | **int**| Your list id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsGet**
> string listsGet($page, $limit)

Get all contact lists

Get all contact lists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\ContactListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number
$limit = 10; // int | Number of records per page

try {
    $result = $apiInstance->listsGet($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListApi->listsGet: ', $e->getMessage(), PHP_EOL;
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

# **listsImportByListIdPost**
> string listsImportByListIdPost($body, $list_id)

Import contacts to list

Import contacts to list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\ContactListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\ContactListImport(); // \ClickSend\Model\ContactListImport | ContactListImport model
$list_id = 56; // int | Your contact list id you want to access.

try {
    $result = $apiInstance->listsImportByListIdPost($body, $list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListApi->listsImportByListIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\ContactListImport**](../Model/ContactListImport.md)| ContactListImport model |
 **list_id** | **int**| Your contact list id you want to access. |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsPost**
> string listsPost($body)

Create new contact list

Create new contact list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\ContactListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\ContactList(); // \ClickSend\Model\ContactList | Contact list model

try {
    $result = $apiInstance->listsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListApi->listsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\ContactList**](../Model/ContactList.md)| Contact list model |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsRemoveDuplicatesByListIdPut**
> string listsRemoveDuplicatesByListIdPut($body, $list_id)

Remove duplicate contacts

Remove duplicate contacts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: BasicAuth
$config = ClickSend\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ClickSend\Api\ContactListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ClickSend\Model\Fields(); // \ClickSend\Model\Fields | Fields model
$list_id = 56; // int | Your list id

try {
    $result = $apiInstance->listsRemoveDuplicatesByListIdPut($body, $list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListApi->listsRemoveDuplicatesByListIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ClickSend\Model\Fields**](../Model/Fields.md)| Fields model |
 **list_id** | **int**| Your list id |

### Return type

**string**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

