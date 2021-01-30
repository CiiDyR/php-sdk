<?php

/**
 * This file was automatically generated.
 */

namespace Dapr\Proxies;

use Dapr\Actors\ActorTrait;
use Dapr\Actors\Attributes\DaprType;
use Dapr\Actors\IActor;
use Swytch\Actors\Devices\IDeviceActor;

#[DaprType('TestActor')]
class dapr_proxy_TestActor implements \Fixtures\ITestActor, IActor
{
	use ActorTrait;

	public string $id;


	public function a_function($value): bool
	{
		$data = $value;
		$type = 'TestActor';
		$id = $this->get_id();
		$current_method = 'a_function';
		$result = \Dapr\DaprClient::post(
		  \Dapr\DaprClient::get_api("/actors/$type/$id/method/$current_method"),
		  \Dapr\Serialization\Serializer::as_array($data)
		);
		$result->data = \Dapr\Deserialization\Deserializer::detect_from_parameter((new \ReflectionClass($this))->getMethod('a_function'), $result->data);
		return $result->data;
	}


	public function get_id(): string
	{
		return $this->id;
	}


	/**
	 * Handle a reminder
	 *
	 * @param string $name The name of the reminder
	 * @param mixed $data The data from passed when the reminder was setup
	 */
	public function remind(string $name, $data): void
	{
		throw new \LogicException("Cannot call 'remind' outside the actor");
	}


	/**
	 * Called when the actor is activated
	 */
	public function on_activation(): void
	{
		throw new \LogicException("Cannot call 'on_activation' outside the actor");
	}


	/**
	 * Called when the actor is deactivated
	 */
	public function on_deactivation(): void
	{
		throw new \LogicException("Cannot call 'on_deactivation' outside the actor");
	}
}