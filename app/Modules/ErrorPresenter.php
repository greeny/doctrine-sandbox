<?php declare(strict_types = 1);

namespace REPLACE_namespace\Modules;

use Nette\Application\BadRequestException;
use Nette\Application\Helpers;
use Nette\Application\IPresenter;
use Nette\Application\IResponse;
use Nette\Application\Request;
use Nette\Application\Responses\CallbackResponse;
use Nette\Application\Responses\ForwardResponse;
use Nette\Http\IRequest as HttpRequest;
use Nette\Http\IResponse as HttpResponse;
use Tracy\ILogger;

class ErrorPresenter implements IPresenter
{

	/** @var ILogger */
	private $logger;

	public function __construct(ILogger $logger)
	{
		$this->logger = $logger;
	}

	public function run(Request $request): IResponse
	{
		$exception = $request->getParameter('exception');

		if ($exception instanceof BadRequestException) {
			[$module, , $sep] = Helpers::splitName($request->getPresenterName());
			return new ForwardResponse($request->setPresenterName($module . $sep . 'Error4xx'));
		}

		$this->logger->log($exception, ILogger::EXCEPTION);
		return new CallbackResponse(function (HttpRequest $httpRequest, HttpResponse $httpResponse): void {
			if (preg_match('#^text/html(?:;|$)#', (string) $httpResponse->getHeader('Content-Type'))) {
				require __DIR__ . '/templates/Error/500.phtml';
			}
		});
	}

}
