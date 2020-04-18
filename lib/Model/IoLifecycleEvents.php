<?php
/**
 * IoLifecycleEvents
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
use \PkIo\ObjectSerializer;

/**
 * IoLifecycleEvents Class Doc Comment
 *
 * @category Class
 * @description Statuses of the pass. A pass will collect multiple statuses as it passes through its lifecycle.   - RENDERED: Pass has been created and presented to the user to install.  - INSTALLED_APPLE: Pass has been installed in at least one Apple device.  - INSTALLED_GOOGLE: Pass has been installed in at least one Google Pay account.  - INSTALLED_ANDROID_OTHER: Pass has been installed in at least one Android wallet app.  - UNINSTALLED_APPLE: Pass has been uninstalled from at least one Apple device.  - UNINSTALLED_GOOGLE: Pass has been uninstalled from at least one Google Pay account.  - UNINSTALLED_ANDROID_OTHER: Pass has been uninstalled from at least one Android wallet app.  - APPLE_PASS_CREATED: An Apple pass bundle has been created.  - GOOGLE_PAY_RECORD_CREATED: A Google Pay record has been created.  - INVALIDATE_REQUESTED: Invalidation request sent to pass.  - INVALIDATE_CONFIRMED: Pass has been invalidated.
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IoLifecycleEvents
{
    /**
     * Possible values of this enum
     */
    const NO_STATUS = 'NO_STATUS';
const RENDERED = 'RENDERED';
const INSTALLED_APPLE = 'INSTALLED_APPLE';
const INSTALLED_GOOGLE = 'INSTALLED_GOOGLE';
const INSTALLED_ANDROID_OTHER = 'INSTALLED_ANDROID_OTHER';
const UNINSTALLED_APPLE = 'UNINSTALLED_APPLE';
const UNINSTALLED_GOOGLE = 'UNINSTALLED_GOOGLE';
const UNINSTALLED_ANDROID_OTHER = 'UNINSTALLED_ANDROID_OTHER';
const APPLE_PASS_CREATED = 'APPLE_PASS_CREATED';
const GOOGLE_PAY_RECORD_CREATED = 'GOOGLE_PAY_RECORD_CREATED';
const INVALIDATE_REQUESTED = 'INVALIDATE_REQUESTED';
const INVALIDATE_CONFIRMED = 'INVALIDATE_CONFIRMED';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO_STATUS,
self::RENDERED,
self::INSTALLED_APPLE,
self::INSTALLED_GOOGLE,
self::INSTALLED_ANDROID_OTHER,
self::UNINSTALLED_APPLE,
self::UNINSTALLED_GOOGLE,
self::UNINSTALLED_ANDROID_OTHER,
self::APPLE_PASS_CREATED,
self::GOOGLE_PAY_RECORD_CREATED,
self::INVALIDATE_REQUESTED,
self::INVALIDATE_CONFIRMED,        ];
    }
}
