<?php
/**
 * @author Tomáš Blatný
 */

namespace REPLACE_namespace\Model;

use Exception;


class MappingException extends Exception
{

	public static function cannotDetermineRepositoryName($className)
	{
		return new self("Cannot determine entity name from class $className.");
	}

}
