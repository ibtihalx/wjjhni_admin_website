<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1alpha/metastore.proto

namespace Google\Cloud\Metastore\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies how metastore metadata should be integrated with external services.
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1alpha.MetadataIntegration</code>
 */
class MetadataIntegration extends \Google\Protobuf\Internal\Message
{
    /**
     * The integration config for the Data Catalog service.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1alpha.DataCatalogConfig data_catalog_config = 1;</code>
     */
    private $data_catalog_config = null;
    /**
     * The integration config for the Dataplex service.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1alpha.DataplexConfig dataplex_config = 2;</code>
     */
    private $dataplex_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Metastore\V1alpha\DataCatalogConfig $data_catalog_config
     *           The integration config for the Data Catalog service.
     *     @type \Google\Cloud\Metastore\V1alpha\DataplexConfig $dataplex_config
     *           The integration config for the Dataplex service.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1Alpha\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * The integration config for the Data Catalog service.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1alpha.DataCatalogConfig data_catalog_config = 1;</code>
     * @return \Google\Cloud\Metastore\V1alpha\DataCatalogConfig|null
     */
    public function getDataCatalogConfig()
    {
        return $this->data_catalog_config;
    }

    public function hasDataCatalogConfig()
    {
        return isset($this->data_catalog_config);
    }

    public function clearDataCatalogConfig()
    {
        unset($this->data_catalog_config);
    }

    /**
     * The integration config for the Data Catalog service.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1alpha.DataCatalogConfig data_catalog_config = 1;</code>
     * @param \Google\Cloud\Metastore\V1alpha\DataCatalogConfig $var
     * @return $this
     */
    public function setDataCatalogConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Metastore\V1alpha\DataCatalogConfig::class);
        $this->data_catalog_config = $var;

        return $this;
    }

    /**
     * The integration config for the Dataplex service.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1alpha.DataplexConfig dataplex_config = 2;</code>
     * @return \Google\Cloud\Metastore\V1alpha\DataplexConfig|null
     */
    public function getDataplexConfig()
    {
        return $this->dataplex_config;
    }

    public function hasDataplexConfig()
    {
        return isset($this->dataplex_config);
    }

    public function clearDataplexConfig()
    {
        unset($this->dataplex_config);
    }

    /**
     * The integration config for the Dataplex service.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1alpha.DataplexConfig dataplex_config = 2;</code>
     * @param \Google\Cloud\Metastore\V1alpha\DataplexConfig $var
     * @return $this
     */
    public function setDataplexConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Metastore\V1alpha\DataplexConfig::class);
        $this->dataplex_config = $var;

        return $this;
    }

}

