<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ApproveDisplayVideo360AdvertiserLinkProposal RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ApproveDisplayVideo360AdvertiserLinkProposalResponse</code>
 */
class ApproveDisplayVideo360AdvertiserLinkProposalResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The DisplayVideo360AdvertiserLink created as a result of approving the
     * proposal.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.DisplayVideo360AdvertiserLink display_video_360_advertiser_link = 1;</code>
     */
    private $display_video_360_advertiser_link = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\DisplayVideo360AdvertiserLink $display_video_360_advertiser_link
     *           The DisplayVideo360AdvertiserLink created as a result of approving the
     *           proposal.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The DisplayVideo360AdvertiserLink created as a result of approving the
     * proposal.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.DisplayVideo360AdvertiserLink display_video_360_advertiser_link = 1;</code>
     * @return \Google\Analytics\Admin\V1alpha\DisplayVideo360AdvertiserLink|null
     */
    public function getDisplayVideo360AdvertiserLink()
    {
        return $this->display_video_360_advertiser_link;
    }

    public function hasDisplayVideo360AdvertiserLink()
    {
        return isset($this->display_video_360_advertiser_link);
    }

    public function clearDisplayVideo360AdvertiserLink()
    {
        unset($this->display_video_360_advertiser_link);
    }

    /**
     * The DisplayVideo360AdvertiserLink created as a result of approving the
     * proposal.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.DisplayVideo360AdvertiserLink display_video_360_advertiser_link = 1;</code>
     * @param \Google\Analytics\Admin\V1alpha\DisplayVideo360AdvertiserLink $var
     * @return $this
     */
    public function setDisplayVideo360AdvertiserLink($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\DisplayVideo360AdvertiserLink::class);
        $this->display_video_360_advertiser_link = $var;

        return $this;
    }

}

