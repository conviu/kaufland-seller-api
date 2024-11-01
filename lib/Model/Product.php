<?php
/**
 * Product
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
 * Product Class Doc Comment
 *
 * @category Class
 * @package  KauflandSellerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Product implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id_product' => 'int',
        'storefront' => '\KauflandSellerApi\Model\Storefront',
        'title' => 'string',
        'eans' => 'string[]',
        'id_category' => 'int',
        'main_picture' => 'string',
        'manufacturer' => 'string',
        'url' => 'string',
        'age_rating' => 'float',
        'is_valid' => 'bool',
        'dangerous_goods_li_shipping' => 'string',
        'danger_label_9_a' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id_product' => 'int64',
        'storefront' => null,
        'title' => null,
        'eans' => null,
        'id_category' => 'int64',
        'main_picture' => null,
        'manufacturer' => null,
        'url' => null,
        'age_rating' => 'double',
        'is_valid' => null,
        'dangerous_goods_li_shipping' => null,
        'danger_label_9_a' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id_product' => false,
        'storefront' => false,
        'title' => false,
        'eans' => false,
        'id_category' => false,
        'main_picture' => false,
        'manufacturer' => false,
        'url' => false,
        'age_rating' => false,
        'is_valid' => false,
        'dangerous_goods_li_shipping' => true,
        'danger_label_9_a' => true
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
        'id_product' => 'id_product',
        'storefront' => 'storefront',
        'title' => 'title',
        'eans' => 'eans',
        'id_category' => 'id_category',
        'main_picture' => 'main_picture',
        'manufacturer' => 'manufacturer',
        'url' => 'url',
        'age_rating' => 'age_rating',
        'is_valid' => 'is_valid',
        'dangerous_goods_li_shipping' => 'dangerous_goods_li_shipping',
        'danger_label_9_a' => 'danger_label_9A'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_product' => 'setIdProduct',
        'storefront' => 'setStorefront',
        'title' => 'setTitle',
        'eans' => 'setEans',
        'id_category' => 'setIdCategory',
        'main_picture' => 'setMainPicture',
        'manufacturer' => 'setManufacturer',
        'url' => 'setUrl',
        'age_rating' => 'setAgeRating',
        'is_valid' => 'setIsValid',
        'dangerous_goods_li_shipping' => 'setDangerousGoodsLiShipping',
        'danger_label_9_a' => 'setDangerLabel9A'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_product' => 'getIdProduct',
        'storefront' => 'getStorefront',
        'title' => 'getTitle',
        'eans' => 'getEans',
        'id_category' => 'getIdCategory',
        'main_picture' => 'getMainPicture',
        'manufacturer' => 'getManufacturer',
        'url' => 'getUrl',
        'age_rating' => 'getAgeRating',
        'is_valid' => 'getIsValid',
        'dangerous_goods_li_shipping' => 'getDangerousGoodsLiShipping',
        'danger_label_9_a' => 'getDangerLabel9A'
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
        $this->setIfExists('id_product', $data ?? [], null);
        $this->setIfExists('storefront', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('eans', $data ?? [], null);
        $this->setIfExists('id_category', $data ?? [], null);
        $this->setIfExists('main_picture', $data ?? [], null);
        $this->setIfExists('manufacturer', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('age_rating', $data ?? [], null);
        $this->setIfExists('is_valid', $data ?? [], null);
        $this->setIfExists('dangerous_goods_li_shipping', $data ?? [], null);
        $this->setIfExists('danger_label_9_a', $data ?? [], null);
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

        if ($this->container['id_product'] === null) {
            $invalidProperties[] = "'id_product' can't be null";
        }
        if (($this->container['id_product'] < 1)) {
            $invalidProperties[] = "invalid value for 'id_product', must be bigger than or equal to 1.";
        }

        if ($this->container['storefront'] === null) {
            $invalidProperties[] = "'storefront' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['eans'] === null) {
            $invalidProperties[] = "'eans' can't be null";
        }
        if ($this->container['id_category'] === null) {
            $invalidProperties[] = "'id_category' can't be null";
        }
        if (($this->container['id_category'] < 1)) {
            $invalidProperties[] = "invalid value for 'id_category', must be bigger than or equal to 1.";
        }

        if ($this->container['main_picture'] === null) {
            $invalidProperties[] = "'main_picture' can't be null";
        }
        if ($this->container['manufacturer'] === null) {
            $invalidProperties[] = "'manufacturer' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['age_rating'] === null) {
            $invalidProperties[] = "'age_rating' can't be null";
        }
        if ($this->container['is_valid'] === null) {
            $invalidProperties[] = "'is_valid' can't be null";
        }
        if ($this->container['dangerous_goods_li_shipping'] === null) {
            $invalidProperties[] = "'dangerous_goods_li_shipping' can't be null";
        }
        if ($this->container['danger_label_9_a'] === null) {
            $invalidProperties[] = "'danger_label_9_a' can't be null";
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
     * Gets id_product
     *
     * @return int
     */
    public function getIdProduct()
    {
        return $this->container['id_product'];
    }

    /**
     * Sets id_product
     *
     * @param int $id_product id_product
     *
     * @return self
     */
    public function setIdProduct($id_product)
    {
        if (is_null($id_product)) {
            throw new \InvalidArgumentException('non-nullable id_product cannot be null');
        }

        if (($id_product < 1)) {
            throw new \InvalidArgumentException('invalid value for $id_product when calling Product., must be bigger than or equal to 1.');
        }

        $this->container['id_product'] = $id_product;

        return $this;
    }

    /**
     * Gets storefront
     *
     * @return \KauflandSellerApi\Model\Storefront
     */
    public function getStorefront()
    {
        return $this->container['storefront'];
    }

    /**
     * Sets storefront
     *
     * @param \KauflandSellerApi\Model\Storefront $storefront storefront
     *
     * @return self
     */
    public function setStorefront($storefront)
    {
        if (is_null($storefront)) {
            throw new \InvalidArgumentException('non-nullable storefront cannot be null');
        }
        $this->container['storefront'] = $storefront;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets eans
     *
     * @return string[]
     */
    public function getEans()
    {
        return $this->container['eans'];
    }

    /**
     * Sets eans
     *
     * @param string[] $eans eans
     *
     * @return self
     */
    public function setEans($eans)
    {
        if (is_null($eans)) {
            throw new \InvalidArgumentException('non-nullable eans cannot be null');
        }
        $this->container['eans'] = $eans;

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
            throw new \InvalidArgumentException('invalid value for $id_category when calling Product., must be bigger than or equal to 1.');
        }

        $this->container['id_category'] = $id_category;

        return $this;
    }

    /**
     * Gets main_picture
     *
     * @return string
     */
    public function getMainPicture()
    {
        return $this->container['main_picture'];
    }

    /**
     * Sets main_picture
     *
     * @param string $main_picture main_picture
     *
     * @return self
     */
    public function setMainPicture($main_picture)
    {
        if (is_null($main_picture)) {
            throw new \InvalidArgumentException('non-nullable main_picture cannot be null');
        }
        $this->container['main_picture'] = $main_picture;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string $manufacturer manufacturer
     *
     * @return self
     */
    public function setManufacturer($manufacturer)
    {
        if (is_null($manufacturer)) {
            throw new \InvalidArgumentException('non-nullable manufacturer cannot be null');
        }
        $this->container['manufacturer'] = $manufacturer;

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
     * Gets age_rating
     *
     * @return float
     */
    public function getAgeRating()
    {
        return $this->container['age_rating'];
    }

    /**
     * Sets age_rating
     *
     * @param float $age_rating age_rating
     *
     * @return self
     */
    public function setAgeRating($age_rating)
    {
        if (is_null($age_rating)) {
            throw new \InvalidArgumentException('non-nullable age_rating cannot be null');
        }
        $this->container['age_rating'] = $age_rating;

        return $this;
    }

    /**
     * Gets is_valid
     *
     * @return bool
     */
    public function getIsValid()
    {
        return $this->container['is_valid'];
    }

    /**
     * Sets is_valid
     *
     * @param bool $is_valid is_valid
     *
     * @return self
     */
    public function setIsValid($is_valid)
    {
        if (is_null($is_valid)) {
            throw new \InvalidArgumentException('non-nullable is_valid cannot be null');
        }
        $this->container['is_valid'] = $is_valid;

        return $this;
    }

    /**
     * Gets dangerous_goods_li_shipping
     *
     * @return string
     */
    public function getDangerousGoodsLiShipping()
    {
        return $this->container['dangerous_goods_li_shipping'];
    }

    /**
     * Sets dangerous_goods_li_shipping
     *
     * @param string $dangerous_goods_li_shipping dangerous_goods_li_shipping
     *
     * @return self
     */
    public function setDangerousGoodsLiShipping($dangerous_goods_li_shipping)
    {
        if (is_null($dangerous_goods_li_shipping)) {
            array_push($this->openAPINullablesSetToNull, 'dangerous_goods_li_shipping');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dangerous_goods_li_shipping', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dangerous_goods_li_shipping'] = $dangerous_goods_li_shipping;

        return $this;
    }

    /**
     * Gets danger_label_9_a
     *
     * @return string
     */
    public function getDangerLabel9A()
    {
        return $this->container['danger_label_9_a'];
    }

    /**
     * Sets danger_label_9_a
     *
     * @param string $danger_label_9_a danger_label_9_a
     *
     * @return self
     */
    public function setDangerLabel9A($danger_label_9_a)
    {
        if (is_null($danger_label_9_a)) {
            array_push($this->openAPINullablesSetToNull, 'danger_label_9_a');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('danger_label_9_a', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['danger_label_9_a'] = $danger_label_9_a;

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

