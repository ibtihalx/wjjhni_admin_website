<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/execution.proto

namespace Google\Cloud\Notebooks\V1\ExecutionTemplate;

use UnexpectedValueException;

/**
 * Required. Specifies the machine types, the number of replicas for workers
 * and parameter servers.
 *
 * Protobuf type <code>google.cloud.notebooks.v1.ExecutionTemplate.ScaleTier</code>
 */
class ScaleTier
{
    /**
     * Unspecified Scale Tier.
     *
     * Generated from protobuf enum <code>SCALE_TIER_UNSPECIFIED = 0;</code>
     */
    const SCALE_TIER_UNSPECIFIED = 0;
    /**
     * A single worker instance. This tier is suitable for learning how to use
     * Cloud ML, and for experimenting with new models using small datasets.
     *
     * Generated from protobuf enum <code>BASIC = 1;</code>
     */
    const BASIC = 1;
    /**
     * Many workers and a few parameter servers.
     *
     * Generated from protobuf enum <code>STANDARD_1 = 2;</code>
     */
    const STANDARD_1 = 2;
    /**
     * A large number of workers with many parameter servers.
     *
     * Generated from protobuf enum <code>PREMIUM_1 = 3;</code>
     */
    const PREMIUM_1 = 3;
    /**
     * A single worker instance with a K80 GPU.
     *
     * Generated from protobuf enum <code>BASIC_GPU = 4;</code>
     */
    const BASIC_GPU = 4;
    /**
     * A single worker instance with a Cloud TPU.
     *
     * Generated from protobuf enum <code>BASIC_TPU = 5;</code>
     */
    const BASIC_TPU = 5;
    /**
     * The CUSTOM tier is not a set tier, but rather enables you to use your
     * own cluster specification. When you use this tier, set values to
     * configure your processing cluster according to these guidelines:
     * *   You _must_ set `ExecutionTemplate.masterType` to specify the type
     *     of machine to use for your master node. This is the only required
     *     setting.
     *
     * Generated from protobuf enum <code>CUSTOM = 6;</code>
     */
    const CUSTOM = 6;

    private static $valueToName = [
        self::SCALE_TIER_UNSPECIFIED => 'SCALE_TIER_UNSPECIFIED',
        self::BASIC => 'BASIC',
        self::STANDARD_1 => 'STANDARD_1',
        self::PREMIUM_1 => 'PREMIUM_1',
        self::BASIC_GPU => 'BASIC_GPU',
        self::BASIC_TPU => 'BASIC_TPU',
        self::CUSTOM => 'CUSTOM',
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
class_alias(ScaleTier::class, \Google\Cloud\Notebooks\V1\ExecutionTemplate_ScaleTier::class);

