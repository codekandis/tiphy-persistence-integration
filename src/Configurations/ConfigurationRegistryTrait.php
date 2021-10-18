<?php declare( strict_types = 1 );
namespace CodeKandis\TiphyPersistenceIntegration\Configurations;

use CodeKandis\Persistence\Configurations\PersistenceConfigurationInterface;

/**
 * Represents the trait to integrate a persistence configuration into a configuration registry.
 * @package codekandis/tiphy-persistence-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
trait ConfigurationRegistryTrait
{
	/**
	 * Stores the persistence configuration.
	 * @var ?PersistenceConfigurationInterface
	 */
	private ?PersistenceConfigurationInterface $persistenceConfiguration = null;

	/**
	 * {@inheritDoc}
	 */
	public function getPersistenceConfiguration(): ?PersistenceConfigurationInterface
	{
		return $this->persistenceConfiguration;
	}
}
