<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/analyticshub/v1/analyticshub.proto

namespace Google\Cloud\BigQuery\AnalyticsHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for updating a Listing.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.analyticshub.v1.UpdateListingRequest</code>
 */
class UpdateListingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Field mask specifies the fields to update in the listing
     * resource. The fields specified in the `updateMask` are relative to the
     * resource and are not a full request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * Required. The listing to update.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.analyticshub.v1.Listing listing = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $listing = null;

    /**
     * @param \Google\Cloud\BigQuery\AnalyticsHub\V1\Listing $listing    Required. The listing to update.
     * @param \Google\Protobuf\FieldMask                     $updateMask Required. Field mask specifies the fields to update in the listing
     *                                                                   resource. The fields specified in the `updateMask` are relative to the
     *                                                                   resource and are not a full request.
     *
     * @return \Google\Cloud\BigQuery\AnalyticsHub\V1\UpdateListingRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\BigQuery\AnalyticsHub\V1\Listing $listing, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setListing($listing)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Field mask specifies the fields to update in the listing
     *           resource. The fields specified in the `updateMask` are relative to the
     *           resource and are not a full request.
     *     @type \Google\Cloud\BigQuery\AnalyticsHub\V1\Listing $listing
     *           Required. The listing to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Analyticshub\V1\Analyticshub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Field mask specifies the fields to update in the listing
     * resource. The fields specified in the `updateMask` are relative to the
     * resource and are not a full request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Field mask specifies the fields to update in the listing
     * resource. The fields specified in the `updateMask` are relative to the
     * resource and are not a full request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. The listing to update.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.analyticshub.v1.Listing listing = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BigQuery\AnalyticsHub\V1\Listing|null
     */
    public function getListing()
    {
        return $this->listing;
    }

    public function hasListing()
    {
        return isset($this->listing);
    }

    public function clearListing()
    {
        unset($this->listing);
    }

    /**
     * Required. The listing to update.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.analyticshub.v1.Listing listing = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BigQuery\AnalyticsHub\V1\Listing $var
     * @return $this
     */
    public function setListing($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\AnalyticsHub\V1\Listing::class);
        $this->listing = $var;

        return $this;
    }

}

