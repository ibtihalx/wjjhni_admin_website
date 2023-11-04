<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/dataset_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [DatasetService.ExportData][google.cloud.aiplatform.v1.DatasetService.ExportData].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ExportDataRequest</code>
 */
class ExportDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Dataset resource.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The desired output location.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExportDataConfig export_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $export_config = null;

    /**
     * @param string                                       $name         Required. The name of the Dataset resource.
     *                                                                   Format:
     *                                                                   `projects/{project}/locations/{location}/datasets/{dataset}`
     *                                                                   Please see {@see DatasetServiceClient::datasetName()} for help formatting this field.
     * @param \Google\Cloud\AIPlatform\V1\ExportDataConfig $exportConfig Required. The desired output location.
     *
     * @return \Google\Cloud\AIPlatform\V1\ExportDataRequest
     *
     * @experimental
     */
    public static function build(string $name, \Google\Cloud\AIPlatform\V1\ExportDataConfig $exportConfig): self
    {
        return (new self())
            ->setName($name)
            ->setExportConfig($exportConfig);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the Dataset resource.
     *           Format:
     *           `projects/{project}/locations/{location}/datasets/{dataset}`
     *     @type \Google\Cloud\AIPlatform\V1\ExportDataConfig $export_config
     *           Required. The desired output location.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DatasetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Dataset resource.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the Dataset resource.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The desired output location.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExportDataConfig export_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\ExportDataConfig|null
     */
    public function getExportConfig()
    {
        return $this->export_config;
    }

    public function hasExportConfig()
    {
        return isset($this->export_config);
    }

    public function clearExportConfig()
    {
        unset($this->export_config);
    }

    /**
     * Required. The desired output location.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExportDataConfig export_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\ExportDataConfig $var
     * @return $this
     */
    public function setExportConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ExportDataConfig::class);
        $this->export_config = $var;

        return $this;
    }

}

