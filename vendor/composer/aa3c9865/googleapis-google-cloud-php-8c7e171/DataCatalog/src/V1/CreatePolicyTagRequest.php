<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/policytagmanager.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CreatePolicyTag][google.cloud.datacatalog.v1.PolicyTagManager.CreatePolicyTag].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.CreatePolicyTagRequest</code>
 */
class CreatePolicyTagRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the taxonomy that the policy tag will belong to.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The policy tag to create.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.PolicyTag policy_tag = 2;</code>
     */
    private $policy_tag = null;

    /**
     * @param string                                 $parent    Required. Resource name of the taxonomy that the policy tag will belong to. Please see
     *                                                          {@see PolicyTagManagerClient::taxonomyName()} for help formatting this field.
     * @param \Google\Cloud\DataCatalog\V1\PolicyTag $policyTag The policy tag to create.
     *
     * @return \Google\Cloud\DataCatalog\V1\CreatePolicyTagRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\DataCatalog\V1\PolicyTag $policyTag): self
    {
        return (new self())
            ->setParent($parent)
            ->setPolicyTag($policyTag);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of the taxonomy that the policy tag will belong to.
     *     @type \Google\Cloud\DataCatalog\V1\PolicyTag $policy_tag
     *           The policy tag to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Policytagmanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the taxonomy that the policy tag will belong to.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the taxonomy that the policy tag will belong to.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The policy tag to create.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.PolicyTag policy_tag = 2;</code>
     * @return \Google\Cloud\DataCatalog\V1\PolicyTag|null
     */
    public function getPolicyTag()
    {
        return $this->policy_tag;
    }

    public function hasPolicyTag()
    {
        return isset($this->policy_tag);
    }

    public function clearPolicyTag()
    {
        unset($this->policy_tag);
    }

    /**
     * The policy tag to create.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.PolicyTag policy_tag = 2;</code>
     * @param \Google\Cloud\DataCatalog\V1\PolicyTag $var
     * @return $this
     */
    public function setPolicyTag($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\PolicyTag::class);
        $this->policy_tag = $var;

        return $this;
    }

}

