<?php
/**
 * ShippingGroupOption
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

use \ArrayAccess;
use \KauflandSellerApi\ObjectSerializer;

/**
 * ShippingGroupOption Class Doc Comment
 *
 * @category Class
 * @package  KauflandSellerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShippingGroupOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingGroupOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => '\KauflandSellerApi\Model\SellerApiShippingGroupRegionOptionNameEnum',
        'cost_first' => 'int',
        'cost_next' => 'int',
        'cost_max' => 'int',
        'cost_free' => 'int',
        'cut_off_time' => 'string',
        'transport_time_min' => 'int',
        'transport_time_max' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'cost_first' => 'int32',
        'cost_next' => 'int32',
        'cost_max' => 'int32',
        'cost_free' => 'int32',
        'cut_off_time' => null,
        'transport_time_min' => 'int32',
        'transport_time_max' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'cost_first' => false,
        'cost_next' => false,
        'cost_max' => false,
        'cost_free' => false,
        'cut_off_time' => false,
        'transport_time_min' => false,
        'transport_time_max' => false
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
        'name' => 'name',
        'cost_first' => 'cost_first',
        'cost_next' => 'cost_next',
        'cost_max' => 'cost_max',
        'cost_free' => 'cost_free',
        'cut_off_time' => 'cut_off_time',
        'transport_time_min' => 'transport_time_min',
        'transport_time_max' => 'transport_time_max'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'cost_first' => 'setCostFirst',
        'cost_next' => 'setCostNext',
        'cost_max' => 'setCostMax',
        'cost_free' => 'setCostFree',
        'cut_off_time' => 'setCutOffTime',
        'transport_time_min' => 'setTransportTimeMin',
        'transport_time_max' => 'setTransportTimeMax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'cost_first' => 'getCostFirst',
        'cost_next' => 'getCostNext',
        'cost_max' => 'getCostMax',
        'cost_free' => 'getCostFree',
        'cut_off_time' => 'getCutOffTime',
        'transport_time_min' => 'getTransportTimeMin',
        'transport_time_max' => 'getTransportTimeMax'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('cost_first', $data ?? [], null);
        $this->setIfExists('cost_next', $data ?? [], null);
        $this->setIfExists('cost_max', $data ?? [], null);
        $this->setIfExists('cost_free', $data ?? [], null);
        $this->setIfExists('cut_off_time', $data ?? [], null);
        $this->setIfExists('transport_time_min', $data ?? [], null);
        $this->setIfExists('transport_time_max', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['cost_first'] === null) {
            $invalidProperties[] = "'cost_first' can't be null";
        }
        if (($this->container['cost_first'] < 0)) {
            $invalidProperties[] = "invalid value for 'cost_first', must be bigger than or equal to 0.";
        }

        if ($this->container['cost_next'] === null) {
            $invalidProperties[] = "'cost_next' can't be null";
        }
        if (($this->container['cost_next'] < 0)) {
            $invalidProperties[] = "invalid value for 'cost_next', must be bigger than or equal to 0.";
        }

        if ($this->container['cost_max'] === null) {
            $invalidProperties[] = "'cost_max' can't be null";
        }
        if (($this->container['cost_max'] < 0)) {
            $invalidProperties[] = "invalid value for 'cost_max', must be bigger than or equal to 0.";
        }

        if ($this->container['cost_free'] === null) {
            $invalidProperties[] = "'cost_free' can't be null";
        }
        if (($this->container['cost_free'] < 0)) {
            $invalidProperties[] = "invalid value for 'cost_free', must be bigger than or equal to 0.";
        }

        if ($this->container['cut_off_time'] === null) {
            $invalidProperties[] = "'cut_off_time' can't be null";
        }
        if ($this->container['transport_time_min'] === null) {
            $invalidProperties[] = "'transport_time_min' can't be null";
        }
        if (($this->container['transport_time_min'] < 1)) {
            $invalidProperties[] = "invalid value for 'transport_time_min', must be bigger than or equal to 1.";
        }

        if ($this->container['transport_time_max'] === null) {
            $invalidProperties[] = "'transport_time_max' can't be null";
        }
        if (($this->container['transport_time_max'] < 1)) {
            $invalidProperties[] = "invalid value for 'transport_time_max', must be bigger than or equal to 1.";
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
     * Gets name
     *
     * @return \KauflandSellerApi\Model\SellerApiShippingGroupRegionOptionNameEnum
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \KauflandSellerApi\Model\SellerApiShippingGroupRegionOptionNameEnum $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets cost_first
     *
     * @return int
     */
    public function getCostFirst()
    {
        return $this->container['cost_first'];
    }

    /**
     * Sets cost_first
     *
     * @param int $cost_first Shipping cost for the first item of this shipping group.
     *
     * @return self
     */
    public function setCostFirst($cost_first)
    {
        if (is_null($cost_first)) {
            throw new \InvalidArgumentException('non-nullable cost_first cannot be null');
        }

        if (($cost_first < 0)) {
            throw new \InvalidArgumentException('invalid value for $cost_first when calling ShippingGroupOption., must be bigger than or equal to 0.');
        }

        $this->container['cost_first'] = $cost_first;

        return $this;
    }

    /**
     * Gets cost_next
     *
     * @return int
     */
    public function getCostNext()
    {
        return $this->container['cost_next'];
    }

    /**
     * Sets cost_next
     *
     * @param int $cost_next Shipping cost of all further items of this shipping group.
     *
     * @return self
     */
    public function setCostNext($cost_next)
    {
        if (is_null($cost_next)) {
            throw new \InvalidArgumentException('non-nullable cost_next cannot be null');
        }

        if (($cost_next < 0)) {
            throw new \InvalidArgumentException('invalid value for $cost_next when calling ShippingGroupOption., must be bigger than or equal to 0.');
        }

        $this->container['cost_next'] = $cost_next;

        return $this;
    }

    /**
     * Gets cost_max
     *
     * @return int
     */
    public function getCostMax()
    {
        return $this->container['cost_max'];
    }

    /**
     * Sets cost_max
     *
     * @param int $cost_max Maximum shipping cost
     *
     * @return self
     */
    public function setCostMax($cost_max)
    {
        if (is_null($cost_max)) {
            throw new \InvalidArgumentException('non-nullable cost_max cannot be null');
        }

        if (($cost_max < 0)) {
            throw new \InvalidArgumentException('invalid value for $cost_max when calling ShippingGroupOption., must be bigger than or equal to 0.');
        }

        $this->container['cost_max'] = $cost_max;

        return $this;
    }

    /**
     * Gets cost_free
     *
     * @return int
     */
    public function getCostFree()
    {
        return $this->container['cost_free'];
    }

    /**
     * Sets cost_free
     *
     * @param int $cost_free Order value from which shipping will be free.
     *
     * @return self
     */
    public function setCostFree($cost_free)
    {
        if (is_null($cost_free)) {
            throw new \InvalidArgumentException('non-nullable cost_free cannot be null');
        }

        if (($cost_free < 0)) {
            throw new \InvalidArgumentException('invalid value for $cost_free when calling ShippingGroupOption., must be bigger than or equal to 0.');
        }

        $this->container['cost_free'] = $cost_free;

        return $this;
    }

    /**
     * Gets cut_off_time
     *
     * @return string
     */
    public function getCutOffTime()
    {
        return $this->container['cut_off_time'];
    }

    /**
     * Sets cut_off_time
     *
     * @param string $cut_off_time cut_off_time
     *
     * @return self
     */
    public function setCutOffTime($cut_off_time)
    {
        if (is_null($cut_off_time)) {
            throw new \InvalidArgumentException('non-nullable cut_off_time cannot be null');
        }
        $this->container['cut_off_time'] = $cut_off_time;

        return $this;
    }

    /**
     * Gets transport_time_min
     *
     * @return int
     */
    public function getTransportTimeMin()
    {
        return $this->container['transport_time_min'];
    }

    /**
     * Sets transport_time_min
     *
     * @param int $transport_time_min Minimal time carrier needs from picking up the order until delivering it to the customer.
     *
     * @return self
     */
    public function setTransportTimeMin($transport_time_min)
    {
        if (is_null($transport_time_min)) {
            throw new \InvalidArgumentException('non-nullable transport_time_min cannot be null');
        }

        if (($transport_time_min < 1)) {
            throw new \InvalidArgumentException('invalid value for $transport_time_min when calling ShippingGroupOption., must be bigger than or equal to 1.');
        }

        $this->container['transport_time_min'] = $transport_time_min;

        return $this;
    }

    /**
     * Gets transport_time_max
     *
     * @return int
     */
    public function getTransportTimeMax()
    {
        return $this->container['transport_time_max'];
    }

    /**
     * Sets transport_time_max
     *
     * @param int $transport_time_max Maximal time carrier needs from picking up the order until delivering it to the customer.
     *
     * @return self
     */
    public function setTransportTimeMax($transport_time_max)
    {
        if (is_null($transport_time_max)) {
            throw new \InvalidArgumentException('non-nullable transport_time_max cannot be null');
        }

        if (($transport_time_max < 1)) {
            throw new \InvalidArgumentException('invalid value for $transport_time_max when calling ShippingGroupOption., must be bigger than or equal to 1.');
        }

        $this->container['transport_time_max'] = $transport_time_max;

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

