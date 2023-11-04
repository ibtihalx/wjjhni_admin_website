<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Instance verify external sync settings response.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.SqlInstancesVerifyExternalSyncSettingsResponse</code>
 */
class SqlInstancesVerifyExternalSyncSettingsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * This is always `sql#migrationSettingErrorList`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    private $kind = '';
    /**
     * List of migration violations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1beta4.SqlExternalSyncSettingError errors = 2;</code>
     */
    private $errors;
    /**
     * List of migration warnings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1beta4.SqlExternalSyncSettingError warnings = 3;</code>
     */
    private $warnings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           This is always `sql#migrationSettingErrorList`.
     *     @type array<\Google\Cloud\Sql\V1beta4\SqlExternalSyncSettingError>|\Google\Protobuf\Internal\RepeatedField $errors
     *           List of migration violations.
     *     @type array<\Google\Cloud\Sql\V1beta4\SqlExternalSyncSettingError>|\Google\Protobuf\Internal\RepeatedField $warnings
     *           List of migration warnings.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * This is always `sql#migrationSettingErrorList`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always `sql#migrationSettingErrorList`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * List of migration violations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1beta4.SqlExternalSyncSettingError errors = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * List of migration violations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1beta4.SqlExternalSyncSettingError errors = 2;</code>
     * @param array<\Google\Cloud\Sql\V1beta4\SqlExternalSyncSettingError>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Sql\V1beta4\SqlExternalSyncSettingError::class);
        $this->errors = $arr;

        return $this;
    }

    /**
     * List of migration warnings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1beta4.SqlExternalSyncSettingError warnings = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * List of migration warnings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1beta4.SqlExternalSyncSettingError warnings = 3;</code>
     * @param array<\Google\Cloud\Sql\V1beta4\SqlExternalSyncSettingError>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWarnings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Sql\V1beta4\SqlExternalSyncSettingError::class);
        $this->warnings = $arr;

        return $this;
    }

}

