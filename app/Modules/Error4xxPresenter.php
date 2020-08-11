<?php declare(strict_types = 1);

namespace REPLACE_namespace\Modules;

use Nette\Application\BadRequestException;
use Nette\Application\Request;

class Error4xxPresenter extends BasePresenter
{

	public function startup(): void
	{
		parent::startup();
		if (!$this->getRequest()->isMethod(Request::FORWARD)) {
			$this->error();
		}
	}

	public function renderDefault(BadRequestException $exception): void
	{
		$file = __DIR__ . "/templates/Error/{$exception->getCode()}.latte";
		$this->template->setFile(is_file($file) ? $file : __DIR__ . '/templates/Error/4xx.latte');
	}

}
