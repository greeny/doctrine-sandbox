<?php declare(strict_types = 1);

namespace REPLACE_namespace\Model\Facades;

use REPLACE_namespace\Model\Entities\User;

class UserFacade extends BaseFacade
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
