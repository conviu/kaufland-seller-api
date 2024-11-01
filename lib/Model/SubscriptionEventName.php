<?php
/**
 * SubscriptionEventName
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
 * SubscriptionEventName Class Doc Comment
 *
 * @category Class
 * @package  KauflandSellerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SubscriptionEventName
{
    /**
     * Possible values of this enum
     */
    public const ORDER_NEW = 'order_new';

    public const ORDER_UNIT_NEW = 'order_unit_new';

    public const ORDER_UNIT_STATUS_CHANGED = 'order_unit_status_changed';

    public const ITEM_CHANGED = 'item_changed';

    public const CATEGORY_CHANGED = 'category_changed';

    public const RETURN_NEW = 'return_new';

    public const RETURN_STATUS_CHANGED = 'return_status_changed';

    public const RETURN_UNIT_STATUS_CHANGED = 'return_unit_status_changed';

    public const ITEM_UNIT_NEW = 'item_unit_new';

    public const ITEM_UNIT_CHANGED = 'item_unit_changed';

    public const ITEM_UNIT_DELETED = 'item_unit_deleted';

    public const ITEM_UNIT_OUT_OF_STOCK = 'item_unit_out_of_stock';

    public const ITEM_UNIT_NOT_AVAILABLE = 'item_unit_not_available';

    public const ITEM_UNIT_AVAILABLE = 'item_unit_available';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ORDER_NEW,
            self::ORDER_UNIT_NEW,
            self::ORDER_UNIT_STATUS_CHANGED,
            self::ITEM_CHANGED,
            self::CATEGORY_CHANGED,
            self::RETURN_NEW,
            self::RETURN_STATUS_CHANGED,
            self::RETURN_UNIT_STATUS_CHANGED,
            self::ITEM_UNIT_NEW,
            self::ITEM_UNIT_CHANGED,
            self::ITEM_UNIT_DELETED,
            self::ITEM_UNIT_OUT_OF_STOCK,
            self::ITEM_UNIT_NOT_AVAILABLE,
            self::ITEM_UNIT_AVAILABLE
        ];
    }
}

