<?php declare(strict_types = 1);

namespace REPLACE_namespace\Modules\ErrorModule;

use Nette\Application\Attributes\Requires;
use Nette\Application\BadRequestException;
use Nette\Application\UI\Presenter;
use Nette\Bridges\ApplicationLatte\DefaultTemplate;

/** @property-read DefaultTemplate $template */
#[Requires(methods: '*', forward: true)]
final class Error4xxPresenter extends Presenter
{

	public function renderDefault(BadRequestException $exception): void
	{
		$code = $exception->getCode();
		$file = is_file($file = __DIR__ . "/templates/$code.latte")
			? $file
			: __DIR__ . '/templates/4xx.latte';
		$this->template->add('httpCode', $code);
		$this->template->setFile($file);
	}

}
