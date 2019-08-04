<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
// use Illuminate\Validation\Validator;  削除
use App\Http\Validators\HelloValidator;
use Illuminate\Support\Facades\Validator;  // 追加

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      Validator::extend('hello', function ($attribute, $value, $parameters, $validator) {
        return $value % 2 == 0;
      });
    }
}
