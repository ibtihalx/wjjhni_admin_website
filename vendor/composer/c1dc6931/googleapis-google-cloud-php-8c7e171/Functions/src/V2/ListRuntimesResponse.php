<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v2/functions.proto

namespace Google\Cloud\Functions\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the `ListRuntimes` method.
 *
 * Generated from protobuf message <code>google.cloud.functions.v2.ListRuntimesResponse</code>
 */
class ListRuntimesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The runtimes that match the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.functions.v2.ListRuntimesResponse.Runtime runtimes = 1;</code>
     */
    private $runtimes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Functions\V2\ListRuntimesResponse\Runtime>|\Google\Protobuf\Internal\RepeatedField $runtimes
     *           The runtimes that match the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Functions\V2\Functions::initOnce();
        parent::__construct($data);
    }

    /**
     * The runtimes that match the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.functions.v2.ListRuntimesResponse.Runtime runtimes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRuntimes()
    {
        return $this->runtimes;
    }

    /**
     * The runtimes that match the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.functions.v2.ListRuntimesResponse.Runtime runtimes = 1;</code>
     * @param array<\Google\Cloud\Functions\V2\ListRuntimesResponse\Runtime>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRuntimes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Functions\V2\ListRuntimesResponse\Runtime::class);
        $this->runtimes = $arr;

        return $this;
    }

}

