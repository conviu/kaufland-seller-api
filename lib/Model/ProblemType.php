<?php
/**
 * ProblemType
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
 * ProblemType Class Doc Comment
 *
 * @category Class
 * @package  KauflandSellerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProblemType
{
    /**
     * Possible values of this enum
     */
    public const ABOUTBLANK = 'about:blank';

    public const PROBLEMS_BAD_REQUEST = '/problems/bad-request';

    public const PROBLEMS_NOT_FOUND = '/problems/not-found';

    public const PROBLEMS_FORBIDDEN = '/problems/forbidden';

    public const PROBLEMS_UNAUTHORIZED = '/problems/unauthorized';

    public const PROBLEMS_SERVER_ERROR = '/problems/server-error';

    public const PROBLEMS_SERVICE_UNAVAILABLE = '/problems/service-unavailable';

    public const PROBLEMS_VALIDATION_ERROR = '/problems/validation-error';

    public const PROBLEMS_STOREFRONT_NOT_CONFIGURED = '/problems/storefront-not-configured';

    public const PROBLEMS_INVALID_CREDENTIALS = '/problems/invalid-credentials';

    public const PROBLEMS_CORRUPTED_SIGNATURE = '/problems/corrupted-signature';

    public const PROBLEMS_INACTIVE_ACCOUNT = '/problems/inactive-account';

    public const PROBLEMS_MISSING_OR_INVALID_REQUEST_HEADER = '/problems/missing-or-invalid-request-header';

    public const PROBLEMS_TICKETS_INTERNAL_ACTION_RESTRICTION = '/problems/tickets/internal-action-restriction';

    public const PROBLEMS_TICKETS_FBK_ACTION_RESTRICTION = '/problems/tickets/fbk-action-restriction';

    public const PROBLEMS_TICKETS_NON_CLOSABLE_BY_SELLER = '/problems/tickets/non-closable-by-seller';

    public const PROBLEMS_TICKETS_FINALLY_CLOSED = '/problems/tickets/finally-closed';

    public const PROBLEMS_TICKETS_ATTACHMENTS_UPLOAD_FAILURE = '/problems/tickets/attachments-upload-failure';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ABOUTBLANK,
            self::PROBLEMS_BAD_REQUEST,
            self::PROBLEMS_NOT_FOUND,
            self::PROBLEMS_FORBIDDEN,
            self::PROBLEMS_UNAUTHORIZED,
            self::PROBLEMS_SERVER_ERROR,
            self::PROBLEMS_SERVICE_UNAVAILABLE,
            self::PROBLEMS_VALIDATION_ERROR,
            self::PROBLEMS_STOREFRONT_NOT_CONFIGURED,
            self::PROBLEMS_INVALID_CREDENTIALS,
            self::PROBLEMS_CORRUPTED_SIGNATURE,
            self::PROBLEMS_INACTIVE_ACCOUNT,
            self::PROBLEMS_MISSING_OR_INVALID_REQUEST_HEADER,
            self::PROBLEMS_TICKETS_INTERNAL_ACTION_RESTRICTION,
            self::PROBLEMS_TICKETS_FBK_ACTION_RESTRICTION,
            self::PROBLEMS_TICKETS_NON_CLOSABLE_BY_SELLER,
            self::PROBLEMS_TICKETS_FINALLY_CLOSED,
            self::PROBLEMS_TICKETS_ATTACHMENTS_UPLOAD_FAILURE
        ];
    }
}

