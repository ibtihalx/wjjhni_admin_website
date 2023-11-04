<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/managed_service.proto

namespace Google\Cloud\Notebooks\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for updating a Managed Notebook configuration.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1.UpdateRuntimeRequest</code>
 */
class UpdateRuntimeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Runtime to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.Runtime runtime = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $runtime = null;
    /**
     * Required. Specifies the path, relative to `Runtime`, of
     * the field to update. For example, to change the software configuration
     * kernels, the `update_mask` parameter would be
     * specified as `software_config.kernels`,
     * and the `PATCH` request body would specify the new value, as follows:
     *     {
     *       "software_config":{
     *         "kernels": [{
     *            'repository':
     *            'gcr.io/deeplearning-platform-release/pytorch-gpu', 'tag':
     *            'latest' }],
     *         }
     *     }
     * Currently, only the following fields can be updated:
     * - `software_config.kernels`
     * - `software_config.post_startup_script`
     * - `software_config.custom_gpu_driver_path`
     * - `software_config.idle_shutdown`
     * - `software_config.idle_shutdown_timeout`
     * - `software_config.disable_terminal`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * Idempotent request UUID.
     *
     * Generated from protobuf field <code>string request_id = 3;</code>
     */
    private $request_id = '';

    /**
     * @param \Google\Cloud\Notebooks\V1\Runtime $runtime    Required. The Runtime to be updated.
     * @param \Google\Protobuf\FieldMask         $updateMask Required. Specifies the path, relative to `Runtime`, of
     *                                                       the field to update. For example, to change the software configuration
     *                                                       kernels, the `update_mask` parameter would be
     *                                                       specified as `software_config.kernels`,
     *                                                       and the `PATCH` request body would specify the new value, as follows:
     *
     *                                                       {
     *                                                       "software_config":{
     *                                                       "kernels": [{
     *                                                       'repository':
     *                                                       'gcr.io/deeplearning-platform-release/pytorch-gpu', 'tag':
     *                                                       'latest' }],
     *                                                       }
     *                                                       }
     *
     *
     *                                                       Currently, only the following fields can be updated:
     *                                                       - `software_config.kernels`
     *                                                       - `software_config.post_startup_script`
     *                                                       - `software_config.custom_gpu_driver_path`
     *                                                       - `software_config.idle_shutdown`
     *                                                       - `software_config.idle_shutdown_timeout`
     *                                                       - `software_config.disable_terminal`
     *
     * @return \Google\Cloud\Notebooks\V1\UpdateRuntimeRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Notebooks\V1\Runtime $runtime, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setRuntime($runtime)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Notebooks\V1\Runtime $runtime
     *           Required. The Runtime to be updated.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Specifies the path, relative to `Runtime`, of
     *           the field to update. For example, to change the software configuration
     *           kernels, the `update_mask` parameter would be
     *           specified as `software_config.kernels`,
     *           and the `PATCH` request body would specify the new value, as follows:
     *               {
     *                 "software_config":{
     *                   "kernels": [{
     *                      'repository':
     *                      'gcr.io/deeplearning-platform-release/pytorch-gpu', 'tag':
     *                      'latest' }],
     *                   }
     *               }
     *           Currently, only the following fields can be updated:
     *           - `software_config.kernels`
     *           - `software_config.post_startup_script`
     *           - `software_config.custom_gpu_driver_path`
     *           - `software_config.idle_shutdown`
     *           - `software_config.idle_shutdown_timeout`
     *           - `software_config.disable_terminal`
     *     @type string $request_id
     *           Idempotent request UUID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1\ManagedService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Runtime to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.Runtime runtime = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Notebooks\V1\Runtime|null
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    public function hasRuntime()
    {
        return isset($this->runtime);
    }

    public function clearRuntime()
    {
        unset($this->runtime);
    }

    /**
     * Required. The Runtime to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.Runtime runtime = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Notebooks\V1\Runtime $var
     * @return $this
     */
    public function setRuntime($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Notebooks\V1\Runtime::class);
        $this->runtime = $var;

        return $this;
    }

    /**
     * Required. Specifies the path, relative to `Runtime`, of
     * the field to update. For example, to change the software configuration
     * kernels, the `update_mask` parameter would be
     * specified as `software_config.kernels`,
     * and the `PATCH` request body would specify the new value, as follows:
     *     {
     *       "software_config":{
     *         "kernels": [{
     *            'repository':
     *            'gcr.io/deeplearning-platform-release/pytorch-gpu', 'tag':
     *            'latest' }],
     *         }
     *     }
     * Currently, only the following fields can be updated:
     * - `software_config.kernels`
     * - `software_config.post_startup_script`
     * - `software_config.custom_gpu_driver_path`
     * - `software_config.idle_shutdown`
     * - `software_config.idle_shutdown_timeout`
     * - `software_config.disable_terminal`
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
     * Required. Specifies the path, relative to `Runtime`, of
     * the field to update. For example, to change the software configuration
     * kernels, the `update_mask` parameter would be
     * specified as `software_config.kernels`,
     * and the `PATCH` request body would specify the new value, as follows:
     *     {
     *       "software_config":{
     *         "kernels": [{
     *            'repository':
     *            'gcr.io/deeplearning-platform-release/pytorch-gpu', 'tag':
     *            'latest' }],
     *         }
     *     }
     * Currently, only the following fields can be updated:
     * - `software_config.kernels`
     * - `software_config.post_startup_script`
     * - `software_config.custom_gpu_driver_path`
     * - `software_config.idle_shutdown`
     * - `software_config.idle_shutdown_timeout`
     * - `software_config.disable_terminal`
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

    /**
     * Idempotent request UUID.
     *
     * Generated from protobuf field <code>string request_id = 3;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Idempotent request UUID.
     *
     * Generated from protobuf field <code>string request_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

