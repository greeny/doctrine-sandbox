<?php declare(strict_types = 1);

namespace REPLACE_namespace\Model\Entities;

use Doctrine\ORM\Mapping as ORM;
use Kdyby\Doctrine\Entities\Attributes\Identifier;

/**
 * @ORM\Entity
 */
class User
{

	use Identifier;

	/**
	 * @ORM\Column(type="string", nullable=FALSE)
	 */
	private string $nick;

	/**
	 * @ORM\Column(type="string", nullable=FALSE)
	 */
	private string $password;

	/**
	 * @ORM\Column(type="string", nullable=FALSE)
	 */
	private string $email;

}
