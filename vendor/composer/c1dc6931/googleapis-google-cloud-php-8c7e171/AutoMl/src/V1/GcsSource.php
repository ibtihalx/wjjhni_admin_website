<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/io.proto

namespace Google\Cloud\AutoMl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Google Cloud Storage location for the input content.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.GcsSource</code>
 */
class GcsSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Google Cloud Storage URIs to input files, up to 2000
     * characters long. Accepted forms:
     * * Full object path, e.g. gs://bucket/directory/object.csv
     *
     * Generated from protobuf field <code>repeated string input_uris = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $input_uris;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $input_uris
     *           Required. Google Cloud Storage URIs to input files, up to 2000
     *           characters long. Accepted forms:
     *           * Full object path, e.g. gs://bucket/directory/object.csv
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\Io::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Google Cloud Storage URIs to input files, up to 2000
     * characters long. Accepted forms:
     * * Full object path, e.g. gs://bucket/directory/object.csv
     *
     * Generated from protobuf field <code>repeated string input_uris = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputUris()
    {
        return $this->input_uris;
    }

    /**
     * Required. Google Cloud Storage URIs to input files, up to 2000
     * characters long. Accepted forms:
     * * Full object path, e.g. gs://bucket/directory/object.csv
     *
     * Generated from protobuf field <code>repeated string input_uris = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->input_uris = $arr;

        return $this;
    }

}

