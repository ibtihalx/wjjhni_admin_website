<?php
/*
 * Copyright 2023 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/resourcemanager/v3/tag_holds.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\ResourceManager\V3\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\ResourceManager\V3\CreateTagHoldRequest;
use Google\Cloud\ResourceManager\V3\DeleteTagHoldRequest;
use Google\Cloud\ResourceManager\V3\ListTagHoldsRequest;
use Google\Cloud\ResourceManager\V3\ListTagHoldsResponse;
use Google\Cloud\ResourceManager\V3\TagHold;
use Google\LongRunning\Operation;

/**
 * Service Description: Allow users to create and manage TagHolds for TagValues. TagHolds represent
 * the use of a Tag Value that is not captured by TagBindings but
 * should still block TagValue deletion (such as a reference in a policy
 * condition). This service provides isolated failure domains by cloud location
 * so that TagHolds can be managed in the same location as their usage.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $tagHoldsClient = new TagHoldsClient();
 * try {
 *     $formattedParent = $tagHoldsClient->tagValueName('[TAG_VALUE]');
 *     $tagHold = new TagHold();
 *     $operationResponse = $tagHoldsClient->createTagHold($formattedParent, $tagHold);
 *     $operationResponse->pollUntilComplete();
 *     if ($operationResponse->operationSucceeded()) {
 *         $result = $operationResponse->getResult();
 *         // doSomethingWith($result)
 *     } else {
 *         $error = $operationResponse->getError();
 *         // handleError($error)
 *     }
 *     // Alternatively:
 *     // start the operation, keep the operation name, and resume later
 *     $operationResponse = $tagHoldsClient->createTagHold($formattedParent, $tagHold);
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $tagHoldsClient->resumeOperation($operationName, 'createTagHold');
 *     while (!$newOperationResponse->isDone()) {
 *         // ... do other work
 *         $newOperationResponse->reload();
 *     }
 *     if ($newOperationResponse->operationSucceeded()) {
 *         $result = $newOperationResponse->getResult();
 *         // doSomethingWith($result)
 *     } else {
 *         $error = $newOperationResponse->getError();
 *         // handleError($error)
 *     }
 * } finally {
 *     $tagHoldsClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This service has a new (beta) implementation. See {@see
 * \Google\Cloud\ResourceManager\V3\Client\TagHoldsClient} to use the new surface.
 */
class TagHoldsGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.resourcemanager.v3.TagHolds';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'cloudresourcemanager.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-platform.read-only',
    ];

    private static $tagHoldNameTemplate;

    private static $tagValueNameTemplate;

    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/tag_holds_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/tag_holds_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/tag_holds_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/tag_holds_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getTagHoldNameTemplate()
    {
        if (self::$tagHoldNameTemplate == null) {
            self::$tagHoldNameTemplate = new PathTemplate('tagValues/{tag_value}/tagHolds/{tag_hold}');
        }

        return self::$tagHoldNameTemplate;
    }

    private static function getTagValueNameTemplate()
    {
        if (self::$tagValueNameTemplate == null) {
            self::$tagValueNameTemplate = new PathTemplate('tagValues/{tag_value}');
        }

        return self::$tagValueNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'tagHold' => self::getTagHoldNameTemplate(),
                'tagValue' => self::getTagValueNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a tag_hold
     * resource.
     *
     * @param string $tagValue
     * @param string $tagHold
     *
     * @return string The formatted tag_hold resource.
     */
    public static function tagHoldName($tagValue, $tagHold)
    {
        return self::getTagHoldNameTemplate()->render([
            'tag_value' => $tagValue,
            'tag_hold' => $tagHold,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a tag_value
     * resource.
     *
     * @param string $tagValue
     *
     * @return string The formatted tag_value resource.
     */
    public static function tagValueName($tagValue)
    {
        return self::getTagValueNameTemplate()->render([
            'tag_value' => $tagValue,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - tagHold: tagValues/{tag_value}/tagHolds/{tag_hold}
     * - tagValue: tagValues/{tag_value}
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
                throw new ValidationException("Template name $template does not exist");
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

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'cloudresourcemanager.googleapis.com:443'.
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
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Creates a TagHold. Returns ALREADY_EXISTS if a TagHold with the same
     * resource and origin exists under the same TagValue.
     *
     * Sample code:
     * ```
     * $tagHoldsClient = new TagHoldsClient();
     * try {
     *     $formattedParent = $tagHoldsClient->tagValueName('[TAG_VALUE]');
     *     $tagHold = new TagHold();
     *     $operationResponse = $tagHoldsClient->createTagHold($formattedParent, $tagHold);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $tagHoldsClient->createTagHold($formattedParent, $tagHold);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $tagHoldsClient->resumeOperation($operationName, 'createTagHold');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $tagHoldsClient->close();
     * }
     * ```
     *
     * @param string  $parent       Required. The resource name of the TagHold's parent TagValue. Must be of
     *                              the form: `tagValues/{tag-value-id}`.
     * @param TagHold $tagHold      Required. The TagHold to be created.
     * @param array   $optionalArgs {
     *     Optional.
     *
     *     @type bool $validateOnly
     *           Optional. Set to true to perform the validations necessary for creating the
     *           resource, but not actually perform the action.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function createTagHold($parent, $tagHold, array $optionalArgs = [])
    {
        $request = new CreateTagHoldRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setTagHold($tagHold);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['validateOnly'])) {
            $request->setValidateOnly($optionalArgs['validateOnly']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('CreateTagHold', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Deletes a TagHold.
     *
     * Sample code:
     * ```
     * $tagHoldsClient = new TagHoldsClient();
     * try {
     *     $formattedName = $tagHoldsClient->tagHoldName('[TAG_VALUE]', '[TAG_HOLD]');
     *     $operationResponse = $tagHoldsClient->deleteTagHold($formattedName);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $tagHoldsClient->deleteTagHold($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $tagHoldsClient->resumeOperation($operationName, 'deleteTagHold');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $tagHoldsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the TagHold to delete. Must be of the form:
     *                             `tagValues/{tag-value-id}/tagHolds/{tag-hold-id}`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type bool $validateOnly
     *           Optional. Set to true to perform the validations necessary for deleting the
     *           resource, but not actually perform the action.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function deleteTagHold($name, array $optionalArgs = [])
    {
        $request = new DeleteTagHoldRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['validateOnly'])) {
            $request->setValidateOnly($optionalArgs['validateOnly']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('DeleteTagHold', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Lists TagHolds under a TagValue.
     *
     * Sample code:
     * ```
     * $tagHoldsClient = new TagHoldsClient();
     * try {
     *     $formattedParent = $tagHoldsClient->tagValueName('[TAG_VALUE]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $tagHoldsClient->listTagHolds($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $tagHoldsClient->listTagHolds($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $tagHoldsClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The resource name of the parent TagValue. Must be of the form:
     *                             `tagValues/{tag-value-id}`.
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
     *     @type string $filter
     *           Optional. Criteria used to select a subset of TagHolds parented by the
     *           TagValue to return. This field follows the syntax defined by aip.dev/160;
     *           the `holder` and `origin` fields are supported for filtering. Currently
     *           only `AND` syntax is supported. Some example queries are:
     *
     *           * `holder =
     *           //compute.googleapis.com/compute/projects/myproject/regions/us-east-1/instanceGroupManagers/instance-group`
     *           * `origin = 35678234`
     *           * `holder =
     *           //compute.googleapis.com/compute/projects/myproject/regions/us-east-1/instanceGroupManagers/instance-group
     *           AND origin = 35678234`
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
    public function listTagHolds($parent, array $optionalArgs = [])
    {
        $request = new ListTagHoldsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListTagHolds', $optionalArgs, ListTagHoldsResponse::class, $request);
    }
}
