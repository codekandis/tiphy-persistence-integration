<?php declare( strict_types = 1 );
namespace CodeKandis\TiphyPersistenceIntegration\Configurations;

use CodeKandis\Configurations\ConfigurationRegistryInterface as OriginConfigurationRegistryInterface;
use CodeKandis\Persistence\Configurations\PersistenceConfigurationInterface;

/**
 * Represents the interface of any configuration registry providing a persistence configuration.
 * @package codekandis/tiphy-persistence-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ConfigurationRegistryInterface extends OriginConfigurationRegistryInterface
{
	/**
	 * Gets the persistence configuration.
	 * @return ?PersistenceConfigurationInterface The persistence configuration.
	 */
	public function getPersistenceConfiguration(): ?PersistenceConfigurationInterface;
}
