<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedidentities/v1/resource.proto

namespace Google\Cloud\ManagedIdentities\V1\Trust;

use UnexpectedValueException;

/**
 * Represents the different inter-forest trust types.
 *
 * Protobuf type <code>google.cloud.managedidentities.v1.Trust.TrustType</code>
 */
class TrustType
{
    /**
     * Not set.
     *
     * Generated from protobuf enum <code>TRUST_TYPE_UNSPECIFIED = 0;</code>
     */
    const TRUST_TYPE_UNSPECIFIED = 0;
    /**
     * The forest trust.
     *
     * Generated from protobuf enum <code>FOREST = 1;</code>
     */
    const FOREST = 1;
    /**
     * The external domain trust.
     *
     * Generated from protobuf enum <code>EXTERNAL = 2;</code>
     */
    const EXTERNAL = 2;

    private static $valueToName = [
        self::TRUST_TYPE_UNSPECIFIED => 'TRUST_TYPE_UNSPECIFIED',
        self::FOREST => 'FOREST',
        self::EXTERNAL => 'EXTERNAL',
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


