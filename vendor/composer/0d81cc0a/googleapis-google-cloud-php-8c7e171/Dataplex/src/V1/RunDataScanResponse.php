<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/datascans.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Run DataScan Response.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.RunDataScanResponse</code>
 */
class RunDataScanResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * DataScanJob created by RunDataScan request.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanJob job = 1;</code>
     */
    private $job = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataplex\V1\DataScanJob $job
     *           DataScanJob created by RunDataScan request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Datascans::initOnce();
        parent::__construct($data);
    }

    /**
     * DataScanJob created by RunDataScan request.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanJob job = 1;</code>
     * @return \Google\Cloud\Dataplex\V1\DataScanJob|null
     */
    public function getJob()
    {
        return $this->job;
    }

    public function hasJob()
    {
        return isset($this->job);
    }

    public function clearJob()
    {
        unset($this->job);
    }

    /**
     * DataScanJob created by RunDataScan request.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanJob job = 1;</code>
     * @param \Google\Cloud\Dataplex\V1\DataScanJob $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataScanJob::class);
        $this->job = $var;

        return $this;
    }

}

