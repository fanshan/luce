<?php

namespace Luce\Action;

use Luce\Service\ImageManager;
use ObjectivePHP\Middleware\HttpAction\HttpAction;
use ObjectivePHP\ServicesFactory\Annotation\Inject;
use ObjectivePHP\ServicesFactory\Specification\InjectionAnnotationProvider;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response;

/**
 * Class Image
 *
 * @package Luce\Middleware
 */
class Images extends HttpAction implements InjectionAnnotationProvider
{
    /**
     * @var ImageManager
     *
     * @Inject(service="manager.image")
     */
    protected $imageManager;

    /**
     * {@inheritdoc}
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $image = $this->imageManager->getImage($request->getQueryParams()['id']);

        $fp = fopen('php://memory', 'r+');

        fputs($fp, base64_decode($image['data']));

        return new Response($fp, 200, ['Content-Type' => $image['media_type']]);
    }
}
