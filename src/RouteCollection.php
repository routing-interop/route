<?php

namespace Interop\Routing\Route;

use ArrayIterator;
use IteratorAggregate;

class RouteCollection implements IteratorAggregate
{
    private array $routes;

    public function get(string $path, $handler, array $options = []): self
    {
        return $this->add(['GET'], $path, $handler, $options);
    }

    public function post(string $path, $handler, array $options = []): self
    {
        return $this->add(['POST'], $path, $handler, $options);
    }

    public function put(string $path, $handler, array $options = []): self
    {
        return $this->add(['PUT'], $path, $handler, $options);
    }

    public function delete(string $path, $handler, array $options = []): self
    {
        return $this->add(['DELETE'], $path, $handler, $options);
    }

    public function patch(string $path, $handler, array $options = []): self
    {
        return $this->add(['PATCH'], $path, $handler, $options);
    }

    public function options(string $path, $handler, array $options = []): self
    {
        return $this->add(['OPTIONS'], $path, $handler, $options);
    }

    public function add(array $methods, string $path, $handler, array $options = []): self
    {
        $requirements = null;
        if ($req = array_intersect_key($options, ['scheme' => null, 'host' => null, 'port' => null]) and
            $req = array_filter($req)) {
            $requirements = new Requirements($req['scheme'] ?? null, $req['host'] ?? null, $req['port'] ?? null);
        }

        $this->routes[] = new Route($methods, new Path($path), $handler, $options['name'] ?? null, $requirements);

        return $this;
    }

    /** @return Route[] */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /** @return Route[] */
    public function getIterator()
    {
        return new ArrayIterator($this->routes);
    }
}
