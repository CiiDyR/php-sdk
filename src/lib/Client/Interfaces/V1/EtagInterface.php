<?php

/**
 * This file is automatically generated by `composer build-grpc`
 */

namespace Dapr\Client\Interfaces\V1;

/**
 * Etag represents a state item version
 *
 * Generated from protobuf message <code>dapr.proto.common.v1.Etag</code>
 */
interface EtagInterface
{
	/**
	 * value sets the etag value
	 *
	 * Generated from protobuf field <code>string value = 1;</code>
	 * @return string
	 */
	public function getValue();


	/**
	 * value sets the etag value
	 *
	 * Generated from protobuf field <code>string value = 1;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setValue($var);
}