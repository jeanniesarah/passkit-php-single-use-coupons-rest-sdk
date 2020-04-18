<?php
/**
 * IoEmailTemplate
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
 * IoEmailTemplate Class Doc Comment
 *
 * @category Class
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IoEmailTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ioEmailTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'subject' => 'string',
'localizedSubject' => '\PkIo\Model\IoLocalizedString',
'bodyTextContent' => 'string',
'localizedBodyTextContent' => '\PkIo\Model\IoLocalizedString',
'bodyHtmlContent' => 'string',
'localizedBodyHtmlContent' => '\PkIo\Model\IoLocalizedString',
'configuration' => '\PkIo\Model\IoEmailConfiguration',
'buttonText' => 'string',
'buttonTextColor' => 'string',
'buttonBackgroundColor' => 'string',
'buttonBorderRadius' => 'string',
'footerTextContent' => 'string',
'localizedFooterTextContent' => '\PkIo\Model\IoLocalizedString',
'footerHtmlContent' => 'string',
'localizedFooterHtmlContent' => '\PkIo\Model\IoLocalizedString',
'messageBackgroundColor' => 'string',
'pageBackgroundColor' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'subject' => null,
'localizedSubject' => null,
'bodyTextContent' => null,
'localizedBodyTextContent' => null,
'bodyHtmlContent' => null,
'localizedBodyHtmlContent' => null,
'configuration' => null,
'buttonText' => null,
'buttonTextColor' => null,
'buttonBackgroundColor' => null,
'buttonBorderRadius' => null,
'footerTextContent' => null,
'localizedFooterTextContent' => null,
'footerHtmlContent' => null,
'localizedFooterHtmlContent' => null,
'messageBackgroundColor' => null,
'pageBackgroundColor' => null    ];

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
        'subject' => 'subject',
'localizedSubject' => 'localizedSubject',
'bodyTextContent' => 'bodyTextContent',
'localizedBodyTextContent' => 'localizedBodyTextContent',
'bodyHtmlContent' => 'bodyHtmlContent',
'localizedBodyHtmlContent' => 'localizedBodyHtmlContent',
'configuration' => 'configuration',
'buttonText' => 'buttonText',
'buttonTextColor' => 'buttonTextColor',
'buttonBackgroundColor' => 'buttonBackgroundColor',
'buttonBorderRadius' => 'buttonBorderRadius',
'footerTextContent' => 'footerTextContent',
'localizedFooterTextContent' => 'localizedFooterTextContent',
'footerHtmlContent' => 'footerHtmlContent',
'localizedFooterHtmlContent' => 'localizedFooterHtmlContent',
'messageBackgroundColor' => 'messageBackgroundColor',
'pageBackgroundColor' => 'pageBackgroundColor'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subject' => 'setSubject',
'localizedSubject' => 'setLocalizedSubject',
'bodyTextContent' => 'setBodyTextContent',
'localizedBodyTextContent' => 'setLocalizedBodyTextContent',
'bodyHtmlContent' => 'setBodyHtmlContent',
'localizedBodyHtmlContent' => 'setLocalizedBodyHtmlContent',
'configuration' => 'setConfiguration',
'buttonText' => 'setButtonText',
'buttonTextColor' => 'setButtonTextColor',
'buttonBackgroundColor' => 'setButtonBackgroundColor',
'buttonBorderRadius' => 'setButtonBorderRadius',
'footerTextContent' => 'setFooterTextContent',
'localizedFooterTextContent' => 'setLocalizedFooterTextContent',
'footerHtmlContent' => 'setFooterHtmlContent',
'localizedFooterHtmlContent' => 'setLocalizedFooterHtmlContent',
'messageBackgroundColor' => 'setMessageBackgroundColor',
'pageBackgroundColor' => 'setPageBackgroundColor'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subject' => 'getSubject',
'localizedSubject' => 'getLocalizedSubject',
'bodyTextContent' => 'getBodyTextContent',
'localizedBodyTextContent' => 'getLocalizedBodyTextContent',
'bodyHtmlContent' => 'getBodyHtmlContent',
'localizedBodyHtmlContent' => 'getLocalizedBodyHtmlContent',
'configuration' => 'getConfiguration',
'buttonText' => 'getButtonText',
'buttonTextColor' => 'getButtonTextColor',
'buttonBackgroundColor' => 'getButtonBackgroundColor',
'buttonBorderRadius' => 'getButtonBorderRadius',
'footerTextContent' => 'getFooterTextContent',
'localizedFooterTextContent' => 'getLocalizedFooterTextContent',
'footerHtmlContent' => 'getFooterHtmlContent',
'localizedFooterHtmlContent' => 'getLocalizedFooterHtmlContent',
'messageBackgroundColor' => 'getMessageBackgroundColor',
'pageBackgroundColor' => 'getPageBackgroundColor'    ];

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
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['localizedSubject'] = isset($data['localizedSubject']) ? $data['localizedSubject'] : null;
        $this->container['bodyTextContent'] = isset($data['bodyTextContent']) ? $data['bodyTextContent'] : null;
        $this->container['localizedBodyTextContent'] = isset($data['localizedBodyTextContent']) ? $data['localizedBodyTextContent'] : null;
        $this->container['bodyHtmlContent'] = isset($data['bodyHtmlContent']) ? $data['bodyHtmlContent'] : null;
        $this->container['localizedBodyHtmlContent'] = isset($data['localizedBodyHtmlContent']) ? $data['localizedBodyHtmlContent'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['buttonText'] = isset($data['buttonText']) ? $data['buttonText'] : null;
        $this->container['buttonTextColor'] = isset($data['buttonTextColor']) ? $data['buttonTextColor'] : null;
        $this->container['buttonBackgroundColor'] = isset($data['buttonBackgroundColor']) ? $data['buttonBackgroundColor'] : null;
        $this->container['buttonBorderRadius'] = isset($data['buttonBorderRadius']) ? $data['buttonBorderRadius'] : null;
        $this->container['footerTextContent'] = isset($data['footerTextContent']) ? $data['footerTextContent'] : null;
        $this->container['localizedFooterTextContent'] = isset($data['localizedFooterTextContent']) ? $data['localizedFooterTextContent'] : null;
        $this->container['footerHtmlContent'] = isset($data['footerHtmlContent']) ? $data['footerHtmlContent'] : null;
        $this->container['localizedFooterHtmlContent'] = isset($data['localizedFooterHtmlContent']) ? $data['localizedFooterHtmlContent'] : null;
        $this->container['messageBackgroundColor'] = isset($data['messageBackgroundColor']) ? $data['messageBackgroundColor'] : null;
        $this->container['pageBackgroundColor'] = isset($data['pageBackgroundColor']) ? $data['pageBackgroundColor'] : null;
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
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject Subject of the email. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc..
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets localizedSubject
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedSubject()
    {
        return $this->container['localizedSubject'];
    }

    /**
     * Sets localizedSubject
     *
     * @param \PkIo\Model\IoLocalizedString $localizedSubject localizedSubject
     *
     * @return $this
     */
    public function setLocalizedSubject($localizedSubject)
    {
        $this->container['localizedSubject'] = $localizedSubject;

        return $this;
    }

    /**
     * Gets bodyTextContent
     *
     * @return string
     */
    public function getBodyTextContent()
    {
        return $this->container['bodyTextContent'];
    }

    /**
     * Sets bodyTextContent
     *
     * @param string $bodyTextContent Text content of the email (for email clients that don't support HTML). The body text is rendered above pass install url text. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * @return $this
     */
    public function setBodyTextContent($bodyTextContent)
    {
        $this->container['bodyTextContent'] = $bodyTextContent;

        return $this;
    }

    /**
     * Gets localizedBodyTextContent
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedBodyTextContent()
    {
        return $this->container['localizedBodyTextContent'];
    }

    /**
     * Sets localizedBodyTextContent
     *
     * @param \PkIo\Model\IoLocalizedString $localizedBodyTextContent localizedBodyTextContent
     *
     * @return $this
     */
    public function setLocalizedBodyTextContent($localizedBodyTextContent)
    {
        $this->container['localizedBodyTextContent'] = $localizedBodyTextContent;

        return $this;
    }

    /**
     * Gets bodyHtmlContent
     *
     * @return string
     */
    public function getBodyHtmlContent()
    {
        return $this->container['bodyHtmlContent'];
    }

    /**
     * Sets bodyHtmlContent
     *
     * @param string $bodyHtmlContent Content for HTML email rendered above the pass install button. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * @return $this
     */
    public function setBodyHtmlContent($bodyHtmlContent)
    {
        $this->container['bodyHtmlContent'] = $bodyHtmlContent;

        return $this;
    }

    /**
     * Gets localizedBodyHtmlContent
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedBodyHtmlContent()
    {
        return $this->container['localizedBodyHtmlContent'];
    }

    /**
     * Sets localizedBodyHtmlContent
     *
     * @param \PkIo\Model\IoLocalizedString $localizedBodyHtmlContent localizedBodyHtmlContent
     *
     * @return $this
     */
    public function setLocalizedBodyHtmlContent($localizedBodyHtmlContent)
    {
        $this->container['localizedBodyHtmlContent'] = $localizedBodyHtmlContent;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \PkIo\Model\IoEmailConfiguration
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \PkIo\Model\IoEmailConfiguration $configuration configuration
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets buttonText
     *
     * @return string
     */
    public function getButtonText()
    {
        return $this->container['buttonText'];
    }

    /**
     * Sets buttonText
     *
     * @param string $buttonText Text of the pass install button.
     *
     * @return $this
     */
    public function setButtonText($buttonText)
    {
        $this->container['buttonText'] = $buttonText;

        return $this;
    }

    /**
     * Gets buttonTextColor
     *
     * @return string
     */
    public function getButtonTextColor()
    {
        return $this->container['buttonTextColor'];
    }

    /**
     * Sets buttonTextColor
     *
     * @param string $buttonTextColor Text color of the pass install button.
     *
     * @return $this
     */
    public function setButtonTextColor($buttonTextColor)
    {
        $this->container['buttonTextColor'] = $buttonTextColor;

        return $this;
    }

    /**
     * Gets buttonBackgroundColor
     *
     * @return string
     */
    public function getButtonBackgroundColor()
    {
        return $this->container['buttonBackgroundColor'];
    }

    /**
     * Sets buttonBackgroundColor
     *
     * @param string $buttonBackgroundColor Color of the pass install button.
     *
     * @return $this
     */
    public function setButtonBackgroundColor($buttonBackgroundColor)
    {
        $this->container['buttonBackgroundColor'] = $buttonBackgroundColor;

        return $this;
    }

    /**
     * Gets buttonBorderRadius
     *
     * @return string
     */
    public function getButtonBorderRadius()
    {
        return $this->container['buttonBorderRadius'];
    }

    /**
     * Sets buttonBorderRadius
     *
     * @param string $buttonBorderRadius Radius of the pass install button. The unit can be px or %. Default is px.
     *
     * @return $this
     */
    public function setButtonBorderRadius($buttonBorderRadius)
    {
        $this->container['buttonBorderRadius'] = $buttonBorderRadius;

        return $this;
    }

    /**
     * Gets footerTextContent
     *
     * @return string
     */
    public function getFooterTextContent()
    {
        return $this->container['footerTextContent'];
    }

    /**
     * Sets footerTextContent
     *
     * @param string $footerTextContent Footer text content (for email clients that don't support HTML). The footer text is rendered below the pass install url text.
     *
     * @return $this
     */
    public function setFooterTextContent($footerTextContent)
    {
        $this->container['footerTextContent'] = $footerTextContent;

        return $this;
    }

    /**
     * Gets localizedFooterTextContent
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedFooterTextContent()
    {
        return $this->container['localizedFooterTextContent'];
    }

    /**
     * Sets localizedFooterTextContent
     *
     * @param \PkIo\Model\IoLocalizedString $localizedFooterTextContent localizedFooterTextContent
     *
     * @return $this
     */
    public function setLocalizedFooterTextContent($localizedFooterTextContent)
    {
        $this->container['localizedFooterTextContent'] = $localizedFooterTextContent;

        return $this;
    }

    /**
     * Gets footerHtmlContent
     *
     * @return string
     */
    public function getFooterHtmlContent()
    {
        return $this->container['footerHtmlContent'];
    }

    /**
     * Sets footerHtmlContent
     *
     * @param string $footerHtmlContent Footer HTML content rendered below the pass install button.
     *
     * @return $this
     */
    public function setFooterHtmlContent($footerHtmlContent)
    {
        $this->container['footerHtmlContent'] = $footerHtmlContent;

        return $this;
    }

    /**
     * Gets localizedFooterHtmlContent
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedFooterHtmlContent()
    {
        return $this->container['localizedFooterHtmlContent'];
    }

    /**
     * Sets localizedFooterHtmlContent
     *
     * @param \PkIo\Model\IoLocalizedString $localizedFooterHtmlContent localizedFooterHtmlContent
     *
     * @return $this
     */
    public function setLocalizedFooterHtmlContent($localizedFooterHtmlContent)
    {
        $this->container['localizedFooterHtmlContent'] = $localizedFooterHtmlContent;

        return $this;
    }

    /**
     * Gets messageBackgroundColor
     *
     * @return string
     */
    public function getMessageBackgroundColor()
    {
        return $this->container['messageBackgroundColor'];
    }

    /**
     * Sets messageBackgroundColor
     *
     * @param string $messageBackgroundColor Background color for the message content section.
     *
     * @return $this
     */
    public function setMessageBackgroundColor($messageBackgroundColor)
    {
        $this->container['messageBackgroundColor'] = $messageBackgroundColor;

        return $this;
    }

    /**
     * Gets pageBackgroundColor
     *
     * @return string
     */
    public function getPageBackgroundColor()
    {
        return $this->container['pageBackgroundColor'];
    }

    /**
     * Sets pageBackgroundColor
     *
     * @param string $pageBackgroundColor Background color for the margin space surrounding the message content. This setting is relevant for PC viewers.
     *
     * @return $this
     */
    public function setPageBackgroundColor($pageBackgroundColor)
    {
        $this->container['pageBackgroundColor'] = $pageBackgroundColor;

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
