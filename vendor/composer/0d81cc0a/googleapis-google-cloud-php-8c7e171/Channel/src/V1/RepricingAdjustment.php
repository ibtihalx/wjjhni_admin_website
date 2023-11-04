<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/repricing.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A type that represents the various adjustments you can apply to a bill.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.RepricingAdjustment</code>
 */
class RepricingAdjustment extends \Google\Protobuf\Internal\Message
{
    protected $adjustment;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Channel\V1\PercentageAdjustment $percentage_adjustment
     *           Flat markup or markdown on an entire bill.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Repricing::initOnce();
        parent::__construct($data);
    }

    /**
     * Flat markup or markdown on an entire bill.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.PercentageAdjustment percentage_adjustment = 2;</code>
     * @return \Google\Cloud\Channel\V1\PercentageAdjustment|null
     */
    public function getPercentageAdjustment()
    {
        return $this->readOneof(2);
    }

    public function hasPercentageAdjustment()
    {
        return $this->hasOneof(2);
    }

    /**
     * Flat markup or markdown on an entire bill.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.PercentageAdjustment percentage_adjustment = 2;</code>
     * @param \Google\Cloud\Channel\V1\PercentageAdjustment $var
     * @return $this
     */
    public function setPercentageAdjustment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\PercentageAdjustment::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAdjustment()
    {
        return $this->whichOneof("adjustment");
    }

}

