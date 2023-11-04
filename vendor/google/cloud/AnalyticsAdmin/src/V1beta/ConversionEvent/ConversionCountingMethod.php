<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/resources.proto

namespace Google\Analytics\Admin\V1beta\ConversionEvent;

use UnexpectedValueException;

/**
 * The method by which conversions will be counted across multiple events
 * within a session.
 *
 * Protobuf type <code>google.analytics.admin.v1beta.ConversionEvent.ConversionCountingMethod</code>
 */
class ConversionCountingMethod
{
    /**
     * Counting method not specified.
     *
     * Generated from protobuf enum <code>CONVERSION_COUNTING_METHOD_UNSPECIFIED = 0;</code>
     */
    const CONVERSION_COUNTING_METHOD_UNSPECIFIED = 0;
    /**
     * Each Event instance is considered a Conversion.
     *
     * Generated from protobuf enum <code>ONCE_PER_EVENT = 1;</code>
     */
    const ONCE_PER_EVENT = 1;
    /**
     * An Event instance is considered a Conversion at most once per session per
     * user.
     *
     * Generated from protobuf enum <code>ONCE_PER_SESSION = 2;</code>
     */
    const ONCE_PER_SESSION = 2;

    private static $valueToName = [
        self::CONVERSION_COUNTING_METHOD_UNSPECIFIED => 'CONVERSION_COUNTING_METHOD_UNSPECIFIED',
        self::ONCE_PER_EVENT => 'ONCE_PER_EVENT',
        self::ONCE_PER_SESSION => 'ONCE_PER_SESSION',
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
class_alias(ConversionCountingMethod::class, \Google\Analytics\Admin\V1beta\ConversionEvent_ConversionCountingMethod::class);

