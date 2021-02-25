<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dapr/proto/common/v1/common.proto

namespace Dapr\Proto\Common\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HTTPExtension includes HTTP verb and querystring
 * when Dapr runtime delivers HTTP content.
 * 
 * For example, when callers calls http invoke api
 * POST http://localhost:3500/v1.0/invoke/<app_id>/method/<method>?query1=value1&query2=value2
 * 
 * Dapr runtime will parse POST as a verb and extract querystring to quersytring map.
 *
 * Generated from protobuf message <code>dapr.proto.common.v1.HTTPExtension</code>
 */
class HTTPExtension extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. HTTP verb.
     *
     * Generated from protobuf field <code>.dapr.proto.common.v1.HTTPExtension.Verb verb = 1;</code>
     */
    protected $verb = 0;
    /**
     * Optional. querystring represents an encoded HTTP url query string in the following format: name=value&name2=value2
     *
     * Generated from protobuf field <code>string querystring = 2;</code>
     */
    protected $querystring = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $verb
     *           Required. HTTP verb.
     *     @type string $querystring
     *           Optional. querystring represents an encoded HTTP url query string in the following format: name=value&name2=value2
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Dapr\Proto\Common\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. HTTP verb.
     *
     * Generated from protobuf field <code>.dapr.proto.common.v1.HTTPExtension.Verb verb = 1;</code>
     * @return int
     */
    public function getVerb()
    {
        return $this->verb;
    }

    /**
     * Required. HTTP verb.
     *
     * Generated from protobuf field <code>.dapr.proto.common.v1.HTTPExtension.Verb verb = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setVerb($var)
    {
        GPBUtil::checkEnum($var, \Dapr\Proto\Common\V1\HTTPExtension\Verb::class);
        $this->verb = $var;

        return $this;
    }

    /**
     * Optional. querystring represents an encoded HTTP url query string in the following format: name=value&name2=value2
     *
     * Generated from protobuf field <code>string querystring = 2;</code>
     * @return string
     */
    public function getQuerystring()
    {
        return $this->querystring;
    }

    /**
     * Optional. querystring represents an encoded HTTP url query string in the following format: name=value&name2=value2
     *
     * Generated from protobuf field <code>string querystring = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setQuerystring($var)
    {
        GPBUtil::checkString($var, True);
        $this->querystring = $var;

        return $this;
    }

}
