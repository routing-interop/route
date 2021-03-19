<?php

namespace Interop\Routing\Route;

final class Route implements RouteInterface
{
    private PathInterface $path;
    private array $methods;
    private $handler;
    private ?string $name;
    private ?RequirementsInterface $requirements;

    public function __construct(array $methods, PathInterface $path, $handler, ?string $name = null, ?RequirementsInterface $requirements = null)
    {
        $this->methods = $methods;
        $this->path = $path;
        $this->handler = $handler;
        $this->name = $name;
        $this->requirements = $requirements;
    }

    public function getPath(): PathInterface
    {
        return $this->path;
    }

    public function getMethods(): array
    {
        return $this->methods;
    }

    public function getHandler()
    {
        return $this->handler;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getRequirements(): ?RequirementsInterface
    {
        return $this->requirements;
    }
}
