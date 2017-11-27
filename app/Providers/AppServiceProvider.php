<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menus = [
            [
                'label' => 'Home',
                'link'  => '/'
            ],
            [
                'label' => 'About',
                'link'  => '/'
            ], [
                'label' => 'Service',
                'link'  => '/'
            ], [
                'label' => 'Contact',
                'link'  => '/'
            ],
        ];
        $person = "Ben";

        View::share('menus', $menus);
        View::share('person', $person);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
