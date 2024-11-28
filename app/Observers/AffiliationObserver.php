<?php

namespace App\Observers;

use App\Models\Affiliation;

use Illuminate\Support\Facades\Storage;


class AffiliationObserver
{
    /**
     * Handle the Affiliation "created" event.
     */
    public function created(Affiliation $affiliation): void
    {
        //
    }

    /**
     * Handle the Affiliation "updated" event.
     */
    public function updated(Affiliation $affiliation): void
    {
        $originalImage = $affiliation->getOriginal('image'); // Fetch the original image before the update.

        if ($originalImage && Storage::disk('public')->exists($originalImage)) {
            Storage::disk('public')->delete($originalImage);
        }
    }

    /**
     * Handle the Affiliation "deleted" event.
     */
    public function deleted(Affiliation $affiliation): void
    {
        if (!empty($affiliation->image) && Storage::disk('public')->exists($affiliation->image)) {
            Storage::disk('public')->delete($affiliation->image);
        }
    }

    /**
     * Handle the Affiliation "restored" event.
     */
    public function restored(Affiliation $affiliation): void
    {
        //
    }

    /**
     * Handle the Affiliation "force deleted" event.
     */
    public function forceDeleted(Affiliation $affiliation): void
    {
        //
    }
}
