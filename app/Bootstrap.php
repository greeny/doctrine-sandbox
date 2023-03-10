<?php declare(strict_types = 1);

namespace REPLACE_namespace;

use Nette\Bootstrap\Configurator;

class Bootstrap
{

	public static function boot(): Configurator
	{
		$appDir = dirname(__DIR__);

		$configurator = new Configurator;

		$configurator->enableTracy($appDir . '/log');
		$configurator->setTimeZone('Europe/Prague');
		$configurator->setTempDirectory($appDir . '/temp');

		$configurator->createRobotLoader()
			->addDirectory(__DIR__)
			->register();

		$configurator->addConfig($appDir . '/config/config.neon');
		$configurator->addConfig($appDir . '/config/config.local.neon');

		return $configurator;
	}

}
