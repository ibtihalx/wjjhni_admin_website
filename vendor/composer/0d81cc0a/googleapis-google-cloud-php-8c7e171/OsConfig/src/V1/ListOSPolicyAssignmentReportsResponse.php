<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy_assignment_reports.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response message for listing OS Policy assignment reports including the
 * page of results and page token.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.ListOSPolicyAssignmentReportsResponse</code>
 */
class ListOSPolicyAssignmentReportsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of OS policy assignment reports.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.OSPolicyAssignmentReport os_policy_assignment_reports = 1;</code>
     */
    private $os_policy_assignment_reports;
    /**
     * The pagination token to retrieve the next page of OS policy assignment
     * report objects.
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
     *     @type array<\Google\Cloud\OsConfig\V1\OSPolicyAssignmentReport>|\Google\Protobuf\Internal\RepeatedField $os_policy_assignment_reports
     *           List of OS policy assignment reports.
     *     @type string $next_page_token
     *           The pagination token to retrieve the next page of OS policy assignment
     *           report objects.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\OsPolicyAssignmentReports::initOnce();
        parent::__construct($data);
    }

    /**
     * List of OS policy assignment reports.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.OSPolicyAssignmentReport os_policy_assignment_reports = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOsPolicyAssignmentReports()
    {
        return $this->os_policy_assignment_reports;
    }

    /**
     * List of OS policy assignment reports.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.OSPolicyAssignmentReport os_policy_assignment_reports = 1;</code>
     * @param array<\Google\Cloud\OsConfig\V1\OSPolicyAssignmentReport>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOsPolicyAssignmentReports($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\OsConfig\V1\OSPolicyAssignmentReport::class);
        $this->os_policy_assignment_reports = $arr;

        return $this;
    }

    /**
     * The pagination token to retrieve the next page of OS policy assignment
     * report objects.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The pagination token to retrieve the next page of OS policy assignment
     * report objects.
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

