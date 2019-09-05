<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->app['validator']->extend('validatelatlong', function ($attribute, $value, $parameters)
        {
            foreach ($value as $v) {
                $match = preg_match('/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?),[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/', $v);

                if($match) {
                    return true;
                } else {
                    return false;
                }
            }
        });
    }
}