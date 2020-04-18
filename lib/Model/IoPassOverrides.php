<?php
/**
 * IoPassOverrides
 *
 * PHP version 5
 *
 * @category Class
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PassKit Single Use Coupon API
 *
 * This protocol is suit for cases where the user requires a clean and simple single use coupon for short term coupon campaigns in Apple Wallet and Google Pay.
 *
 * OpenAPI spec version: 0.1
 * Contact: support@passkit.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.19
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace PkIo\Model;

use \ArrayAccess;
use \PkIo\ObjectSerializer;

/**
 * IoPassOverrides Class Doc Comment
 *
 * @category Class
 * @description PassObject contains pass-object level details that are common across protocols.
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IoPassOverrides implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ioPassOverrides';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'imageIds' => '\PkIo\Model\IoImageIds',
'locations' => '\PkIo\Model\IoGPSLocation[]',
'beacons' => '\PkIo\Model\IoBeacon[]',
'links' => '\PkIo\Model\IoLink[]',
'colors' => '\PkIo\Model\IoColors'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'imageIds' => null,
'locations' => null,
'beacons' => null,
'links' => null,
'colors' => null    ];

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
        'imageIds' => 'imageIds',
'locations' => 'locations',
'beacons' => 'beacons',
'links' => 'links',
'colors' => 'colors'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'imageIds' => 'setImageIds',
'locations' => 'setLocations',
'beacons' => 'setBeacons',
'links' => 'setLinks',
'colors' => 'setColors'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'imageIds' => 'getImageIds',
'locations' => 'getLocations',
'beacons' => 'getBeacons',
'links' => 'getLinks',
'colors' => 'getColors'    ];

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
        $this->container['imageIds'] = isset($data['imageIds']) ? $data['imageIds'] : null;
        $this->container['locations'] = isset($data['locations']) ? $data['locations'] : null;
        $this->container['beacons'] = isset($data['beacons']) ? $data['beacons'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['colors'] = isset($data['colors']) ? $data['colors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets imageIds
     *
     * @return \PkIo\Model\IoImageIds
     */
    public function getImageIds()
    {
        return $this->container['imageIds'];
    }

    /**
     * Sets imageIds
     *
     * @param \PkIo\Model\IoImageIds $imageIds imageIds
     *
     * @return $this
     */
    public function setImageIds($imageIds)
    {
        $this->container['imageIds'] = $imageIds;

        return $this;
    }

    /**
     * Gets locations
     *
     * @return \PkIo\Model\IoGPSLocation[]
     */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
     * Sets locations
     *
     * @param \PkIo\Model\IoGPSLocation[] $locations A list of up to 10 GPS locations where this pass should be presented on the lock-screen. Overrides any template level values.
     *
     * @return $this
     */
    public function setLocations($locations)
    {
        $this->container['locations'] = $locations;

        return $this;
    }

    /**
     * Gets beacons
     *
     * @return \PkIo\Model\IoBeacon[]
     */
    public function getBeacons()
    {
        return $this->container['beacons'];
    }

    /**
     * Sets beacons
     *
     * @param \PkIo\Model\IoBeacon[] $beacons A list of up to 10 Beacon UUIDs that should trigger the pass to be presented on the lock-screen. Overrides any template level values.
     *
     * @return $this
     */
    public function setBeacons($beacons)
    {
        $this->container['beacons'] = $beacons;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \PkIo\Model\IoLink[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \PkIo\Model\IoLink[] $links A list of (personalized) links to be shown on the pass. Overrides any template level values.
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets colors
     *
     * @return \PkIo\Model\IoColors
     */
    public function getColors()
    {
        return $this->container['colors'];
    }

    /**
     * Sets colors
     *
     * @param \PkIo\Model\IoColors $colors colors
     *
     * @return $this
     */
    public function setColors($colors)
    {
        $this->container['colors'] = $colors;

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
