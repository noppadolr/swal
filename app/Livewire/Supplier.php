<?php

namespace App\Livewire;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Supplier extends Component
{
    use LivewireAlert;
    public function render()
    {
        return view('livewire.supplier');
    }

    public function store(){
        $this->alert('success', 'Basic Alert');

    }
}
