<?php declare(strict_types = 1);

namespace REPLACE_namespace\Model\Repositories;

use REPLACE_namespace\Model\Entities\User;

class UserRepository extends BaseRepository
{

	public function getById(int $id): ?User
	{
		return $this->getRepository()->find($id);
	}

	protected function getEntityClass(): string
	{
		return User::class;
	}

}
