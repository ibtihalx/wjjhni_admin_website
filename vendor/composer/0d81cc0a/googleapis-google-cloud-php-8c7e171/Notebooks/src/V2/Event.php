<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v2/event.proto

namespace Google\Cloud\Notebooks\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The definition of an Event for a managed / semi-managed notebook instance.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v2.Event</code>
 */
class Event extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Event report time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp report_time = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $report_time = null;
    /**
     * Optional. Event type.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.Event.EventType type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $type = 0;
    /**
     * Optional. Event details. This field is used to pass event information.
     *
     * Generated from protobuf field <code>map<string, string> details = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $report_time
     *           Optional. Event report time.
     *     @type int $type
     *           Optional. Event type.
     *     @type array|\Google\Protobuf\Internal\MapField $details
     *           Optional. Event details. This field is used to pass event information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V2\Event::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Event report time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp report_time = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getReportTime()
    {
        return $this->report_time;
    }

    public function hasReportTime()
    {
        return isset($this->report_time);
    }

    public function clearReportTime()
    {
        unset($this->report_time);
    }

    /**
     * Optional. Event report time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp report_time = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReportTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->report_time = $var;

        return $this;
    }

    /**
     * Optional. Event type.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.Event.EventType type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Optional. Event type.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.Event.EventType type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Notebooks\V2\Event\EventType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Optional. Event details. This field is used to pass event information.
     *
     * Generated from protobuf field <code>map<string, string> details = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Optional. Event details. This field is used to pass event information.
     *
     * Generated from protobuf field <code>map<string, string> details = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDetails($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->details = $arr;

        return $this;
    }

}

