<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/script/type/docs/docs_addon_manifest.proto

namespace Google\Apps\Script\Type\Docs;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Docs add-on manifest.
 *
 * Generated from protobuf message <code>google.apps.script.type.docs.DocsAddOnManifest</code>
 */
class DocsAddOnManifest extends \Google\Protobuf\Internal\Message
{
    /**
     * If present, this overrides the configuration from
     * `addOns.common.homepageTrigger`.
     *
     * Generated from protobuf field <code>.google.apps.script.type.HomepageExtensionPoint homepage_trigger = 1;</code>
     */
    protected $homepage_trigger = null;
    /**
     * Endpoint to execute when file scope authorization is granted
     * for this document/user pair.
     *
     * Generated from protobuf field <code>.google.apps.script.type.docs.DocsExtensionPoint on_file_scope_granted_trigger = 2;</code>
     */
    protected $on_file_scope_granted_trigger = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Apps\Script\Type\HomepageExtensionPoint $homepage_trigger
     *           If present, this overrides the configuration from
     *           `addOns.common.homepageTrigger`.
     *     @type \Google\Apps\Script\Type\Docs\DocsExtensionPoint $on_file_scope_granted_trigger
     *           Endpoint to execute when file scope authorization is granted
     *           for this document/user pair.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Script\Type\Docs\DocsAddonManifest::initOnce();
        parent::__construct($data);
    }

    /**
     * If present, this overrides the configuration from
     * `addOns.common.homepageTrigger`.
     *
     * Generated from protobuf field <code>.google.apps.script.type.HomepageExtensionPoint homepage_trigger = 1;</code>
     * @return \Google\Apps\Script\Type\HomepageExtensionPoint|null
     */
    public function getHomepageTrigger()
    {
        return $this->homepage_trigger;
    }

    public function hasHomepageTrigger()
    {
        return isset($this->homepage_trigger);
    }

    public function clearHomepageTrigger()
    {
        unset($this->homepage_trigger);
    }

    /**
     * If present, this overrides the configuration from
     * `addOns.common.homepageTrigger`.
     *
     * Generated from protobuf field <code>.google.apps.script.type.HomepageExtensionPoint homepage_trigger = 1;</code>
     * @param \Google\Apps\Script\Type\HomepageExtensionPoint $var
     * @return $this
     */
    public function setHomepageTrigger($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Script\Type\HomepageExtensionPoint::class);
        $this->homepage_trigger = $var;

        return $this;
    }

    /**
     * Endpoint to execute when file scope authorization is granted
     * for this document/user pair.
     *
     * Generated from protobuf field <code>.google.apps.script.type.docs.DocsExtensionPoint on_file_scope_granted_trigger = 2;</code>
     * @return \Google\Apps\Script\Type\Docs\DocsExtensionPoint|null
     */
    public function getOnFileScopeGrantedTrigger()
    {
        return $this->on_file_scope_granted_trigger;
    }

    public function hasOnFileScopeGrantedTrigger()
    {
        return isset($this->on_file_scope_granted_trigger);
    }

    public function clearOnFileScopeGrantedTrigger()
    {
        unset($this->on_file_scope_granted_trigger);
    }

    /**
     * Endpoint to execute when file scope authorization is granted
     * for this document/user pair.
     *
     * Generated from protobuf field <code>.google.apps.script.type.docs.DocsExtensionPoint on_file_scope_granted_trigger = 2;</code>
     * @param \Google\Apps\Script\Type\Docs\DocsExtensionPoint $var
     * @return $this
     */
    public function setOnFileScopeGrantedTrigger($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Script\Type\Docs\DocsExtensionPoint::class);
        $this->on_file_scope_granted_trigger = $var;

        return $this;
    }

}

