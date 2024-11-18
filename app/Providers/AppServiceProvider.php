<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SiteData;
use App\Models\BlogCategory;
use App\Models\Post;
use Illuminate\Support\ServiceProvider;

use App\Observers\SiteDataObserver;
use App\Observers\CategoryObserver;
use App\Observers\ProductObserver;
use App\Observers\BlogCategoryObserver;
use App\Observers\PostObserver;

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
        SiteData::observe(SiteDataObserver::class);
        Category::observe(CategoryObserver::class);
        Product::observe(ProductObserver::class);
        BlogCategory::observe(BlogCategoryObserver::class);
        Post::observe(PostObserver::class);
        Management::observe(ManagementObserver::class);
    }
}
