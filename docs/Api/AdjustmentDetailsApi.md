# Spinen\ConnectWise\Clients\Procurement\AdjustmentDetailsApi
Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**procurementAdjustmentsIdDetailsCountGet**](AdjustmentDetailsApi.md#procurementAdjustmentsIdDetailsCountGet) | **GET** /procurement/adjustments/{id}/details/count | 
[**procurementAdjustmentsIdDetailsDetailIdDelete**](AdjustmentDetailsApi.md#procurementAdjustmentsIdDetailsDetailIdDelete) | **DELETE** /procurement/adjustments/{id}/details/{detailId} | 
[**procurementAdjustmentsIdDetailsDetailIdGet**](AdjustmentDetailsApi.md#procurementAdjustmentsIdDetailsDetailIdGet) | **GET** /procurement/adjustments/{id}/details/{detailId} | 
[**procurementAdjustmentsIdDetailsGet**](AdjustmentDetailsApi.md#procurementAdjustmentsIdDetailsGet) | **GET** /procurement/adjustments/{id}/details | 
[**procurementAdjustmentsIdDetailsPost**](AdjustmentDetailsApi.md#procurementAdjustmentsIdDetailsPost) | **POST** /procurement/adjustments/{id}/details | 


# **procurementAdjustmentsIdDetailsCountGet**
> \Spinen\ConnectWise\Clients\Procurement\Model\Count procurementAdjustmentsIdDetailsCountGet($id, $conditions)



Get Adjustment Detail Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\AdjustmentDetailsApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->procurementAdjustmentsIdDetailsCountGet($id, $conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdjustmentDetailsApi->procurementAdjustmentsIdDetailsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **procurementAdjustmentsIdDetailsDetailIdDelete**
> procurementAdjustmentsIdDetailsDetailIdDelete($id, $detail_id)



Delete Adjustment Detail By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\AdjustmentDetailsApi();
$id = 56; // int | 
$detail_id = 56; // int | 

try {
    $api_instance->procurementAdjustmentsIdDetailsDetailIdDelete($id, $detail_id);
} catch (Exception $e) {
    echo 'Exception when calling AdjustmentDetailsApi->procurementAdjustmentsIdDetailsDetailIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **detail_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementAdjustmentsIdDetailsDetailIdGet**
> \Spinen\ConnectWise\Clients\Procurement\Model\AdjustmentDetail procurementAdjustmentsIdDetailsDetailIdGet($id, $detail_id)



Get Adjustment Detail By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\AdjustmentDetailsApi();
$id = 56; // int | 
$detail_id = 56; // int | 

try {
    $result = $api_instance->procurementAdjustmentsIdDetailsDetailIdGet($id, $detail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdjustmentDetailsApi->procurementAdjustmentsIdDetailsDetailIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **detail_id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\AdjustmentDetail**](../Model/AdjustmentDetail.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementAdjustmentsIdDetailsGet**
> \Spinen\ConnectWise\Clients\Procurement\Model\AdjustmentDetail[] procurementAdjustmentsIdDetailsGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Adjustment Detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\AdjustmentDetailsApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->procurementAdjustmentsIdDetailsGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdjustmentDetailsApi->procurementAdjustmentsIdDetailsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Spinen\ConnectWise\Clients\Procurement\Model\AdjustmentDetail[]**](../Model/AdjustmentDetail.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementAdjustmentsIdDetailsPost**
> \Spinen\ConnectWise\Clients\Procurement\Model\AdjustmentDetail procurementAdjustmentsIdDetailsPost($id, $adjustment_detail)



Create Adjustment Detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\AdjustmentDetailsApi();
$id = 56; // int | 
$adjustment_detail = new \Spinen\ConnectWise\Clients\Procurement\Model\AdjustmentDetail(); // \Spinen\ConnectWise\Clients\Procurement\Model\AdjustmentDetail | 

try {
    $result = $api_instance->procurementAdjustmentsIdDetailsPost($id, $adjustment_detail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdjustmentDetailsApi->procurementAdjustmentsIdDetailsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **adjustment_detail** | [**\Spinen\ConnectWise\Clients\Procurement\Model\AdjustmentDetail**](../Model/\Spinen\ConnectWise\Clients\Procurement\Model\AdjustmentDetail.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\AdjustmentDetail**](../Model/AdjustmentDetail.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

