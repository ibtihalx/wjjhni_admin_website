<?php
/*
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/iap/v1/service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Iap\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\GetPolicyOptions;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Iap\V1\CreateTunnelDestGroupRequest;
use Google\Cloud\Iap\V1\DeleteTunnelDestGroupRequest;
use Google\Cloud\Iap\V1\GetIapSettingsRequest;
use Google\Cloud\Iap\V1\GetTunnelDestGroupRequest;
use Google\Cloud\Iap\V1\IapSettings;
use Google\Cloud\Iap\V1\ListTunnelDestGroupsRequest;
use Google\Cloud\Iap\V1\ListTunnelDestGroupsResponse;
use Google\Cloud\Iap\V1\TunnelDestGroup;
use Google\Cloud\Iap\V1\UpdateIapSettingsRequest;
use Google\Cloud\Iap\V1\UpdateTunnelDestGroupRequest;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: APIs for Identity-Aware Proxy Admin configurations.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $identityAwareProxyAdminServiceClient = new IdentityAwareProxyAdminServiceClient();
 * try {
 *     $formattedParent = $identityAwareProxyAdminServiceClient->tunnelLocationName('[PROJECT]', '[LOCATION]');
 *     $tunnelDestGroup = new TunnelDestGroup();
 *     $tunnelDestGroupId = 'tunnel_dest_group_id';
 *     $response = $identityAwareProxyAdminServiceClient->createTunnelDestGroup($formattedParent, $tunnelDestGroup, $tunnelDestGroupId);
 * } finally {
 *     $identityAwareProxyAdminServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This service has a new (beta) implementation. See {@see
 * \Google\Cloud\Iap\V1\Client\IdentityAwareProxyAdminServiceClient} to use the new
 * surface.
 */
class IdentityAwareProxyAdminServiceGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.iap.v1.IdentityAwareProxyAdminService';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'iap.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $tunnelDestGroupNameTemplate;

    private static $tunnelLocationNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' =>
                self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' =>
                __DIR__ .
                '/../resources/identity_aware_proxy_admin_service_client_config.json',
            'descriptorsConfigPath' =>
                __DIR__ .
                '/../resources/identity_aware_proxy_admin_service_descriptor_config.php',
            'gcpApiConfigPath' =>
                __DIR__ .
                '/../resources/identity_aware_proxy_admin_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ .
                        '/../resources/identity_aware_proxy_admin_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getTunnelDestGroupNameTemplate()
    {
        if (self::$tunnelDestGroupNameTemplate == null) {
            self::$tunnelDestGroupNameTemplate = new PathTemplate(
                'projects/{project}/iap_tunnel/locations/{location}/destGroups/{dest_group}'
            );
        }

        return self::$tunnelDestGroupNameTemplate;
    }

    private static function getTunnelLocationNameTemplate()
    {
        if (self::$tunnelLocationNameTemplate == null) {
            self::$tunnelLocationNameTemplate = new PathTemplate(
                'projects/{project}/iap_tunnel/locations/{location}'
            );
        }

        return self::$tunnelLocationNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'tunnelDestGroup' => self::getTunnelDestGroupNameTemplate(),
                'tunnelLocation' => self::getTunnelLocationNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * tunnel_dest_group resource.
     *
     * @param string $project
     * @param string $location
     * @param string $destGroup
     *
     * @return string The formatted tunnel_dest_group resource.
     */
    public static function tunnelDestGroupName($project, $location, $destGroup)
    {
        return self::getTunnelDestGroupNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'dest_group' => $destGroup,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * tunnel_location resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted tunnel_location resource.
     */
    public static function tunnelLocationName($project, $location)
    {
        return self::getTunnelLocationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - tunnelDestGroup: projects/{project}/iap_tunnel/locations/{location}/destGroups/{dest_group}
     * - tunnelLocation: projects/{project}/iap_tunnel/locations/{location}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException(
                    "Template name $template does not exist"
                );
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException(
            "Input did not match any known format. Input: $formattedName"
        );
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'iap.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Creates a new TunnelDestGroup.
     *
     * Sample code:
     * ```
     * $identityAwareProxyAdminServiceClient = new IdentityAwareProxyAdminServiceClient();
     * try {
     *     $formattedParent = $identityAwareProxyAdminServiceClient->tunnelLocationName('[PROJECT]', '[LOCATION]');
     *     $tunnelDestGroup = new TunnelDestGroup();
     *     $tunnelDestGroupId = 'tunnel_dest_group_id';
     *     $response = $identityAwareProxyAdminServiceClient->createTunnelDestGroup($formattedParent, $tunnelDestGroup, $tunnelDestGroupId);
     * } finally {
     *     $identityAwareProxyAdminServiceClient->close();
     * }
     * ```
     *
     * @param string          $parent            Required. Google Cloud Project ID and location.
     *                                           In the following format:
     *                                           `projects/{project_number/id}/iap_tunnel/locations/{location}`.
     * @param TunnelDestGroup $tunnelDestGroup   Required. The TunnelDestGroup to create.
     * @param string          $tunnelDestGroupId Required. The ID to use for the TunnelDestGroup, which becomes the final
     *                                           component of the resource name.
     *
     *                                           This value must be 4-63 characters, and valid characters
     *                                           are `[a-z]-`.
     * @param array           $optionalArgs      {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iap\V1\TunnelDestGroup
     *
     * @throws ApiException if the remote call fails
     */
    public function createTunnelDestGroup(
        $parent,
        $tunnelDestGroup,
        $tunnelDestGroupId,
        array $optionalArgs = []
    ) {
        $request = new CreateTunnelDestGroupRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setTunnelDestGroup($tunnelDestGroup);
        $request->setTunnelDestGroupId($tunnelDestGroupId);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'CreateTunnelDestGroup',
            TunnelDestGroup::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes a TunnelDestGroup.
     *
     * Sample code:
     * ```
     * $identityAwareProxyAdminServiceClient = new IdentityAwareProxyAdminServiceClient();
     * try {
     *     $formattedName = $identityAwareProxyAdminServiceClient->tunnelDestGroupName('[PROJECT]', '[LOCATION]', '[DEST_GROUP]');
     *     $identityAwareProxyAdminServiceClient->deleteTunnelDestGroup($formattedName);
     * } finally {
     *     $identityAwareProxyAdminServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the TunnelDestGroup to delete.
     *                             In the following format:
     *                             `projects/{project_number/id}/iap_tunnel/locations/{location}/destGroups/{dest_group}`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     */
    public function deleteTunnelDestGroup($name, array $optionalArgs = [])
    {
        $request = new DeleteTunnelDestGroupRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'DeleteTunnelDestGroup',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets the access control policy for an Identity-Aware Proxy protected
     * resource.
     * More information about managing access via IAP can be found at:
     * https://cloud.google.com/iap/docs/managing-access#managing_access_via_the_api
     *
     * Sample code:
     * ```
     * $identityAwareProxyAdminServiceClient = new IdentityAwareProxyAdminServiceClient();
     * try {
     *     $resource = 'resource';
     *     $response = $identityAwareProxyAdminServiceClient->getIamPolicy($resource);
     * } finally {
     *     $identityAwareProxyAdminServiceClient->close();
     * }
     * ```
     *
     * @param string $resource     REQUIRED: The resource for which the policy is being requested.
     *                             See the operation documentation for the appropriate value for this field.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type GetPolicyOptions $options
     *           OPTIONAL: A `GetPolicyOptions` object for specifying options to
     *           `GetIamPolicy`.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function getIamPolicy($resource, array $optionalArgs = [])
    {
        $request = new GetIamPolicyRequest();
        $requestParamHeaders = [];
        $request->setResource($resource);
        $requestParamHeaders['resource'] = $resource;
        if (isset($optionalArgs['options'])) {
            $request->setOptions($optionalArgs['options']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'GetIamPolicy',
            Policy::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets the IAP settings on a particular IAP protected resource.
     *
     * Sample code:
     * ```
     * $identityAwareProxyAdminServiceClient = new IdentityAwareProxyAdminServiceClient();
     * try {
     *     $name = 'name';
     *     $response = $identityAwareProxyAdminServiceClient->getIapSettings($name);
     * } finally {
     *     $identityAwareProxyAdminServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name for which to retrieve the settings.
     *                             Authorization: Requires the `getSettings` permission for the associated
     *                             resource.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iap\V1\IapSettings
     *
     * @throws ApiException if the remote call fails
     */
    public function getIapSettings($name, array $optionalArgs = [])
    {
        $request = new GetIapSettingsRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'GetIapSettings',
            IapSettings::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Retrieves an existing TunnelDestGroup.
     *
     * Sample code:
     * ```
     * $identityAwareProxyAdminServiceClient = new IdentityAwareProxyAdminServiceClient();
     * try {
     *     $formattedName = $identityAwareProxyAdminServiceClient->tunnelDestGroupName('[PROJECT]', '[LOCATION]', '[DEST_GROUP]');
     *     $response = $identityAwareProxyAdminServiceClient->getTunnelDestGroup($formattedName);
     * } finally {
     *     $identityAwareProxyAdminServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the TunnelDestGroup to be fetched.
     *                             In the following format:
     *                             `projects/{project_number/id}/iap_tunnel/locations/{location}/destGroups/{dest_group}`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iap\V1\TunnelDestGroup
     *
     * @throws ApiException if the remote call fails
     */
    public function getTunnelDestGroup($name, array $optionalArgs = [])
    {
        $request = new GetTunnelDestGroupRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'GetTunnelDestGroup',
            TunnelDestGroup::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists the existing TunnelDestGroups. To group across all locations, use a
     * `-` as the location ID. For example:
     * `/v1/projects/123/iap_tunnel/locations/-/destGroups`
     *
     * Sample code:
     * ```
     * $identityAwareProxyAdminServiceClient = new IdentityAwareProxyAdminServiceClient();
     * try {
     *     $formattedParent = $identityAwareProxyAdminServiceClient->tunnelLocationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $identityAwareProxyAdminServiceClient->listTunnelDestGroups($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $identityAwareProxyAdminServiceClient->listTunnelDestGroups($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $identityAwareProxyAdminServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Google Cloud Project ID and location.
     *                             In the following format:
     *                             `projects/{project_number/id}/iap_tunnel/locations/{location}`.
     *                             A `-` can be used for the location to group across all locations.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listTunnelDestGroups($parent, array $optionalArgs = [])
    {
        $request = new ListTunnelDestGroupsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->getPagedListResponse(
            'ListTunnelDestGroups',
            $optionalArgs,
            ListTunnelDestGroupsResponse::class,
            $request
        );
    }

    /**
     * Sets the access control policy for an Identity-Aware Proxy protected
     * resource. Replaces any existing policy.
     * More information about managing access via IAP can be found at:
     * https://cloud.google.com/iap/docs/managing-access#managing_access_via_the_api
     *
     * Sample code:
     * ```
     * $identityAwareProxyAdminServiceClient = new IdentityAwareProxyAdminServiceClient();
     * try {
     *     $resource = 'resource';
     *     $policy = new Policy();
     *     $response = $identityAwareProxyAdminServiceClient->setIamPolicy($resource, $policy);
     * } finally {
     *     $identityAwareProxyAdminServiceClient->close();
     * }
     * ```
     *
     * @param string $resource     REQUIRED: The resource for which the policy is being specified.
     *                             See the operation documentation for the appropriate value for this field.
     * @param Policy $policy       REQUIRED: The complete policy to be applied to the `resource`. The size of
     *                             the policy is limited to a few 10s of KB. An empty policy is a
     *                             valid policy but certain Cloud Platform services (such as Projects)
     *                             might reject them.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type FieldMask $updateMask
     *           OPTIONAL: A FieldMask specifying which fields of the policy to modify. Only
     *           the fields in the mask will be modified. If no mask is provided, the
     *           following default mask is used:
     *
     *           `paths: "bindings, etag"`
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function setIamPolicy($resource, $policy, array $optionalArgs = [])
    {
        $request = new SetIamPolicyRequest();
        $requestParamHeaders = [];
        $request->setResource($resource);
        $request->setPolicy($policy);
        $requestParamHeaders['resource'] = $resource;
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'SetIamPolicy',
            Policy::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Returns permissions that a caller has on the Identity-Aware Proxy protected
     * resource.
     * More information about managing access via IAP can be found at:
     * https://cloud.google.com/iap/docs/managing-access#managing_access_via_the_api
     *
     * Sample code:
     * ```
     * $identityAwareProxyAdminServiceClient = new IdentityAwareProxyAdminServiceClient();
     * try {
     *     $resource = 'resource';
     *     $permissions = [];
     *     $response = $identityAwareProxyAdminServiceClient->testIamPermissions($resource, $permissions);
     * } finally {
     *     $identityAwareProxyAdminServiceClient->close();
     * }
     * ```
     *
     * @param string   $resource     REQUIRED: The resource for which the policy detail is being requested.
     *                               See the operation documentation for the appropriate value for this field.
     * @param string[] $permissions  The set of permissions to check for the `resource`. Permissions with
     *                               wildcards (such as '*' or 'storage.*') are not allowed. For more
     *                               information see
     *                               [IAM Overview](https://cloud.google.com/iam/docs/overview#permissions).
     * @param array    $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\TestIamPermissionsResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function testIamPermissions(
        $resource,
        $permissions,
        array $optionalArgs = []
    ) {
        $request = new TestIamPermissionsRequest();
        $requestParamHeaders = [];
        $request->setResource($resource);
        $request->setPermissions($permissions);
        $requestParamHeaders['resource'] = $resource;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'TestIamPermissions',
            TestIamPermissionsResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates the IAP settings on a particular IAP protected resource. It
     * replaces all fields unless the `update_mask` is set.
     *
     * Sample code:
     * ```
     * $identityAwareProxyAdminServiceClient = new IdentityAwareProxyAdminServiceClient();
     * try {
     *     $iapSettings = new IapSettings();
     *     $response = $identityAwareProxyAdminServiceClient->updateIapSettings($iapSettings);
     * } finally {
     *     $identityAwareProxyAdminServiceClient->close();
     * }
     * ```
     *
     * @param IapSettings $iapSettings  Required. The new values for the IAP settings to be updated.
     *                                  Authorization: Requires the `updateSettings` permission for the associated
     *                                  resource.
     * @param array       $optionalArgs {
     *     Optional.
     *
     *     @type FieldMask $updateMask
     *           The field mask specifying which IAP settings should be updated.
     *           If omitted, then all of the settings are updated. See
     *           https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask.
     *
     *           Note: All IAP reauth settings must always be set together, using the
     *           field mask: `iapSettings.accessSettings.reauthSettings`.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iap\V1\IapSettings
     *
     * @throws ApiException if the remote call fails
     */
    public function updateIapSettings($iapSettings, array $optionalArgs = [])
    {
        $request = new UpdateIapSettingsRequest();
        $requestParamHeaders = [];
        $request->setIapSettings($iapSettings);
        $requestParamHeaders['iap_settings.name'] = $iapSettings->getName();
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'UpdateIapSettings',
            IapSettings::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates a TunnelDestGroup.
     *
     * Sample code:
     * ```
     * $identityAwareProxyAdminServiceClient = new IdentityAwareProxyAdminServiceClient();
     * try {
     *     $tunnelDestGroup = new TunnelDestGroup();
     *     $response = $identityAwareProxyAdminServiceClient->updateTunnelDestGroup($tunnelDestGroup);
     * } finally {
     *     $identityAwareProxyAdminServiceClient->close();
     * }
     * ```
     *
     * @param TunnelDestGroup $tunnelDestGroup Required. The new values for the TunnelDestGroup.
     * @param array           $optionalArgs    {
     *     Optional.
     *
     *     @type FieldMask $updateMask
     *           A field mask that specifies which IAP settings to update.
     *           If omitted, then all of the settings are updated. See
     *           https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iap\V1\TunnelDestGroup
     *
     * @throws ApiException if the remote call fails
     */
    public function updateTunnelDestGroup(
        $tunnelDestGroup,
        array $optionalArgs = []
    ) {
        $request = new UpdateTunnelDestGroupRequest();
        $requestParamHeaders = [];
        $request->setTunnelDestGroup($tunnelDestGroup);
        $requestParamHeaders[
            'tunnel_dest_group.name'
        ] = $tunnelDestGroup->getName();
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'UpdateTunnelDestGroup',
            TunnelDestGroup::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
