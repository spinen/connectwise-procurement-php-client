<?php
/**
 * PricingDetailsApi
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

namespace Spinen\ConnectWise\Clients\Procurement\Api;

use \Spinen\ConnectWise\Clients\Procurement\ApiClient;
use \Spinen\ConnectWise\Clients\Procurement\ApiException;
use \Spinen\ConnectWise\Clients\Procurement\Configuration;
use \Spinen\ConnectWise\Clients\Procurement\ObjectSerializer;

/**
 * PricingDetailsApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Procurement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PricingDetailsApi
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
     * @return PricingDetailsApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Procurement\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation procurementPricingschedulesIdDetailsCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Procurement\Model\Count
     */
    public function procurementPricingschedulesIdDetailsCountGet($id, $conditions = null)
    {
        list($response) = $this->procurementPricingschedulesIdDetailsCountGetWithHttpInfo($id, $conditions);
        return $response;
    }

    /**
     * Operation procurementPricingschedulesIdDetailsCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Procurement\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function procurementPricingschedulesIdDetailsCountGetWithHttpInfo($id, $conditions = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling procurementPricingschedulesIdDetailsCountGet');
        }
        // parse inputs
        $resourcePath = "/procurement/pricingschedules/{id}/details/count";
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
                '\Spinen\ConnectWise\Clients\Procurement\Model\Count',
                '/procurement/pricingschedules/{id}/details/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Procurement\Model\Count', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Model\Count', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation procurementPricingschedulesIdDetailsDetailIDDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $detail_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return void
     */
    public function procurementPricingschedulesIdDetailsDetailIDDelete($id, $detail_id)
    {
        list($response) = $this->procurementPricingschedulesIdDetailsDetailIDDeleteWithHttpInfo($id, $detail_id);
        return $response;
    }

    /**
     * Operation procurementPricingschedulesIdDetailsDetailIDDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $detail_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function procurementPricingschedulesIdDetailsDetailIDDeleteWithHttpInfo($id, $detail_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling procurementPricingschedulesIdDetailsDetailIDDelete');
        }
        // verify the required parameter 'detail_id' is set
        if ($detail_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $detail_id when calling procurementPricingschedulesIdDetailsDetailIDDelete');
        }
        // parse inputs
        $resourcePath = "/procurement/pricingschedules/{id}/details/{detailID}";
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
        // path params
        if ($detail_id !== null) {
            $resourcePath = str_replace(
                "{" . "detailID" . "}",
                $this->apiClient->getSerializer()->toPathValue($detail_id),
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
                '/procurement/pricingschedules/{id}/details/{detailID}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation procurementPricingschedulesIdDetailsDetailIDGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $detail_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail
     */
    public function procurementPricingschedulesIdDetailsDetailIDGet($id, $detail_id)
    {
        list($response) = $this->procurementPricingschedulesIdDetailsDetailIDGetWithHttpInfo($id, $detail_id);
        return $response;
    }

    /**
     * Operation procurementPricingschedulesIdDetailsDetailIDGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $detail_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail, HTTP status code, HTTP response headers (array of strings)
     */
    public function procurementPricingschedulesIdDetailsDetailIDGetWithHttpInfo($id, $detail_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling procurementPricingschedulesIdDetailsDetailIDGet');
        }
        // verify the required parameter 'detail_id' is set
        if ($detail_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $detail_id when calling procurementPricingschedulesIdDetailsDetailIDGet');
        }
        // parse inputs
        $resourcePath = "/procurement/pricingschedules/{id}/details/{detailID}";
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
        // path params
        if ($detail_id !== null) {
            $resourcePath = str_replace(
                "{" . "detailID" . "}",
                $this->apiClient->getSerializer()->toPathValue($detail_id),
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
                '\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail',
                '/procurement/pricingschedules/{id}/details/{detailID}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation procurementPricingschedulesIdDetailsDetailIDPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $detail_id  (required)
     * @param \Spinen\ConnectWise\Clients\Procurement\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail
     */
    public function procurementPricingschedulesIdDetailsDetailIDPatch($id, $detail_id, $operations)
    {
        list($response) = $this->procurementPricingschedulesIdDetailsDetailIDPatchWithHttpInfo($id, $detail_id, $operations);
        return $response;
    }

    /**
     * Operation procurementPricingschedulesIdDetailsDetailIDPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $detail_id  (required)
     * @param \Spinen\ConnectWise\Clients\Procurement\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail, HTTP status code, HTTP response headers (array of strings)
     */
    public function procurementPricingschedulesIdDetailsDetailIDPatchWithHttpInfo($id, $detail_id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling procurementPricingschedulesIdDetailsDetailIDPatch');
        }
        // verify the required parameter 'detail_id' is set
        if ($detail_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $detail_id when calling procurementPricingschedulesIdDetailsDetailIDPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling procurementPricingschedulesIdDetailsDetailIDPatch');
        }
        // parse inputs
        $resourcePath = "/procurement/pricingschedules/{id}/details/{detailID}";
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
        // path params
        if ($detail_id !== null) {
            $resourcePath = str_replace(
                "{" . "detailID" . "}",
                $this->apiClient->getSerializer()->toPathValue($detail_id),
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
                '\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail',
                '/procurement/pricingschedules/{id}/details/{detailID}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation procurementPricingschedulesIdDetailsDetailIDPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $detail_id  (required)
     * @param \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail $pricing_detail  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail
     */
    public function procurementPricingschedulesIdDetailsDetailIDPut($id, $detail_id, $pricing_detail)
    {
        list($response) = $this->procurementPricingschedulesIdDetailsDetailIDPutWithHttpInfo($id, $detail_id, $pricing_detail);
        return $response;
    }

    /**
     * Operation procurementPricingschedulesIdDetailsDetailIDPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $detail_id  (required)
     * @param \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail $pricing_detail  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail, HTTP status code, HTTP response headers (array of strings)
     */
    public function procurementPricingschedulesIdDetailsDetailIDPutWithHttpInfo($id, $detail_id, $pricing_detail)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling procurementPricingschedulesIdDetailsDetailIDPut');
        }
        // verify the required parameter 'detail_id' is set
        if ($detail_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $detail_id when calling procurementPricingschedulesIdDetailsDetailIDPut');
        }
        // verify the required parameter 'pricing_detail' is set
        if ($pricing_detail === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pricing_detail when calling procurementPricingschedulesIdDetailsDetailIDPut');
        }
        // parse inputs
        $resourcePath = "/procurement/pricingschedules/{id}/details/{detailID}";
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
        // path params
        if ($detail_id !== null) {
            $resourcePath = str_replace(
                "{" . "detailID" . "}",
                $this->apiClient->getSerializer()->toPathValue($detail_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($pricing_detail)) {
            $_tempBody = $pricing_detail;
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
                '\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail',
                '/procurement/pricingschedules/{id}/details/{detailID}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation procurementPricingschedulesIdDetailsGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail[]
     */
    public function procurementPricingschedulesIdDetailsGet($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->procurementPricingschedulesIdDetailsGetWithHttpInfo($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation procurementPricingschedulesIdDetailsGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail[], HTTP status code, HTTP response headers (array of strings)
     */
    public function procurementPricingschedulesIdDetailsGetWithHttpInfo($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling procurementPricingschedulesIdDetailsGet');
        }
        // parse inputs
        $resourcePath = "/procurement/pricingschedules/{id}/details";
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
                '\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail[]',
                '/procurement/pricingschedules/{id}/details'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation procurementPricingschedulesIdDetailsPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail $pricing_detail  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail
     */
    public function procurementPricingschedulesIdDetailsPost($id, $pricing_detail)
    {
        list($response) = $this->procurementPricingschedulesIdDetailsPostWithHttpInfo($id, $pricing_detail);
        return $response;
    }

    /**
     * Operation procurementPricingschedulesIdDetailsPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Procurement API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail $pricing_detail  (required)
     * @throws \Spinen\ConnectWise\Clients\Procurement\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail, HTTP status code, HTTP response headers (array of strings)
     */
    public function procurementPricingschedulesIdDetailsPostWithHttpInfo($id, $pricing_detail)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling procurementPricingschedulesIdDetailsPost');
        }
        // verify the required parameter 'pricing_detail' is set
        if ($pricing_detail === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pricing_detail when calling procurementPricingschedulesIdDetailsPost');
        }
        // parse inputs
        $resourcePath = "/procurement/pricingschedules/{id}/details";
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
        if (isset($pricing_detail)) {
            $_tempBody = $pricing_detail;
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
                '\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail',
                '/procurement/pricingschedules/{id}/details'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Model\PricingDetail', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Procurement\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
