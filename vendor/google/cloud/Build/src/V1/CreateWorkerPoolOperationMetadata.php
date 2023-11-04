<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for the `CreateWorkerPool` operation.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.CreateWorkerPoolOperationMetadata</code>
 */
class CreateWorkerPoolOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the `WorkerPool` to create.
     * Format:
     * `projects/{project}/locations/{location}/workerPools/{worker_pool}`.
     *
     * Generated from protobuf field <code>string worker_pool = 1 [(.google.api.resource_reference) = {</code>
     */
    private $worker_pool = '';
    /**
     * Time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     */
    private $create_time = null;
    /**
     * Time the operation was completed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_time = 3;</code>
     */
    private $complete_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $worker_pool
     *           The resource name of the `WorkerPool` to create.
     *           Format:
     *           `projects/{project}/locations/{location}/workerPools/{worker_pool}`.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Time the operation was created.
     *     @type \Google\Protobuf\Timestamp $complete_time
     *           Time the operation was completed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the `WorkerPool` to create.
     * Format:
     * `projects/{project}/locations/{location}/workerPools/{worker_pool}`.
     *
     * Generated from protobuf field <code>string worker_pool = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getWorkerPool()
    {
        return $this->worker_pool;
    }

    /**
     * The resource name of the `WorkerPool` to create.
     * Format:
     * `projects/{project}/locations/{location}/workerPools/{worker_pool}`.
     *
     * Generated from protobuf field <code>string worker_pool = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setWorkerPool($var)
    {
        GPBUtil::checkString($var, True);
        $this->worker_pool = $var;

        return $this;
    }

    /**
     * Time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Time the operation was completed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCompleteTime()
    {
        return $this->complete_time;
    }

    public function hasCompleteTime()
    {
        return isset($this->complete_time);
    }

    public function clearCompleteTime()
    {
        unset($this->complete_time);
    }

    /**
     * Time the operation was completed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCompleteTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->complete_time = $var;

        return $this;
    }

}

