<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Follower;
use Auth;

class ProfileController extends Controller
{
    public function profile(User $user)
    {
        //dd($user);
            $notification = Follower::where('followers.follow_id','=', Auth::user()->id)
                            ->join('users','users.id','=','followers.user_id')
                            ->where('status', 0)
                            ->get();

            $user = User::find($user);

            return view('user.profile', compact('user','notification'));
    }
}
