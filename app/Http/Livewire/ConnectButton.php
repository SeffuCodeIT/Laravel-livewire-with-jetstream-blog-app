<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ConnectButton extends Component
{

    public $name;
//    we ;osten for the connected emit and fire off connect function
    protected $listeners = ['connected' => 'connect'];

    public function render()
    {
        return view('livewire.connect-button');
    }

//    public function connect($firstName,$lastName){
////        dd('Connected');
//        dd($firstName, $lastName);
//    }

    public function connect(){
        dd('Connected event listener received');
//        $this->emit('Connected');
    }
}
