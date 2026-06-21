<?php

declare(strict_types=1);

namespace Klax\Http\Runner\Contract;

use Psr\Http\Message\ResponseInterface;

interface SapiEmitterInterface
{
    public function emit(ResponseInterface $response): void;
}
