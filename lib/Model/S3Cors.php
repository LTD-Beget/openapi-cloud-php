<?php
/**
 * S3Cors
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
 * The version of the OpenAPI document: v1.4.1
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
 * S3Cors Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class S3Cors implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'S3_Cors';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'http_method' => 'string[]',
        'access_control_allow_headers' => 'string[]',
        'access_control_expose_headers' => 'string[]',
        'cache_ttl' => 'string',
        'fqdn' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uint32',
        'http_method' => null,
        'access_control_allow_headers' => null,
        'access_control_expose_headers' => null,
        'cache_ttl' => null,
        'fqdn' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'http_method' => false,
		'access_control_allow_headers' => false,
		'access_control_expose_headers' => false,
		'cache_ttl' => false,
		'fqdn' => false
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
        'id' => 'id',
        'http_method' => 'http_method',
        'access_control_allow_headers' => 'access_control_allow_headers',
        'access_control_expose_headers' => 'access_control_expose_headers',
        'cache_ttl' => 'cache_ttl',
        'fqdn' => 'fqdn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'http_method' => 'setHttpMethod',
        'access_control_allow_headers' => 'setAccessControlAllowHeaders',
        'access_control_expose_headers' => 'setAccessControlExposeHeaders',
        'cache_ttl' => 'setCacheTtl',
        'fqdn' => 'setFqdn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'http_method' => 'getHttpMethod',
        'access_control_allow_headers' => 'getAccessControlAllowHeaders',
        'access_control_expose_headers' => 'getAccessControlExposeHeaders',
        'cache_ttl' => 'getCacheTtl',
        'fqdn' => 'getFqdn'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('http_method', $data ?? [], null);
        $this->setIfExists('access_control_allow_headers', $data ?? [], null);
        $this->setIfExists('access_control_expose_headers', $data ?? [], null);
        $this->setIfExists('cache_ttl', $data ?? [], null);
        $this->setIfExists('fqdn', $data ?? [], null);
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets http_method
     *
     * @return string[]|null
     */
    public function getHttpMethod()
    {
        return $this->container['http_method'];
    }

    /**
     * Sets http_method
     *
     * @param string[]|null $http_method http_method
     *
     * @return self
     */
    public function setHttpMethod($http_method)
    {

        if (is_null($http_method)) {
            throw new \InvalidArgumentException('non-nullable http_method cannot be null');
        }

        $this->container['http_method'] = $http_method;

        return $this;
    }

    /**
     * Gets access_control_allow_headers
     *
     * @return string[]|null
     */
    public function getAccessControlAllowHeaders()
    {
        return $this->container['access_control_allow_headers'];
    }

    /**
     * Sets access_control_allow_headers
     *
     * @param string[]|null $access_control_allow_headers access_control_allow_headers
     *
     * @return self
     */
    public function setAccessControlAllowHeaders($access_control_allow_headers)
    {

        if (is_null($access_control_allow_headers)) {
            throw new \InvalidArgumentException('non-nullable access_control_allow_headers cannot be null');
        }

        $this->container['access_control_allow_headers'] = $access_control_allow_headers;

        return $this;
    }

    /**
     * Gets access_control_expose_headers
     *
     * @return string[]|null
     */
    public function getAccessControlExposeHeaders()
    {
        return $this->container['access_control_expose_headers'];
    }

    /**
     * Sets access_control_expose_headers
     *
     * @param string[]|null $access_control_expose_headers access_control_expose_headers
     *
     * @return self
     */
    public function setAccessControlExposeHeaders($access_control_expose_headers)
    {

        if (is_null($access_control_expose_headers)) {
            throw new \InvalidArgumentException('non-nullable access_control_expose_headers cannot be null');
        }

        $this->container['access_control_expose_headers'] = $access_control_expose_headers;

        return $this;
    }

    /**
     * Gets cache_ttl
     *
     * @return string|null
     */
    public function getCacheTtl()
    {
        return $this->container['cache_ttl'];
    }

    /**
     * Sets cache_ttl
     *
     * @param string|null $cache_ttl cache_ttl
     *
     * @return self
     */
    public function setCacheTtl($cache_ttl)
    {

        if (is_null($cache_ttl)) {
            throw new \InvalidArgumentException('non-nullable cache_ttl cannot be null');
        }

        $this->container['cache_ttl'] = $cache_ttl;

        return $this;
    }

    /**
     * Gets fqdn
     *
     * @return string|null
     */
    public function getFqdn()
    {
        return $this->container['fqdn'];
    }

    /**
     * Sets fqdn
     *
     * @param string|null $fqdn fqdn
     *
     * @return self
     */
    public function setFqdn($fqdn)
    {

        if (is_null($fqdn)) {
            throw new \InvalidArgumentException('non-nullable fqdn cannot be null');
        }

        $this->container['fqdn'] = $fqdn;

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


