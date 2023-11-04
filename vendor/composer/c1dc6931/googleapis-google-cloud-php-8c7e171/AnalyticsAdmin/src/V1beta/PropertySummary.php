<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/resources.proto

namespace Google\Analytics\Admin\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A virtual resource representing metadata for a GA4 property.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.PropertySummary</code>
 */
class PropertySummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of property referred to by this property summary
     * Format: properties/{property_id}
     * Example: "properties/1000"
     *
     * Generated from protobuf field <code>string property = 1 [(.google.api.resource_reference) = {</code>
     */
    private $property = '';
    /**
     * Display name for the property referred to in this property summary.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * The property's property type.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.PropertyType property_type = 3;</code>
     */
    private $property_type = 0;
    /**
     * Resource name of this property's logical parent.
     * Note: The Property-Moving UI can be used to change the parent.
     * Format: accounts/{account}, properties/{property}
     * Example: "accounts/100", "properties/200"
     *
     * Generated from protobuf field <code>string parent = 4;</code>
     */
    private $parent = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $property
     *           Resource name of property referred to by this property summary
     *           Format: properties/{property_id}
     *           Example: "properties/1000"
     *     @type string $display_name
     *           Display name for the property referred to in this property summary.
     *     @type int $property_type
     *           The property's property type.
     *     @type string $parent
     *           Resource name of this property's logical parent.
     *           Note: The Property-Moving UI can be used to change the parent.
     *           Format: accounts/{account}, properties/{property}
     *           Example: "accounts/100", "properties/200"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Beta\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of property referred to by this property summary
     * Format: properties/{property_id}
     * Example: "properties/1000"
     *
     * Generated from protobuf field <code>string property = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Resource name of property referred to by this property summary
     * Format: properties/{property_id}
     * Example: "properties/1000"
     *
     * Generated from protobuf field <code>string property = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProperty($var)
    {
        GPBUtil::checkString($var, True);
        $this->property = $var;

        return $this;
    }

    /**
     * Display name for the property referred to in this property summary.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Display name for the property referred to in this property summary.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The property's property type.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.PropertyType property_type = 3;</code>
     * @return int
     */
    public function getPropertyType()
    {
        return $this->property_type;
    }

    /**
     * The property's property type.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.PropertyType property_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPropertyType($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Admin\V1beta\PropertyType::class);
        $this->property_type = $var;

        return $this;
    }

    /**
     * Resource name of this property's logical parent.
     * Note: The Property-Moving UI can be used to change the parent.
     * Format: accounts/{account}, properties/{property}
     * Example: "accounts/100", "properties/200"
     *
     * Generated from protobuf field <code>string parent = 4;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Resource name of this property's logical parent.
     * Note: The Property-Moving UI can be used to change the parent.
     * Format: accounts/{account}, properties/{property}
     * Example: "accounts/100", "properties/200"
     *
     * Generated from protobuf field <code>string parent = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

}

