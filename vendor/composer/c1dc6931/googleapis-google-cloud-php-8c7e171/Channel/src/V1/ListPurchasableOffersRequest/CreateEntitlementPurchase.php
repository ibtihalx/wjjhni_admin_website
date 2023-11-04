<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1\ListPurchasableOffersRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List Offers for CreateEntitlement purchase.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ListPurchasableOffersRequest.CreateEntitlementPurchase</code>
 */
class CreateEntitlementPurchase extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. SKU that the result should be restricted to.
     * Format: products/{product_id}/skus/{sku_id}.
     *
     * Generated from protobuf field <code>string sku = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $sku = '';
    /**
     * Optional. Billing account that the result should be restricted to.
     * Format: accounts/{account_id}/billingAccounts/{billing_account_id}.
     *
     * Generated from protobuf field <code>string billing_account = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $billing_account = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sku
     *           Required. SKU that the result should be restricted to.
     *           Format: products/{product_id}/skus/{sku_id}.
     *     @type string $billing_account
     *           Optional. Billing account that the result should be restricted to.
     *           Format: accounts/{account_id}/billingAccounts/{billing_account_id}.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. SKU that the result should be restricted to.
     * Format: products/{product_id}/skus/{sku_id}.
     *
     * Generated from protobuf field <code>string sku = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Required. SKU that the result should be restricted to.
     * Format: products/{product_id}/skus/{sku_id}.
     *
     * Generated from protobuf field <code>string sku = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSku($var)
    {
        GPBUtil::checkString($var, True);
        $this->sku = $var;

        return $this;
    }

    /**
     * Optional. Billing account that the result should be restricted to.
     * Format: accounts/{account_id}/billingAccounts/{billing_account_id}.
     *
     * Generated from protobuf field <code>string billing_account = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getBillingAccount()
    {
        return $this->billing_account;
    }

    /**
     * Optional. Billing account that the result should be restricted to.
     * Format: accounts/{account_id}/billingAccounts/{billing_account_id}.
     *
     * Generated from protobuf field <code>string billing_account = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setBillingAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->billing_account = $var;

        return $this;
    }

}


