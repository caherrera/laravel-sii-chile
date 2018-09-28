<?php
/**
 * Created by PhpStorm.
 * User: carlosherrera
 * Date: 28/9/18
 * Time: 1:29 PM
 */

namespace Caherrera\Lavsii\Providers;


use Illuminate\Support\ServiceProvider;
use sasco\LibreDTE\Sii;

class LaravelServiceProvider extends ServiceProvider {

	/**
	 * Register bindings in the container.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('App\Services\LavSiiService', function ($app) {
			return new Sii(env('MS_FACE_API_KEY1'));
		});
	}


}