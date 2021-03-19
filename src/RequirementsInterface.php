<?php

namespace Interop\Routing\RouteDefinition;

interface RequirementsInterface
{
    public function getScheme(): ?string;
    public function getHost(): ?string;
    public function getPort(): ?string;
}
