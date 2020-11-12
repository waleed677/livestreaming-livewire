<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Dashboard extends Component
{
    public ?string $message = null;
    public bool $switch = false;
    public function render()
    {
        return view('livewire.dashboard.dashboard');
    }

    public function toggle()
    {

        $this->switch = !$this->switch;
    }
}
