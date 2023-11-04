<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The protocol for the `UpdateUptimeCheckConfig` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.UpdateUptimeCheckConfigRequest</code>
 */
class UpdateUptimeCheckConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. If present, only the listed fields in the current Uptime check
     * configuration are updated with values from the new configuration. If this
     * field is empty, then the current configuration is completely replaced with
     * the new configuration.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;
    /**
     * Required. If an `updateMask` has been specified, this field gives
     * the values for the set of fields mentioned in the `updateMask`. If an
     * `updateMask` has not been given, this Uptime check configuration replaces
     * the current configuration. If a field is mentioned in `updateMask` but
     * the corresponding field is omitted in this partial Uptime check
     * configuration, it has the effect of deleting/clearing the field from the
     * configuration on the server.
     * The following fields can be updated: `display_name`,
     * `http_check`, `tcp_check`, `timeout`, `content_matchers`, and
     * `selected_regions`.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig uptime_check_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $uptime_check_config = null;

    /**
     * @param \Google\Cloud\Monitoring\V3\UptimeCheckConfig $uptimeCheckConfig Required. If an `updateMask` has been specified, this field gives
     *                                                                         the values for the set of fields mentioned in the `updateMask`. If an
     *                                                                         `updateMask` has not been given, this Uptime check configuration replaces
     *                                                                         the current configuration. If a field is mentioned in `updateMask` but
     *                                                                         the corresponding field is omitted in this partial Uptime check
     *                                                                         configuration, it has the effect of deleting/clearing the field from the
     *                                                                         configuration on the server.
     *
     *                                                                         The following fields can be updated: `display_name`,
     *                                                                         `http_check`, `tcp_check`, `timeout`, `content_matchers`, and
     *                                                                         `selected_regions`.
     *
     * @return \Google\Cloud\Monitoring\V3\UpdateUptimeCheckConfigRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Monitoring\V3\UptimeCheckConfig $uptimeCheckConfig): self
    {
        return (new self())
            ->setUptimeCheckConfig($uptimeCheckConfig);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. If present, only the listed fields in the current Uptime check
     *           configuration are updated with values from the new configuration. If this
     *           field is empty, then the current configuration is completely replaced with
     *           the new configuration.
     *     @type \Google\Cloud\Monitoring\V3\UptimeCheckConfig $uptime_check_config
     *           Required. If an `updateMask` has been specified, this field gives
     *           the values for the set of fields mentioned in the `updateMask`. If an
     *           `updateMask` has not been given, this Uptime check configuration replaces
     *           the current configuration. If a field is mentioned in `updateMask` but
     *           the corresponding field is omitted in this partial Uptime check
     *           configuration, it has the effect of deleting/clearing the field from the
     *           configuration on the server.
     *           The following fields can be updated: `display_name`,
     *           `http_check`, `tcp_check`, `timeout`, `content_matchers`, and
     *           `selected_regions`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\UptimeService::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. If present, only the listed fields in the current Uptime check
     * configuration are updated with values from the new configuration. If this
     * field is empty, then the current configuration is completely replaced with
     * the new configuration.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
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
     * Optional. If present, only the listed fields in the current Uptime check
     * configuration are updated with values from the new configuration. If this
     * field is empty, then the current configuration is completely replaced with
     * the new configuration.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. If an `updateMask` has been specified, this field gives
     * the values for the set of fields mentioned in the `updateMask`. If an
     * `updateMask` has not been given, this Uptime check configuration replaces
     * the current configuration. If a field is mentioned in `updateMask` but
     * the corresponding field is omitted in this partial Uptime check
     * configuration, it has the effect of deleting/clearing the field from the
     * configuration on the server.
     * The following fields can be updated: `display_name`,
     * `http_check`, `tcp_check`, `timeout`, `content_matchers`, and
     * `selected_regions`.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig uptime_check_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Monitoring\V3\UptimeCheckConfig|null
     */
    public function getUptimeCheckConfig()
    {
        return $this->uptime_check_config;
    }

    public function hasUptimeCheckConfig()
    {
        return isset($this->uptime_check_config);
    }

    public function clearUptimeCheckConfig()
    {
        unset($this->uptime_check_config);
    }

    /**
     * Required. If an `updateMask` has been specified, this field gives
     * the values for the set of fields mentioned in the `updateMask`. If an
     * `updateMask` has not been given, this Uptime check configuration replaces
     * the current configuration. If a field is mentioned in `updateMask` but
     * the corresponding field is omitted in this partial Uptime check
     * configuration, it has the effect of deleting/clearing the field from the
     * configuration on the server.
     * The following fields can be updated: `display_name`,
     * `http_check`, `tcp_check`, `timeout`, `content_matchers`, and
     * `selected_regions`.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig uptime_check_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Monitoring\V3\UptimeCheckConfig $var
     * @return $this
     */
    public function setUptimeCheckConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\UptimeCheckConfig::class);
        $this->uptime_check_config = $var;

        return $this;
    }

}

