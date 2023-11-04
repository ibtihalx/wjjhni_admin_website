<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/metadata_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [MetadataService.GetContext][google.cloud.aiplatform.v1.MetadataService.GetContext].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.GetContextRequest</code>
 */
class GetContextRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Context to retrieve.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The resource name of the Context to retrieve.
     *                     Format:
     *                     `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`
     *                     Please see {@see MetadataServiceClient::contextName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\GetContextRequest
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
     *           Required. The resource name of the Context to retrieve.
     *           Format:
     *           `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MetadataService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Context to retrieve.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the Context to retrieve.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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

