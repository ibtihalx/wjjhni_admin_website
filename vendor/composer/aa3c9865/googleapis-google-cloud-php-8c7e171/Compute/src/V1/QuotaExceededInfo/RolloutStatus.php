<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\QuotaExceededInfo;

use UnexpectedValueException;

/**
 * Rollout status of the future quota limit.
 *
 * Protobuf type <code>google.cloud.compute.v1.QuotaExceededInfo.RolloutStatus</code>
 */
class RolloutStatus
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_ROLLOUT_STATUS = 0;</code>
     */
    const UNDEFINED_ROLLOUT_STATUS = 0;
    /**
     * IN_PROGRESS - A rollout is in process which will change the limit value to future limit.
     *
     * Generated from protobuf enum <code>IN_PROGRESS = 469193735;</code>
     */
    const IN_PROGRESS = 469193735;
    /**
     * ROLLOUT_STATUS_UNSPECIFIED - Rollout status is not specified. The default value.
     *
     * Generated from protobuf enum <code>ROLLOUT_STATUS_UNSPECIFIED = 26864568;</code>
     */
    const ROLLOUT_STATUS_UNSPECIFIED = 26864568;

    private static $valueToName = [
        self::UNDEFINED_ROLLOUT_STATUS => 'UNDEFINED_ROLLOUT_STATUS',
        self::IN_PROGRESS => 'IN_PROGRESS',
        self::ROLLOUT_STATUS_UNSPECIFIED => 'ROLLOUT_STATUS_UNSPECIFIED',
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


