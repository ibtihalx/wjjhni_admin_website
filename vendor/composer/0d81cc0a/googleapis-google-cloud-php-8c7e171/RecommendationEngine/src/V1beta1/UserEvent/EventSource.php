<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/user_event.proto

namespace Google\Cloud\RecommendationEngine\V1beta1\UserEvent;

use UnexpectedValueException;

/**
 * User event source.
 *
 * Protobuf type <code>google.cloud.recommendationengine.v1beta1.UserEvent.EventSource</code>
 */
class EventSource
{
    /**
     * Unspecified event source.
     *
     * Generated from protobuf enum <code>EVENT_SOURCE_UNSPECIFIED = 0;</code>
     */
    const EVENT_SOURCE_UNSPECIFIED = 0;
    /**
     * The event is ingested via a javascript pixel or Recommendations AI Tag
     * through automl datalayer or JS Macros.
     *
     * Generated from protobuf enum <code>AUTOML = 1;</code>
     */
    const AUTOML = 1;
    /**
     * The event is ingested via Recommendations AI Tag through Enhanced
     * Ecommerce datalayer.
     *
     * Generated from protobuf enum <code>ECOMMERCE = 2;</code>
     */
    const ECOMMERCE = 2;
    /**
     * The event is ingested via Import user events API.
     *
     * Generated from protobuf enum <code>BATCH_UPLOAD = 3;</code>
     */
    const BATCH_UPLOAD = 3;

    private static $valueToName = [
        self::EVENT_SOURCE_UNSPECIFIED => 'EVENT_SOURCE_UNSPECIFIED',
        self::AUTOML => 'AUTOML',
        self::ECOMMERCE => 'ECOMMERCE',
        self::BATCH_UPLOAD => 'BATCH_UPLOAD',
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


