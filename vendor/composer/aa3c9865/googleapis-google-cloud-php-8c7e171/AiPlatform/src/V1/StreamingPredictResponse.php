<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/prediction_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [PredictionService.StreamingPredict][google.cloud.aiplatform.v1.PredictionService.StreamingPredict].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.StreamingPredictResponse</code>
 */
class StreamingPredictResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The prediction output.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Tensor outputs = 1;</code>
     */
    private $outputs;
    /**
     * The parameters that govern the prediction.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Tensor parameters = 2;</code>
     */
    private $parameters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\Tensor>|\Google\Protobuf\Internal\RepeatedField $outputs
     *           The prediction output.
     *     @type \Google\Cloud\AIPlatform\V1\Tensor $parameters
     *           The parameters that govern the prediction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PredictionService::initOnce();
        parent::__construct($data);
    }

    /**
     * The prediction output.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Tensor outputs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputs()
    {
        return $this->outputs;
    }

    /**
     * The prediction output.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Tensor outputs = 1;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\Tensor>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Tensor::class);
        $this->outputs = $arr;

        return $this;
    }

    /**
     * The parameters that govern the prediction.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Tensor parameters = 2;</code>
     * @return \Google\Cloud\AIPlatform\V1\Tensor|null
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    public function hasParameters()
    {
        return isset($this->parameters);
    }

    public function clearParameters()
    {
        unset($this->parameters);
    }

    /**
     * The parameters that govern the prediction.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Tensor parameters = 2;</code>
     * @param \Google\Cloud\AIPlatform\V1\Tensor $var
     * @return $this
     */
    public function setParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Tensor::class);
        $this->parameters = $var;

        return $this;
    }

}

