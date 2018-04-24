<?php

namespace Luce\Action;

use Luce\Service\BirthListManager;
use ObjectivePHP\Middleware\Action\PhtmlAction\PhtmlAction;
use ObjectivePHP\ServicesFactory\Annotation\Inject;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Class Home
 *
 * @package Showcase\Action
 */
class Home extends PhtmlAction
{
    /**
     * @var BirthListManager
     *
     * @Inject(service="manager.birth_list")
     */
    protected $birthListManager;

    /**
     * Process an incoming server request and return a response, optionally delegating
     * response creation to a handler.
     *
     * @param ServerRequestInterface  $request
     * @param RequestHandlerInterface $handler
     *
     * @return ResponseInterface
     * @throws \ObjectivePHP\Middleware\Action\PhtmlAction\Exception\PhtmlTemplateNotFoundException
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        return $this->render([
            'list' => $this->birthListManager->getListGroupByCategory()
        ]);
    }
}
