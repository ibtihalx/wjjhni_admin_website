<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/ssh_key.proto

namespace Google\Cloud\BareMetalSolution\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An SSH key, used for authorizing with the interactive serial console feature.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.SSHKey</code>
 */
class SSHKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of this SSH key.
     * Currently, the only valid value for the location is "global".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * The public SSH key. This must be in OpenSSH .authorized_keys format.
     *
     * Generated from protobuf field <code>string public_key = 2;</code>
     */
    private $public_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The name of this SSH key.
     *           Currently, the only valid value for the location is "global".
     *     @type string $public_key
     *           The public SSH key. This must be in OpenSSH .authorized_keys format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\SshKey::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of this SSH key.
     * Currently, the only valid value for the location is "global".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The name of this SSH key.
     * Currently, the only valid value for the location is "global".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * The public SSH key. This must be in OpenSSH .authorized_keys format.
     *
     * Generated from protobuf field <code>string public_key = 2;</code>
     * @return string
     */
    public function getPublicKey()
    {
        return $this->public_key;
    }

    /**
     * The public SSH key. This must be in OpenSSH .authorized_keys format.
     *
     * Generated from protobuf field <code>string public_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPublicKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->public_key = $var;

        return $this;
    }

}

