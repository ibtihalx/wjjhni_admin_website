<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [TensorboardService.ReadTensorboardTimeSeriesData][google.cloud.aiplatform.v1.TensorboardService.ReadTensorboardTimeSeriesData].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ReadTensorboardTimeSeriesDataRequest</code>
 */
class ReadTensorboardTimeSeriesDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the TensorboardTimeSeries to read data from.
     * Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}`
     *
     * Generated from protobuf field <code>string tensorboard_time_series = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $tensorboard_time_series = '';
    /**
     * The maximum number of TensorboardTimeSeries' data to return.
     * This value should be a positive integer.
     * This value can be set to -1 to return all data.
     *
     * Generated from protobuf field <code>int32 max_data_points = 2;</code>
     */
    private $max_data_points = 0;
    /**
     * Reads the TensorboardTimeSeries' data that match the filter expression.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     */
    private $filter = '';

    /**
     * @param string $tensorboardTimeSeries Required. The resource name of the TensorboardTimeSeries to read data from.
     *                                      Format:
     *                                      `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}`
     *                                      Please see {@see TensorboardServiceClient::tensorboardTimeSeriesName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\ReadTensorboardTimeSeriesDataRequest
     *
     * @experimental
     */
    public static function build(string $tensorboardTimeSeries): self
    {
        return (new self())
            ->setTensorboardTimeSeries($tensorboardTimeSeries);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tensorboard_time_series
     *           Required. The resource name of the TensorboardTimeSeries to read data from.
     *           Format:
     *           `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}`
     *     @type int $max_data_points
     *           The maximum number of TensorboardTimeSeries' data to return.
     *           This value should be a positive integer.
     *           This value can be set to -1 to return all data.
     *     @type string $filter
     *           Reads the TensorboardTimeSeries' data that match the filter expression.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the TensorboardTimeSeries to read data from.
     * Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}`
     *
     * Generated from protobuf field <code>string tensorboard_time_series = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTensorboardTimeSeries()
    {
        return $this->tensorboard_time_series;
    }

    /**
     * Required. The resource name of the TensorboardTimeSeries to read data from.
     * Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}`
     *
     * Generated from protobuf field <code>string tensorboard_time_series = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTensorboardTimeSeries($var)
    {
        GPBUtil::checkString($var, True);
        $this->tensorboard_time_series = $var;

        return $this;
    }

    /**
     * The maximum number of TensorboardTimeSeries' data to return.
     * This value should be a positive integer.
     * This value can be set to -1 to return all data.
     *
     * Generated from protobuf field <code>int32 max_data_points = 2;</code>
     * @return int
     */
    public function getMaxDataPoints()
    {
        return $this->max_data_points;
    }

    /**
     * The maximum number of TensorboardTimeSeries' data to return.
     * This value should be a positive integer.
     * This value can be set to -1 to return all data.
     *
     * Generated from protobuf field <code>int32 max_data_points = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxDataPoints($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_data_points = $var;

        return $this;
    }

    /**
     * Reads the TensorboardTimeSeries' data that match the filter expression.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Reads the TensorboardTimeSeries' data that match the filter expression.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

