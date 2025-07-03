<?php declare(strict_types = 1);

namespace REPLACE_namespace\Modules\ErrorModule;

use Nette\Application\Attributes\Requires;
use Nette\Application\IPresenter;
use Nette\Application\Request;
use Nette\Application\Response;
use Nette\Application\Responses\CallbackResponse;
use Nette\Http\IRequest as HttpRequest;
use Nette\Http\IResponse as HttpResponse;
use Tracy\ILogger;

#[Requires(forward: true)]
final class Error5xxPresenter implements IPresenter
{

	public function __construct(private readonly ILogger $logger)
	{
	}

	public function run(Request $request): Response
	{
		$exception = $request->getParameter('exception');
		$this->logger->log($exception, ILogger::EXCEPTION);

		return new CallbackResponse(function (HttpRequest $httpRequest, HttpResponse $httpResponse): void {
			if (preg_match('#^text/html(?:;|$)#', (string) $httpResponse->getHeader('Content-Type'))) {
				require __DIR__ . '/templates/500.phtml';
			}
		});
	}

}
