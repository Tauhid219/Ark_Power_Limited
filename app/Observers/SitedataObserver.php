<?php

namespace App\Observers;

use App\Models\Sitedata;

use Illuminate\Support\Facades\Storage;

class SitedataObserver
{
    /**
     * Handle the Sitedata "created" event.
     */
    public function created(Sitedata $sitedata): void
    {
        //
    }

    /**
     * Handle the Sitedata "updated" event.
     */
    public function updated(Sitedata $sitedata): void
    {
        if ($sitedata->isDirty('logo')) {
            Storage::disk('public')->delete($sitedata->getOriginal('logo'));
        }

        if ($sitedata->isDirty('white_logo')) {
            Storage::disk('public')->delete($sitedata->getOriginal('white_logo'));
        }

        if ($sitedata->isDirty('favIcon')) {
            Storage::disk('public')->delete($sitedata->getOriginal('favIcon'));
        }
    }

    /**
     * Handle the Sitedata "deleted" event.
     */
    public function deleted(Sitedata $sitedata): void
    {
        if (! is_null($sitedata->logo)) {
            Storage::disk('public')->delete($sitedata->logo);
        }

        if (! is_null($sitedata->white_logo)) {
            Storage::disk('public')->delete($sitedata->white_logo);
        }

        if (! is_null($sitedata->favIcon)) {
            Storage::disk('public')->delete($sitedata->favIcon);
        }
    }

    /**
     * Handle the Sitedata "restored" event.
     */
    public function restored(Sitedata $sitedata): void
    {
        //
    }

    /**
     * Handle the Sitedata "force deleted" event.
     */
    public function forceDeleted(Sitedata $sitedata): void
    {
        //
    }
}
