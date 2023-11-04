<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1\GitFileSource;

use UnexpectedValueException;

/**
 * The type of the repo, since it may not be explicit from the `repo` field
 * (e.g from a URL).
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.GitFileSource.RepoType</code>
 */
class RepoType
{
    /**
     * The default, unknown repo type. Don't use it, instead use one of
     * the other repo types.
     *
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * A Google Cloud Source Repositories-hosted repo.
     *
     * Generated from protobuf enum <code>CLOUD_SOURCE_REPOSITORIES = 1;</code>
     */
    const CLOUD_SOURCE_REPOSITORIES = 1;
    /**
     * A GitHub-hosted repo not necessarily on "github.com" (i.e. GitHub
     * Enterprise).
     *
     * Generated from protobuf enum <code>GITHUB = 2;</code>
     */
    const GITHUB = 2;
    /**
     * A Bitbucket Server-hosted repo.
     *
     * Generated from protobuf enum <code>BITBUCKET_SERVER = 3;</code>
     */
    const BITBUCKET_SERVER = 3;
    /**
     * A GitLab-hosted repo.
     *
     * Generated from protobuf enum <code>GITLAB = 4;</code>
     */
    const GITLAB = 4;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::CLOUD_SOURCE_REPOSITORIES => 'CLOUD_SOURCE_REPOSITORIES',
        self::GITHUB => 'GITHUB',
        self::BITBUCKET_SERVER => 'BITBUCKET_SERVER',
        self::GITLAB => 'GITLAB',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


