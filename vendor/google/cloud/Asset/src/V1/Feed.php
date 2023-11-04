<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An asset feed used to export asset updates to a destinations.
 * An asset feed filter controls what updates are exported.
 * The asset feed must be created within a project, organization, or
 * folder. Supported destinations are:
 * Pub/Sub topics.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.Feed</code>
 */
class Feed extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The format will be
     * projects/{project_number}/feeds/{client-assigned_feed_identifier} or
     * folders/{folder_number}/feeds/{client-assigned_feed_identifier} or
     * organizations/{organization_number}/feeds/{client-assigned_feed_identifier}
     * The client-assigned feed identifier must be unique within the parent
     * project/folder/organization.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * A list of the full names of the assets to receive updates. You must specify
     * either or both of asset_names and asset_types. Only asset updates matching
     * specified asset_names or asset_types are exported to the feed.
     * Example:
     * `//compute.googleapis.com/projects/my_project_123/zones/zone1/instances/instance1`.
     * For a list of the full names for supported asset types, see [Resource
     * name format](https://cloud.google.com/asset-inventory/docs/resource-name-format).
     *
     * Generated from protobuf field <code>repeated string asset_names = 2;</code>
     */
    private $asset_names;
    /**
     * A list of types of the assets to receive updates. You must specify either
     * or both of asset_names and asset_types. Only asset updates matching
     * specified asset_names or asset_types are exported to the feed.
     * Example: `"compute.googleapis.com/Disk"`
     * For a list of all supported asset types, see
     * [Supported asset types](https://cloud.google.com/asset-inventory/docs/supported-asset-types).
     *
     * Generated from protobuf field <code>repeated string asset_types = 3;</code>
     */
    private $asset_types;
    /**
     * Asset content type. If not specified, no content but the asset name and
     * type will be returned.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.ContentType content_type = 4;</code>
     */
    private $content_type = 0;
    /**
     * Required. Feed output configuration defining where the asset updates are
     * published to.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.FeedOutputConfig feed_output_config = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $feed_output_config = null;
    /**
     * A condition which determines whether an asset update should be published.
     * If specified, an asset will be returned only when the expression evaluates
     * to true.
     * When set, `expression` field in the `Expr` must be a valid [CEL expression]
     * (https://github.com/google/cel-spec) on a TemporalAsset with name
     * `temporal_asset`. Example: a Feed with expression ("temporal_asset.deleted
     * == true") will only publish Asset deletions. Other fields of `Expr` are
     * optional.
     * See our [user
     * guide](https://cloud.google.com/asset-inventory/docs/monitoring-asset-changes-with-condition)
     * for detailed instructions.
     *
     * Generated from protobuf field <code>.google.type.Expr condition = 6;</code>
     */
    private $condition = null;
    /**
     * A list of relationship types to output, for example:
     * `INSTANCE_TO_INSTANCEGROUP`. This field should only be specified if
     * content_type=RELATIONSHIP.
     * * If specified:
     * it outputs specified relationship updates on the [asset_names] or the
     * [asset_types]. It returns an error if any of the [relationship_types]
     * doesn't belong to the supported relationship types of the [asset_names] or
     * [asset_types], or any of the [asset_names] or the [asset_types] doesn't
     * belong to the source types of the [relationship_types].
     * * Otherwise:
     * it outputs the supported relationships of the types of [asset_names] and
     * [asset_types] or returns an error if any of the [asset_names] or the
     * [asset_types] has no replationship support.
     * See [Introduction to Cloud Asset
     * Inventory](https://cloud.google.com/asset-inventory/docs/overview)
     * for all supported asset types and relationship types.
     *
     * Generated from protobuf field <code>repeated string relationship_types = 7;</code>
     */
    private $relationship_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The format will be
     *           projects/{project_number}/feeds/{client-assigned_feed_identifier} or
     *           folders/{folder_number}/feeds/{client-assigned_feed_identifier} or
     *           organizations/{organization_number}/feeds/{client-assigned_feed_identifier}
     *           The client-assigned feed identifier must be unique within the parent
     *           project/folder/organization.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $asset_names
     *           A list of the full names of the assets to receive updates. You must specify
     *           either or both of asset_names and asset_types. Only asset updates matching
     *           specified asset_names or asset_types are exported to the feed.
     *           Example:
     *           `//compute.googleapis.com/projects/my_project_123/zones/zone1/instances/instance1`.
     *           For a list of the full names for supported asset types, see [Resource
     *           name format](https://cloud.google.com/asset-inventory/docs/resource-name-format).
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $asset_types
     *           A list of types of the assets to receive updates. You must specify either
     *           or both of asset_names and asset_types. Only asset updates matching
     *           specified asset_names or asset_types are exported to the feed.
     *           Example: `"compute.googleapis.com/Disk"`
     *           For a list of all supported asset types, see
     *           [Supported asset types](https://cloud.google.com/asset-inventory/docs/supported-asset-types).
     *     @type int $content_type
     *           Asset content type. If not specified, no content but the asset name and
     *           type will be returned.
     *     @type \Google\Cloud\Asset\V1\FeedOutputConfig $feed_output_config
     *           Required. Feed output configuration defining where the asset updates are
     *           published to.
     *     @type \Google\Type\Expr $condition
     *           A condition which determines whether an asset update should be published.
     *           If specified, an asset will be returned only when the expression evaluates
     *           to true.
     *           When set, `expression` field in the `Expr` must be a valid [CEL expression]
     *           (https://github.com/google/cel-spec) on a TemporalAsset with name
     *           `temporal_asset`. Example: a Feed with expression ("temporal_asset.deleted
     *           == true") will only publish Asset deletions. Other fields of `Expr` are
     *           optional.
     *           See our [user
     *           guide](https://cloud.google.com/asset-inventory/docs/monitoring-asset-changes-with-condition)
     *           for detailed instructions.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $relationship_types
     *           A list of relationship types to output, for example:
     *           `INSTANCE_TO_INSTANCEGROUP`. This field should only be specified if
     *           content_type=RELATIONSHIP.
     *           * If specified:
     *           it outputs specified relationship updates on the [asset_names] or the
     *           [asset_types]. It returns an error if any of the [relationship_types]
     *           doesn't belong to the supported relationship types of the [asset_names] or
     *           [asset_types], or any of the [asset_names] or the [asset_types] doesn't
     *           belong to the source types of the [relationship_types].
     *           * Otherwise:
     *           it outputs the supported relationships of the types of [asset_names] and
     *           [asset_types] or returns an error if any of the [asset_names] or the
     *           [asset_types] has no replationship support.
     *           See [Introduction to Cloud Asset
     *           Inventory](https://cloud.google.com/asset-inventory/docs/overview)
     *           for all supported asset types and relationship types.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The format will be
     * projects/{project_number}/feeds/{client-assigned_feed_identifier} or
     * folders/{folder_number}/feeds/{client-assigned_feed_identifier} or
     * organizations/{organization_number}/feeds/{client-assigned_feed_identifier}
     * The client-assigned feed identifier must be unique within the parent
     * project/folder/organization.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The format will be
     * projects/{project_number}/feeds/{client-assigned_feed_identifier} or
     * folders/{folder_number}/feeds/{client-assigned_feed_identifier} or
     * organizations/{organization_number}/feeds/{client-assigned_feed_identifier}
     * The client-assigned feed identifier must be unique within the parent
     * project/folder/organization.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * A list of the full names of the assets to receive updates. You must specify
     * either or both of asset_names and asset_types. Only asset updates matching
     * specified asset_names or asset_types are exported to the feed.
     * Example:
     * `//compute.googleapis.com/projects/my_project_123/zones/zone1/instances/instance1`.
     * For a list of the full names for supported asset types, see [Resource
     * name format](https://cloud.google.com/asset-inventory/docs/resource-name-format).
     *
     * Generated from protobuf field <code>repeated string asset_names = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssetNames()
    {
        return $this->asset_names;
    }

    /**
     * A list of the full names of the assets to receive updates. You must specify
     * either or both of asset_names and asset_types. Only asset updates matching
     * specified asset_names or asset_types are exported to the feed.
     * Example:
     * `//compute.googleapis.com/projects/my_project_123/zones/zone1/instances/instance1`.
     * For a list of the full names for supported asset types, see [Resource
     * name format](https://cloud.google.com/asset-inventory/docs/resource-name-format).
     *
     * Generated from protobuf field <code>repeated string asset_names = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssetNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->asset_names = $arr;

        return $this;
    }

    /**
     * A list of types of the assets to receive updates. You must specify either
     * or both of asset_names and asset_types. Only asset updates matching
     * specified asset_names or asset_types are exported to the feed.
     * Example: `"compute.googleapis.com/Disk"`
     * For a list of all supported asset types, see
     * [Supported asset types](https://cloud.google.com/asset-inventory/docs/supported-asset-types).
     *
     * Generated from protobuf field <code>repeated string asset_types = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssetTypes()
    {
        return $this->asset_types;
    }

    /**
     * A list of types of the assets to receive updates. You must specify either
     * or both of asset_names and asset_types. Only asset updates matching
     * specified asset_names or asset_types are exported to the feed.
     * Example: `"compute.googleapis.com/Disk"`
     * For a list of all supported asset types, see
     * [Supported asset types](https://cloud.google.com/asset-inventory/docs/supported-asset-types).
     *
     * Generated from protobuf field <code>repeated string asset_types = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssetTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->asset_types = $arr;

        return $this;
    }

    /**
     * Asset content type. If not specified, no content but the asset name and
     * type will be returned.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.ContentType content_type = 4;</code>
     * @return int
     */
    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * Asset content type. If not specified, no content but the asset name and
     * type will be returned.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.ContentType content_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setContentType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Asset\V1\ContentType::class);
        $this->content_type = $var;

        return $this;
    }

    /**
     * Required. Feed output configuration defining where the asset updates are
     * published to.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.FeedOutputConfig feed_output_config = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Asset\V1\FeedOutputConfig|null
     */
    public function getFeedOutputConfig()
    {
        return $this->feed_output_config;
    }

    public function hasFeedOutputConfig()
    {
        return isset($this->feed_output_config);
    }

    public function clearFeedOutputConfig()
    {
        unset($this->feed_output_config);
    }

    /**
     * Required. Feed output configuration defining where the asset updates are
     * published to.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.FeedOutputConfig feed_output_config = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Asset\V1\FeedOutputConfig $var
     * @return $this
     */
    public function setFeedOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\FeedOutputConfig::class);
        $this->feed_output_config = $var;

        return $this;
    }

    /**
     * A condition which determines whether an asset update should be published.
     * If specified, an asset will be returned only when the expression evaluates
     * to true.
     * When set, `expression` field in the `Expr` must be a valid [CEL expression]
     * (https://github.com/google/cel-spec) on a TemporalAsset with name
     * `temporal_asset`. Example: a Feed with expression ("temporal_asset.deleted
     * == true") will only publish Asset deletions. Other fields of `Expr` are
     * optional.
     * See our [user
     * guide](https://cloud.google.com/asset-inventory/docs/monitoring-asset-changes-with-condition)
     * for detailed instructions.
     *
     * Generated from protobuf field <code>.google.type.Expr condition = 6;</code>
     * @return \Google\Type\Expr|null
     */
    public function getCondition()
    {
        return $this->condition;
    }

    public function hasCondition()
    {
        return isset($this->condition);
    }

    public function clearCondition()
    {
        unset($this->condition);
    }

    /**
     * A condition which determines whether an asset update should be published.
     * If specified, an asset will be returned only when the expression evaluates
     * to true.
     * When set, `expression` field in the `Expr` must be a valid [CEL expression]
     * (https://github.com/google/cel-spec) on a TemporalAsset with name
     * `temporal_asset`. Example: a Feed with expression ("temporal_asset.deleted
     * == true") will only publish Asset deletions. Other fields of `Expr` are
     * optional.
     * See our [user
     * guide](https://cloud.google.com/asset-inventory/docs/monitoring-asset-changes-with-condition)
     * for detailed instructions.
     *
     * Generated from protobuf field <code>.google.type.Expr condition = 6;</code>
     * @param \Google\Type\Expr $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Expr::class);
        $this->condition = $var;

        return $this;
    }

    /**
     * A list of relationship types to output, for example:
     * `INSTANCE_TO_INSTANCEGROUP`. This field should only be specified if
     * content_type=RELATIONSHIP.
     * * If specified:
     * it outputs specified relationship updates on the [asset_names] or the
     * [asset_types]. It returns an error if any of the [relationship_types]
     * doesn't belong to the supported relationship types of the [asset_names] or
     * [asset_types], or any of the [asset_names] or the [asset_types] doesn't
     * belong to the source types of the [relationship_types].
     * * Otherwise:
     * it outputs the supported relationships of the types of [asset_names] and
     * [asset_types] or returns an error if any of the [asset_names] or the
     * [asset_types] has no replationship support.
     * See [Introduction to Cloud Asset
     * Inventory](https://cloud.google.com/asset-inventory/docs/overview)
     * for all supported asset types and relationship types.
     *
     * Generated from protobuf field <code>repeated string relationship_types = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRelationshipTypes()
    {
        return $this->relationship_types;
    }

    /**
     * A list of relationship types to output, for example:
     * `INSTANCE_TO_INSTANCEGROUP`. This field should only be specified if
     * content_type=RELATIONSHIP.
     * * If specified:
     * it outputs specified relationship updates on the [asset_names] or the
     * [asset_types]. It returns an error if any of the [relationship_types]
     * doesn't belong to the supported relationship types of the [asset_names] or
     * [asset_types], or any of the [asset_names] or the [asset_types] doesn't
     * belong to the source types of the [relationship_types].
     * * Otherwise:
     * it outputs the supported relationships of the types of [asset_names] and
     * [asset_types] or returns an error if any of the [asset_names] or the
     * [asset_types] has no replationship support.
     * See [Introduction to Cloud Asset
     * Inventory](https://cloud.google.com/asset-inventory/docs/overview)
     * for all supported asset types and relationship types.
     *
     * Generated from protobuf field <code>repeated string relationship_types = 7;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRelationshipTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->relationship_types = $arr;

        return $this;
    }

}

