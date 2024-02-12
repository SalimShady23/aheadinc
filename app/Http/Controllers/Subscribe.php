<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribers;

class Subscribe extends Controller
{
    public function store(Request $request)
    {
        $subscriber = new Subscribers;
        $subscriber->email = strtoupper($request->input('email'));

        if ($subscriber->save()) {

            session()->flash('success-message', 'You have joined AHEAD Inc. as our subscriber. You will be receiveing newsletters!');

            return redirect('/');
        }
    }
}
