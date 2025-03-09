<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserFormController extends Controller
{
    // Display the form
    public function create()
    {
        return view('user-form');
    }

    public function store(UserRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('thankyou');
    }
}
