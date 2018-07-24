<?php

namespace Divinityfound\ServicesApi\Providers;

use App;
use Illuminate\Support\ServiceProvider;

class MathisonProvider extends ServiceProvider {
   public function boot() { }

   public function register() {
      App::bind('MathisonApi',function() {
         return new Divinityfound\ServicesApi\Facades\ServiceFacade;
      });
   }
}