<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/event_create_and_edit.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines an event parameter to mutate.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ParameterMutation</code>
 */
class ParameterMutation extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the parameter to mutate.
     * This value must:
     * * be less than 40 characters.
     * * be unique across across all mutations within the rule
     * * consist only of letters, digits or _ (underscores)
     * For event edit rules, the name may also be set to 'event_name' to modify
     * the event_name in place.
     *
     * Generated from protobuf field <code>string parameter = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parameter = '';
    /**
     * Required. The value mutation to perform.
     * * Must be less than 100 characters.
     * * To specify a constant value for the param, use the value's string.
     * * To copy value from another parameter, use syntax like
     * "[[other_parameter]]" For more details, see this [help center
     * article](https://support.google.com/analytics/answer/10085872#modify-an-event&zippy=%2Cin-this-article%2Cmodify-parameters).
     *
     * Generated from protobuf field <code>string parameter_value = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parameter_value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parameter
     *           Required. The name of the parameter to mutate.
     *           This value must:
     *           * be less than 40 characters.
     *           * be unique across across all mutations within the rule
     *           * consist only of letters, digits or _ (underscores)
     *           For event edit rules, the name may also be set to 'event_name' to modify
     *           the event_name in place.
     *     @type string $parameter_value
     *           Required. The value mutation to perform.
     *           * Must be less than 100 characters.
     *           * To specify a constant value for the param, use the value's string.
     *           * To copy value from another parameter, use syntax like
     *           "[[other_parameter]]" For more details, see this [help center
     *           article](https://support.google.com/analytics/answer/10085872#modify-an-event&zippy=%2Cin-this-article%2Cmodify-parameters).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\EventCreateAndEdit::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the parameter to mutate.
     * This value must:
     * * be less than 40 characters.
     * * be unique across across all mutations within the rule
     * * consist only of letters, digits or _ (underscores)
     * For event edit rules, the name may also be set to 'event_name' to modify
     * the event_name in place.
     *
     * Generated from protobuf field <code>string parameter = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Required. The name of the parameter to mutate.
     * This value must:
     * * be less than 40 characters.
     * * be unique across across all mutations within the rule
     * * consist only of letters, digits or _ (underscores)
     * For event edit rules, the name may also be set to 'event_name' to modify
     * the event_name in place.
     *
     * Generated from protobuf field <code>string parameter = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParameter($var)
    {
        GPBUtil::checkString($var, True);
        $this->parameter = $var;

        return $this;
    }

    /**
     * Required. The value mutation to perform.
     * * Must be less than 100 characters.
     * * To specify a constant value for the param, use the value's string.
     * * To copy value from another parameter, use syntax like
     * "[[other_parameter]]" For more details, see this [help center
     * article](https://support.google.com/analytics/answer/10085872#modify-an-event&zippy=%2Cin-this-article%2Cmodify-parameters).
     *
     * Generated from protobuf field <code>string parameter_value = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParameterValue()
    {
        return $this->parameter_value;
    }

    /**
     * Required. The value mutation to perform.
     * * Must be less than 100 characters.
     * * To specify a constant value for the param, use the value's string.
     * * To copy value from another parameter, use syntax like
     * "[[other_parameter]]" For more details, see this [help center
     * article](https://support.google.com/analytics/answer/10085872#modify-an-event&zippy=%2Cin-this-article%2Cmodify-parameters).
     *
     * Generated from protobuf field <code>string parameter_value = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParameterValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->parameter_value = $var;

        return $this;
    }

}

