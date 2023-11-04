<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/jobs.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata available primarily for filtering jobs. Will be included in the
 * ListJob response and Job SUMMARY view.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.JobMetadata</code>
 */
class JobMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The SDK version used to run the job.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.SdkVersion sdk_version = 1;</code>
     */
    private $sdk_version = null;
    /**
     * Identification of a Spanner source used in the Dataflow job.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.SpannerIODetails spanner_details = 2;</code>
     */
    private $spanner_details;
    /**
     * Identification of a BigQuery source used in the Dataflow job.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.BigQueryIODetails bigquery_details = 3;</code>
     */
    private $bigquery_details;
    /**
     * Identification of a Cloud Bigtable source used in the Dataflow job.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.BigTableIODetails big_table_details = 4;</code>
     */
    private $big_table_details;
    /**
     * Identification of a Pub/Sub source used in the Dataflow job.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.PubSubIODetails pubsub_details = 5;</code>
     */
    private $pubsub_details;
    /**
     * Identification of a File source used in the Dataflow job.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.FileIODetails file_details = 6;</code>
     */
    private $file_details;
    /**
     * Identification of a Datastore source used in the Dataflow job.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.DatastoreIODetails datastore_details = 7;</code>
     */
    private $datastore_details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataflow\V1beta3\SdkVersion $sdk_version
     *           The SDK version used to run the job.
     *     @type array<\Google\Cloud\Dataflow\V1beta3\SpannerIODetails>|\Google\Protobuf\Internal\RepeatedField $spanner_details
     *           Identification of a Spanner source used in the Dataflow job.
     *     @type array<\Google\Cloud\Dataflow\V1beta3\BigQueryIODetails>|\Google\Protobuf\Internal\RepeatedField $bigquery_details
     *           Identification of a BigQuery source used in the Dataflow job.
     *     @type array<\Google\Cloud\Dataflow\V1beta3\BigTableIODetails>|\Google\Protobuf\Internal\RepeatedField $big_table_details
     *           Identification of a Cloud Bigtable source used in the Dataflow job.
     *     @type array<\Google\Cloud\Dataflow\V1beta3\PubSubIODetails>|\Google\Protobuf\Internal\RepeatedField $pubsub_details
     *           Identification of a Pub/Sub source used in the Dataflow job.
     *     @type array<\Google\Cloud\Dataflow\V1beta3\FileIODetails>|\Google\Protobuf\Internal\RepeatedField $file_details
     *           Identification of a File source used in the Dataflow job.
     *     @type array<\Google\Cloud\Dataflow\V1beta3\DatastoreIODetails>|\Google\Protobuf\Internal\RepeatedField $datastore_details
     *           Identification of a Datastore source used in the Dataflow job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * The SDK version used to run the job.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.SdkVersion sdk_version = 1;</code>
     * @return \Google\Cloud\Dataflow\V1beta3\SdkVersion|null
     */
    public function getSdkVersion()
    {
        return $this->sdk_version;
    }

    public function hasSdkVersion()
    {
        return isset($this->sdk_version);
    }

    public function clearSdkVersion()
    {
        unset($this->sdk_version);
    }

    /**
     * The SDK version used to run the job.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.SdkVersion sdk_version = 1;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\SdkVersion $var
     * @return $this
     */
    public function setSdkVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataflow\V1beta3\SdkVersion::class);
        $this->sdk_version = $var;

        return $this;
    }

    /**
     * Identification of a Spanner source used in the Dataflow job.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.SpannerIODetails spanner_details = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpannerDetails()
    {
        return $this->spanner_details;
    }

    /**
     * Identification of a Spanner source used in the Dataflow job.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.SpannerIODetails spanner_details = 2;</code>
     * @param array<\Google\Cloud\Dataflow\V1beta3\SpannerIODetails>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpannerDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\SpannerIODetails::class);
        $this->spanner_details = $arr;

        return $this;
    }

    /**
     * Identification of a BigQuery source used in the Dataflow job.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.BigQueryIODetails bigquery_details = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBigqueryDetails()
    {
        return $this->bigquery_details;
    }

    /**
     * Identification of a BigQuery source used in the Dataflow job.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.BigQueryIODetails bigquery_details = 3;</code>
     * @param array<\Google\Cloud\Dataflow\V1beta3\BigQueryIODetails>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBigqueryDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\BigQueryIODetails::class);
        $this->bigquery_details = $arr;

        return $this;
    }

    /**
     * Identification of a Cloud Bigtable source used in the Dataflow job.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.BigTableIODetails big_table_details = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBigTableDetails()
    {
        return $this->big_table_details;
    }

    /**
     * Identification of a Cloud Bigtable source used in the Dataflow job.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.BigTableIODetails big_table_details = 4;</code>
     * @param array<\Google\Cloud\Dataflow\V1beta3\BigTableIODetails>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBigTableDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\BigTableIODetails::class);
        $this->big_table_details = $arr;

        return $this;
    }

    /**
     * Identification of a Pub/Sub source used in the Dataflow job.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.PubSubIODetails pubsub_details = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPubsubDetails()
    {
        return $this->pubsub_details;
    }

    /**
     * Identification of a Pub/Sub source used in the Dataflow job.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.PubSubIODetails pubsub_details = 5;</code>
     * @param array<\Google\Cloud\Dataflow\V1beta3\PubSubIODetails>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPubsubDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\PubSubIODetails::class);
        $this->pubsub_details = $arr;

        return $this;
    }

    /**
     * Identification of a File source used in the Dataflow job.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.FileIODetails file_details = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileDetails()
    {
        return $this->file_details;
    }

    /**
     * Identification of a File source used in the Dataflow job.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.FileIODetails file_details = 6;</code>
     * @param array<\Google\Cloud\Dataflow\V1beta3\FileIODetails>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\FileIODetails::class);
        $this->file_details = $arr;

        return $this;
    }

    /**
     * Identification of a Datastore source used in the Dataflow job.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.DatastoreIODetails datastore_details = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDatastoreDetails()
    {
        return $this->datastore_details;
    }

    /**
     * Identification of a Datastore source used in the Dataflow job.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.DatastoreIODetails datastore_details = 7;</code>
     * @param array<\Google\Cloud\Dataflow\V1beta3\DatastoreIODetails>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDatastoreDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\DatastoreIODetails::class);
        $this->datastore_details = $arr;

        return $this;
    }

}

