<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/analytics_admin.proto

namespace Google\Analytics\Admin\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for UpdateProperty RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.UpdatePropertyRequest</code>
 */
class UpdatePropertyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The property to update.
     * The property's `name` field is used to identify the property to be
     * updated.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.Property property = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $property = null;
    /**
     * Required. The list of fields to be updated. Field names must be in snake
     * case (e.g., "field_to_update"). Omitted fields will not be updated. To
     * replace the entire entity, use one path with the string "*" to match all
     * fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Analytics\Admin\V1beta\Property $property   Required. The property to update.
     *                                                            The property's `name` field is used to identify the property to be
     *                                                            updated.
     * @param \Google\Protobuf\FieldMask              $updateMask Required. The list of fields to be updated. Field names must be in snake
     *                                                            case (e.g., "field_to_update"). Omitted fields will not be updated. To
     *                                                            replace the entire entity, use one path with the string "*" to match all
     *                                                            fields.
     *
     * @return \Google\Analytics\Admin\V1beta\UpdatePropertyRequest
     *
     * @experimental
     */
    public static function build(\Google\Analytics\Admin\V1beta\Property $property, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setProperty($property)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1beta\Property $property
     *           Required. The property to update.
     *           The property's `name` field is used to identify the property to be
     *           updated.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The list of fields to be updated. Field names must be in snake
     *           case (e.g., "field_to_update"). Omitted fields will not be updated. To
     *           replace the entire entity, use one path with the string "*" to match all
     *           fields.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Beta\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The property to update.
     * The property's `name` field is used to identify the property to be
     * updated.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.Property property = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1beta\Property|null
     */
    public function getProperty()
    {
        return $this->property;
    }

    public function hasProperty()
    {
        return isset($this->property);
    }

    public function clearProperty()
    {
        unset($this->property);
    }

    /**
     * Required. The property to update.
     * The property's `name` field is used to identify the property to be
     * updated.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.Property property = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1beta\Property $var
     * @return $this
     */
    public function setProperty($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1beta\Property::class);
        $this->property = $var;

        return $this;
    }

    /**
     * Required. The list of fields to be updated. Field names must be in snake
     * case (e.g., "field_to_update"). Omitted fields will not be updated. To
     * replace the entire entity, use one path with the string "*" to match all
     * fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The list of fields to be updated. Field names must be in snake
     * case (e.g., "field_to_update"). Omitted fields will not be updated. To
     * replace the entire entity, use one path with the string "*" to match all
     * fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

