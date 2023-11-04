<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/notification.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A description of a notification channel. The descriptor includes
 * the properties of the channel and the set of labels or fields that
 * must be specified to configure channels of a given type.
 *
 * Generated from protobuf message <code>google.monitoring.v3.NotificationChannelDescriptor</code>
 */
class NotificationChannelDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     * The full REST resource name for this descriptor. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/notificationChannelDescriptors/[TYPE]
     * In the above, `[TYPE]` is the value of the `type` field.
     *
     * Generated from protobuf field <code>string name = 6;</code>
     */
    private $name = '';
    /**
     * The type of notification channel, such as "email" and "sms". To view the
     * full list of channels, see
     * [Channel
     * descriptors](https://cloud.google.com/monitoring/alerts/using-channels-api#ncd).
     * Notification channel types are globally unique.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     */
    private $type = '';
    /**
     * A human-readable name for the notification channel type.  This
     * form of the name is suitable for a user interface.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * A human-readable description of the notification channel
     * type. The description may include a description of the properties
     * of the channel and pointers to external documentation.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * The set of labels that must be defined to identify a particular
     * channel of the corresponding type. Each label includes a
     * description for how that field should be populated.
     *
     * Generated from protobuf field <code>repeated .google.api.LabelDescriptor labels = 4;</code>
     */
    private $labels;
    /**
     * The tiers that support this notification channel; the project service tier
     * must be one of the supported_tiers.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.ServiceTier supported_tiers = 5 [deprecated = true];</code>
     * @deprecated
     */
    private $supported_tiers;
    /**
     * The product launch stage for channels of this type.
     *
     * Generated from protobuf field <code>.google.api.LaunchStage launch_stage = 7;</code>
     */
    private $launch_stage = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The full REST resource name for this descriptor. The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]/notificationChannelDescriptors/[TYPE]
     *           In the above, `[TYPE]` is the value of the `type` field.
     *     @type string $type
     *           The type of notification channel, such as "email" and "sms". To view the
     *           full list of channels, see
     *           [Channel
     *           descriptors](https://cloud.google.com/monitoring/alerts/using-channels-api#ncd).
     *           Notification channel types are globally unique.
     *     @type string $display_name
     *           A human-readable name for the notification channel type.  This
     *           form of the name is suitable for a user interface.
     *     @type string $description
     *           A human-readable description of the notification channel
     *           type. The description may include a description of the properties
     *           of the channel and pointers to external documentation.
     *     @type array<\Google\Api\LabelDescriptor>|\Google\Protobuf\Internal\RepeatedField $labels
     *           The set of labels that must be defined to identify a particular
     *           channel of the corresponding type. Each label includes a
     *           description for how that field should be populated.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $supported_tiers
     *           The tiers that support this notification channel; the project service tier
     *           must be one of the supported_tiers.
     *     @type int $launch_stage
     *           The product launch stage for channels of this type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Notification::initOnce();
        parent::__construct($data);
    }

    /**
     * The full REST resource name for this descriptor. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/notificationChannelDescriptors/[TYPE]
     * In the above, `[TYPE]` is the value of the `type` field.
     *
     * Generated from protobuf field <code>string name = 6;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The full REST resource name for this descriptor. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/notificationChannelDescriptors/[TYPE]
     * In the above, `[TYPE]` is the value of the `type` field.
     *
     * Generated from protobuf field <code>string name = 6;</code>
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
     * The type of notification channel, such as "email" and "sms". To view the
     * full list of channels, see
     * [Channel
     * descriptors](https://cloud.google.com/monitoring/alerts/using-channels-api#ncd).
     * Notification channel types are globally unique.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of notification channel, such as "email" and "sms". To view the
     * full list of channels, see
     * [Channel
     * descriptors](https://cloud.google.com/monitoring/alerts/using-channels-api#ncd).
     * Notification channel types are globally unique.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * A human-readable name for the notification channel type.  This
     * form of the name is suitable for a user interface.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * A human-readable name for the notification channel type.  This
     * form of the name is suitable for a user interface.
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
     * A human-readable description of the notification channel
     * type. The description may include a description of the properties
     * of the channel and pointers to external documentation.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A human-readable description of the notification channel
     * type. The description may include a description of the properties
     * of the channel and pointers to external documentation.
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
     * The set of labels that must be defined to identify a particular
     * channel of the corresponding type. Each label includes a
     * description for how that field should be populated.
     *
     * Generated from protobuf field <code>repeated .google.api.LabelDescriptor labels = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The set of labels that must be defined to identify a particular
     * channel of the corresponding type. Each label includes a
     * description for how that field should be populated.
     *
     * Generated from protobuf field <code>repeated .google.api.LabelDescriptor labels = 4;</code>
     * @param array<\Google\Api\LabelDescriptor>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\LabelDescriptor::class);
        $this->labels = $arr;

        return $this;
    }

    /**
     * The tiers that support this notification channel; the project service tier
     * must be one of the supported_tiers.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.ServiceTier supported_tiers = 5 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getSupportedTiers()
    {
        @trigger_error('supported_tiers is deprecated.', E_USER_DEPRECATED);
        return $this->supported_tiers;
    }

    /**
     * The tiers that support this notification channel; the project service tier
     * must be one of the supported_tiers.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.ServiceTier supported_tiers = 5 [deprecated = true];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setSupportedTiers($var)
    {
        @trigger_error('supported_tiers is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Monitoring\V3\ServiceTier::class);
        $this->supported_tiers = $arr;

        return $this;
    }

    /**
     * The product launch stage for channels of this type.
     *
     * Generated from protobuf field <code>.google.api.LaunchStage launch_stage = 7;</code>
     * @return int
     */
    public function getLaunchStage()
    {
        return $this->launch_stage;
    }

    /**
     * The product launch stage for channels of this type.
     *
     * Generated from protobuf field <code>.google.api.LaunchStage launch_stage = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setLaunchStage($var)
    {
        GPBUtil::checkEnum($var, \Google\Api\LaunchStage::class);
        $this->launch_stage = $var;

        return $this;
    }

}

