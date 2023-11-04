<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_manager.proto

namespace Google\Cloud\CertificateManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a collection of certificate configurations.
 *
 * Generated from protobuf message <code>google.cloud.certificatemanager.v1.CertificateMap</code>
 */
class CertificateMap extends \Google\Protobuf\Internal\Message
{
    /**
     * A user-defined name of the Certificate Map. Certificate Map names must be
     * unique globally and match pattern
     * `projects/&#42;&#47;locations/&#42;&#47;certificateMaps/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * One or more paragraphs of text description of a certificate map.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     */
    private $description = '';
    /**
     * Output only. The creation timestamp of a Certificate Map.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The update timestamp of a Certificate Map.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Set of labels associated with a Certificate Map.
     *
     * Generated from protobuf field <code>map<string, string> labels = 3;</code>
     */
    private $labels;
    /**
     * Output only. A list of GCLB targets that use this Certificate Map.
     * A Target Proxy is only present on this list if it's attached to a
     * Forwarding Rule.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.CertificateMap.GclbTarget gclb_targets = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $gclb_targets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           A user-defined name of the Certificate Map. Certificate Map names must be
     *           unique globally and match pattern
     *           `projects/&#42;&#47;locations/&#42;&#47;certificateMaps/&#42;`.
     *     @type string $description
     *           One or more paragraphs of text description of a certificate map.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The creation timestamp of a Certificate Map.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The update timestamp of a Certificate Map.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Set of labels associated with a Certificate Map.
     *     @type array<\Google\Cloud\CertificateManager\V1\CertificateMap\GclbTarget>|\Google\Protobuf\Internal\RepeatedField $gclb_targets
     *           Output only. A list of GCLB targets that use this Certificate Map.
     *           A Target Proxy is only present on this list if it's attached to a
     *           Forwarding Rule.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Certificatemanager\V1\CertificateManager::initOnce();
        parent::__construct($data);
    }

    /**
     * A user-defined name of the Certificate Map. Certificate Map names must be
     * unique globally and match pattern
     * `projects/&#42;&#47;locations/&#42;&#47;certificateMaps/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A user-defined name of the Certificate Map. Certificate Map names must be
     * unique globally and match pattern
     * `projects/&#42;&#47;locations/&#42;&#47;certificateMaps/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * One or more paragraphs of text description of a certificate map.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * One or more paragraphs of text description of a certificate map.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. The creation timestamp of a Certificate Map.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The creation timestamp of a Certificate Map.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The update timestamp of a Certificate Map.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The update timestamp of a Certificate Map.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Set of labels associated with a Certificate Map.
     *
     * Generated from protobuf field <code>map<string, string> labels = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Set of labels associated with a Certificate Map.
     *
     * Generated from protobuf field <code>map<string, string> labels = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. A list of GCLB targets that use this Certificate Map.
     * A Target Proxy is only present on this list if it's attached to a
     * Forwarding Rule.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.CertificateMap.GclbTarget gclb_targets = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGclbTargets()
    {
        return $this->gclb_targets;
    }

    /**
     * Output only. A list of GCLB targets that use this Certificate Map.
     * A Target Proxy is only present on this list if it's attached to a
     * Forwarding Rule.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.CertificateMap.GclbTarget gclb_targets = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\CertificateManager\V1\CertificateMap\GclbTarget>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGclbTargets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\CertificateManager\V1\CertificateMap\GclbTarget::class);
        $this->gclb_targets = $arr;

        return $this;
    }

}

