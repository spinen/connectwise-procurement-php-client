<?php
/**
 * CatalogsItemApi
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Procurement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Procurement API
 *
 * ConnectWise Procurement API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Api;

use \Spinen\ConnectWise\Clients\Procurement\ApiClient;
use \Spinen\ConnectWise\Clients\Procurement\ApiException;
use \Spinen\ConnectWise\Clients\Procurement\Configuration;
use \Spinen\ConnectWise\Clients\Procurement\ObjectSerializer;

/**
 * CatalogsItemApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Procurement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogsItemApi
{
    /**
     * API Client
     *
     * @var \Spinen\ConnectWise\Clients\Procurement\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Spinen\ConnectWise\Clients\Procurement\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Spinen\ConnectWise\Clients\Procurement\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Spinen\ConnectWise\Clients\Procurement\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Spinen\ConnectWise\Clients\Procurement\ApiClient $apiClient set the API client
     *
     * @return CatalogsItemApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Procurement\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation procurementCatalogCatalogItemIdentifierQuantityOnHandGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param string $catalog_item_identifier  (required)
     * @param int $warehouse_bin_id  (optional)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Count
     */
    public function procurementCatalogCatalogItemIdentifierQuantityOnHandGet($catalog_item_identifier, $warehouse_bin_id = null)
    {
        list($response) = $this->procurementCatalogCatalogItemIdentifierQuantityOnHandGetWithHttpInfo($catalog_item_identifier, $warehouse_bin_id);
        return $response;
    }

    /**
     * Operation procurementCatalogCatalogItemIdentifierQuantityOnHandGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param string $catalog_item_identifier  (required)
     * @param int $warehouse_bin_id  (optional)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function procurementCatalogCatalogItemIdentifierQuantityOnHandGetWithHttpInfo($catalog_item_identifier, $warehouse_bin_id = null)
    {
        // verify the required parameter 'catalog_item_identifier' is set
        if ($catalog_item_identifier === null) {
            throw new \InvalidArgumentException('Missing the required parameter $catalog_item_identifier when calling procurementCatalogCatalogItemIdentifierQuantityOnHandGet');
        }
        // parse inputs
        $resourcePath = "/procurement/catalog/{catalogItemIdentifier}/quantityOnHand";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($warehouse_bin_id !== null) {
            $queryParams['warehouseBinId'] = $this->apiClient->getSerializer()->toQueryValue($warehouse_bin_id);
        }
        // path params
        if ($catalog_item_identifier !== null) {
            $resourcePath = str_replace(
                "{" . "catalogItemIdentifier" . "}",
                $this->apiClient->getSerializer()->toPathValue($catalog_item_identifier),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Count',
                '/procurement/catalog/{catalogItemIdentifier}/quantityOnHand'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Count', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Count', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation procurementCatalogCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Count
     */
    public function procurementCatalogCountGet($conditions = null)
    {
        list($response) = $this->procurementCatalogCountGetWithHttpInfo($conditions);
        return $response;
    }

    /**
     * Operation procurementCatalogCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function procurementCatalogCountGetWithHttpInfo($conditions = null)
    {
        // parse inputs
        $resourcePath = "/procurement/catalog/count";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Count',
                '/procurement/catalog/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Count', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Count', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation procurementCatalogGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem[]
     */
    public function procurementCatalogGet($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->procurementCatalogGetWithHttpInfo($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation procurementCatalogGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function procurementCatalogGetWithHttpInfo($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // parse inputs
        $resourcePath = "/procurement/catalog";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // query params
        if ($order_by !== null) {
            $queryParams['orderBy'] = $this->apiClient->getSerializer()->toQueryValue($order_by);
        }
        // query params
        if ($childconditions !== null) {
            $queryParams['childconditions'] = $this->apiClient->getSerializer()->toQueryValue($childconditions);
        }
        // query params
        if ($customfieldconditions !== null) {
            $queryParams['customfieldconditions'] = $this->apiClient->getSerializer()->toQueryValue($customfieldconditions);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem[]',
                '/procurement/catalog'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation procurementCatalogIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return void
     */
    public function procurementCatalogIdDelete($id)
    {
        list($response) = $this->procurementCatalogIdDeleteWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation procurementCatalogIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function procurementCatalogIdDeleteWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling procurementCatalogIdDelete');
        }
        // parse inputs
        $resourcePath = "/procurement/catalog/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/procurement/catalog/{id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation procurementCatalogIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem
     */
    public function procurementCatalogIdGet($id)
    {
        list($response) = $this->procurementCatalogIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation procurementCatalogIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function procurementCatalogIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling procurementCatalogIdGet');
        }
        // parse inputs
        $resourcePath = "/procurement/catalog/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem',
                '/procurement/catalog/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation procurementCatalogIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem
     */
    public function procurementCatalogIdPatch($id, $operations)
    {
        list($response) = $this->procurementCatalogIdPatchWithHttpInfo($id, $operations);
        return $response;
    }

    /**
     * Operation procurementCatalogIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function procurementCatalogIdPatchWithHttpInfo($id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling procurementCatalogIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling procurementCatalogIdPatch');
        }
        // parse inputs
        $resourcePath = "/procurement/catalog/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($operations)) {
            $_tempBody = $operations;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem',
                '/procurement/catalog/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation procurementCatalogIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem $catalog_item  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem
     */
    public function procurementCatalogIdPut($id, $catalog_item)
    {
        list($response) = $this->procurementCatalogIdPutWithHttpInfo($id, $catalog_item);
        return $response;
    }

    /**
     * Operation procurementCatalogIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem $catalog_item  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function procurementCatalogIdPutWithHttpInfo($id, $catalog_item)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling procurementCatalogIdPut');
        }
        // verify the required parameter 'catalog_item' is set
        if ($catalog_item === null) {
            throw new \InvalidArgumentException('Missing the required parameter $catalog_item when calling procurementCatalogIdPut');
        }
        // parse inputs
        $resourcePath = "/procurement/catalog/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($catalog_item)) {
            $_tempBody = $catalog_item;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem',
                '/procurement/catalog/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation procurementCatalogPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem $catalog_item  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem
     */
    public function procurementCatalogPost($catalog_item)
    {
        list($response) = $this->procurementCatalogPostWithHttpInfo($catalog_item);
        return $response;
    }

    /**
     * Operation procurementCatalogPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem $catalog_item  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function procurementCatalogPostWithHttpInfo($catalog_item)
    {
        // verify the required parameter 'catalog_item' is set
        if ($catalog_item === null) {
            throw new \InvalidArgumentException('Missing the required parameter $catalog_item when calling procurementCatalogPost');
        }
        // parse inputs
        $resourcePath = "/procurement/catalog";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($catalog_item)) {
            $_tempBody = $catalog_item;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem',
                '/procurement/catalog'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItem', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
