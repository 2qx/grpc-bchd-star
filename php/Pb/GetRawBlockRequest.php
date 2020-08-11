<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bchrpc.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.GetRawBlockRequest</code>
 */
class GetRawBlockRequest extends \Google\Protobuf\Internal\Message
{
    protected $hash_or_height;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hash
     *           The block hash as a byte array or base64 encoded string, little-endian.
     *     @type int $height
     *           The block number.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Bchrpc::initOnce();
        parent::__construct($data);
    }

    /**
     * The block hash as a byte array or base64 encoded string, little-endian.
     *
     * Generated from protobuf field <code>bytes hash = 1;</code>
     * @return string
     */
    public function getHash()
    {
        return $this->readOneof(1);
    }

    /**
     * The block hash as a byte array or base64 encoded string, little-endian.
     *
     * Generated from protobuf field <code>bytes hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The block number.
     *
     * Generated from protobuf field <code>int32 height = 2;</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->readOneof(2);
    }

    /**
     * The block number.
     *
     * Generated from protobuf field <code>int32 height = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getHashOrHeight()
    {
        return $this->whichOneof("hash_or_height");
    }

}

