<?php

namespace Interop\Routing\Route;

final class Requirements implements RequirementsInterface
{
    private ?string $scheme, $host, $port;

    public function __construct(string $scheme = null, string $host = null, string $port = null)
    {
        $this->scheme = $scheme;
        $this->host = $host;
        $this->port = $port;
    }

    public function getScheme(): ?string
    {
        return $this->scheme;
    }

    public function getHost(): ?string
    {
        return $this->host;
    }

    public function getPort(): ?string
    {
        return $this->port;
    }
}
