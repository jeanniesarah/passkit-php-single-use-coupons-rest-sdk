<?php
/**
 * SingleUseCouponsCustomerInitiatedCodeProvideOnRedeem
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
 * SingleUseCouponsCustomerInitiatedCodeProvideOnRedeem Class Doc Comment
 *
 * @category Class
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SingleUseCouponsCustomerInitiatedCodeProvideOnRedeem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'single_use_couponsCustomerInitiatedCodeProvideOnRedeem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'validCodes' => 'string[]',
'redemptionCodeInput' => '\PkIo\Model\SingleUseCouponsInputField',
'submitButtonText' => 'string',
'localizedSubmitButtonText' => '\PkIo\Model\IoLocalizedString'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'validCodes' => null,
'redemptionCodeInput' => null,
'submitButtonText' => null,
'localizedSubmitButtonText' => null    ];

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
        'validCodes' => 'validCodes',
'redemptionCodeInput' => 'redemptionCodeInput',
'submitButtonText' => 'submitButtonText',
'localizedSubmitButtonText' => 'localizedSubmitButtonText'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'validCodes' => 'setValidCodes',
'redemptionCodeInput' => 'setRedemptionCodeInput',
'submitButtonText' => 'setSubmitButtonText',
'localizedSubmitButtonText' => 'setLocalizedSubmitButtonText'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'validCodes' => 'getValidCodes',
'redemptionCodeInput' => 'getRedemptionCodeInput',
'submitButtonText' => 'getSubmitButtonText',
'localizedSubmitButtonText' => 'getLocalizedSubmitButtonText'    ];

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
        $this->container['validCodes'] = isset($data['validCodes']) ? $data['validCodes'] : null;
        $this->container['redemptionCodeInput'] = isset($data['redemptionCodeInput']) ? $data['redemptionCodeInput'] : null;
        $this->container['submitButtonText'] = isset($data['submitButtonText']) ? $data['submitButtonText'] : null;
        $this->container['localizedSubmitButtonText'] = isset($data['localizedSubmitButtonText']) ? $data['localizedSubmitButtonText'] : null;
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
     * Gets validCodes
     *
     * @return string[]
     */
    public function getValidCodes()
    {
        return $this->container['validCodes'];
    }

    /**
     * Sets validCodes
     *
     * @param string[] $validCodes Optional array of valid codes that can be input on redemption.
     *
     * @return $this
     */
    public function setValidCodes($validCodes)
    {
        $this->container['validCodes'] = $validCodes;

        return $this;
    }

    /**
     * Gets redemptionCodeInput
     *
     * @return \PkIo\Model\SingleUseCouponsInputField
     */
    public function getRedemptionCodeInput()
    {
        return $this->container['redemptionCodeInput'];
    }

    /**
     * Sets redemptionCodeInput
     *
     * @param \PkIo\Model\SingleUseCouponsInputField $redemptionCodeInput redemptionCodeInput
     *
     * @return $this
     */
    public function setRedemptionCodeInput($redemptionCodeInput)
    {
        $this->container['redemptionCodeInput'] = $redemptionCodeInput;

        return $this;
    }

    /**
     * Gets submitButtonText
     *
     * @return string
     */
    public function getSubmitButtonText()
    {
        return $this->container['submitButtonText'];
    }

    /**
     * Sets submitButtonText
     *
     * @param string $submitButtonText Submit button to confirm the validation code.
     *
     * @return $this
     */
    public function setSubmitButtonText($submitButtonText)
    {
        $this->container['submitButtonText'] = $submitButtonText;

        return $this;
    }

    /**
     * Gets localizedSubmitButtonText
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedSubmitButtonText()
    {
        return $this->container['localizedSubmitButtonText'];
    }

    /**
     * Sets localizedSubmitButtonText
     *
     * @param \PkIo\Model\IoLocalizedString $localizedSubmitButtonText localizedSubmitButtonText
     *
     * @return $this
     */
    public function setLocalizedSubmitButtonText($localizedSubmitButtonText)
    {
        $this->container['localizedSubmitButtonText'] = $localizedSubmitButtonText;

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
