<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/compliance.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An indication that the compliance checks in the associated ComplianceNote
 * were not satisfied for particular resources or a specified reason.
 *
 * Generated from protobuf message <code>grafeas.v1.ComplianceOccurrence</code>
 */
class ComplianceOccurrence extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .grafeas.v1.NonCompliantFile non_compliant_files = 2;</code>
     */
    private $non_compliant_files;
    /**
     * Generated from protobuf field <code>string non_compliance_reason = 3;</code>
     */
    private $non_compliance_reason = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Grafeas\V1\NonCompliantFile>|\Google\Protobuf\Internal\RepeatedField $non_compliant_files
     *     @type string $non_compliance_reason
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Compliance::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .grafeas.v1.NonCompliantFile non_compliant_files = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNonCompliantFiles()
    {
        return $this->non_compliant_files;
    }

    /**
     * Generated from protobuf field <code>repeated .grafeas.v1.NonCompliantFile non_compliant_files = 2;</code>
     * @param array<\Grafeas\V1\NonCompliantFile>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNonCompliantFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Grafeas\V1\NonCompliantFile::class);
        $this->non_compliant_files = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string non_compliance_reason = 3;</code>
     * @return string
     */
    public function getNonComplianceReason()
    {
        return $this->non_compliance_reason;
    }

    /**
     * Generated from protobuf field <code>string non_compliance_reason = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNonComplianceReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->non_compliance_reason = $var;

        return $this;
    }

}

