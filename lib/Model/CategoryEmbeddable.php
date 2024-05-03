<?php
/**
 * CategoryEmbeddable
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
 * The version of the OpenAPI document: 2.14.1
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
 * CategoryEmbeddable Class Doc Comment
 *
 * @category Class
 * @package  KauflandSellerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CategoryEmbeddable
{
    /**
     * Possible values of this enum
     */
    public const PARENT = 'parent';

    public const CHILDREN = 'children';

    public const REQUIRED_ATTRIBUTES = 'required_attributes';

    public const OPTIONAL_ATTRIBUTES = 'optional_attributes';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PARENT,
            self::CHILDREN,
            self::REQUIRED_ATTRIBUTES,
            self::OPTIONAL_ATTRIBUTES
        ];
    }
}

