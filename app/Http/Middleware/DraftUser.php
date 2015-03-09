<?php namespace App\Http\Middleware;

use Closure;

class draftUser {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        $draft_id = $request->segment(2);
        if( !$request->user()->isPartofDraft($draft_id) ){
            return redirect('draft');
        }

        return $next($request);
	}

}
