# Spinen\ConnectWise\Clients\Procurement\PurchaseOrdersApi
Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**procurementPurchaseordersCountGet**](PurchaseOrdersApi.md#procurementPurchaseordersCountGet) | **GET** /procurement/purchaseorders/count | 
[**procurementPurchaseordersGet**](PurchaseOrdersApi.md#procurementPurchaseordersGet) | **GET** /procurement/purchaseorders | 
[**procurementPurchaseordersIdDelete**](PurchaseOrdersApi.md#procurementPurchaseordersIdDelete) | **DELETE** /procurement/purchaseorders/{id} | 
[**procurementPurchaseordersIdGet**](PurchaseOrdersApi.md#procurementPurchaseordersIdGet) | **GET** /procurement/purchaseorders/{id} | 
[**procurementPurchaseordersIdPatch**](PurchaseOrdersApi.md#procurementPurchaseordersIdPatch) | **PATCH** /procurement/purchaseorders/{id} | 
[**procurementPurchaseordersIdPut**](PurchaseOrdersApi.md#procurementPurchaseordersIdPut) | **PUT** /procurement/purchaseorders/{id} | 
[**procurementPurchaseordersPost**](PurchaseOrdersApi.md#procurementPurchaseordersPost) | **POST** /procurement/purchaseorders | 


# **procurementPurchaseordersCountGet**
> \Spinen\ConnectWise\Clients\Procurement\Model\Count procurementPurchaseordersCountGet($conditions)



Get Purchase Orders Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\PurchaseOrdersApi();
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->procurementPurchaseordersCountGet($conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->procurementPurchaseordersCountGet: ', $e->getMessage(), PHP_EOL;
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

# **procurementPurchaseordersGet**
> \Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrder[] procurementPurchaseordersGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Purchase Orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\PurchaseOrdersApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->procurementPurchaseordersGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->procurementPurchaseordersGet: ', $e->getMessage(), PHP_EOL;
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

[**\Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrder[]**](../Model/PurchaseOrder.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementPurchaseordersIdDelete**
> procurementPurchaseordersIdDelete($id)



Delete Purchase Order By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\PurchaseOrdersApi();
$id = 56; // int | 

try {
    $api_instance->procurementPurchaseordersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->procurementPurchaseordersIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **procurementPurchaseordersIdGet**
> \Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrder procurementPurchaseordersIdGet($id)



Get Purchase Order By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\PurchaseOrdersApi();
$id = 56; // int | 

try {
    $result = $api_instance->procurementPurchaseordersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->procurementPurchaseordersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementPurchaseordersIdPatch**
> \Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrder procurementPurchaseordersIdPatch($id, $operations)



Update Purchase Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\PurchaseOrdersApi();
$id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Procurement\Model\PatchOperation[] | 

try {
    $result = $api_instance->procurementPurchaseordersIdPatch($id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->procurementPurchaseordersIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Procurement\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementPurchaseordersIdPut**
> \Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrder procurementPurchaseordersIdPut($id, $purchase_order)



Replace Purchase Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\PurchaseOrdersApi();
$id = 56; // int | 
$purchase_order = new \Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrder(); // \Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrder | 

try {
    $result = $api_instance->procurementPurchaseordersIdPut($id, $purchase_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->procurementPurchaseordersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **purchase_order** | [**\Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrder**](../Model/\Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrder.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementPurchaseordersPost**
> \Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrder procurementPurchaseordersPost($purchase_order)



Create Purchase Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\PurchaseOrdersApi();
$purchase_order = new \Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrder(); // \Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrder | 

try {
    $result = $api_instance->procurementPurchaseordersPost($purchase_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->procurementPurchaseordersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order** | [**\Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrder**](../Model/\Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrder.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

