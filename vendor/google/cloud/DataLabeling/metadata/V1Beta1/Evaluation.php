<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/evaluation.proto

namespace GPBMetadata\Google\Cloud\Datalabeling\V1Beta1;

class Evaluation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Annotation::initOnce();
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\AnnotationSpecSet::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
2google/cloud/datalabeling/v1beta1/evaluation.proto!google.cloud.datalabeling.v1beta12google/cloud/datalabeling/v1beta1/annotation.proto;google/cloud/datalabeling/v1beta1/annotation_spec_set.protogoogle/protobuf/timestamp.proto"�

Evaluation
name (	C
config (23.google.cloud.datalabeling.v1beta1.EvaluationConfig;
evaluation_job_run_time (2.google.protobuf.Timestamp/
create_time (2.google.protobuf.TimestampP
evaluation_metrics (24.google.cloud.datalabeling.v1beta1.EvaluationMetricsJ
annotation_type (21.google.cloud.datalabeling.v1beta1.AnnotationType
evaluated_item_count (:k�Ah
&datalabeling.googleapis.com/Evaluation>projects/{project}/datasets/{dataset}/evaluations/{evaluation}"�
EvaluationConfigj
bounding_box_evaluation_options (2?.google.cloud.datalabeling.v1beta1.BoundingBoxEvaluationOptionsH B
vertical_option"5
BoundingBoxEvaluationOptions
iou_threshold ("�
EvaluationMetricsZ
classification_metrics (28.google.cloud.datalabeling.v1beta1.ClassificationMetricsH ]
object_detection_metrics (29.google.cloud.datalabeling.v1beta1.ObjectDetectionMetricsH B	
metrics"�
ClassificationMetrics<
pr_curve (2*.google.cloud.datalabeling.v1beta1.PrCurveL
confusion_matrix (22.google.cloud.datalabeling.v1beta1.ConfusionMatrix"V
ObjectDetectionMetrics<
pr_curve (2*.google.cloud.datalabeling.v1beta1.PrCurve"�
PrCurveJ
annotation_spec (21.google.cloud.datalabeling.v1beta1.AnnotationSpec
area_under_curve (e
confidence_metrics_entries (2A.google.cloud.datalabeling.v1beta1.PrCurve.ConfidenceMetricsEntry
mean_average_precision (�
ConfidenceMetricsEntry
confidence_threshold (
recall (
	precision (
f1_score (

recall_at1 (
precision_at1 (
f1_score_at1 (

recall_at5 (
precision_at5	 (
f1_score_at5
 ("�
ConfusionMatrixC
row (26.google.cloud.datalabeling.v1beta1.ConfusionMatrix.Rowv
ConfusionMatrixEntryJ
annotation_spec (21.google.cloud.datalabeling.v1beta1.AnnotationSpec

item_count (�
RowJ
annotation_spec (21.google.cloud.datalabeling.v1beta1.AnnotationSpecX
entries (2G.google.cloud.datalabeling.v1beta1.ConfusionMatrix.ConfusionMatrixEntryB�
%com.google.cloud.datalabeling.v1beta1PZIcloud.google.com/go/datalabeling/apiv1beta1/datalabelingpb;datalabelingpb�!Google.Cloud.DataLabeling.V1Beta1�!Google\\Cloud\\DataLabeling\\V1beta1�$Google::Cloud::DataLabeling::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

