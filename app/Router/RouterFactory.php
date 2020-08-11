<?php declare(strict_types = 1);

namespace REPLACE_namespace\Router;

use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;

class RouterFactory
{

	public static function createRouter(): RouteList
	{
		$router = new RouteList();
		$router[] = new Route('<presenter>/<action>[/<id>]', 'Public:Dashboard:default');
		return $router;
	}

}
