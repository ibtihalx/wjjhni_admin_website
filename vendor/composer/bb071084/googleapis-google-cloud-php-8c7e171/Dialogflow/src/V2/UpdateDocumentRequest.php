<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/document.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [Documents.UpdateDocument][google.cloud.dialogflow.v2.Documents.UpdateDocument].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.UpdateDocumentRequest</code>
 */
class UpdateDocumentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The document to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Document document = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $document = null;
    /**
     * Optional. Not specified means `update all`.
     * Currently, only `display_name` can be updated, an InvalidArgument will be
     * returned for attempting to update other fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Cloud\Dialogflow\V2\Document $document   Required. The document to update.
     * @param \Google\Protobuf\FieldMask           $updateMask Optional. Not specified means `update all`.
     *                                                         Currently, only `display_name` can be updated, an InvalidArgument will be
     *                                                         returned for attempting to update other fields.
     *
     * @return \Google\Cloud\Dialogflow\V2\UpdateDocumentRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Dialogflow\V2\Document $document, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setDocument($document)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\Document $document
     *           Required. The document to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. Not specified means `update all`.
     *           Currently, only `display_name` can be updated, an InvalidArgument will be
     *           returned for attempting to update other fields.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The document to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Document document = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\Document|null
     */
    public function getDocument()
    {
        return $this->document;
    }

    public function hasDocument()
    {
        return isset($this->document);
    }

    public function clearDocument()
    {
        unset($this->document);
    }

    /**
     * Required. The document to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Document document = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\Document $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Document::class);
        $this->document = $var;

        return $this;
    }

    /**
     * Optional. Not specified means `update all`.
     * Currently, only `display_name` can be updated, an InvalidArgument will be
     * returned for attempting to update other fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Not specified means `update all`.
     * Currently, only `display_name` can be updated, an InvalidArgument will be
     * returned for attempting to update other fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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

