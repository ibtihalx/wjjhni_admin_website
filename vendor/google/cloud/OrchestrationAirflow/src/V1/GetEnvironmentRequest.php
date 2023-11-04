<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Get an environment.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.GetEnvironmentRequest</code>
 */
class GetEnvironmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the environment to get, in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    /**
     * @param string $name The resource name of the environment to get, in the form:
     *                     "projects/{projectId}/locations/{locationId}/environments/{environmentId}"
     *
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\GetEnvironmentRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the environment to get, in the form:
     *           "projects/{projectId}/locations/{locationId}/environments/{environmentId}"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the environment to get, in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the environment to get, in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

