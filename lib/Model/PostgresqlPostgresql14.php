<?php
/**
 * PostgresqlPostgresql14
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API Управляемых сервисов
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1.4.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PostgresqlPostgresql14 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostgresqlPostgresql14 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Postgresql_Postgresql14';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'configuration' => '\OpenAPI\Client\Model\PostgresqlPostgresql14Configuration',
        'host' => 'string',
        'port' => 'int',
        'address_info' => '\OpenAPI\Client\Model\StructuresAddressInfo',
        'webui_url' => 'string',
        'disk_used' => 'string',
        'disk_left' => 'string',
        'read_only' => 'bool',
        'webui_installing' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'configuration' => null,
        'host' => null,
        'port' => 'uint32',
        'address_info' => null,
        'webui_url' => null,
        'disk_used' => null,
        'disk_left' => null,
        'read_only' => null,
        'webui_installing' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'configuration' => false,
		'host' => false,
		'port' => false,
		'address_info' => false,
		'webui_url' => false,
		'disk_used' => false,
		'disk_left' => false,
		'read_only' => false,
		'webui_installing' => false
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
        'configuration' => 'configuration',
        'host' => 'host',
        'port' => 'port',
        'address_info' => 'address_info',
        'webui_url' => 'webui_url',
        'disk_used' => 'disk_used',
        'disk_left' => 'disk_left',
        'read_only' => 'read_only',
        'webui_installing' => 'webui_installing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'configuration' => 'setConfiguration',
        'host' => 'setHost',
        'port' => 'setPort',
        'address_info' => 'setAddressInfo',
        'webui_url' => 'setWebuiUrl',
        'disk_used' => 'setDiskUsed',
        'disk_left' => 'setDiskLeft',
        'read_only' => 'setReadOnly',
        'webui_installing' => 'setWebuiInstalling'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'configuration' => 'getConfiguration',
        'host' => 'getHost',
        'port' => 'getPort',
        'address_info' => 'getAddressInfo',
        'webui_url' => 'getWebuiUrl',
        'disk_used' => 'getDiskUsed',
        'disk_left' => 'getDiskLeft',
        'read_only' => 'getReadOnly',
        'webui_installing' => 'getWebuiInstalling'
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
        $this->setIfExists('configuration', $data ?? [], null);
        $this->setIfExists('host', $data ?? [], null);
        $this->setIfExists('port', $data ?? [], null);
        $this->setIfExists('address_info', $data ?? [], null);
        $this->setIfExists('webui_url', $data ?? [], null);
        $this->setIfExists('disk_used', $data ?? [], null);
        $this->setIfExists('disk_left', $data ?? [], null);
        $this->setIfExists('read_only', $data ?? [], null);
        $this->setIfExists('webui_installing', $data ?? [], null);
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
     * Gets configuration
     *
     * @return \OpenAPI\Client\Model\PostgresqlPostgresql14Configuration|null
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \OpenAPI\Client\Model\PostgresqlPostgresql14Configuration|null $configuration configuration
     *
     * @return self
     */
    public function setConfiguration($configuration)
    {

        if (is_null($configuration)) {
            throw new \InvalidArgumentException('non-nullable configuration cannot be null');
        }

        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets host
     *
     * @return string|null
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string|null $host host
     *
     * @return self
     */
    public function setHost($host)
    {

        if (is_null($host)) {
            throw new \InvalidArgumentException('non-nullable host cannot be null');
        }

        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets port
     *
     * @return int|null
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param int|null $port port
     *
     * @return self
     */
    public function setPort($port)
    {

        if (is_null($port)) {
            throw new \InvalidArgumentException('non-nullable port cannot be null');
        }

        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets address_info
     *
     * @return \OpenAPI\Client\Model\StructuresAddressInfo|null
     */
    public function getAddressInfo()
    {
        return $this->container['address_info'];
    }

    /**
     * Sets address_info
     *
     * @param \OpenAPI\Client\Model\StructuresAddressInfo|null $address_info address_info
     *
     * @return self
     */
    public function setAddressInfo($address_info)
    {

        if (is_null($address_info)) {
            throw new \InvalidArgumentException('non-nullable address_info cannot be null');
        }

        $this->container['address_info'] = $address_info;

        return $this;
    }

    /**
     * Gets webui_url
     *
     * @return string|null
     */
    public function getWebuiUrl()
    {
        return $this->container['webui_url'];
    }

    /**
     * Sets webui_url
     *
     * @param string|null $webui_url webui_url
     *
     * @return self
     */
    public function setWebuiUrl($webui_url)
    {

        if (is_null($webui_url)) {
            throw new \InvalidArgumentException('non-nullable webui_url cannot be null');
        }

        $this->container['webui_url'] = $webui_url;

        return $this;
    }

    /**
     * Gets disk_used
     *
     * @return string|null
     */
    public function getDiskUsed()
    {
        return $this->container['disk_used'];
    }

    /**
     * Sets disk_used
     *
     * @param string|null $disk_used disk_used
     *
     * @return self
     */
    public function setDiskUsed($disk_used)
    {

        if (is_null($disk_used)) {
            throw new \InvalidArgumentException('non-nullable disk_used cannot be null');
        }

        $this->container['disk_used'] = $disk_used;

        return $this;
    }

    /**
     * Gets disk_left
     *
     * @return string|null
     */
    public function getDiskLeft()
    {
        return $this->container['disk_left'];
    }

    /**
     * Sets disk_left
     *
     * @param string|null $disk_left disk_left
     *
     * @return self
     */
    public function setDiskLeft($disk_left)
    {

        if (is_null($disk_left)) {
            throw new \InvalidArgumentException('non-nullable disk_left cannot be null');
        }

        $this->container['disk_left'] = $disk_left;

        return $this;
    }

    /**
     * Gets read_only
     *
     * @return bool|null
     */
    public function getReadOnly()
    {
        return $this->container['read_only'];
    }

    /**
     * Sets read_only
     *
     * @param bool|null $read_only read_only
     *
     * @return self
     */
    public function setReadOnly($read_only)
    {

        if (is_null($read_only)) {
            throw new \InvalidArgumentException('non-nullable read_only cannot be null');
        }

        $this->container['read_only'] = $read_only;

        return $this;
    }

    /**
     * Gets webui_installing
     *
     * @return bool|null
     */
    public function getWebuiInstalling()
    {
        return $this->container['webui_installing'];
    }

    /**
     * Sets webui_installing
     *
     * @param bool|null $webui_installing webui_installing
     *
     * @return self
     */
    public function setWebuiInstalling($webui_installing)
    {

        if (is_null($webui_installing)) {
            throw new \InvalidArgumentException('non-nullable webui_installing cannot be null');
        }

        $this->container['webui_installing'] = $webui_installing;

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


