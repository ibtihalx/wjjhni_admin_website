<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response message for
 * [AssetService.AnalyzeIamPolicy][google.cloud.asset.v1.AssetService.AnalyzeIamPolicy].
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.AnalyzeIamPolicyResponse</code>
 */
class AnalyzeIamPolicyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The main analysis that matches the original request.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.AnalyzeIamPolicyResponse.IamPolicyAnalysis main_analysis = 1;</code>
     */
    private $main_analysis = null;
    /**
     * The service account impersonation analysis if
     * [AnalyzeIamPolicyRequest.analyze_service_account_impersonation][] is
     * enabled.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.AnalyzeIamPolicyResponse.IamPolicyAnalysis service_account_impersonation_analysis = 2;</code>
     */
    private $service_account_impersonation_analysis;
    /**
     * Represents whether all entries in the
     * [main_analysis][google.cloud.asset.v1.AnalyzeIamPolicyResponse.main_analysis]
     * and
     * [service_account_impersonation_analysis][google.cloud.asset.v1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis]
     * have been fully explored to answer the query in the request.
     *
     * Generated from protobuf field <code>bool fully_explored = 3;</code>
     */
    private $fully_explored = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Asset\V1\AnalyzeIamPolicyResponse\IamPolicyAnalysis $main_analysis
     *           The main analysis that matches the original request.
     *     @type array<\Google\Cloud\Asset\V1\AnalyzeIamPolicyResponse\IamPolicyAnalysis>|\Google\Protobuf\Internal\RepeatedField $service_account_impersonation_analysis
     *           The service account impersonation analysis if
     *           [AnalyzeIamPolicyRequest.analyze_service_account_impersonation][] is
     *           enabled.
     *     @type bool $fully_explored
     *           Represents whether all entries in the
     *           [main_analysis][google.cloud.asset.v1.AnalyzeIamPolicyResponse.main_analysis]
     *           and
     *           [service_account_impersonation_analysis][google.cloud.asset.v1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis]
     *           have been fully explored to answer the query in the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * The main analysis that matches the original request.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.AnalyzeIamPolicyResponse.IamPolicyAnalysis main_analysis = 1;</code>
     * @return \Google\Cloud\Asset\V1\AnalyzeIamPolicyResponse\IamPolicyAnalysis|null
     */
    public function getMainAnalysis()
    {
        return $this->main_analysis;
    }

    public function hasMainAnalysis()
    {
        return isset($this->main_analysis);
    }

    public function clearMainAnalysis()
    {
        unset($this->main_analysis);
    }

    /**
     * The main analysis that matches the original request.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.AnalyzeIamPolicyResponse.IamPolicyAnalysis main_analysis = 1;</code>
     * @param \Google\Cloud\Asset\V1\AnalyzeIamPolicyResponse\IamPolicyAnalysis $var
     * @return $this
     */
    public function setMainAnalysis($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\AnalyzeIamPolicyResponse\IamPolicyAnalysis::class);
        $this->main_analysis = $var;

        return $this;
    }

    /**
     * The service account impersonation analysis if
     * [AnalyzeIamPolicyRequest.analyze_service_account_impersonation][] is
     * enabled.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.AnalyzeIamPolicyResponse.IamPolicyAnalysis service_account_impersonation_analysis = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServiceAccountImpersonationAnalysis()
    {
        return $this->service_account_impersonation_analysis;
    }

    /**
     * The service account impersonation analysis if
     * [AnalyzeIamPolicyRequest.analyze_service_account_impersonation][] is
     * enabled.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.AnalyzeIamPolicyResponse.IamPolicyAnalysis service_account_impersonation_analysis = 2;</code>
     * @param array<\Google\Cloud\Asset\V1\AnalyzeIamPolicyResponse\IamPolicyAnalysis>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServiceAccountImpersonationAnalysis($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Asset\V1\AnalyzeIamPolicyResponse\IamPolicyAnalysis::class);
        $this->service_account_impersonation_analysis = $arr;

        return $this;
    }

    /**
     * Represents whether all entries in the
     * [main_analysis][google.cloud.asset.v1.AnalyzeIamPolicyResponse.main_analysis]
     * and
     * [service_account_impersonation_analysis][google.cloud.asset.v1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis]
     * have been fully explored to answer the query in the request.
     *
     * Generated from protobuf field <code>bool fully_explored = 3;</code>
     * @return bool
     */
    public function getFullyExplored()
    {
        return $this->fully_explored;
    }

    /**
     * Represents whether all entries in the
     * [main_analysis][google.cloud.asset.v1.AnalyzeIamPolicyResponse.main_analysis]
     * and
     * [service_account_impersonation_analysis][google.cloud.asset.v1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis]
     * have been fully explored to answer the query in the request.
     *
     * Generated from protobuf field <code>bool fully_explored = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setFullyExplored($var)
    {
        GPBUtil::checkBool($var);
        $this->fully_explored = $var;

        return $this;
    }

}

