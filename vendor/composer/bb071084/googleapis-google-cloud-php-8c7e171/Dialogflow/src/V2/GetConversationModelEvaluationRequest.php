<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_model.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [ConversationModels.GetConversationModelEvaluation][google.cloud.dialogflow.v2.ConversationModels.GetConversationModelEvaluation]
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.GetConversationModelEvaluationRequest</code>
 */
class GetConversationModelEvaluationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The conversation model evaluation resource name. Format:
     * `projects/<Project ID>/conversationModels/<Conversation Model
     * ID>/evaluations/<Evaluation ID>`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The conversation model evaluation resource name. Format:
     *                     `projects/<Project ID>/conversationModels/<Conversation Model
     *                     ID>/evaluations/<Evaluation ID>`
     *
     * @return \Google\Cloud\Dialogflow\V2\GetConversationModelEvaluationRequest
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
     *           Required. The conversation model evaluation resource name. Format:
     *           `projects/<Project ID>/conversationModels/<Conversation Model
     *           ID>/evaluations/<Evaluation ID>`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationModel::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The conversation model evaluation resource name. Format:
     * `projects/<Project ID>/conversationModels/<Conversation Model
     * ID>/evaluations/<Evaluation ID>`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The conversation model evaluation resource name. Format:
     * `projects/<Project ID>/conversationModels/<Conversation Model
     * ID>/evaluations/<Evaluation ID>`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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

