<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateRollupPropertySourceLink RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.CreateRollupPropertySourceLinkRequest</code>
 */
class CreateRollupPropertySourceLinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Format: properties/{property_id}
     * Example: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The roll-up property source link to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.RollupPropertySourceLink rollup_property_source_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $rollup_property_source_link = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Format: properties/{property_id}
     *           Example: properties/1234
     *     @type \Google\Analytics\Admin\V1alpha\RollupPropertySourceLink $rollup_property_source_link
     *           Required. The roll-up property source link to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Format: properties/{property_id}
     * Example: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Format: properties/{property_id}
     * Example: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The roll-up property source link to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.RollupPropertySourceLink rollup_property_source_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\RollupPropertySourceLink|null
     */
    public function getRollupPropertySourceLink()
    {
        return $this->rollup_property_source_link;
    }

    public function hasRollupPropertySourceLink()
    {
        return isset($this->rollup_property_source_link);
    }

    public function clearRollupPropertySourceLink()
    {
        unset($this->rollup_property_source_link);
    }

    /**
     * Required. The roll-up property source link to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.RollupPropertySourceLink rollup_property_source_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\RollupPropertySourceLink $var
     * @return $this
     */
    public function setRollupPropertySourceLink($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\RollupPropertySourceLink::class);
        $this->rollup_property_source_link = $var;

        return $this;
    }

}

