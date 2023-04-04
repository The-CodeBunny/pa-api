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
 * BrowseNode Class Doc Comment
 *
 * @category Class
 * @package  TheCodeBunny\PaApi
 * @author   Product Advertising API team
 */
class BrowseNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BrowseNode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ancestor' => '\TheCodeBunny\PaApi\Core\BrowseNodeAncestor',
        'children' => '\TheCodeBunny\PaApi\Core\BrowseNodeChild[]',
        'contextFreeName' => 'string',
        'displayName' => 'string',
        'id' => 'string',
        'isRoot' => 'bool',
        'salesRank' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ancestor' => null,
        'children' => null,
        'contextFreeName' => null,
        'displayName' => null,
        'id' => null,
        'isRoot' => null,
        'salesRank' => 'int64'
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
        'ancestor' => 'Ancestor',
        'children' => 'Children',
        'contextFreeName' => 'ContextFreeName',
        'displayName' => 'DisplayName',
        'id' => 'Id',
        'isRoot' => 'IsRoot',
        'salesRank' => 'SalesRank'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ancestor' => 'setAncestor',
        'children' => 'setChildren',
        'contextFreeName' => 'setContextFreeName',
        'displayName' => 'setDisplayName',
        'id' => 'setId',
        'isRoot' => 'setIsRoot',
        'salesRank' => 'setSalesRank'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ancestor' => 'getAncestor',
        'children' => 'getChildren',
        'contextFreeName' => 'getContextFreeName',
        'displayName' => 'getDisplayName',
        'id' => 'getId',
        'isRoot' => 'getIsRoot',
        'salesRank' => 'getSalesRank'
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
        $this->container['ancestor'] = isset($data['ancestor']) ? $data['ancestor'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['contextFreeName'] = isset($data['contextFreeName']) ? $data['contextFreeName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isRoot'] = isset($data['isRoot']) ? $data['isRoot'] : null;
        $this->container['salesRank'] = isset($data['salesRank']) ? $data['salesRank'] : null;
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
     * Gets ancestor
     *
     * @return \TheCodeBunny\PaApi\Core\BrowseNodeAncestor
     */
    public function getAncestor()
    {
        return $this->container['ancestor'];
    }

    /**
     * Sets ancestor
     *
     * @param \TheCodeBunny\PaApi\Core\BrowseNodeAncestor $ancestor ancestor
     *
     * @return $this
     */
    public function setAncestor($ancestor)
    {
        $this->container['ancestor'] = $ancestor;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \TheCodeBunny\PaApi\Core\BrowseNodeChild[]
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \TheCodeBunny\PaApi\Core\BrowseNodeChild[] $children children
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets contextFreeName
     *
     * @return string
     */
    public function getContextFreeName()
    {
        return $this->container['contextFreeName'];
    }

    /**
     * Sets contextFreeName
     *
     * @param string $contextFreeName contextFreeName
     *
     * @return $this
     */
    public function setContextFreeName($contextFreeName)
    {
        $this->container['contextFreeName'] = $contextFreeName;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string $displayName displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets isRoot
     *
     * @return bool
     */
    public function getIsRoot()
    {
        return $this->container['isRoot'];
    }

    /**
     * Sets isRoot
     *
     * @param bool $isRoot isRoot
     *
     * @return $this
     */
    public function setIsRoot($isRoot)
    {
        $this->container['isRoot'] = $isRoot;

        return $this;
    }

    /**
     * Gets salesRank
     *
     * @return int
     */
    public function getSalesRank()
    {
        return $this->container['salesRank'];
    }

    /**
     * Sets salesRank
     *
     * @param int $salesRank salesRank
     *
     * @return $this
     */
    public function setSalesRank($salesRank)
    {
        $this->container['salesRank'] = $salesRank;

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
