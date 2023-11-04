<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Platform specific details for Physical Machines.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.PhysicalPlatformDetails</code>
 */
class PhysicalPlatformDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Free text representation of the machine location.
     * The format of this field should not be relied on. Different machines in the
     * same location may have different string values for this field.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     */
    protected $location = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $location
     *           Free text representation of the machine location.
     *           The format of this field should not be relied on. Different machines in the
     *           same location may have different string values for this field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Free text representation of the machine location.
     * The format of this field should not be relied on. Different machines in the
     * same location may have different string values for this field.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Free text representation of the machine location.
     * The format of this field should not be relied on. Different machines in the
     * same location may have different string values for this field.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

}

