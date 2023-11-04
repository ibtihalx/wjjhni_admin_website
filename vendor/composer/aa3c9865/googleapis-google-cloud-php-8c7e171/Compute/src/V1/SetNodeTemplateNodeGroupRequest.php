<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for NodeGroups.SetNodeTemplate. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SetNodeTemplateNodeGroupRequest</code>
 */
class SetNodeTemplateNodeGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the NodeGroup resource to update.
     *
     * Generated from protobuf field <code>string node_group = 469958146 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $node_group = '';
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupsSetNodeTemplateRequest node_groups_set_node_template_request_resource = 117382321 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $node_groups_set_node_template_request_resource = null;
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     */
    private $project = '';
    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     */
    private $request_id = null;
    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "zone"];</code>
     */
    private $zone = '';

    /**
     * @param string                                                    $project                                  Project ID for this request.
     * @param string                                                    $zone                                     The name of the zone for this request.
     * @param string                                                    $nodeGroup                                Name of the NodeGroup resource to update.
     * @param \Google\Cloud\Compute\V1\NodeGroupsSetNodeTemplateRequest $nodeGroupsSetNodeTemplateRequestResource The body resource for this request
     *
     * @return \Google\Cloud\Compute\V1\SetNodeTemplateNodeGroupRequest
     *
     * @experimental
     */
    public static function build(string $project, string $zone, string $nodeGroup, \Google\Cloud\Compute\V1\NodeGroupsSetNodeTemplateRequest $nodeGroupsSetNodeTemplateRequestResource): self
    {
        return (new self())
            ->setProject($project)
            ->setZone($zone)
            ->setNodeGroup($nodeGroup)
            ->setNodeGroupsSetNodeTemplateRequestResource($nodeGroupsSetNodeTemplateRequestResource);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $node_group
     *           Name of the NodeGroup resource to update.
     *     @type \Google\Cloud\Compute\V1\NodeGroupsSetNodeTemplateRequest $node_groups_set_node_template_request_resource
     *           The body resource for this request
     *     @type string $project
     *           Project ID for this request.
     *     @type string $request_id
     *           An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *     @type string $zone
     *           The name of the zone for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the NodeGroup resource to update.
     *
     * Generated from protobuf field <code>string node_group = 469958146 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNodeGroup()
    {
        return $this->node_group;
    }

    /**
     * Name of the NodeGroup resource to update.
     *
     * Generated from protobuf field <code>string node_group = 469958146 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNodeGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_group = $var;

        return $this;
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupsSetNodeTemplateRequest node_groups_set_node_template_request_resource = 117382321 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\NodeGroupsSetNodeTemplateRequest|null
     */
    public function getNodeGroupsSetNodeTemplateRequestResource()
    {
        return $this->node_groups_set_node_template_request_resource;
    }

    public function hasNodeGroupsSetNodeTemplateRequestResource()
    {
        return isset($this->node_groups_set_node_template_request_resource);
    }

    public function clearNodeGroupsSetNodeTemplateRequestResource()
    {
        unset($this->node_groups_set_node_template_request_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupsSetNodeTemplateRequest node_groups_set_node_template_request_resource = 117382321 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\NodeGroupsSetNodeTemplateRequest $var
     * @return $this
     */
    public function setNodeGroupsSetNodeTemplateRequestResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\NodeGroupsSetNodeTemplateRequest::class);
        $this->node_groups_set_node_template_request_resource = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @return string
     */
    public function getRequestId()
    {
        return isset($this->request_id) ? $this->request_id : '';
    }

    public function hasRequestId()
    {
        return isset($this->request_id);
    }

    public function clearRequestId()
    {
        unset($this->request_id);
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "zone"];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "zone"];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

