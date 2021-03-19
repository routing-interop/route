<?php

namespace Interop\Routing\Route;

interface RouteInterface
{
    public function getPath(): PathInterface;
    public function getMethods(): array;

    /**
     * It can be anything, so we don't force callable return type
     * @return mixed Mostly a callable
     */
    public function getHandler();
    public function getRequirements(): ?RequirementsInterface;
    public function getName(): ?string;
}
