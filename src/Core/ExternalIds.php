<?php

/**
 * Copyright 2020 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

namespace TheCodeBunny\PaApi\Core;

use \ArrayAccess;
use \TheCodeBunny\PaApi\ObjectSerializer;

/**
 * ExternalIds Class Doc Comment
 *
 * @category Class
 * @package  TheCodeBunny\PaApi
 * @author   Product Advertising API team
 */
class ExternalIds implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExternalIds';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'eANs' => '\TheCodeBunny\PaApi\Core\MultiValuedAttribute',
        'iSBNs' => '\TheCodeBunny\PaApi\Core\MultiValuedAttribute',
        'uPCs' => '\TheCodeBunny\PaApi\Core\MultiValuedAttribute'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'eANs' => null,
        'iSBNs' => null,
        'uPCs' => null
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
        'eANs' => 'EANs',
        'iSBNs' => 'ISBNs',
        'uPCs' => 'UPCs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eANs' => 'setEANs',
        'iSBNs' => 'setISBNs',
        'uPCs' => 'setUPCs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eANs' => 'getEANs',
        'iSBNs' => 'getISBNs',
        'uPCs' => 'getUPCs'
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
        $this->container['eANs'] = isset($data['eANs']) ? $data['eANs'] : null;
        $this->container['iSBNs'] = isset($data['iSBNs']) ? $data['iSBNs'] : null;
        $this->container['uPCs'] = isset($data['uPCs']) ? $data['uPCs'] : null;
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
     * Gets eANs
     *
     * @return \TheCodeBunny\PaApi\Core\MultiValuedAttribute
     */
    public function getEANs()
    {
        return $this->container['eANs'];
    }

    /**
     * Sets eANs
     *
     * @param \TheCodeBunny\PaApi\Core\MultiValuedAttribute $eANs eANs
     *
     * @return $this
     */
    public function setEANs($eANs)
    {
        $this->container['eANs'] = $eANs;

        return $this;
    }

    /**
     * Gets iSBNs
     *
     * @return \TheCodeBunny\PaApi\Core\MultiValuedAttribute
     */
    public function getISBNs()
    {
        return $this->container['iSBNs'];
    }

    /**
     * Sets iSBNs
     *
     * @param \TheCodeBunny\PaApi\Core\MultiValuedAttribute $iSBNs iSBNs
     *
     * @return $this
     */
    public function setISBNs($iSBNs)
    {
        $this->container['iSBNs'] = $iSBNs;

        return $this;
    }

    /**
     * Gets uPCs
     *
     * @return \TheCodeBunny\PaApi\Core\MultiValuedAttribute
     */
    public function getUPCs()
    {
        return $this->container['uPCs'];
    }

    /**
     * Sets uPCs
     *
     * @param \TheCodeBunny\PaApi\Core\MultiValuedAttribute $uPCs uPCs
     *
     * @return $this
     */
    public function setUPCs($uPCs)
    {
        $this->container['uPCs'] = $uPCs;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
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
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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
