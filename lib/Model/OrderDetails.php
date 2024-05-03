<?php
/**
 * OrderDetails
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
 * OrderDetails Class Doc Comment
 *
 * @category Class
 * @package  KauflandSellerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id_order' => 'string',
        'ts_created_iso' => '\DateTime',
        'is_marketplace_deemed_supplier' => 'bool',
        'storefront' => '\KauflandSellerApi\Model\Storefront',
        'fulfillment_type' => '\KauflandSellerApi\Model\FulfillmentType',
        'order_units' => '\KauflandSellerApi\Model\OrderDetailsOrderUnitsInner[]',
        'billing_address' => '\KauflandSellerApi\Model\Address',
        'shipping_address' => '\KauflandSellerApi\Model\Address',
        'buyer' => '\KauflandSellerApi\Model\Buyer',
        'order_invoices' => '\KauflandSellerApi\Model\OrderInvoice[]',
        'delivery' => '\KauflandSellerApi\Model\Delivery'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id_order' => null,
        'ts_created_iso' => 'date-time',
        'is_marketplace_deemed_supplier' => null,
        'storefront' => null,
        'fulfillment_type' => null,
        'order_units' => null,
        'billing_address' => null,
        'shipping_address' => null,
        'buyer' => null,
        'order_invoices' => null,
        'delivery' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id_order' => false,
        'ts_created_iso' => false,
        'is_marketplace_deemed_supplier' => false,
        'storefront' => false,
        'fulfillment_type' => false,
        'order_units' => false,
        'billing_address' => true,
        'shipping_address' => true,
        'buyer' => true,
        'order_invoices' => true,
        'delivery' => false
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
        'id_order' => 'id_order',
        'ts_created_iso' => 'ts_created_iso',
        'is_marketplace_deemed_supplier' => 'is_marketplace_deemed_supplier',
        'storefront' => 'storefront',
        'fulfillment_type' => 'fulfillment_type',
        'order_units' => 'order_units',
        'billing_address' => 'billing_address',
        'shipping_address' => 'shipping_address',
        'buyer' => 'buyer',
        'order_invoices' => 'order_invoices',
        'delivery' => 'delivery'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_order' => 'setIdOrder',
        'ts_created_iso' => 'setTsCreatedIso',
        'is_marketplace_deemed_supplier' => 'setIsMarketplaceDeemedSupplier',
        'storefront' => 'setStorefront',
        'fulfillment_type' => 'setFulfillmentType',
        'order_units' => 'setOrderUnits',
        'billing_address' => 'setBillingAddress',
        'shipping_address' => 'setShippingAddress',
        'buyer' => 'setBuyer',
        'order_invoices' => 'setOrderInvoices',
        'delivery' => 'setDelivery'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_order' => 'getIdOrder',
        'ts_created_iso' => 'getTsCreatedIso',
        'is_marketplace_deemed_supplier' => 'getIsMarketplaceDeemedSupplier',
        'storefront' => 'getStorefront',
        'fulfillment_type' => 'getFulfillmentType',
        'order_units' => 'getOrderUnits',
        'billing_address' => 'getBillingAddress',
        'shipping_address' => 'getShippingAddress',
        'buyer' => 'getBuyer',
        'order_invoices' => 'getOrderInvoices',
        'delivery' => 'getDelivery'
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
        $this->setIfExists('id_order', $data ?? [], null);
        $this->setIfExists('ts_created_iso', $data ?? [], null);
        $this->setIfExists('is_marketplace_deemed_supplier', $data ?? [], null);
        $this->setIfExists('storefront', $data ?? [], null);
        $this->setIfExists('fulfillment_type', $data ?? [], null);
        $this->setIfExists('order_units', $data ?? [], null);
        $this->setIfExists('billing_address', $data ?? [], null);
        $this->setIfExists('shipping_address', $data ?? [], null);
        $this->setIfExists('buyer', $data ?? [], null);
        $this->setIfExists('order_invoices', $data ?? [], null);
        $this->setIfExists('delivery', $data ?? [], null);
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

        if ($this->container['id_order'] === null) {
            $invalidProperties[] = "'id_order' can't be null";
        }
        if ($this->container['ts_created_iso'] === null) {
            $invalidProperties[] = "'ts_created_iso' can't be null";
        }
        if ($this->container['is_marketplace_deemed_supplier'] === null) {
            $invalidProperties[] = "'is_marketplace_deemed_supplier' can't be null";
        }
        if ($this->container['storefront'] === null) {
            $invalidProperties[] = "'storefront' can't be null";
        }
        if ($this->container['fulfillment_type'] === null) {
            $invalidProperties[] = "'fulfillment_type' can't be null";
        }
        if ($this->container['order_units'] === null) {
            $invalidProperties[] = "'order_units' can't be null";
        }
        if ($this->container['billing_address'] === null) {
            $invalidProperties[] = "'billing_address' can't be null";
        }
        if ($this->container['shipping_address'] === null) {
            $invalidProperties[] = "'shipping_address' can't be null";
        }
        if ($this->container['buyer'] === null) {
            $invalidProperties[] = "'buyer' can't be null";
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
     * Gets id_order
     *
     * @return string
     */
    public function getIdOrder()
    {
        return $this->container['id_order'];
    }

    /**
     * Sets id_order
     *
     * @param string $id_order id_order
     *
     * @return self
     */
    public function setIdOrder($id_order)
    {
        if (is_null($id_order)) {
            throw new \InvalidArgumentException('non-nullable id_order cannot be null');
        }
        $this->container['id_order'] = $id_order;

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
     * @param \DateTime $ts_created_iso ts_created_iso
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
     * Gets is_marketplace_deemed_supplier
     *
     * @return bool
     */
    public function getIsMarketplaceDeemedSupplier()
    {
        return $this->container['is_marketplace_deemed_supplier'];
    }

    /**
     * Sets is_marketplace_deemed_supplier
     *
     * @param bool $is_marketplace_deemed_supplier is_marketplace_deemed_supplier
     *
     * @return self
     */
    public function setIsMarketplaceDeemedSupplier($is_marketplace_deemed_supplier)
    {
        if (is_null($is_marketplace_deemed_supplier)) {
            throw new \InvalidArgumentException('non-nullable is_marketplace_deemed_supplier cannot be null');
        }
        $this->container['is_marketplace_deemed_supplier'] = $is_marketplace_deemed_supplier;

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
     * Gets order_units
     *
     * @return \KauflandSellerApi\Model\OrderDetailsOrderUnitsInner[]
     */
    public function getOrderUnits()
    {
        return $this->container['order_units'];
    }

    /**
     * Sets order_units
     *
     * @param \KauflandSellerApi\Model\OrderDetailsOrderUnitsInner[] $order_units order_units
     *
     * @return self
     */
    public function setOrderUnits($order_units)
    {
        if (is_null($order_units)) {
            throw new \InvalidArgumentException('non-nullable order_units cannot be null');
        }
        $this->container['order_units'] = $order_units;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \KauflandSellerApi\Model\Address
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \KauflandSellerApi\Model\Address $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        if (is_null($billing_address)) {
            array_push($this->openAPINullablesSetToNull, 'billing_address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_address', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \KauflandSellerApi\Model\Address
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \KauflandSellerApi\Model\Address $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address)
    {
        if (is_null($shipping_address)) {
            array_push($this->openAPINullablesSetToNull, 'shipping_address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipping_address', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \KauflandSellerApi\Model\Buyer
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \KauflandSellerApi\Model\Buyer $buyer buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        if (is_null($buyer)) {
            array_push($this->openAPINullablesSetToNull, 'buyer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('buyer', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets order_invoices
     *
     * @return \KauflandSellerApi\Model\OrderInvoice[]|null
     */
    public function getOrderInvoices()
    {
        return $this->container['order_invoices'];
    }

    /**
     * Sets order_invoices
     *
     * @param \KauflandSellerApi\Model\OrderInvoice[]|null $order_invoices order_invoices
     *
     * @return self
     */
    public function setOrderInvoices($order_invoices)
    {
        if (is_null($order_invoices)) {
            array_push($this->openAPINullablesSetToNull, 'order_invoices');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('order_invoices', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['order_invoices'] = $order_invoices;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return \KauflandSellerApi\Model\Delivery|null
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param \KauflandSellerApi\Model\Delivery|null $delivery delivery
     *
     * @return self
     */
    public function setDelivery($delivery)
    {
        if (is_null($delivery)) {
            throw new \InvalidArgumentException('non-nullable delivery cannot be null');
        }
        $this->container['delivery'] = $delivery;

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

