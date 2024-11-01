<?php
/**
 * ImportFilesSortBy
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
 * ImportFilesSortBy Class Doc Comment
 *
 * @category Class
 * @package  KauflandSellerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ImportFilesSortBy
{
    /**
     * Possible values of this enum
     */
    public const IDASC = 'id:asc';

    public const IDDESC = 'id:desc';

    public const TS_CREATEDASC = 'ts_created:asc';

    public const TS_CREATEDDESC = 'ts_created:desc';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IDASC,
            self::IDDESC,
            self::TS_CREATEDASC,
            self::TS_CREATEDDESC
        ];
    }
}

