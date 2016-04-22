<?php

namespace REPLACE_namespace;

use Nette\Application\BadRequestException;
use Nette\Application\IPresenter;
use Nette\Application\IResponse;
use Nette\Application\Request;
use Nette\Application\Responses\CallbackResponse;
use Nette\Application\Responses\ForwardResponse;
use Tracy\ILogger;


class ErrorPresenter implements IPresenter
{

	/** @var ILogger */
	private $logger;


	public function __construct(ILogger $logger)
	{
		$this->logger = $logger;
	}


	/**
	 * @param Request $request
	 * @return IResponse
	 */
	public function run(Request $request)
	{
		$exception = $request->getParameter('exception');

		if ($exception instanceof BadRequestException) {
			return new ForwardResponse($request->setPresenterName('Error4xx'));
		}
		$this->logger->log($exception, ILogger::EXCEPTION);

		return new CallbackResponse(function () {
			require __DIR__ . '/templates/Error/500.phtml';
		});
	}

}
