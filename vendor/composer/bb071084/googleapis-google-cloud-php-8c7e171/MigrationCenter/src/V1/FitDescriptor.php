<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the fit level of an asset for migration to a specific target.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.FitDescriptor</code>
 */
class FitDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     * Fit level.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.FitDescriptor.FitLevel fit_level = 1;</code>
     */
    protected $fit_level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $fit_level
     *           Fit level.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Fit level.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.FitDescriptor.FitLevel fit_level = 1;</code>
     * @return int
     */
    public function getFitLevel()
    {
        return $this->fit_level;
    }

    /**
     * Fit level.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.FitDescriptor.FitLevel fit_level = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFitLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\MigrationCenter\V1\FitDescriptor\FitLevel::class);
        $this->fit_level = $var;

        return $this;
    }

}

