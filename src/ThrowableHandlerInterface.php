<?php

declare(strict_types=1);

namespace Klax\Http\Runner\Contract;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Throwable;

interface ThrowableHandlerInterface
{
    public function handle(ServerRequestInterface $request, Throwable $throwable): ResponseInterface;
}
