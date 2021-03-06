<?php
/**
 * IoImageData
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
 * IoImageData Class Doc Comment
 *
 * @category Class
 * @description Image data can be provided as either a url or base 64 encoded data.
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IoImageData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ioImageData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'icon' => 'string',
'logo' => 'string',
'appleLogo' => 'string',
'hero' => 'string',
'eventStrip' => 'string',
'strip' => 'string',
'thumbnail' => 'string',
'background' => 'string',
'footer' => 'string',
'security' => 'string',
'privilege' => 'string',
'airlineAlliance' => 'string',
'personalization' => 'string',
'banner' => 'string',
'message' => 'string',
'profile' => 'string',
'appImage' => 'string',
'localizedIcon' => '\PkIo\Model\IoLocalizedString',
'localizedLogo' => '\PkIo\Model\IoLocalizedString',
'localizedAppleLogo' => '\PkIo\Model\IoLocalizedString',
'localizedHero' => '\PkIo\Model\IoLocalizedString',
'localizedEventStrip' => '\PkIo\Model\IoLocalizedString',
'localizedStrip' => '\PkIo\Model\IoLocalizedString',
'localizedThumbnail' => '\PkIo\Model\IoLocalizedString',
'localizedBackground' => '\PkIo\Model\IoLocalizedString',
'localizedFooter' => '\PkIo\Model\IoLocalizedString',
'localizedSecurity' => '\PkIo\Model\IoLocalizedString',
'localizedPrivilege' => '\PkIo\Model\IoLocalizedString',
'localizedAirlineAlliance' => '\PkIo\Model\IoLocalizedString',
'localizedPersonalization' => '\PkIo\Model\IoLocalizedString',
'localizedBanner' => '\PkIo\Model\IoLocalizedString',
'localizedMessage' => '\PkIo\Model\IoLocalizedString'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'icon' => null,
'logo' => null,
'appleLogo' => null,
'hero' => null,
'eventStrip' => null,
'strip' => null,
'thumbnail' => null,
'background' => null,
'footer' => null,
'security' => null,
'privilege' => null,
'airlineAlliance' => null,
'personalization' => null,
'banner' => null,
'message' => null,
'profile' => null,
'appImage' => null,
'localizedIcon' => null,
'localizedLogo' => null,
'localizedAppleLogo' => null,
'localizedHero' => null,
'localizedEventStrip' => null,
'localizedStrip' => null,
'localizedThumbnail' => null,
'localizedBackground' => null,
'localizedFooter' => null,
'localizedSecurity' => null,
'localizedPrivilege' => null,
'localizedAirlineAlliance' => null,
'localizedPersonalization' => null,
'localizedBanner' => null,
'localizedMessage' => null    ];

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
        'icon' => 'icon',
'logo' => 'logo',
'appleLogo' => 'appleLogo',
'hero' => 'hero',
'eventStrip' => 'eventStrip',
'strip' => 'strip',
'thumbnail' => 'thumbnail',
'background' => 'background',
'footer' => 'footer',
'security' => 'security',
'privilege' => 'privilege',
'airlineAlliance' => 'airlineAlliance',
'personalization' => 'personalization',
'banner' => 'banner',
'message' => 'message',
'profile' => 'profile',
'appImage' => 'appImage',
'localizedIcon' => 'localizedIcon',
'localizedLogo' => 'localizedLogo',
'localizedAppleLogo' => 'localizedAppleLogo',
'localizedHero' => 'localizedHero',
'localizedEventStrip' => 'localizedEventStrip',
'localizedStrip' => 'localizedStrip',
'localizedThumbnail' => 'localizedThumbnail',
'localizedBackground' => 'localizedBackground',
'localizedFooter' => 'localizedFooter',
'localizedSecurity' => 'localizedSecurity',
'localizedPrivilege' => 'localizedPrivilege',
'localizedAirlineAlliance' => 'localizedAirlineAlliance',
'localizedPersonalization' => 'localizedPersonalization',
'localizedBanner' => 'localizedBanner',
'localizedMessage' => 'localizedMessage'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'icon' => 'setIcon',
'logo' => 'setLogo',
'appleLogo' => 'setAppleLogo',
'hero' => 'setHero',
'eventStrip' => 'setEventStrip',
'strip' => 'setStrip',
'thumbnail' => 'setThumbnail',
'background' => 'setBackground',
'footer' => 'setFooter',
'security' => 'setSecurity',
'privilege' => 'setPrivilege',
'airlineAlliance' => 'setAirlineAlliance',
'personalization' => 'setPersonalization',
'banner' => 'setBanner',
'message' => 'setMessage',
'profile' => 'setProfile',
'appImage' => 'setAppImage',
'localizedIcon' => 'setLocalizedIcon',
'localizedLogo' => 'setLocalizedLogo',
'localizedAppleLogo' => 'setLocalizedAppleLogo',
'localizedHero' => 'setLocalizedHero',
'localizedEventStrip' => 'setLocalizedEventStrip',
'localizedStrip' => 'setLocalizedStrip',
'localizedThumbnail' => 'setLocalizedThumbnail',
'localizedBackground' => 'setLocalizedBackground',
'localizedFooter' => 'setLocalizedFooter',
'localizedSecurity' => 'setLocalizedSecurity',
'localizedPrivilege' => 'setLocalizedPrivilege',
'localizedAirlineAlliance' => 'setLocalizedAirlineAlliance',
'localizedPersonalization' => 'setLocalizedPersonalization',
'localizedBanner' => 'setLocalizedBanner',
'localizedMessage' => 'setLocalizedMessage'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'icon' => 'getIcon',
'logo' => 'getLogo',
'appleLogo' => 'getAppleLogo',
'hero' => 'getHero',
'eventStrip' => 'getEventStrip',
'strip' => 'getStrip',
'thumbnail' => 'getThumbnail',
'background' => 'getBackground',
'footer' => 'getFooter',
'security' => 'getSecurity',
'privilege' => 'getPrivilege',
'airlineAlliance' => 'getAirlineAlliance',
'personalization' => 'getPersonalization',
'banner' => 'getBanner',
'message' => 'getMessage',
'profile' => 'getProfile',
'appImage' => 'getAppImage',
'localizedIcon' => 'getLocalizedIcon',
'localizedLogo' => 'getLocalizedLogo',
'localizedAppleLogo' => 'getLocalizedAppleLogo',
'localizedHero' => 'getLocalizedHero',
'localizedEventStrip' => 'getLocalizedEventStrip',
'localizedStrip' => 'getLocalizedStrip',
'localizedThumbnail' => 'getLocalizedThumbnail',
'localizedBackground' => 'getLocalizedBackground',
'localizedFooter' => 'getLocalizedFooter',
'localizedSecurity' => 'getLocalizedSecurity',
'localizedPrivilege' => 'getLocalizedPrivilege',
'localizedAirlineAlliance' => 'getLocalizedAirlineAlliance',
'localizedPersonalization' => 'getLocalizedPersonalization',
'localizedBanner' => 'getLocalizedBanner',
'localizedMessage' => 'getLocalizedMessage'    ];

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
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['appleLogo'] = isset($data['appleLogo']) ? $data['appleLogo'] : null;
        $this->container['hero'] = isset($data['hero']) ? $data['hero'] : null;
        $this->container['eventStrip'] = isset($data['eventStrip']) ? $data['eventStrip'] : null;
        $this->container['strip'] = isset($data['strip']) ? $data['strip'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['background'] = isset($data['background']) ? $data['background'] : null;
        $this->container['footer'] = isset($data['footer']) ? $data['footer'] : null;
        $this->container['security'] = isset($data['security']) ? $data['security'] : null;
        $this->container['privilege'] = isset($data['privilege']) ? $data['privilege'] : null;
        $this->container['airlineAlliance'] = isset($data['airlineAlliance']) ? $data['airlineAlliance'] : null;
        $this->container['personalization'] = isset($data['personalization']) ? $data['personalization'] : null;
        $this->container['banner'] = isset($data['banner']) ? $data['banner'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['appImage'] = isset($data['appImage']) ? $data['appImage'] : null;
        $this->container['localizedIcon'] = isset($data['localizedIcon']) ? $data['localizedIcon'] : null;
        $this->container['localizedLogo'] = isset($data['localizedLogo']) ? $data['localizedLogo'] : null;
        $this->container['localizedAppleLogo'] = isset($data['localizedAppleLogo']) ? $data['localizedAppleLogo'] : null;
        $this->container['localizedHero'] = isset($data['localizedHero']) ? $data['localizedHero'] : null;
        $this->container['localizedEventStrip'] = isset($data['localizedEventStrip']) ? $data['localizedEventStrip'] : null;
        $this->container['localizedStrip'] = isset($data['localizedStrip']) ? $data['localizedStrip'] : null;
        $this->container['localizedThumbnail'] = isset($data['localizedThumbnail']) ? $data['localizedThumbnail'] : null;
        $this->container['localizedBackground'] = isset($data['localizedBackground']) ? $data['localizedBackground'] : null;
        $this->container['localizedFooter'] = isset($data['localizedFooter']) ? $data['localizedFooter'] : null;
        $this->container['localizedSecurity'] = isset($data['localizedSecurity']) ? $data['localizedSecurity'] : null;
        $this->container['localizedPrivilege'] = isset($data['localizedPrivilege']) ? $data['localizedPrivilege'] : null;
        $this->container['localizedAirlineAlliance'] = isset($data['localizedAirlineAlliance']) ? $data['localizedAirlineAlliance'] : null;
        $this->container['localizedPersonalization'] = isset($data['localizedPersonalization']) ? $data['localizedPersonalization'] : null;
        $this->container['localizedBanner'] = isset($data['localizedBanner']) ? $data['localizedBanner'] : null;
        $this->container['localizedMessage'] = isset($data['localizedMessage']) ? $data['localizedMessage'] : null;
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
     * Gets icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string $icon Mandatory icon, used in Apple Wallet lock screen (87px x 87px).
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string $logo Logo is circle-cropped by Google Pay, a 15% safety margin is recommended (660px x 660px).
     *
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets appleLogo
     *
     * @return string
     */
    public function getAppleLogo()
    {
        return $this->container['appleLogo'];
    }

    /**
     * Sets appleLogo
     *
     * @param string $appleLogo Apple logo can be used where a rectangular design is preferred for Apple Passes only.  If ommitted, the square logo image will be used.  (<=480px x 150px).
     *
     * @return $this
     */
    public function setAppleLogo($appleLogo)
    {
        $this->container['appleLogo'] = $appleLogo;

        return $this;
    }

    /**
     * Gets hero
     *
     * @return string
     */
    public function getHero()
    {
        return $this->container['hero'];
    }

    /**
     * Sets hero
     *
     * @param string $hero Hero is the Google Pay strip and is also used in the dialog box when installing (1032px x 336px).
     *
     * @return $this
     */
    public function setHero($hero)
    {
        $this->container['hero'] = $hero;

        return $this;
    }

    /**
     * Gets eventStrip
     *
     * @return string
     */
    public function getEventStrip()
    {
        return $this->container['eventStrip'];
    }

    /**
     * Sets eventStrip
     *
     * @param string $eventStrip Apple Wallet strip image for EventTicket pass types (1125px x 294px).
     *
     * @return $this
     */
    public function setEventStrip($eventStrip)
    {
        $this->container['eventStrip'] = $eventStrip;

        return $this;
    }

    /**
     * Gets strip
     *
     * @return string
     */
    public function getStrip()
    {
        return $this->container['strip'];
    }

    /**
     * Sets strip
     *
     * @param string $strip Apple Wallet strip image for other pass types with a  strip image (1125px x 369px).
     *
     * @return $this
     */
    public function setStrip($strip)
    {
        $this->container['strip'] = $strip;

        return $this;
    }

    /**
     * Gets thumbnail
     *
     * @return string
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     *
     * @param string $thumbnail Used on Membership passes and Apple event tickets with a background image (>=270px x >=270px in a ratio range of 2:3-3:2).
     *
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * Gets background
     *
     * @return string
     */
    public function getBackground()
    {
        return $this->container['background'];
    }

    /**
     * Sets background
     *
     * @param string $background Used only be Apple Event Ticket designs, this image is blurred to form a background and so can be a low quality image.  Note it may also be slightly cropped on some devices (180px x 220px).
     *
     * @return $this
     */
    public function setBackground($background)
    {
        $this->container['background'] = $background;

        return $this;
    }

    /**
     * Gets footer
     *
     * @return string
     */
    public function getFooter()
    {
        return $this->container['footer'];
    }

    /**
     * Sets footer
     *
     * @param string $footer footer
     *
     * @return $this
     */
    public function setFooter($footer)
    {
        $this->container['footer'] = $footer;

        return $this;
    }

    /**
     * Gets security
     *
     * @return string
     */
    public function getSecurity()
    {
        return $this->container['security'];
    }

    /**
     * Sets security
     *
     * @param string $security Google Pay - used to denote a security program on boarding pass types (E.g. TSA PreCheck®).  Width of 1600px is shared with the boarding privilege logo (<=1600px x 80px).
     *
     * @return $this
     */
    public function setSecurity($security)
    {
        $this->container['security'] = $security;

        return $this;
    }

    /**
     * Gets privilege
     *
     * @return string
     */
    public function getPrivilege()
    {
        return $this->container['privilege'];
    }

    /**
     * Sets privilege
     *
     * @param string $privilege Google Pay - used to denote a boarding privilege.  Width of 1600px is shared with the security program logo (<=1600px x 80px).
     *
     * @return $this
     */
    public function setPrivilege($privilege)
    {
        $this->container['privilege'] = $privilege;

        return $this;
    }

    /**
     * Gets airlineAlliance
     *
     * @return string
     */
    public function getAirlineAlliance()
    {
        return $this->container['airlineAlliance'];
    }

    /**
     * Sets airlineAlliance
     *
     * @param string $airlineAlliance Google Pay - used to denote airline alliance on boarding pass types (<=1600px x 80px).
     *
     * @return $this
     */
    public function setAirlineAlliance($airlineAlliance)
    {
        $this->container['airlineAlliance'] = $airlineAlliance;

        return $this;
    }

    /**
     * Gets personalization
     *
     * @return string
     */
    public function getPersonalization()
    {
        return $this->container['personalization'];
    }

    /**
     * Sets personalization
     *
     * @param string $personalization For Apple Pay NFC passes whitelisted for personalization. Image is displayed after terms are presented (<=450px x 120px).
     *
     * @return $this
     */
    public function setPersonalization($personalization)
    {
        $this->container['personalization'] = $personalization;

        return $this;
    }

    /**
     * Gets banner
     *
     * @return string
     */
    public function getBanner()
    {
        return $this->container['banner'];
    }

    /**
     * Sets banner
     *
     * @param string $banner Used on a landing page or email.  Image has no size constraints and will be treated as @2x pixel density.
     *
     * @return $this
     */
    public function setBanner($banner)
    {
        $this->container['banner'] = $banner;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message Used for Google Pay in wallet promotional messages - for Apple Pay, the message will be rendered on a mobile website (1860px x <=930px).
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param string $profile Used for user Profile images (300px x 300px). Cannot be localized.
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets appImage
     *
     * @return string
     */
    public function getAppImage()
    {
        return $this->container['appImage'];
    }

    /**
     * Sets appImage
     *
     * @param string $appImage Used for user app images in Google Pay Passes (300px x 300px). Cannot be localized.
     *
     * @return $this
     */
    public function setAppImage($appImage)
    {
        $this->container['appImage'] = $appImage;

        return $this;
    }

    /**
     * Gets localizedIcon
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedIcon()
    {
        return $this->container['localizedIcon'];
    }

    /**
     * Sets localizedIcon
     *
     * @param \PkIo\Model\IoLocalizedString $localizedIcon localizedIcon
     *
     * @return $this
     */
    public function setLocalizedIcon($localizedIcon)
    {
        $this->container['localizedIcon'] = $localizedIcon;

        return $this;
    }

    /**
     * Gets localizedLogo
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedLogo()
    {
        return $this->container['localizedLogo'];
    }

    /**
     * Sets localizedLogo
     *
     * @param \PkIo\Model\IoLocalizedString $localizedLogo localizedLogo
     *
     * @return $this
     */
    public function setLocalizedLogo($localizedLogo)
    {
        $this->container['localizedLogo'] = $localizedLogo;

        return $this;
    }

    /**
     * Gets localizedAppleLogo
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedAppleLogo()
    {
        return $this->container['localizedAppleLogo'];
    }

    /**
     * Sets localizedAppleLogo
     *
     * @param \PkIo\Model\IoLocalizedString $localizedAppleLogo localizedAppleLogo
     *
     * @return $this
     */
    public function setLocalizedAppleLogo($localizedAppleLogo)
    {
        $this->container['localizedAppleLogo'] = $localizedAppleLogo;

        return $this;
    }

    /**
     * Gets localizedHero
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedHero()
    {
        return $this->container['localizedHero'];
    }

    /**
     * Sets localizedHero
     *
     * @param \PkIo\Model\IoLocalizedString $localizedHero localizedHero
     *
     * @return $this
     */
    public function setLocalizedHero($localizedHero)
    {
        $this->container['localizedHero'] = $localizedHero;

        return $this;
    }

    /**
     * Gets localizedEventStrip
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedEventStrip()
    {
        return $this->container['localizedEventStrip'];
    }

    /**
     * Sets localizedEventStrip
     *
     * @param \PkIo\Model\IoLocalizedString $localizedEventStrip localizedEventStrip
     *
     * @return $this
     */
    public function setLocalizedEventStrip($localizedEventStrip)
    {
        $this->container['localizedEventStrip'] = $localizedEventStrip;

        return $this;
    }

    /**
     * Gets localizedStrip
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedStrip()
    {
        return $this->container['localizedStrip'];
    }

    /**
     * Sets localizedStrip
     *
     * @param \PkIo\Model\IoLocalizedString $localizedStrip localizedStrip
     *
     * @return $this
     */
    public function setLocalizedStrip($localizedStrip)
    {
        $this->container['localizedStrip'] = $localizedStrip;

        return $this;
    }

    /**
     * Gets localizedThumbnail
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedThumbnail()
    {
        return $this->container['localizedThumbnail'];
    }

    /**
     * Sets localizedThumbnail
     *
     * @param \PkIo\Model\IoLocalizedString $localizedThumbnail localizedThumbnail
     *
     * @return $this
     */
    public function setLocalizedThumbnail($localizedThumbnail)
    {
        $this->container['localizedThumbnail'] = $localizedThumbnail;

        return $this;
    }

    /**
     * Gets localizedBackground
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedBackground()
    {
        return $this->container['localizedBackground'];
    }

    /**
     * Sets localizedBackground
     *
     * @param \PkIo\Model\IoLocalizedString $localizedBackground localizedBackground
     *
     * @return $this
     */
    public function setLocalizedBackground($localizedBackground)
    {
        $this->container['localizedBackground'] = $localizedBackground;

        return $this;
    }

    /**
     * Gets localizedFooter
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedFooter()
    {
        return $this->container['localizedFooter'];
    }

    /**
     * Sets localizedFooter
     *
     * @param \PkIo\Model\IoLocalizedString $localizedFooter localizedFooter
     *
     * @return $this
     */
    public function setLocalizedFooter($localizedFooter)
    {
        $this->container['localizedFooter'] = $localizedFooter;

        return $this;
    }

    /**
     * Gets localizedSecurity
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedSecurity()
    {
        return $this->container['localizedSecurity'];
    }

    /**
     * Sets localizedSecurity
     *
     * @param \PkIo\Model\IoLocalizedString $localizedSecurity localizedSecurity
     *
     * @return $this
     */
    public function setLocalizedSecurity($localizedSecurity)
    {
        $this->container['localizedSecurity'] = $localizedSecurity;

        return $this;
    }

    /**
     * Gets localizedPrivilege
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedPrivilege()
    {
        return $this->container['localizedPrivilege'];
    }

    /**
     * Sets localizedPrivilege
     *
     * @param \PkIo\Model\IoLocalizedString $localizedPrivilege localizedPrivilege
     *
     * @return $this
     */
    public function setLocalizedPrivilege($localizedPrivilege)
    {
        $this->container['localizedPrivilege'] = $localizedPrivilege;

        return $this;
    }

    /**
     * Gets localizedAirlineAlliance
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedAirlineAlliance()
    {
        return $this->container['localizedAirlineAlliance'];
    }

    /**
     * Sets localizedAirlineAlliance
     *
     * @param \PkIo\Model\IoLocalizedString $localizedAirlineAlliance localizedAirlineAlliance
     *
     * @return $this
     */
    public function setLocalizedAirlineAlliance($localizedAirlineAlliance)
    {
        $this->container['localizedAirlineAlliance'] = $localizedAirlineAlliance;

        return $this;
    }

    /**
     * Gets localizedPersonalization
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedPersonalization()
    {
        return $this->container['localizedPersonalization'];
    }

    /**
     * Sets localizedPersonalization
     *
     * @param \PkIo\Model\IoLocalizedString $localizedPersonalization localizedPersonalization
     *
     * @return $this
     */
    public function setLocalizedPersonalization($localizedPersonalization)
    {
        $this->container['localizedPersonalization'] = $localizedPersonalization;

        return $this;
    }

    /**
     * Gets localizedBanner
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedBanner()
    {
        return $this->container['localizedBanner'];
    }

    /**
     * Sets localizedBanner
     *
     * @param \PkIo\Model\IoLocalizedString $localizedBanner localizedBanner
     *
     * @return $this
     */
    public function setLocalizedBanner($localizedBanner)
    {
        $this->container['localizedBanner'] = $localizedBanner;

        return $this;
    }

    /**
     * Gets localizedMessage
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedMessage()
    {
        return $this->container['localizedMessage'];
    }

    /**
     * Sets localizedMessage
     *
     * @param \PkIo\Model\IoLocalizedString $localizedMessage localizedMessage
     *
     * @return $this
     */
    public function setLocalizedMessage($localizedMessage)
    {
        $this->container['localizedMessage'] = $localizedMessage;

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
