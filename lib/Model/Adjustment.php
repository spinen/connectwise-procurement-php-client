<?php
/**
 * Adjustment
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
 * Adjustment Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Procurement
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Adjustment implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Adjustment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'identifier' => 'string',
        'type' => '\Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\AdjustmentTypeReference',
        'reason' => 'string',
        'notes' => 'string',
        'closed_flag' => 'bool',
        'closed_by' => 'string',
        'closed_date' => '\DateTime',
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
        'identifier' => 'identifier',
        'type' => 'type',
        'reason' => 'reason',
        'notes' => 'notes',
        'closed_flag' => 'closedFlag',
        'closed_by' => 'closedBy',
        'closed_date' => 'closedDate',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'identifier' => 'setIdentifier',
        'type' => 'setType',
        'reason' => 'setReason',
        'notes' => 'setNotes',
        'closed_flag' => 'setClosedFlag',
        'closed_by' => 'setClosedBy',
        'closed_date' => 'setClosedDate',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'identifier' => 'getIdentifier',
        'type' => 'getType',
        'reason' => 'getReason',
        'notes' => 'getNotes',
        'closed_flag' => 'getClosedFlag',
        'closed_by' => 'getClosedBy',
        'closed_date' => 'getClosedDate',
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
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['closed_flag'] = isset($data['closed_flag']) ? $data['closed_flag'] : null;
        $this->container['closed_by'] = isset($data['closed_by']) ? $data['closed_by'] : null;
        $this->container['closed_date'] = isset($data['closed_date']) ? $data['closed_date'] : null;
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
        if ($this->container['identifier'] === null) {
            $invalid_properties[] = "'identifier' can't be null";
        }
        if ((strlen($this->container['identifier']) > 50)) {
            $invalid_properties[] = "invalid value for 'identifier', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        if (!is_null($this->container['reason']) && (strlen($this->container['reason']) > 100)) {
            $invalid_properties[] = "invalid value for 'reason', the character length must be smaller than or equal to 100.";
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
        if ($this->container['identifier'] === null) {
            return false;
        }
        if (strlen($this->container['identifier']) > 50) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if (strlen($this->container['reason']) > 100) {
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
     * Gets identifier
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     * @param string $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        if ((strlen($identifier) > 50)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling Adjustment., must be smaller than or equal to 50.');
        }

        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets type
     * @return \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\AdjustmentTypeReference
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param \Spinen\ConnectWise\Clients\Procurement\Spinen\ConnectWise\Clients\Procurement\Model\AdjustmentTypeReference $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        if (!is_null($reason) && (strlen($reason) > 100)) {
            throw new \InvalidArgumentException('invalid length for $reason when calling Adjustment., must be smaller than or equal to 100.');
        }

        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param string $notes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets closed_flag
     * @return bool
     */
    public function getClosedFlag()
    {
        return $this->container['closed_flag'];
    }

    /**
     * Sets closed_flag
     * @param bool $closed_flag
     * @return $this
     */
    public function setClosedFlag($closed_flag)
    {
        $this->container['closed_flag'] = $closed_flag;

        return $this;
    }

    /**
     * Gets closed_by
     * @return string
     */
    public function getClosedBy()
    {
        return $this->container['closed_by'];
    }

    /**
     * Sets closed_by
     * @param string $closed_by
     * @return $this
     */
    public function setClosedBy($closed_by)
    {
        $this->container['closed_by'] = $closed_by;

        return $this;
    }

    /**
     * Gets closed_date
     * @return \DateTime
     */
    public function getClosedDate()
    {
        return $this->container['closed_date'];
    }

    /**
     * Sets closed_date
     * @param \DateTime $closed_date
     * @return $this
     */
    public function setClosedDate($closed_date)
    {
        $this->container['closed_date'] = $closed_date;

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


