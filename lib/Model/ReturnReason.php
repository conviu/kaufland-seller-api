<?php
/**
 * ReturnReason
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
 * ReturnReason Class Doc Comment
 *
 * @category Class
 * @package  KauflandSellerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReturnReason
{
    /**
     * Possible values of this enum
     */
    public const ACCIDENTALLY_ORDERED = 'accidentally_ordered';

    public const BAD_QUALITY = 'bad_quality';

    public const BETTER_PRICE = 'better_price';

    public const DEFECT = 'defect';

    public const DELIVERED_DAMAGED = 'delivered_damaged';

    public const DISLIKE = 'dislike';

    public const MISLEADING_DESCRIPTION = 'misleading_description';

    public const MISSING_PARTS = 'missing_parts';

    public const NO_REASON = 'no_reason';

    public const TOO_LATE = 'too_late';

    public const WRONG_ARTICLE = 'wrong_article';

    public const WRONG_SIZE = 'wrong_size';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACCIDENTALLY_ORDERED,
            self::BAD_QUALITY,
            self::BETTER_PRICE,
            self::DEFECT,
            self::DELIVERED_DAMAGED,
            self::DISLIKE,
            self::MISLEADING_DESCRIPTION,
            self::MISSING_PARTS,
            self::NO_REASON,
            self::TOO_LATE,
            self::WRONG_ARTICLE,
            self::WRONG_SIZE
        ];
    }
}

