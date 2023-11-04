<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The data for a sentiment annotation.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.SentimentData</code>
 */
class SentimentData extends \Google\Protobuf\Internal\Message
{
    /**
     * A non-negative number from 0 to infinity which represents the abolute
     * magnitude of sentiment regardless of score.
     *
     * Generated from protobuf field <code>float magnitude = 1;</code>
     */
    private $magnitude = 0.0;
    /**
     * The sentiment score between -1.0 (negative) and 1.0 (positive).
     *
     * Generated from protobuf field <code>float score = 2;</code>
     */
    private $score = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $magnitude
     *           A non-negative number from 0 to infinity which represents the abolute
     *           magnitude of sentiment regardless of score.
     *     @type float $score
     *           The sentiment score between -1.0 (negative) and 1.0 (positive).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * A non-negative number from 0 to infinity which represents the abolute
     * magnitude of sentiment regardless of score.
     *
     * Generated from protobuf field <code>float magnitude = 1;</code>
     * @return float
     */
    public function getMagnitude()
    {
        return $this->magnitude;
    }

    /**
     * A non-negative number from 0 to infinity which represents the abolute
     * magnitude of sentiment regardless of score.
     *
     * Generated from protobuf field <code>float magnitude = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setMagnitude($var)
    {
        GPBUtil::checkFloat($var);
        $this->magnitude = $var;

        return $this;
    }

    /**
     * The sentiment score between -1.0 (negative) and 1.0 (positive).
     *
     * Generated from protobuf field <code>float score = 2;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * The sentiment score between -1.0 (negative) and 1.0 (positive).
     *
     * Generated from protobuf field <code>float score = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

}

