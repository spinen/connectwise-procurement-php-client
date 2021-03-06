# Spinen\ConnectWise\Clients\Procurement\PricingDetailsApi
Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**procurementPricingschedulesIdDetailsCountGet**](PricingDetailsApi.md#procurementPricingschedulesIdDetailsCountGet) | **GET** /procurement/pricingschedules/{id}/details/count | 
[**procurementPricingschedulesIdDetailsDetailIDDelete**](PricingDetailsApi.md#procurementPricingschedulesIdDetailsDetailIDDelete) | **DELETE** /procurement/pricingschedules/{id}/details/{detailID} | 
[**procurementPricingschedulesIdDetailsDetailIDGet**](PricingDetailsApi.md#procurementPricingschedulesIdDetailsDetailIDGet) | **GET** /procurement/pricingschedules/{id}/details/{detailID} | 
[**procurementPricingschedulesIdDetailsDetailIDPatch**](PricingDetailsApi.md#procurementPricingschedulesIdDetailsDetailIDPatch) | **PATCH** /procurement/pricingschedules/{id}/details/{detailID} | 
[**procurementPricingschedulesIdDetailsDetailIDPut**](PricingDetailsApi.md#procurementPricingschedulesIdDetailsDetailIDPut) | **PUT** /procurement/pricingschedules/{id}/details/{detailID} | 
[**procurementPricingschedulesIdDetailsGet**](PricingDetailsApi.md#procurementPricingschedulesIdDetailsGet) | **GET** /procurement/pricingschedules/{id}/details | 
[**procurementPricingschedulesIdDetailsPost**](PricingDetailsApi.md#procurementPricingschedulesIdDetailsPost) | **POST** /procurement/pricingschedules/{id}/details | 


# **procurementPricingschedulesIdDetailsCountGet**
> \Spinen\ConnectWise\Clients\Procurement\Model\Count procurementPricingschedulesIdDetailsCountGet($id, $conditions)



Get Pricing Detail Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\PricingDetailsApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->procurementPricingschedulesIdDetailsCountGet($id, $conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingDetailsApi->procurementPricingschedulesIdDetailsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **procurementPricingschedulesIdDetailsDetailIDDelete**
> procurementPricingschedulesIdDetailsDetailIDDelete($id, $detail_id)



Delete Pricing Detail By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\PricingDetailsApi();
$id = 56; // int | 
$detail_id = 56; // int | 

try {
    $api_instance->procurementPricingschedulesIdDetailsDetailIDDelete($id, $detail_id);
} catch (Exception $e) {
    echo 'Exception when calling PricingDetailsApi->procurementPricingschedulesIdDetailsDetailIDDelete: ', $e->getMessage(), PHP_EOL;
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

# **procurementPricingschedulesIdDetailsDetailIDGet**
> \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail procurementPricingschedulesIdDetailsDetailIDGet($id, $detail_id)



Get Pricing Detail By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\PricingDetailsApi();
$id = 56; // int | 
$detail_id = 56; // int | 

try {
    $result = $api_instance->procurementPricingschedulesIdDetailsDetailIDGet($id, $detail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingDetailsApi->procurementPricingschedulesIdDetailsDetailIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **detail_id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail**](../Model/PricingDetail.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementPricingschedulesIdDetailsDetailIDPatch**
> \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail procurementPricingschedulesIdDetailsDetailIDPatch($id, $detail_id, $operations)



Update Pricing Detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\PricingDetailsApi();
$id = 56; // int | 
$detail_id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Procurement\Model\PatchOperation[] | 

try {
    $result = $api_instance->procurementPricingschedulesIdDetailsDetailIDPatch($id, $detail_id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingDetailsApi->procurementPricingschedulesIdDetailsDetailIDPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **detail_id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Procurement\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail**](../Model/PricingDetail.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementPricingschedulesIdDetailsDetailIDPut**
> \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail procurementPricingschedulesIdDetailsDetailIDPut($id, $detail_id, $pricing_detail)



Replace Pricing Detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\PricingDetailsApi();
$id = 56; // int | 
$detail_id = 56; // int | 
$pricing_detail = new \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail(); // \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail | 

try {
    $result = $api_instance->procurementPricingschedulesIdDetailsDetailIDPut($id, $detail_id, $pricing_detail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingDetailsApi->procurementPricingschedulesIdDetailsDetailIDPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **detail_id** | **int**|  |
 **pricing_detail** | [**\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail**](../Model/\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail**](../Model/PricingDetail.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementPricingschedulesIdDetailsGet**
> \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail[] procurementPricingschedulesIdDetailsGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Pricing Detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\PricingDetailsApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->procurementPricingschedulesIdDetailsGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingDetailsApi->procurementPricingschedulesIdDetailsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail[]**](../Model/PricingDetail.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementPricingschedulesIdDetailsPost**
> \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail procurementPricingschedulesIdDetailsPost($id, $pricing_detail)



Create Pricing Detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\PricingDetailsApi();
$id = 56; // int | 
$pricing_detail = new \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail(); // \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail | 

try {
    $result = $api_instance->procurementPricingschedulesIdDetailsPost($id, $pricing_detail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingDetailsApi->procurementPricingschedulesIdDetailsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **pricing_detail** | [**\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail**](../Model/\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail**](../Model/PricingDetail.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

