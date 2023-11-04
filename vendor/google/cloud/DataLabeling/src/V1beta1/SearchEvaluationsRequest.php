<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/data_labeling_service.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for SearchEvaluation.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.SearchEvaluationsRequest</code>
 */
class SearchEvaluationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Evaluation search parent (project ID). Format:
     * "projects/<var>{project_id}</var>"
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. To search evaluations, you can filter by the following:
     * * evaluation<span>_</span>job.evaluation_job_id (the last part of
     *   [EvaluationJob.name][google.cloud.datalabeling.v1beta1.EvaluationJob.name])
     * * evaluation<span>_</span>job.model_id (the <var>{model_name}</var> portion
     *   of [EvaluationJob.modelVersion][google.cloud.datalabeling.v1beta1.EvaluationJob.model_version])
     * * evaluation<span>_</span>job.evaluation_job_run_time_start (Minimum
     *   threshold for the
     *   [evaluationJobRunTime][google.cloud.datalabeling.v1beta1.Evaluation.evaluation_job_run_time] that created
     *   the evaluation)
     * * evaluation<span>_</span>job.evaluation_job_run_time_end (Maximum
     *   threshold for the
     *   [evaluationJobRunTime][google.cloud.datalabeling.v1beta1.Evaluation.evaluation_job_run_time] that created
     *   the evaluation)
     * * evaluation<span>_</span>job.job_state ([EvaluationJob.state][google.cloud.datalabeling.v1beta1.EvaluationJob.state])
     * * annotation<span>_</span>spec.display_name (the Evaluation contains a
     *   metric for the annotation spec with this
     *   [displayName][google.cloud.datalabeling.v1beta1.AnnotationSpec.display_name])
     * To filter by multiple critiera, use the `AND` operator or the `OR`
     * operator. The following examples shows a string that filters by several
     * critiera:
     * "evaluation<span>_</span>job.evaluation_job_id =
     * <var>{evaluation_job_id}</var> AND evaluation<span>_</span>job.model_id =
     * <var>{model_name}</var> AND
     * evaluation<span>_</span>job.evaluation_job_run_time_start =
     * <var>{timestamp_1}</var> AND
     * evaluation<span>_</span>job.evaluation_job_run_time_end =
     * <var>{timestamp_2}</var> AND annotation<span>_</span>spec.display_name =
     * <var>{display_name}</var>"
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';
    /**
     * Optional. Requested page size. Server may return fewer results than
     * requested. Default value is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. A token identifying a page of results for the server to return.
     * Typically obtained by the
     * [nextPageToken][google.cloud.datalabeling.v1beta1.SearchEvaluationsResponse.next_page_token] of the response
     * to a previous search request.
     * If you don't specify this field, the API call requests the first page of
     * the search.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';

    /**
     * @param string $parent Required. Evaluation search parent (project ID). Format:
     *                       "projects/<var>{project_id}</var>"
     *                       Please see {@see DataLabelingServiceClient::evaluationName()} for help formatting this field.
     * @param string $filter Optional. To search evaluations, you can filter by the following:
     *
     *                       * evaluation<span>_</span>job.evaluation_job_id (the last part of
     *                       [EvaluationJob.name][google.cloud.datalabeling.v1beta1.EvaluationJob.name])
     *                       * evaluation<span>_</span>job.model_id (the <var>{model_name}</var> portion
     *                       of [EvaluationJob.modelVersion][google.cloud.datalabeling.v1beta1.EvaluationJob.model_version])
     *                       * evaluation<span>_</span>job.evaluation_job_run_time_start (Minimum
     *                       threshold for the
     *                       [evaluationJobRunTime][google.cloud.datalabeling.v1beta1.Evaluation.evaluation_job_run_time] that created
     *                       the evaluation)
     *                       * evaluation<span>_</span>job.evaluation_job_run_time_end (Maximum
     *                       threshold for the
     *                       [evaluationJobRunTime][google.cloud.datalabeling.v1beta1.Evaluation.evaluation_job_run_time] that created
     *                       the evaluation)
     *                       * evaluation<span>_</span>job.job_state ([EvaluationJob.state][google.cloud.datalabeling.v1beta1.EvaluationJob.state])
     *                       * annotation<span>_</span>spec.display_name (the Evaluation contains a
     *                       metric for the annotation spec with this
     *                       [displayName][google.cloud.datalabeling.v1beta1.AnnotationSpec.display_name])
     *
     *                       To filter by multiple critiera, use the `AND` operator or the `OR`
     *                       operator. The following examples shows a string that filters by several
     *                       critiera:
     *
     *                       "evaluation<span>_</span>job.evaluation_job_id =
     *                       <var>{evaluation_job_id}</var> AND evaluation<span>_</span>job.model_id =
     *                       <var>{model_name}</var> AND
     *                       evaluation<span>_</span>job.evaluation_job_run_time_start =
     *                       <var>{timestamp_1}</var> AND
     *                       evaluation<span>_</span>job.evaluation_job_run_time_end =
     *                       <var>{timestamp_2}</var> AND annotation<span>_</span>spec.display_name =
     *                       <var>{display_name}</var>"
     *
     * @return \Google\Cloud\DataLabeling\V1beta1\SearchEvaluationsRequest
     *
     * @experimental
     */
    public static function build(string $parent, string $filter): self
    {
        return (new self())
            ->setParent($parent)
            ->setFilter($filter);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Evaluation search parent (project ID). Format:
     *           "projects/<var>{project_id}</var>"
     *     @type string $filter
     *           Optional. To search evaluations, you can filter by the following:
     *           * evaluation<span>_</span>job.evaluation_job_id (the last part of
     *             [EvaluationJob.name][google.cloud.datalabeling.v1beta1.EvaluationJob.name])
     *           * evaluation<span>_</span>job.model_id (the <var>{model_name}</var> portion
     *             of [EvaluationJob.modelVersion][google.cloud.datalabeling.v1beta1.EvaluationJob.model_version])
     *           * evaluation<span>_</span>job.evaluation_job_run_time_start (Minimum
     *             threshold for the
     *             [evaluationJobRunTime][google.cloud.datalabeling.v1beta1.Evaluation.evaluation_job_run_time] that created
     *             the evaluation)
     *           * evaluation<span>_</span>job.evaluation_job_run_time_end (Maximum
     *             threshold for the
     *             [evaluationJobRunTime][google.cloud.datalabeling.v1beta1.Evaluation.evaluation_job_run_time] that created
     *             the evaluation)
     *           * evaluation<span>_</span>job.job_state ([EvaluationJob.state][google.cloud.datalabeling.v1beta1.EvaluationJob.state])
     *           * annotation<span>_</span>spec.display_name (the Evaluation contains a
     *             metric for the annotation spec with this
     *             [displayName][google.cloud.datalabeling.v1beta1.AnnotationSpec.display_name])
     *           To filter by multiple critiera, use the `AND` operator or the `OR`
     *           operator. The following examples shows a string that filters by several
     *           critiera:
     *           "evaluation<span>_</span>job.evaluation_job_id =
     *           <var>{evaluation_job_id}</var> AND evaluation<span>_</span>job.model_id =
     *           <var>{model_name}</var> AND
     *           evaluation<span>_</span>job.evaluation_job_run_time_start =
     *           <var>{timestamp_1}</var> AND
     *           evaluation<span>_</span>job.evaluation_job_run_time_end =
     *           <var>{timestamp_2}</var> AND annotation<span>_</span>spec.display_name =
     *           <var>{display_name}</var>"
     *     @type int $page_size
     *           Optional. Requested page size. Server may return fewer results than
     *           requested. Default value is 100.
     *     @type string $page_token
     *           Optional. A token identifying a page of results for the server to return.
     *           Typically obtained by the
     *           [nextPageToken][google.cloud.datalabeling.v1beta1.SearchEvaluationsResponse.next_page_token] of the response
     *           to a previous search request.
     *           If you don't specify this field, the API call requests the first page of
     *           the search.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\DataLabelingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Evaluation search parent (project ID). Format:
     * "projects/<var>{project_id}</var>"
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Evaluation search parent (project ID). Format:
     * "projects/<var>{project_id}</var>"
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. To search evaluations, you can filter by the following:
     * * evaluation<span>_</span>job.evaluation_job_id (the last part of
     *   [EvaluationJob.name][google.cloud.datalabeling.v1beta1.EvaluationJob.name])
     * * evaluation<span>_</span>job.model_id (the <var>{model_name}</var> portion
     *   of [EvaluationJob.modelVersion][google.cloud.datalabeling.v1beta1.EvaluationJob.model_version])
     * * evaluation<span>_</span>job.evaluation_job_run_time_start (Minimum
     *   threshold for the
     *   [evaluationJobRunTime][google.cloud.datalabeling.v1beta1.Evaluation.evaluation_job_run_time] that created
     *   the evaluation)
     * * evaluation<span>_</span>job.evaluation_job_run_time_end (Maximum
     *   threshold for the
     *   [evaluationJobRunTime][google.cloud.datalabeling.v1beta1.Evaluation.evaluation_job_run_time] that created
     *   the evaluation)
     * * evaluation<span>_</span>job.job_state ([EvaluationJob.state][google.cloud.datalabeling.v1beta1.EvaluationJob.state])
     * * annotation<span>_</span>spec.display_name (the Evaluation contains a
     *   metric for the annotation spec with this
     *   [displayName][google.cloud.datalabeling.v1beta1.AnnotationSpec.display_name])
     * To filter by multiple critiera, use the `AND` operator or the `OR`
     * operator. The following examples shows a string that filters by several
     * critiera:
     * "evaluation<span>_</span>job.evaluation_job_id =
     * <var>{evaluation_job_id}</var> AND evaluation<span>_</span>job.model_id =
     * <var>{model_name}</var> AND
     * evaluation<span>_</span>job.evaluation_job_run_time_start =
     * <var>{timestamp_1}</var> AND
     * evaluation<span>_</span>job.evaluation_job_run_time_end =
     * <var>{timestamp_2}</var> AND annotation<span>_</span>spec.display_name =
     * <var>{display_name}</var>"
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. To search evaluations, you can filter by the following:
     * * evaluation<span>_</span>job.evaluation_job_id (the last part of
     *   [EvaluationJob.name][google.cloud.datalabeling.v1beta1.EvaluationJob.name])
     * * evaluation<span>_</span>job.model_id (the <var>{model_name}</var> portion
     *   of [EvaluationJob.modelVersion][google.cloud.datalabeling.v1beta1.EvaluationJob.model_version])
     * * evaluation<span>_</span>job.evaluation_job_run_time_start (Minimum
     *   threshold for the
     *   [evaluationJobRunTime][google.cloud.datalabeling.v1beta1.Evaluation.evaluation_job_run_time] that created
     *   the evaluation)
     * * evaluation<span>_</span>job.evaluation_job_run_time_end (Maximum
     *   threshold for the
     *   [evaluationJobRunTime][google.cloud.datalabeling.v1beta1.Evaluation.evaluation_job_run_time] that created
     *   the evaluation)
     * * evaluation<span>_</span>job.job_state ([EvaluationJob.state][google.cloud.datalabeling.v1beta1.EvaluationJob.state])
     * * annotation<span>_</span>spec.display_name (the Evaluation contains a
     *   metric for the annotation spec with this
     *   [displayName][google.cloud.datalabeling.v1beta1.AnnotationSpec.display_name])
     * To filter by multiple critiera, use the `AND` operator or the `OR`
     * operator. The following examples shows a string that filters by several
     * critiera:
     * "evaluation<span>_</span>job.evaluation_job_id =
     * <var>{evaluation_job_id}</var> AND evaluation<span>_</span>job.model_id =
     * <var>{model_name}</var> AND
     * evaluation<span>_</span>job.evaluation_job_run_time_start =
     * <var>{timestamp_1}</var> AND
     * evaluation<span>_</span>job.evaluation_job_run_time_end =
     * <var>{timestamp_2}</var> AND annotation<span>_</span>spec.display_name =
     * <var>{display_name}</var>"
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. Requested page size. Server may return fewer results than
     * requested. Default value is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Requested page size. Server may return fewer results than
     * requested. Default value is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A token identifying a page of results for the server to return.
     * Typically obtained by the
     * [nextPageToken][google.cloud.datalabeling.v1beta1.SearchEvaluationsResponse.next_page_token] of the response
     * to a previous search request.
     * If you don't specify this field, the API call requests the first page of
     * the search.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A token identifying a page of results for the server to return.
     * Typically obtained by the
     * [nextPageToken][google.cloud.datalabeling.v1beta1.SearchEvaluationsResponse.next_page_token] of the response
     * to a previous search request.
     * If you don't specify this field, the API call requests the first page of
     * the search.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

