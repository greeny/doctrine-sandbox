<?php declare(strict_types = 1);

namespace REPLACE_namespace\Model\Facades;

use Kdyby\Doctrine\EntityManager;
use Kdyby\Doctrine\EntityRepository;

abstract class BaseFacade
{

	/** @var EntityManager */
	protected $entityManager;

	public function __construct(EntityManager $entityManager)
	{
		$this->entityManager = $entityManager;
	}

	protected function getRepository(): EntityRepository
	{
		return $this->entityManager->getRepository($this->getEntityClass());
	}

	abstract protected function getEntityClass(): string;

}
