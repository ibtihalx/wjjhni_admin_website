<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/classification.proto

namespace Google\Cloud\AutoMl\V1\ClassificationEvaluationMetrics;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Confusion matrix of the model running the classification.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.ClassificationEvaluationMetrics.ConfusionMatrix</code>
 */
class ConfusionMatrix extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. IDs of the annotation specs used in the confusion matrix.
     * For Tables CLASSIFICATION
     * [prediction_type][google.cloud.automl.v1p1beta.TablesModelMetadata.prediction_type]
     * only list of [annotation_spec_display_name-s][] is populated.
     *
     * Generated from protobuf field <code>repeated string annotation_spec_id = 1;</code>
     */
    private $annotation_spec_id;
    /**
     * Output only. Display name of the annotation specs used in the confusion
     * matrix, as they were at the moment of the evaluation. For Tables
     * CLASSIFICATION
     * [prediction_type-s][google.cloud.automl.v1p1beta.TablesModelMetadata.prediction_type],
     * distinct values of the target column at the moment of the model
     * evaluation are populated here.
     *
     * Generated from protobuf field <code>repeated string display_name = 3;</code>
     */
    private $display_name;
    /**
     * Output only. Rows in the confusion matrix. The number of rows is equal to
     * the size of `annotation_spec_id`.
     * `row[i].example_count[j]` is the number of examples that have ground
     * truth of the `annotation_spec_id[i]` and are predicted as
     * `annotation_spec_id[j]` by the model being evaluated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1.ClassificationEvaluationMetrics.ConfusionMatrix.Row row = 2;</code>
     */
    private $row;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $annotation_spec_id
     *           Output only. IDs of the annotation specs used in the confusion matrix.
     *           For Tables CLASSIFICATION
     *           [prediction_type][google.cloud.automl.v1p1beta.TablesModelMetadata.prediction_type]
     *           only list of [annotation_spec_display_name-s][] is populated.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $display_name
     *           Output only. Display name of the annotation specs used in the confusion
     *           matrix, as they were at the moment of the evaluation. For Tables
     *           CLASSIFICATION
     *           [prediction_type-s][google.cloud.automl.v1p1beta.TablesModelMetadata.prediction_type],
     *           distinct values of the target column at the moment of the model
     *           evaluation are populated here.
     *     @type array<\Google\Cloud\AutoMl\V1\ClassificationEvaluationMetrics\ConfusionMatrix\Row>|\Google\Protobuf\Internal\RepeatedField $row
     *           Output only. Rows in the confusion matrix. The number of rows is equal to
     *           the size of `annotation_spec_id`.
     *           `row[i].example_count[j]` is the number of examples that have ground
     *           truth of the `annotation_spec_id[i]` and are predicted as
     *           `annotation_spec_id[j]` by the model being evaluated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\Classification::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. IDs of the annotation specs used in the confusion matrix.
     * For Tables CLASSIFICATION
     * [prediction_type][google.cloud.automl.v1p1beta.TablesModelMetadata.prediction_type]
     * only list of [annotation_spec_display_name-s][] is populated.
     *
     * Generated from protobuf field <code>repeated string annotation_spec_id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAnnotationSpecId()
    {
        return $this->annotation_spec_id;
    }

    /**
     * Output only. IDs of the annotation specs used in the confusion matrix.
     * For Tables CLASSIFICATION
     * [prediction_type][google.cloud.automl.v1p1beta.TablesModelMetadata.prediction_type]
     * only list of [annotation_spec_display_name-s][] is populated.
     *
     * Generated from protobuf field <code>repeated string annotation_spec_id = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAnnotationSpecId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotation_spec_id = $arr;

        return $this;
    }

    /**
     * Output only. Display name of the annotation specs used in the confusion
     * matrix, as they were at the moment of the evaluation. For Tables
     * CLASSIFICATION
     * [prediction_type-s][google.cloud.automl.v1p1beta.TablesModelMetadata.prediction_type],
     * distinct values of the target column at the moment of the model
     * evaluation are populated here.
     *
     * Generated from protobuf field <code>repeated string display_name = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Output only. Display name of the annotation specs used in the confusion
     * matrix, as they were at the moment of the evaluation. For Tables
     * CLASSIFICATION
     * [prediction_type-s][google.cloud.automl.v1p1beta.TablesModelMetadata.prediction_type],
     * distinct values of the target column at the moment of the model
     * evaluation are populated here.
     *
     * Generated from protobuf field <code>repeated string display_name = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->display_name = $arr;

        return $this;
    }

    /**
     * Output only. Rows in the confusion matrix. The number of rows is equal to
     * the size of `annotation_spec_id`.
     * `row[i].example_count[j]` is the number of examples that have ground
     * truth of the `annotation_spec_id[i]` and are predicted as
     * `annotation_spec_id[j]` by the model being evaluated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1.ClassificationEvaluationMetrics.ConfusionMatrix.Row row = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * Output only. Rows in the confusion matrix. The number of rows is equal to
     * the size of `annotation_spec_id`.
     * `row[i].example_count[j]` is the number of examples that have ground
     * truth of the `annotation_spec_id[i]` and are predicted as
     * `annotation_spec_id[j]` by the model being evaluated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1.ClassificationEvaluationMetrics.ConfusionMatrix.Row row = 2;</code>
     * @param array<\Google\Cloud\AutoMl\V1\ClassificationEvaluationMetrics\ConfusionMatrix\Row>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRow($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AutoMl\V1\ClassificationEvaluationMetrics\ConfusionMatrix\Row::class);
        $this->row = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConfusionMatrix::class, \Google\Cloud\AutoMl\V1\ClassificationEvaluationMetrics_ConfusionMatrix::class);

