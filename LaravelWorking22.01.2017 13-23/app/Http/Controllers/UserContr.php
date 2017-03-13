<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserContr extends Controller
{
    public function pay(Request $request,$id){
        $user = User::find($id);
        $user->paid = $request->paid;
        $user->save();
        return redirect("home")->with('status', 'Successfully paid');

    }
}
