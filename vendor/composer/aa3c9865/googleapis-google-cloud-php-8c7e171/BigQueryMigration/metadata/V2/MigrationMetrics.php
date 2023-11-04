<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/migration/v2/migration_metrics.proto

namespace GPBMetadata\Google\Cloud\Bigquery\Migration\V2;

class MigrationMetrics
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Distribution::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Metric::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/cloud/bigquery/migration/v2/migration_metrics.proto"google.cloud.bigquery.migration.v2google/api/field_behavior.protogoogle/api/metric.protogoogle/protobuf/timestamp.proto"�

TimeSeries
metric (	B�A?

value_type (2&.google.api.MetricDescriptor.ValueTypeB�AA
metric_kind (2\'.google.api.MetricDescriptor.MetricKindB�A>
points (2).google.cloud.bigquery.migration.v2.PointB�A"�
PointB
interval (20.google.cloud.bigquery.migration.v2.TimeInterval=
value (2..google.cloud.bigquery.migration.v2.TypedValue"v
TimeInterval3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A"�

TypedValue

bool_value (H 
int64_value (H 
double_value (H 
string_value (	H 6
distribution_value (2.google.api.DistributionH B
valueB�
&com.google.cloud.bigquery.migration.v2BMigrationMetricsProtoPZDcloud.google.com/go/bigquery/migration/apiv2/migrationpb;migrationpb�"Google.Cloud.BigQuery.Migration.V2�"Google\\Cloud\\BigQuery\\Migration\\V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

