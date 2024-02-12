<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Volunteers;

class Volunteer extends Component
{
    public $firstName, $lastName, $emailAddress, $phoneNumber, $nationality, $address;

    public function createNewVolunteer()
    {
        $volunteer = new Volunteers;
        $volunteer->firstName = strtoupper($this->firstName);
        $volunteer->lastName = strtoupper($this->lastName);
        $volunteer->emailAddress = strtoupper($this->emailAddress);
        $volunteer->phoneNumber = $this->phoneNumber;
        $volunteer->nationality = strtoupper($this->nationality);
        $volunteer->address = strtoupper($this->address);

        if ($volunteer->save()) {

            session()->flash('success-message', 'You have joined AHEAD Inc. as a volunteer. We will contact you soon!');

            return redirect('/');
        }
    }

    public function render()
    {
        return view('livewire.volunteer');
    }
}
