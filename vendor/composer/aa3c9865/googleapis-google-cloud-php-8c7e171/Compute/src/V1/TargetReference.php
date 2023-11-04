<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.TargetReference</code>
 */
class TargetReference extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string target = 192835985;</code>
     */
    private $target = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $target
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string target = 192835985;</code>
     * @return string
     */
    public function getTarget()
    {
        return isset($this->target) ? $this->target : '';
    }

    public function hasTarget()
    {
        return isset($this->target);
    }

    public function clearTarget()
    {
        unset($this->target);
    }

    /**
     * Generated from protobuf field <code>optional string target = 192835985;</code>
     * @param string $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->target = $var;

        return $this;
    }

}

