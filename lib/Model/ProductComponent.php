<?php
/**
 * ProductComponent
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

namespace Spinen\ConnectWise\Clients\Procurement\Model;

use \ArrayAccess;

/**
 * ProductComponent Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Procurement
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductComponent implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProductComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'sequence_number' => 'int',
        'quantity' => 'double',
        'catalog_item' => '\Spinen\ConnectWise\Clients\Procurement\Model\CatalogItemReference',
        'hide_price_flag' => 'bool',
        'hide_item_identifier_flag' => 'bool',
        'hide_description_flag' => 'bool',
        'hide_quantity_flag' => 'bool',
        'vendor' => '\Spinen\ConnectWise\Clients\Procurement\Model\CompanyReference',
        'parent_product_item' => '\Spinen\ConnectWise\Clients\Procurement\Model\ProductItemReference',
        'product_item' => '\Spinen\ConnectWise\Clients\Procurement\Model\ProductItemReference',
        'price' => 'double',
        'cost' => 'double',
        '_info' => '\Spinen\ConnectWise\Clients\Procurement\Model\Metadata'
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
        'sequence_number' => 'sequenceNumber',
        'quantity' => 'quantity',
        'catalog_item' => 'catalogItem',
        'hide_price_flag' => 'hidePriceFlag',
        'hide_item_identifier_flag' => 'hideItemIdentifierFlag',
        'hide_description_flag' => 'hideDescriptionFlag',
        'hide_quantity_flag' => 'hideQuantityFlag',
        'vendor' => 'vendor',
        'parent_product_item' => 'parentProductItem',
        'product_item' => 'productItem',
        'price' => 'price',
        'cost' => 'cost',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sequence_number' => 'setSequenceNumber',
        'quantity' => 'setQuantity',
        'catalog_item' => 'setCatalogItem',
        'hide_price_flag' => 'setHidePriceFlag',
        'hide_item_identifier_flag' => 'setHideItemIdentifierFlag',
        'hide_description_flag' => 'setHideDescriptionFlag',
        'hide_quantity_flag' => 'setHideQuantityFlag',
        'vendor' => 'setVendor',
        'parent_product_item' => 'setParentProductItem',
        'product_item' => 'setProductItem',
        'price' => 'setPrice',
        'cost' => 'setCost',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sequence_number' => 'getSequenceNumber',
        'quantity' => 'getQuantity',
        'catalog_item' => 'getCatalogItem',
        'hide_price_flag' => 'getHidePriceFlag',
        'hide_item_identifier_flag' => 'getHideItemIdentifierFlag',
        'hide_description_flag' => 'getHideDescriptionFlag',
        'hide_quantity_flag' => 'getHideQuantityFlag',
        'vendor' => 'getVendor',
        'parent_product_item' => 'getParentProductItem',
        'product_item' => 'getProductItem',
        'price' => 'getPrice',
        'cost' => 'getCost',
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
        $this->container['sequence_number'] = isset($data['sequence_number']) ? $data['sequence_number'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['catalog_item'] = isset($data['catalog_item']) ? $data['catalog_item'] : null;
        $this->container['hide_price_flag'] = isset($data['hide_price_flag']) ? $data['hide_price_flag'] : null;
        $this->container['hide_item_identifier_flag'] = isset($data['hide_item_identifier_flag']) ? $data['hide_item_identifier_flag'] : null;
        $this->container['hide_description_flag'] = isset($data['hide_description_flag']) ? $data['hide_description_flag'] : null;
        $this->container['hide_quantity_flag'] = isset($data['hide_quantity_flag']) ? $data['hide_quantity_flag'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['parent_product_item'] = isset($data['parent_product_item']) ? $data['parent_product_item'] : null;
        $this->container['product_item'] = isset($data['product_item']) ? $data['product_item'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
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
        if ($this->container['quantity'] === null) {
            $invalid_properties[] = "'quantity' can't be null";
        }
        if ($this->container['catalog_item'] === null) {
            $invalid_properties[] = "'catalog_item' can't be null";
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
        if ($this->container['quantity'] === null) {
            return false;
        }
        if ($this->container['catalog_item'] === null) {
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
     * Gets sequence_number
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->container['sequence_number'];
    }

    /**
     * Sets sequence_number
     * @param int $sequence_number
     * @return $this
     */
    public function setSequenceNumber($sequence_number)
    {
        $this->container['sequence_number'] = $sequence_number;

        return $this;
    }

    /**
     * Gets quantity
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param double $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets catalog_item
     * @return \Spinen\ConnectWise\Clients\Procurement\Model\CatalogItemReference
     */
    public function getCatalogItem()
    {
        return $this->container['catalog_item'];
    }

    /**
     * Sets catalog_item
     * @param \Spinen\ConnectWise\Clients\Procurement\Model\CatalogItemReference $catalog_item
     * @return $this
     */
    public function setCatalogItem($catalog_item)
    {
        $this->container['catalog_item'] = $catalog_item;

        return $this;
    }

    /**
     * Gets hide_price_flag
     * @return bool
     */
    public function getHidePriceFlag()
    {
        return $this->container['hide_price_flag'];
    }

    /**
     * Sets hide_price_flag
     * @param bool $hide_price_flag
     * @return $this
     */
    public function setHidePriceFlag($hide_price_flag)
    {
        $this->container['hide_price_flag'] = $hide_price_flag;

        return $this;
    }

    /**
     * Gets hide_item_identifier_flag
     * @return bool
     */
    public function getHideItemIdentifierFlag()
    {
        return $this->container['hide_item_identifier_flag'];
    }

    /**
     * Sets hide_item_identifier_flag
     * @param bool $hide_item_identifier_flag
     * @return $this
     */
    public function setHideItemIdentifierFlag($hide_item_identifier_flag)
    {
        $this->container['hide_item_identifier_flag'] = $hide_item_identifier_flag;

        return $this;
    }

    /**
     * Gets hide_description_flag
     * @return bool
     */
    public function getHideDescriptionFlag()
    {
        return $this->container['hide_description_flag'];
    }

    /**
     * Sets hide_description_flag
     * @param bool $hide_description_flag
     * @return $this
     */
    public function setHideDescriptionFlag($hide_description_flag)
    {
        $this->container['hide_description_flag'] = $hide_description_flag;

        return $this;
    }

    /**
     * Gets hide_quantity_flag
     * @return bool
     */
    public function getHideQuantityFlag()
    {
        return $this->container['hide_quantity_flag'];
    }

    /**
     * Sets hide_quantity_flag
     * @param bool $hide_quantity_flag
     * @return $this
     */
    public function setHideQuantityFlag($hide_quantity_flag)
    {
        $this->container['hide_quantity_flag'] = $hide_quantity_flag;

        return $this;
    }

    /**
     * Gets vendor
     * @return \Spinen\ConnectWise\Clients\Procurement\Model\CompanyReference
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     * @param \Spinen\ConnectWise\Clients\Procurement\Model\CompanyReference $vendor
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;

        return $this;
    }

    /**
     * Gets parent_product_item
     * @return \Spinen\ConnectWise\Clients\Procurement\Model\ProductItemReference
     */
    public function getParentProductItem()
    {
        return $this->container['parent_product_item'];
    }

    /**
     * Sets parent_product_item
     * @param \Spinen\ConnectWise\Clients\Procurement\Model\ProductItemReference $parent_product_item
     * @return $this
     */
    public function setParentProductItem($parent_product_item)
    {
        $this->container['parent_product_item'] = $parent_product_item;

        return $this;
    }

    /**
     * Gets product_item
     * @return \Spinen\ConnectWise\Clients\Procurement\Model\ProductItemReference
     */
    public function getProductItem()
    {
        return $this->container['product_item'];
    }

    /**
     * Sets product_item
     * @param \Spinen\ConnectWise\Clients\Procurement\Model\ProductItemReference $product_item
     * @return $this
     */
    public function setProductItem($product_item)
    {
        $this->container['product_item'] = $product_item;

        return $this;
    }

    /**
     * Gets price
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param double $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets cost
     * @return double
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     * @param double $cost
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets _info
     * @return \Spinen\ConnectWise\Clients\Procurement\Model\Metadata
     */
    public function getInfo()
    {
        return $this->container['_info'];
    }

    /**
     * Sets _info
     * @param \Spinen\ConnectWise\Clients\Procurement\Model\Metadata $_info Metadata of the entity
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


