<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('custom_date_format', function ($attribute, $value, $parameters, $validator) {
            try {
                Carbon::createFromFormat('d/m/Y', $value);
                return true;
            } catch (\Exception $e) {
                return false;
            }
        });
    
        Validator::replacer('custom_date_format', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'Format tanggal pada :attribute harus dd/mm/yyyy.');
        });
    }
}
