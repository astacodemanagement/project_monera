<?php

namespace App\Providers;

use App\Models\MenuGroup;
use App\Models\Product;
use App\Models\Profil;
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
        $profil = Profil::first();
        View::share('profil', $profil);



        $menus = MenuGroup::with(['items' => function ($query) {
            $query->where('status', 'Aktif');
        }])->where('status', 'Aktif')->get();

        View::share('menus', $menus);

        // Query produk dengan stok kurang dari reminder
        $lowStockProducts = Product::whereColumn('stock', '<', 'reminder')->get();
        View::share('lowStockProducts', $lowStockProducts);
    }
}
