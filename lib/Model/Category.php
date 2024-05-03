<?php
/**
 * Category
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
 * Category Class Doc Comment
 *
 * @category Class
 * @package  KauflandSellerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Category implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Category';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'title_singular' => 'string',
        'title_plural' => 'string',
        'level' => 'float',
        'url' => 'string',
        'is_leaf' => 'bool',
        'id_category' => 'int',
        'id_parent_category' => 'int',
        'shipping_category' => 'string',
        'variable_fee' => 'float',
        'fixed_fee' => 'float',
        'vat' => 'float'
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
        'title_singular' => null,
        'title_plural' => null,
        'level' => 'double',
        'url' => null,
        'is_leaf' => null,
        'id_category' => 'int64',
        'id_parent_category' => 'int64',
        'shipping_category' => null,
        'variable_fee' => 'double',
        'fixed_fee' => 'double',
        'vat' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'title_singular' => false,
        'title_plural' => false,
        'level' => false,
        'url' => false,
        'is_leaf' => false,
        'id_category' => false,
        'id_parent_category' => false,
        'shipping_category' => false,
        'variable_fee' => false,
        'fixed_fee' => false,
        'vat' => false
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
        'title_singular' => 'title_singular',
        'title_plural' => 'title_plural',
        'level' => 'level',
        'url' => 'url',
        'is_leaf' => 'is_leaf',
        'id_category' => 'id_category',
        'id_parent_category' => 'id_parent_category',
        'shipping_category' => 'shipping_category',
        'variable_fee' => 'variable_fee',
        'fixed_fee' => 'fixed_fee',
        'vat' => 'vat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'title_singular' => 'setTitleSingular',
        'title_plural' => 'setTitlePlural',
        'level' => 'setLevel',
        'url' => 'setUrl',
        'is_leaf' => 'setIsLeaf',
        'id_category' => 'setIdCategory',
        'id_parent_category' => 'setIdParentCategory',
        'shipping_category' => 'setShippingCategory',
        'variable_fee' => 'setVariableFee',
        'fixed_fee' => 'setFixedFee',
        'vat' => 'setVat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'title_singular' => 'getTitleSingular',
        'title_plural' => 'getTitlePlural',
        'level' => 'getLevel',
        'url' => 'getUrl',
        'is_leaf' => 'getIsLeaf',
        'id_category' => 'getIdCategory',
        'id_parent_category' => 'getIdParentCategory',
        'shipping_category' => 'getShippingCategory',
        'variable_fee' => 'getVariableFee',
        'fixed_fee' => 'getFixedFee',
        'vat' => 'getVat'
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
        $this->setIfExists('title_singular', $data ?? [], null);
        $this->setIfExists('title_plural', $data ?? [], null);
        $this->setIfExists('level', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('is_leaf', $data ?? [], null);
        $this->setIfExists('id_category', $data ?? [], null);
        $this->setIfExists('id_parent_category', $data ?? [], null);
        $this->setIfExists('shipping_category', $data ?? [], null);
        $this->setIfExists('variable_fee', $data ?? [], null);
        $this->setIfExists('fixed_fee', $data ?? [], null);
        $this->setIfExists('vat', $data ?? [], null);
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
        if ($this->container['title_singular'] === null) {
            $invalidProperties[] = "'title_singular' can't be null";
        }
        if ($this->container['title_plural'] === null) {
            $invalidProperties[] = "'title_plural' can't be null";
        }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['is_leaf'] === null) {
            $invalidProperties[] = "'is_leaf' can't be null";
        }
        if ($this->container['id_category'] === null) {
            $invalidProperties[] = "'id_category' can't be null";
        }
        if (($this->container['id_category'] < 1)) {
            $invalidProperties[] = "invalid value for 'id_category', must be bigger than or equal to 1.";
        }

        if ($this->container['id_parent_category'] === null) {
            $invalidProperties[] = "'id_parent_category' can't be null";
        }
        if (($this->container['id_parent_category'] < 1)) {
            $invalidProperties[] = "invalid value for 'id_parent_category', must be bigger than or equal to 1.";
        }

        if ($this->container['shipping_category'] === null) {
            $invalidProperties[] = "'shipping_category' can't be null";
        }
        if ($this->container['variable_fee'] === null) {
            $invalidProperties[] = "'variable_fee' can't be null";
        }
        if ($this->container['fixed_fee'] === null) {
            $invalidProperties[] = "'fixed_fee' can't be null";
        }
        if ($this->container['vat'] === null) {
            $invalidProperties[] = "'vat' can't be null";
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
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
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
     * Gets title_singular
     *
     * @return string
     */
    public function getTitleSingular()
    {
        return $this->container['title_singular'];
    }

    /**
     * Sets title_singular
     *
     * @param string $title_singular title_singular
     *
     * @return self
     */
    public function setTitleSingular($title_singular)
    {
        if (is_null($title_singular)) {
            throw new \InvalidArgumentException('non-nullable title_singular cannot be null');
        }
        $this->container['title_singular'] = $title_singular;

        return $this;
    }

    /**
     * Gets title_plural
     *
     * @return string
     */
    public function getTitlePlural()
    {
        return $this->container['title_plural'];
    }

    /**
     * Sets title_plural
     *
     * @param string $title_plural title_plural
     *
     * @return self
     */
    public function setTitlePlural($title_plural)
    {
        if (is_null($title_plural)) {
            throw new \InvalidArgumentException('non-nullable title_plural cannot be null');
        }
        $this->container['title_plural'] = $title_plural;

        return $this;
    }

    /**
     * Gets level
     *
     * @return float
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param float $level level
     *
     * @return self
     */
    public function setLevel($level)
    {
        if (is_null($level)) {
            throw new \InvalidArgumentException('non-nullable level cannot be null');
        }
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets is_leaf
     *
     * @return bool
     */
    public function getIsLeaf()
    {
        return $this->container['is_leaf'];
    }

    /**
     * Sets is_leaf
     *
     * @param bool $is_leaf is_leaf
     *
     * @return self
     */
    public function setIsLeaf($is_leaf)
    {
        if (is_null($is_leaf)) {
            throw new \InvalidArgumentException('non-nullable is_leaf cannot be null');
        }
        $this->container['is_leaf'] = $is_leaf;

        return $this;
    }

    /**
     * Gets id_category
     *
     * @return int
     */
    public function getIdCategory()
    {
        return $this->container['id_category'];
    }

    /**
     * Sets id_category
     *
     * @param int $id_category id_category
     *
     * @return self
     */
    public function setIdCategory($id_category)
    {
        if (is_null($id_category)) {
            throw new \InvalidArgumentException('non-nullable id_category cannot be null');
        }

        if (($id_category < 1)) {
            throw new \InvalidArgumentException('invalid value for $id_category when calling Category., must be bigger than or equal to 1.');
        }

        $this->container['id_category'] = $id_category;

        return $this;
    }

    /**
     * Gets id_parent_category
     *
     * @return int
     */
    public function getIdParentCategory()
    {
        return $this->container['id_parent_category'];
    }

    /**
     * Sets id_parent_category
     *
     * @param int $id_parent_category id_parent_category
     *
     * @return self
     */
    public function setIdParentCategory($id_parent_category)
    {
        if (is_null($id_parent_category)) {
            throw new \InvalidArgumentException('non-nullable id_parent_category cannot be null');
        }

        if (($id_parent_category < 1)) {
            throw new \InvalidArgumentException('invalid value for $id_parent_category when calling Category., must be bigger than or equal to 1.');
        }

        $this->container['id_parent_category'] = $id_parent_category;

        return $this;
    }

    /**
     * Gets shipping_category
     *
     * @return string
     */
    public function getShippingCategory()
    {
        return $this->container['shipping_category'];
    }

    /**
     * Sets shipping_category
     *
     * @param string $shipping_category shipping_category
     *
     * @return self
     */
    public function setShippingCategory($shipping_category)
    {
        if (is_null($shipping_category)) {
            throw new \InvalidArgumentException('non-nullable shipping_category cannot be null');
        }
        $this->container['shipping_category'] = $shipping_category;

        return $this;
    }

    /**
     * Gets variable_fee
     *
     * @return float
     */
    public function getVariableFee()
    {
        return $this->container['variable_fee'];
    }

    /**
     * Sets variable_fee
     *
     * @param float $variable_fee variable_fee
     *
     * @return self
     */
    public function setVariableFee($variable_fee)
    {
        if (is_null($variable_fee)) {
            throw new \InvalidArgumentException('non-nullable variable_fee cannot be null');
        }
        $this->container['variable_fee'] = $variable_fee;

        return $this;
    }

    /**
     * Gets fixed_fee
     *
     * @return float
     */
    public function getFixedFee()
    {
        return $this->container['fixed_fee'];
    }

    /**
     * Sets fixed_fee
     *
     * @param float $fixed_fee fixed_fee
     *
     * @return self
     */
    public function setFixedFee($fixed_fee)
    {
        if (is_null($fixed_fee)) {
            throw new \InvalidArgumentException('non-nullable fixed_fee cannot be null');
        }
        $this->container['fixed_fee'] = $fixed_fee;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return float
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param float $vat vat
     *
     * @return self
     */
    public function setVat($vat)
    {
        if (is_null($vat)) {
            throw new \InvalidArgumentException('non-nullable vat cannot be null');
        }
        $this->container['vat'] = $vat;

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

