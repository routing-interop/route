# routing-interop/route

## Installation

```shell
$ composer require routing-interop/route
```

## Usage

```php
<?php

use Interop\Routing\Route\RouteCollection;

$routes = (new RouteCollection)
    ->get('/blog',        [BlogController::class, 'index'])
    ->get('/blog/{slug}', [BlogController::class, 'show'])
    ->post('/blog',       [BlogController::class, 'create'])
;
```

## Thougts

- Most routing libraries use the following route declaration format:

      addRoute(<HTTP method>, <path>, <callable handler>)

- `path` can be a string, a regex, or a custom format.
  It usually contains all the variable parts or the path, the type constraints.
- Each path part is a segment (typical URI language).
- Simple string segments are static, while others are dynamic.
- Other route constraints not contained in `path`:
  - Host
  - Scheme
  - Port
- A dynamic segment can be optional and have a default value
- Using a common static prefix for a bunch of routes is very useful
- Declaring a group of routes with the same path but not the same method can be useful
- What to do when no route is matched? Wrong URI, wrong method, ...  
  It may be useful to add default workflow and responses.
- Giving a name to routes seems deprecated.
  Wait... no, it isn't: how do we generate URIs without names!?
- Content negotiation is not is the scope of routing
- Parameter conversion (from `/post/{slug}` to `controller(BlogPost $post)`) is out of scope.
