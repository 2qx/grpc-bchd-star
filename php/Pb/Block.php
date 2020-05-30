<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bchrpc.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.Block</code>
 */
class Block extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.pb.BlockInfo info = 1;</code>
     */
    protected $info = null;
    /**
     * Generated from protobuf field <code>repeated .pb.Block.TransactionData transaction_data = 2;</code>
     */
    private $transaction_data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Pb\BlockInfo $info
     *     @type \Pb\Block\TransactionData[]|\Google\Protobuf\Internal\RepeatedField $transaction_data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Bchrpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.pb.BlockInfo info = 1;</code>
     * @return \Pb\BlockInfo
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Generated from protobuf field <code>.pb.BlockInfo info = 1;</code>
     * @param \Pb\BlockInfo $var
     * @return $this
     */
    public function setInfo($var)
    {
        GPBUtil::checkMessage($var, \Pb\BlockInfo::class);
        $this->info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .pb.Block.TransactionData transaction_data = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTransactionData()
    {
        return $this->transaction_data;
    }

    /**
     * Generated from protobuf field <code>repeated .pb.Block.TransactionData transaction_data = 2;</code>
     * @param \Pb\Block\TransactionData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTransactionData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Pb\Block\TransactionData::class);
        $this->transaction_data = $arr;

        return $this;
    }

}

