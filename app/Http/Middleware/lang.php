<?php

namespace App\Http\Middleware;

use Closure;

class lang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       
        
        $i = explode("/" ,$request);
        // url is $i[1] 
        $m = \LaravelLocalization::getSupportedLocales() ;

        if(array_key_exists($i[1],$m)){
            \App::setLocale($i[1]);
            return $next($request);
        }elseif($i[1] == 'admin HTTP'){
            dd(\App::getLocale());
          // return $next($request);
        }else{
            dd($i);
        }
       
    }
}
