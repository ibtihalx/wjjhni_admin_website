<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `MoveFile` request message.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.MoveFileRequest</code>
 */
class MoveFileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The workspace's name.
     *
     * Generated from protobuf field <code>string workspace = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $workspace = '';
    /**
     * Required. The file's full path including filename, relative to the
     * workspace root.
     *
     * Generated from protobuf field <code>string path = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $path = '';
    /**
     * Required. The file's new path including filename, relative to the workspace
     * root.
     *
     * Generated from protobuf field <code>string new_path = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $new_path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $workspace
     *           Required. The workspace's name.
     *     @type string $path
     *           Required. The file's full path including filename, relative to the
     *           workspace root.
     *     @type string $new_path
     *           Required. The file's new path including filename, relative to the workspace
     *           root.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The workspace's name.
     *
     * Generated from protobuf field <code>string workspace = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getWorkspace()
    {
        return $this->workspace;
    }

    /**
     * Required. The workspace's name.
     *
     * Generated from protobuf field <code>string workspace = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setWorkspace($var)
    {
        GPBUtil::checkString($var, True);
        $this->workspace = $var;

        return $this;
    }

    /**
     * Required. The file's full path including filename, relative to the
     * workspace root.
     *
     * Generated from protobuf field <code>string path = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Required. The file's full path including filename, relative to the
     * workspace root.
     *
     * Generated from protobuf field <code>string path = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Required. The file's new path including filename, relative to the workspace
     * root.
     *
     * Generated from protobuf field <code>string new_path = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNewPath()
    {
        return $this->new_path;
    }

    /**
     * Required. The file's new path including filename, relative to the workspace
     * root.
     *
     * Generated from protobuf field <code>string new_path = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNewPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_path = $var;

        return $this;
    }

}

