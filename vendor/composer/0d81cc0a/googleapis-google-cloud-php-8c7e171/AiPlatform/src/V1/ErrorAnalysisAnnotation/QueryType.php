<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/evaluated_annotation.proto

namespace Google\Cloud\AIPlatform\V1\ErrorAnalysisAnnotation;

use UnexpectedValueException;

/**
 * The query type used for finding the attributed items.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.ErrorAnalysisAnnotation.QueryType</code>
 */
class QueryType
{
    /**
     * Unspecified query type for model error analysis.
     *
     * Generated from protobuf enum <code>QUERY_TYPE_UNSPECIFIED = 0;</code>
     */
    const QUERY_TYPE_UNSPECIFIED = 0;
    /**
     * Query similar samples across all classes in the dataset.
     *
     * Generated from protobuf enum <code>ALL_SIMILAR = 1;</code>
     */
    const ALL_SIMILAR = 1;
    /**
     * Query similar samples from the same class of the input sample.
     *
     * Generated from protobuf enum <code>SAME_CLASS_SIMILAR = 2;</code>
     */
    const SAME_CLASS_SIMILAR = 2;
    /**
     * Query dissimilar samples from the same class of the input sample.
     *
     * Generated from protobuf enum <code>SAME_CLASS_DISSIMILAR = 3;</code>
     */
    const SAME_CLASS_DISSIMILAR = 3;

    private static $valueToName = [
        self::QUERY_TYPE_UNSPECIFIED => 'QUERY_TYPE_UNSPECIFIED',
        self::ALL_SIMILAR => 'ALL_SIMILAR',
        self::SAME_CLASS_SIMILAR => 'SAME_CLASS_SIMILAR',
        self::SAME_CLASS_DISSIMILAR => 'SAME_CLASS_DISSIMILAR',
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


