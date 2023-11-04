<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Database instance backup configuration.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.BackupConfiguration</code>
 */
class BackupConfiguration extends \Google\Protobuf\Internal\Message
{
    /**
     * Start time for the daily backup configuration in UTC timezone in the 24
     * hour format - `HH:MM`.
     *
     * Generated from protobuf field <code>string start_time = 1;</code>
     */
    private $start_time = '';
    /**
     * Whether this configuration is enabled.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 2;</code>
     */
    private $enabled = null;
    /**
     * This is always `sql#backupConfiguration`.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     */
    private $kind = '';
    /**
     * (MySQL only) Whether binary log is enabled. If backup configuration is
     * disabled, binarylog must be disabled as well.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue binary_log_enabled = 4;</code>
     */
    private $binary_log_enabled = null;
    /**
     * Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue replication_log_archiving_enabled = 5;</code>
     */
    private $replication_log_archiving_enabled = null;
    /**
     * Location of the backup
     *
     * Generated from protobuf field <code>string location = 6;</code>
     */
    private $location = '';
    /**
     * Whether point in time recovery is enabled.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue point_in_time_recovery_enabled = 7;</code>
     */
    private $point_in_time_recovery_enabled = null;
    /**
     * Backup retention settings.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.BackupRetentionSettings backup_retention_settings = 8;</code>
     */
    private $backup_retention_settings = null;
    /**
     * The number of days of transaction logs we retain for point in time
     * restore, from 1-7.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value transaction_log_retention_days = 9;</code>
     */
    private $transaction_log_retention_days = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $start_time
     *           Start time for the daily backup configuration in UTC timezone in the 24
     *           hour format - `HH:MM`.
     *     @type \Google\Protobuf\BoolValue $enabled
     *           Whether this configuration is enabled.
     *     @type string $kind
     *           This is always `sql#backupConfiguration`.
     *     @type \Google\Protobuf\BoolValue $binary_log_enabled
     *           (MySQL only) Whether binary log is enabled. If backup configuration is
     *           disabled, binarylog must be disabled as well.
     *     @type \Google\Protobuf\BoolValue $replication_log_archiving_enabled
     *           Reserved for future use.
     *     @type string $location
     *           Location of the backup
     *     @type \Google\Protobuf\BoolValue $point_in_time_recovery_enabled
     *           Whether point in time recovery is enabled.
     *     @type \Google\Cloud\Sql\V1\BackupRetentionSettings $backup_retention_settings
     *           Backup retention settings.
     *     @type \Google\Protobuf\Int32Value $transaction_log_retention_days
     *           The number of days of transaction logs we retain for point in time
     *           restore, from 1-7.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Start time for the daily backup configuration in UTC timezone in the 24
     * hour format - `HH:MM`.
     *
     * Generated from protobuf field <code>string start_time = 1;</code>
     * @return string
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Start time for the daily backup configuration in UTC timezone in the 24
     * hour format - `HH:MM`.
     *
     * Generated from protobuf field <code>string start_time = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Whether this configuration is enabled.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 2;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    public function hasEnabled()
    {
        return isset($this->enabled);
    }

    public function clearEnabled()
    {
        unset($this->enabled);
    }

    /**
     * Returns the unboxed value from <code>getEnabled()</code>

     * Whether this configuration is enabled.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 2;</code>
     * @return bool|null
     */
    public function getEnabledValue()
    {
        return $this->readWrapperValue("enabled");
    }

    /**
     * Whether this configuration is enabled.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 2;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether this configuration is enabled.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 2;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setEnabledValue($var)
    {
        $this->writeWrapperValue("enabled", $var);
        return $this;}

    /**
     * This is always `sql#backupConfiguration`.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always `sql#backupConfiguration`.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
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
     * (MySQL only) Whether binary log is enabled. If backup configuration is
     * disabled, binarylog must be disabled as well.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue binary_log_enabled = 4;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getBinaryLogEnabled()
    {
        return $this->binary_log_enabled;
    }

    public function hasBinaryLogEnabled()
    {
        return isset($this->binary_log_enabled);
    }

    public function clearBinaryLogEnabled()
    {
        unset($this->binary_log_enabled);
    }

    /**
     * Returns the unboxed value from <code>getBinaryLogEnabled()</code>

     * (MySQL only) Whether binary log is enabled. If backup configuration is
     * disabled, binarylog must be disabled as well.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue binary_log_enabled = 4;</code>
     * @return bool|null
     */
    public function getBinaryLogEnabledValue()
    {
        return $this->readWrapperValue("binary_log_enabled");
    }

    /**
     * (MySQL only) Whether binary log is enabled. If backup configuration is
     * disabled, binarylog must be disabled as well.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue binary_log_enabled = 4;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setBinaryLogEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->binary_log_enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * (MySQL only) Whether binary log is enabled. If backup configuration is
     * disabled, binarylog must be disabled as well.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue binary_log_enabled = 4;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setBinaryLogEnabledValue($var)
    {
        $this->writeWrapperValue("binary_log_enabled", $var);
        return $this;}

    /**
     * Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue replication_log_archiving_enabled = 5;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getReplicationLogArchivingEnabled()
    {
        return $this->replication_log_archiving_enabled;
    }

    public function hasReplicationLogArchivingEnabled()
    {
        return isset($this->replication_log_archiving_enabled);
    }

    public function clearReplicationLogArchivingEnabled()
    {
        unset($this->replication_log_archiving_enabled);
    }

    /**
     * Returns the unboxed value from <code>getReplicationLogArchivingEnabled()</code>

     * Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue replication_log_archiving_enabled = 5;</code>
     * @return bool|null
     */
    public function getReplicationLogArchivingEnabledValue()
    {
        return $this->readWrapperValue("replication_log_archiving_enabled");
    }

    /**
     * Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue replication_log_archiving_enabled = 5;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setReplicationLogArchivingEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->replication_log_archiving_enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue replication_log_archiving_enabled = 5;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setReplicationLogArchivingEnabledValue($var)
    {
        $this->writeWrapperValue("replication_log_archiving_enabled", $var);
        return $this;}

    /**
     * Location of the backup
     *
     * Generated from protobuf field <code>string location = 6;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Location of the backup
     *
     * Generated from protobuf field <code>string location = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * Whether point in time recovery is enabled.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue point_in_time_recovery_enabled = 7;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getPointInTimeRecoveryEnabled()
    {
        return $this->point_in_time_recovery_enabled;
    }

    public function hasPointInTimeRecoveryEnabled()
    {
        return isset($this->point_in_time_recovery_enabled);
    }

    public function clearPointInTimeRecoveryEnabled()
    {
        unset($this->point_in_time_recovery_enabled);
    }

    /**
     * Returns the unboxed value from <code>getPointInTimeRecoveryEnabled()</code>

     * Whether point in time recovery is enabled.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue point_in_time_recovery_enabled = 7;</code>
     * @return bool|null
     */
    public function getPointInTimeRecoveryEnabledValue()
    {
        return $this->readWrapperValue("point_in_time_recovery_enabled");
    }

    /**
     * Whether point in time recovery is enabled.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue point_in_time_recovery_enabled = 7;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setPointInTimeRecoveryEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->point_in_time_recovery_enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether point in time recovery is enabled.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue point_in_time_recovery_enabled = 7;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setPointInTimeRecoveryEnabledValue($var)
    {
        $this->writeWrapperValue("point_in_time_recovery_enabled", $var);
        return $this;}

    /**
     * Backup retention settings.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.BackupRetentionSettings backup_retention_settings = 8;</code>
     * @return \Google\Cloud\Sql\V1\BackupRetentionSettings|null
     */
    public function getBackupRetentionSettings()
    {
        return $this->backup_retention_settings;
    }

    public function hasBackupRetentionSettings()
    {
        return isset($this->backup_retention_settings);
    }

    public function clearBackupRetentionSettings()
    {
        unset($this->backup_retention_settings);
    }

    /**
     * Backup retention settings.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.BackupRetentionSettings backup_retention_settings = 8;</code>
     * @param \Google\Cloud\Sql\V1\BackupRetentionSettings $var
     * @return $this
     */
    public function setBackupRetentionSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\BackupRetentionSettings::class);
        $this->backup_retention_settings = $var;

        return $this;
    }

    /**
     * The number of days of transaction logs we retain for point in time
     * restore, from 1-7.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value transaction_log_retention_days = 9;</code>
     * @return \Google\Protobuf\Int32Value|null
     */
    public function getTransactionLogRetentionDays()
    {
        return $this->transaction_log_retention_days;
    }

    public function hasTransactionLogRetentionDays()
    {
        return isset($this->transaction_log_retention_days);
    }

    public function clearTransactionLogRetentionDays()
    {
        unset($this->transaction_log_retention_days);
    }

    /**
     * Returns the unboxed value from <code>getTransactionLogRetentionDays()</code>

     * The number of days of transaction logs we retain for point in time
     * restore, from 1-7.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value transaction_log_retention_days = 9;</code>
     * @return int|null
     */
    public function getTransactionLogRetentionDaysValue()
    {
        return $this->readWrapperValue("transaction_log_retention_days");
    }

    /**
     * The number of days of transaction logs we retain for point in time
     * restore, from 1-7.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value transaction_log_retention_days = 9;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setTransactionLogRetentionDays($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->transaction_log_retention_days = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * The number of days of transaction logs we retain for point in time
     * restore, from 1-7.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value transaction_log_retention_days = 9;</code>
     * @param int|null $var
     * @return $this
     */
    public function setTransactionLogRetentionDaysValue($var)
    {
        $this->writeWrapperValue("transaction_log_retention_days", $var);
        return $this;}

}

