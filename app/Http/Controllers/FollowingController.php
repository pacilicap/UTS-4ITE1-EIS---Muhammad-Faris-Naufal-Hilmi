<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Follower;
use Auth;
class FollowingController extends Controller
{
    public function allUsers()
    {
        $notification = Follower::where('followers.follow_id','=', Auth::user()->id)
                        ->join('users','users.id','=','followers.user_id')
                        ->where('status', 0)
                        ->get();

        $followersUser = Follower::where('follow_id','=', Auth::user()->id)
                        ->join('users','users.id','=','user_id')
                        ->where('status', 1)
                        ->get();

        $followingUser = Follower::where('user_id','=', Auth::user()->id)
                        ->join('users','users.id','=','follow_id')
                        ->where('status', 1)
                        ->get();

        $allUsers = User::where('id', '!=', Auth::user()->id)->get();

        return view('user.allUsers', compact('allUsers','followingUser','followersUser','notification'));
    }

    public function following($id)
    {
        $follow = New Follower;
        $follow->user_id = Auth::user()->id;
        $follow->follow_id = $id;
        $follow->save();

        return back();
    }

    public function notification()
    {
        $followersUser = Follower::where('follow_id','=', Auth::user()->id)
                        ->join('users','users.id','=','user_id')
                        ->where('status', 1)
                        ->get();

        $followingUser = Follower::where('user_id','=', Auth::user()->id)
                        ->join('users','users.id','=','follow_id')
                        ->where('status', 1)
                        ->get();

        $notification = Follower::where('followers.follow_id','=', Auth::user()->id)
                        ->join('users','users.id','=','followers.user_id')
                        ->where('status', 0)
                        ->get();

        return view('user.notification', compact('notification','followingUser','followersUser'));
    }

    public function accept($id)
    {
        Follower::where('follow_id', Auth::user()->id)
                        ->where('user_id', $id)
                        ->update(['status' => 1 ]);
        return back();
    }

    public function reject($id)
    {
        Follower::where('follow_id', Auth::user()->id)
                        ->where('user_id', $id)
                        ->delete();
        return back();
    }

    public function followingUser()
    {
        $notification = Follower::where('followers.follow_id','=', Auth::user()->id)
                        ->join('users','users.id','=','followers.user_id')
                        ->where('status', 0)
                        ->get();

        $followersUser = Follower::where('follow_id','=', Auth::user()->id)
                        ->join('users','users.id','=','user_id')
                        ->where('status', 1)
                        ->get();

        $followingUser = Follower::where('user_id','=', Auth::user()->id)
                        ->join('users','users.id','=','follow_id')
                        ->where('status', 1)
                        ->get();
        
        return view('user.followingUser', compact('followingUser','followersUser','notification'));
    }

    public function followersUser()
    {
        $notification = Follower::where('followers.follow_id','=', Auth::user()->id)
                        ->join('users','users.id','=','followers.user_id')
                        ->where('status', 0)
                        ->get();

        $followingUser = Follower::where('user_id','=', Auth::user()->id)
                        ->join('users','users.id','=','follow_id')
                        ->where('status', 1)
                        ->get();

        $followersUser = Follower::where('follow_id','=', Auth::user()->id)
                        ->join('users','users.id','=','user_id')
                        ->where('status', 1)
                        ->get();

        return view('user.followersUser', compact('followersUser','followingUser','notification'));
    }

    public function Unfollow($id)
    {
        Follower::where('user_id', Auth::user()->id)
                        ->where('follow_id', $id)
                        ->delete();
        return back();
    }
}
