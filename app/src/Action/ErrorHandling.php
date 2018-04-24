<?php

namespace Luce\Action;

use ObjectivePHP\Application\Exception\WorkflowException;
use ObjectivePHP\Middleware\HttpAction\HttpAction;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ErrorHandling extends HttpAction
{
    /**
     * Process an incoming server request and return a response, optionally delegating
     * response creation to a handler.
     *
     * @param ServerRequestInterface  $request
     * @param RequestHandlerInterface $handler
     *
     * @return ResponseInterface
     * @throws WorkflowException
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        throw new WorkflowException('This is an exception caught by DefaultExceptionRenderer');
    }

}
