<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v2/gce_setup.proto

namespace Google\Cloud\Notebooks\V2\AcceleratorConfig;

use UnexpectedValueException;

/**
 * Definition of the types of hardware accelerators that can be used on
 * this instance.
 *
 * Protobuf type <code>google.cloud.notebooks.v2.AcceleratorConfig.AcceleratorType</code>
 */
class AcceleratorType
{
    /**
     * Accelerator type is not specified.
     *
     * Generated from protobuf enum <code>ACCELERATOR_TYPE_UNSPECIFIED = 0;</code>
     */
    const ACCELERATOR_TYPE_UNSPECIFIED = 0;
    /**
     * Accelerator type is Nvidia Tesla P100.
     *
     * Generated from protobuf enum <code>NVIDIA_TESLA_P100 = 2;</code>
     */
    const NVIDIA_TESLA_P100 = 2;
    /**
     * Accelerator type is Nvidia Tesla V100.
     *
     * Generated from protobuf enum <code>NVIDIA_TESLA_V100 = 3;</code>
     */
    const NVIDIA_TESLA_V100 = 3;
    /**
     * Accelerator type is Nvidia Tesla P4.
     *
     * Generated from protobuf enum <code>NVIDIA_TESLA_P4 = 4;</code>
     */
    const NVIDIA_TESLA_P4 = 4;
    /**
     * Accelerator type is Nvidia Tesla T4.
     *
     * Generated from protobuf enum <code>NVIDIA_TESLA_T4 = 5;</code>
     */
    const NVIDIA_TESLA_T4 = 5;
    /**
     * Accelerator type is Nvidia Tesla A100 - 40GB.
     *
     * Generated from protobuf enum <code>NVIDIA_TESLA_A100 = 11;</code>
     */
    const NVIDIA_TESLA_A100 = 11;
    /**
     * Accelerator type is Nvidia Tesla A100 - 80GB.
     *
     * Generated from protobuf enum <code>NVIDIA_A100_80GB = 12;</code>
     */
    const NVIDIA_A100_80GB = 12;
    /**
     * Accelerator type is Nvidia Tesla L4.
     *
     * Generated from protobuf enum <code>NVIDIA_L4 = 13;</code>
     */
    const NVIDIA_L4 = 13;
    /**
     * Accelerator type is NVIDIA Tesla T4 Virtual Workstations.
     *
     * Generated from protobuf enum <code>NVIDIA_TESLA_T4_VWS = 8;</code>
     */
    const NVIDIA_TESLA_T4_VWS = 8;
    /**
     * Accelerator type is NVIDIA Tesla P100 Virtual Workstations.
     *
     * Generated from protobuf enum <code>NVIDIA_TESLA_P100_VWS = 9;</code>
     */
    const NVIDIA_TESLA_P100_VWS = 9;
    /**
     * Accelerator type is NVIDIA Tesla P4 Virtual Workstations.
     *
     * Generated from protobuf enum <code>NVIDIA_TESLA_P4_VWS = 10;</code>
     */
    const NVIDIA_TESLA_P4_VWS = 10;

    private static $valueToName = [
        self::ACCELERATOR_TYPE_UNSPECIFIED => 'ACCELERATOR_TYPE_UNSPECIFIED',
        self::NVIDIA_TESLA_P100 => 'NVIDIA_TESLA_P100',
        self::NVIDIA_TESLA_V100 => 'NVIDIA_TESLA_V100',
        self::NVIDIA_TESLA_P4 => 'NVIDIA_TESLA_P4',
        self::NVIDIA_TESLA_T4 => 'NVIDIA_TESLA_T4',
        self::NVIDIA_TESLA_A100 => 'NVIDIA_TESLA_A100',
        self::NVIDIA_A100_80GB => 'NVIDIA_A100_80GB',
        self::NVIDIA_L4 => 'NVIDIA_L4',
        self::NVIDIA_TESLA_T4_VWS => 'NVIDIA_TESLA_T4_VWS',
        self::NVIDIA_TESLA_P100_VWS => 'NVIDIA_TESLA_P100_VWS',
        self::NVIDIA_TESLA_P4_VWS => 'NVIDIA_TESLA_P4_VWS',
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
class_alias(AcceleratorType::class, \Google\Cloud\Notebooks\V2\AcceleratorConfig_AcceleratorType::class);

