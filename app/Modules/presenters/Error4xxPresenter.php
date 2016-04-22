<?php

namespace REPLACE_namespace;


use Nette\Application\BadRequestException;
use Nette\Application\Request;


class Error4xxPresenter extends BasePresenter
{

	public function startup()
	{
		parent::startup();
		if (!$this->getRequest()->isMethod(Request::FORWARD)) {
			$this->error();
		}
	}


	public function renderDefault(BadRequestException $exception)
	{
		$file = __DIR__ . "/templates/Error/{$exception->getCode()}.latte";
		$this->template->setFile(is_file($file) ? $file : __DIR__ . '/templates/Error/4xx.latte');
	}

}
