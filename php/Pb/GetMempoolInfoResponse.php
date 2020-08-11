<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bchrpc.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.GetMempoolInfoResponse</code>
 */
class GetMempoolInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The count of transactions in the mempool
     *
     * Generated from protobuf field <code>uint32 size = 1;</code>
     */
    protected $size = 0;
    /**
     * The size in bytes of all transactions in the mempool
     *
     * Generated from protobuf field <code>uint32 bytes = 2;</code>
     */
    protected $bytes = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $size
     *           The count of transactions in the mempool
     *     @type int $bytes
     *           The size in bytes of all transactions in the mempool
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Bchrpc::initOnce();
        parent::__construct($data);
    }

    /**
     * The count of transactions in the mempool
     *
     * Generated from protobuf field <code>uint32 size = 1;</code>
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * The count of transactions in the mempool
     *
     * Generated from protobuf field <code>uint32 size = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->size = $var;

        return $this;
    }

    /**
     * The size in bytes of all transactions in the mempool
     *
     * Generated from protobuf field <code>uint32 bytes = 2;</code>
     * @return int
     */
    public function getBytes()
    {
        return $this->bytes;
    }

    /**
     * The size in bytes of all transactions in the mempool
     *
     * Generated from protobuf field <code>uint32 bytes = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBytes($var)
    {
        GPBUtil::checkUint32($var);
        $this->bytes = $var;

        return $this;
    }

}

