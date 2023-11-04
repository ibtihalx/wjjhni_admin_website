<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/task.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result of a task attempt.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.TaskAttemptResult</code>
 */
class TaskAttemptResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The status of this attempt.
     * If the status code is OK, then the attempt succeeded.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $status = null;
    /**
     * Output only. The exit code of this attempt.
     * This may be unset if the container was unable to exit cleanly with a code
     * due to some other failure.
     * See status field for possible failure details.
     *
     * Generated from protobuf field <code>int32 exit_code = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $exit_code = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Rpc\Status $status
     *           Output only. The status of this attempt.
     *           If the status code is OK, then the attempt succeeded.
     *     @type int $exit_code
     *           Output only. The exit code of this attempt.
     *           This may be unset if the container was unable to exit cleanly with a code
     *           due to some other failure.
     *           See status field for possible failure details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\Task::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The status of this attempt.
     * If the status code is OK, then the attempt succeeded.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Output only. The status of this attempt.
     * If the status code is OK, then the attempt succeeded.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. The exit code of this attempt.
     * This may be unset if the container was unable to exit cleanly with a code
     * due to some other failure.
     * See status field for possible failure details.
     *
     * Generated from protobuf field <code>int32 exit_code = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getExitCode()
    {
        return $this->exit_code;
    }

    /**
     * Output only. The exit code of this attempt.
     * This may be unset if the container was unable to exit cleanly with a code
     * due to some other failure.
     * See status field for possible failure details.
     *
     * Generated from protobuf field <code>int32 exit_code = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setExitCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->exit_code = $var;

        return $this;
    }

}

