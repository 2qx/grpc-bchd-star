// source: bchrpc.proto
/**
 * @fileoverview
 * @enhanceable
 * @suppress {messageConventions} JS Compiler reports an error if a variable or
 *     field starts with 'MSG_' and isn't a translatable message.
 * @public
 */
// GENERATED CODE -- DO NOT EDIT!
/* eslint-disable */
// @ts-nocheck

goog.provide('proto.pb.TransactionNotification');
goog.provide('proto.pb.TransactionNotification.TransactionCase');
goog.provide('proto.pb.TransactionNotification.Type');

goog.require('jspb.BinaryReader');
goog.require('jspb.BinaryWriter');
goog.require('jspb.Message');
goog.require('proto.pb.MempoolTransaction');
goog.require('proto.pb.Transaction');

/**
 * Generated by JsPbCodeGenerator.
 * @param {Array=} opt_data Optional initial data array, typically from a
 * server response, or constructed directly in Javascript. The array is used
 * in place and becomes part of the constructed object. It is not cloned.
 * If no data is provided, the constructed object will be empty, but still
 * valid.
 * @extends {jspb.Message}
 * @constructor
 */
proto.pb.TransactionNotification = function(opt_data) {
  jspb.Message.initialize(this, opt_data, 0, -1, null, proto.pb.TransactionNotification.oneofGroups_);
};
goog.inherits(proto.pb.TransactionNotification, jspb.Message);
if (goog.DEBUG && !COMPILED) {
  /**
   * @public
   * @override
   */
  proto.pb.TransactionNotification.displayName = 'proto.pb.TransactionNotification';
}

/**
 * Oneof group definitions for this message. Each group defines the field
 * numbers belonging to that group. When of these fields' value is set, all
 * other fields in the group are cleared. During deserialization, if multiple
 * fields are encountered for a group, only the last value seen will be kept.
 * @private {!Array<!Array<number>>}
 * @const
 */
proto.pb.TransactionNotification.oneofGroups_ = [[2,3,4]];

/**
 * @enum {number}
 */
proto.pb.TransactionNotification.TransactionCase = {
  TRANSACTION_NOT_SET: 0,
  CONFIRMED_TRANSACTION: 2,
  UNCONFIRMED_TRANSACTION: 3,
  SERIALIZED_TRANSACTION: 4
};

/**
 * @return {proto.pb.TransactionNotification.TransactionCase}
 */
proto.pb.TransactionNotification.prototype.getTransactionCase = function() {
  return /** @type {proto.pb.TransactionNotification.TransactionCase} */(jspb.Message.computeOneofCase(this, proto.pb.TransactionNotification.oneofGroups_[0]));
};



if (jspb.Message.GENERATE_TO_OBJECT) {
/**
 * Creates an object representation of this proto.
 * Field names that are reserved in JavaScript and will be renamed to pb_name.
 * Optional fields that are not set will be set to undefined.
 * To access a reserved field use, foo.pb_<name>, eg, foo.pb_default.
 * For the list of reserved names please see:
 *     net/proto2/compiler/js/internal/generator.cc#kKeyword.
 * @param {boolean=} opt_includeInstance Deprecated. whether to include the
 *     JSPB instance for transitional soy proto support:
 *     http://goto/soy-param-migration
 * @return {!Object}
 */
proto.pb.TransactionNotification.prototype.toObject = function(opt_includeInstance) {
  return proto.pb.TransactionNotification.toObject(opt_includeInstance, this);
};


/**
 * Static version of the {@see toObject} method.
 * @param {boolean|undefined} includeInstance Deprecated. Whether to include
 *     the JSPB instance for transitional soy proto support:
 *     http://goto/soy-param-migration
 * @param {!proto.pb.TransactionNotification} msg The msg instance to transform.
 * @return {!Object}
 * @suppress {unusedLocalVariables} f is only used for nested messages
 */
proto.pb.TransactionNotification.toObject = function(includeInstance, msg) {
  var f, obj = {
    type: jspb.Message.getFieldWithDefault(msg, 1, 0),
    confirmedTransaction: (f = msg.getConfirmedTransaction()) && proto.pb.Transaction.toObject(includeInstance, f),
    unconfirmedTransaction: (f = msg.getUnconfirmedTransaction()) && proto.pb.MempoolTransaction.toObject(includeInstance, f),
    serializedTransaction: msg.getSerializedTransaction_asB64()
  };

  if (includeInstance) {
    obj.$jspbMessageInstance = msg;
  }
  return obj;
};
}


/**
 * Deserializes binary data (in protobuf wire format).
 * @param {jspb.ByteSource} bytes The bytes to deserialize.
 * @return {!proto.pb.TransactionNotification}
 */
proto.pb.TransactionNotification.deserializeBinary = function(bytes) {
  var reader = new jspb.BinaryReader(bytes);
  var msg = new proto.pb.TransactionNotification;
  return proto.pb.TransactionNotification.deserializeBinaryFromReader(msg, reader);
};


/**
 * Deserializes binary data (in protobuf wire format) from the
 * given reader into the given message object.
 * @param {!proto.pb.TransactionNotification} msg The message object to deserialize into.
 * @param {!jspb.BinaryReader} reader The BinaryReader to use.
 * @return {!proto.pb.TransactionNotification}
 */
proto.pb.TransactionNotification.deserializeBinaryFromReader = function(msg, reader) {
  while (reader.nextField()) {
    if (reader.isEndGroup()) {
      break;
    }
    var field = reader.getFieldNumber();
    switch (field) {
    case 1:
      var value = /** @type {!proto.pb.TransactionNotification.Type} */ (reader.readEnum());
      msg.setType(value);
      break;
    case 2:
      var value = new proto.pb.Transaction;
      reader.readMessage(value,proto.pb.Transaction.deserializeBinaryFromReader);
      msg.setConfirmedTransaction(value);
      break;
    case 3:
      var value = new proto.pb.MempoolTransaction;
      reader.readMessage(value,proto.pb.MempoolTransaction.deserializeBinaryFromReader);
      msg.setUnconfirmedTransaction(value);
      break;
    case 4:
      var value = /** @type {!Uint8Array} */ (reader.readBytes());
      msg.setSerializedTransaction(value);
      break;
    default:
      reader.skipField();
      break;
    }
  }
  return msg;
};


/**
 * Serializes the message to binary data (in protobuf wire format).
 * @return {!Uint8Array}
 */
proto.pb.TransactionNotification.prototype.serializeBinary = function() {
  var writer = new jspb.BinaryWriter();
  proto.pb.TransactionNotification.serializeBinaryToWriter(this, writer);
  return writer.getResultBuffer();
};


/**
 * Serializes the given message to binary data (in protobuf wire
 * format), writing to the given BinaryWriter.
 * @param {!proto.pb.TransactionNotification} message
 * @param {!jspb.BinaryWriter} writer
 * @suppress {unusedLocalVariables} f is only used for nested messages
 */
proto.pb.TransactionNotification.serializeBinaryToWriter = function(message, writer) {
  var f = undefined;
  f = message.getType();
  if (f !== 0.0) {
    writer.writeEnum(
      1,
      f
    );
  }
  f = message.getConfirmedTransaction();
  if (f != null) {
    writer.writeMessage(
      2,
      f,
      proto.pb.Transaction.serializeBinaryToWriter
    );
  }
  f = message.getUnconfirmedTransaction();
  if (f != null) {
    writer.writeMessage(
      3,
      f,
      proto.pb.MempoolTransaction.serializeBinaryToWriter
    );
  }
  f = /** @type {!(string|Uint8Array)} */ (jspb.Message.getField(message, 4));
  if (f != null) {
    writer.writeBytes(
      4,
      f
    );
  }
};


/**
 * @enum {number}
 */
proto.pb.TransactionNotification.Type = {
  UNCONFIRMED: 0,
  CONFIRMED: 1
};

/**
 * optional Type type = 1;
 * @return {!proto.pb.TransactionNotification.Type}
 */
proto.pb.TransactionNotification.prototype.getType = function() {
  return /** @type {!proto.pb.TransactionNotification.Type} */ (jspb.Message.getFieldWithDefault(this, 1, 0));
};


/**
 * @param {!proto.pb.TransactionNotification.Type} value
 * @return {!proto.pb.TransactionNotification} returns this
 */
proto.pb.TransactionNotification.prototype.setType = function(value) {
  return jspb.Message.setProto3EnumField(this, 1, value);
};


/**
 * optional Transaction confirmed_transaction = 2;
 * @return {?proto.pb.Transaction}
 */
proto.pb.TransactionNotification.prototype.getConfirmedTransaction = function() {
  return /** @type{?proto.pb.Transaction} */ (
    jspb.Message.getWrapperField(this, proto.pb.Transaction, 2));
};


/**
 * @param {?proto.pb.Transaction|undefined} value
 * @return {!proto.pb.TransactionNotification} returns this
*/
proto.pb.TransactionNotification.prototype.setConfirmedTransaction = function(value) {
  return jspb.Message.setOneofWrapperField(this, 2, proto.pb.TransactionNotification.oneofGroups_[0], value);
};


/**
 * Clears the message field making it undefined.
 * @return {!proto.pb.TransactionNotification} returns this
 */
proto.pb.TransactionNotification.prototype.clearConfirmedTransaction = function() {
  return this.setConfirmedTransaction(undefined);
};


/**
 * Returns whether this field is set.
 * @return {boolean}
 */
proto.pb.TransactionNotification.prototype.hasConfirmedTransaction = function() {
  return jspb.Message.getField(this, 2) != null;
};


/**
 * optional MempoolTransaction unconfirmed_transaction = 3;
 * @return {?proto.pb.MempoolTransaction}
 */
proto.pb.TransactionNotification.prototype.getUnconfirmedTransaction = function() {
  return /** @type{?proto.pb.MempoolTransaction} */ (
    jspb.Message.getWrapperField(this, proto.pb.MempoolTransaction, 3));
};


/**
 * @param {?proto.pb.MempoolTransaction|undefined} value
 * @return {!proto.pb.TransactionNotification} returns this
*/
proto.pb.TransactionNotification.prototype.setUnconfirmedTransaction = function(value) {
  return jspb.Message.setOneofWrapperField(this, 3, proto.pb.TransactionNotification.oneofGroups_[0], value);
};


/**
 * Clears the message field making it undefined.
 * @return {!proto.pb.TransactionNotification} returns this
 */
proto.pb.TransactionNotification.prototype.clearUnconfirmedTransaction = function() {
  return this.setUnconfirmedTransaction(undefined);
};


/**
 * Returns whether this field is set.
 * @return {boolean}
 */
proto.pb.TransactionNotification.prototype.hasUnconfirmedTransaction = function() {
  return jspb.Message.getField(this, 3) != null;
};


/**
 * optional bytes serialized_transaction = 4;
 * @return {string}
 */
proto.pb.TransactionNotification.prototype.getSerializedTransaction = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 4, ""));
};


/**
 * optional bytes serialized_transaction = 4;
 * This is a type-conversion wrapper around `getSerializedTransaction()`
 * @return {string}
 */
proto.pb.TransactionNotification.prototype.getSerializedTransaction_asB64 = function() {
  return /** @type {string} */ (jspb.Message.bytesAsB64(
      this.getSerializedTransaction()));
};


/**
 * optional bytes serialized_transaction = 4;
 * Note that Uint8Array is not supported on all browsers.
 * @see http://caniuse.com/Uint8Array
 * This is a type-conversion wrapper around `getSerializedTransaction()`
 * @return {!Uint8Array}
 */
proto.pb.TransactionNotification.prototype.getSerializedTransaction_asU8 = function() {
  return /** @type {!Uint8Array} */ (jspb.Message.bytesAsU8(
      this.getSerializedTransaction()));
};


/**
 * @param {!(string|Uint8Array)} value
 * @return {!proto.pb.TransactionNotification} returns this
 */
proto.pb.TransactionNotification.prototype.setSerializedTransaction = function(value) {
  return jspb.Message.setOneofField(this, 4, proto.pb.TransactionNotification.oneofGroups_[0], value);
};


/**
 * Clears the field making it undefined.
 * @return {!proto.pb.TransactionNotification} returns this
 */
proto.pb.TransactionNotification.prototype.clearSerializedTransaction = function() {
  return jspb.Message.setOneofField(this, 4, proto.pb.TransactionNotification.oneofGroups_[0], undefined);
};


/**
 * Returns whether this field is set.
 * @return {boolean}
 */
proto.pb.TransactionNotification.prototype.hasSerializedTransaction = function() {
  return jspb.Message.getField(this, 4) != null;
};


