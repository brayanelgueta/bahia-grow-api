<?php
namespace App\Http\Middleware;

use Closure;

class CorsMiddleware{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     **/
    public function handle($request, Closure $next){
        if ($request->isMethod('OPTIONS')) {
            $response = response('{"method":"OPTIONS"}', 200);
        } else {
            $response = $next($request);
        }

        $response->headers->set('Access-Control-Allow-Methods', 'HEAD, GET, POST, PUT, PATCH, DELETE');
        $response->headers->set('Access-Control-Allow-Headers', $request->header('Access-Control-Request-Headers'));
        $response->headers->set('Access-Control-Allow-Origin', '');
        $response->headers->set('Version', env('APP_VERSION'));
        $response->headers->set('Access-Control-Expose-Headers', 'Location, Version');



        return $response;
    }
}