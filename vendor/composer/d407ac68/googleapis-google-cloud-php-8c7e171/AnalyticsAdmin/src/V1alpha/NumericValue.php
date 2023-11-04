<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/access_report.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * To represent a number.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.NumericValue</code>
 */
class NumericValue extends \Google\Protobuf\Internal\Message
{
    protected $one_value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $int64_value
     *           Integer value
     *     @type float $double_value
     *           Double value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AccessReport::initOnce();
        parent::__construct($data);
    }

    /**
     * Integer value
     *
     * Generated from protobuf field <code>int64 int64_value = 1;</code>
     * @return int|string
     */
    public function getInt64Value()
    {
        return $this->readOneof(1);
    }

    public function hasInt64Value()
    {
        return $this->hasOneof(1);
    }

    /**
     * Integer value
     *
     * Generated from protobuf field <code>int64 int64_value = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInt64Value($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Double value
     *
     * Generated from protobuf field <code>double double_value = 2;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->readOneof(2);
    }

    public function hasDoubleValue()
    {
        return $this->hasOneof(2);
    }

    /**
     * Double value
     *
     * Generated from protobuf field <code>double double_value = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOneValue()
    {
        return $this->whichOneof("one_value");
    }

}

