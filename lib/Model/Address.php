<?php
/**
 * Address
 *
 * PHP version 5
 *
 * @category Class
 * @package  ClickSend
 * @author   ClickSend Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ClickSend v3 REST API
 *
 * This is the official [ClickSend](https://clicksend.com) SDK.  *You'll need to create a free account to use the API. You can register [here](https://www.clicksend.com/signup).*  You can use our API documentation along with the SDK. Our API docs can be found [here](https://developers.clicksend.com).
 *
 * OpenAPI spec version: 3.1.0
 * Contact: support@clicksend.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * ClickSend Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ClickSend\Model;

use \ArrayAccess;
use \ClickSend\ObjectSerializer;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @description Base model for all address-related objects.
 * @package  ClickSend
 * @author   ClickSend Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'classType';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address_name' => 'string',
        'address_line_1' => 'string',
        'address_city' => 'string',
        'address_postal_code' => 'string',
        'address_country' => 'string',
        'address_line_2' => 'string',
        'address_state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address_name' => null,
        'address_line_1' => null,
        'address_city' => null,
        'address_postal_code' => null,
        'address_country' => null,
        'address_line_2' => null,
        'address_state' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'address_name' => 'address_name',
        'address_line_1' => 'address_line_1',
        'address_city' => 'address_city',
        'address_postal_code' => 'address_postal_code',
        'address_country' => 'address_country',
        'address_line_2' => 'address_line_2',
        'address_state' => 'address_state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_name' => 'setAddressName',
        'address_line_1' => 'setAddressLine1',
        'address_city' => 'setAddressCity',
        'address_postal_code' => 'setAddressPostalCode',
        'address_country' => 'setAddressCountry',
        'address_line_2' => 'setAddressLine2',
        'address_state' => 'setAddressState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_name' => 'getAddressName',
        'address_line_1' => 'getAddressLine1',
        'address_city' => 'getAddressCity',
        'address_postal_code' => 'getAddressPostalCode',
        'address_country' => 'getAddressCountry',
        'address_line_2' => 'getAddressLine2',
        'address_state' => 'getAddressState'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['address_name'] = isset($data['address_name']) ? $data['address_name'] : null;
        $this->container['address_line_1'] = isset($data['address_line_1']) ? $data['address_line_1'] : null;
        $this->container['address_city'] = isset($data['address_city']) ? $data['address_city'] : null;
        $this->container['address_postal_code'] = isset($data['address_postal_code']) ? $data['address_postal_code'] : null;
        $this->container['address_country'] = isset($data['address_country']) ? $data['address_country'] : null;
        $this->container['address_line_2'] = isset($data['address_line_2']) ? $data['address_line_2'] : null;
        $this->container['address_state'] = isset($data['address_state']) ? $data['address_state'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('classType', self::$attributeMap, true);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address_name'] === null) {
            $invalidProperties[] = "'address_name' can't be null";
        }
        if ($this->container['address_line_1'] === null) {
            $invalidProperties[] = "'address_line_1' can't be null";
        }
        if ($this->container['address_city'] === null) {
            $invalidProperties[] = "'address_city' can't be null";
        }
        if ($this->container['address_postal_code'] === null) {
            $invalidProperties[] = "'address_postal_code' can't be null";
        }
        if ($this->container['address_country'] === null) {
            $invalidProperties[] = "'address_country' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets address_name
     *
     * @return string
     */
    public function getAddressName()
    {
        return $this->container['address_name'];
    }

    /**
     * Sets address_name
     *
     * @param string $address_name Your address name.
     *
     * @return $this
     */
    public function setAddressName($address_name)
    {
        $this->container['address_name'] = $address_name;

        return $this;
    }

    /**
     * Gets address_line_1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line_1'];
    }

    /**
     * Sets address_line_1
     *
     * @param string $address_line_1 Your address line 1
     *
     * @return $this
     */
    public function setAddressLine1($address_line_1)
    {
        $this->container['address_line_1'] = $address_line_1;

        return $this;
    }

    /**
     * Gets address_city
     *
     * @return string
     */
    public function getAddressCity()
    {
        return $this->container['address_city'];
    }

    /**
     * Sets address_city
     *
     * @param string $address_city Your city
     *
     * @return $this
     */
    public function setAddressCity($address_city)
    {
        $this->container['address_city'] = $address_city;

        return $this;
    }

    /**
     * Gets address_postal_code
     *
     * @return string
     */
    public function getAddressPostalCode()
    {
        return $this->container['address_postal_code'];
    }

    /**
     * Sets address_postal_code
     *
     * @param string $address_postal_code Your postal code
     *
     * @return $this
     */
    public function setAddressPostalCode($address_postal_code)
    {
        $this->container['address_postal_code'] = $address_postal_code;

        return $this;
    }

    /**
     * Gets address_country
     *
     * @return string
     */
    public function getAddressCountry()
    {
        return $this->container['address_country'];
    }

    /**
     * Sets address_country
     *
     * @param string $address_country Your country
     *
     * @return $this
     */
    public function setAddressCountry($address_country)
    {
        $this->container['address_country'] = $address_country;

        return $this;
    }

    /**
     * Gets address_line_2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['address_line_2'];
    }

    /**
     * Sets address_line_2
     *
     * @param string $address_line_2 Your address line 2
     *
     * @return $this
     */
    public function setAddressLine2($address_line_2)
    {
        $this->container['address_line_2'] = $address_line_2;

        return $this;
    }

    /**
     * Gets address_state
     *
     * @return string
     */
    public function getAddressState()
    {
        return $this->container['address_state'];
    }

    /**
     * Sets address_state
     *
     * @param string $address_state Your state
     *
     * @return $this
     */
    public function setAddressState($address_state)
    {
        $this->container['address_state'] = $address_state;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


