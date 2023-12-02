<?php

namespace App\Http\Controllers\front\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class EditAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function __invoke(User $user)
    {
        return view('front.user.edit', ['user' => $user]);
    }
}
