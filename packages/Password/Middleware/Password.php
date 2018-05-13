<?php

namespace Luce\Package\Password\Middleware;

use ObjectivePHP\Application\Session\Session;
use ObjectivePHP\Middleware\Action\PhtmlAction\PhtmlAction;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Class Password
 *
 * @package Luce\Package\Password\Middleware
 */
class Password extends PhtmlAction
{
    /**
     * {@inheritdoc}
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $session = new Session();

        $message = '';

        if ($request->getMethod() == 'POST') {
            $password = $request->getParsedBody()['password'] ?? null;

            if ($password == $this->getApplication()->getConfig()->get('application.password')) {
                $session->set('password', $password);

                return $this->redirect('/');
            }

            $message = 'Ceci n\'est pas le mot de passe !';
        }

        if ($session->get('password') != $this->getApplication()->getConfig()->get('application.password')) {
            return $this->render(['message' => $message]);
        }

        return $handler->handle($request);
    }
}
