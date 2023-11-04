<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1\RunningService;

use UnexpectedValueException;

/**
 * Service state (OS-agnostic).
 *
 * Protobuf type <code>google.cloud.migrationcenter.v1.RunningService.State</code>
 */
class State
{
    /**
     * Service state unspecified.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Service is active.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * Service is paused.
     *
     * Generated from protobuf enum <code>PAUSED = 2;</code>
     */
    const PAUSED = 2;
    /**
     * Service is stopped.
     *
     * Generated from protobuf enum <code>STOPPED = 3;</code>
     */
    const STOPPED = 3;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::ACTIVE => 'ACTIVE',
        self::PAUSED => 'PAUSED',
        self::STOPPED => 'STOPPED',
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


