<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.DisksAddResourcePoliciesRequest</code>
 */
class DisksAddResourcePoliciesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Full or relative path to the resource policy to be added to this disk. You can only specify one resource policy.
     *
     * Generated from protobuf field <code>repeated string resource_policies = 22220385;</code>
     */
    private $resource_policies;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $resource_policies
     *           Full or relative path to the resource policy to be added to this disk. You can only specify one resource policy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Full or relative path to the resource policy to be added to this disk. You can only specify one resource policy.
     *
     * Generated from protobuf field <code>repeated string resource_policies = 22220385;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourcePolicies()
    {
        return $this->resource_policies;
    }

    /**
     * Full or relative path to the resource policy to be added to this disk. You can only specify one resource policy.
     *
     * Generated from protobuf field <code>repeated string resource_policies = 22220385;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourcePolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resource_policies = $arr;

        return $this;
    }

}

