<?php
/**
 * ProductDataImportFileResponse
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
 * ProductDataImportFileResponse Class Doc Comment
 *
 * @category Class
 * @package  KauflandSellerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProductDataImportFileResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductDataImportFileResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id_import_file' => 'int',
        'uri' => 'string',
        'status' => '\KauflandSellerApi\Model\ProductDataImportFileStatus',
        'note' => 'string',
        'total_lines' => 'float',
        'current_line' => 'float',
        'ts_created' => 'string',
        'ts_updated' => 'string',
        'ts_last_row_updated' => 'string',
        'ts_completed' => 'string',
        'error_count' => 'float',
        'async_import_done' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id_import_file' => 'int64',
        'uri' => null,
        'status' => null,
        'note' => null,
        'total_lines' => 'double',
        'current_line' => 'double',
        'ts_created' => null,
        'ts_updated' => null,
        'ts_last_row_updated' => null,
        'ts_completed' => null,
        'error_count' => 'double',
        'async_import_done' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id_import_file' => false,
        'uri' => false,
        'status' => false,
        'note' => true,
        'total_lines' => false,
        'current_line' => false,
        'ts_created' => false,
        'ts_updated' => true,
        'ts_last_row_updated' => true,
        'ts_completed' => true,
        'error_count' => false,
        'async_import_done' => false
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
        'id_import_file' => 'id_import_file',
        'uri' => 'uri',
        'status' => 'status',
        'note' => 'note',
        'total_lines' => 'total_lines',
        'current_line' => 'current_line',
        'ts_created' => 'ts_created',
        'ts_updated' => 'ts_updated',
        'ts_last_row_updated' => 'ts_last_row_updated',
        'ts_completed' => 'ts_completed',
        'error_count' => 'error_count',
        'async_import_done' => 'async_import_done'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_import_file' => 'setIdImportFile',
        'uri' => 'setUri',
        'status' => 'setStatus',
        'note' => 'setNote',
        'total_lines' => 'setTotalLines',
        'current_line' => 'setCurrentLine',
        'ts_created' => 'setTsCreated',
        'ts_updated' => 'setTsUpdated',
        'ts_last_row_updated' => 'setTsLastRowUpdated',
        'ts_completed' => 'setTsCompleted',
        'error_count' => 'setErrorCount',
        'async_import_done' => 'setAsyncImportDone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_import_file' => 'getIdImportFile',
        'uri' => 'getUri',
        'status' => 'getStatus',
        'note' => 'getNote',
        'total_lines' => 'getTotalLines',
        'current_line' => 'getCurrentLine',
        'ts_created' => 'getTsCreated',
        'ts_updated' => 'getTsUpdated',
        'ts_last_row_updated' => 'getTsLastRowUpdated',
        'ts_completed' => 'getTsCompleted',
        'error_count' => 'getErrorCount',
        'async_import_done' => 'getAsyncImportDone'
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
        $this->setIfExists('id_import_file', $data ?? [], null);
        $this->setIfExists('uri', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('total_lines', $data ?? [], null);
        $this->setIfExists('current_line', $data ?? [], null);
        $this->setIfExists('ts_created', $data ?? [], null);
        $this->setIfExists('ts_updated', $data ?? [], null);
        $this->setIfExists('ts_last_row_updated', $data ?? [], null);
        $this->setIfExists('ts_completed', $data ?? [], null);
        $this->setIfExists('error_count', $data ?? [], null);
        $this->setIfExists('async_import_done', $data ?? [], null);
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

        if ($this->container['id_import_file'] === null) {
            $invalidProperties[] = "'id_import_file' can't be null";
        }
        if (($this->container['id_import_file'] < 1)) {
            $invalidProperties[] = "invalid value for 'id_import_file', must be bigger than or equal to 1.";
        }

        if ($this->container['uri'] === null) {
            $invalidProperties[] = "'uri' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['note'] === null) {
            $invalidProperties[] = "'note' can't be null";
        }
        if ($this->container['total_lines'] === null) {
            $invalidProperties[] = "'total_lines' can't be null";
        }
        if ($this->container['current_line'] === null) {
            $invalidProperties[] = "'current_line' can't be null";
        }
        if ($this->container['ts_created'] === null) {
            $invalidProperties[] = "'ts_created' can't be null";
        }
        if ($this->container['ts_updated'] === null) {
            $invalidProperties[] = "'ts_updated' can't be null";
        }
        if ($this->container['ts_last_row_updated'] === null) {
            $invalidProperties[] = "'ts_last_row_updated' can't be null";
        }
        if ($this->container['ts_completed'] === null) {
            $invalidProperties[] = "'ts_completed' can't be null";
        }
        if ($this->container['error_count'] === null) {
            $invalidProperties[] = "'error_count' can't be null";
        }
        if ($this->container['async_import_done'] === null) {
            $invalidProperties[] = "'async_import_done' can't be null";
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
     * @param int $id_import_file id_import_file
     *
     * @return self
     */
    public function setIdImportFile($id_import_file)
    {
        if (is_null($id_import_file)) {
            throw new \InvalidArgumentException('non-nullable id_import_file cannot be null');
        }

        if (($id_import_file < 1)) {
            throw new \InvalidArgumentException('invalid value for $id_import_file when calling ProductDataImportFileResponse., must be bigger than or equal to 1.');
        }

        $this->container['id_import_file'] = $id_import_file;

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
     * Gets status
     *
     * @return \KauflandSellerApi\Model\ProductDataImportFileStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \KauflandSellerApi\Model\ProductDataImportFileStatus $status status
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
     * Gets total_lines
     *
     * @return float
     */
    public function getTotalLines()
    {
        return $this->container['total_lines'];
    }

    /**
     * Sets total_lines
     *
     * @param float $total_lines total_lines
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
     * Gets current_line
     *
     * @return float
     */
    public function getCurrentLine()
    {
        return $this->container['current_line'];
    }

    /**
     * Sets current_line
     *
     * @param float $current_line current_line
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
     * Gets ts_created
     *
     * @return string
     */
    public function getTsCreated()
    {
        return $this->container['ts_created'];
    }

    /**
     * Sets ts_created
     *
     * @param string $ts_created ts_created
     *
     * @return self
     */
    public function setTsCreated($ts_created)
    {
        if (is_null($ts_created)) {
            throw new \InvalidArgumentException('non-nullable ts_created cannot be null');
        }
        $this->container['ts_created'] = $ts_created;

        return $this;
    }

    /**
     * Gets ts_updated
     *
     * @return string
     */
    public function getTsUpdated()
    {
        return $this->container['ts_updated'];
    }

    /**
     * Sets ts_updated
     *
     * @param string $ts_updated ts_updated
     *
     * @return self
     */
    public function setTsUpdated($ts_updated)
    {
        if (is_null($ts_updated)) {
            array_push($this->openAPINullablesSetToNull, 'ts_updated');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ts_updated', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ts_updated'] = $ts_updated;

        return $this;
    }

    /**
     * Gets ts_last_row_updated
     *
     * @return string
     */
    public function getTsLastRowUpdated()
    {
        return $this->container['ts_last_row_updated'];
    }

    /**
     * Sets ts_last_row_updated
     *
     * @param string $ts_last_row_updated ts_last_row_updated
     *
     * @return self
     */
    public function setTsLastRowUpdated($ts_last_row_updated)
    {
        if (is_null($ts_last_row_updated)) {
            array_push($this->openAPINullablesSetToNull, 'ts_last_row_updated');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ts_last_row_updated', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ts_last_row_updated'] = $ts_last_row_updated;

        return $this;
    }

    /**
     * Gets ts_completed
     *
     * @return string
     */
    public function getTsCompleted()
    {
        return $this->container['ts_completed'];
    }

    /**
     * Sets ts_completed
     *
     * @param string $ts_completed ts_completed
     *
     * @return self
     */
    public function setTsCompleted($ts_completed)
    {
        if (is_null($ts_completed)) {
            array_push($this->openAPINullablesSetToNull, 'ts_completed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ts_completed', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ts_completed'] = $ts_completed;

        return $this;
    }

    /**
     * Gets error_count
     *
     * @return float
     */
    public function getErrorCount()
    {
        return $this->container['error_count'];
    }

    /**
     * Sets error_count
     *
     * @param float $error_count error_count
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
     * Gets async_import_done
     *
     * @return float
     */
    public function getAsyncImportDone()
    {
        return $this->container['async_import_done'];
    }

    /**
     * Sets async_import_done
     *
     * @param float $async_import_done async_import_done
     *
     * @return self
     */
    public function setAsyncImportDone($async_import_done)
    {
        if (is_null($async_import_done)) {
            throw new \InvalidArgumentException('non-nullable async_import_done cannot be null');
        }
        $this->container['async_import_done'] = $async_import_done;

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

