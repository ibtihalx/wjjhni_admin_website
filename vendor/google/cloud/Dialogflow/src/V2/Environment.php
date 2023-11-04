<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/environment.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * You can create multiple versions of your agent and publish them to separate
 * environments.
 * When you edit an agent, you are editing the draft agent. At any point, you
 * can save the draft agent as an agent version, which is an immutable snapshot
 * of your agent.
 * When you save the draft agent, it is published to the default environment.
 * When you create agent versions, you can publish them to custom environments.
 * You can create a variety of custom environments for:
 * - testing
 * - development
 * - production
 * - etc.
 * For more information, see the [versions and environments
 * guide](https://cloud.google.com/dialogflow/docs/agents-versions).
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Environment</code>
 */
class Environment extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The unique identifier of this agent environment.
     * Supported formats:
     * - `projects/<Project ID>/agent/environments/<Environment ID>`
     * - `projects/<Project ID>/locations/<Location
     *   ID>/agent/environments/<Environment ID>`
     * The environment ID for the default environment is `-`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Optional. The developer-provided description for this environment.
     * The maximum length is 500 characters. If exceeded, the request is rejected.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    /**
     * Optional. The agent version loaded into this environment.
     * Supported formats:
     * - `projects/<Project ID>/agent/versions/<Version ID>`
     * - `projects/<Project ID>/locations/<Location ID>/agent/versions/<Version
     *   ID>`
     *
     * Generated from protobuf field <code>string agent_version = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    private $agent_version = '';
    /**
     * Output only. The state of this environment. This field is read-only, i.e.,
     * it cannot be set by create and update methods.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Environment.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. The last update time of this environment. This field is
     * read-only, i.e., it cannot be set by create and update methods.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Optional. Text to speech settings for this environment.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.TextToSpeechSettings text_to_speech_settings = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $text_to_speech_settings = null;
    /**
     * Optional. The fulfillment settings to use for this environment.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Fulfillment fulfillment = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $fulfillment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The unique identifier of this agent environment.
     *           Supported formats:
     *           - `projects/<Project ID>/agent/environments/<Environment ID>`
     *           - `projects/<Project ID>/locations/<Location
     *             ID>/agent/environments/<Environment ID>`
     *           The environment ID for the default environment is `-`.
     *     @type string $description
     *           Optional. The developer-provided description for this environment.
     *           The maximum length is 500 characters. If exceeded, the request is rejected.
     *     @type string $agent_version
     *           Optional. The agent version loaded into this environment.
     *           Supported formats:
     *           - `projects/<Project ID>/agent/versions/<Version ID>`
     *           - `projects/<Project ID>/locations/<Location ID>/agent/versions/<Version
     *             ID>`
     *     @type int $state
     *           Output only. The state of this environment. This field is read-only, i.e.,
     *           it cannot be set by create and update methods.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last update time of this environment. This field is
     *           read-only, i.e., it cannot be set by create and update methods.
     *     @type \Google\Cloud\Dialogflow\V2\TextToSpeechSettings $text_to_speech_settings
     *           Optional. Text to speech settings for this environment.
     *     @type \Google\Cloud\Dialogflow\V2\Fulfillment $fulfillment
     *           Optional. The fulfillment settings to use for this environment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Environment::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The unique identifier of this agent environment.
     * Supported formats:
     * - `projects/<Project ID>/agent/environments/<Environment ID>`
     * - `projects/<Project ID>/locations/<Location
     *   ID>/agent/environments/<Environment ID>`
     * The environment ID for the default environment is `-`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The unique identifier of this agent environment.
     * Supported formats:
     * - `projects/<Project ID>/agent/environments/<Environment ID>`
     * - `projects/<Project ID>/locations/<Location
     *   ID>/agent/environments/<Environment ID>`
     * The environment ID for the default environment is `-`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Optional. The developer-provided description for this environment.
     * The maximum length is 500 characters. If exceeded, the request is rejected.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. The developer-provided description for this environment.
     * The maximum length is 500 characters. If exceeded, the request is rejected.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. The agent version loaded into this environment.
     * Supported formats:
     * - `projects/<Project ID>/agent/versions/<Version ID>`
     * - `projects/<Project ID>/locations/<Location ID>/agent/versions/<Version
     *   ID>`
     *
     * Generated from protobuf field <code>string agent_version = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAgentVersion()
    {
        return $this->agent_version;
    }

    /**
     * Optional. The agent version loaded into this environment.
     * Supported formats:
     * - `projects/<Project ID>/agent/versions/<Version ID>`
     * - `projects/<Project ID>/locations/<Location ID>/agent/versions/<Version
     *   ID>`
     *
     * Generated from protobuf field <code>string agent_version = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAgentVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->agent_version = $var;

        return $this;
    }

    /**
     * Output only. The state of this environment. This field is read-only, i.e.,
     * it cannot be set by create and update methods.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Environment.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The state of this environment. This field is read-only, i.e.,
     * it cannot be set by create and update methods.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Environment.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\Environment\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The last update time of this environment. This field is
     * read-only, i.e., it cannot be set by create and update methods.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The last update time of this environment. This field is
     * read-only, i.e., it cannot be set by create and update methods.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. Text to speech settings for this environment.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.TextToSpeechSettings text_to_speech_settings = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dialogflow\V2\TextToSpeechSettings|null
     */
    public function getTextToSpeechSettings()
    {
        return $this->text_to_speech_settings;
    }

    public function hasTextToSpeechSettings()
    {
        return isset($this->text_to_speech_settings);
    }

    public function clearTextToSpeechSettings()
    {
        unset($this->text_to_speech_settings);
    }

    /**
     * Optional. Text to speech settings for this environment.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.TextToSpeechSettings text_to_speech_settings = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dialogflow\V2\TextToSpeechSettings $var
     * @return $this
     */
    public function setTextToSpeechSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\TextToSpeechSettings::class);
        $this->text_to_speech_settings = $var;

        return $this;
    }

    /**
     * Optional. The fulfillment settings to use for this environment.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Fulfillment fulfillment = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dialogflow\V2\Fulfillment|null
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    public function hasFulfillment()
    {
        return isset($this->fulfillment);
    }

    public function clearFulfillment()
    {
        unset($this->fulfillment);
    }

    /**
     * Optional. The fulfillment settings to use for this environment.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Fulfillment fulfillment = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dialogflow\V2\Fulfillment $var
     * @return $this
     */
    public function setFulfillment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Fulfillment::class);
        $this->fulfillment = $var;

        return $this;
    }

}

