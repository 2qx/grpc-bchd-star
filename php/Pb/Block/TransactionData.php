<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bchrpc.proto

namespace Pb\Block;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.Block.TransactionData</code>
 */
class TransactionData extends \Google\Protobuf\Internal\Message
{
    protected $txids_or_txs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $transaction_hash
     *           Just the transaction hash, little-endian.
     *     @type \Pb\Transaction $transaction
     *           A marshaled transaction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Bchrpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Just the transaction hash, little-endian.
     *
     * Generated from protobuf field <code>bytes transaction_hash = 1;</code>
     * @return string
     */
    public function getTransactionHash()
    {
        return $this->readOneof(1);
    }

    /**
     * Just the transaction hash, little-endian.
     *
     * Generated from protobuf field <code>bytes transaction_hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTransactionHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * A marshaled transaction.
     *
     * Generated from protobuf field <code>.pb.Transaction transaction = 2;</code>
     * @return \Pb\Transaction
     */
    public function getTransaction()
    {
        return $this->readOneof(2);
    }

    /**
     * A marshaled transaction.
     *
     * Generated from protobuf field <code>.pb.Transaction transaction = 2;</code>
     * @param \Pb\Transaction $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkMessage($var, \Pb\Transaction::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTxidsOrTxs()
    {
        return $this->whichOneof("txids_or_txs");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TransactionData::class, \Pb\Block_TransactionData::class);

