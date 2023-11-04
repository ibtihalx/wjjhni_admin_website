<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AzureServerConfig contains information about a Google Cloud location, such as
 * supported Azure regions and Kubernetes versions.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AzureServerConfig</code>
 */
class AzureServerConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The `AzureServerConfig` resource name.
     * `AzureServerConfig` names are formatted as
     * `projects/<project-number>/locations/<region>/azureServerConfig`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud Platform resource names.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * List of valid Kubernetes versions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AzureK8sVersionInfo valid_versions = 2;</code>
     */
    private $valid_versions;
    /**
     * The list of supported Azure regions.
     *
     * Generated from protobuf field <code>repeated string supported_azure_regions = 3;</code>
     */
    private $supported_azure_regions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The `AzureServerConfig` resource name.
     *           `AzureServerConfig` names are formatted as
     *           `projects/<project-number>/locations/<region>/azureServerConfig`.
     *           See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *           for more details on Google Cloud Platform resource names.
     *     @type array<\Google\Cloud\GkeMultiCloud\V1\AzureK8sVersionInfo>|\Google\Protobuf\Internal\RepeatedField $valid_versions
     *           List of valid Kubernetes versions.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $supported_azure_regions
     *           The list of supported Azure regions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The `AzureServerConfig` resource name.
     * `AzureServerConfig` names are formatted as
     * `projects/<project-number>/locations/<region>/azureServerConfig`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud Platform resource names.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The `AzureServerConfig` resource name.
     * `AzureServerConfig` names are formatted as
     * `projects/<project-number>/locations/<region>/azureServerConfig`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud Platform resource names.
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

    /**
     * List of valid Kubernetes versions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AzureK8sVersionInfo valid_versions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidVersions()
    {
        return $this->valid_versions;
    }

    /**
     * List of valid Kubernetes versions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AzureK8sVersionInfo valid_versions = 2;</code>
     * @param array<\Google\Cloud\GkeMultiCloud\V1\AzureK8sVersionInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidVersions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeMultiCloud\V1\AzureK8sVersionInfo::class);
        $this->valid_versions = $arr;

        return $this;
    }

    /**
     * The list of supported Azure regions.
     *
     * Generated from protobuf field <code>repeated string supported_azure_regions = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSupportedAzureRegions()
    {
        return $this->supported_azure_regions;
    }

    /**
     * The list of supported Azure regions.
     *
     * Generated from protobuf field <code>repeated string supported_azure_regions = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSupportedAzureRegions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->supported_azure_regions = $arr;

        return $this;
    }

}

