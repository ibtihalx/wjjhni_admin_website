<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeregistry/v1/registry_service.proto

namespace Google\Cloud\ApigeeRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ListApis.
 *
 * Generated from protobuf message <code>google.cloud.apigeeregistry.v1.ListApisResponse</code>
 */
class ListApisResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The APIs from the specified publisher.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apigeeregistry.v1.Api apis = 1;</code>
     */
    private $apis;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\ApigeeRegistry\V1\Api>|\Google\Protobuf\Internal\RepeatedField $apis
     *           The APIs from the specified publisher.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigeeregistry\V1\RegistryService::initOnce();
        parent::__construct($data);
    }

    /**
     * The APIs from the specified publisher.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apigeeregistry.v1.Api apis = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getApis()
    {
        return $this->apis;
    }

    /**
     * The APIs from the specified publisher.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apigeeregistry.v1.Api apis = 1;</code>
     * @param array<\Google\Cloud\ApigeeRegistry\V1\Api>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setApis($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ApigeeRegistry\V1\Api::class);
        $this->apis = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
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

}

