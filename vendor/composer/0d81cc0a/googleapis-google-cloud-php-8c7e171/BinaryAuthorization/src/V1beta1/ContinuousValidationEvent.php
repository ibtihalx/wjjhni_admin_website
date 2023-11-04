<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/binaryauthorization/v1beta1/continuous_validation_logging.proto

namespace Google\Cloud\BinaryAuthorization\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an auditing event from Continuous Validation.
 *
 * Generated from protobuf message <code>google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent</code>
 */
class ContinuousValidationEvent extends \Google\Protobuf\Internal\Message
{
    protected $event_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent\ContinuousValidationPodEvent $pod_event
     *           Pod event.
     *     @type \Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent\ConfigErrorEvent $config_error_event
     *           Config error event.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Binaryauthorization\V1Beta1\ContinuousValidationLogging::initOnce();
        parent::__construct($data);
    }

    /**
     * Pod event.
     *
     * Generated from protobuf field <code>.google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent.ContinuousValidationPodEvent pod_event = 1;</code>
     * @return \Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent\ContinuousValidationPodEvent|null
     */
    public function getPodEvent()
    {
        return $this->readOneof(1);
    }

    public function hasPodEvent()
    {
        return $this->hasOneof(1);
    }

    /**
     * Pod event.
     *
     * Generated from protobuf field <code>.google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent.ContinuousValidationPodEvent pod_event = 1;</code>
     * @param \Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent\ContinuousValidationPodEvent $var
     * @return $this
     */
    public function setPodEvent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent\ContinuousValidationPodEvent::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Config error event.
     *
     * Generated from protobuf field <code>.google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent.ConfigErrorEvent config_error_event = 4;</code>
     * @return \Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent\ConfigErrorEvent|null
     */
    public function getConfigErrorEvent()
    {
        return $this->readOneof(4);
    }

    public function hasConfigErrorEvent()
    {
        return $this->hasOneof(4);
    }

    /**
     * Config error event.
     *
     * Generated from protobuf field <code>.google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent.ConfigErrorEvent config_error_event = 4;</code>
     * @param \Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent\ConfigErrorEvent $var
     * @return $this
     */
    public function setConfigErrorEvent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent\ConfigErrorEvent::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getEventType()
    {
        return $this->whichOneof("event_type");
    }

}

