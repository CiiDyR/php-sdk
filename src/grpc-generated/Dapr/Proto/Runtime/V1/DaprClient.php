<?php

/**
 * This file is automatically generated by `composer build-grpc`
 */

namespace Dapr\Proto\Runtime\V1;

/**
 * Dapr service provides APIs to user application to access Dapr building blocks.
 */
class DaprClient extends \Grpc\BaseStub
{
	/**
	 * @param string $hostname hostname
	 * @param array $opts channel options
	 * @param \Grpc\Channel $channel (optional) re-use channel object
	 */
	public function __construct(string $hostname, mixed $opts, \Grpc\Channel|null $channel = null)
	{
		parent::__construct($hostname, $opts, $channel);
	}


	/**
	 * Invokes a method on a remote Dapr app.
	 * @param \Dapr\Proto\Runtime\V1\InvokeServiceRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function InvokeService(
		InvokeServiceRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall {
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/InvokeService',
		$argument,
		['\Dapr\Proto\Common\V1\InvokeResponse', 'decode'],
		$metadata, $options);
	}


	/**
	 * Gets the state for a specific key.
	 * @param \Dapr\Proto\Runtime\V1\GetStateRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function GetState(GetStateRequest $argument, array $metadata = [], array $options = []): \Grpc\UnaryCall
	{
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/GetState',
		$argument,
		['\Dapr\Proto\Runtime\V1\GetStateResponse', 'decode'],
		$metadata, $options);
	}


	/**
	 * Gets a bulk of state items for a list of keys
	 * @param \Dapr\Proto\Runtime\V1\GetBulkStateRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function GetBulkState(GetBulkStateRequest $argument, array $metadata = [], array $options = []): \Grpc\UnaryCall
	{
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/GetBulkState',
		$argument,
		['\Dapr\Proto\Runtime\V1\GetBulkStateResponse', 'decode'],
		$metadata, $options);
	}


	/**
	 * Saves the state for a specific key.
	 * @param \Dapr\Proto\Runtime\V1\SaveStateRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function SaveState(SaveStateRequest $argument, array $metadata = [], array $options = []): \Grpc\UnaryCall
	{
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/SaveState',
		$argument,
		['\Google\Protobuf\GPBEmpty', 'decode'],
		$metadata, $options);
	}


	/**
	 * Deletes the state for a specific key.
	 * @param \Dapr\Proto\Runtime\V1\DeleteStateRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function DeleteState(DeleteStateRequest $argument, array $metadata = [], array $options = []): \Grpc\UnaryCall
	{
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/DeleteState',
		$argument,
		['\Google\Protobuf\GPBEmpty', 'decode'],
		$metadata, $options);
	}


	/**
	 * Deletes a bulk of state items for a list of keys
	 * @param \Dapr\Proto\Runtime\V1\DeleteBulkStateRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function DeleteBulkState(
		DeleteBulkStateRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall {
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/DeleteBulkState',
		$argument,
		['\Google\Protobuf\GPBEmpty', 'decode'],
		$metadata, $options);
	}


	/**
	 * Executes transactions for a specified store
	 * @param \Dapr\Proto\Runtime\V1\ExecuteStateTransactionRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function ExecuteStateTransaction(
		ExecuteStateTransactionRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall {
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/ExecuteStateTransaction',
		$argument,
		['\Google\Protobuf\GPBEmpty', 'decode'],
		$metadata, $options);
	}


	/**
	 * Publishes events to the specific topic.
	 * @param \Dapr\Proto\Runtime\V1\PublishEventRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function PublishEvent(PublishEventRequest $argument, array $metadata = [], array $options = []): \Grpc\UnaryCall
	{
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/PublishEvent',
		$argument,
		['\Google\Protobuf\GPBEmpty', 'decode'],
		$metadata, $options);
	}


	/**
	 * Invokes binding data to specific output bindings
	 * @param \Dapr\Proto\Runtime\V1\InvokeBindingRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function InvokeBinding(
		InvokeBindingRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall {
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/InvokeBinding',
		$argument,
		['\Dapr\Proto\Runtime\V1\InvokeBindingResponse', 'decode'],
		$metadata, $options);
	}


	/**
	 * Gets secrets from secret stores.
	 * @param \Dapr\Proto\Runtime\V1\GetSecretRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function GetSecret(GetSecretRequest $argument, array $metadata = [], array $options = []): \Grpc\UnaryCall
	{
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/GetSecret',
		$argument,
		['\Dapr\Proto\Runtime\V1\GetSecretResponse', 'decode'],
		$metadata, $options);
	}


	/**
	 * Gets a bulk of secrets
	 * @param \Dapr\Proto\Runtime\V1\GetBulkSecretRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function GetBulkSecret(
		GetBulkSecretRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall {
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/GetBulkSecret',
		$argument,
		['\Dapr\Proto\Runtime\V1\GetBulkSecretResponse', 'decode'],
		$metadata, $options);
	}


	/**
	 * Register an actor timer.
	 * @param \Dapr\Proto\Runtime\V1\RegisterActorTimerRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function RegisterActorTimer(
		RegisterActorTimerRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall {
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/RegisterActorTimer',
		$argument,
		['\Google\Protobuf\GPBEmpty', 'decode'],
		$metadata, $options);
	}


	/**
	 * Unregister an actor timer.
	 * @param \Dapr\Proto\Runtime\V1\UnregisterActorTimerRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function UnregisterActorTimer(
		UnregisterActorTimerRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall {
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/UnregisterActorTimer',
		$argument,
		['\Google\Protobuf\GPBEmpty', 'decode'],
		$metadata, $options);
	}


	/**
	 * Register an actor reminder.
	 * @param \Dapr\Proto\Runtime\V1\RegisterActorReminderRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function RegisterActorReminder(
		RegisterActorReminderRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall {
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/RegisterActorReminder',
		$argument,
		['\Google\Protobuf\GPBEmpty', 'decode'],
		$metadata, $options);
	}


	/**
	 * Unregister an actor reminder.
	 * @param \Dapr\Proto\Runtime\V1\UnregisterActorReminderRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function UnregisterActorReminder(
		UnregisterActorReminderRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall {
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/UnregisterActorReminder',
		$argument,
		['\Google\Protobuf\GPBEmpty', 'decode'],
		$metadata, $options);
	}


	/**
	 * Gets the state for a specific actor.
	 * @param \Dapr\Proto\Runtime\V1\GetActorStateRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function GetActorState(
		GetActorStateRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall {
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/GetActorState',
		$argument,
		['\Dapr\Proto\Runtime\V1\GetActorStateResponse', 'decode'],
		$metadata, $options);
	}


	/**
	 * Executes state transactions for a specified actor
	 * @param \Dapr\Proto\Runtime\V1\ExecuteActorStateTransactionRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function ExecuteActorStateTransaction(
		ExecuteActorStateTransactionRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall {
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/ExecuteActorStateTransaction',
		$argument,
		['\Google\Protobuf\GPBEmpty', 'decode'],
		$metadata, $options);
	}


	/**
	 * InvokeActor calls a method on an actor.
	 * @param \Dapr\Proto\Runtime\V1\InvokeActorRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function InvokeActor(InvokeActorRequest $argument, array $metadata = [], array $options = []): \Grpc\UnaryCall
	{
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/InvokeActor',
		$argument,
		['\Dapr\Proto\Runtime\V1\InvokeActorResponse', 'decode'],
		$metadata, $options);
	}


	/**
	 * Gets metadata of the sidecar
	 * @param \Google\Protobuf\GPBEmpty $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function GetMetadata(
		\Google\Protobuf\GPBEmpty $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall {
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/GetMetadata',
		$argument,
		['\Dapr\Proto\Runtime\V1\GetMetadataResponse', 'decode'],
		$metadata, $options);
	}


	/**
	 * Sets value in extended metadata of the sidecar
	 * @param \Dapr\Proto\Runtime\V1\SetMetadataRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function SetMetadata(SetMetadataRequest $argument, array $metadata = [], array $options = []): \Grpc\UnaryCall
	{
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/SetMetadata',
		$argument,
		['\Google\Protobuf\GPBEmpty', 'decode'],
		$metadata, $options);
	}


	/**
	 * Shutdown the sidecar
	 * @param \Google\Protobuf\GPBEmpty $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function Shutdown(
		\Google\Protobuf\GPBEmpty $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall {
		return $this->_simpleRequest('/dapr.proto.runtime.v1.Dapr/Shutdown',
		$argument,
		['\Google\Protobuf\GPBEmpty', 'decode'],
		$metadata, $options);
	}
}
