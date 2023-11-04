<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InterconnectRemoteLocationConstraints</code>
 */
class InterconnectRemoteLocationConstraints extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] Port pair remote location constraints, which can take one of the following values: PORT_PAIR_UNCONSTRAINED_REMOTE_LOCATION, PORT_PAIR_MATCHING_REMOTE_LOCATION. GCP's API refers only to individual ports, but the UI uses this field when ordering a pair of ports, to prevent users from accidentally ordering something that is incompatible with their cloud provider. Specifically, when ordering a redundant pair of Cross-Cloud Interconnect ports, and one of them uses a remote location with portPairMatchingRemoteLocation set to matching, the UI requires that both ports use the same remote location.
     * Check the PortPairRemoteLocation enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string port_pair_remote_location = 495917351;</code>
     */
    private $port_pair_remote_location = null;
    /**
     * [Output Only] Port pair VLAN constraints, which can take one of the following values: PORT_PAIR_UNCONSTRAINED_VLAN, PORT_PAIR_MATCHING_VLAN
     * Check the PortPairVlan enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string port_pair_vlan = 478214506;</code>
     */
    private $port_pair_vlan = null;
    /**
     * [Output Only] [min-length, max-length] The minimum and maximum value (inclusive) for the IPv4 subnet length. For example, an interconnectRemoteLocation for Azure has {min: 30, max: 30} because Azure requires /30 subnets. This range specifies the values supported by both cloud providers. Interconnect currently supports /29 and /30 IPv4 subnet lengths. If a remote cloud has no constraint on IPv4 subnet length, the range would thus be {min: 29, max: 30}. 
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InterconnectRemoteLocationConstraintsSubnetLengthRange subnet_length_range = 184473670;</code>
     */
    private $subnet_length_range = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $port_pair_remote_location
     *           [Output Only] Port pair remote location constraints, which can take one of the following values: PORT_PAIR_UNCONSTRAINED_REMOTE_LOCATION, PORT_PAIR_MATCHING_REMOTE_LOCATION. GCP's API refers only to individual ports, but the UI uses this field when ordering a pair of ports, to prevent users from accidentally ordering something that is incompatible with their cloud provider. Specifically, when ordering a redundant pair of Cross-Cloud Interconnect ports, and one of them uses a remote location with portPairMatchingRemoteLocation set to matching, the UI requires that both ports use the same remote location.
     *           Check the PortPairRemoteLocation enum for the list of possible values.
     *     @type string $port_pair_vlan
     *           [Output Only] Port pair VLAN constraints, which can take one of the following values: PORT_PAIR_UNCONSTRAINED_VLAN, PORT_PAIR_MATCHING_VLAN
     *           Check the PortPairVlan enum for the list of possible values.
     *     @type \Google\Cloud\Compute\V1\InterconnectRemoteLocationConstraintsSubnetLengthRange $subnet_length_range
     *           [Output Only] [min-length, max-length] The minimum and maximum value (inclusive) for the IPv4 subnet length. For example, an interconnectRemoteLocation for Azure has {min: 30, max: 30} because Azure requires /30 subnets. This range specifies the values supported by both cloud providers. Interconnect currently supports /29 and /30 IPv4 subnet lengths. If a remote cloud has no constraint on IPv4 subnet length, the range would thus be {min: 29, max: 30}. 
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] Port pair remote location constraints, which can take one of the following values: PORT_PAIR_UNCONSTRAINED_REMOTE_LOCATION, PORT_PAIR_MATCHING_REMOTE_LOCATION. GCP's API refers only to individual ports, but the UI uses this field when ordering a pair of ports, to prevent users from accidentally ordering something that is incompatible with their cloud provider. Specifically, when ordering a redundant pair of Cross-Cloud Interconnect ports, and one of them uses a remote location with portPairMatchingRemoteLocation set to matching, the UI requires that both ports use the same remote location.
     * Check the PortPairRemoteLocation enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string port_pair_remote_location = 495917351;</code>
     * @return string
     */
    public function getPortPairRemoteLocation()
    {
        return isset($this->port_pair_remote_location) ? $this->port_pair_remote_location : '';
    }

    public function hasPortPairRemoteLocation()
    {
        return isset($this->port_pair_remote_location);
    }

    public function clearPortPairRemoteLocation()
    {
        unset($this->port_pair_remote_location);
    }

    /**
     * [Output Only] Port pair remote location constraints, which can take one of the following values: PORT_PAIR_UNCONSTRAINED_REMOTE_LOCATION, PORT_PAIR_MATCHING_REMOTE_LOCATION. GCP's API refers only to individual ports, but the UI uses this field when ordering a pair of ports, to prevent users from accidentally ordering something that is incompatible with their cloud provider. Specifically, when ordering a redundant pair of Cross-Cloud Interconnect ports, and one of them uses a remote location with portPairMatchingRemoteLocation set to matching, the UI requires that both ports use the same remote location.
     * Check the PortPairRemoteLocation enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string port_pair_remote_location = 495917351;</code>
     * @param string $var
     * @return $this
     */
    public function setPortPairRemoteLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->port_pair_remote_location = $var;

        return $this;
    }

    /**
     * [Output Only] Port pair VLAN constraints, which can take one of the following values: PORT_PAIR_UNCONSTRAINED_VLAN, PORT_PAIR_MATCHING_VLAN
     * Check the PortPairVlan enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string port_pair_vlan = 478214506;</code>
     * @return string
     */
    public function getPortPairVlan()
    {
        return isset($this->port_pair_vlan) ? $this->port_pair_vlan : '';
    }

    public function hasPortPairVlan()
    {
        return isset($this->port_pair_vlan);
    }

    public function clearPortPairVlan()
    {
        unset($this->port_pair_vlan);
    }

    /**
     * [Output Only] Port pair VLAN constraints, which can take one of the following values: PORT_PAIR_UNCONSTRAINED_VLAN, PORT_PAIR_MATCHING_VLAN
     * Check the PortPairVlan enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string port_pair_vlan = 478214506;</code>
     * @param string $var
     * @return $this
     */
    public function setPortPairVlan($var)
    {
        GPBUtil::checkString($var, True);
        $this->port_pair_vlan = $var;

        return $this;
    }

    /**
     * [Output Only] [min-length, max-length] The minimum and maximum value (inclusive) for the IPv4 subnet length. For example, an interconnectRemoteLocation for Azure has {min: 30, max: 30} because Azure requires /30 subnets. This range specifies the values supported by both cloud providers. Interconnect currently supports /29 and /30 IPv4 subnet lengths. If a remote cloud has no constraint on IPv4 subnet length, the range would thus be {min: 29, max: 30}. 
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InterconnectRemoteLocationConstraintsSubnetLengthRange subnet_length_range = 184473670;</code>
     * @return \Google\Cloud\Compute\V1\InterconnectRemoteLocationConstraintsSubnetLengthRange|null
     */
    public function getSubnetLengthRange()
    {
        return $this->subnet_length_range;
    }

    public function hasSubnetLengthRange()
    {
        return isset($this->subnet_length_range);
    }

    public function clearSubnetLengthRange()
    {
        unset($this->subnet_length_range);
    }

    /**
     * [Output Only] [min-length, max-length] The minimum and maximum value (inclusive) for the IPv4 subnet length. For example, an interconnectRemoteLocation for Azure has {min: 30, max: 30} because Azure requires /30 subnets. This range specifies the values supported by both cloud providers. Interconnect currently supports /29 and /30 IPv4 subnet lengths. If a remote cloud has no constraint on IPv4 subnet length, the range would thus be {min: 29, max: 30}. 
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InterconnectRemoteLocationConstraintsSubnetLengthRange subnet_length_range = 184473670;</code>
     * @param \Google\Cloud\Compute\V1\InterconnectRemoteLocationConstraintsSubnetLengthRange $var
     * @return $this
     */
    public function setSubnetLengthRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InterconnectRemoteLocationConstraintsSubnetLengthRange::class);
        $this->subnet_length_range = $var;

        return $this;
    }

}

