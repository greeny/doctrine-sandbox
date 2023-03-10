<?php declare(strict_types = 1);

namespace REPLACE_namespace\Model\Repositories;

use Doctrine\ORM\EntityRepository;
use InvalidArgumentException;
use Nettrine\ORM\EntityManagerDecorator;

abstract class BaseRepository
{

	protected EntityManagerDecorator $entityManager;

	public function __construct(EntityManagerDecorator $entityManager)
	{
		$this->entityManager = $entityManager;
	}

	public function save(object $entity, bool $flush = TRUE): void
	{
		$className = $this->getEntityClass();

		if (!($entity instanceof $className)) {
			throw new InvalidArgumentException('Entity ' . get_class($entity) . ' does not belong to ' . get_class($this));
		}

		$this->entityManager->persist($entity);
		if ($flush) {
			$this->entityManager->flush($entity);
		}
	}

	protected function getRepository(): EntityRepository
	{
		return $this->entityManager->getRepository($this->getEntityClass());
	}

	abstract protected function getEntityClass(): string;

}
