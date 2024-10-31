<?php
/**
 * UnitPatchRequest
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
 * UnitPatchRequest Class Doc Comment
 *
 * @category Class
 * @package  KauflandSellerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UnitPatchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UnitPatchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => '\KauflandSellerApi\Model\WriteableUnitStatuses',
        'amount' => 'int',
        'handling_time' => 'int',
        'listing_price' => 'int',
        'minimum_price' => 'int',
        'note' => 'string',
        'id_shipping_group' => 'int',
        'id_warehouse' => 'int',
        'vat_indicator' => '\KauflandSellerApi\Model\WriteableVatIndicator'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'amount' => 'int32',
        'handling_time' => 'int32',
        'listing_price' => 'int32',
        'minimum_price' => 'int32',
        'note' => null,
        'id_shipping_group' => 'int64',
        'id_warehouse' => 'int64',
        'vat_indicator' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
        'amount' => false,
        'handling_time' => false,
        'listing_price' => false,
        'minimum_price' => false,
        'note' => false,
        'id_shipping_group' => false,
        'id_warehouse' => false,
        'vat_indicator' => false
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
        'status' => 'status',
        'amount' => 'amount',
        'handling_time' => 'handling_time',
        'listing_price' => 'listing_price',
        'minimum_price' => 'minimum_price',
        'note' => 'note',
        'id_shipping_group' => 'id_shipping_group',
        'id_warehouse' => 'id_warehouse',
        'vat_indicator' => 'vat_indicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'amount' => 'setAmount',
        'handling_time' => 'setHandlingTime',
        'listing_price' => 'setListingPrice',
        'minimum_price' => 'setMinimumPrice',
        'note' => 'setNote',
        'id_shipping_group' => 'setIdShippingGroup',
        'id_warehouse' => 'setIdWarehouse',
        'vat_indicator' => 'setVatIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'amount' => 'getAmount',
        'handling_time' => 'getHandlingTime',
        'listing_price' => 'getListingPrice',
        'minimum_price' => 'getMinimumPrice',
        'note' => 'getNote',
        'id_shipping_group' => 'getIdShippingGroup',
        'id_warehouse' => 'getIdWarehouse',
        'vat_indicator' => 'getVatIndicator'
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('handling_time', $data ?? [], null);
        $this->setIfExists('listing_price', $data ?? [], null);
        $this->setIfExists('minimum_price', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('id_shipping_group', $data ?? [], null);
        $this->setIfExists('id_warehouse', $data ?? [], null);
        $this->setIfExists('vat_indicator', $data ?? [], null);
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

        if (!is_null($this->container['amount']) && ($this->container['amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['handling_time']) && ($this->container['handling_time'] > 100)) {
            $invalidProperties[] = "invalid value for 'handling_time', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['handling_time']) && ($this->container['handling_time'] < 0)) {
            $invalidProperties[] = "invalid value for 'handling_time', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['listing_price']) && ($this->container['listing_price'] < 1)) {
            $invalidProperties[] = "invalid value for 'listing_price', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['minimum_price']) && ($this->container['minimum_price'] < 1)) {
            $invalidProperties[] = "invalid value for 'minimum_price', must be bigger than or equal to 1.";
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
     * Gets status
     *
     * @return \KauflandSellerApi\Model\WriteableUnitStatuses|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \KauflandSellerApi\Model\WriteableUnitStatuses|null $status status
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
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount Amount of available Units
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

        if (($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling UnitPatchRequest., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets handling_time
     *
     * @return int|null
     */
    public function getHandlingTime()
    {
        return $this->container['handling_time'];
    }

    /**
     * Sets handling_time
     *
     * @param int|null $handling_time handling time
     *
     * @return self
     */
    public function setHandlingTime($handling_time)
    {
        if (is_null($handling_time)) {
            throw new \InvalidArgumentException('non-nullable handling_time cannot be null');
        }

        if (($handling_time > 100)) {
            throw new \InvalidArgumentException('invalid value for $handling_time when calling UnitPatchRequest., must be smaller than or equal to 100.');
        }
        if (($handling_time < 0)) {
            throw new \InvalidArgumentException('invalid value for $handling_time when calling UnitPatchRequest., must be bigger than or equal to 0.');
        }

        $this->container['handling_time'] = $handling_time;

        return $this;
    }

    /**
     * Gets listing_price
     *
     * @return int|null
     */
    public function getListingPrice()
    {
        return $this->container['listing_price'];
    }

    /**
     * Sets listing_price
     *
     * @param int|null $listing_price Listing price, in integral cents of the storefront's currency (CZK for cz, EUR for de, sk, at and PLN for pl). Minimum 1 cent, maximum differs by storefront (25 million CZK, 1 million EUR or 4.5 million PLN).
     *
     * @return self
     */
    public function setListingPrice($listing_price)
    {
        if (is_null($listing_price)) {
            throw new \InvalidArgumentException('non-nullable listing_price cannot be null');
        }

        if (($listing_price < 1)) {
            throw new \InvalidArgumentException('invalid value for $listing_price when calling UnitPatchRequest., must be bigger than or equal to 1.');
        }

        $this->container['listing_price'] = $listing_price;

        return $this;
    }

    /**
     * Gets minimum_price
     *
     * @return int|null
     */
    public function getMinimumPrice()
    {
        return $this->container['minimum_price'];
    }

    /**
     * Sets minimum_price
     *
     * @param int|null $minimum_price Minimum price, in integral cents of the storefront's currency. Only relevant if you want to use Smart Pricing.
     *
     * @return self
     */
    public function setMinimumPrice($minimum_price)
    {
        if (is_null($minimum_price)) {
            throw new \InvalidArgumentException('non-nullable minimum_price cannot be null');
        }

        if (($minimum_price < 1)) {
            throw new \InvalidArgumentException('invalid value for $minimum_price when calling UnitPatchRequest., must be bigger than or equal to 1.');
        }

        $this->container['minimum_price'] = $minimum_price;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note A note for this unit
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            throw new \InvalidArgumentException('non-nullable note cannot be null');
        }
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets id_shipping_group
     *
     * @return int|null
     */
    public function getIdShippingGroup()
    {
        return $this->container['id_shipping_group'];
    }

    /**
     * Sets id_shipping_group
     *
     * @param int|null $id_shipping_group ID of the shipping group
     *
     * @return self
     */
    public function setIdShippingGroup($id_shipping_group)
    {
        if (is_null($id_shipping_group)) {
            throw new \InvalidArgumentException('non-nullable id_shipping_group cannot be null');
        }
        $this->container['id_shipping_group'] = $id_shipping_group;

        return $this;
    }

    /**
     * Gets id_warehouse
     *
     * @return int|null
     */
    public function getIdWarehouse()
    {
        return $this->container['id_warehouse'];
    }

    /**
     * Sets id_warehouse
     *
     * @param int|null $id_warehouse ID of warehouse
     *
     * @return self
     */
    public function setIdWarehouse($id_warehouse)
    {
        if (is_null($id_warehouse)) {
            throw new \InvalidArgumentException('non-nullable id_warehouse cannot be null');
        }
        $this->container['id_warehouse'] = $id_warehouse;

        return $this;
    }

    /**
     * Gets vat_indicator
     *
     * @return \KauflandSellerApi\Model\WriteableVatIndicator|null
     */
    public function getVatIndicator()
    {
        return $this->container['vat_indicator'];
    }

    /**
     * Sets vat_indicator
     *
     * @param \KauflandSellerApi\Model\WriteableVatIndicator|null $vat_indicator vat_indicator
     *
     * @return self
     */
    public function setVatIndicator($vat_indicator)
    {
        if (is_null($vat_indicator)) {
            throw new \InvalidArgumentException('non-nullable vat_indicator cannot be null');
        }
        $this->container['vat_indicator'] = $vat_indicator;

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

