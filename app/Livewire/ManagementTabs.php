<?php

namespace App\Livewire;

use App\Models\Management;
use Livewire\Component;

class ManagementTabs extends Component
{
    public $activeTab = 'md'; // default tab is Managing Director
    public $managementData;

    public function mount()
    {
        $this->loadManagementData();
    }

    public function setTab($tab)
    {
        $this->activeTab = $tab;
        $this->loadManagementData();
    }

    public function loadManagementData()
    {
        $this->managementData = Management::where('designation', $this->activeTab === 'md' ? 'Managing Director' : 'Chief Executive Officer')->first();
    }

    public function render()
    {
        return view('livewire.management-tabs');
    }

    // public function setActiveTab($tab)
    // {
    //     $this->activeTab = $tab;
    // }

    // public function render()
    // {
    //     return view('livewire.management-tabs');
    // }
}
