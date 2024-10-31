<?php
/**
 * OrderUnitRefundReason
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  KauflandSellerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Kaufland.de Seller API v2
 *
 * This is the Kaufland.de Seller API v2. You can find more information on [https://sellerapi.kaufland.com/](https://sellerapi.kaufland.com/)
 *
 * The version of the OpenAPI document: 2.17.2
 * Contact: seller-api-support@kaufland-online.de
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace KauflandSellerApi\Model;
use \KauflandSellerApi\ObjectSerializer;

/**
 * OrderUnitRefundReason Class Doc Comment
 *
 * @category Class
 * @package  KauflandSellerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderUnitRefundReason
{
    /**
     * Possible values of this enum
     */
    public const DELIVERY_DAMAGE = 'delivery_damage';

    public const DELIVERY_DELAY = 'delivery_delay';

    public const INCOMPLETE_DELIVERY = 'incomplete_delivery';

    public const INCORRECT_DELIVERY = 'incorrect_delivery';

    public const REFUND_POSTAGE_FEE = 'refund_postage_fee';

    public const DEFECT = 'defect';

    public const OTHER_REFUND = 'other_refund';

    public const REFUND_RETURN_POSTAGE_FEE = 'refund_return_postage_fee';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DELIVERY_DAMAGE,
            self::DELIVERY_DELAY,
            self::INCOMPLETE_DELIVERY,
            self::INCORRECT_DELIVERY,
            self::REFUND_POSTAGE_FEE,
            self::DEFECT,
            self::OTHER_REFUND,
            self::REFUND_RETURN_POSTAGE_FEE
        ];
    }
}

