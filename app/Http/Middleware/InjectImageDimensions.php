<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class InjectImageDimensions
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($response instanceof Response) {
            $contentType = $response->headers->get('Content-Type');

            if (is_string($contentType) && str_contains($contentType, 'text/html')) {
                $content = $response->getContent();

                if ($content !== false) {
                    $content = preg_replace_callback(
                        '/<img\s(?![^>]*\bheight=)(?![^>]*\bwidth=)([^>]*)>/i',
                        static fn (array $m) => '<img height="auto" width="auto" ' . $m[1] . '>',
                        $content
                    );

                    $response->setContent($content);
                }
            }
        }

        return $response;
    }
}
