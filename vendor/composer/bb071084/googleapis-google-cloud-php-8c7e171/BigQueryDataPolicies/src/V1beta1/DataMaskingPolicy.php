<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datapolicies/v1beta1/datapolicy.proto

namespace Google\Cloud\BigQuery\DataPolicies\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The data masking policy that is used to specify data masking rule.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datapolicies.v1beta1.DataMaskingPolicy</code>
 */
class DataMaskingPolicy extends \Google\Protobuf\Internal\Message
{
    protected $masking_expression;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $predefined_expression
     *           A predefined masking expression.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datapolicies\V1Beta1\Datapolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * A predefined masking expression.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datapolicies.v1beta1.DataMaskingPolicy.PredefinedExpression predefined_expression = 1;</code>
     * @return int
     */
    public function getPredefinedExpression()
    {
        return $this->readOneof(1);
    }

    public function hasPredefinedExpression()
    {
        return $this->hasOneof(1);
    }

    /**
     * A predefined masking expression.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datapolicies.v1beta1.DataMaskingPolicy.PredefinedExpression predefined_expression = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPredefinedExpression($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\DataPolicies\V1beta1\DataMaskingPolicy\PredefinedExpression::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMaskingExpression()
    {
        return $this->whichOneof("masking_expression");
    }

}

