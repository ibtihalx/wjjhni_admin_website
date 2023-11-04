<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the UpdateTopic method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.UpdateTopicRequest</code>
 */
class UpdateTopicRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The updated topic object.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Topic topic = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $topic = null;
    /**
     * Required. Indicates which fields in the provided topic to update. Must be
     * specified and non-empty. Note that if `update_mask` contains
     * "message_storage_policy" but the `message_storage_policy` is not set in
     * the `topic` provided above, then the updated value is determined by the
     * policy configured at the project or organization level.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Cloud\PubSub\V1\Topic $topic      Required. The updated topic object.
     * @param \Google\Protobuf\FieldMask    $updateMask Required. Indicates which fields in the provided topic to update. Must be
     *                                                  specified and non-empty. Note that if `update_mask` contains
     *                                                  "message_storage_policy" but the `message_storage_policy` is not set in
     *                                                  the `topic` provided above, then the updated value is determined by the
     *                                                  policy configured at the project or organization level.
     *
     * @return \Google\Cloud\PubSub\V1\UpdateTopicRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\PubSub\V1\Topic $topic, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setTopic($topic)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\PubSub\V1\Topic $topic
     *           Required. The updated topic object.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Indicates which fields in the provided topic to update. Must be
     *           specified and non-empty. Note that if `update_mask` contains
     *           "message_storage_policy" but the `message_storage_policy` is not set in
     *           the `topic` provided above, then the updated value is determined by the
     *           policy configured at the project or organization level.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The updated topic object.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Topic topic = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\PubSub\V1\Topic|null
     */
    public function getTopic()
    {
        return $this->topic;
    }

    public function hasTopic()
    {
        return isset($this->topic);
    }

    public function clearTopic()
    {
        unset($this->topic);
    }

    /**
     * Required. The updated topic object.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Topic topic = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\PubSub\V1\Topic $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\Topic::class);
        $this->topic = $var;

        return $this;
    }

    /**
     * Required. Indicates which fields in the provided topic to update. Must be
     * specified and non-empty. Note that if `update_mask` contains
     * "message_storage_policy" but the `message_storage_policy` is not set in
     * the `topic` provided above, then the updated value is determined by the
     * policy configured at the project or organization level.
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
     * Required. Indicates which fields in the provided topic to update. Must be
     * specified and non-empty. Note that if `update_mask` contains
     * "message_storage_policy" but the `message_storage_policy` is not set in
     * the `topic` provided above, then the updated value is determined by the
     * policy configured at the project or organization level.
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

