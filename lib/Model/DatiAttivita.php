<?php
/**
 * DatiAttivita
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
 * DatiAttivita Class Doc Comment
 *
 * @category Class
 * @description Dati atività del Soggetto
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DatiAttivita implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DatiAttivita';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'codice_ateco' => 'string',
        'ateco' => 'string',
        'codice_stato_attivita' => 'string',
        'flag_operativa' => 'bool',
        'codice_rea' => 'string',
        'dati_no_rea' => '\Swagger\Client\Model\DatiNoREA',
        'company_form' => '\Swagger\Client\Model\CompanyForm'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'codice_ateco' => null,
        'ateco' => null,
        'codice_stato_attivita' => null,
        'flag_operativa' => null,
        'codice_rea' => null,
        'dati_no_rea' => null,
        'company_form' => null
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
        'codice_ateco' => 'codice_ateco',
        'ateco' => 'ateco',
        'codice_stato_attivita' => 'codice_stato_attivita',
        'flag_operativa' => 'flag_operativa',
        'codice_rea' => 'codice_rea',
        'dati_no_rea' => 'dati_no_rea',
        'company_form' => 'company_form'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'codice_ateco' => 'setCodiceAteco',
        'ateco' => 'setAteco',
        'codice_stato_attivita' => 'setCodiceStatoAttivita',
        'flag_operativa' => 'setFlagOperativa',
        'codice_rea' => 'setCodiceRea',
        'dati_no_rea' => 'setDatiNoRea',
        'company_form' => 'setCompanyForm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'codice_ateco' => 'getCodiceAteco',
        'ateco' => 'getAteco',
        'codice_stato_attivita' => 'getCodiceStatoAttivita',
        'flag_operativa' => 'getFlagOperativa',
        'codice_rea' => 'getCodiceRea',
        'dati_no_rea' => 'getDatiNoRea',
        'company_form' => 'getCompanyForm'
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
        $this->container['codice_ateco'] = isset($data['codice_ateco']) ? $data['codice_ateco'] : null;
        $this->container['ateco'] = isset($data['ateco']) ? $data['ateco'] : null;
        $this->container['codice_stato_attivita'] = isset($data['codice_stato_attivita']) ? $data['codice_stato_attivita'] : null;
        $this->container['flag_operativa'] = isset($data['flag_operativa']) ? $data['flag_operativa'] : null;
        $this->container['codice_rea'] = isset($data['codice_rea']) ? $data['codice_rea'] : null;
        $this->container['dati_no_rea'] = isset($data['dati_no_rea']) ? $data['dati_no_rea'] : null;
        $this->container['company_form'] = isset($data['company_form']) ? $data['company_form'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['codice_ateco'] === null) {
            $invalidProperties[] = "'codice_ateco' can't be null";
        }
        if ($this->container['ateco'] === null) {
            $invalidProperties[] = "'ateco' can't be null";
        }
        if ($this->container['codice_stato_attivita'] === null) {
            $invalidProperties[] = "'codice_stato_attivita' can't be null";
        }
        if ($this->container['flag_operativa'] === null) {
            $invalidProperties[] = "'flag_operativa' can't be null";
        }
        if ($this->container['codice_rea'] === null) {
            $invalidProperties[] = "'codice_rea' can't be null";
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
     * Gets codice_ateco
     *
     * @return string
     */
    public function getCodiceAteco()
    {
        return $this->container['codice_ateco'];
    }

    /**
     * Sets codice_ateco
     *
     * @param string $codice_ateco Codice di classificazione dell'attività economica del Soggetto (Codice Ateco ISTAT 2007)
     *
     * @return $this
     */
    public function setCodiceAteco($codice_ateco)
    {
        $this->container['codice_ateco'] = $codice_ateco;

        return $this;
    }

    /**
     * Gets ateco
     *
     * @return string
     */
    public function getAteco()
    {
        return $this->container['ateco'];
    }

    /**
     * Sets ateco
     *
     * @param string $ateco Descrizione del Codice Ateco del Soggetto
     *
     * @return $this
     */
    public function setAteco($ateco)
    {
        $this->container['ateco'] = $ateco;

        return $this;
    }

    /**
     * Gets codice_stato_attivita
     *
     * @return string
     */
    public function getCodiceStatoAttivita()
    {
        return $this->container['codice_stato_attivita'];
    }

    /**
     * Sets codice_stato_attivita
     *
     * @param string $codice_stato_attivita Flag sintetico che indica lo stato dell'attività del Soggetto. (Valori ammessi: A=attiva; C=cessata; D=in procedure; F=fallita; G=amministrazione giudiziaria; I=inattiva; L=in scioglimento/liquidazione; N=in procedura concorsuale; P=iscrizione; R=registrata; S=sospesa; T=cancellata)
     *
     * @return $this
     */
    public function setCodiceStatoAttivita($codice_stato_attivita)
    {
        $this->container['codice_stato_attivita'] = $codice_stato_attivita;

        return $this;
    }

    /**
     * Gets flag_operativa
     *
     * @return bool
     */
    public function getFlagOperativa()
    {
        return $this->container['flag_operativa'];
    }

    /**
     * Sets flag_operativa
     *
     * @param bool $flag_operativa Flag sintetico che indica se l'attività del Soggetto è operativa. (Valori ammessi: S=si; N=no)
     *
     * @return $this
     */
    public function setFlagOperativa($flag_operativa)
    {
        $this->container['flag_operativa'] = $flag_operativa;

        return $this;
    }

    /**
     * Gets codice_rea
     *
     * @return string
     */
    public function getCodiceRea()
    {
        return $this->container['codice_rea'];
    }

    /**
     * Sets codice_rea
     *
     * @param string $codice_rea Codice della Provincia della Camera di Commercio concatenato (tramite spazio singolo) al codice del Soggetto nel Repertorio Economico Amministrativo
     *
     * @return $this
     */
    public function setCodiceRea($codice_rea)
    {
        $this->container['codice_rea'] = $codice_rea;

        return $this;
    }

    /**
     * Gets dati_no_rea
     *
     * @return \Swagger\Client\Model\DatiNoREA
     */
    public function getDatiNoRea()
    {
        return $this->container['dati_no_rea'];
    }

    /**
     * Sets dati_no_rea
     *
     * @param \Swagger\Client\Model\DatiNoREA $dati_no_rea dati_no_rea
     *
     * @return $this
     */
    public function setDatiNoRea($dati_no_rea)
    {
        $this->container['dati_no_rea'] = $dati_no_rea;

        return $this;
    }

    /**
     * Gets company_form
     *
     * @return \Swagger\Client\Model\CompanyForm
     */
    public function getCompanyForm()
    {
        return $this->container['company_form'];
    }

    /**
     * Sets company_form
     *
     * @param \Swagger\Client\Model\CompanyForm $company_form company_form
     *
     * @return $this
     */
    public function setCompanyForm($company_form)
    {
        $this->container['company_form'] = $company_form;

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

