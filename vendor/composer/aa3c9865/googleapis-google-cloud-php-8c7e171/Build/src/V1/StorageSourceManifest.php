<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Location of the source manifest in Cloud Storage.
 * This feature is in Preview; see description
 * [here](https://github.com/GoogleCloudPlatform/cloud-builders/tree/master/gcs-fetcher).
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.StorageSourceManifest</code>
 */
class StorageSourceManifest extends \Google\Protobuf\Internal\Message
{
    /**
     * Cloud Storage bucket containing the source manifest (see [Bucket
     * Name
     * Requirements](https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     *
     * Generated from protobuf field <code>string bucket = 1;</code>
     */
    private $bucket = '';
    /**
     * Cloud Storage object containing the source manifest.
     * This object must be a JSON file.
     *
     * Generated from protobuf field <code>string object = 2;</code>
     */
    private $object = '';
    /**
     * Cloud Storage generation for the object. If the generation is
     * omitted, the latest generation will be used.
     *
     * Generated from protobuf field <code>int64 generation = 3;</code>
     */
    private $generation = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bucket
     *           Cloud Storage bucket containing the source manifest (see [Bucket
     *           Name
     *           Requirements](https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     *     @type string $object
     *           Cloud Storage object containing the source manifest.
     *           This object must be a JSON file.
     *     @type int|string $generation
     *           Cloud Storage generation for the object. If the generation is
     *           omitted, the latest generation will be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud Storage bucket containing the source manifest (see [Bucket
     * Name
     * Requirements](https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     *
     * Generated from protobuf field <code>string bucket = 1;</code>
     * @return string
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * Cloud Storage bucket containing the source manifest (see [Bucket
     * Name
     * Requirements](https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     *
     * Generated from protobuf field <code>string bucket = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket = $var;

        return $this;
    }

    /**
     * Cloud Storage object containing the source manifest.
     * This object must be a JSON file.
     *
     * Generated from protobuf field <code>string object = 2;</code>
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Cloud Storage object containing the source manifest.
     * This object must be a JSON file.
     *
     * Generated from protobuf field <code>string object = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setObject($var)
    {
        GPBUtil::checkString($var, True);
        $this->object = $var;

        return $this;
    }

    /**
     * Cloud Storage generation for the object. If the generation is
     * omitted, the latest generation will be used.
     *
     * Generated from protobuf field <code>int64 generation = 3;</code>
     * @return int|string
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * Cloud Storage generation for the object. If the generation is
     * omitted, the latest generation will be used.
     *
     * Generated from protobuf field <code>int64 generation = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGeneration($var)
    {
        GPBUtil::checkInt64($var);
        $this->generation = $var;

        return $this;
    }

}

