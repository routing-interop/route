<?php

namespace Interop\Routing\RouteDefinition;

final class Path implements PathInterface
{
    private string $raw;

    public function __construct(string $raw)
    {
        $this->raw = $raw;
    }

    public function getRaw(): string
    {
        return $this->raw;
    }
}
