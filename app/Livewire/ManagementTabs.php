<?php

namespace App\Livewire;

use App\Models\Management;
use Livewire\Component;

class ManagementTabs extends Component
{
    public $activeTab = 'first'; // default tab is firstd tab
    public $managementData;
    public $currentData;

    public function mount()
    {
        // $this->loadManagementData();

        $this->managementData = Management::take(2)->get(); // Fetch only the first two records
        $this->setTab('first'); // Set the default tab
    }

    public function setTab($tab)
    {
        $this->activeTab = $tab;
        // $this->loadManagementData();

        // Set the current data based on the active tab
        if ($tab === 'first') {
            $this->currentData = $this->managementData->first(); // First record for first data
        } elseif ($tab === 'second' && $this->managementData->count() > 1) {
            $this->currentData = $this->managementData->get(1); // Second record for second data
        } else {
            $this->currentData = null; // Handle cases where data is not available
        }
    }

    public function render()
    {
        return view('livewire.management-tabs');
    }
}
