<?php

/**
 * This file is automatically generated by `composer build-grpc`
 */

namespace Dapr\Client\Interfaces\V1;

/**
 * Generated from protobuf message <code>dapr.proto.runtime.v1.RegisteredComponents</code>
 */
interface RegisteredComponentsInterface
{
	/**
	 * Generated from protobuf field <code>string name = 1;</code>
	 * @return string
	 */
	public function getName();


	/**
	 * Generated from protobuf field <code>string name = 1;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setName($var);


	/**
	 * Generated from protobuf field <code>string type = 2;</code>
	 * @return string
	 */
	public function getType();


	/**
	 * Generated from protobuf field <code>string type = 2;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setType($var);


	/**
	 * Generated from protobuf field <code>string version = 3;</code>
	 * @return string
	 */
	public function getVersion();


	/**
	 * Generated from protobuf field <code>string version = 3;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setVersion($var);
}
