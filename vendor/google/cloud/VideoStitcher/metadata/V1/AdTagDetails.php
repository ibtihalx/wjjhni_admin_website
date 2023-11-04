<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/ad_tag_details.proto

namespace GPBMetadata\Google\Cloud\Video\Stitcher\V1;

class AdTagDetails
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
3google/cloud/video/stitcher/v1/ad_tag_details.protogoogle.cloud.video.stitcher.v1google/protobuf/duration.protogoogle/protobuf/struct.proto"�
LiveAdTagDetail
name (	>
ad_requests (2).google.cloud.video.stitcher.v1.AdRequest:��A�
,videostitcher.googleapis.com/LiveAdTagDetailiprojects/{project}/locations/{location}/liveSessions/{live_session}/liveAdTagDetails/{live_ad_tag_detail}"�
VodAdTagDetail
name (	>
ad_requests (2).google.cloud.video.stitcher.v1.AdRequest:��A�
+videostitcher.googleapis.com/VodAdTagDetaileprojects/{project}/locations/{location}/vodSessions/{vod_session}/vodAdTagDetails/{vod_ad_tag_detail}"�
	AdRequest
uri (	I
request_metadata (2/.google.cloud.video.stitcher.v1.RequestMetadataK
response_metadata (20.google.cloud.video.stitcher.v1.ResponseMetadata";
RequestMetadata(
headers (2.google.protobuf.Struct"�
ResponseMetadata
error (	(
headers (2.google.protobuf.Struct
status_code (	

size_bytes (+
duration (2.google.protobuf.Duration
body (	By
"com.google.cloud.video.stitcher.v1BAdTagDetailsProtoPZ>cloud.google.com/go/video/stitcher/apiv1/stitcherpb;stitcherpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

