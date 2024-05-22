<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
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
        // Define the view composer
        View::composer('*', function ($view) {
            // Access your data from a single place and pass it to the view
            $subCategory = SubCategory::all();
            $category = Category::all();
            $products = Product::all();
            $view->with('subCategory', $subCategory);
            $view->with('category', $category);
            $view->with('products', $products);
        });
    }
}
