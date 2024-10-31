<?php
/**
 * UnitEmbedded
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
 * UnitEmbedded Class Doc Comment
 *
 * @category Class
 * @package  KauflandSellerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UnitEmbedded implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UnitEmbedded';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => '\KauflandSellerApi\Model\UnitStatuses',
        'currency' => '\KauflandSellerApi\Model\Currency',
        'condition' => '\KauflandSellerApi\Model\UnitCondition',
        'id_unit' => 'int',
        'note' => 'string',
        'listing_price' => 'int',
        'minimum_price' => 'int',
        'price' => 'int',
        'id_offer' => 'string',
        'id_product' => 'int',
        'id_shipping_group' => 'int',
        'id_warehouse' => 'int',
        'amount' => 'int',
        'date_inserted_iso' => '\DateTime',
        'date_lastchange_iso' => '\DateTime',
        'handling_time' => 'int',
        'shipping_rate' => 'int',
        'storefront' => '\KauflandSellerApi\Model\Storefront',
        'transport_time_min' => 'int',
        'transport_time_max' => 'int',
        'product' => '\KauflandSellerApi\Model\Product',
        'fulfillment_type' => '\KauflandSellerApi\Model\FulfillmentType',
        'vat_indicator' => '\KauflandSellerApi\Model\VatIndicator'
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
        'currency' => null,
        'condition' => null,
        'id_unit' => 'int64',
        'note' => null,
        'listing_price' => 'int32',
        'minimum_price' => 'int32',
        'price' => 'int32',
        'id_offer' => null,
        'id_product' => 'int64',
        'id_shipping_group' => 'int64',
        'id_warehouse' => 'int64',
        'amount' => 'int32',
        'date_inserted_iso' => 'date-time',
        'date_lastchange_iso' => 'date-time',
        'handling_time' => 'int32',
        'shipping_rate' => 'int32',
        'storefront' => null,
        'transport_time_min' => 'int32',
        'transport_time_max' => 'int32',
        'product' => null,
        'fulfillment_type' => null,
        'vat_indicator' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
        'currency' => false,
        'condition' => false,
        'id_unit' => false,
        'note' => true,
        'listing_price' => false,
        'minimum_price' => false,
        'price' => false,
        'id_offer' => true,
        'id_product' => false,
        'id_shipping_group' => true,
        'id_warehouse' => true,
        'amount' => false,
        'date_inserted_iso' => false,
        'date_lastchange_iso' => false,
        'handling_time' => false,
        'shipping_rate' => false,
        'storefront' => false,
        'transport_time_min' => false,
        'transport_time_max' => false,
        'product' => false,
        'fulfillment_type' => false,
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
        'currency' => 'currency',
        'condition' => 'condition',
        'id_unit' => 'id_unit',
        'note' => 'note',
        'listing_price' => 'listing_price',
        'minimum_price' => 'minimum_price',
        'price' => 'price',
        'id_offer' => 'id_offer',
        'id_product' => 'id_product',
        'id_shipping_group' => 'id_shipping_group',
        'id_warehouse' => 'id_warehouse',
        'amount' => 'amount',
        'date_inserted_iso' => 'date_inserted_iso',
        'date_lastchange_iso' => 'date_lastchange_iso',
        'handling_time' => 'handling_time',
        'shipping_rate' => 'shipping_rate',
        'storefront' => 'storefront',
        'transport_time_min' => 'transport_time_min',
        'transport_time_max' => 'transport_time_max',
        'product' => 'product',
        'fulfillment_type' => 'fulfillment_type',
        'vat_indicator' => 'vat_indicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'currency' => 'setCurrency',
        'condition' => 'setCondition',
        'id_unit' => 'setIdUnit',
        'note' => 'setNote',
        'listing_price' => 'setListingPrice',
        'minimum_price' => 'setMinimumPrice',
        'price' => 'setPrice',
        'id_offer' => 'setIdOffer',
        'id_product' => 'setIdProduct',
        'id_shipping_group' => 'setIdShippingGroup',
        'id_warehouse' => 'setIdWarehouse',
        'amount' => 'setAmount',
        'date_inserted_iso' => 'setDateInsertedIso',
        'date_lastchange_iso' => 'setDateLastchangeIso',
        'handling_time' => 'setHandlingTime',
        'shipping_rate' => 'setShippingRate',
        'storefront' => 'setStorefront',
        'transport_time_min' => 'setTransportTimeMin',
        'transport_time_max' => 'setTransportTimeMax',
        'product' => 'setProduct',
        'fulfillment_type' => 'setFulfillmentType',
        'vat_indicator' => 'setVatIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'currency' => 'getCurrency',
        'condition' => 'getCondition',
        'id_unit' => 'getIdUnit',
        'note' => 'getNote',
        'listing_price' => 'getListingPrice',
        'minimum_price' => 'getMinimumPrice',
        'price' => 'getPrice',
        'id_offer' => 'getIdOffer',
        'id_product' => 'getIdProduct',
        'id_shipping_group' => 'getIdShippingGroup',
        'id_warehouse' => 'getIdWarehouse',
        'amount' => 'getAmount',
        'date_inserted_iso' => 'getDateInsertedIso',
        'date_lastchange_iso' => 'getDateLastchangeIso',
        'handling_time' => 'getHandlingTime',
        'shipping_rate' => 'getShippingRate',
        'storefront' => 'getStorefront',
        'transport_time_min' => 'getTransportTimeMin',
        'transport_time_max' => 'getTransportTimeMax',
        'product' => 'getProduct',
        'fulfillment_type' => 'getFulfillmentType',
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
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('condition', $data ?? [], null);
        $this->setIfExists('id_unit', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('listing_price', $data ?? [], null);
        $this->setIfExists('minimum_price', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('id_offer', $data ?? [], null);
        $this->setIfExists('id_product', $data ?? [], null);
        $this->setIfExists('id_shipping_group', $data ?? [], null);
        $this->setIfExists('id_warehouse', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('date_inserted_iso', $data ?? [], null);
        $this->setIfExists('date_lastchange_iso', $data ?? [], null);
        $this->setIfExists('handling_time', $data ?? [], null);
        $this->setIfExists('shipping_rate', $data ?? [], null);
        $this->setIfExists('storefront', $data ?? [], null);
        $this->setIfExists('transport_time_min', $data ?? [], null);
        $this->setIfExists('transport_time_max', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('fulfillment_type', $data ?? [], null);
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

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['id_unit'] === null) {
            $invalidProperties[] = "'id_unit' can't be null";
        }
        if (($this->container['id_unit'] < 1)) {
            $invalidProperties[] = "invalid value for 'id_unit', must be bigger than or equal to 1.";
        }

        if ($this->container['note'] === null) {
            $invalidProperties[] = "'note' can't be null";
        }
        if ($this->container['listing_price'] === null) {
            $invalidProperties[] = "'listing_price' can't be null";
        }
        if (($this->container['listing_price'] < 1)) {
            $invalidProperties[] = "invalid value for 'listing_price', must be bigger than or equal to 1.";
        }

        if ($this->container['minimum_price'] === null) {
            $invalidProperties[] = "'minimum_price' can't be null";
        }
        if (($this->container['minimum_price'] < 1)) {
            $invalidProperties[] = "invalid value for 'minimum_price', must be bigger than or equal to 1.";
        }

        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if (($this->container['price'] < 1)) {
            $invalidProperties[] = "invalid value for 'price', must be bigger than or equal to 1.";
        }

        if ($this->container['id_offer'] === null) {
            $invalidProperties[] = "'id_offer' can't be null";
        }
        if ($this->container['id_product'] === null) {
            $invalidProperties[] = "'id_product' can't be null";
        }
        if (($this->container['id_product'] < 1)) {
            $invalidProperties[] = "invalid value for 'id_product', must be bigger than or equal to 1.";
        }

        if ($this->container['id_shipping_group'] === null) {
            $invalidProperties[] = "'id_shipping_group' can't be null";
        }
        if (($this->container['id_shipping_group'] < 1)) {
            $invalidProperties[] = "invalid value for 'id_shipping_group', must be bigger than or equal to 1.";
        }

        if ($this->container['id_warehouse'] === null) {
            $invalidProperties[] = "'id_warehouse' can't be null";
        }
        if (($this->container['id_warehouse'] < 1)) {
            $invalidProperties[] = "invalid value for 'id_warehouse', must be bigger than or equal to 1.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if ($this->container['date_inserted_iso'] === null) {
            $invalidProperties[] = "'date_inserted_iso' can't be null";
        }
        if ($this->container['date_lastchange_iso'] === null) {
            $invalidProperties[] = "'date_lastchange_iso' can't be null";
        }
        if ($this->container['handling_time'] === null) {
            $invalidProperties[] = "'handling_time' can't be null";
        }
        if (($this->container['handling_time'] > 100)) {
            $invalidProperties[] = "invalid value for 'handling_time', must be smaller than or equal to 100.";
        }

        if (($this->container['handling_time'] < 0)) {
            $invalidProperties[] = "invalid value for 'handling_time', must be bigger than or equal to 0.";
        }

        if ($this->container['shipping_rate'] === null) {
            $invalidProperties[] = "'shipping_rate' can't be null";
        }
        if (($this->container['shipping_rate'] < 0)) {
            $invalidProperties[] = "invalid value for 'shipping_rate', must be bigger than or equal to 0.";
        }

        if ($this->container['storefront'] === null) {
            $invalidProperties[] = "'storefront' can't be null";
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

        if ($this->container['fulfillment_type'] === null) {
            $invalidProperties[] = "'fulfillment_type' can't be null";
        }
        if ($this->container['vat_indicator'] === null) {
            $invalidProperties[] = "'vat_indicator' can't be null";
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
     * @return \KauflandSellerApi\Model\UnitStatuses
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \KauflandSellerApi\Model\UnitStatuses $status status
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
     * Gets currency
     *
     * @return \KauflandSellerApi\Model\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \KauflandSellerApi\Model\Currency $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return \KauflandSellerApi\Model\UnitCondition
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param \KauflandSellerApi\Model\UnitCondition $condition condition
     *
     * @return self
     */
    public function setCondition($condition)
    {
        if (is_null($condition)) {
            throw new \InvalidArgumentException('non-nullable condition cannot be null');
        }
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets id_unit
     *
     * @return int
     */
    public function getIdUnit()
    {
        return $this->container['id_unit'];
    }

    /**
     * Sets id_unit
     *
     * @param int $id_unit Internal ID of Unit, unique across all Units
     *
     * @return self
     */
    public function setIdUnit($id_unit)
    {
        if (is_null($id_unit)) {
            throw new \InvalidArgumentException('non-nullable id_unit cannot be null');
        }

        if (($id_unit < 1)) {
            throw new \InvalidArgumentException('invalid value for $id_unit when calling UnitEmbedded., must be bigger than or equal to 1.');
        }

        $this->container['id_unit'] = $id_unit;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note A note for this unit
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            array_push($this->openAPINullablesSetToNull, 'note');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('note', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets listing_price
     *
     * @return int
     */
    public function getListingPrice()
    {
        return $this->container['listing_price'];
    }

    /**
     * Sets listing_price
     *
     * @param int $listing_price Listing price, available only for Seller
     *
     * @return self
     */
    public function setListingPrice($listing_price)
    {
        if (is_null($listing_price)) {
            throw new \InvalidArgumentException('non-nullable listing_price cannot be null');
        }

        if (($listing_price < 1)) {
            throw new \InvalidArgumentException('invalid value for $listing_price when calling UnitEmbedded., must be bigger than or equal to 1.');
        }

        $this->container['listing_price'] = $listing_price;

        return $this;
    }

    /**
     * Gets minimum_price
     *
     * @return int
     */
    public function getMinimumPrice()
    {
        return $this->container['minimum_price'];
    }

    /**
     * Sets minimum_price
     *
     * @param int $minimum_price Minimum price, available only for Seller with Smart Pricing feature enabled
     *
     * @return self
     */
    public function setMinimumPrice($minimum_price)
    {
        if (is_null($minimum_price)) {
            throw new \InvalidArgumentException('non-nullable minimum_price cannot be null');
        }

        if (($minimum_price < 1)) {
            throw new \InvalidArgumentException('invalid value for $minimum_price when calling UnitEmbedded., must be bigger than or equal to 1.');
        }

        $this->container['minimum_price'] = $minimum_price;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int $price Price at which this unit will be offered on Kaufland.de
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }

        if (($price < 1)) {
            throw new \InvalidArgumentException('invalid value for $price when calling UnitEmbedded., must be bigger than or equal to 1.');
        }

        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets id_offer
     *
     * @return string
     */
    public function getIdOffer()
    {
        return $this->container['id_offer'];
    }

    /**
     * Sets id_offer
     *
     * @param string $id_offer Seller's unique ID for offer(s)
     *
     * @return self
     */
    public function setIdOffer($id_offer)
    {
        if (is_null($id_offer)) {
            array_push($this->openAPINullablesSetToNull, 'id_offer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_offer', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_offer'] = $id_offer;

        return $this;
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
     * @param int $id_product Internal ID of Product, unique across all Products
     *
     * @return self
     */
    public function setIdProduct($id_product)
    {
        if (is_null($id_product)) {
            throw new \InvalidArgumentException('non-nullable id_product cannot be null');
        }

        if (($id_product < 1)) {
            throw new \InvalidArgumentException('invalid value for $id_product when calling UnitEmbedded., must be bigger than or equal to 1.');
        }

        $this->container['id_product'] = $id_product;

        return $this;
    }

    /**
     * Gets id_shipping_group
     *
     * @return int
     */
    public function getIdShippingGroup()
    {
        return $this->container['id_shipping_group'];
    }

    /**
     * Sets id_shipping_group
     *
     * @param int $id_shipping_group ID of the shipping group
     *
     * @return self
     */
    public function setIdShippingGroup($id_shipping_group)
    {
        if (is_null($id_shipping_group)) {
            array_push($this->openAPINullablesSetToNull, 'id_shipping_group');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_shipping_group', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($id_shipping_group) && ($id_shipping_group < 1)) {
            throw new \InvalidArgumentException('invalid value for $id_shipping_group when calling UnitEmbedded., must be bigger than or equal to 1.');
        }

        $this->container['id_shipping_group'] = $id_shipping_group;

        return $this;
    }

    /**
     * Gets id_warehouse
     *
     * @return int
     */
    public function getIdWarehouse()
    {
        return $this->container['id_warehouse'];
    }

    /**
     * Sets id_warehouse
     *
     * @param int $id_warehouse ID of warehouse
     *
     * @return self
     */
    public function setIdWarehouse($id_warehouse)
    {
        if (is_null($id_warehouse)) {
            array_push($this->openAPINullablesSetToNull, 'id_warehouse');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_warehouse', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($id_warehouse) && ($id_warehouse < 1)) {
            throw new \InvalidArgumentException('invalid value for $id_warehouse when calling UnitEmbedded., must be bigger than or equal to 1.');
        }

        $this->container['id_warehouse'] = $id_warehouse;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount Amount of available Units
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

        if (($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling UnitEmbedded., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets date_inserted_iso
     *
     * @return \DateTime
     */
    public function getDateInsertedIso()
    {
        return $this->container['date_inserted_iso'];
    }

    /**
     * Sets date_inserted_iso
     *
     * @param \DateTime $date_inserted_iso DateTime when unit was created
     *
     * @return self
     */
    public function setDateInsertedIso($date_inserted_iso)
    {
        if (is_null($date_inserted_iso)) {
            throw new \InvalidArgumentException('non-nullable date_inserted_iso cannot be null');
        }
        $this->container['date_inserted_iso'] = $date_inserted_iso;

        return $this;
    }

    /**
     * Gets date_lastchange_iso
     *
     * @return \DateTime
     */
    public function getDateLastchangeIso()
    {
        return $this->container['date_lastchange_iso'];
    }

    /**
     * Sets date_lastchange_iso
     *
     * @param \DateTime $date_lastchange_iso DateTime when unit has been edited for the last time
     *
     * @return self
     */
    public function setDateLastchangeIso($date_lastchange_iso)
    {
        if (is_null($date_lastchange_iso)) {
            throw new \InvalidArgumentException('non-nullable date_lastchange_iso cannot be null');
        }
        $this->container['date_lastchange_iso'] = $date_lastchange_iso;

        return $this;
    }

    /**
     * Gets handling_time
     *
     * @return int
     */
    public function getHandlingTime()
    {
        return $this->container['handling_time'];
    }

    /**
     * Sets handling_time
     *
     * @param int $handling_time handling time
     *
     * @return self
     */
    public function setHandlingTime($handling_time)
    {
        if (is_null($handling_time)) {
            throw new \InvalidArgumentException('non-nullable handling_time cannot be null');
        }

        if (($handling_time > 100)) {
            throw new \InvalidArgumentException('invalid value for $handling_time when calling UnitEmbedded., must be smaller than or equal to 100.');
        }
        if (($handling_time < 0)) {
            throw new \InvalidArgumentException('invalid value for $handling_time when calling UnitEmbedded., must be bigger than or equal to 0.');
        }

        $this->container['handling_time'] = $handling_time;

        return $this;
    }

    /**
     * Gets shipping_rate
     *
     * @return int
     */
    public function getShippingRate()
    {
        return $this->container['shipping_rate'];
    }

    /**
     * Sets shipping_rate
     *
     * @param int $shipping_rate shipping_rate
     *
     * @return self
     */
    public function setShippingRate($shipping_rate)
    {
        if (is_null($shipping_rate)) {
            throw new \InvalidArgumentException('non-nullable shipping_rate cannot be null');
        }

        if (($shipping_rate < 0)) {
            throw new \InvalidArgumentException('invalid value for $shipping_rate when calling UnitEmbedded., must be bigger than or equal to 0.');
        }

        $this->container['shipping_rate'] = $shipping_rate;

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
     * @param int $transport_time_min Transport time minimum
     *
     * @return self
     */
    public function setTransportTimeMin($transport_time_min)
    {
        if (is_null($transport_time_min)) {
            throw new \InvalidArgumentException('non-nullable transport_time_min cannot be null');
        }

        if (($transport_time_min < 1)) {
            throw new \InvalidArgumentException('invalid value for $transport_time_min when calling UnitEmbedded., must be bigger than or equal to 1.');
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
     * @param int $transport_time_max Transport time maximum
     *
     * @return self
     */
    public function setTransportTimeMax($transport_time_max)
    {
        if (is_null($transport_time_max)) {
            throw new \InvalidArgumentException('non-nullable transport_time_max cannot be null');
        }

        if (($transport_time_max < 1)) {
            throw new \InvalidArgumentException('invalid value for $transport_time_max when calling UnitEmbedded., must be bigger than or equal to 1.');
        }

        $this->container['transport_time_max'] = $transport_time_max;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \KauflandSellerApi\Model\Product|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \KauflandSellerApi\Model\Product|null $product product
     *
     * @return self
     */
    public function setProduct($product)
    {
        if (is_null($product)) {
            throw new \InvalidArgumentException('non-nullable product cannot be null');
        }
        $this->container['product'] = $product;

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
     * Gets vat_indicator
     *
     * @return \KauflandSellerApi\Model\VatIndicator
     */
    public function getVatIndicator()
    {
        return $this->container['vat_indicator'];
    }

    /**
     * Sets vat_indicator
     *
     * @param \KauflandSellerApi\Model\VatIndicator $vat_indicator vat_indicator
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

