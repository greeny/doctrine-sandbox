<?php
/**
 * @author Tomáš Blatný
 */

namespace REPLACE_namespace\Model\Facades;

use REPLACE_namespace\Model\Entities\User;


class UserFacade extends BaseFacade
{

	/**
	 * @param $id
	 * @return User|NULL
	 */
	public function getById($id)
	{
		return $this->getRepository()->find($id);
	}


}
