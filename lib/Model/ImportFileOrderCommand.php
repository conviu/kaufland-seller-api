<?php
/**
 * ImportFileOrderCommand
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
 * ImportFileOrderCommand Class Doc Comment
 *
 * @category Class
 * @package  KauflandSellerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ImportFileOrderCommand implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImportFileOrderCommand';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'current_line' => 'int',
        'error_count' => 'int',
        'id_import_file' => 'int',
        'note' => 'string',
        'status' => '\KauflandSellerApi\Model\ImportStatus',
        'total_lines' => 'int',
        'ts_completed_iso' => '\DateTime',
        'ts_created_iso' => '\DateTime',
        'ts_last_row_updated_iso' => '\DateTime',
        'ts_updated_iso' => '\DateTime',
        'type' => '\KauflandSellerApi\Model\ImportType',
        'uri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'current_line' => 'int32',
        'error_count' => 'int32',
        'id_import_file' => 'int64',
        'note' => null,
        'status' => null,
        'total_lines' => 'int32',
        'ts_completed_iso' => 'date-time',
        'ts_created_iso' => 'date-time',
        'ts_last_row_updated_iso' => 'date-time',
        'ts_updated_iso' => 'date-time',
        'type' => null,
        'uri' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'current_line' => false,
        'error_count' => false,
        'id_import_file' => false,
        'note' => false,
        'status' => false,
        'total_lines' => false,
        'ts_completed_iso' => false,
        'ts_created_iso' => false,
        'ts_last_row_updated_iso' => false,
        'ts_updated_iso' => false,
        'type' => false,
        'uri' => false
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
        'current_line' => 'current_line',
        'error_count' => 'error_count',
        'id_import_file' => 'id_import_file',
        'note' => 'note',
        'status' => 'status',
        'total_lines' => 'total_lines',
        'ts_completed_iso' => 'ts_completed_iso',
        'ts_created_iso' => 'ts_created_iso',
        'ts_last_row_updated_iso' => 'ts_last_row_updated_iso',
        'ts_updated_iso' => 'ts_updated_iso',
        'type' => 'type',
        'uri' => 'uri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_line' => 'setCurrentLine',
        'error_count' => 'setErrorCount',
        'id_import_file' => 'setIdImportFile',
        'note' => 'setNote',
        'status' => 'setStatus',
        'total_lines' => 'setTotalLines',
        'ts_completed_iso' => 'setTsCompletedIso',
        'ts_created_iso' => 'setTsCreatedIso',
        'ts_last_row_updated_iso' => 'setTsLastRowUpdatedIso',
        'ts_updated_iso' => 'setTsUpdatedIso',
        'type' => 'setType',
        'uri' => 'setUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_line' => 'getCurrentLine',
        'error_count' => 'getErrorCount',
        'id_import_file' => 'getIdImportFile',
        'note' => 'getNote',
        'status' => 'getStatus',
        'total_lines' => 'getTotalLines',
        'ts_completed_iso' => 'getTsCompletedIso',
        'ts_created_iso' => 'getTsCreatedIso',
        'ts_last_row_updated_iso' => 'getTsLastRowUpdatedIso',
        'ts_updated_iso' => 'getTsUpdatedIso',
        'type' => 'getType',
        'uri' => 'getUri'
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
        $this->setIfExists('current_line', $data ?? [], null);
        $this->setIfExists('error_count', $data ?? [], null);
        $this->setIfExists('id_import_file', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('total_lines', $data ?? [], null);
        $this->setIfExists('ts_completed_iso', $data ?? [], null);
        $this->setIfExists('ts_created_iso', $data ?? [], null);
        $this->setIfExists('ts_last_row_updated_iso', $data ?? [], null);
        $this->setIfExists('ts_updated_iso', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('uri', $data ?? [], null);
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

        if ($this->container['current_line'] === null) {
            $invalidProperties[] = "'current_line' can't be null";
        }
        if ($this->container['error_count'] === null) {
            $invalidProperties[] = "'error_count' can't be null";
        }
        if ($this->container['id_import_file'] === null) {
            $invalidProperties[] = "'id_import_file' can't be null";
        }
        if (($this->container['id_import_file'] < 1)) {
            $invalidProperties[] = "invalid value for 'id_import_file', must be bigger than or equal to 1.";
        }

        if ($this->container['note'] === null) {
            $invalidProperties[] = "'note' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['total_lines'] === null) {
            $invalidProperties[] = "'total_lines' can't be null";
        }
        if ($this->container['ts_completed_iso'] === null) {
            $invalidProperties[] = "'ts_completed_iso' can't be null";
        }
        if ($this->container['ts_created_iso'] === null) {
            $invalidProperties[] = "'ts_created_iso' can't be null";
        }
        if ($this->container['ts_last_row_updated_iso'] === null) {
            $invalidProperties[] = "'ts_last_row_updated_iso' can't be null";
        }
        if ($this->container['ts_updated_iso'] === null) {
            $invalidProperties[] = "'ts_updated_iso' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['uri'] === null) {
            $invalidProperties[] = "'uri' can't be null";
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
     * Gets current_line
     *
     * @return int
     */
    public function getCurrentLine()
    {
        return $this->container['current_line'];
    }

    /**
     * Sets current_line
     *
     * @param int $current_line current_line
     *
     * @return self
     */
    public function setCurrentLine($current_line)
    {
        if (is_null($current_line)) {
            throw new \InvalidArgumentException('non-nullable current_line cannot be null');
        }
        $this->container['current_line'] = $current_line;

        return $this;
    }

    /**
     * Gets error_count
     *
     * @return int
     */
    public function getErrorCount()
    {
        return $this->container['error_count'];
    }

    /**
     * Sets error_count
     *
     * @param int $error_count error_count
     *
     * @return self
     */
    public function setErrorCount($error_count)
    {
        if (is_null($error_count)) {
            throw new \InvalidArgumentException('non-nullable error_count cannot be null');
        }
        $this->container['error_count'] = $error_count;

        return $this;
    }

    /**
     * Gets id_import_file
     *
     * @return int
     */
    public function getIdImportFile()
    {
        return $this->container['id_import_file'];
    }

    /**
     * Sets id_import_file
     *
     * @param int $id_import_file Internal ID of Import File, unique across all Import Files
     *
     * @return self
     */
    public function setIdImportFile($id_import_file)
    {
        if (is_null($id_import_file)) {
            throw new \InvalidArgumentException('non-nullable id_import_file cannot be null');
        }

        if (($id_import_file < 1)) {
            throw new \InvalidArgumentException('invalid value for $id_import_file when calling ImportFileOrderCommand., must be bigger than or equal to 1.');
        }

        $this->container['id_import_file'] = $id_import_file;

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
     * @param string $note note
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
     * Gets status
     *
     * @return \KauflandSellerApi\Model\ImportStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \KauflandSellerApi\Model\ImportStatus $status status
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
     * Gets total_lines
     *
     * @return int
     */
    public function getTotalLines()
    {
        return $this->container['total_lines'];
    }

    /**
     * Sets total_lines
     *
     * @param int $total_lines total_lines
     *
     * @return self
     */
    public function setTotalLines($total_lines)
    {
        if (is_null($total_lines)) {
            throw new \InvalidArgumentException('non-nullable total_lines cannot be null');
        }
        $this->container['total_lines'] = $total_lines;

        return $this;
    }

    /**
     * Gets ts_completed_iso
     *
     * @return \DateTime
     */
    public function getTsCompletedIso()
    {
        return $this->container['ts_completed_iso'];
    }

    /**
     * Sets ts_completed_iso
     *
     * @param \DateTime $ts_completed_iso ts_completed_iso
     *
     * @return self
     */
    public function setTsCompletedIso($ts_completed_iso)
    {
        if (is_null($ts_completed_iso)) {
            throw new \InvalidArgumentException('non-nullable ts_completed_iso cannot be null');
        }
        $this->container['ts_completed_iso'] = $ts_completed_iso;

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
     * Gets ts_last_row_updated_iso
     *
     * @return \DateTime
     */
    public function getTsLastRowUpdatedIso()
    {
        return $this->container['ts_last_row_updated_iso'];
    }

    /**
     * Sets ts_last_row_updated_iso
     *
     * @param \DateTime $ts_last_row_updated_iso ts_last_row_updated_iso
     *
     * @return self
     */
    public function setTsLastRowUpdatedIso($ts_last_row_updated_iso)
    {
        if (is_null($ts_last_row_updated_iso)) {
            throw new \InvalidArgumentException('non-nullable ts_last_row_updated_iso cannot be null');
        }
        $this->container['ts_last_row_updated_iso'] = $ts_last_row_updated_iso;

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
     * @param \DateTime $ts_updated_iso ts_updated_iso
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
     * Gets type
     *
     * @return \KauflandSellerApi\Model\ImportType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \KauflandSellerApi\Model\ImportType $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string $uri uri
     *
     * @return self
     */
    public function setUri($uri)
    {
        if (is_null($uri)) {
            throw new \InvalidArgumentException('non-nullable uri cannot be null');
        }
        $this->container['uri'] = $uri;

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

