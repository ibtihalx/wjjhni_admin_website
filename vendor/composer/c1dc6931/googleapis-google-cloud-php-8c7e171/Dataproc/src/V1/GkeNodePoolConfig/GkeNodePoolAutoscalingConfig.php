<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace Google\Cloud\Dataproc\V1\GkeNodePoolConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GkeNodePoolAutoscaling contains information the cluster autoscaler needs to
 * adjust the size of the node pool to the current cluster usage.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.GkeNodePoolConfig.GkeNodePoolAutoscalingConfig</code>
 */
class GkeNodePoolAutoscalingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The minimum number of nodes in the node pool. Must be >= 0 and <=
     * max_node_count.
     *
     * Generated from protobuf field <code>int32 min_node_count = 2;</code>
     */
    private $min_node_count = 0;
    /**
     * The maximum number of nodes in the node pool. Must be >= min_node_count,
     * and must be > 0.
     * **Note:** Quota must be sufficient to scale up the cluster.
     *
     * Generated from protobuf field <code>int32 max_node_count = 3;</code>
     */
    private $max_node_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $min_node_count
     *           The minimum number of nodes in the node pool. Must be >= 0 and <=
     *           max_node_count.
     *     @type int $max_node_count
     *           The maximum number of nodes in the node pool. Must be >= min_node_count,
     *           and must be > 0.
     *           **Note:** Quota must be sufficient to scale up the cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Shared::initOnce();
        parent::__construct($data);
    }

    /**
     * The minimum number of nodes in the node pool. Must be >= 0 and <=
     * max_node_count.
     *
     * Generated from protobuf field <code>int32 min_node_count = 2;</code>
     * @return int
     */
    public function getMinNodeCount()
    {
        return $this->min_node_count;
    }

    /**
     * The minimum number of nodes in the node pool. Must be >= 0 and <=
     * max_node_count.
     *
     * Generated from protobuf field <code>int32 min_node_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMinNodeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_node_count = $var;

        return $this;
    }

    /**
     * The maximum number of nodes in the node pool. Must be >= min_node_count,
     * and must be > 0.
     * **Note:** Quota must be sufficient to scale up the cluster.
     *
     * Generated from protobuf field <code>int32 max_node_count = 3;</code>
     * @return int
     */
    public function getMaxNodeCount()
    {
        return $this->max_node_count;
    }

    /**
     * The maximum number of nodes in the node pool. Must be >= min_node_count,
     * and must be > 0.
     * **Note:** Quota must be sufficient to scale up the cluster.
     *
     * Generated from protobuf field <code>int32 max_node_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxNodeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_node_count = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GkeNodePoolAutoscalingConfig::class, \Google\Cloud\Dataproc\V1\GkeNodePoolConfig_GkeNodePoolAutoscalingConfig::class);

