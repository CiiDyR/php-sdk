<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: runtime/v1/dapr.proto

namespace Dapr\Proto\Runtime\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DeleteBulkStateRequest is the message to delete a list of key-value states from specific state store.
 *
 * Generated from protobuf message <code>dapr.proto.runtime.v1.DeleteBulkStateRequest</code>
 */
class DeleteBulkStateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of state store.
     *
     * Generated from protobuf field <code>string store_name = 1;</code>
     */
    protected $store_name = '';
    /**
     * The array of the state key values.
     *
     * Generated from protobuf field <code>repeated .dapr.proto.common.v1.StateItem states = 2;</code>
     */
    private $states;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $store_name
     *           The name of state store.
     *     @type \Dapr\Proto\Common\V1\StateItem[]|\Google\Protobuf\Internal\RepeatedField $states
     *           The array of the state key values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Runtime\V1\Dapr::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of state store.
     *
     * Generated from protobuf field <code>string store_name = 1;</code>
     * @return string
     */
    public function getStoreName()
    {
        return $this->store_name;
    }

    /**
     * The name of state store.
     *
     * Generated from protobuf field <code>string store_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStoreName($var)
    {
        GPBUtil::checkString($var, True);
        $this->store_name = $var;

        return $this;
    }

    /**
     * The array of the state key values.
     *
     * Generated from protobuf field <code>repeated .dapr.proto.common.v1.StateItem states = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStates()
    {
        return $this->states;
    }

    /**
     * The array of the state key values.
     *
     * Generated from protobuf field <code>repeated .dapr.proto.common.v1.StateItem states = 2;</code>
     * @param \Dapr\Proto\Common\V1\StateItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dapr\Proto\Common\V1\StateItem::class);
        $this->states = $arr;

        return $this;
    }

}

