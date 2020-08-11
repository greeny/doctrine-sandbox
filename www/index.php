<?php declare(strict_types = 1);

use Nette\Application\Application;
use REPLACE_namespace\Bootstrap;

require __DIR__ . '/../vendor/autoload.php';

Bootstrap::boot()
	->createContainer()
	->getByType(Application::class)
	->run();
