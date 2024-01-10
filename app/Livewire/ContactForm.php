<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class ContactForm extends Component
{
    #[Validate]
    public $name;
    public $email;
    public $text;
    public $successMessage=false;
    protected $rules=[
        'name'=>'required',
        'email' => 'required|email',
        'text' => 'required|min:4',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
    public function send(){
        $data=$this->validate();
        $this->clearForm();
        $this->successMessage= true;
        return back();
    }
    public function clearForm(){
        $this->name='';
        $this->email = '';
        $this->text = '';
    }
}
