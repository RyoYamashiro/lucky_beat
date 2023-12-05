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
        
        dump('UpdateAction');
        dump($user->profile);
        // TODO::メールアドレスがDBと違う場合は、認証メール送信する。
        $user->update([
            'name' => $request->name,
            // 認証メール確認するまでは更新しない。
            // 'email' => $request->email
        ]);
        $user->profile()->updateOrCreate(['user_id' => $user->id], [
            'bio' => $request->bio
        ]);
        return redirect()->route('index');
        //
    }
}
