<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1beta2/file.proto

namespace Google\Cloud\ArtifactRegistry\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response from listing files.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1beta2.ListFilesResponse</code>
 */
class ListFilesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The files returned.
     *
     * Generated from protobuf field <code>repeated .google.devtools.artifactregistry.v1beta2.File files = 1;</code>
     */
    private $files;
    /**
     * The token to retrieve the next page of files, or empty if there are no
     * more files to return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\ArtifactRegistry\V1beta2\File>|\Google\Protobuf\Internal\RepeatedField $files
     *           The files returned.
     *     @type string $next_page_token
     *           The token to retrieve the next page of files, or empty if there are no
     *           more files to return.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2\File::initOnce();
        parent::__construct($data);
    }

    /**
     * The files returned.
     *
     * Generated from protobuf field <code>repeated .google.devtools.artifactregistry.v1beta2.File files = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * The files returned.
     *
     * Generated from protobuf field <code>repeated .google.devtools.artifactregistry.v1beta2.File files = 1;</code>
     * @param array<\Google\Cloud\ArtifactRegistry\V1beta2\File>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ArtifactRegistry\V1beta2\File::class);
        $this->files = $arr;

        return $this;
    }

    /**
     * The token to retrieve the next page of files, or empty if there are no
     * more files to return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The token to retrieve the next page of files, or empty if there are no
     * more files to return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

