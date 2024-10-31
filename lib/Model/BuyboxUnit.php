<?php
/**
 * BuyboxUnit
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
 * BuyboxUnit Class Doc Comment
 *
 * @category Class
 * @package  KauflandSellerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BuyboxUnit implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BuyboxUnit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'buybox_rank' => 'float',
        'seller' => 'string',
        'price' => 'float',
        'delivery_time_min' => 'float',
        'delivery_time_max' => 'float',
        'shipping_rate' => 'float',
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
        'buybox_rank' => 'double',
        'seller' => null,
        'price' => 'double',
        'delivery_time_min' => 'double',
        'delivery_time_max' => 'double',
        'shipping_rate' => 'double',
        'fulfillment_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'buybox_rank' => false,
        'seller' => false,
        'price' => false,
        'delivery_time_min' => false,
        'delivery_time_max' => false,
        'shipping_rate' => false,
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
        'buybox_rank' => 'buybox_rank',
        'seller' => 'seller',
        'price' => 'price',
        'delivery_time_min' => 'delivery_time_min',
        'delivery_time_max' => 'delivery_time_max',
        'shipping_rate' => 'shipping_rate',
        'fulfillment_type' => 'fulfillment_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buybox_rank' => 'setBuyboxRank',
        'seller' => 'setSeller',
        'price' => 'setPrice',
        'delivery_time_min' => 'setDeliveryTimeMin',
        'delivery_time_max' => 'setDeliveryTimeMax',
        'shipping_rate' => 'setShippingRate',
        'fulfillment_type' => 'setFulfillmentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buybox_rank' => 'getBuyboxRank',
        'seller' => 'getSeller',
        'price' => 'getPrice',
        'delivery_time_min' => 'getDeliveryTimeMin',
        'delivery_time_max' => 'getDeliveryTimeMax',
        'shipping_rate' => 'getShippingRate',
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
        $this->setIfExists('buybox_rank', $data ?? [], null);
        $this->setIfExists('seller', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('delivery_time_min', $data ?? [], null);
        $this->setIfExists('delivery_time_max', $data ?? [], null);
        $this->setIfExists('shipping_rate', $data ?? [], null);
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

        if ($this->container['buybox_rank'] === null) {
            $invalidProperties[] = "'buybox_rank' can't be null";
        }
        if ($this->container['seller'] === null) {
            $invalidProperties[] = "'seller' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['delivery_time_min'] === null) {
            $invalidProperties[] = "'delivery_time_min' can't be null";
        }
        if ($this->container['delivery_time_max'] === null) {
            $invalidProperties[] = "'delivery_time_max' can't be null";
        }
        if ($this->container['shipping_rate'] === null) {
            $invalidProperties[] = "'shipping_rate' can't be null";
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
     * Gets buybox_rank
     *
     * @return float
     */
    public function getBuyboxRank()
    {
        return $this->container['buybox_rank'];
    }

    /**
     * Sets buybox_rank
     *
     * @param float $buybox_rank The rank of the offer in the buybox
     *
     * @return self
     */
    public function setBuyboxRank($buybox_rank)
    {
        if (is_null($buybox_rank)) {
            throw new \InvalidArgumentException('non-nullable buybox_rank cannot be null');
        }
        $this->container['buybox_rank'] = $buybox_rank;

        return $this;
    }

    /**
     * Gets seller
     *
     * @return string
     */
    public function getSeller()
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller
     *
     * @param string $seller The seller name
     *
     * @return self
     */
    public function setSeller($seller)
    {
        if (is_null($seller)) {
            throw new \InvalidArgumentException('non-nullable seller cannot be null');
        }
        $this->container['seller'] = $seller;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price The price listed in the marketplace in the currency of the storefront
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets delivery_time_min
     *
     * @return float
     */
    public function getDeliveryTimeMin()
    {
        return $this->container['delivery_time_min'];
    }

    /**
     * Sets delivery_time_min
     *
     * @param float $delivery_time_min delivery_time_min
     *
     * @return self
     */
    public function setDeliveryTimeMin($delivery_time_min)
    {
        if (is_null($delivery_time_min)) {
            throw new \InvalidArgumentException('non-nullable delivery_time_min cannot be null');
        }
        $this->container['delivery_time_min'] = $delivery_time_min;

        return $this;
    }

    /**
     * Gets delivery_time_max
     *
     * @return float
     */
    public function getDeliveryTimeMax()
    {
        return $this->container['delivery_time_max'];
    }

    /**
     * Sets delivery_time_max
     *
     * @param float $delivery_time_max delivery_time_max
     *
     * @return self
     */
    public function setDeliveryTimeMax($delivery_time_max)
    {
        if (is_null($delivery_time_max)) {
            throw new \InvalidArgumentException('non-nullable delivery_time_max cannot be null');
        }
        $this->container['delivery_time_max'] = $delivery_time_max;

        return $this;
    }

    /**
     * Gets shipping_rate
     *
     * @return float
     */
    public function getShippingRate()
    {
        return $this->container['shipping_rate'];
    }

    /**
     * Sets shipping_rate
     *
     * @param float $shipping_rate shipping_rate
     *
     * @return self
     */
    public function setShippingRate($shipping_rate)
    {
        if (is_null($shipping_rate)) {
            throw new \InvalidArgumentException('non-nullable shipping_rate cannot be null');
        }
        $this->container['shipping_rate'] = $shipping_rate;

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
