<?php

    namespace App\Providers;

    use App\Models\Household;
    use App\Models\Product;
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\ServiceProvider;

    class AppServiceProvider extends ServiceProvider
    {
        /**
         * Register any application services.
         *
         * @return void
         */
        public function register(): void {
            //
        }

        /**
         * Bootstrap any application services.
         *
         * @return void
         */
        public function boot(): void {
            Route::model('clothes', Household::class);
            Route::model('products', Product::class);
        }
    }
