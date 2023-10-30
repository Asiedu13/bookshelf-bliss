<?php

namespace App\Livewire\Registration;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.form')]
class SignUp extends Component
{   
    #[Rule('required')]
    public $fullName = '';

    #[Rule('required')]
    public $email = '';

    public $password = '';


    #[Title('Bookshelf | Register')]
    public function render()
    {
        return view('livewire.registration.sign-up');
    }
}
