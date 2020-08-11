<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bchrpc.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.GetAddressUnspentOutputsRequest</code>
 */
class GetAddressUnspentOutputsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The address to query transactions, in lowercase cashaddr format.
     * The network identifier is optional (i.e. "cashaddress:").
     *
     * Generated from protobuf field <code>string address = 1;</code>
     */
    protected $address = '';
    /**
     * When `include_mempool` is true, unconfirmed transactions from mempool
     * are returned. Default is false.
     *
     * Generated from protobuf field <code>bool include_mempool = 2;</code>
     */
    protected $include_mempool = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address
     *           The address to query transactions, in lowercase cashaddr format.
     *           The network identifier is optional (i.e. "cashaddress:").
     *     @type bool $include_mempool
     *           When `include_mempool` is true, unconfirmed transactions from mempool
     *           are returned. Default is false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Bchrpc::initOnce();
        parent::__construct($data);
    }

    /**
     * The address to query transactions, in lowercase cashaddr format.
     * The network identifier is optional (i.e. "cashaddress:").
     *
     * Generated from protobuf field <code>string address = 1;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * The address to query transactions, in lowercase cashaddr format.
     * The network identifier is optional (i.e. "cashaddress:").
     *
     * Generated from protobuf field <code>string address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * When `include_mempool` is true, unconfirmed transactions from mempool
     * are returned. Default is false.
     *
     * Generated from protobuf field <code>bool include_mempool = 2;</code>
     * @return bool
     */
    public function getIncludeMempool()
    {
        return $this->include_mempool;
    }

    /**
     * When `include_mempool` is true, unconfirmed transactions from mempool
     * are returned. Default is false.
     *
     * Generated from protobuf field <code>bool include_mempool = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeMempool($var)
    {
        GPBUtil::checkBool($var);
        $this->include_mempool = $var;

        return $this;
    }

}

