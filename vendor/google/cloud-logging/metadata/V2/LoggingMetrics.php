<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_metrics.proto

namespace GPBMetadata\Google\Logging\V2;

class LoggingMetrics
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\Distribution::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Metric::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
\'google/logging/v2/logging_metrics.protogoogle.logging.v2google/api/client.protogoogle/api/distribution.protogoogle/api/field_behavior.protogoogle/api/metric.protogoogle/api/resource.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.proto"�
	LogMetric
name (	B�A
description (	B�A
filter (	B�A
disabled (B�A<
metric_descriptor (2.google.api.MetricDescriptorB�A
value_extractor (	B�AP
label_extractors (21.google.logging.v2.LogMetric.LabelExtractorsEntryB�AC
bucket_options (2&.google.api.Distribution.BucketOptionsB�A4
create_time	 (2.google.protobuf.TimestampB�A4
update_time
 (2.google.protobuf.TimestampB�A<
version (2\'.google.logging.v2.LogMetric.ApiVersionB6
LabelExtractorsEntry
key (	
value (	:8"

ApiVersion
V2 
V1:J�AG
 logging.googleapis.com/LogMetric#projects/{project}/metrics/{metric}"�
ListLogMetricsRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project

page_token (	B�A
	page_size (B�A"`
ListLogMetricsResponse-
metrics (2.google.logging.v2.LogMetric
next_page_token (	"T
GetLogMetricRequest=
metric_name (	B(�A�A"
 logging.googleapis.com/LogMetric"�
CreateLogMetricRequest8
parent (	B(�A�A" logging.googleapis.com/LogMetric1
metric (2.google.logging.v2.LogMetricB�A"�
UpdateLogMetricRequest=
metric_name (	B(�A�A"
 logging.googleapis.com/LogMetric1
metric (2.google.logging.v2.LogMetricB�A"W
DeleteLogMetricRequest=
metric_name (	B(�A�A"
 logging.googleapis.com/LogMetric2�
MetricsServiceV2�
ListLogMetrics(.google.logging.v2.ListLogMetricsRequest).google.logging.v2.ListLogMetricsResponse"0���!/v2/{parent=projects/*}/metrics�Aparent�
GetLogMetric&.google.logging.v2.GetLogMetricRequest.google.logging.v2.LogMetric"<���(&/v2/{metric_name=projects/*/metrics/*}�Ametric_name�
CreateLogMetric).google.logging.v2.CreateLogMetricRequest.google.logging.v2.LogMetric"?���)"/v2/{parent=projects/*}/metrics:metric�Aparent,metric�
UpdateLogMetric).google.logging.v2.UpdateLogMetricRequest.google.logging.v2.LogMetric"K���0&/v2/{metric_name=projects/*/metrics/*}:metric�Ametric_name,metric�
DeleteLogMetric).google.logging.v2.DeleteLogMetricRequest.google.protobuf.Empty"<���(*&/v2/{metric_name=projects/*/metrics/*}�Ametric_name��Alogging.googleapis.com�A�https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/cloud-platform.read-only,https://www.googleapis.com/auth/logging.admin,https://www.googleapis.com/auth/logging.read,https://www.googleapis.com/auth/logging.writeB�
com.google.logging.v2BLoggingMetricsProtoPZ8google.golang.org/genproto/googleapis/logging/v2;logging��Google.Cloud.Logging.V2�Google\\Cloud\\Logging\\V2�Google::Cloud::Logging::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

