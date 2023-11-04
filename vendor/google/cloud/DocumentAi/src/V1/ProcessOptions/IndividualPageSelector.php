<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1\ProcessOptions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of individual page numbers.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.ProcessOptions.IndividualPageSelector</code>
 */
class IndividualPageSelector extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Indices of the pages (starting from 1).
     *
     * Generated from protobuf field <code>repeated int32 pages = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $pages;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $pages
     *           Optional. Indices of the pages (starting from 1).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Indices of the pages (starting from 1).
     *
     * Generated from protobuf field <code>repeated int32 pages = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Optional. Indices of the pages (starting from 1).
     *
     * Generated from protobuf field <code>repeated int32 pages = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->pages = $arr;

        return $this;
    }

}


