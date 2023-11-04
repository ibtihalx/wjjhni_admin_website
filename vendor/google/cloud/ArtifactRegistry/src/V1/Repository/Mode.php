<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/repository.proto

namespace Google\Cloud\ArtifactRegistry\V1\Repository;

use UnexpectedValueException;

/**
 * The mode configures the repository to serve artifacts from different
 * sources.
 *
 * Protobuf type <code>google.devtools.artifactregistry.v1.Repository.Mode</code>
 */
class Mode
{
    /**
     * Unspecified mode.
     *
     * Generated from protobuf enum <code>MODE_UNSPECIFIED = 0;</code>
     */
    const MODE_UNSPECIFIED = 0;
    /**
     * A standard repository storing artifacts.
     *
     * Generated from protobuf enum <code>STANDARD_REPOSITORY = 1;</code>
     */
    const STANDARD_REPOSITORY = 1;
    /**
     * A virtual repository to serve artifacts from one or more sources.
     *
     * Generated from protobuf enum <code>VIRTUAL_REPOSITORY = 2;</code>
     */
    const VIRTUAL_REPOSITORY = 2;
    /**
     * A remote repository to serve artifacts from a remote source.
     *
     * Generated from protobuf enum <code>REMOTE_REPOSITORY = 3;</code>
     */
    const REMOTE_REPOSITORY = 3;

    private static $valueToName = [
        self::MODE_UNSPECIFIED => 'MODE_UNSPECIFIED',
        self::STANDARD_REPOSITORY => 'STANDARD_REPOSITORY',
        self::VIRTUAL_REPOSITORY => 'VIRTUAL_REPOSITORY',
        self::REMOTE_REPOSITORY => 'REMOTE_REPOSITORY',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Mode::class, \Google\Cloud\ArtifactRegistry\V1\Repository_Mode::class);

