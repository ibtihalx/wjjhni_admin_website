<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InterconnectAttachment;

use UnexpectedValueException;

/**
 * Desired availability domain for the attachment. Only available for type PARTNER, at creation time, and can take one of the following values: - AVAILABILITY_DOMAIN_ANY - AVAILABILITY_DOMAIN_1 - AVAILABILITY_DOMAIN_2 For improved reliability, customers should configure a pair of attachments, one per availability domain. The selected availability domain will be provided to the Partner via the pairing key, so that the provisioned circuit will lie in the specified domain. If not specified, the value will default to AVAILABILITY_DOMAIN_ANY.
 *
 * Protobuf type <code>google.cloud.compute.v1.InterconnectAttachment.EdgeAvailabilityDomain</code>
 */
class EdgeAvailabilityDomain
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_EDGE_AVAILABILITY_DOMAIN = 0;</code>
     */
    const UNDEFINED_EDGE_AVAILABILITY_DOMAIN = 0;
    /**
     * Generated from protobuf enum <code>AVAILABILITY_DOMAIN_1 = 349552090;</code>
     */
    const AVAILABILITY_DOMAIN_1 = 349552090;
    /**
     * Generated from protobuf enum <code>AVAILABILITY_DOMAIN_2 = 349552091;</code>
     */
    const AVAILABILITY_DOMAIN_2 = 349552091;
    /**
     * Generated from protobuf enum <code>AVAILABILITY_DOMAIN_ANY = 375256373;</code>
     */
    const AVAILABILITY_DOMAIN_ANY = 375256373;

    private static $valueToName = [
        self::UNDEFINED_EDGE_AVAILABILITY_DOMAIN => 'UNDEFINED_EDGE_AVAILABILITY_DOMAIN',
        self::AVAILABILITY_DOMAIN_1 => 'AVAILABILITY_DOMAIN_1',
        self::AVAILABILITY_DOMAIN_2 => 'AVAILABILITY_DOMAIN_2',
        self::AVAILABILITY_DOMAIN_ANY => 'AVAILABILITY_DOMAIN_ANY',
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


