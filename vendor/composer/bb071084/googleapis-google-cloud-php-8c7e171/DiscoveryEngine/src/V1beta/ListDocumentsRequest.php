<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/document_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [DocumentService.ListDocuments][google.cloud.discoveryengine.v1beta.DocumentService.ListDocuments]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.ListDocumentsRequest</code>
 */
class ListDocumentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent branch resource name, such as
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}`.
     * Use `default_branch` as the branch ID, to list documents under the default
     * branch.
     * If the caller does not have permission to list
     * [Document][google.cloud.discoveryengine.v1beta.Document]s under this
     * branch, regardless of whether or not this branch exists, a
     * `PERMISSION_DENIED` error is returned.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Maximum number of [Document][google.cloud.discoveryengine.v1beta.Document]s
     * to return. If unspecified, defaults to 100. The maximum allowed value is
     * 1000. Values above 1000 will be coerced to 1000.
     * If this field is negative, an `INVALID_ARGUMENT` error is returned.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * A page token
     * [ListDocumentsResponse.next_page_token][google.cloud.discoveryengine.v1beta.ListDocumentsResponse.next_page_token],
     * received from a previous
     * [DocumentService.ListDocuments][google.cloud.discoveryengine.v1beta.DocumentService.ListDocuments]
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * [DocumentService.ListDocuments][google.cloud.discoveryengine.v1beta.DocumentService.ListDocuments]
     * must match the call that provided the page token. Otherwise, an
     * `INVALID_ARGUMENT` error is returned.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The parent branch resource name, such as
     *                       `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}`.
     *                       Use `default_branch` as the branch ID, to list documents under the default
     *                       branch.
     *
     *                       If the caller does not have permission to list
     *                       [Document][google.cloud.discoveryengine.v1beta.Document]s under this
     *                       branch, regardless of whether or not this branch exists, a
     *                       `PERMISSION_DENIED` error is returned. Please see
     *                       {@see DocumentServiceClient::branchName()} for help formatting this field.
     *
     * @return \Google\Cloud\DiscoveryEngine\V1beta\ListDocumentsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent branch resource name, such as
     *           `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}`.
     *           Use `default_branch` as the branch ID, to list documents under the default
     *           branch.
     *           If the caller does not have permission to list
     *           [Document][google.cloud.discoveryengine.v1beta.Document]s under this
     *           branch, regardless of whether or not this branch exists, a
     *           `PERMISSION_DENIED` error is returned.
     *     @type int $page_size
     *           Maximum number of [Document][google.cloud.discoveryengine.v1beta.Document]s
     *           to return. If unspecified, defaults to 100. The maximum allowed value is
     *           1000. Values above 1000 will be coerced to 1000.
     *           If this field is negative, an `INVALID_ARGUMENT` error is returned.
     *     @type string $page_token
     *           A page token
     *           [ListDocumentsResponse.next_page_token][google.cloud.discoveryengine.v1beta.ListDocumentsResponse.next_page_token],
     *           received from a previous
     *           [DocumentService.ListDocuments][google.cloud.discoveryengine.v1beta.DocumentService.ListDocuments]
     *           call. Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to
     *           [DocumentService.ListDocuments][google.cloud.discoveryengine.v1beta.DocumentService.ListDocuments]
     *           must match the call that provided the page token. Otherwise, an
     *           `INVALID_ARGUMENT` error is returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\DocumentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent branch resource name, such as
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}`.
     * Use `default_branch` as the branch ID, to list documents under the default
     * branch.
     * If the caller does not have permission to list
     * [Document][google.cloud.discoveryengine.v1beta.Document]s under this
     * branch, regardless of whether or not this branch exists, a
     * `PERMISSION_DENIED` error is returned.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent branch resource name, such as
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}`.
     * Use `default_branch` as the branch ID, to list documents under the default
     * branch.
     * If the caller does not have permission to list
     * [Document][google.cloud.discoveryengine.v1beta.Document]s under this
     * branch, regardless of whether or not this branch exists, a
     * `PERMISSION_DENIED` error is returned.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Maximum number of [Document][google.cloud.discoveryengine.v1beta.Document]s
     * to return. If unspecified, defaults to 100. The maximum allowed value is
     * 1000. Values above 1000 will be coerced to 1000.
     * If this field is negative, an `INVALID_ARGUMENT` error is returned.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of [Document][google.cloud.discoveryengine.v1beta.Document]s
     * to return. If unspecified, defaults to 100. The maximum allowed value is
     * 1000. Values above 1000 will be coerced to 1000.
     * If this field is negative, an `INVALID_ARGUMENT` error is returned.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token
     * [ListDocumentsResponse.next_page_token][google.cloud.discoveryengine.v1beta.ListDocumentsResponse.next_page_token],
     * received from a previous
     * [DocumentService.ListDocuments][google.cloud.discoveryengine.v1beta.DocumentService.ListDocuments]
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * [DocumentService.ListDocuments][google.cloud.discoveryengine.v1beta.DocumentService.ListDocuments]
     * must match the call that provided the page token. Otherwise, an
     * `INVALID_ARGUMENT` error is returned.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token
     * [ListDocumentsResponse.next_page_token][google.cloud.discoveryengine.v1beta.ListDocumentsResponse.next_page_token],
     * received from a previous
     * [DocumentService.ListDocuments][google.cloud.discoveryengine.v1beta.DocumentService.ListDocuments]
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * [DocumentService.ListDocuments][google.cloud.discoveryengine.v1beta.DocumentService.ListDocuments]
     * must match the call that provided the page token. Otherwise, an
     * `INVALID_ARGUMENT` error is returned.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

