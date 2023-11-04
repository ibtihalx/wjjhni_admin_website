<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1alpha/resources.proto

namespace GPBMetadata\Google\Cloud\Alloydb\V1Alpha;

class Resources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Type\Dayofweek::initOnce();
        \GPBMetadata\Google\Type\Timeofday::initOnce();
        $pool->internalAddGeneratedFile(
            '
�Y
,google/cloud/alloydb/v1alpha/resources.protogoogle.cloud.alloydb.v1alphagoogle/api/resource.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.protogoogle/type/dayofweek.protogoogle/type/timeofday.proto".
UserPassword
user (	
password (	"�
MigrationSource
	host_port (	B�A
reference_id (	B�A[
source_type (2A.google.cloud.alloydb.v1alpha.MigrationSource.MigrationSourceTypeB�A"E
MigrationSourceType%
!MIGRATION_SOURCE_TYPE_UNSPECIFIED 
DMS"(
EncryptionConfig
kms_key_name (	"�
EncryptionInfoO
encryption_type (21.google.cloud.alloydb.v1alpha.EncryptionInfo.TypeB�AJ
kms_key_versions (	B0�A�A*
(cloudkms.googleapis.com/CryptoKeyVersion"\\
Type
TYPE_UNSPECIFIED 
GOOGLE_DEFAULT_ENCRYPTION
CUSTOMER_MANAGED_ENCRYPTION"�
	SslConfigF
ssl_mode (2/.google.cloud.alloydb.v1alpha.SslConfig.SslModeB�AH
	ca_source (20.google.cloud.alloydb.v1alpha.SslConfig.CaSourceB�A"�
SslMode
SSL_MODE_UNSPECIFIED 
SSL_MODE_ALLOW
SSL_MODE_REQUIRE
SSL_MODE_VERIFY_CA#
ALLOW_UNENCRYPTED_AND_ENCRYPTED
ENCRYPTED_ONLY"<
CaSource
CA_SOURCE_UNSPECIFIED 
CA_SOURCE_MANAGED"�
AutomatedBackupPolicy]
weekly_schedule (2B.google.cloud.alloydb.v1alpha.AutomatedBackupPolicy.WeeklyScheduleH f
time_based_retention (2F.google.cloud.alloydb.v1alpha.AutomatedBackupPolicy.TimeBasedRetentionHn
quantity_based_retention (2J.google.cloud.alloydb.v1alpha.AutomatedBackupPolicy.QuantityBasedRetentionH
enabled (H�0
backup_window (2.google.protobuf.DurationN
encryption_config (2..google.cloud.alloydb.v1alpha.EncryptionConfigB�A
location (	O
labels (2?.google.cloud.alloydb.v1alpha.AutomatedBackupPolicy.LabelsEntryk
WeeklySchedule+
start_times (2.google.type.TimeOfDay,
days_of_week (2.google.type.DayOfWeekI
TimeBasedRetention3
retention_period (2.google.protobuf.Duration\'
QuantityBasedRetention
count (-
LabelsEntry
key (	
value (	:8B

scheduleB
	retentionB

_enabled"�
ContinuousBackupConfig
enabled (H �
recovery_window_days (I
encryption_config (2..google.cloud.alloydb.v1alpha.EncryptionConfigB

_enabled"�
ContinuousBackupInfoJ
encryption_info (2,.google.cloud.alloydb.v1alpha.EncryptionInfoB�A5
enabled_time (2.google.protobuf.TimestampB�A-
schedule (2.google.type.DayOfWeekB�AA
earliest_restorable_time (2.google.protobuf.TimestampB�A"c
BackupSource

backup_uid (	B�A:
backup_name (	B%�A�A
alloydb.googleapis.com/Backup"f
ContinuousBackupSource
cluster (	B�A6
point_in_time (2.google.protobuf.TimestampB�A"�
ClusterH
backup_source (2*.google.cloud.alloydb.v1alpha.BackupSourceB�AH N
migration_source (2-.google.cloud.alloydb.v1alpha.MigrationSourceB�AH 
name (	B�A
display_name (	
uid (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A4
delete_time (2.google.protobuf.TimestampB�AA
labels (21.google.cloud.alloydb.v1alpha.Cluster.LabelsEntry?
state (2+.google.cloud.alloydb.v1alpha.Cluster.StateB�AL
cluster_type (21.google.cloud.alloydb.v1alpha.Cluster.ClusterTypeB�AL
database_version	 (2-.google.cloud.alloydb.v1alpha.DatabaseVersionB�AP
network_config (23.google.cloud.alloydb.v1alpha.Cluster.NetworkConfigB�A9
network
 (	B(�A�A 
compute.googleapis.com/Network
etag (	K
annotations (26.google.cloud.alloydb.v1alpha.Cluster.AnnotationsEntry
reconciling (B�AE
initial_user (2*.google.cloud.alloydb.v1alpha.UserPasswordB�AT
automated_backup_policy (23.google.cloud.alloydb.v1alpha.AutomatedBackupPolicy?

ssl_config (2\'.google.cloud.alloydb.v1alpha.SslConfigBN
encryption_config (2..google.cloud.alloydb.v1alpha.EncryptionConfigB�AJ
encryption_info (2,.google.cloud.alloydb.v1alpha.EncryptionInfoB�A[
continuous_backup_config (24.google.cloud.alloydb.v1alpha.ContinuousBackupConfigB�AW
continuous_backup_info (22.google.cloud.alloydb.v1alpha.ContinuousBackupInfoB�AO
secondary_config (25.google.cloud.alloydb.v1alpha.Cluster.SecondaryConfigP
primary_config (23.google.cloud.alloydb.v1alpha.Cluster.PrimaryConfigB�A
satisfies_pzs (i
NetworkConfig7
network (	B&�A�A 
compute.googleapis.com/Network
allocated_ip_range (	B�A/
SecondaryConfig
primary_cluster_name (	5
PrimaryConfig$
secondary_cluster_names (	B�A-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8"�
State
STATE_UNSPECIFIED 	
READY
STOPPED	
EMPTY
CREATING
DELETING

FAILED
BOOTSTRAPPING
MAINTENANCE
	PROMOTING	"G
ClusterType
CLUSTER_TYPE_UNSPECIFIED 
PRIMARY
	SECONDARY:b�A_
alloydb.googleapis.com/Cluster:projects/{project}/locations/{location}/clusters/{cluster}RB
source"�
Instance
name (	B�A
display_name (	
uid (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A4
delete_time (2.google.protobuf.TimestampB�AB
labels (22.google.cloud.alloydb.v1alpha.Instance.LabelsEntry@
state (2,.google.cloud.alloydb.v1alpha.Instance.StateB�AO
instance_type	 (23.google.cloud.alloydb.v1alpha.Instance.InstanceTypeB�AL
machine_config
 (24.google.cloud.alloydb.v1alpha.Instance.MachineConfigR
availability_type (27.google.cloud.alloydb.v1alpha.Instance.AvailabilityType
gce_zone (	Q
database_flags (29.google.cloud.alloydb.v1alpha.Instance.DatabaseFlagsEntryG
writable_node (2+.google.cloud.alloydb.v1alpha.Instance.NodeB�A?
nodes (2+.google.cloud.alloydb.v1alpha.Instance.NodeB�Aa
query_insights_config (2B.google.cloud.alloydb.v1alpha.Instance.QueryInsightsInstanceConfigO
read_pool_config (25.google.cloud.alloydb.v1alpha.Instance.ReadPoolConfig

ip_address (	B�A
reconciling (B�A
etag (	L
annotations (27.google.cloud.alloydb.v1alpha.Instance.AnnotationsEntryJ
update_policy (23.google.cloud.alloydb.v1alpha.Instance.UpdatePolicyd
client_connection_config (2=.google.cloud.alloydb.v1alpha.Instance.ClientConnectionConfigB�A
satisfies_pzs ("
MachineConfig
	cpu_count (>
Node
zone_id (	

id (	

ip (	
state (	�
QueryInsightsInstanceConfig$
record_application_tags (H �"
record_client_address (H�
query_string_length (#
query_plans_per_minute (H�B
_record_application_tagsB
_record_client_addressB
_query_plans_per_minute$
ReadPoolConfig

node_count (�
UpdatePolicyF
mode (28.google.cloud.alloydb.v1alpha.Instance.UpdatePolicy.Mode":
Mode
MODE_UNSPECIFIED 
DEFAULT
FORCE_APPLY{
ClientConnectionConfig
require_connectors (B�A@

ssl_config (2\'.google.cloud.alloydb.v1alpha.SslConfigB�A-
LabelsEntry
key (	
value (	:84
DatabaseFlagsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8"�
State
STATE_UNSPECIFIED 	
READY
STOPPED
CREATING
DELETING
MAINTENANCE

FAILED
BOOTSTRAPPING
	PROMOTING	"X
InstanceType
INSTANCE_TYPE_UNSPECIFIED 
PRIMARY
	READ_POOL
	SECONDARY"N
AvailabilityType!
AVAILABILITY_TYPE_UNSPECIFIED 	
ZONAL
REGIONAL:x�Au
alloydb.googleapis.com/InstanceOprojects/{project}/locations/{location}/clusters/{cluster}/instances/{instance}R"�
ConnectionInfo
name (	

ip_address (	B�A$
pem_certificate_chain (	B�A
instance_uid (	B�A:��A�
%alloydb.googleapis.com/ConnectionInfo^projects/{project}/locations/{location}/clusters/{cluster}/instances/{instance}/connectionInfo"�
Backup
name (	B�A
display_name (	
uid (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A4
delete_time (2.google.protobuf.TimestampB�A@
labels (20.google.cloud.alloydb.v1alpha.Backup.LabelsEntry>
state (2*.google.cloud.alloydb.v1alpha.Backup.StateB�A7
type (2).google.cloud.alloydb.v1alpha.Backup.Type
description	 (	
cluster_uid (	B�A<
cluster_name
 (	B&�A�A 
alloydb.googleapis.com/Cluster
reconciling (B�AN
encryption_config (2..google.cloud.alloydb.v1alpha.EncryptionConfigB�AJ
encryption_info (2,.google.cloud.alloydb.v1alpha.EncryptionInfoB�A
etag (	J
annotations (25.google.cloud.alloydb.v1alpha.Backup.AnnotationsEntry

size_bytes (B�A4
expiry_time (2.google.protobuf.TimestampB�AV
expiry_quantity (28.google.cloud.alloydb.v1alpha.Backup.QuantityBasedExpiryB�A
satisfies_pzs (L
database_version (2-.google.cloud.alloydb.v1alpha.DatabaseVersionB�AW
QuantityBasedExpiry
retention_count (B�A"
total_retention_count (B�A-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8"Q
State
STATE_UNSPECIFIED 	
READY
CREATING

FAILED
DELETING"J
Type
TYPE_UNSPECIFIED 
	ON_DEMAND
	AUTOMATED

CONTINUOUS:_�A\\
alloydb.googleapis.com/Backup8projects/{project}/locations/{location}/backups/{backup}R"�
SupportedDatabaseFlage
string_restrictions (2F.google.cloud.alloydb.v1alpha.SupportedDatabaseFlag.StringRestrictionsH g
integer_restrictions (2G.google.cloud.alloydb.v1alpha.SupportedDatabaseFlag.IntegerRestrictionsH 
name (	
	flag_name (	Q

value_type (2=.google.cloud.alloydb.v1alpha.SupportedDatabaseFlag.ValueType
accepts_multiple_values (L
supported_db_versions (2-.google.cloud.alloydb.v1alpha.DatabaseVersion
requires_db_restart (,
StringRestrictions
allowed_values (	u
IntegerRestrictions.
	min_value (2.google.protobuf.Int64Value.
	max_value (2.google.protobuf.Int64Value"U
	ValueType
VALUE_TYPE_UNSPECIFIED 

STRING
INTEGER	
FLOAT
NONE:g�Ad
,alloydb.googleapis.com/SupportedDatabaseFlag4projects/{project}/locations/{location}/flags/{flag}B
restrictions"�
User
name (	B�A
password (	B�A
database_roles (	B�AC
	user_type (2+.google.cloud.alloydb.v1alpha.User.UserTypeB�A"Q
UserType
USER_TYPE_UNSPECIFIED 
ALLOYDB_BUILT_IN
ALLOYDB_IAM_USER:l�Ai
alloydb.googleapis.com/UserGprojects/{project}/locations/{location}/clusters/{cluster}/users/{user}R*^
InstanceView
INSTANCE_VIEW_UNSPECIFIED 
INSTANCE_VIEW_BASIC
INSTANCE_VIEW_FULL*g
ClusterView
CLUSTER_VIEW_UNSPECIFIED 
CLUSTER_VIEW_BASIC"
CLUSTER_VIEW_CONTINUOUS_BACKUP*j
DatabaseVersion 
DATABASE_VERSION_UNSPECIFIED 
POSTGRES_13
POSTGRES_14
POSTGRES_15B�
 com.google.cloud.alloydb.v1alphaBResourcesProtoPZ:cloud.google.com/go/alloydb/apiv1alpha/alloydbpb;alloydbpb�Google.Cloud.AlloyDb.V1Alpha�Google\\Cloud\\AlloyDb\\V1alpha�Google::Cloud::AlloyDB::V1alpha�A�
(cloudkms.googleapis.com/CryptoKeyVersionzprojects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}/cryptoKeyVersions/{crypto_key_version}�AN
compute.googleapis.com/Network,projects/{project}/global/networks/{network}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

