# Spinen\ConnectWise\Clients\Procurement\CategoriesApi
Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**procurementCategoriesCountGet**](CategoriesApi.md#procurementCategoriesCountGet) | **GET** /procurement/categories/count | 
[**procurementCategoriesGet**](CategoriesApi.md#procurementCategoriesGet) | **GET** /procurement/categories | 
[**procurementCategoriesIdDelete**](CategoriesApi.md#procurementCategoriesIdDelete) | **DELETE** /procurement/categories/{id} | 
[**procurementCategoriesIdGet**](CategoriesApi.md#procurementCategoriesIdGet) | **GET** /procurement/categories/{id} | 
[**procurementCategoriesIdPatch**](CategoriesApi.md#procurementCategoriesIdPatch) | **PATCH** /procurement/categories/{id} | 
[**procurementCategoriesIdPut**](CategoriesApi.md#procurementCategoriesIdPut) | **PUT** /procurement/categories/{id} | 
[**procurementCategoriesPost**](CategoriesApi.md#procurementCategoriesPost) | **POST** /procurement/categories | 


# **procurementCategoriesCountGet**
> \Spinen\ConnectWise\Clients\Procurement\Model\Count procurementCategoriesCountGet($conditions)



Get Categories Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\CategoriesApi();
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->procurementCategoriesCountGet($conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->procurementCategoriesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementCategoriesGet**
> \Spinen\ConnectWise\Clients\Procurement\Model\Category[] procurementCategoriesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\CategoriesApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->procurementCategoriesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->procurementCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **childconditions** | **string**|  | [optional]
 **customfieldconditions** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\Category[]**](../Model/Category.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementCategoriesIdDelete**
> procurementCategoriesIdDelete($id)



Delete Category By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\CategoriesApi();
$id = 56; // int | 

try {
    $api_instance->procurementCategoriesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->procurementCategoriesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementCategoriesIdGet**
> \Spinen\ConnectWise\Clients\Procurement\Model\Category procurementCategoriesIdGet($id)



Get Category By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\CategoriesApi();
$id = 56; // int | 

try {
    $result = $api_instance->procurementCategoriesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->procurementCategoriesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\Category**](../Model/Category.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementCategoriesIdPatch**
> \Spinen\ConnectWise\Clients\Procurement\Model\Category procurementCategoriesIdPatch($id, $operations)



Update Category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\CategoriesApi();
$id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Procurement\Model\PatchOperation[] | 

try {
    $result = $api_instance->procurementCategoriesIdPatch($id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->procurementCategoriesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Procurement\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\Category**](../Model/Category.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementCategoriesIdPut**
> \Spinen\ConnectWise\Clients\Procurement\Model\Category procurementCategoriesIdPut($id, $category)



Replace Category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\CategoriesApi();
$id = 56; // int | 
$category = new \Spinen\ConnectWise\Clients\Procurement\Model\Category(); // \Spinen\ConnectWise\Clients\Procurement\Model\Category | 

try {
    $result = $api_instance->procurementCategoriesIdPut($id, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->procurementCategoriesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **category** | [**\Spinen\ConnectWise\Clients\Procurement\Model\Category**](../Model/\Spinen\ConnectWise\Clients\Procurement\Model\Category.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\Category**](../Model/Category.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementCategoriesPost**
> \Spinen\ConnectWise\Clients\Procurement\Model\Category procurementCategoriesPost($category)



Create Category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\CategoriesApi();
$category = new \Spinen\ConnectWise\Clients\Procurement\Model\Category(); // \Spinen\ConnectWise\Clients\Procurement\Model\Category | 

try {
    $result = $api_instance->procurementCategoriesPost($category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->procurementCategoriesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | [**\Spinen\ConnectWise\Clients\Procurement\Model\Category**](../Model/\Spinen\ConnectWise\Clients\Procurement\Model\Category.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\Category**](../Model/Category.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

