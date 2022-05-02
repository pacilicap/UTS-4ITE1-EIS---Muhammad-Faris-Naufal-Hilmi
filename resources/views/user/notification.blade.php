@extends('layouts.app')

@section('content')

<div class="container">    
    <div class="row">
        
        @include('layouts.sidebar_left')

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Notifications ( {{$notification->count()}} )
                    </h4>
                </div>

                <div class="card-body" style="background-color: #198754;">

                        @foreach($notification as $notify)
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
                                            {{$notify->name}}
                                        </b>
                                    </h4>
                                    <p>
                                        {{$notify->username}}
                                    </p>
                                </span>
                                <a href="{{route('accept',$notify->id)}}" class="btn btn-success">
                                    <i class="fa fa-check"></i>
                                </a>
                                <a href="{{route('reject',$notify->id)}}" class="btn btn-danger">
                                    <i class="fa fa-close"></i>
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