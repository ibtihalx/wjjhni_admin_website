<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/channel_group.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource message representing a Channel Group.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ChannelGroup</code>
 */
class ChannelGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name for this Channel Group resource.
     * Format: properties/{property}/channelGroups/{channel_group}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Required. The display name of the Channel Group. Max length of 80
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * The description of the Channel Group. Max length of 256 characters.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * Required. The grouping rules of channels. Maximum number of rules is 25.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.GroupingRule grouping_rule = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $grouping_rule;
    /**
     * Output only. Default Channel Group defined by Google, which cannot be
     * updated.
     *
     * Generated from protobuf field <code>bool system_defined = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $system_defined = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name for this Channel Group resource.
     *           Format: properties/{property}/channelGroups/{channel_group}
     *     @type string $display_name
     *           Required. The display name of the Channel Group. Max length of 80
     *           characters.
     *     @type string $description
     *           The description of the Channel Group. Max length of 256 characters.
     *     @type array<\Google\Analytics\Admin\V1alpha\GroupingRule>|\Google\Protobuf\Internal\RepeatedField $grouping_rule
     *           Required. The grouping rules of channels. Maximum number of rules is 25.
     *     @type bool $system_defined
     *           Output only. Default Channel Group defined by Google, which cannot be
     *           updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\ChannelGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name for this Channel Group resource.
     * Format: properties/{property}/channelGroups/{channel_group}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name for this Channel Group resource.
     * Format: properties/{property}/channelGroups/{channel_group}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The display name of the Channel Group. Max length of 80
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name of the Channel Group. Max length of 80
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * The description of the Channel Group. Max length of 256 characters.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the Channel Group. Max length of 256 characters.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Required. The grouping rules of channels. Maximum number of rules is 25.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.GroupingRule grouping_rule = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroupingRule()
    {
        return $this->grouping_rule;
    }

    /**
     * Required. The grouping rules of channels. Maximum number of rules is 25.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.GroupingRule grouping_rule = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Analytics\Admin\V1alpha\GroupingRule>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroupingRule($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1alpha\GroupingRule::class);
        $this->grouping_rule = $arr;

        return $this;
    }

    /**
     * Output only. Default Channel Group defined by Google, which cannot be
     * updated.
     *
     * Generated from protobuf field <code>bool system_defined = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSystemDefined()
    {
        return $this->system_defined;
    }

    /**
     * Output only. Default Channel Group defined by Google, which cannot be
     * updated.
     *
     * Generated from protobuf field <code>bool system_defined = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setSystemDefined($var)
    {
        GPBUtil::checkBool($var);
        $this->system_defined = $var;

        return $this;
    }

}

