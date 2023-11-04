<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/support/v2/case.proto

namespace Google\Cloud\Support\V2\PBCase;

use UnexpectedValueException;

/**
 * The status of a support case.
 *
 * Protobuf type <code>google.cloud.support.v2.Case.State</code>
 */
class State
{
    /**
     * Case is in an unknown state.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The case has been created but no one is assigned to work on it yet.
     *
     * Generated from protobuf enum <code>NEW = 1;</code>
     */
    const PBNEW = 1;
    /**
     * The case is currently being handled by Google support.
     *
     * Generated from protobuf enum <code>IN_PROGRESS_GOOGLE_SUPPORT = 2;</code>
     */
    const IN_PROGRESS_GOOGLE_SUPPORT = 2;
    /**
     * Google is waiting for a response.
     *
     * Generated from protobuf enum <code>ACTION_REQUIRED = 3;</code>
     */
    const ACTION_REQUIRED = 3;
    /**
     * A solution has been offered for the case, but it isn't yet closed.
     *
     * Generated from protobuf enum <code>SOLUTION_PROVIDED = 4;</code>
     */
    const SOLUTION_PROVIDED = 4;
    /**
     * The case has been resolved.
     *
     * Generated from protobuf enum <code>CLOSED = 5;</code>
     */
    const CLOSED = 5;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::PBNEW => 'NEW',
        self::IN_PROGRESS_GOOGLE_SUPPORT => 'IN_PROGRESS_GOOGLE_SUPPORT',
        self::ACTION_REQUIRED => 'ACTION_REQUIRED',
        self::SOLUTION_PROVIDED => 'SOLUTION_PROVIDED',
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
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}


