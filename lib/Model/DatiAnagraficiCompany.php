<?php
/**
 * DatiAnagraficiCompany
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
 * DatiAnagraficiCompany Class Doc Comment
 *
 * @category Class
 * @description Dati anagrafici del Soggetto
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DatiAnagraficiCompany implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DatiAnagraficiCompany';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_soggetto' => 'string',
        'denominazione' => 'string',
        'codice_fiscale' => 'string',
        'partita_iva' => 'string',
        'indirizzo' => '\Swagger\Client\Model\Address'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_soggetto' => null,
        'denominazione' => null,
        'codice_fiscale' => null,
        'partita_iva' => null,
        'indirizzo' => null
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
        'id_soggetto' => 'id_soggetto',
        'denominazione' => 'denominazione',
        'codice_fiscale' => 'codice_fiscale',
        'partita_iva' => 'partita_iva',
        'indirizzo' => 'indirizzo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_soggetto' => 'setIdSoggetto',
        'denominazione' => 'setDenominazione',
        'codice_fiscale' => 'setCodiceFiscale',
        'partita_iva' => 'setPartitaIva',
        'indirizzo' => 'setIndirizzo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_soggetto' => 'getIdSoggetto',
        'denominazione' => 'getDenominazione',
        'codice_fiscale' => 'getCodiceFiscale',
        'partita_iva' => 'getPartitaIva',
        'indirizzo' => 'getIndirizzo'
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
        $this->container['id_soggetto'] = isset($data['id_soggetto']) ? $data['id_soggetto'] : null;
        $this->container['denominazione'] = isset($data['denominazione']) ? $data['denominazione'] : null;
        $this->container['codice_fiscale'] = isset($data['codice_fiscale']) ? $data['codice_fiscale'] : null;
        $this->container['partita_iva'] = isset($data['partita_iva']) ? $data['partita_iva'] : null;
        $this->container['indirizzo'] = isset($data['indirizzo']) ? $data['indirizzo'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id_soggetto'] === null) {
            $invalidProperties[] = "'id_soggetto' can't be null";
        }
        if ($this->container['denominazione'] === null) {
            $invalidProperties[] = "'denominazione' can't be null";
        }
        if ($this->container['partita_iva'] === null) {
            $invalidProperties[] = "'partita_iva' can't be null";
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
     * Gets id_soggetto
     *
     * @return string
     */
    public function getIdSoggetto()
    {
        return $this->container['id_soggetto'];
    }

    /**
     * Sets id_soggetto
     *
     * @param string $id_soggetto Identificativo univoco Cerved del Soggetto (persona fisica o giuridica)
     *
     * @return $this
     */
    public function setIdSoggetto($id_soggetto)
    {
        $this->container['id_soggetto'] = $id_soggetto;

        return $this;
    }

    /**
     * Gets denominazione
     *
     * @return string
     */
    public function getDenominazione()
    {
        return $this->container['denominazione'];
    }

    /**
     * Sets denominazione
     *
     * @param string $denominazione Ragione sociale del Soggetto
     *
     * @return $this
     */
    public function setDenominazione($denominazione)
    {
        $this->container['denominazione'] = $denominazione;

        return $this;
    }

    /**
     * Gets codice_fiscale
     *
     * @return string
     */
    public function getCodiceFiscale()
    {
        return $this->container['codice_fiscale'];
    }

    /**
     * Sets codice_fiscale
     *
     * @param string $codice_fiscale Codice fiscale del Soggetto
     *
     * @return $this
     */
    public function setCodiceFiscale($codice_fiscale)
    {
        $this->container['codice_fiscale'] = $codice_fiscale;

        return $this;
    }

    /**
     * Gets partita_iva
     *
     * @return string
     */
    public function getPartitaIva()
    {
        return $this->container['partita_iva'];
    }

    /**
     * Sets partita_iva
     *
     * @param string $partita_iva Partita IVA del Soggetto
     *
     * @return $this
     */
    public function setPartitaIva($partita_iva)
    {
        $this->container['partita_iva'] = $partita_iva;

        return $this;
    }

    /**
     * Gets indirizzo
     *
     * @return \Swagger\Client\Model\Address
     */
    public function getIndirizzo()
    {
        return $this->container['indirizzo'];
    }

    /**
     * Sets indirizzo
     *
     * @param \Swagger\Client\Model\Address $indirizzo indirizzo
     *
     * @return $this
     */
    public function setIndirizzo($indirizzo)
    {
        $this->container['indirizzo'] = $indirizzo;

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


