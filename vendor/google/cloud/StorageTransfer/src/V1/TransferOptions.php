<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TransferOptions define the actions to be performed on objects in a transfer.
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.TransferOptions</code>
 */
class TransferOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * When to overwrite objects that already exist in the sink. The default is
     * that only objects that are different from the source are ovewritten. If
     * true, all objects in the sink whose name matches an object in the source
     * are overwritten with the source object.
     *
     * Generated from protobuf field <code>bool overwrite_objects_already_existing_in_sink = 1;</code>
     */
    private $overwrite_objects_already_existing_in_sink = false;
    /**
     * Whether objects that exist only in the sink should be deleted.
     * **Note:** This option and
     * [delete_objects_from_source_after_transfer][google.storagetransfer.v1.TransferOptions.delete_objects_from_source_after_transfer]
     * are mutually exclusive.
     *
     * Generated from protobuf field <code>bool delete_objects_unique_in_sink = 2;</code>
     */
    private $delete_objects_unique_in_sink = false;
    /**
     * Whether objects should be deleted from the source after they are
     * transferred to the sink.
     * **Note:** This option and
     * [delete_objects_unique_in_sink][google.storagetransfer.v1.TransferOptions.delete_objects_unique_in_sink]
     * are mutually exclusive.
     *
     * Generated from protobuf field <code>bool delete_objects_from_source_after_transfer = 3;</code>
     */
    private $delete_objects_from_source_after_transfer = false;
    /**
     * When to overwrite objects that already exist in the sink. If not set,
     * overwrite behavior is determined by
     * [overwrite_objects_already_existing_in_sink][google.storagetransfer.v1.TransferOptions.overwrite_objects_already_existing_in_sink].
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferOptions.OverwriteWhen overwrite_when = 4;</code>
     */
    private $overwrite_when = 0;
    /**
     * Represents the selected metadata options for a transfer job.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.MetadataOptions metadata_options = 5;</code>
     */
    private $metadata_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $overwrite_objects_already_existing_in_sink
     *           When to overwrite objects that already exist in the sink. The default is
     *           that only objects that are different from the source are ovewritten. If
     *           true, all objects in the sink whose name matches an object in the source
     *           are overwritten with the source object.
     *     @type bool $delete_objects_unique_in_sink
     *           Whether objects that exist only in the sink should be deleted.
     *           **Note:** This option and
     *           [delete_objects_from_source_after_transfer][google.storagetransfer.v1.TransferOptions.delete_objects_from_source_after_transfer]
     *           are mutually exclusive.
     *     @type bool $delete_objects_from_source_after_transfer
     *           Whether objects should be deleted from the source after they are
     *           transferred to the sink.
     *           **Note:** This option and
     *           [delete_objects_unique_in_sink][google.storagetransfer.v1.TransferOptions.delete_objects_unique_in_sink]
     *           are mutually exclusive.
     *     @type int $overwrite_when
     *           When to overwrite objects that already exist in the sink. If not set,
     *           overwrite behavior is determined by
     *           [overwrite_objects_already_existing_in_sink][google.storagetransfer.v1.TransferOptions.overwrite_objects_already_existing_in_sink].
     *     @type \Google\Cloud\StorageTransfer\V1\MetadataOptions $metadata_options
     *           Represents the selected metadata options for a transfer job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * When to overwrite objects that already exist in the sink. The default is
     * that only objects that are different from the source are ovewritten. If
     * true, all objects in the sink whose name matches an object in the source
     * are overwritten with the source object.
     *
     * Generated from protobuf field <code>bool overwrite_objects_already_existing_in_sink = 1;</code>
     * @return bool
     */
    public function getOverwriteObjectsAlreadyExistingInSink()
    {
        return $this->overwrite_objects_already_existing_in_sink;
    }

    /**
     * When to overwrite objects that already exist in the sink. The default is
     * that only objects that are different from the source are ovewritten. If
     * true, all objects in the sink whose name matches an object in the source
     * are overwritten with the source object.
     *
     * Generated from protobuf field <code>bool overwrite_objects_already_existing_in_sink = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setOverwriteObjectsAlreadyExistingInSink($var)
    {
        GPBUtil::checkBool($var);
        $this->overwrite_objects_already_existing_in_sink = $var;

        return $this;
    }

    /**
     * Whether objects that exist only in the sink should be deleted.
     * **Note:** This option and
     * [delete_objects_from_source_after_transfer][google.storagetransfer.v1.TransferOptions.delete_objects_from_source_after_transfer]
     * are mutually exclusive.
     *
     * Generated from protobuf field <code>bool delete_objects_unique_in_sink = 2;</code>
     * @return bool
     */
    public function getDeleteObjectsUniqueInSink()
    {
        return $this->delete_objects_unique_in_sink;
    }

    /**
     * Whether objects that exist only in the sink should be deleted.
     * **Note:** This option and
     * [delete_objects_from_source_after_transfer][google.storagetransfer.v1.TransferOptions.delete_objects_from_source_after_transfer]
     * are mutually exclusive.
     *
     * Generated from protobuf field <code>bool delete_objects_unique_in_sink = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeleteObjectsUniqueInSink($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_objects_unique_in_sink = $var;

        return $this;
    }

    /**
     * Whether objects should be deleted from the source after they are
     * transferred to the sink.
     * **Note:** This option and
     * [delete_objects_unique_in_sink][google.storagetransfer.v1.TransferOptions.delete_objects_unique_in_sink]
     * are mutually exclusive.
     *
     * Generated from protobuf field <code>bool delete_objects_from_source_after_transfer = 3;</code>
     * @return bool
     */
    public function getDeleteObjectsFromSourceAfterTransfer()
    {
        return $this->delete_objects_from_source_after_transfer;
    }

    /**
     * Whether objects should be deleted from the source after they are
     * transferred to the sink.
     * **Note:** This option and
     * [delete_objects_unique_in_sink][google.storagetransfer.v1.TransferOptions.delete_objects_unique_in_sink]
     * are mutually exclusive.
     *
     * Generated from protobuf field <code>bool delete_objects_from_source_after_transfer = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeleteObjectsFromSourceAfterTransfer($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_objects_from_source_after_transfer = $var;

        return $this;
    }

    /**
     * When to overwrite objects that already exist in the sink. If not set,
     * overwrite behavior is determined by
     * [overwrite_objects_already_existing_in_sink][google.storagetransfer.v1.TransferOptions.overwrite_objects_already_existing_in_sink].
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferOptions.OverwriteWhen overwrite_when = 4;</code>
     * @return int
     */
    public function getOverwriteWhen()
    {
        return $this->overwrite_when;
    }

    /**
     * When to overwrite objects that already exist in the sink. If not set,
     * overwrite behavior is determined by
     * [overwrite_objects_already_existing_in_sink][google.storagetransfer.v1.TransferOptions.overwrite_objects_already_existing_in_sink].
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferOptions.OverwriteWhen overwrite_when = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setOverwriteWhen($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\StorageTransfer\V1\TransferOptions\OverwriteWhen::class);
        $this->overwrite_when = $var;

        return $this;
    }

    /**
     * Represents the selected metadata options for a transfer job.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.MetadataOptions metadata_options = 5;</code>
     * @return \Google\Cloud\StorageTransfer\V1\MetadataOptions|null
     */
    public function getMetadataOptions()
    {
        return $this->metadata_options;
    }

    public function hasMetadataOptions()
    {
        return isset($this->metadata_options);
    }

    public function clearMetadataOptions()
    {
        unset($this->metadata_options);
    }

    /**
     * Represents the selected metadata options for a transfer job.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.MetadataOptions metadata_options = 5;</code>
     * @param \Google\Cloud\StorageTransfer\V1\MetadataOptions $var
     * @return $this
     */
    public function setMetadataOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\MetadataOptions::class);
        $this->metadata_options = $var;

        return $this;
    }

}

