@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card" style="margin-bottom: 20px;">
        <div class="card-header">
            Search Result
        </div>
    </div>
    
    <div class="row">

        @include('layouts.sidebar_left')

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Search result for: <b>{{Request::get('search')}}</b>
                    </h4>
                </div>

                <div class="card-body" style="background-color: #198754;">
                    @if(count($searchUsers)>0)
                        @foreach($searchUsers as $user)
                    <div class="col-md-4">
                        <div class="box-card">
                            <img src="{{asset('images/background.jpg')}}" style="width: 100%">

                            <div class="card-footer">
                                <div class="profile-result">
                                    <img src="{{asset('images/user.jpeg')}}">
                                </div>

                                <span>
                                    <h4 class="card-title" style="margin-bottom: 0;">
                                        <b>
                                            {{$user->name}}
                                        </b>
                                    </h4>
                                    <p>
                                        {{$user->username}}
                                    </p>
                                </span>

                                <div class="button_bg d-grid">
                                    <a href="{{route('profile',$user->name)}}" class="btn btn-default btn-block">
                                        Show Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                        @endforeach
                    @else
                        no result!
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection


<style type="text/css">

    .profile-result img
    {
        width: 27%;
        border-radius: 50%;
        height: 50px;
        border: 2px solid #fff;
        margin-left: 5%;
    }

    .profile-result
    {
        margin-top: -38px;
    }

    .box-card
    {
        box-shadow: 0 1px 4px #888888;
        background-color: #f8f9fa;
        margin: 15;
    }

    .button_bg a
    {
        background-color: #39393c;
        color: #fff;
    }




</style>