<?php

namespace App\Http\Livewire\Button;

use Livewire\Component;

class Save extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                {{-- In work, do what you enjoy. --}}
                <button>Save</button>
            </div>
        blade;
    }
}
