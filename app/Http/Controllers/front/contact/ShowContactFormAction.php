<?php

namespace App\Http\Controllers\front\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowContactFormAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('front.contact.index');
    }
}
