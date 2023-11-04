<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datafusion/v1/datafusion.proto

namespace Google\Cloud\DataFusion\V1\Accelerator;

use UnexpectedValueException;

/**
 * Each type represents an Accelerator (Add-On) supported by Cloud Data Fusion
 * service.
 *
 * Protobuf type <code>google.cloud.datafusion.v1.Accelerator.AcceleratorType</code>
 */
class AcceleratorType
{
    /**
     * Default value, if unspecified.
     *
     * Generated from protobuf enum <code>ACCELERATOR_TYPE_UNSPECIFIED = 0;</code>
     */
    const ACCELERATOR_TYPE_UNSPECIFIED = 0;
    /**
     * Change Data Capture accelerator for CDF.
     *
     * Generated from protobuf enum <code>CDC = 1;</code>
     */
    const CDC = 1;
    /**
     * Cloud Healthcare accelerator for CDF. This accelerator is to enable Cloud
     * Healthcare specific CDF plugins developed by Healthcare team.
     *
     * Generated from protobuf enum <code>HEALTHCARE = 2;</code>
     */
    const HEALTHCARE = 2;
    /**
     * Contact Center AI Insights
     * This accelerator is used to enable import and export pipelines
     * custom built to streamline CCAI Insights processing.
     *
     * Generated from protobuf enum <code>CCAI_INSIGHTS = 3;</code>
     */
    const CCAI_INSIGHTS = 3;

    private static $valueToName = [
        self::ACCELERATOR_TYPE_UNSPECIFIED => 'ACCELERATOR_TYPE_UNSPECIFIED',
        self::CDC => 'CDC',
        self::HEALTHCARE => 'HEALTHCARE',
        self::CCAI_INSIGHTS => 'CCAI_INSIGHTS',
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


