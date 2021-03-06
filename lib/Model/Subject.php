<?php
/**
 * Subject
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Search
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Subject Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Subject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Subject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'subject_id' => 'string',
        'subject_type' => 'string',
        'tax_code' => 'string',
        'address' => '\Swagger\Client\Model\AdvancedAddress',
        'company_info' => '\Swagger\Client\Model\CompanyInfo',
        'person_info' => '\Swagger\Client\Model\PersonInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'subject_id' => null,
        'subject_type' => null,
        'tax_code' => null,
        'address' => null,
        'company_info' => null,
        'person_info' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'subject_id' => 'subject_id',
        'subject_type' => 'subject_type',
        'tax_code' => 'tax_code',
        'address' => 'address',
        'company_info' => 'company_info',
        'person_info' => 'person_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subject_id' => 'setSubjectId',
        'subject_type' => 'setSubjectType',
        'tax_code' => 'setTaxCode',
        'address' => 'setAddress',
        'company_info' => 'setCompanyInfo',
        'person_info' => 'setPersonInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subject_id' => 'getSubjectId',
        'subject_type' => 'getSubjectType',
        'tax_code' => 'getTaxCode',
        'address' => 'getAddress',
        'company_info' => 'getCompanyInfo',
        'person_info' => 'getPersonInfo'
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
        return self::$swaggerModelName;
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
        $this->container['subject_id'] = isset($data['subject_id']) ? $data['subject_id'] : null;
        $this->container['subject_type'] = isset($data['subject_type']) ? $data['subject_type'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['company_info'] = isset($data['company_info']) ? $data['company_info'] : null;
        $this->container['person_info'] = isset($data['person_info']) ? $data['person_info'] : null;
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
     * Gets subject_id
     *
     * @return string
     */
    public function getSubjectId()
    {
        return $this->container['subject_id'];
    }

    /**
     * Sets subject_id
     *
     * @param string $subject_id Identificativo univoco Cerved del soggetto trovato
     *
     * @return $this
     */
    public function setSubjectId($subject_id)
    {
        $this->container['subject_id'] = $subject_id;

        return $this;
    }

    /**
     * Gets subject_type
     *
     * @return string
     */
    public function getSubjectType()
    {
        return $this->container['subject_type'];
    }

    /**
     * Sets subject_type
     *
     * @param string $subject_type Tipo del soggetto trovato (valori possibili:  \"PERSON\", \"COMPANY\", \"INDIVIDUAL_COMPANY\", \"FOREIGN\", \"OTHER\")
     *
     * @return $this
     */
    public function setSubjectType($subject_type)
    {
        $this->container['subject_type'] = $subject_type;

        return $this;
    }

    /**
     * Gets tax_code
     *
     * @return string
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param string $tax_code Codice Fiscale del soggetto trovato
     *
     * @return $this
     */
    public function setTaxCode($tax_code)
    {
        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Swagger\Client\Model\AdvancedAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Swagger\Client\Model\AdvancedAddress $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets company_info
     *
     * @return \Swagger\Client\Model\CompanyInfo
     */
    public function getCompanyInfo()
    {
        return $this->container['company_info'];
    }

    /**
     * Sets company_info
     *
     * @param \Swagger\Client\Model\CompanyInfo $company_info company_info
     *
     * @return $this
     */
    public function setCompanyInfo($company_info)
    {
        $this->container['company_info'] = $company_info;

        return $this;
    }

    /**
     * Gets person_info
     *
     * @return \Swagger\Client\Model\PersonInfo
     */
    public function getPersonInfo()
    {
        return $this->container['person_info'];
    }

    /**
     * Sets person_info
     *
     * @param \Swagger\Client\Model\PersonInfo $person_info person_info
     *
     * @return $this
     */
    public function setPersonInfo($person_info)
    {
        $this->container['person_info'] = $person_info;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


