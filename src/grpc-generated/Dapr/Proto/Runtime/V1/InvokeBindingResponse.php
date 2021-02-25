<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dapr/proto/runtime/v1/dapr.proto

namespace Dapr\Proto\Runtime\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * InvokeBindingResponse is the message returned from an output binding invocation
 *
 * Generated from protobuf message <code>dapr.proto.runtime.v1.InvokeBindingResponse</code>
 */
class InvokeBindingResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The data which will be sent to output binding.
     *
     * Generated from protobuf field <code>bytes data = 1;</code>
     */
    protected $data = '';
    /**
     * The metadata returned from an external system
     *
     * Generated from protobuf field <code>map<string, string> metadata = 2;</code>
     */
    private $metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data
     *           The data which will be sent to output binding.
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           The metadata returned from an external system
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Dapr\Proto\Runtime\V1\Dapr::initOnce();
        parent::__construct($data);
    }

    /**
     * The data which will be sent to output binding.
     *
     * Generated from protobuf field <code>bytes data = 1;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * The data which will be sent to output binding.
     *
     * Generated from protobuf field <code>bytes data = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * The metadata returned from an external system
     *
     * Generated from protobuf field <code>map<string, string> metadata = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * The metadata returned from an external system
     *
     * Generated from protobuf field <code>map<string, string> metadata = 2;</code>
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
