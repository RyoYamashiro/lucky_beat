<?php

namespace App\Http\Controllers\Front\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\User\UpdateEmailRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateEmailAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateEmailRequest $request, User $user)
    {
        $user->email = $request->email;
        $user->email_verified_at = null;
        $user->save();
        $user->sendEmailVerificationNotification();
        return redirect()->route('index');
        // ->with('message', 'Verification link sent!');
    }
}
