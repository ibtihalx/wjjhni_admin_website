<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/service.proto

namespace Google\Cloud\AutoMl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [AutoMl.CreateModel][google.cloud.automl.v1.AutoMl.CreateModel].
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.CreateModelRequest</code>
 */
class CreateModelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the parent project where the model is being created.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The model to create.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.Model model = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $model = null;

    /**
     * @param string                        $parent Required. Resource name of the parent project where the model is being created. Please see
     *                                              {@see AutoMlClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\AutoMl\V1\Model $model  Required. The model to create.
     *
     * @return \Google\Cloud\AutoMl\V1\CreateModelRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\AutoMl\V1\Model $model): self
    {
        return (new self())
            ->setParent($parent)
            ->setModel($model);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of the parent project where the model is being created.
     *     @type \Google\Cloud\AutoMl\V1\Model $model
     *           Required. The model to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the parent project where the model is being created.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the parent project where the model is being created.
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
     * Required. The model to create.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.Model model = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AutoMl\V1\Model|null
     */
    public function getModel()
    {
        return $this->model;
    }

    public function hasModel()
    {
        return isset($this->model);
    }

    public function clearModel()
    {
        unset($this->model);
    }

    /**
     * Required. The model to create.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.Model model = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AutoMl\V1\Model $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\Model::class);
        $this->model = $var;

        return $this;
    }

}

