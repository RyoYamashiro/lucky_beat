<?php

namespace App\Http\Controllers\Front\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\User\UpdateFormRequest;
use App\Models\User;

class UpdateAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateFormRequest $request, User $user)
    {
        $user->update([
            'name' => $request->name,
        ]);
        // TODO::画像の処理も入れる。
        $user->profile()->updateOrCreate(['user_id' => $user->id], [
            'bio' => $request->bio
        ]);
        return redirect()->route('user.detail', ['user' => $user]);
        //
    }
}
