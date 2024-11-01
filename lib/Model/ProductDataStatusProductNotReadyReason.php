<?php
/**
 * ProductDataStatusProductNotReadyReason
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
 * ProductDataStatusProductNotReadyReason Class Doc Comment
 *
 * @category Class
 * @package  KauflandSellerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductDataStatusProductNotReadyReason
{
    /**
     * Possible values of this enum
     */
    public const BLACKLISTED = 'BLACKLISTED';

    public const MISSING_ATTRIBUTES = 'MISSING_ATTRIBUTES';

    public const NOT_YET_PROCESSED = 'NOT_YET_PROCESSED';

    public const PORN_FORBIDDEN = 'PORN_FORBIDDEN';

    public const PROCESSING_FAILED = 'PROCESSING_FAILED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BLACKLISTED,
            self::MISSING_ATTRIBUTES,
            self::NOT_YET_PROCESSED,
            self::PORN_FORBIDDEN,
            self::PROCESSING_FAILED
        ];
    }
}

