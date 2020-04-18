<?php
/**
 * IoPagination
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
 * IoPagination Class Doc Comment
 *
 * @category Class
 * @description Pagination object used to split content into smaller parts.
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IoPagination implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ioPagination';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'limit' => 'int',
'offset' => 'int',
'filterField' => 'string[]',
'filterValue' => 'string[]',
'filterOperator' => 'string[]',
'orderBy' => 'string',
'orderAsc' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'limit' => 'int32',
'offset' => 'int32',
'filterField' => null,
'filterValue' => null,
'filterOperator' => null,
'orderBy' => null,
'orderAsc' => 'boolean'    ];

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
        'limit' => 'limit',
'offset' => 'offset',
'filterField' => 'filterField',
'filterValue' => 'filterValue',
'filterOperator' => 'filterOperator',
'orderBy' => 'orderBy',
'orderAsc' => 'orderAsc'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'limit' => 'setLimit',
'offset' => 'setOffset',
'filterField' => 'setFilterField',
'filterValue' => 'setFilterValue',
'filterOperator' => 'setFilterOperator',
'orderBy' => 'setOrderBy',
'orderAsc' => 'setOrderAsc'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'limit' => 'getLimit',
'offset' => 'getOffset',
'filterField' => 'getFilterField',
'filterValue' => 'getFilterValue',
'filterOperator' => 'getFilterOperator',
'orderBy' => 'getOrderBy',
'orderAsc' => 'getOrderAsc'    ];

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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['filterField'] = isset($data['filterField']) ? $data['filterField'] : null;
        $this->container['filterValue'] = isset($data['filterValue']) ? $data['filterValue'] : null;
        $this->container['filterOperator'] = isset($data['filterOperator']) ? $data['filterOperator'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['orderAsc'] = isset($data['orderAsc']) ? $data['orderAsc'] : null;
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
     * Gets limit
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int $limit Limit the number of records returned. If not specified, a default of 25 is used.  Enter -1 for all records.
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int $offset Allows you to offset the first record returned by the limit.
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets filterField
     *
     * @return string[]
     */
    public function getFilterField()
    {
        return $this->container['filterField'];
    }

    /**
     * Sets filterField
     *
     * @param string[] $filterField Array of column names to filter results by.
     *
     * @return $this
     */
    public function setFilterField($filterField)
    {
        $this->container['filterField'] = $filterField;

        return $this;
    }

    /**
     * Gets filterValue
     *
     * @return string[]
     */
    public function getFilterValue()
    {
        return $this->container['filterValue'];
    }

    /**
     * Sets filterValue
     *
     * @param string[] $filterValue Array of values to test against the filter fields.
     *
     * @return $this
     */
    public function setFilterValue($filterValue)
    {
        $this->container['filterValue'] = $filterValue;

        return $this;
    }

    /**
     * Gets filterOperator
     *
     * @return string[]
     */
    public function getFilterOperator()
    {
        return $this->container['filterOperator'];
    }

    /**
     * Sets filterOperator
     *
     * @param string[] $filterOperator filterOperator
     *
     * @return $this
     */
    public function setFilterOperator($filterOperator)
    {
        $this->container['filterOperator'] = $filterOperator;

        return $this;
    }

    /**
     * Gets orderBy
     *
     * @return string
     */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
     * Sets orderBy
     *
     * @param string $orderBy Field to order results by.
     *
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;

        return $this;
    }

    /**
     * Gets orderAsc
     *
     * @return bool
     */
    public function getOrderAsc()
    {
        return $this->container['orderAsc'];
    }

    /**
     * Sets orderAsc
     *
     * @param bool $orderAsc Will return in ascending order if true, or descending order if false.
     *
     * @return $this
     */
    public function setOrderAsc($orderAsc)
    {
        $this->container['orderAsc'] = $orderAsc;

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
