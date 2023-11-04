<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/publisher_model.proto

namespace Google\Cloud\AIPlatform\V1\PublisherModel;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Reference to a resource.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.PublisherModel.ResourceReference</code>
 */
class ResourceReference extends \Google\Protobuf\Internal\Message
{
    protected $reference;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           The URI of the resource.
     *     @type string $resource_name
     *           The resource name of the Google Cloud resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PublisherModel::initOnce();
        parent::__construct($data);
    }

    /**
     * The URI of the resource.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->readOneof(1);
    }

    public function hasUri()
    {
        return $this->hasOneof(1);
    }

    /**
     * The URI of the resource.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The resource name of the Google Cloud resource.
     *
     * Generated from protobuf field <code>string resource_name = 2;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->readOneof(2);
    }

    public function hasResourceName()
    {
        return $this->hasOneof(2);
    }

    /**
     * The resource name of the Google Cloud resource.
     *
     * Generated from protobuf field <code>string resource_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->whichOneof("reference");
    }

}


