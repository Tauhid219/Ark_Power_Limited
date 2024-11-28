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
        $fields = ['logo', 'white_logo', 'favIcon'];

        foreach ($fields as $field) {
            if ($sitedata->isDirty($field)) {
                $originalFile = $sitedata->getOriginal($field);

                if ($originalFile && Storage::disk('public')->exists($originalFile)) {
                    Storage::disk('public')->delete($originalFile);
                }
            }
        }
    }

    /**
     * Handle the Sitedata "deleted" event.
     */
    public function deleted(Sitedata $sitedata): void
    {
        $fields = ['logo', 'white_logo', 'favIcon'];

        foreach ($fields as $field) {
            $file = $sitedata->{$field};

            if (!empty($file) && Storage::disk('public')->exists($file)) {
                Storage::disk('public')->delete($file);
            }
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
