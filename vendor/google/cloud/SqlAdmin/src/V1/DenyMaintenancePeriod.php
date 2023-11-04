<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Deny maintenance Periods. This specifies a date range during when all CSA
 * rollout will be denied.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.DenyMaintenancePeriod</code>
 */
class DenyMaintenancePeriod extends \Google\Protobuf\Internal\Message
{
    /**
     * "deny maintenance period" start date. If the year of the start date is
     * empty, the year of the end date also must be empty. In this case, it means
     * the deny maintenance period recurs every year. The date is in format
     * yyyy-mm-dd i.e., 2020-11-01, or mm-dd, i.e., 11-01
     *
     * Generated from protobuf field <code>string start_date = 1;</code>
     */
    private $start_date = '';
    /**
     * "deny maintenance period" end date. If the year of the end date is empty,
     * the year of the start date also must be empty. In this case, it means the
     * no maintenance interval recurs every year. The date is in format yyyy-mm-dd
     * i.e., 2020-11-01, or mm-dd, i.e., 11-01
     *
     * Generated from protobuf field <code>string end_date = 2;</code>
     */
    private $end_date = '';
    /**
     * Time in UTC when the "deny maintenance period" starts on start_date and
     * ends on end_date. The time is in format: HH:mm:SS, i.e., 00:00:00
     *
     * Generated from protobuf field <code>string time = 3;</code>
     */
    private $time = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $start_date
     *           "deny maintenance period" start date. If the year of the start date is
     *           empty, the year of the end date also must be empty. In this case, it means
     *           the deny maintenance period recurs every year. The date is in format
     *           yyyy-mm-dd i.e., 2020-11-01, or mm-dd, i.e., 11-01
     *     @type string $end_date
     *           "deny maintenance period" end date. If the year of the end date is empty,
     *           the year of the start date also must be empty. In this case, it means the
     *           no maintenance interval recurs every year. The date is in format yyyy-mm-dd
     *           i.e., 2020-11-01, or mm-dd, i.e., 11-01
     *     @type string $time
     *           Time in UTC when the "deny maintenance period" starts on start_date and
     *           ends on end_date. The time is in format: HH:mm:SS, i.e., 00:00:00
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * "deny maintenance period" start date. If the year of the start date is
     * empty, the year of the end date also must be empty. In this case, it means
     * the deny maintenance period recurs every year. The date is in format
     * yyyy-mm-dd i.e., 2020-11-01, or mm-dd, i.e., 11-01
     *
     * Generated from protobuf field <code>string start_date = 1;</code>
     * @return string
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * "deny maintenance period" start date. If the year of the start date is
     * empty, the year of the end date also must be empty. In this case, it means
     * the deny maintenance period recurs every year. The date is in format
     * yyyy-mm-dd i.e., 2020-11-01, or mm-dd, i.e., 11-01
     *
     * Generated from protobuf field <code>string start_date = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_date = $var;

        return $this;
    }

    /**
     * "deny maintenance period" end date. If the year of the end date is empty,
     * the year of the start date also must be empty. In this case, it means the
     * no maintenance interval recurs every year. The date is in format yyyy-mm-dd
     * i.e., 2020-11-01, or mm-dd, i.e., 11-01
     *
     * Generated from protobuf field <code>string end_date = 2;</code>
     * @return string
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * "deny maintenance period" end date. If the year of the end date is empty,
     * the year of the start date also must be empty. In this case, it means the
     * no maintenance interval recurs every year. The date is in format yyyy-mm-dd
     * i.e., 2020-11-01, or mm-dd, i.e., 11-01
     *
     * Generated from protobuf field <code>string end_date = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_date = $var;

        return $this;
    }

    /**
     * Time in UTC when the "deny maintenance period" starts on start_date and
     * ends on end_date. The time is in format: HH:mm:SS, i.e., 00:00:00
     *
     * Generated from protobuf field <code>string time = 3;</code>
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Time in UTC when the "deny maintenance period" starts on start_date and
     * ends on end_date. The time is in format: HH:mm:SS, i.e., 00:00:00
     *
     * Generated from protobuf field <code>string time = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->time = $var;

        return $this;
    }

}

