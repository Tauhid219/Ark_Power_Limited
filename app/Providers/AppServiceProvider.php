<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Sitedata;
use App\Models\BlogCategory;
use App\Models\Post;
use Illuminate\Support\ServiceProvider;

use App\Observers\SitedataObserver;
use App\Observers\CategoryObserver;
use App\Observers\ProductObserver;
use App\Observers\BlogCategoryObserver;
use App\Observers\PostObserver;

use Illuminate\Support\Facades\URL;

use App\Models\Management;
use App\Observers\ManagementObserver;

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
        Sitedata::observe(SitedataObserver::class);
        Category::observe(CategoryObserver::class);
        Product::observe(ProductObserver::class);
        BlogCategory::observe(BlogCategoryObserver::class);
        Post::observe(PostObserver::class);
        Management::observe(ManagementObserver::class);

        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }
    }
}
