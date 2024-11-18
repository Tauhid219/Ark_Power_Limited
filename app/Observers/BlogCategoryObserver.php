<?php

namespace App\Observers;

use App\Models\BlogCategory;
use Illuminate\Support\Facades\Storage;


class BlogCategoryObserver
{
    /**
     * Handle the BlogCategory "created" event.
     */
    public function created(BlogCategory $blogCategory): void
    {
        
    }

    /**
     * Handle the BlogCategory "updated" event.
     */
    public function updated(BlogCategory $blogCategory): void
    {
        if (! is_null($blogCategory->image)) {
            Storage::disk('public')->delete($blogCategory->image);
        }
    }

    /**
     * Handle the BlogCategory "deleted" event.
     */
    public function deleted(BlogCategory $blogCategory): void
    {
        if (! is_null($blogCategory->image)) {
            Storage::disk('public')->delete($blogCategory->image);
        }
    }

    /**
     * Handle the BlogCategory "restored" event.
     */
    public function restored(BlogCategory $blogCategory): void
    {
        //
    }

    /**
     * Handle the BlogCategory "force deleted" event.
     */
    public function forceDeleted(BlogCategory $blogCategory): void
    {
        //
    }
}
