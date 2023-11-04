<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/lineage/v1/lineage.proto

namespace Google\Cloud\DataCatalog\Lineage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A process is the definition of a data transformation operation.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.lineage.v1.Process</code>
 */
class Process extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the lineage process. Format:
     * `projects/{project}/locations/{location}/processes/{process}`.
     * Can be specified or auto-assigned.
     * {process} must be not longer than 200 characters and only
     * contain characters in a set: `a-zA-Z0-9_-:.`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * Optional. A human-readable name you can set to display in a user interface.
     * Must be not longer than 200 characters and only contain UTF-8 letters
     * or numbers, spaces or characters like `_-:&.`
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $display_name = '';
    /**
     * Optional. The attributes of the process. Can be anything, for example,
     * "author". Up to 100 attributes are allowed.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> attributes = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $attributes;
    /**
     * Optional. The origin of this process and its runs and lineage events.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.lineage.v1.Origin origin = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $origin = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. The resource name of the lineage process. Format:
     *           `projects/{project}/locations/{location}/processes/{process}`.
     *           Can be specified or auto-assigned.
     *           {process} must be not longer than 200 characters and only
     *           contain characters in a set: `a-zA-Z0-9_-:.`
     *     @type string $display_name
     *           Optional. A human-readable name you can set to display in a user interface.
     *           Must be not longer than 200 characters and only contain UTF-8 letters
     *           or numbers, spaces or characters like `_-:&.`
     *     @type array|\Google\Protobuf\Internal\MapField $attributes
     *           Optional. The attributes of the process. Can be anything, for example,
     *           "author". Up to 100 attributes are allowed.
     *     @type \Google\Cloud\DataCatalog\Lineage\V1\Origin $origin
     *           Optional. The origin of this process and its runs and lineage events.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\Lineage\V1\Lineage::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the lineage process. Format:
     * `projects/{project}/locations/{location}/processes/{process}`.
     * Can be specified or auto-assigned.
     * {process} must be not longer than 200 characters and only
     * contain characters in a set: `a-zA-Z0-9_-:.`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The resource name of the lineage process. Format:
     * `projects/{project}/locations/{location}/processes/{process}`.
     * Can be specified or auto-assigned.
     * {process} must be not longer than 200 characters and only
     * contain characters in a set: `a-zA-Z0-9_-:.`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. A human-readable name you can set to display in a user interface.
     * Must be not longer than 200 characters and only contain UTF-8 letters
     * or numbers, spaces or characters like `_-:&.`
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. A human-readable name you can set to display in a user interface.
     * Must be not longer than 200 characters and only contain UTF-8 letters
     * or numbers, spaces or characters like `_-:&.`
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. The attributes of the process. Can be anything, for example,
     * "author". Up to 100 attributes are allowed.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> attributes = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Optional. The attributes of the process. Can be anything, for example,
     * "author". Up to 100 attributes are allowed.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> attributes = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * Optional. The origin of this process and its runs and lineage events.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.lineage.v1.Origin origin = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\DataCatalog\Lineage\V1\Origin|null
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    public function hasOrigin()
    {
        return isset($this->origin);
    }

    public function clearOrigin()
    {
        unset($this->origin);
    }

    /**
     * Optional. The origin of this process and its runs and lineage events.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.lineage.v1.Origin origin = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\DataCatalog\Lineage\V1\Origin $var
     * @return $this
     */
    public function setOrigin($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\Lineage\V1\Origin::class);
        $this->origin = $var;

        return $this;
    }

}

