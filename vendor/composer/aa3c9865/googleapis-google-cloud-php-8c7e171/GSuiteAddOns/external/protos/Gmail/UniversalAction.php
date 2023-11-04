<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/script/type/gmail/gmail_addon_manifest.proto

namespace Google\Apps\Script\Type\Gmail;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An action that is always available in the add-on toolbar menu regardless of
 * message context.
 *
 * Generated from protobuf message <code>google.apps.script.type.gmail.UniversalAction</code>
 */
class UniversalAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. User-visible text describing the action, for example, "Add a new
     * contact."
     *
     * Generated from protobuf field <code>string text = 1;</code>
     */
    protected $text = '';
    protected $action_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           Required. User-visible text describing the action, for example, "Add a new
     *           contact."
     *     @type string $open_link
     *           A link that is opened by Gmail when the user triggers the action.
     *     @type string $run_function
     *           An endpoint that is called when the user triggers the
     *           action. See the [universal actions
     *           guide](/gmail/add-ons/how-tos/universal-actions) for details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Script\Type\Gmail\GmailAddonManifest::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. User-visible text describing the action, for example, "Add a new
     * contact."
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Required. User-visible text describing the action, for example, "Add a new
     * contact."
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * A link that is opened by Gmail when the user triggers the action.
     *
     * Generated from protobuf field <code>string open_link = 2;</code>
     * @return string
     */
    public function getOpenLink()
    {
        return $this->readOneof(2);
    }

    public function hasOpenLink()
    {
        return $this->hasOneof(2);
    }

    /**
     * A link that is opened by Gmail when the user triggers the action.
     *
     * Generated from protobuf field <code>string open_link = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOpenLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * An endpoint that is called when the user triggers the
     * action. See the [universal actions
     * guide](/gmail/add-ons/how-tos/universal-actions) for details.
     *
     * Generated from protobuf field <code>string run_function = 3;</code>
     * @return string
     */
    public function getRunFunction()
    {
        return $this->readOneof(3);
    }

    public function hasRunFunction()
    {
        return $this->hasOneof(3);
    }

    /**
     * An endpoint that is called when the user triggers the
     * action. See the [universal actions
     * guide](/gmail/add-ons/how-tos/universal-actions) for details.
     *
     * Generated from protobuf field <code>string run_function = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRunFunction($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getActionType()
    {
        return $this->whichOneof("action_type");
    }

}

