<?php

namespace Interop\Routing\Route;

interface RequirementsInterface
{
    public function getScheme(): ?string;
    public function getHost(): ?string;
    public function getPort(): ?string;
}
