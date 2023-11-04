<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/common_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters that describe the Monitoring configuration in a cluster.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.MonitoringConfig</code>
 */
class MonitoringConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Enable Google Cloud Managed Service for Prometheus in the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.ManagedPrometheusConfig managed_prometheus_config = 2;</code>
     */
    private $managed_prometheus_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\GkeMultiCloud\V1\ManagedPrometheusConfig $managed_prometheus_config
     *           Enable Google Cloud Managed Service for Prometheus in the cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\CommonResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Enable Google Cloud Managed Service for Prometheus in the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.ManagedPrometheusConfig managed_prometheus_config = 2;</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\ManagedPrometheusConfig|null
     */
    public function getManagedPrometheusConfig()
    {
        return $this->managed_prometheus_config;
    }

    public function hasManagedPrometheusConfig()
    {
        return isset($this->managed_prometheus_config);
    }

    public function clearManagedPrometheusConfig()
    {
        unset($this->managed_prometheus_config);
    }

    /**
     * Enable Google Cloud Managed Service for Prometheus in the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.ManagedPrometheusConfig managed_prometheus_config = 2;</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\ManagedPrometheusConfig $var
     * @return $this
     */
    public function setManagedPrometheusConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\ManagedPrometheusConfig::class);
        $this->managed_prometheus_config = $var;

        return $this;
    }

}

