<?php

namespace Divinityfound\ServicesApi\Providers;

use App;
use Illuminate\Support\ServiceProvider;

class MathisonProvider extends ServiceProvider {
   public function boot() { }

   public function register() {
		$this->app->singleton('service'), function() {
			return new Service();
		});

		$this->app->alias('service', Service::class);
   }
}