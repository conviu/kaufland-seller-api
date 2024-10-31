<?php
/**
 * Ticket
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

use \ArrayAccess;
use \KauflandSellerApi\ObjectSerializer;

/**
 * Ticket Class Doc Comment
 *
 * @category Class
 * @package  KauflandSellerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Ticket implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Ticket';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id_ticket' => 'string',
        'ids_order_units' => 'int[]',
        'id_buyer' => 'int',
        'ts_created_iso' => '\DateTime',
        'ts_updated_iso' => '\DateTime',
        'status' => '\KauflandSellerApi\Model\TicketStatus',
        'open_reason' => '\KauflandSellerApi\Model\TicketReason',
        'topic' => '\KauflandSellerApi\Model\TicketTopic',
        'is_seller_responsible' => 'bool',
        'fulfillment_type' => '\KauflandSellerApi\Model\FulfillmentType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id_ticket' => null,
        'ids_order_units' => 'int64',
        'id_buyer' => 'int64',
        'ts_created_iso' => 'date-time',
        'ts_updated_iso' => 'date-time',
        'status' => null,
        'open_reason' => null,
        'topic' => null,
        'is_seller_responsible' => null,
        'fulfillment_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id_ticket' => false,
        'ids_order_units' => false,
        'id_buyer' => true,
        'ts_created_iso' => false,
        'ts_updated_iso' => false,
        'status' => false,
        'open_reason' => false,
        'topic' => true,
        'is_seller_responsible' => false,
        'fulfillment_type' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id_ticket' => 'id_ticket',
        'ids_order_units' => 'ids_order_units',
        'id_buyer' => 'id_buyer',
        'ts_created_iso' => 'ts_created_iso',
        'ts_updated_iso' => 'ts_updated_iso',
        'status' => 'status',
        'open_reason' => 'open_reason',
        'topic' => 'topic',
        'is_seller_responsible' => 'is_seller_responsible',
        'fulfillment_type' => 'fulfillment_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_ticket' => 'setIdTicket',
        'ids_order_units' => 'setIdsOrderUnits',
        'id_buyer' => 'setIdBuyer',
        'ts_created_iso' => 'setTsCreatedIso',
        'ts_updated_iso' => 'setTsUpdatedIso',
        'status' => 'setStatus',
        'open_reason' => 'setOpenReason',
        'topic' => 'setTopic',
        'is_seller_responsible' => 'setIsSellerResponsible',
        'fulfillment_type' => 'setFulfillmentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_ticket' => 'getIdTicket',
        'ids_order_units' => 'getIdsOrderUnits',
        'id_buyer' => 'getIdBuyer',
        'ts_created_iso' => 'getTsCreatedIso',
        'ts_updated_iso' => 'getTsUpdatedIso',
        'status' => 'getStatus',
        'open_reason' => 'getOpenReason',
        'topic' => 'getTopic',
        'is_seller_responsible' => 'getIsSellerResponsible',
        'fulfillment_type' => 'getFulfillmentType'
    ];

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
        return self::$openAPIModelName;
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
        $this->setIfExists('id_ticket', $data ?? [], null);
        $this->setIfExists('ids_order_units', $data ?? [], null);
        $this->setIfExists('id_buyer', $data ?? [], null);
        $this->setIfExists('ts_created_iso', $data ?? [], null);
        $this->setIfExists('ts_updated_iso', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('open_reason', $data ?? [], null);
        $this->setIfExists('topic', $data ?? [], null);
        $this->setIfExists('is_seller_responsible', $data ?? [], null);
        $this->setIfExists('fulfillment_type', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id_ticket'] === null) {
            $invalidProperties[] = "'id_ticket' can't be null";
        }
        if (!preg_match("/^001\\d+$/", $this->container['id_ticket'])) {
            $invalidProperties[] = "invalid value for 'id_ticket', must be conform to the pattern /^001\\d+$/.";
        }

        if ($this->container['ids_order_units'] === null) {
            $invalidProperties[] = "'ids_order_units' can't be null";
        }
        if ($this->container['id_buyer'] === null) {
            $invalidProperties[] = "'id_buyer' can't be null";
        }
        if ($this->container['ts_created_iso'] === null) {
            $invalidProperties[] = "'ts_created_iso' can't be null";
        }
        if ($this->container['ts_updated_iso'] === null) {
            $invalidProperties[] = "'ts_updated_iso' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['open_reason'] === null) {
            $invalidProperties[] = "'open_reason' can't be null";
        }
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
        if ($this->container['is_seller_responsible'] === null) {
            $invalidProperties[] = "'is_seller_responsible' can't be null";
        }
        if ($this->container['fulfillment_type'] === null) {
            $invalidProperties[] = "'fulfillment_type' can't be null";
        }
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
     * Gets id_ticket
     *
     * @return string
     */
    public function getIdTicket()
    {
        return $this->container['id_ticket'];
    }

    /**
     * Sets id_ticket
     *
     * @param string $id_ticket Unique id of the ticket.
     *
     * @return self
     */
    public function setIdTicket($id_ticket)
    {
        if (is_null($id_ticket)) {
            throw new \InvalidArgumentException('non-nullable id_ticket cannot be null');
        }

        if ((!preg_match("/^001\\d+$/", ObjectSerializer::toString($id_ticket)))) {
            throw new \InvalidArgumentException("invalid value for \$id_ticket when calling Ticket., must conform to the pattern /^001\\d+$/.");
        }

        $this->container['id_ticket'] = $id_ticket;

        return $this;
    }

    /**
     * Gets ids_order_units
     *
     * @return int[]
     */
    public function getIdsOrderUnits()
    {
        return $this->container['ids_order_units'];
    }

    /**
     * Sets ids_order_units
     *
     * @param int[] $ids_order_units The list of order units IDs
     *
     * @return self
     */
    public function setIdsOrderUnits($ids_order_units)
    {
        if (is_null($ids_order_units)) {
            throw new \InvalidArgumentException('non-nullable ids_order_units cannot be null');
        }
        $this->container['ids_order_units'] = $ids_order_units;

        return $this;
    }

    /**
     * Gets id_buyer
     *
     * @return int
     */
    public function getIdBuyer()
    {
        return $this->container['id_buyer'];
    }

    /**
     * Sets id_buyer
     *
     * @param int $id_buyer id_buyer
     *
     * @return self
     */
    public function setIdBuyer($id_buyer)
    {
        if (is_null($id_buyer)) {
            array_push($this->openAPINullablesSetToNull, 'id_buyer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_buyer', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_buyer'] = $id_buyer;

        return $this;
    }

    /**
     * Gets ts_created_iso
     *
     * @return \DateTime
     */
    public function getTsCreatedIso()
    {
        return $this->container['ts_created_iso'];
    }

    /**
     * Sets ts_created_iso
     *
     * @param \DateTime $ts_created_iso Creation date of the ticket in iso 8601
     *
     * @return self
     */
    public function setTsCreatedIso($ts_created_iso)
    {
        if (is_null($ts_created_iso)) {
            throw new \InvalidArgumentException('non-nullable ts_created_iso cannot be null');
        }
        $this->container['ts_created_iso'] = $ts_created_iso;

        return $this;
    }

    /**
     * Gets ts_updated_iso
     *
     * @return \DateTime
     */
    public function getTsUpdatedIso()
    {
        return $this->container['ts_updated_iso'];
    }

    /**
     * Sets ts_updated_iso
     *
     * @param \DateTime $ts_updated_iso Last update on the ticket in iso 8601
     *
     * @return self
     */
    public function setTsUpdatedIso($ts_updated_iso)
    {
        if (is_null($ts_updated_iso)) {
            throw new \InvalidArgumentException('non-nullable ts_updated_iso cannot be null');
        }
        $this->container['ts_updated_iso'] = $ts_updated_iso;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \KauflandSellerApi\Model\TicketStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \KauflandSellerApi\Model\TicketStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets open_reason
     *
     * @return \KauflandSellerApi\Model\TicketReason
     */
    public function getOpenReason()
    {
        return $this->container['open_reason'];
    }

    /**
     * Sets open_reason
     *
     * @param \KauflandSellerApi\Model\TicketReason $open_reason open_reason
     *
     * @return self
     */
    public function setOpenReason($open_reason)
    {
        if (is_null($open_reason)) {
            throw new \InvalidArgumentException('non-nullable open_reason cannot be null');
        }
        $this->container['open_reason'] = $open_reason;

        return $this;
    }

    /**
     * Gets topic
     *
     * @return \KauflandSellerApi\Model\TicketTopic
     */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
     * Sets topic
     *
     * @param \KauflandSellerApi\Model\TicketTopic $topic The topic of the ticket
     *
     * @return self
     */
    public function setTopic($topic)
    {
        if (is_null($topic)) {
            array_push($this->openAPINullablesSetToNull, 'topic');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('topic', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['topic'] = $topic;

        return $this;
    }

    /**
     * Gets is_seller_responsible
     *
     * @return bool
     */
    public function getIsSellerResponsible()
    {
        return $this->container['is_seller_responsible'];
    }

    /**
     * Sets is_seller_responsible
     *
     * @param bool $is_seller_responsible An indicator, whether the seller needs to take action
     *
     * @return self
     */
    public function setIsSellerResponsible($is_seller_responsible)
    {
        if (is_null($is_seller_responsible)) {
            throw new \InvalidArgumentException('non-nullable is_seller_responsible cannot be null');
        }
        $this->container['is_seller_responsible'] = $is_seller_responsible;

        return $this;
    }

    /**
     * Gets fulfillment_type
     *
     * @return \KauflandSellerApi\Model\FulfillmentType
     */
    public function getFulfillmentType()
    {
        return $this->container['fulfillment_type'];
    }

    /**
     * Sets fulfillment_type
     *
     * @param \KauflandSellerApi\Model\FulfillmentType $fulfillment_type fulfillment_type
     *
     * @return self
     */
    public function setFulfillmentType($fulfillment_type)
    {
        if (is_null($fulfillment_type)) {
            throw new \InvalidArgumentException('non-nullable fulfillment_type cannot be null');
        }
        $this->container['fulfillment_type'] = $fulfillment_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

