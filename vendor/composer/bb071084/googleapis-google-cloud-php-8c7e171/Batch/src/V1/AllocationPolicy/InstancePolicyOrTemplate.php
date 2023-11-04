<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/batch/v1/job.proto

namespace Google\Cloud\Batch\V1\AllocationPolicy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * InstancePolicyOrTemplate lets you define the type of resources to use for
 * this job either with an InstancePolicy or an instance template.
 * If undefined, Batch picks the type of VM to use and doesn't include
 * optional VM resources such as GPUs and extra disks.
 *
 * Generated from protobuf message <code>google.cloud.batch.v1.AllocationPolicy.InstancePolicyOrTemplate</code>
 */
class InstancePolicyOrTemplate extends \Google\Protobuf\Internal\Message
{
    /**
     * Set this field true if users want Batch to help fetch drivers from a
     * third party location and install them for GPUs specified in
     * policy.accelerators or instance_template on their behalf. Default is
     * false.
     * For Container-Optimized Image cases, Batch will install the
     * accelerator driver following milestones of
     * https://cloud.google.com/container-optimized-os/docs/release-notes. For
     * non Container-Optimized Image cases, following
     * https://github.com/GoogleCloudPlatform/compute-gpu-installation/blob/main/linux/install_gpu_driver.py.
     *
     * Generated from protobuf field <code>bool install_gpu_drivers = 3;</code>
     */
    private $install_gpu_drivers = false;
    protected $policy_template;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Batch\V1\AllocationPolicy\InstancePolicy $policy
     *           InstancePolicy.
     *     @type string $instance_template
     *           Name of an instance template used to create VMs.
     *           Named the field as 'instance_template' instead of 'template' to avoid
     *           c++ keyword conflict.
     *     @type bool $install_gpu_drivers
     *           Set this field true if users want Batch to help fetch drivers from a
     *           third party location and install them for GPUs specified in
     *           policy.accelerators or instance_template on their behalf. Default is
     *           false.
     *           For Container-Optimized Image cases, Batch will install the
     *           accelerator driver following milestones of
     *           https://cloud.google.com/container-optimized-os/docs/release-notes. For
     *           non Container-Optimized Image cases, following
     *           https://github.com/GoogleCloudPlatform/compute-gpu-installation/blob/main/linux/install_gpu_driver.py.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Batch\V1\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * InstancePolicy.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.AllocationPolicy.InstancePolicy policy = 1;</code>
     * @return \Google\Cloud\Batch\V1\AllocationPolicy\InstancePolicy|null
     */
    public function getPolicy()
    {
        return $this->readOneof(1);
    }

    public function hasPolicy()
    {
        return $this->hasOneof(1);
    }

    /**
     * InstancePolicy.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.AllocationPolicy.InstancePolicy policy = 1;</code>
     * @param \Google\Cloud\Batch\V1\AllocationPolicy\InstancePolicy $var
     * @return $this
     */
    public function setPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Batch\V1\AllocationPolicy\InstancePolicy::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Name of an instance template used to create VMs.
     * Named the field as 'instance_template' instead of 'template' to avoid
     * c++ keyword conflict.
     *
     * Generated from protobuf field <code>string instance_template = 2;</code>
     * @return string
     */
    public function getInstanceTemplate()
    {
        return $this->readOneof(2);
    }

    public function hasInstanceTemplate()
    {
        return $this->hasOneof(2);
    }

    /**
     * Name of an instance template used to create VMs.
     * Named the field as 'instance_template' instead of 'template' to avoid
     * c++ keyword conflict.
     *
     * Generated from protobuf field <code>string instance_template = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Set this field true if users want Batch to help fetch drivers from a
     * third party location and install them for GPUs specified in
     * policy.accelerators or instance_template on their behalf. Default is
     * false.
     * For Container-Optimized Image cases, Batch will install the
     * accelerator driver following milestones of
     * https://cloud.google.com/container-optimized-os/docs/release-notes. For
     * non Container-Optimized Image cases, following
     * https://github.com/GoogleCloudPlatform/compute-gpu-installation/blob/main/linux/install_gpu_driver.py.
     *
     * Generated from protobuf field <code>bool install_gpu_drivers = 3;</code>
     * @return bool
     */
    public function getInstallGpuDrivers()
    {
        return $this->install_gpu_drivers;
    }

    /**
     * Set this field true if users want Batch to help fetch drivers from a
     * third party location and install them for GPUs specified in
     * policy.accelerators or instance_template on their behalf. Default is
     * false.
     * For Container-Optimized Image cases, Batch will install the
     * accelerator driver following milestones of
     * https://cloud.google.com/container-optimized-os/docs/release-notes. For
     * non Container-Optimized Image cases, following
     * https://github.com/GoogleCloudPlatform/compute-gpu-installation/blob/main/linux/install_gpu_driver.py.
     *
     * Generated from protobuf field <code>bool install_gpu_drivers = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setInstallGpuDrivers($var)
    {
        GPBUtil::checkBool($var);
        $this->install_gpu_drivers = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getPolicyTemplate()
    {
        return $this->whichOneof("policy_template");
    }

}


