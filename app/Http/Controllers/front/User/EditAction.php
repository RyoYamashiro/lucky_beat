<?php

namespace App\Http\Controllers\front\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        dump('あああ');
        return view('front.user.edit');
    }
}
