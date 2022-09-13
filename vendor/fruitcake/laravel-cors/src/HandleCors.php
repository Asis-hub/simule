<?php

namespace Fruitcake\Cors;

use Closure;
use Asm89\Stack\CorsService;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Foundation\Http\Events\RequestHandled;
use Illuminate\Http\Request;
use Illuminate\Contracts\Container\Container;
use Symfony\Component\HttpFoundation\Response;

class HandleCors
{
    public function __construct(protected CorsService $cors, protected Container $container)
    {
    }

    /**
     * Handle an incoming request. Based on Asm89\Stack\Cors by asm89
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function handle($request, Closure $next)
    {
        // Check if we're dealing with CORS and if we should handle it
        if (! $this->shouldRun($request)) {
            return $next($request);
        }

        // For Preflight, return the Preflight response
        if ($this->cors->isPreflightRequest($request)) {
            $response = $this->cors->handlePreflightRequest($request);

            $this->cors->varyHeader($response, 'Access-Control-Request-Method');

            return $response;
        }


        // Handle the request
        $response = $next($request);

        if ($request->getMethod() === 'OPTIONS') {
            $this->cors->varyHeader($response, 'Access-Control-Request-Method');
        }

        return $this->addHeaders($request, $response);
    }

    /**
     * Add the headers to the Response, if they don't exist yet.
     */
    protected function addHeaders(Request $request, Response $response): Response
    {
        if (! $response->headers->has('Access-Control-Allow-Origin')) {
            // Add the CORS headers to the Response
            $response = $this->cors->addActualRequestHeaders($response, $request);
        }

        return $response;
    }

    /**
     * Add the headers to the Response, if they don't exist yet.
     *
     * @deprecated
     */
    public function onRequestHandled(RequestHandled $event)
    {
        if ($this->shouldRun($event->request) && $this->container->make(Kernel::class)->hasMiddleware(static::class)) {
            $this->addHeaders($event->request, $event->response);
        }
    }


    /**
     * Determine if the request has a URI that should pass through the CORS flow.
     */
    protected function shouldRun(Request $request): bool
    {
        return $this->isMatchingPath($request);
    }

    /**
     * The the path from the config, to see if the CORS Service should run
     */
    protected function isMatchingPath(Request $request): bool
    {
        // Get the paths from the config or the middleware
        $paths = $this->getPathsByHost($request->getHost());

        foreach ($paths as $path) {
            if ($path !== '/') {
                $path = trim((string) $path, '/');
            }

            if ($request->fullUrlIs($path) || $request->is($path)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Paths by given host or string values in config by default
     *
     * @return array
     */
    protected function getPathsByHost(string $host)
    {
        $paths = $this->container['config']->get('cors.paths', []);
        // If where are paths by given host
        if (isset($paths[$host])) {
            return $paths[$host];
        }
        // Defaults
        return array_filter($paths, fn($path) => is_string($path));
    }
}
