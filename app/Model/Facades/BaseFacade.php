<?php
/**
 * @author Tomáš Blatný
 */

namespace REPLACE_namespace\Model\Facades;

use Kdyby\Doctrine\EntityManager;
use Kdyby\Doctrine\EntityRepository;
use REPLACE_namespace\Model\MappingException;


class BaseFacade
{

	/** @var EntityManager */
	protected $entityManager;

	/** @var string */
	protected $entityNamespace = '\\REPLACE_namespace\\Model\\Entities\\';


	public function __construct(EntityManager $entityManager)
	{
		$this->entityManager = $entityManager;
	}


	/**
	 * @return string
	 * @throws MappingException
	 */
	protected function getEntityClass()
	{
		if (preg_match('#([a-z0-9]+)facade$#i', $class = get_called_class(), $matches = [])) {
			return $this->entityNamespace . $matches[1];
		}
		throw MappingException::cannotDetermineRepositoryName($class);
	}


	/**
	 * @return EntityRepository
	 */
	protected function getRepository()
	{
		return $this->entityManager->getRepository($this->getEntityClass());
	}


}
