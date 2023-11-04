<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/import_config.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of destination for Import related errors.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.ImportErrorConfig</code>
 */
class ImportErrorConfig extends \Google\Protobuf\Internal\Message
{
    protected $destination;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gcs_prefix
     *           Cloud Storage prefix for import errors. This must be an empty,
     *           existing Cloud Storage directory. Import errors are written to
     *           sharded files in this directory, one per line, as a JSON-encoded
     *           `google.rpc.Status` message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ImportConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud Storage prefix for import errors. This must be an empty,
     * existing Cloud Storage directory. Import errors are written to
     * sharded files in this directory, one per line, as a JSON-encoded
     * `google.rpc.Status` message.
     *
     * Generated from protobuf field <code>string gcs_prefix = 1;</code>
     * @return string
     */
    public function getGcsPrefix()
    {
        return $this->readOneof(1);
    }

    public function hasGcsPrefix()
    {
        return $this->hasOneof(1);
    }

    /**
     * Cloud Storage prefix for import errors. This must be an empty,
     * existing Cloud Storage directory. Import errors are written to
     * sharded files in this directory, one per line, as a JSON-encoded
     * `google.rpc.Status` message.
     *
     * Generated from protobuf field <code>string gcs_prefix = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGcsPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}

