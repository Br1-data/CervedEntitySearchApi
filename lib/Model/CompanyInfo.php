<?php
/**
 * CompanyInfo
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
 * CompanyInfo Class Doc Comment
 *
 * @category Class
 * @description Info della società trovata
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanyInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'legal_form' => '\Swagger\Client\Model\LegalForm',
        'activity_status' => '\Swagger\Client\Model\ActivityStatus',
        'business_name' => 'string',
        'economic_activity' => '\Swagger\Client\Model\EconomicActivity',
        'head_office' => 'bool',
        'lei_code' => 'string',
        'operational_flag' => 'bool',
        'public_administration' => '\Swagger\Client\Model\PublicAdministration',
        'rea_code' => '\Swagger\Client\Model\Rea',
        'vat_number' => 'string',
        'no_rea_data' => '\Swagger\Client\Model\AdvancedNoREAData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'legal_form' => null,
        'activity_status' => null,
        'business_name' => null,
        'economic_activity' => null,
        'head_office' => null,
        'lei_code' => null,
        'operational_flag' => null,
        'public_administration' => null,
        'rea_code' => null,
        'vat_number' => null,
        'no_rea_data' => null
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
        'legal_form' => 'legal_form',
        'activity_status' => 'activity_status',
        'business_name' => 'business_name',
        'economic_activity' => 'economic_activity',
        'head_office' => 'head_office',
        'lei_code' => 'lei_code',
        'operational_flag' => 'operational_flag',
        'public_administration' => 'public_administration',
        'rea_code' => 'rea_code',
        'vat_number' => 'vat_number',
        'no_rea_data' => 'no_rea_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'legal_form' => 'setLegalForm',
        'activity_status' => 'setActivityStatus',
        'business_name' => 'setBusinessName',
        'economic_activity' => 'setEconomicActivity',
        'head_office' => 'setHeadOffice',
        'lei_code' => 'setLeiCode',
        'operational_flag' => 'setOperationalFlag',
        'public_administration' => 'setPublicAdministration',
        'rea_code' => 'setReaCode',
        'vat_number' => 'setVatNumber',
        'no_rea_data' => 'setNoReaData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'legal_form' => 'getLegalForm',
        'activity_status' => 'getActivityStatus',
        'business_name' => 'getBusinessName',
        'economic_activity' => 'getEconomicActivity',
        'head_office' => 'getHeadOffice',
        'lei_code' => 'getLeiCode',
        'operational_flag' => 'getOperationalFlag',
        'public_administration' => 'getPublicAdministration',
        'rea_code' => 'getReaCode',
        'vat_number' => 'getVatNumber',
        'no_rea_data' => 'getNoReaData'
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
        $this->container['legal_form'] = isset($data['legal_form']) ? $data['legal_form'] : null;
        $this->container['activity_status'] = isset($data['activity_status']) ? $data['activity_status'] : null;
        $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
        $this->container['economic_activity'] = isset($data['economic_activity']) ? $data['economic_activity'] : null;
        $this->container['head_office'] = isset($data['head_office']) ? $data['head_office'] : null;
        $this->container['lei_code'] = isset($data['lei_code']) ? $data['lei_code'] : null;
        $this->container['operational_flag'] = isset($data['operational_flag']) ? $data['operational_flag'] : null;
        $this->container['public_administration'] = isset($data['public_administration']) ? $data['public_administration'] : null;
        $this->container['rea_code'] = isset($data['rea_code']) ? $data['rea_code'] : null;
        $this->container['vat_number'] = isset($data['vat_number']) ? $data['vat_number'] : null;
        $this->container['no_rea_data'] = isset($data['no_rea_data']) ? $data['no_rea_data'] : null;
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
     * Gets legal_form
     *
     * @return \Swagger\Client\Model\LegalForm
     */
    public function getLegalForm()
    {
        return $this->container['legal_form'];
    }

    /**
     * Sets legal_form
     *
     * @param \Swagger\Client\Model\LegalForm $legal_form legal_form
     *
     * @return $this
     */
    public function setLegalForm($legal_form)
    {
        $this->container['legal_form'] = $legal_form;

        return $this;
    }

    /**
     * Gets activity_status
     *
     * @return \Swagger\Client\Model\ActivityStatus
     */
    public function getActivityStatus()
    {
        return $this->container['activity_status'];
    }

    /**
     * Sets activity_status
     *
     * @param \Swagger\Client\Model\ActivityStatus $activity_status activity_status
     *
     * @return $this
     */
    public function setActivityStatus($activity_status)
    {
        $this->container['activity_status'] = $activity_status;

        return $this;
    }

    /**
     * Gets business_name
     *
     * @return string
     */
    public function getBusinessName()
    {
        return $this->container['business_name'];
    }

    /**
     * Sets business_name
     *
     * @param string $business_name Ragione sociale del soggetto trovato
     *
     * @return $this
     */
    public function setBusinessName($business_name)
    {
        $this->container['business_name'] = $business_name;

        return $this;
    }

    /**
     * Gets economic_activity
     *
     * @return \Swagger\Client\Model\EconomicActivity
     */
    public function getEconomicActivity()
    {
        return $this->container['economic_activity'];
    }

    /**
     * Sets economic_activity
     *
     * @param \Swagger\Client\Model\EconomicActivity $economic_activity economic_activity
     *
     * @return $this
     */
    public function setEconomicActivity($economic_activity)
    {
        $this->container['economic_activity'] = $economic_activity;

        return $this;
    }

    /**
     * Gets head_office
     *
     * @return bool
     */
    public function getHeadOffice()
    {
        return $this->container['head_office'];
    }

    /**
     * Sets head_office
     *
     * @param bool $head_office Valore booleano indicante se il soggetto trovato è sede della società o no
     *
     * @return $this
     */
    public function setHeadOffice($head_office)
    {
        $this->container['head_office'] = $head_office;

        return $this;
    }

    /**
     * Gets lei_code
     *
     * @return string
     */
    public function getLeiCode()
    {
        return $this->container['lei_code'];
    }

    /**
     * Sets lei_code
     *
     * @param string $lei_code Codice LEI (Legal Entity Identifier) del soggetto trovato
     *
     * @return $this
     */
    public function setLeiCode($lei_code)
    {
        $this->container['lei_code'] = $lei_code;

        return $this;
    }

    /**
     * Gets operational_flag
     *
     * @return bool
     */
    public function getOperationalFlag()
    {
        return $this->container['operational_flag'];
    }

    /**
     * Sets operational_flag
     *
     * @param bool $operational_flag Valore booleano indicante se il soggetto trovato risulta operativo o no
     *
     * @return $this
     */
    public function setOperationalFlag($operational_flag)
    {
        $this->container['operational_flag'] = $operational_flag;

        return $this;
    }

    /**
     * Gets public_administration
     *
     * @return \Swagger\Client\Model\PublicAdministration
     */
    public function getPublicAdministration()
    {
        return $this->container['public_administration'];
    }

    /**
     * Sets public_administration
     *
     * @param \Swagger\Client\Model\PublicAdministration $public_administration public_administration
     *
     * @return $this
     */
    public function setPublicAdministration($public_administration)
    {
        $this->container['public_administration'] = $public_administration;

        return $this;
    }

    /**
     * Gets rea_code
     *
     * @return \Swagger\Client\Model\Rea
     */
    public function getReaCode()
    {
        return $this->container['rea_code'];
    }

    /**
     * Sets rea_code
     *
     * @param \Swagger\Client\Model\Rea $rea_code rea_code
     *
     * @return $this
     */
    public function setReaCode($rea_code)
    {
        $this->container['rea_code'] = $rea_code;

        return $this;
    }

    /**
     * Gets vat_number
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     *
     * @param string $vat_number Partita iva del soggetto trovato
     *
     * @return $this
     */
    public function setVatNumber($vat_number)
    {
        $this->container['vat_number'] = $vat_number;

        return $this;
    }

    /**
     * Gets no_rea_data
     *
     * @return \Swagger\Client\Model\AdvancedNoREAData
     */
    public function getNoReaData()
    {
        return $this->container['no_rea_data'];
    }

    /**
     * Sets no_rea_data
     *
     * @param \Swagger\Client\Model\AdvancedNoREAData $no_rea_data no_rea_data
     *
     * @return $this
     */
    public function setNoReaData($no_rea_data)
    {
        $this->container['no_rea_data'] = $no_rea_data;

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


