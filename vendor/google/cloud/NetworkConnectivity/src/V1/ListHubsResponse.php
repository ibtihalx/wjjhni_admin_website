<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for
 * [HubService.ListHubs][google.cloud.networkconnectivity.v1.HubService.ListHubs]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.ListHubsResponse</code>
 */
class ListHubsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The requested hubs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.Hub hubs = 1;</code>
     */
    private $hubs;
    /**
     * The token for the next page of the response. To see more results,
     * use this value as the page_token for your next request. If this value
     * is empty, there are no more results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\NetworkConnectivity\V1\Hub>|\Google\Protobuf\Internal\RepeatedField $hubs
     *           The requested hubs.
     *     @type string $next_page_token
     *           The token for the next page of the response. To see more results,
     *           use this value as the page_token for your next request. If this value
     *           is empty, there are no more results.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * The requested hubs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.Hub hubs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHubs()
    {
        return $this->hubs;
    }

    /**
     * The requested hubs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.Hub hubs = 1;</code>
     * @param array<\Google\Cloud\NetworkConnectivity\V1\Hub>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHubs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetworkConnectivity\V1\Hub::class);
        $this->hubs = $arr;

        return $this;
    }

    /**
     * The token for the next page of the response. To see more results,
     * use this value as the page_token for your next request. If this value
     * is empty, there are no more results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The token for the next page of the response. To see more results,
     * use this value as the page_token for your next request. If this value
     * is empty, there are no more results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

