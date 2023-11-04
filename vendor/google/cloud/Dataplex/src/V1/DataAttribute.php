<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_taxonomy.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Denotes one dataAttribute in a dataTaxonomy, for example, PII.
 * DataAttribute resources can be defined in a hierarchy.
 * A single dataAttribute resource can contain specs of multiple types
 * ```
 * PII
 *   - ResourceAccessSpec :
 *                 - readers :foo&#64;bar.com
 *   - DataAccessSpec :
 *                 - readers :bar&#64;foo.com
 * ```
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataAttribute</code>
 */
class DataAttribute extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The relative resource name of the dataAttribute, of the form:
     * projects/{project_number}/locations/{location_id}/dataTaxonomies/{dataTaxonomy}/attributes/{data_attribute_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Output only. System generated globally unique ID for the DataAttribute.
     * This ID will be different if the DataAttribute is deleted and re-created
     * with the same name.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $uid = '';
    /**
     * Output only. The time when the DataAttribute was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time when the DataAttribute was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Optional. Description of the DataAttribute.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    /**
     * Optional. User friendly display name.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $display_name = '';
    /**
     * Optional. User-defined labels for the DataAttribute.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. The ID of the parent DataAttribute resource, should belong to the
     * same data taxonomy. Circular dependency in parent chain is not valid.
     * Maximum depth of the hierarchy allowed is 4.
     * [a -> b -> c -> d -> e, depth = 4]
     *
     * Generated from protobuf field <code>string parent_id = 8 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    private $parent_id = '';
    /**
     * Output only. The number of child attributes present for this attribute.
     *
     * Generated from protobuf field <code>int32 attribute_count = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $attribute_count = 0;
    /**
     * This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 10;</code>
     */
    private $etag = '';
    /**
     * Optional. Specified when applied to a resource (eg: Cloud Storage bucket,
     * BigQuery dataset, BigQuery table).
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.ResourceAccessSpec resource_access_spec = 100 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $resource_access_spec = null;
    /**
     * Optional. Specified when applied to data stored on the resource (eg: rows,
     * columns in BigQuery Tables).
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataAccessSpec data_access_spec = 101 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $data_access_spec = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The relative resource name of the dataAttribute, of the form:
     *           projects/{project_number}/locations/{location_id}/dataTaxonomies/{dataTaxonomy}/attributes/{data_attribute_id}.
     *     @type string $uid
     *           Output only. System generated globally unique ID for the DataAttribute.
     *           This ID will be different if the DataAttribute is deleted and re-created
     *           with the same name.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the DataAttribute was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time when the DataAttribute was last updated.
     *     @type string $description
     *           Optional. Description of the DataAttribute.
     *     @type string $display_name
     *           Optional. User friendly display name.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. User-defined labels for the DataAttribute.
     *     @type string $parent_id
     *           Optional. The ID of the parent DataAttribute resource, should belong to the
     *           same data taxonomy. Circular dependency in parent chain is not valid.
     *           Maximum depth of the hierarchy allowed is 4.
     *           [a -> b -> c -> d -> e, depth = 4]
     *     @type int $attribute_count
     *           Output only. The number of child attributes present for this attribute.
     *     @type string $etag
     *           This checksum is computed by the server based on the value of other
     *           fields, and may be sent on update and delete requests to ensure the
     *           client has an up-to-date value before proceeding.
     *     @type \Google\Cloud\Dataplex\V1\ResourceAccessSpec $resource_access_spec
     *           Optional. Specified when applied to a resource (eg: Cloud Storage bucket,
     *           BigQuery dataset, BigQuery table).
     *     @type \Google\Cloud\Dataplex\V1\DataAccessSpec $data_access_spec
     *           Optional. Specified when applied to data stored on the resource (eg: rows,
     *           columns in BigQuery Tables).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataTaxonomy::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The relative resource name of the dataAttribute, of the form:
     * projects/{project_number}/locations/{location_id}/dataTaxonomies/{dataTaxonomy}/attributes/{data_attribute_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The relative resource name of the dataAttribute, of the form:
     * projects/{project_number}/locations/{location_id}/dataTaxonomies/{dataTaxonomy}/attributes/{data_attribute_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. System generated globally unique ID for the DataAttribute.
     * This ID will be different if the DataAttribute is deleted and re-created
     * with the same name.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. System generated globally unique ID for the DataAttribute.
     * This ID will be different if the DataAttribute is deleted and re-created
     * with the same name.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. The time when the DataAttribute was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time when the DataAttribute was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the DataAttribute was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time when the DataAttribute was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. Description of the DataAttribute.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of the DataAttribute.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. User friendly display name.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. User friendly display name.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. User-defined labels for the DataAttribute.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. User-defined labels for the DataAttribute.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. The ID of the parent DataAttribute resource, should belong to the
     * same data taxonomy. Circular dependency in parent chain is not valid.
     * Maximum depth of the hierarchy allowed is 4.
     * [a -> b -> c -> d -> e, depth = 4]
     *
     * Generated from protobuf field <code>string parent_id = 8 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * Optional. The ID of the parent DataAttribute resource, should belong to the
     * same data taxonomy. Circular dependency in parent chain is not valid.
     * Maximum depth of the hierarchy allowed is 4.
     * [a -> b -> c -> d -> e, depth = 4]
     *
     * Generated from protobuf field <code>string parent_id = 8 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_id = $var;

        return $this;
    }

    /**
     * Output only. The number of child attributes present for this attribute.
     *
     * Generated from protobuf field <code>int32 attribute_count = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getAttributeCount()
    {
        return $this->attribute_count;
    }

    /**
     * Output only. The number of child attributes present for this attribute.
     *
     * Generated from protobuf field <code>int32 attribute_count = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setAttributeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->attribute_count = $var;

        return $this;
    }

    /**
     * This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 10;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Optional. Specified when applied to a resource (eg: Cloud Storage bucket,
     * BigQuery dataset, BigQuery table).
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.ResourceAccessSpec resource_access_spec = 100 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataplex\V1\ResourceAccessSpec|null
     */
    public function getResourceAccessSpec()
    {
        return $this->resource_access_spec;
    }

    public function hasResourceAccessSpec()
    {
        return isset($this->resource_access_spec);
    }

    public function clearResourceAccessSpec()
    {
        unset($this->resource_access_spec);
    }

    /**
     * Optional. Specified when applied to a resource (eg: Cloud Storage bucket,
     * BigQuery dataset, BigQuery table).
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.ResourceAccessSpec resource_access_spec = 100 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\ResourceAccessSpec $var
     * @return $this
     */
    public function setResourceAccessSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\ResourceAccessSpec::class);
        $this->resource_access_spec = $var;

        return $this;
    }

    /**
     * Optional. Specified when applied to data stored on the resource (eg: rows,
     * columns in BigQuery Tables).
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataAccessSpec data_access_spec = 101 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataplex\V1\DataAccessSpec|null
     */
    public function getDataAccessSpec()
    {
        return $this->data_access_spec;
    }

    public function hasDataAccessSpec()
    {
        return isset($this->data_access_spec);
    }

    public function clearDataAccessSpec()
    {
        unset($this->data_access_spec);
    }

    /**
     * Optional. Specified when applied to data stored on the resource (eg: rows,
     * columns in BigQuery Tables).
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataAccessSpec data_access_spec = 101 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\DataAccessSpec $var
     * @return $this
     */
    public function setDataAccessSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataAccessSpec::class);
        $this->data_access_spec = $var;

        return $this;
    }

}

