<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/reservation/v1/reservation.proto

namespace Google\Cloud\BigQuery\Reservation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to update a BI reservation.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.reservation.v1.UpdateBiReservationRequest</code>
 */
class UpdateBiReservationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * A reservation to update.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.BiReservation bi_reservation = 1;</code>
     */
    private $bi_reservation = null;
    /**
     * A list of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Cloud\BigQuery\Reservation\V1\BiReservation $biReservation A reservation to update.
     * @param \Google\Protobuf\FieldMask                          $updateMask    A list of fields to be updated in this request.
     *
     * @return \Google\Cloud\BigQuery\Reservation\V1\UpdateBiReservationRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\BigQuery\Reservation\V1\BiReservation $biReservation, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setBiReservation($biReservation)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BigQuery\Reservation\V1\BiReservation $bi_reservation
     *           A reservation to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           A list of fields to be updated in this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Reservation\V1\Reservation::initOnce();
        parent::__construct($data);
    }

    /**
     * A reservation to update.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.BiReservation bi_reservation = 1;</code>
     * @return \Google\Cloud\BigQuery\Reservation\V1\BiReservation|null
     */
    public function getBiReservation()
    {
        return $this->bi_reservation;
    }

    public function hasBiReservation()
    {
        return isset($this->bi_reservation);
    }

    public function clearBiReservation()
    {
        unset($this->bi_reservation);
    }

    /**
     * A reservation to update.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.BiReservation bi_reservation = 1;</code>
     * @param \Google\Cloud\BigQuery\Reservation\V1\BiReservation $var
     * @return $this
     */
    public function setBiReservation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Reservation\V1\BiReservation::class);
        $this->bi_reservation = $var;

        return $this;
    }

    /**
     * A list of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
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
     * A list of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

