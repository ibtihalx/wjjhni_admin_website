<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for RegionHealthCheckServices.Get. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetRegionHealthCheckServiceRequest</code>
 */
class GetRegionHealthCheckServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the HealthCheckService to update. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * Generated from protobuf field <code>string health_check_service = 408374747 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $health_check_service = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $region = '';

    /**
     * @param string $project            Project ID for this request.
     * @param string $region             Name of the region scoping this request.
     * @param string $healthCheckService Name of the HealthCheckService to update. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * @return \Google\Cloud\Compute\V1\GetRegionHealthCheckServiceRequest
     *
     * @experimental
     */
    public static function build(string $project, string $region, string $healthCheckService): self
    {
        return (new self())
            ->setProject($project)
            ->setRegion($region)
            ->setHealthCheckService($healthCheckService);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $health_check_service
     *           Name of the HealthCheckService to update. The name must be 1-63 characters long, and comply with RFC1035.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $region
     *           Name of the region scoping this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the HealthCheckService to update. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * Generated from protobuf field <code>string health_check_service = 408374747 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getHealthCheckService()
    {
        return $this->health_check_service;
    }

    /**
     * Name of the HealthCheckService to update. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * Generated from protobuf field <code>string health_check_service = 408374747 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setHealthCheckService($var)
    {
        GPBUtil::checkString($var, True);
        $this->health_check_service = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}

