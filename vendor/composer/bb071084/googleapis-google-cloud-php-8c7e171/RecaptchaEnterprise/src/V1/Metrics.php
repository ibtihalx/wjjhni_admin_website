<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metrics for a single Key.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.Metrics</code>
 */
class Metrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the metrics, in the format
     * `projects/{project}/keys/{key}/metrics`.
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Inclusive start time aligned to a day (UTC).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    private $start_time = null;
    /**
     * Metrics will be continuous and in order by dates, and in the granularity
     * of day. All Key types should have score-based data.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recaptchaenterprise.v1.ScoreMetrics score_metrics = 2;</code>
     */
    private $score_metrics;
    /**
     * Metrics will be continuous and in order by dates, and in the granularity
     * of day. Only challenge-based keys (CHECKBOX, INVISIBLE), will have
     * challenge-based data.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recaptchaenterprise.v1.ChallengeMetrics challenge_metrics = 3;</code>
     */
    private $challenge_metrics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The name of the metrics, in the format
     *           `projects/{project}/keys/{key}/metrics`.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Inclusive start time aligned to a day (UTC).
     *     @type array<\Google\Cloud\RecaptchaEnterprise\V1\ScoreMetrics>|\Google\Protobuf\Internal\RepeatedField $score_metrics
     *           Metrics will be continuous and in order by dates, and in the granularity
     *           of day. All Key types should have score-based data.
     *     @type array<\Google\Cloud\RecaptchaEnterprise\V1\ChallengeMetrics>|\Google\Protobuf\Internal\RepeatedField $challenge_metrics
     *           Metrics will be continuous and in order by dates, and in the granularity
     *           of day. Only challenge-based keys (CHECKBOX, INVISIBLE), will have
     *           challenge-based data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of the metrics, in the format
     * `projects/{project}/keys/{key}/metrics`.
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The name of the metrics, in the format
     * `projects/{project}/keys/{key}/metrics`.
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Inclusive start time aligned to a day (UTC).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Inclusive start time aligned to a day (UTC).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Metrics will be continuous and in order by dates, and in the granularity
     * of day. All Key types should have score-based data.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recaptchaenterprise.v1.ScoreMetrics score_metrics = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScoreMetrics()
    {
        return $this->score_metrics;
    }

    /**
     * Metrics will be continuous and in order by dates, and in the granularity
     * of day. All Key types should have score-based data.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recaptchaenterprise.v1.ScoreMetrics score_metrics = 2;</code>
     * @param array<\Google\Cloud\RecaptchaEnterprise\V1\ScoreMetrics>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScoreMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\RecaptchaEnterprise\V1\ScoreMetrics::class);
        $this->score_metrics = $arr;

        return $this;
    }

    /**
     * Metrics will be continuous and in order by dates, and in the granularity
     * of day. Only challenge-based keys (CHECKBOX, INVISIBLE), will have
     * challenge-based data.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recaptchaenterprise.v1.ChallengeMetrics challenge_metrics = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChallengeMetrics()
    {
        return $this->challenge_metrics;
    }

    /**
     * Metrics will be continuous and in order by dates, and in the granularity
     * of day. Only challenge-based keys (CHECKBOX, INVISIBLE), will have
     * challenge-based data.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recaptchaenterprise.v1.ChallengeMetrics challenge_metrics = 3;</code>
     * @param array<\Google\Cloud\RecaptchaEnterprise\V1\ChallengeMetrics>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChallengeMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\RecaptchaEnterprise\V1\ChallengeMetrics::class);
        $this->challenge_metrics = $arr;

        return $this;
    }

}

