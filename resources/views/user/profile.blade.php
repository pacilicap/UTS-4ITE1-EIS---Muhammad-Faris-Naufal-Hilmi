@extends('layouts.app')

@section('content')
<div class="container">

@foreach($user as $u)
        <div class="jumbotron">
            <img src="{{asset('images/user.jpeg')}}">
            <h2>
                {{$u->name}}
            </h2>
            <p>
            {{$u->username}}
            </p>
        </div>
        

@endforeach

</div>
@endsection

<style type="text/css">
    .jumbotron{
        background: url(../images/background.jpg);
    }

    .jumbotron img{
        width: 208px;
        border-radius: 50%;
        height: 186px;
        border: 5px solid #fff;
        margin-left: 25px;
        margin-top: 25px;
    }

    .jumbotron h2, p{
        color: #f8f9fa;
        margin-left: 30px;
        margin-bottom: 0;
    }
</style>