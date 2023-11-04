<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/alert.proto

namespace Google\Cloud\Monitoring\V3\AlertPolicy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Control over how the notification channels in `notification_channels`
 * are notified when this alert fires.
 *
 * Generated from protobuf message <code>google.monitoring.v3.AlertPolicy.AlertStrategy</code>
 */
class AlertStrategy extends \Google\Protobuf\Internal\Message
{
    /**
     * Required for alert policies with a `LogMatch` condition.
     * This limit is not implemented for alert policies that are not log-based.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.AlertStrategy.NotificationRateLimit notification_rate_limit = 1;</code>
     */
    private $notification_rate_limit = null;
    /**
     * If an alert policy that was active has no data for this long, any open
     * incidents will close
     *
     * Generated from protobuf field <code>.google.protobuf.Duration auto_close = 3;</code>
     */
    private $auto_close = null;
    /**
     * Control how notifications will be sent out, on a per-channel basis.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.AlertPolicy.AlertStrategy.NotificationChannelStrategy notification_channel_strategy = 4;</code>
     */
    private $notification_channel_strategy;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Monitoring\V3\AlertPolicy\AlertStrategy\NotificationRateLimit $notification_rate_limit
     *           Required for alert policies with a `LogMatch` condition.
     *           This limit is not implemented for alert policies that are not log-based.
     *     @type \Google\Protobuf\Duration $auto_close
     *           If an alert policy that was active has no data for this long, any open
     *           incidents will close
     *     @type array<\Google\Cloud\Monitoring\V3\AlertPolicy\AlertStrategy\NotificationChannelStrategy>|\Google\Protobuf\Internal\RepeatedField $notification_channel_strategy
     *           Control how notifications will be sent out, on a per-channel basis.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Alert::initOnce();
        parent::__construct($data);
    }

    /**
     * Required for alert policies with a `LogMatch` condition.
     * This limit is not implemented for alert policies that are not log-based.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.AlertStrategy.NotificationRateLimit notification_rate_limit = 1;</code>
     * @return \Google\Cloud\Monitoring\V3\AlertPolicy\AlertStrategy\NotificationRateLimit|null
     */
    public function getNotificationRateLimit()
    {
        return $this->notification_rate_limit;
    }

    public function hasNotificationRateLimit()
    {
        return isset($this->notification_rate_limit);
    }

    public function clearNotificationRateLimit()
    {
        unset($this->notification_rate_limit);
    }

    /**
     * Required for alert policies with a `LogMatch` condition.
     * This limit is not implemented for alert policies that are not log-based.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.AlertStrategy.NotificationRateLimit notification_rate_limit = 1;</code>
     * @param \Google\Cloud\Monitoring\V3\AlertPolicy\AlertStrategy\NotificationRateLimit $var
     * @return $this
     */
    public function setNotificationRateLimit($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\AlertPolicy\AlertStrategy\NotificationRateLimit::class);
        $this->notification_rate_limit = $var;

        return $this;
    }

    /**
     * If an alert policy that was active has no data for this long, any open
     * incidents will close
     *
     * Generated from protobuf field <code>.google.protobuf.Duration auto_close = 3;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getAutoClose()
    {
        return $this->auto_close;
    }

    public function hasAutoClose()
    {
        return isset($this->auto_close);
    }

    public function clearAutoClose()
    {
        unset($this->auto_close);
    }

    /**
     * If an alert policy that was active has no data for this long, any open
     * incidents will close
     *
     * Generated from protobuf field <code>.google.protobuf.Duration auto_close = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setAutoClose($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->auto_close = $var;

        return $this;
    }

    /**
     * Control how notifications will be sent out, on a per-channel basis.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.AlertPolicy.AlertStrategy.NotificationChannelStrategy notification_channel_strategy = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotificationChannelStrategy()
    {
        return $this->notification_channel_strategy;
    }

    /**
     * Control how notifications will be sent out, on a per-channel basis.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.AlertPolicy.AlertStrategy.NotificationChannelStrategy notification_channel_strategy = 4;</code>
     * @param array<\Google\Cloud\Monitoring\V3\AlertPolicy\AlertStrategy\NotificationChannelStrategy>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotificationChannelStrategy($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Monitoring\V3\AlertPolicy\AlertStrategy\NotificationChannelStrategy::class);
        $this->notification_channel_strategy = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AlertStrategy::class, \Google\Cloud\Monitoring\V3\AlertPolicy_AlertStrategy::class);

