<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/publisher_model.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class PublisherModel
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MachineResources::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Model::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
0google/cloud/aiplatform/v1/publisher_model.protogoogle.cloud.aiplatform.v1google/api/resource.proto2google/cloud/aiplatform/v1/machine_resources.proto&google/cloud/aiplatform/v1/model.proto"�
PublisherModel
name (	B�A

version_id (	B�A�A`
open_source_category (2=.google.cloud.aiplatform.v1.PublisherModel.OpenSourceCategoryB�AW
supported_actions (27.google.cloud.aiplatform.v1.PublisherModel.CallToActionB�A

frameworks (	B�AQ
launch_stage (26.google.cloud.aiplatform.v1.PublisherModel.LaunchStageB�A(
publisher_model_template (	B�A�AJ
predict_schemata (2+.google.cloud.aiplatform.v1.PredictSchemataB�AH
ResourceReference
uri (	H 
resource_name (	H B
	reference9
Documentation
title (	B�A
content (	B�A�
CallToAction_
view_rest_api (2C.google.cloud.aiplatform.v1.PublisherModel.CallToAction.ViewRestApiB�An
open_notebook (2R.google.cloud.aiplatform.v1.PublisherModel.CallToAction.RegionalResourceReferencesB�As
create_application (2R.google.cloud.aiplatform.v1.PublisherModel.CallToAction.RegionalResourceReferencesB�Az
open_fine_tuning_pipeline (2R.google.cloud.aiplatform.v1.PublisherModel.CallToAction.RegionalResourceReferencesB�A|
open_prompt_tuning_pipeline (2R.google.cloud.aiplatform.v1.PublisherModel.CallToAction.RegionalResourceReferencesB�Ak

open_genie (2R.google.cloud.aiplatform.v1.PublisherModel.CallToAction.RegionalResourceReferencesB�AS
deploy (2>.google.cloud.aiplatform.v1.PublisherModel.CallToAction.DeployB�Az
open_generation_ai_studio (2R.google.cloud.aiplatform.v1.PublisherModel.CallToAction.RegionalResourceReferencesB�Ao
request_access	 (2R.google.cloud.aiplatform.v1.PublisherModel.CallToAction.RegionalResourceReferencesB�Ay
open_evaluation_pipeline (2R.google.cloud.aiplatform.v1.PublisherModel.CallToAction.RegionalResourceReferencesB�A�
RegionalResourceReferences{

references (2b.google.cloud.aiplatform.v1.PublisherModel.CallToAction.RegionalResourceReferences.ReferencesEntryB�A
title (	B�Ao
ReferencesEntry
key (	K
value (2<.google.cloud.aiplatform.v1.PublisherModel.ResourceReference:8x
ViewRestApiU
documentations (28.google.cloud.aiplatform.v1.PublisherModel.DocumentationB�A
title (	B�A�
DeployM
dedicated_resources (2..google.cloud.aiplatform.v1.DedicatedResourcesH M
automatic_resources (2..google.cloud.aiplatform.v1.AutomaticResourcesH 
shared_resources (	H 
model_display_name (	B�AS
large_model_reference (2/.google.cloud.aiplatform.v1.LargeModelReferenceB�AK
container_spec (2..google.cloud.aiplatform.v1.ModelContainerSpecB�A
artifact_uri (	B�A
title (	B�AB
prediction_resources"�
OpenSourceCategory$
 OPEN_SOURCE_CATEGORY_UNSPECIFIED 
PROPRIETARY+
\'GOOGLE_OWNED_OSS_WITH_GOOGLE_CHECKPOINT0
,THIRD_PARTY_OWNED_OSS_WITH_GOOGLE_CHECKPOINT
GOOGLE_OWNED_OSS
THIRD_PARTY_OWNED_OSS"n
LaunchStage
LAUNCH_STAGE_UNSPECIFIED 
EXPERIMENTAL
PRIVATE_PREVIEW
PUBLIC_PREVIEW
GA:T�AQ
(aiplatform.googleapis.com/PublisherModel%publishers/{publisher}/models/{model}B�
com.google.cloud.aiplatform.v1BPublisherModelProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

