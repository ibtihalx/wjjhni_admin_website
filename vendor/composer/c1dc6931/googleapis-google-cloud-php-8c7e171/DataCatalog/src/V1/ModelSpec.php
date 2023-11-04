<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification that applies to a model. Valid only for
 * entries with the `MODEL` type.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.ModelSpec</code>
 */
class ModelSpec extends \Google\Protobuf\Internal\Message
{
    protected $system_spec;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataCatalog\V1\VertexModelSpec $vertex_model_spec
     *           Specification for vertex model resources.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Specification for vertex model resources.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.VertexModelSpec vertex_model_spec = 1;</code>
     * @return \Google\Cloud\DataCatalog\V1\VertexModelSpec|null
     */
    public function getVertexModelSpec()
    {
        return $this->readOneof(1);
    }

    public function hasVertexModelSpec()
    {
        return $this->hasOneof(1);
    }

    /**
     * Specification for vertex model resources.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.VertexModelSpec vertex_model_spec = 1;</code>
     * @param \Google\Cloud\DataCatalog\V1\VertexModelSpec $var
     * @return $this
     */
    public function setVertexModelSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\VertexModelSpec::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSystemSpec()
    {
        return $this->whichOneof("system_spec");
    }

}

