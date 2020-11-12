<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Category extends Component
{
    public ?string $message = null;
    public function render()
    {
        return view('livewire.dashboard.category');
    }

    public function toggle()
    {

        dd('3453434');
    }
}
