@extends('layouts.app')

@section('content')

<div class="container">    
    <div class="row">
        
        @include('layouts.sidebar_left')

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Following ( {{$followingUser->count()}} )
                    </h4>
                </div>

                <div class="card-body" style="background-color: #198754;">

                        @foreach($followingUser as $following)
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
                                            {{$following->name}}
                                        </b>
                                    </h4>
                                    <p>
                                        {{$following->username}}
                                    </p>
                                </span>
                                <a href="{{route('unfollow',$following->id)}}" class="btn btn-danger d-grid d-md-block">
                                    <i class="fa fa-close" aria-hidden="true">
                                    </i>
                                    Unfollow
                                </a>
                            </div>
                        </div>
                    </div>

                        @endforeach
                    

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