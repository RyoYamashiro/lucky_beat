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
        dd('ここ来てる');
        // TODO::いったんテストデータを増やす
        // 各ユーザーのIDをルーティングのURLに設定してDetail,Edit,Updateで呼び出せるようにする。
        //
    }
}
