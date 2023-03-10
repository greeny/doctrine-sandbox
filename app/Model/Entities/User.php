<?php declare(strict_types = 1);

namespace REPLACE_namespace\Model\Entities;

use Doctrine\ORM\Mapping as ORM;
use REPLACE_namespace\Model\Entities\Attributes\Identifier;

#[ORM\Entity]
class User
{

	use Identifier;

}
