# Spinen\ConnectWise\Clients\Procurement\RMADispositionsApi
Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**procurementRMADispositionsCountGet**](RMADispositionsApi.md#procurementRMADispositionsCountGet) | **GET** /procurement/RMADispositions/count | 
[**procurementRMADispositionsGet**](RMADispositionsApi.md#procurementRMADispositionsGet) | **GET** /procurement/RMADispositions | 
[**procurementRMADispositionsIdDelete**](RMADispositionsApi.md#procurementRMADispositionsIdDelete) | **DELETE** /procurement/RMADispositions/{id} | 
[**procurementRMADispositionsIdGet**](RMADispositionsApi.md#procurementRMADispositionsIdGet) | **GET** /procurement/RMADispositions/{id} | 
[**procurementRMADispositionsIdPatch**](RMADispositionsApi.md#procurementRMADispositionsIdPatch) | **PATCH** /procurement/RMADispositions/{id} | 
[**procurementRMADispositionsIdPut**](RMADispositionsApi.md#procurementRMADispositionsIdPut) | **PUT** /procurement/RMADispositions/{id} | 
[**procurementRMADispositionsPost**](RMADispositionsApi.md#procurementRMADispositionsPost) | **POST** /procurement/RMADispositions | 


# **procurementRMADispositionsCountGet**
> \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Count procurementRMADispositionsCountGet($conditions)



Get R M A Disposition Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\RMADispositionsApi();
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->procurementRMADispositionsCountGet($conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMADispositionsApi->procurementRMADispositionsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementRMADispositionsGet**
> \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\RMADisposition[] procurementRMADispositionsGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get R M A Disposition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\RMADispositionsApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->procurementRMADispositionsGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMADispositionsApi->procurementRMADispositionsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\RMADisposition[]**](../Model/RMADisposition.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementRMADispositionsIdDelete**
> procurementRMADispositionsIdDelete($id)



Delete R M A Disposition By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\RMADispositionsApi();
$id = 56; // int | 

try {
    $api_instance->procurementRMADispositionsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling RMADispositionsApi->procurementRMADispositionsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **procurementRMADispositionsIdGet**
> \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\RMADisposition procurementRMADispositionsIdGet($id)



Get R M A Disposition By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\RMADispositionsApi();
$id = 56; // int | 

try {
    $result = $api_instance->procurementRMADispositionsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMADispositionsApi->procurementRMADispositionsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\RMADisposition**](../Model/RMADisposition.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementRMADispositionsIdPatch**
> \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\RMADisposition procurementRMADispositionsIdPatch($id, $operations)



Update R M A Disposition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\RMADispositionsApi();
$id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\PatchOperation[] | 

try {
    $result = $api_instance->procurementRMADispositionsIdPatch($id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMADispositionsApi->procurementRMADispositionsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\RMADisposition**](../Model/RMADisposition.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementRMADispositionsIdPut**
> \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\RMADisposition procurementRMADispositionsIdPut($id, $r_ma_disposition)



Replace R M A Disposition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\RMADispositionsApi();
$id = 56; // int | 
$r_ma_disposition = new \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\RMADisposition(); // \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\RMADisposition | 

try {
    $result = $api_instance->procurementRMADispositionsIdPut($id, $r_ma_disposition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMADispositionsApi->procurementRMADispositionsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **r_ma_disposition** | [**\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\RMADisposition**](../Model/\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\RMADisposition.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\RMADisposition**](../Model/RMADisposition.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **procurementRMADispositionsPost**
> \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\RMADisposition procurementRMADispositionsPost($r_ma_disposition)



Create R M A Disposition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Procurement\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Procurement\Api\RMADispositionsApi();
$r_ma_disposition = new \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\RMADisposition(); // \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\RMADisposition | 

try {
    $result = $api_instance->procurementRMADispositionsPost($r_ma_disposition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMADispositionsApi->procurementRMADispositionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **r_ma_disposition** | [**\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\RMADisposition**](../Model/\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\RMADisposition.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\RMADisposition**](../Model/RMADisposition.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
