<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bchrpc.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Get a transaction from a transaction hash.
 *
 * Generated from protobuf message <code>pb.GetTransactionRequest</code>
 */
class GetTransactionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * A transaction hash, little-endian.
     *
     * Generated from protobuf field <code>bytes hash = 1;</code>
     */
    protected $hash = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hash
     *           A transaction hash, little-endian.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Bchrpc::initOnce();
        parent::__construct($data);
    }

    /**
     * A transaction hash, little-endian.
     *
     * Generated from protobuf field <code>bytes hash = 1;</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * A transaction hash, little-endian.
     *
     * Generated from protobuf field <code>bytes hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash = $var;

        return $this;
    }

}

