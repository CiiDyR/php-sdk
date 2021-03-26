<?php

/**
 * This file is automatically generated by `composer build-grpc`
 */

namespace Dapr\Client\Interfaces\V1;

/**
 * GetBulkStateResponse is the response conveying the list of state values.
 *
 * Generated from protobuf message <code>dapr.proto.runtime.v1.GetBulkStateResponse</code>
 */
interface GetBulkStateResponseInterface
{
	/**
	 * The list of items containing the keys to get values for.
	 *
	 * Generated from protobuf field <code>repeated .dapr.proto.runtime.v1.BulkStateItem items = 1;</code>
	 * @return \Google\Protobuf\Internal\RepeatedField
	 */
	public function getItems();


	/**
	 * The list of items containing the keys to get values for.
	 *
	 * Generated from protobuf field <code>repeated .dapr.proto.runtime.v1.BulkStateItem items = 1;</code>
	 * @param \Dapr\Proto\Runtime\V1\BulkStateItem[]|\Google\Protobuf\Internal\RepeatedField $var
	 * @return $this
	 */
	public function setItems($var);
}
