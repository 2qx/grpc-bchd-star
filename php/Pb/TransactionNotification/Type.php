<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bchrpc.proto

namespace Pb\TransactionNotification;

use UnexpectedValueException;

/**
 * State of the transaction acceptance.
 *
 * Protobuf type <code>pb.TransactionNotification.Type</code>
 */
class Type
{
    /**
     * A transaction in mempool.
     *
     * Generated from protobuf enum <code>UNCONFIRMED = 0;</code>
     */
    const UNCONFIRMED = 0;
    /**
     * A transaction in a block.
     *
     * Generated from protobuf enum <code>CONFIRMED = 1;</code>
     */
    const CONFIRMED = 1;

    private static $valueToName = [
        self::UNCONFIRMED => 'UNCONFIRMED',
        self::CONFIRMED => 'CONFIRMED',
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
class_alias(Type::class, \Pb\TransactionNotification_Type::class);

