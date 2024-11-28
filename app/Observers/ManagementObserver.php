<?php

namespace App\Observers;

use App\Models\Management;

use Illuminate\Support\Facades\Storage;


class ManagementObserver
{
    /**
     * Handle the Management "created" event.
     */
    public function created(Management $management): void
    {
        //
    }

    /**
     * Handle the Management "updated" event.
     */
    public function updated(Management $management): void
    {
        if ($management->isDirty('featured_image')) {
            $originalImage = $management->getOriginal('featured_image');

            if ($originalImage && Storage::disk('public')->exists($originalImage)) {
                Storage::disk('public')->delete($originalImage);
            }
        }
    }

    /**
     * Handle the Management "deleted" event.
     */
    public function deleted(Management $management): void
    {
        if (!empty($management->featured_image) && Storage::disk('public')->exists($management->featured_image)) {
            Storage::disk('public')->delete($management->featured_image);
        }
    }

    /**
     * Handle the Management "restored" event.
     */
    public function restored(Management $management): void
    {
        //
    }

    /**
     * Handle the Management "force deleted" event.
     */
    public function forceDeleted(Management $management): void
    {
        //
    }
}
