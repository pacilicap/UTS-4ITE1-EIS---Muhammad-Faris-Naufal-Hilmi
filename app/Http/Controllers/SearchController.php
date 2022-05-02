<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Follower;
use Auth;
class SearchController extends Controller
{
    public function search(Request $request)
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

        $searchInput = $request->input('search');

        //dd($searchInput);
        //
        $searchUsers = User::where('name','Like','%'.$searchInput. '%')->get();

        return view('search.result', compact('searchUsers','followingUser','followersUser','notification'));
    }
}
