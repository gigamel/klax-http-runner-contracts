<?php

declare(strict_types=1);

namespace Klax\Http\Runner\Contract;

use Psr\Http\Message\ServerRequestInterface;
use Throwable;

interface EmergencyThrowableHandlerInterface
{
    public function handle(ServerRequestInterface $request, Throwable $throwable): void;
}

