<?php declare( strict_types = 1 );
namespace CodeKandis\TiphyPersistenceIntegration\Configurations;

use CodeKandis\Configurations\AbstractConfiguration;
use CodeKandis\Persistence\Configurations\PersistenceConfigurationInterface;

/**
 * Represents a persistence configuration.
 * @package codekandis/tiphy-persistence-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
class PersistenceConfiguration extends AbstractConfiguration implements PersistenceConfigurationInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function getDriver(): string
	{
		return $this->read( 'driver' );
	}

	/**
	 * {@inheritDoc}
	 */
	public function getHost(): string
	{
		return $this->read( 'host' );
	}

	/**
	 * {@inheritDoc}
	 */
	public function getPort(): ?int
	{
		return $this->readOrDefault( null, 'port' );
	}

	/**
	 * {@inheritDoc}
	 */
	public function getDatabaseName(): string
	{
		return $this->read( 'databaseName' );
	}

	/**
	 * {@inheritDoc}
	 */
	public function getUsername(): string
	{
		return $this->read( 'username' );
	}

	/**
	 * {@inheritDoc}
	 */
	public function getPassphrase(): string
	{
		return $this->read( 'passphrase' );
	}

	/**
	 * {@inheritDoc}
	 */
	public function getAttributes(): array
	{
		return $this->readOrDefault( [], 'attributes' );
	}
}
