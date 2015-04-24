<?php namespace App\Http\Middleware;

use Closure;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Language
 *
 * @author helingen
 */
class Language {
    //put your code here
    
    public function handle($request, Closure $next)
{
    if(!\Session::has('locale'))
    {
       \Session::put('locale', \Config::get('app.locale'));
    }

    app()->setLocale(\Session::get('locale'));

    return $next($request);
}
}
