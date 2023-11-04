<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/participant.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [Participants.UpdateParticipant][google.cloud.dialogflow.v2.Participants.UpdateParticipant].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.UpdateParticipantRequest</code>
 */
class UpdateParticipantRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The participant to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Participant participant = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $participant = null;
    /**
     * Required. The mask to specify which fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Cloud\Dialogflow\V2\Participant $participant Required. The participant to update.
     * @param \Google\Protobuf\FieldMask              $updateMask  Required. The mask to specify which fields to update.
     *
     * @return \Google\Cloud\Dialogflow\V2\UpdateParticipantRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Dialogflow\V2\Participant $participant, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setParticipant($participant)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\Participant $participant
     *           Required. The participant to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The mask to specify which fields to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The participant to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Participant participant = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\Participant|null
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    public function hasParticipant()
    {
        return isset($this->participant);
    }

    public function clearParticipant()
    {
        unset($this->participant);
    }

    /**
     * Required. The participant to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Participant participant = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\Participant $var
     * @return $this
     */
    public function setParticipant($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Participant::class);
        $this->participant = $var;

        return $this;
    }

    /**
     * Required. The mask to specify which fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The mask to specify which fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

