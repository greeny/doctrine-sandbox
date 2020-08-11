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
	 * @var string
	 * @ORM\Column(type="string", nullable=FALSE)
	 */
	private $nick;

	/**
	 * @var string
	 * @ORM\Column(type="string", nullable=FALSE)
	 */
	private $password;

	/**
	 * @var string
	 * @ORM\Column(type="string", nullable=FALSE)
	 */
	private $email;

}
