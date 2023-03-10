<?php declare(strict_types = 1);

namespace REPLACE_namespace\UI;

class TemplateFilters
{

	public static function loader(string $filter): ?callable
	{
		if (method_exists(self::class, $filter)) {
			return [self::class, $filter];
		}
		return null;
	}

}
