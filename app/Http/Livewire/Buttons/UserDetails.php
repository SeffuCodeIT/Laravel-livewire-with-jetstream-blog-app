<?php

namespace App\Http\Livewire\Buttons;

use Livewire\Component;

class UserDetails extends Component
{

//    public $firstName = 'Seffu';
//    public $lastName = 'kamau';
//    private $firstName = 'Seffu';
//    protected $firstName = 'Seffu';

public $firstName
;
public $lastName;
    public $selectedLastName;


    public function onSubmit()
    {
        $this->lastName = $this->selectedLastName;
    }



//public function mount(){
////    $this->firstName = 'John';
////    $this->lastName = 'Doe';
//
//    $this->fill([
//        'firstName' => 'Kioi',
//        'lastName' => 'Wakama'
//    ]);
//}
    public function render()
    {
        return view('livewire.buttons.user-details', [
            //private and protected variables have to be passed in here
//            'firstName' => $this->firstName
        ]);
    }
}
