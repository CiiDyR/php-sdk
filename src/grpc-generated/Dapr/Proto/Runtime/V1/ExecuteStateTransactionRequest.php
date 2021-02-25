<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dapr/proto/runtime/v1/dapr.proto

namespace Dapr\Proto\Runtime\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ExecuteStateTransactionRequest is the message to execute multiple operations on a specified store.
 *
 * Generated from protobuf message <code>dapr.proto.runtime.v1.ExecuteStateTransactionRequest</code>
 */
class ExecuteStateTransactionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. name of state store.
     *
     * Generated from protobuf field <code>string storeName = 1;</code>
     */
    protected $storeName = '';
    /**
     * Required. transactional operation list.
     *
     * Generated from protobuf field <code>repeated .dapr.proto.runtime.v1.TransactionalStateOperation operations = 2;</code>
     */
    private $operations;
    /**
     * The metadata used for transactional operations.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     */
    private $metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $storeName
     *           Required. name of state store.
     *     @type \Dapr\Proto\Runtime\V1\TransactionalStateOperation[]|\Google\Protobuf\Internal\RepeatedField $operations
     *           Required. transactional operation list.
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           The metadata used for transactional operations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Dapr\Proto\Runtime\V1\Dapr::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. name of state store.
     *
     * Generated from protobuf field <code>string storeName = 1;</code>
     * @return string
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * Required. name of state store.
     *
     * Generated from protobuf field <code>string storeName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStoreName($var)
    {
        GPBUtil::checkString($var, True);
        $this->storeName = $var;

        return $this;
    }

    /**
     * Required. transactional operation list.
     *
     * Generated from protobuf field <code>repeated .dapr.proto.runtime.v1.TransactionalStateOperation operations = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * Required. transactional operation list.
     *
     * Generated from protobuf field <code>repeated .dapr.proto.runtime.v1.TransactionalStateOperation operations = 2;</code>
     * @param \Dapr\Proto\Runtime\V1\TransactionalStateOperation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dapr\Proto\Runtime\V1\TransactionalStateOperation::class);
        $this->operations = $arr;

        return $this;
    }

    /**
     * The metadata used for transactional operations.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * The metadata used for transactional operations.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

}
