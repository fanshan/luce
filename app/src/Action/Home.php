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
 * @package Showcase\Middleware
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
     * {@inheritdoc}
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        return $this->render([
            'list' => $this->birthListManager->getListGroupByCategory($request->getQueryParams()['category'] ?? null),
            'categories' => $this->birthListManager->getAllGiftCategories(),
            'selected_category' => $request->getQueryParams()['category'] ?? null
        ]);
    }
}
