<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/policysimulator/v1/simulator.proto

namespace Google\Cloud\PolicySimulator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [Simulator.CreateReplay][google.cloud.policysimulator.v1.Simulator.CreateReplay].
 *
 * Generated from protobuf message <code>google.cloud.policysimulator.v1.CreateReplayRequest</code>
 */
class CreateReplayRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource where this
     * [Replay][google.cloud.policysimulator.v1.Replay] will be created. This
     * resource must be a project, folder, or organization with a location.
     * Example: `projects/my-example-project/locations/global`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * Required. The [Replay][google.cloud.policysimulator.v1.Replay] to create.
     * Set `Replay.ReplayConfig` to configure the replay.
     *
     * Generated from protobuf field <code>.google.cloud.policysimulator.v1.Replay replay = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $replay = null;

    /**
     * @param string                                  $parent Required. The parent resource where this
     *                                                        [Replay][google.cloud.policysimulator.v1.Replay] will be created. This
     *                                                        resource must be a project, folder, or organization with a location.
     *
     *                                                        Example: `projects/my-example-project/locations/global`
     * @param \Google\Cloud\PolicySimulator\V1\Replay $replay Required. The [Replay][google.cloud.policysimulator.v1.Replay] to create.
     *                                                        Set `Replay.ReplayConfig` to configure the replay.
     *
     * @return \Google\Cloud\PolicySimulator\V1\CreateReplayRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\PolicySimulator\V1\Replay $replay): self
    {
        return (new self())
            ->setParent($parent)
            ->setReplay($replay);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource where this
     *           [Replay][google.cloud.policysimulator.v1.Replay] will be created. This
     *           resource must be a project, folder, or organization with a location.
     *           Example: `projects/my-example-project/locations/global`
     *     @type \Google\Cloud\PolicySimulator\V1\Replay $replay
     *           Required. The [Replay][google.cloud.policysimulator.v1.Replay] to create.
     *           Set `Replay.ReplayConfig` to configure the replay.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Policysimulator\V1\Simulator::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource where this
     * [Replay][google.cloud.policysimulator.v1.Replay] will be created. This
     * resource must be a project, folder, or organization with a location.
     * Example: `projects/my-example-project/locations/global`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource where this
     * [Replay][google.cloud.policysimulator.v1.Replay] will be created. This
     * resource must be a project, folder, or organization with a location.
     * Example: `projects/my-example-project/locations/global`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The [Replay][google.cloud.policysimulator.v1.Replay] to create.
     * Set `Replay.ReplayConfig` to configure the replay.
     *
     * Generated from protobuf field <code>.google.cloud.policysimulator.v1.Replay replay = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\PolicySimulator\V1\Replay|null
     */
    public function getReplay()
    {
        return $this->replay;
    }

    public function hasReplay()
    {
        return isset($this->replay);
    }

    public function clearReplay()
    {
        unset($this->replay);
    }

    /**
     * Required. The [Replay][google.cloud.policysimulator.v1.Replay] to create.
     * Set `Replay.ReplayConfig` to configure the replay.
     *
     * Generated from protobuf field <code>.google.cloud.policysimulator.v1.Replay replay = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\PolicySimulator\V1\Replay $var
     * @return $this
     */
    public function setReplay($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PolicySimulator\V1\Replay::class);
        $this->replay = $var;

        return $this;
    }

}

