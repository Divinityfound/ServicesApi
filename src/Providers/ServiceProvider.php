<?php

namespace Divinityfound\ServicesApi\Providers;

use App;
use Illuminate\Support\ServiceProvider;

class ServiceProvider extends ServiceProvider {
   public function boot() { }

   public function register() {
      App::bind('MathisonService',function() {
         return new Divinityfound\ServicesApi\Facades\ServiceFacade;
      });
   }
}