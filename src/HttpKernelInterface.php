<?php

declare(strict_types=1);

namespace Klax\Http\Runner\Contract;

interface HttpKernelInterface
{
    public function loadRoutes(array $files): static;
}
