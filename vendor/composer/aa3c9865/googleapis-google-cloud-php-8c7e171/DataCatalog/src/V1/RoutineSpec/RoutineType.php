<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1\RoutineSpec;

use UnexpectedValueException;

/**
 * The fine-grained type of the routine.
 *
 * Protobuf type <code>google.cloud.datacatalog.v1.RoutineSpec.RoutineType</code>
 */
class RoutineType
{
    /**
     * Unspecified type.
     *
     * Generated from protobuf enum <code>ROUTINE_TYPE_UNSPECIFIED = 0;</code>
     */
    const ROUTINE_TYPE_UNSPECIFIED = 0;
    /**
     * Non-builtin permanent scalar function.
     *
     * Generated from protobuf enum <code>SCALAR_FUNCTION = 1;</code>
     */
    const SCALAR_FUNCTION = 1;
    /**
     * Stored procedure.
     *
     * Generated from protobuf enum <code>PROCEDURE = 2;</code>
     */
    const PROCEDURE = 2;

    private static $valueToName = [
        self::ROUTINE_TYPE_UNSPECIFIED => 'ROUTINE_TYPE_UNSPECIFIED',
        self::SCALAR_FUNCTION => 'SCALAR_FUNCTION',
        self::PROCEDURE => 'PROCEDURE',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RoutineType::class, \Google\Cloud\DataCatalog\V1\RoutineSpec_RoutineType::class);

