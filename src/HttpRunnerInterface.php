<?php

declare(strict_types=1);

namespace Klax\Http\Runner\Contract;

use Psr\Http\Message\ServerRequestInterface;

interface HttpRunnerInterface
{
    public function run(ServerRequestInterface $request): void;
}
