<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Schedule for an instance operation.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ResourcePolicyInstanceSchedulePolicySchedule</code>
 */
class ResourcePolicyInstanceSchedulePolicySchedule extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies the frequency for the operation, using the unix-cron format.
     *
     * Generated from protobuf field <code>optional string schedule = 375820951;</code>
     */
    private $schedule = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $schedule
     *           Specifies the frequency for the operation, using the unix-cron format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies the frequency for the operation, using the unix-cron format.
     *
     * Generated from protobuf field <code>optional string schedule = 375820951;</code>
     * @return string
     */
    public function getSchedule()
    {
        return isset($this->schedule) ? $this->schedule : '';
    }

    public function hasSchedule()
    {
        return isset($this->schedule);
    }

    public function clearSchedule()
    {
        unset($this->schedule);
    }

    /**
     * Specifies the frequency for the operation, using the unix-cron format.
     *
     * Generated from protobuf field <code>optional string schedule = 375820951;</code>
     * @param string $var
     * @return $this
     */
    public function setSchedule($var)
    {
        GPBUtil::checkString($var, True);
        $this->schedule = $var;

        return $this;
    }

}

