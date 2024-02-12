<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Exception;

class Contact extends Component
{
    public $fullName, $emailAddress, $subject, $messages;

    public function contact()
    {
    
        try {

            if (Mail::to('drdonnarae@aheadin.org')->send(new ContactMail($this->fullName, $this->emailAddress, $this->subject, $this->messages))) {
            
                session()->flash('success-message', 'Thank you for contacting us, we will get back to you shortly!');
    
                return redirect(request()->header('Referer'));
    
            }
        } catch (Exception $x) {
            
            session()->flash('error-message', 'Something went wrong. Please try again.');

        }
        
        
    }
    
    public function render()
    {
        return view('livewire.contact');
    }
}
