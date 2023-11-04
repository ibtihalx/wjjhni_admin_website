<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1\NetworkConnection;

use UnexpectedValueException;

/**
 * Network connection state.
 *
 * Protobuf type <code>google.cloud.migrationcenter.v1.NetworkConnection.State</code>
 */
class State
{
    /**
     * Connection state is unknown or unspecified.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The connection is being opened.
     *
     * Generated from protobuf enum <code>OPENING = 1;</code>
     */
    const OPENING = 1;
    /**
     * The connection is open.
     *
     * Generated from protobuf enum <code>OPEN = 2;</code>
     */
    const OPEN = 2;
    /**
     * Listening for incoming connections.
     *
     * Generated from protobuf enum <code>LISTEN = 3;</code>
     */
    const LISTEN = 3;
    /**
     * The connection is being closed.
     *
     * Generated from protobuf enum <code>CLOSING = 4;</code>
     */
    const CLOSING = 4;
    /**
     * The connection is closed.
     *
     * Generated from protobuf enum <code>CLOSED = 5;</code>
     */
    const CLOSED = 5;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::OPENING => 'OPENING',
        self::OPEN => 'OPEN',
        self::LISTEN => 'LISTEN',
        self::CLOSING => 'CLOSING',
        self::CLOSED => 'CLOSED',
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


