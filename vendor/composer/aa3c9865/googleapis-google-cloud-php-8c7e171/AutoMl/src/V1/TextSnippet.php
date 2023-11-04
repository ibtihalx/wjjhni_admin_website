<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/data_items.proto

namespace Google\Cloud\AutoMl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A representation of a text snippet.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.TextSnippet</code>
 */
class TextSnippet extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The content of the text snippet as a string. Up to 250000
     * characters long.
     *
     * Generated from protobuf field <code>string content = 1;</code>
     */
    private $content = '';
    /**
     * Optional. The format of [content][google.cloud.automl.v1.TextSnippet.content]. Currently the only two allowed
     * values are "text/html" and "text/plain". If left blank, the format is
     * automatically determined from the type of the uploaded [content][google.cloud.automl.v1.TextSnippet.content].
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     */
    private $mime_type = '';
    /**
     * Output only. HTTP URI where you can download the content.
     *
     * Generated from protobuf field <code>string content_uri = 4;</code>
     */
    private $content_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $content
     *           Required. The content of the text snippet as a string. Up to 250000
     *           characters long.
     *     @type string $mime_type
     *           Optional. The format of [content][google.cloud.automl.v1.TextSnippet.content]. Currently the only two allowed
     *           values are "text/html" and "text/plain". If left blank, the format is
     *           automatically determined from the type of the uploaded [content][google.cloud.automl.v1.TextSnippet.content].
     *     @type string $content_uri
     *           Output only. HTTP URI where you can download the content.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\DataItems::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The content of the text snippet as a string. Up to 250000
     * characters long.
     *
     * Generated from protobuf field <code>string content = 1;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Required. The content of the text snippet as a string. Up to 250000
     * characters long.
     *
     * Generated from protobuf field <code>string content = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

    /**
     * Optional. The format of [content][google.cloud.automl.v1.TextSnippet.content]. Currently the only two allowed
     * values are "text/html" and "text/plain". If left blank, the format is
     * automatically determined from the type of the uploaded [content][google.cloud.automl.v1.TextSnippet.content].
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * Optional. The format of [content][google.cloud.automl.v1.TextSnippet.content]. Currently the only two allowed
     * values are "text/html" and "text/plain". If left blank, the format is
     * automatically determined from the type of the uploaded [content][google.cloud.automl.v1.TextSnippet.content].
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * Output only. HTTP URI where you can download the content.
     *
     * Generated from protobuf field <code>string content_uri = 4;</code>
     * @return string
     */
    public function getContentUri()
    {
        return $this->content_uri;
    }

    /**
     * Output only. HTTP URI where you can download the content.
     *
     * Generated from protobuf field <code>string content_uri = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setContentUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->content_uri = $var;

        return $this;
    }

}

