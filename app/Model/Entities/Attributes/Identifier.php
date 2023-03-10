<?php declare(strict_types = 1);

namespace REPLACE_namespace\Model\Entities\Attributes;

use Doctrine\ORM\Mapping as ORM;

trait Identifier
{

	#[ORM\Column(type: 'integer', nullable: FALSE)]
	#[ORM\Id]
	#[ORM\GeneratedValue]
	public int $id;

	public function __clone(): void
	{
		unset($this->id);
	}

}
