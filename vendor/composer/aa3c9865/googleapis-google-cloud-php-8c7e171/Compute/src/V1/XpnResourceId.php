<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Service resource (a.k.a service project) ID.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.XpnResourceId</code>
 */
class XpnResourceId extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the service resource. In the case of projects, this field supports project id (e.g., my-project-123) and project number (e.g. 12345678).
     *
     * Generated from protobuf field <code>optional string id = 3355;</code>
     */
    private $id = null;
    /**
     * The type of the service resource.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     */
    private $type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The ID of the service resource. In the case of projects, this field supports project id (e.g., my-project-123) and project number (e.g. 12345678).
     *     @type string $type
     *           The type of the service resource.
     *           Check the Type enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the service resource. In the case of projects, this field supports project id (e.g., my-project-123) and project number (e.g. 12345678).
     *
     * Generated from protobuf field <code>optional string id = 3355;</code>
     * @return string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : '';
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * The ID of the service resource. In the case of projects, this field supports project id (e.g., my-project-123) and project number (e.g. 12345678).
     *
     * Generated from protobuf field <code>optional string id = 3355;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * The type of the service resource.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @return string
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : '';
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * The type of the service resource.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}

