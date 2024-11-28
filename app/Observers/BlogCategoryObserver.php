<?php

namespace App\Observers;

use App\Models\BlogCategory;
use Illuminate\Support\Facades\Storage;


class BlogCategoryObserver
{
    /**
     * Handle the BlogCategory "created" event.
     */
    public function created(BlogCategory $blogCategory): void {}

    /**
     * Handle the BlogCategory "updated" event.
     */
    public function updated(BlogCategory $blogCategory): void
    {
        // Retrieve the original image path before the update
        $originalImage = $blogCategory->getOriginal('image');

        if ($originalImage && Storage::disk('public')->exists($originalImage)) {
            Storage::disk('public')->delete($originalImage);
        }
    }

    /**
     * Handle the BlogCategory "deleted" event.
     */
    public function deleted(BlogCategory $blogCategory): void
    {
        if (!empty($blogCategory->image) && Storage::disk('public')->exists($blogCategory->image)) {
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
