<?php
/**
 * PricingBreak
 *
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Procurement
 * @author   Swaagger Codegen team
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

namespace Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model;

use \ArrayAccess;

/**
 * PricingBreak Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Procurement
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PricingBreak implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PricingBreak';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'detail_id' => 'int',
        'amount' => 'double',
        'quantity_start' => 'double',
        'quantity_end' => 'double',
        'price_method' => 'string',
        '_info' => '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Metadata'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'detail_id' => 'detailId',
        'amount' => 'amount',
        'quantity_start' => 'quantityStart',
        'quantity_end' => 'quantityEnd',
        'price_method' => 'priceMethod',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'detail_id' => 'setDetailId',
        'amount' => 'setAmount',
        'quantity_start' => 'setQuantityStart',
        'quantity_end' => 'setQuantityEnd',
        'price_method' => 'setPriceMethod',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'detail_id' => 'getDetailId',
        'amount' => 'getAmount',
        'quantity_start' => 'getQuantityStart',
        'quantity_end' => 'getQuantityEnd',
        'price_method' => 'getPriceMethod',
        '_info' => 'getInfo'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const PRICE_METHOD_FLAT_RATE_FOR_RANGE = 'FlatRateForRange';
    const PRICE_METHOD_PERCENT_MARKUP_FROM_COST = 'PercentMarkupFromCost';
    const PRICE_METHOD_PERCENT_MARKDOWN_FROM_PRICE = 'PercentMarkdownFromPrice';
    const PRICE_METHOD_PRICE_PER_UNIT = 'PricePerUnit';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPriceMethodAllowableValues()
    {
        return [
            self::PRICE_METHOD_FLAT_RATE_FOR_RANGE,
            self::PRICE_METHOD_PERCENT_MARKUP_FROM_COST,
            self::PRICE_METHOD_PERCENT_MARKDOWN_FROM_PRICE,
            self::PRICE_METHOD_PRICE_PER_UNIT,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['detail_id'] = isset($data['detail_id']) ? $data['detail_id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['quantity_start'] = isset($data['quantity_start']) ? $data['quantity_start'] : null;
        $this->container['quantity_end'] = isset($data['quantity_end']) ? $data['quantity_end'] : null;
        $this->container['price_method'] = isset($data['price_method']) ? $data['price_method'] : null;
        $this->container['_info'] = isset($data['_info']) ? $data['_info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['price_method'] === null) {
            $invalid_properties[] = "'price_method' can't be null";
        }
        $allowed_values = ["FlatRateForRange", "PercentMarkupFromCost", "PercentMarkdownFromPrice", "PricePerUnit"];
        if (!in_array($this->container['price_method'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'price_method', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['price_method'] === null) {
            return false;
        }
        $allowed_values = ["FlatRateForRange", "PercentMarkupFromCost", "PercentMarkdownFromPrice", "PricePerUnit"];
        if (!in_array($this->container['price_method'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets detail_id
     * @return int
     */
    public function getDetailId()
    {
        return $this->container['detail_id'];
    }

    /**
     * Sets detail_id
     * @param int $detail_id
     * @return $this
     */
    public function setDetailId($detail_id)
    {
        $this->container['detail_id'] = $detail_id;

        return $this;
    }

    /**
     * Gets amount
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param double $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets quantity_start
     * @return double
     */
    public function getQuantityStart()
    {
        return $this->container['quantity_start'];
    }

    /**
     * Sets quantity_start
     * @param double $quantity_start
     * @return $this
     */
    public function setQuantityStart($quantity_start)
    {
        $this->container['quantity_start'] = $quantity_start;

        return $this;
    }

    /**
     * Gets quantity_end
     * @return double
     */
    public function getQuantityEnd()
    {
        return $this->container['quantity_end'];
    }

    /**
     * Sets quantity_end
     * @param double $quantity_end
     * @return $this
     */
    public function setQuantityEnd($quantity_end)
    {
        $this->container['quantity_end'] = $quantity_end;

        return $this;
    }

    /**
     * Gets price_method
     * @return string
     */
    public function getPriceMethod()
    {
        return $this->container['price_method'];
    }

    /**
     * Sets price_method
     * @param string $price_method
     * @return $this
     */
    public function setPriceMethod($price_method)
    {
        $allowed_values = array('FlatRateForRange', 'PercentMarkupFromCost', 'PercentMarkdownFromPrice', 'PricePerUnit');
        if ((!in_array($price_method, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'price_method', must be one of 'FlatRateForRange', 'PercentMarkupFromCost', 'PercentMarkdownFromPrice', 'PricePerUnit'");
        }
        $this->container['price_method'] = $price_method;

        return $this;
    }

    /**
     * Gets _info
     * @return \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Metadata
     */
    public function getInfo()
    {
        return $this->container['_info'];
    }

    /**
     * Sets _info
     * @param \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\Metadata $_info Metadata of the entity
     * @return $this
     */
    public function setInfo($_info)
    {
        $this->container['_info'] = $_info;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Spinen\ConnectWise\Clients\Procurement\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Spinen\ConnectWise\Clients\Procurement\ObjectSerializer::sanitizeForSerialization($this));
    }
}


