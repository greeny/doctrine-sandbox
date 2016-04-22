<?php
/**
 * @author Tomáš Blatný
 */

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


	/**
	 * @return string
	 */
	public function getNick()
	{
		return $this->nick;
	}


	/**
	 * @param string $nick
	 * @return $this
	 */
	public function setNick($nick)
	{
		$this->nick = $nick;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
	}


	/**
	 * @param string $password
	 * @return $this
	 */
	public function setPassword($password)
	{
		$this->password = $password;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}


	/**
	 * @param string $email
	 * @return $this
	 */
	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}

}
