# Spinen\ConnectWise\Clients\Procurement\ProductPickingShippingDetailsApi
Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**procurementProductsIdPickingShippingDetailsCountGet**](ProductPickingShippingDetailsApi.md#procurementProductsIdPickingShippingDetailsCountGet) | **GET** /procurement/products/{id}/pickingShippingDetails/count | 
[**procurementProductsIdPickingShippingDetailsGet**](ProductPickingShippingDetailsApi.md#procurementProductsIdPickingShippingDetailsGet) | **GET** /procurement/products/{id}/pickingShippingDetails | 
[**procurementProductsIdPickingShippingDetailsPickingShippingDetailIdDelete**](ProductPickingShippingDetailsApi.md#procurementProductsIdPickingShippingDetailsPickingShippingDetailIdDelete) | **DELETE** /procurement/products/{id}/pickingShippingDetails/{pickingShippingDetailId} | 
[**procurementProductsIdPickingShippingDetailsPickingShippingDetailIdGet**](ProductPickingShippingDetailsApi.md#procurementProductsIdPickingShippingDetailsPickingShippingDetailIdGet) | **GET** /procurement/products/{id}/pickingShippingDetails/{pickingShippingDetailId} | 
[**procurementProductsIdPickingShippingDetailsPickingShippingDetailIdPatch**](ProductPickingShippingDetailsApi.md#procurementProductsIdPickingShippingDetailsPickingShippingDetailIdPatch) | **PATCH** /procurement/products/{id}/pickingShippingDetails/{pickingShippingDetailId} | 
[**procurementProductsIdPickingShippingDetailsPickingShippingDetailIdPut**](ProductPickingShippingDetailsApi.md#procurementProductsIdPickingShippingDetailsPickingShippingDetailIdPut) | **PUT** /procurement/products/{id}/pickingShippingDetails/{pickingShippingDetailId} | 
[**procurementProductsIdPickingShippingDetailsPost**](ProductPickingShippingDetailsApi.md#procurementProductsIdPickingShippingDetailsPost) | **POST** /procurement/products/{id}/pickingShippingDetails | 


# **procurementProductsIdPickingShippingDetailsCountGet**
> \Spinen\ConnectWise\Clients\Procurement\Model\Count procurementProductsIdPickingShippingDetailsCountGet($id, $conditions)



Get Product Picking Shipping Details Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\ProductPickingShippingDetailsApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->procurementProductsIdPickingShippingDetailsCountGet($id, $conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPickingShippingDetailsApi->procurementProductsIdPickingShippingDetailsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementProductsIdPickingShippingDetailsGet**
> \Spinen\ConnectWise\Clients\Procurement\Model\ProductPickingShippingDetail[] procurementProductsIdPickingShippingDetailsGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Product Picking Shipping Details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\ProductPickingShippingDetailsApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->procurementProductsIdPickingShippingDetailsGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPickingShippingDetailsApi->procurementProductsIdPickingShippingDetailsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conditions** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **childconditions** | **string**|  | [optional]
 **customfieldconditions** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\ProductPickingShippingDetail[]**](../Model/ProductPickingShippingDetail.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementProductsIdPickingShippingDetailsPickingShippingDetailIdDelete**
> procurementProductsIdPickingShippingDetailsPickingShippingDetailIdDelete($id, $picking_shipping_detail_id)



Delete Products By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\ProductPickingShippingDetailsApi();
$id = 56; // int | 
$picking_shipping_detail_id = 56; // int | 

try {
    $api_instance->procurementProductsIdPickingShippingDetailsPickingShippingDetailIdDelete($id, $picking_shipping_detail_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductPickingShippingDetailsApi->procurementProductsIdPickingShippingDetailsPickingShippingDetailIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **picking_shipping_detail_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementProductsIdPickingShippingDetailsPickingShippingDetailIdGet**
> \Spinen\ConnectWise\Clients\Procurement\Model\ProductPickingShippingDetail[] procurementProductsIdPickingShippingDetailsPickingShippingDetailIdGet($id, $picking_shipping_detail_id)



Get Products By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\ProductPickingShippingDetailsApi();
$id = 56; // int | 
$picking_shipping_detail_id = 56; // int | 

try {
    $result = $api_instance->procurementProductsIdPickingShippingDetailsPickingShippingDetailIdGet($id, $picking_shipping_detail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPickingShippingDetailsApi->procurementProductsIdPickingShippingDetailsPickingShippingDetailIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **picking_shipping_detail_id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\ProductPickingShippingDetail[]**](../Model/ProductPickingShippingDetail.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementProductsIdPickingShippingDetailsPickingShippingDetailIdPatch**
> \Spinen\ConnectWise\Clients\Procurement\Model\ProductPickingShippingDetail[] procurementProductsIdPickingShippingDetailsPickingShippingDetailIdPatch($id, $picking_shipping_detail_id, $operations)



Update Products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\ProductPickingShippingDetailsApi();
$id = 56; // int | 
$picking_shipping_detail_id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Procurement\Model\PatchOperation[] | 

try {
    $result = $api_instance->procurementProductsIdPickingShippingDetailsPickingShippingDetailIdPatch($id, $picking_shipping_detail_id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPickingShippingDetailsApi->procurementProductsIdPickingShippingDetailsPickingShippingDetailIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **picking_shipping_detail_id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Procurement\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\ProductPickingShippingDetail[]**](../Model/ProductPickingShippingDetail.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementProductsIdPickingShippingDetailsPickingShippingDetailIdPut**
> \Spinen\ConnectWise\Clients\Procurement\Model\ProductPickingShippingDetail[] procurementProductsIdPickingShippingDetailsPickingShippingDetailIdPut($id, $picking_shipping_detail_id, $product_picking_shipping_details)



Replace Products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\ProductPickingShippingDetailsApi();
$id = 56; // int | 
$picking_shipping_detail_id = 56; // int | 
$product_picking_shipping_details = new \Spinen\ConnectWise\Clients\Procurement\Model\ProductPickingShippingDetail(); // \Spinen\ConnectWise\Clients\Procurement\Model\ProductPickingShippingDetail | 

try {
    $result = $api_instance->procurementProductsIdPickingShippingDetailsPickingShippingDetailIdPut($id, $picking_shipping_detail_id, $product_picking_shipping_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPickingShippingDetailsApi->procurementProductsIdPickingShippingDetailsPickingShippingDetailIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **picking_shipping_detail_id** | **int**|  |
 **product_picking_shipping_details** | [**\Spinen\ConnectWise\Clients\Procurement\Model\ProductPickingShippingDetail**](../Model/\Spinen\ConnectWise\Clients\Procurement\Model\ProductPickingShippingDetail.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\ProductPickingShippingDetail[]**](../Model/ProductPickingShippingDetail.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementProductsIdPickingShippingDetailsPost**
> \Spinen\ConnectWise\Clients\Procurement\Model\ProductPickingShippingDetail[] procurementProductsIdPickingShippingDetailsPost($id, $product_picking_shipping_details)



Create Product Picking Shipping Detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\ProductPickingShippingDetailsApi();
$id = 56; // int | 
$product_picking_shipping_details = new \Spinen\ConnectWise\Clients\Procurement\Model\ProductPickingShippingDetail(); // \Spinen\ConnectWise\Clients\Procurement\Model\ProductPickingShippingDetail | 

try {
    $result = $api_instance->procurementProductsIdPickingShippingDetailsPost($id, $product_picking_shipping_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPickingShippingDetailsApi->procurementProductsIdPickingShippingDetailsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **product_picking_shipping_details** | [**\Spinen\ConnectWise\Clients\Procurement\Model\ProductPickingShippingDetail**](../Model/\Spinen\ConnectWise\Clients\Procurement\Model\ProductPickingShippingDetail.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\ProductPickingShippingDetail[]**](../Model/ProductPickingShippingDetail.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
