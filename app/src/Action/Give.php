<?php

namespace Luce\Action;

use Luce\Service\BirthListManager;
use ObjectivePHP\Middleware\HttpAction\HttpAction;
use ObjectivePHP\ServicesFactory\Annotation\Inject;
use ObjectivePHP\ServicesFactory\Specification\InjectionAnnotationProvider;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response;

/**
 * Class Give
 *
 * @package Luce\Action
 */
class Give extends HttpAction implements InjectionAnnotationProvider
{
    /**
     * @var BirthListManager
     *
     * @Inject(service="manager.birth_list")
     */
    protected $birthListManager;

    /**
     * {@inheritdoc}
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $this->birthListManager->markGiftAsGiven(1, 'test');

        if ($request->getMethod() != 'POST') {
            $response = new Response('php://memory', 405, ['Content-Type' => 'text/plain']);
            $response->getBody()->write('Method Not Allowed');

            return $response;
        }

        return new Response('php://memory', 204);
    }
}
