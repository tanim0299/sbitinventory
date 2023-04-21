<?php

namespace App\Providers;

use App\Helpers\MenuHelper;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $menus = MenuHelper::Menu();

        if (!empty($menus)){
            View::composer('*', function ($view) use ($menus) {
                $view->with(['side_menus' => $menus]);
            });
        }

        Paginator::useBootstrapFive();
    }
}
