<?php
/**
 * SingleUseCouponsRedemptionTypeTest
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
 * Please update the test case below to test the model.
 */

namespace PkIo;

/**
 * SingleUseCouponsRedemptionTypeTest Class Doc Comment
 *
 * @category    Class
 * @description - REDEMPTION_TYPE_DO_NOT_USE: Zero index should not be used  - REDEMPTION_TYPE_API: Coupons are always redeemed via API (default). This method is used by POS integrations, but is also be used by the PassKit scanning app.  - REDEMPTION_TYPE_CUSTOMER_INITIATED: Coupons can be redeemed by the coupon holder (i.e. the customer) by visiting a redemption URL rendered on the coupon. The coupon will redeem upon the link being visited.  - REDEMPTION_TYPE_CUSTOMER_INITIATED_CODE_FIXED: This will present a fixed code to the customer after they visit the redemption URL, and then auto redeem the coupon. The customer can then present this fixed-code to a member of staff.  - REDEMPTION_TYPE_CUSTOMER_INITIATED_CODE_PROVIDED_ON_REDEEM: After visiting the redemption URL, a member of staff provides the customer with a redemption-code they need to enter. After entering the code, the coupon with redeem.
 * @package     PkIo
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SingleUseCouponsRedemptionTypeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "SingleUseCouponsRedemptionType"
     */
    public function testSingleUseCouponsRedemptionType()
    {
    }
}
