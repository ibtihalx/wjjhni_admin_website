<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1alpha/resources.proto

namespace Google\Cloud\AlloyDb\V1alpha;

use UnexpectedValueException;

/**
 * View on Cluster. Pass this enum to rpcs that returns a cluster message to
 * control which subsets of fields to get.
 *
 * Protobuf type <code>google.cloud.alloydb.v1alpha.ClusterView</code>
 */
class ClusterView
{
    /**
     * CLUSTER_VIEW_UNSPECIFIED Not specified, equivalent to BASIC.
     *
     * Generated from protobuf enum <code>CLUSTER_VIEW_UNSPECIFIED = 0;</code>
     */
    const CLUSTER_VIEW_UNSPECIFIED = 0;
    /**
     * BASIC server responses include all the relevant cluster details, excluding
     * Cluster.ContinuousBackupInfo.EarliestRestorableTime and other view-specific
     * fields. The default value.
     *
     * Generated from protobuf enum <code>CLUSTER_VIEW_BASIC = 1;</code>
     */
    const CLUSTER_VIEW_BASIC = 1;
    /**
     * CONTINUOUS_BACKUP response returns all the fields from BASIC plus
     * the earliest restorable time if continuous backups are enabled.
     * May increase latency.
     *
     * Generated from protobuf enum <code>CLUSTER_VIEW_CONTINUOUS_BACKUP = 2;</code>
     */
    const CLUSTER_VIEW_CONTINUOUS_BACKUP = 2;

    private static $valueToName = [
        self::CLUSTER_VIEW_UNSPECIFIED => 'CLUSTER_VIEW_UNSPECIFIED',
        self::CLUSTER_VIEW_BASIC => 'CLUSTER_VIEW_BASIC',
        self::CLUSTER_VIEW_CONTINUOUS_BACKUP => 'CLUSTER_VIEW_CONTINUOUS_BACKUP',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

