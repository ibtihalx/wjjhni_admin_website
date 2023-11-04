<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/reports_service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A row of report values.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.Row</code>
 */
class Row extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of values in the row.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.ReportValue values = 1;</code>
     */
    private $values;
    /**
     * The key for the partition this row belongs to. This field is empty
     * if the report is not partitioned.
     *
     * Generated from protobuf field <code>string partition_key = 2;</code>
     */
    private $partition_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Channel\V1\ReportValue>|\Google\Protobuf\Internal\RepeatedField $values
     *           The list of values in the row.
     *     @type string $partition_key
     *           The key for the partition this row belongs to. This field is empty
     *           if the report is not partitioned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\ReportsService::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of values in the row.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.ReportValue values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * The list of values in the row.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.ReportValue values = 1;</code>
     * @param array<\Google\Cloud\Channel\V1\ReportValue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Channel\V1\ReportValue::class);
        $this->values = $arr;

        return $this;
    }

    /**
     * The key for the partition this row belongs to. This field is empty
     * if the report is not partitioned.
     *
     * Generated from protobuf field <code>string partition_key = 2;</code>
     * @return string
     */
    public function getPartitionKey()
    {
        return $this->partition_key;
    }

    /**
     * The key for the partition this row belongs to. This field is empty
     * if the report is not partitioned.
     *
     * Generated from protobuf field <code>string partition_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPartitionKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->partition_key = $var;

        return $this;
    }

}

