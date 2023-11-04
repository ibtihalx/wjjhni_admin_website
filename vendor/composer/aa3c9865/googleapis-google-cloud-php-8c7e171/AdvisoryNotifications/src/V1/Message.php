<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/advisorynotifications/v1/service.proto

namespace Google\Cloud\AdvisoryNotifications\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message which contains notification details.
 *
 * Generated from protobuf message <code>google.cloud.advisorynotifications.v1.Message</code>
 */
class Message extends \Google\Protobuf\Internal\Message
{
    /**
     * The message content.
     *
     * Generated from protobuf field <code>.google.cloud.advisorynotifications.v1.Message.Body body = 1;</code>
     */
    protected $body = null;
    /**
     * The attachments to download.
     *
     * Generated from protobuf field <code>repeated .google.cloud.advisorynotifications.v1.Attachment attachments = 2;</code>
     */
    private $attachments;
    /**
     * The Message creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     */
    protected $create_time = null;
    /**
     * Time when Message was localized
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp localization_time = 4;</code>
     */
    protected $localization_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AdvisoryNotifications\V1\Message\Body $body
     *           The message content.
     *     @type array<\Google\Cloud\AdvisoryNotifications\V1\Attachment>|\Google\Protobuf\Internal\RepeatedField $attachments
     *           The attachments to download.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The Message creation timestamp.
     *     @type \Google\Protobuf\Timestamp $localization_time
     *           Time when Message was localized
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Advisorynotifications\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The message content.
     *
     * Generated from protobuf field <code>.google.cloud.advisorynotifications.v1.Message.Body body = 1;</code>
     * @return \Google\Cloud\AdvisoryNotifications\V1\Message\Body|null
     */
    public function getBody()
    {
        return $this->body;
    }

    public function hasBody()
    {
        return isset($this->body);
    }

    public function clearBody()
    {
        unset($this->body);
    }

    /**
     * The message content.
     *
     * Generated from protobuf field <code>.google.cloud.advisorynotifications.v1.Message.Body body = 1;</code>
     * @param \Google\Cloud\AdvisoryNotifications\V1\Message\Body $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AdvisoryNotifications\V1\Message\Body::class);
        $this->body = $var;

        return $this;
    }

    /**
     * The attachments to download.
     *
     * Generated from protobuf field <code>repeated .google.cloud.advisorynotifications.v1.Attachment attachments = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * The attachments to download.
     *
     * Generated from protobuf field <code>repeated .google.cloud.advisorynotifications.v1.Attachment attachments = 2;</code>
     * @param array<\Google\Cloud\AdvisoryNotifications\V1\Attachment>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttachments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AdvisoryNotifications\V1\Attachment::class);
        $this->attachments = $arr;

        return $this;
    }

    /**
     * The Message creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * The Message creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Time when Message was localized
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp localization_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLocalizationTime()
    {
        return $this->localization_time;
    }

    public function hasLocalizationTime()
    {
        return isset($this->localization_time);
    }

    public function clearLocalizationTime()
    {
        unset($this->localization_time);
    }

    /**
     * Time when Message was localized
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp localization_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLocalizationTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->localization_time = $var;

        return $this;
    }

}

