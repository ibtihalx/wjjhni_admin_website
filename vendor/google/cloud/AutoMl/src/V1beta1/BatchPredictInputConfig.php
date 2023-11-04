<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/io.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Input configuration for BatchPredict Action.
 * The format of input depends on the ML problem of the model used for
 * prediction. As input source the
 * [gcs_source][google.cloud.automl.v1beta1.InputConfig.gcs_source]
 * is expected, unless specified otherwise.
 * The formats are represented in EBNF with commas being literal and with
 * non-terminal symbols defined near the end of this comment. The formats
 * are:
 *  *  For Image Classification:
 *         CSV file(s) with each line having just a single column:
 *           GCS_FILE_PATH
 *           which leads to image of up to 30MB in size. Supported
 *           extensions: .JPEG, .GIF, .PNG. This path is treated as the ID in
 *           the Batch predict output.
 *         Three sample rows:
 *           gs://folder/image1.jpeg
 *           gs://folder/image2.gif
 *           gs://folder/image3.png
 *  *  For Image Object Detection:
 *         CSV file(s) with each line having just a single column:
 *           GCS_FILE_PATH
 *           which leads to image of up to 30MB in size. Supported
 *           extensions: .JPEG, .GIF, .PNG. This path is treated as the ID in
 *           the Batch predict output.
 *         Three sample rows:
 *           gs://folder/image1.jpeg
 *           gs://folder/image2.gif
 *           gs://folder/image3.png
 *  *  For Video Classification:
 *         CSV file(s) with each line in format:
 *           GCS_FILE_PATH,TIME_SEGMENT_START,TIME_SEGMENT_END
 *           GCS_FILE_PATH leads to video of up to 50GB in size and up to 3h
 *           duration. Supported extensions: .MOV, .MPEG4, .MP4, .AVI.
 *           TIME_SEGMENT_START and TIME_SEGMENT_END must be within the
 *           length of the video, and end has to be after the start.
 *         Three sample rows:
 *           gs://folder/video1.mp4,10,40
 *           gs://folder/video1.mp4,20,60
 *           gs://folder/vid2.mov,0,inf
 *  *  For Video Object Tracking:
 *         CSV file(s) with each line in format:
 *           GCS_FILE_PATH,TIME_SEGMENT_START,TIME_SEGMENT_END
 *           GCS_FILE_PATH leads to video of up to 50GB in size and up to 3h
 *           duration. Supported extensions: .MOV, .MPEG4, .MP4, .AVI.
 *           TIME_SEGMENT_START and TIME_SEGMENT_END must be within the
 *           length of the video, and end has to be after the start.
 *         Three sample rows:
 *           gs://folder/video1.mp4,10,240
 *           gs://folder/video1.mp4,300,360
 *           gs://folder/vid2.mov,0,inf
 *  *  For Text Classification:
 *         CSV file(s) with each line having just a single column:
 *           GCS_FILE_PATH | TEXT_SNIPPET
 *         Any given text file can have size upto 128kB.
 *         Any given text snippet content must have 60,000 characters or less.
 *         Three sample rows:
 *           gs://folder/text1.txt
 *           "Some text content to predict"
 *           gs://folder/text3.pdf
 *         Supported file extensions: .txt, .pdf
 *  *  For Text Sentiment:
 *         CSV file(s) with each line having just a single column:
 *           GCS_FILE_PATH | TEXT_SNIPPET
 *         Any given text file can have size upto 128kB.
 *         Any given text snippet content must have 500 characters or less.
 *         Three sample rows:
 *           gs://folder/text1.txt
 *           "Some text content to predict"
 *           gs://folder/text3.pdf
 *         Supported file extensions: .txt, .pdf
 *  * For Text Extraction
 *         .JSONL (i.e. JSON Lines) file(s) which either provide text in-line or
 *         as documents (for a single BatchPredict call only one of the these
 *         formats may be used).
 *         The in-line .JSONL file(s) contain per line a proto that
 *           wraps a temporary user-assigned TextSnippet ID (string up to 2000
 *           characters long) called "id", a TextSnippet proto (in
 *           json representation) and zero or more TextFeature protos. Any given
 *           text snippet content must have 30,000 characters or less, and also
 *           be UTF-8 NFC encoded (ASCII already is). The IDs provided should be
 *           unique.
 *         The document .JSONL file(s) contain, per line, a proto that wraps a
 *           Document proto with input_config set. Only PDF documents are
 *           supported now, and each document must be up to 2MB large.
 *         Any given .JSONL file must be 100MB or smaller, and no more than 20
 *         files may be given.
 *         Sample in-line JSON Lines file (presented here with artificial line
 *         breaks, but the only actual line break is denoted by \n):
 *           {
 *             "id": "my_first_id",
 *             "text_snippet": { "content": "dog car cat"},
 *             "text_features": [
 *               {
 *                 "text_segment": {"start_offset": 4, "end_offset": 6},
 *                 "structural_type": PARAGRAPH,
 *                 "bounding_poly": {
 *                   "normalized_vertices": [
 *                     {"x": 0.1, "y": 0.1},
 *                     {"x": 0.1, "y": 0.3},
 *                     {"x": 0.3, "y": 0.3},
 *                     {"x": 0.3, "y": 0.1},
 *                   ]
 *                 },
 *               }
 *             ],
 *           }\n
 *           {
 *             "id": "2",
 *             "text_snippet": {
 *               "content": "An elaborate content",
 *               "mime_type": "text/plain"
 *             }
 *           }
 *         Sample document JSON Lines file (presented here with artificial line
 *         breaks, but the only actual line break is denoted by \n).:
 *           {
 *             "document": {
 *               "input_config": {
 *                 "gcs_source": { "input_uris": [ "gs://folder/document1.pdf" ]
 *                 }
 *               }
 *             }
 *           }\n
 *           {
 *             "document": {
 *               "input_config": {
 *                 "gcs_source": { "input_uris": [ "gs://folder/document2.pdf" ]
 *                 }
 *               }
 *             }
 *           }
 *  *  For Tables:
 *         Either
 *         [gcs_source][google.cloud.automl.v1beta1.InputConfig.gcs_source] or
 * [bigquery_source][google.cloud.automl.v1beta1.InputConfig.bigquery_source].
 *         GCS case:
 *           CSV file(s), each by itself 10GB or smaller and total size must be
 *           100GB or smaller, where first file must have a header containing
 *           column names. If the first row of a subsequent file is the same as
 *           the header, then it is also treated as a header. All other rows
 *           contain values for the corresponding columns.
 *           The column names must contain the model's
 * [input_feature_column_specs'][google.cloud.automl.v1beta1.TablesModelMetadata.input_feature_column_specs]
 * [display_name-s][google.cloud.automl.v1beta1.ColumnSpec.display_name]
 *           (order doesn't matter). The columns corresponding to the model's
 *           input feature column specs must contain values compatible with the
 *           column spec's data types. Prediction on all the rows, i.e. the CSV
 *           lines, will be attempted. For FORECASTING
 * [prediction_type][google.cloud.automl.v1beta1.TablesModelMetadata.prediction_type]:
 *           all columns having
 * [TIME_SERIES_AVAILABLE_PAST_ONLY][google.cloud.automl.v1beta1.ColumnSpec.ForecastingMetadata.ColumnType]
 *           type will be ignored.
 *           First three sample rows of a CSV file:
 *             "First Name","Last Name","Dob","Addresses"
 * "John","Doe","1968-01-22","[{"status":"current","address":"123_First_Avenue","city":"Seattle","state":"WA","zip":"11111","numberOfYears":"1"},{"status":"previous","address":"456_Main_Street","city":"Portland","state":"OR","zip":"22222","numberOfYears":"5"}]"
 * "Jane","Doe","1980-10-16","[{"status":"current","address":"789_Any_Avenue","city":"Albany","state":"NY","zip":"33333","numberOfYears":"2"},{"status":"previous","address":"321_Main_Street","city":"Hoboken","state":"NJ","zip":"44444","numberOfYears":"3"}]}
 *         BigQuery case:
 *           An URI of a BigQuery table. The user data size of the BigQuery
 *           table must be 100GB or smaller.
 *           The column names must contain the model's
 * [input_feature_column_specs'][google.cloud.automl.v1beta1.TablesModelMetadata.input_feature_column_specs]
 * [display_name-s][google.cloud.automl.v1beta1.ColumnSpec.display_name]
 *           (order doesn't matter). The columns corresponding to the model's
 *           input feature column specs must contain values compatible with the
 *           column spec's data types. Prediction on all the rows of the table
 *           will be attempted. For FORECASTING
 * [prediction_type][google.cloud.automl.v1beta1.TablesModelMetadata.prediction_type]:
 *           all columns having
 * [TIME_SERIES_AVAILABLE_PAST_ONLY][google.cloud.automl.v1beta1.ColumnSpec.ForecastingMetadata.ColumnType]
 *           type will be ignored.
 *  Definitions:
 *  GCS_FILE_PATH = A path to file on GCS, e.g. "gs://folder/video.avi".
 *  TEXT_SNIPPET = A content of a text snippet, UTF-8 encoded, enclosed within
 *                 double quotes ("")
 *  TIME_SEGMENT_START = TIME_OFFSET
 *                       Expresses a beginning, inclusive, of a time segment
 *                       within an
 *                       example that has a time dimension (e.g. video).
 *  TIME_SEGMENT_END = TIME_OFFSET
 *                     Expresses an end, exclusive, of a time segment within
 *                     an example that has a time dimension (e.g. video).
 *  TIME_OFFSET = A number of seconds as measured from the start of an
 *                example (e.g. video). Fractions are allowed, up to a
 *                microsecond precision. "inf" is allowed and it means the end
 *                of the example.
 *  Errors:
 *  If any of the provided CSV files can't be parsed or if more than certain
 *  percent of CSV rows cannot be processed then the operation fails and
 *  prediction does not happen. Regardless of overall success or failure the
 *  per-row failures, up to a certain count cap, will be listed in
 *  Operation.metadata.partial_failures.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.BatchPredictInputConfig</code>
 */
class BatchPredictInputConfig extends \Google\Protobuf\Internal\Message
{
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AutoMl\V1beta1\GcsSource $gcs_source
     *           The Google Cloud Storage location for the input content.
     *     @type \Google\Cloud\AutoMl\V1beta1\BigQuerySource $bigquery_source
     *           The BigQuery location for the input content.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Io::initOnce();
        parent::__construct($data);
    }

    /**
     * The Google Cloud Storage location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.GcsSource gcs_source = 1;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\GcsSource|null
     */
    public function getGcsSource()
    {
        return $this->readOneof(1);
    }

    public function hasGcsSource()
    {
        return $this->hasOneof(1);
    }

    /**
     * The Google Cloud Storage location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.GcsSource gcs_source = 1;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\GcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\GcsSource::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The BigQuery location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.BigQuerySource bigquery_source = 2;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\BigQuerySource|null
     */
    public function getBigquerySource()
    {
        return $this->readOneof(2);
    }

    public function hasBigquerySource()
    {
        return $this->hasOneof(2);
    }

    /**
     * The BigQuery location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.BigQuerySource bigquery_source = 2;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\BigQuerySource $var
     * @return $this
     */
    public function setBigquerySource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\BigQuerySource::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

