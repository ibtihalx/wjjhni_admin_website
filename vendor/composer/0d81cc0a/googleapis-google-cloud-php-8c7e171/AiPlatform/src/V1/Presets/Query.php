<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation.proto

namespace Google\Cloud\AIPlatform\V1\Presets;

use UnexpectedValueException;

/**
 * Preset option controlling parameters for query speed-precision trade-off
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.Presets.Query</code>
 */
class Query
{
    /**
     * More precise neighbors as a trade-off against slower response.
     *
     * Generated from protobuf enum <code>PRECISE = 0;</code>
     */
    const PRECISE = 0;
    /**
     * Faster response as a trade-off against less precise neighbors.
     *
     * Generated from protobuf enum <code>FAST = 1;</code>
     */
    const FAST = 1;

    private static $valueToName = [
        self::PRECISE => 'PRECISE',
        self::FAST => 'FAST',
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


