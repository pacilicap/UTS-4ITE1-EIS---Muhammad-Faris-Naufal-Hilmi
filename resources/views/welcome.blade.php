@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
           @include('layouts.sidebar_left')
        <div class="col-md-6">
             <div class="card">         
         <div class="card-body" style="background-color:lavenderblush;">
        <form action="#" method="post">
                 {{csrf_field()}}
        <div class="form-group">
         <textarea type="text" name="description" class="form-control" placeholder="What is happening?"></textarea>
        </div>
        <button class="btn btn-primary pull-right" type="submit">Post</button>
        </form>

        <div class="button-icon">
           <i class="fa fa-picture-o"></i>
           <i class="fa fa-map-marker"></i>
        </div>
        </div>
         </div>

        <div class="card">
            <div class="card-body">
            <div class="col-md-2 timeline-profile">
                <img class="card-img-top" src="{{asset('images/user.jpeg')}}" alt="Card image cap">
            </div>
            <div class="dropdown">
              <span class="btn btn-sm dropdown-toggle pull-right" type="button" data-toggle="dropdown"> 
              <span class="caret"></span></span>
              <ul class="dropdown-menu pull-right" style="margin-top: 40px;">
                <li><a href="user/{{ Auth::user()->name }}">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </div>
            <div class="col-md-6">
             <b>Licap</b>
            </div>
             <div class="col-md-10">
             <p>Ih apaan si</p>

             <div class="card-footer likecomment">
                <i class="fa fa-comment-o"></i>
                 <i class="fa fa-heart-o"></i>

             </div>
            </div>
          </div> 
        </div>
               <div class="card">
            <div class="card-body">
            <div class="col-md-2 timeline-profile">
                <img class="card-img-top" src="{{asset('images/user.jpeg')}}" alt="Card image cap">
            </div>
            <div class="dropdown">
              <span class="btn btn-sm dropdown-toggle pull-right" type="button" data-toggle="dropdown"> 
              <span class="caret"></span></span>
              <ul class="dropdown-menu pull-right" style="margin-top: 40px;">
                <li><a href="user/{{ Auth::user()->name }}">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </div>
            <div class="col-md-6">
             <b>Licap</b>
            </div>
             <div class="col-md-10">
             <p>lahh</p>
               <div class="card-footer likecomment">
                <i class="fa fa-comment-o"></i>
                 <i class="fa fa-heart-o"></i>

             </div>
            </div>
        </div> 
        </div>
        </div>
            <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
            <div class="sidebar_right">
                <div class="sidebar_right_follow">
                    <div class="col-md-4" style="padding: 0;">
                            <img class="card-img-top" src="{{asset('images/user.jpeg')}}" alt="Card image cap">
                    </div>
                    <div class="col-md-8" style="padding-left: 0;">
                  <span style="margin-bottom: 0"><b>Pala</b></span><br>             
                <span>@pala</span>
                <a href="#" class="btn btn-success btn-sm">follow</a>
                    </div>
            </div>
            </div>
            </div>
            <div class="card-body">
            <div class="sidebar_right">
                <div class="sidebar_right_follow">
                  <div class="col-md-4" style="padding: 0;">
                      <img class="card-img-top" src="{{asset('images/user.jpeg')}}" alt="Card image cap">
                    </div>
                    <div class="col-md-8" style="padding-left: 0;">
                  <span style="margin-bottom: 0"><b>Lapa </b></span><br>             
                <span>@lapa</span><br>
                <a href="#" class="btn btn-success btn-sm">follow</a>
                    </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection


<style type="text/css">
    body {
    background-color: #e6ecf0;
        } 
   .profile-result{
    margin-top: -38px;
        }
    .profile-result img{
    width: 27%;
    border-radius: 50%;
    height: 63px;
    border: 2px solid #fff;
    }
   .box-card{
     box-shadow: 0 1px 4px #888888;
   }
    .button-icon i{
    padding-right: 24px;
    font-size: 20px;
  }
    .sidebar_right img{
        width: 76%;
    border-radius: 50%;
    height: 56px;
        margin-right: 7px;
    }
    .button_bg a{
    background-color: #39393c;
    color: #fff;
    }
    .timeline-profile img{
    width: 100%;
    border-radius: 50%;
    height: 56px;
    }
    .likecomment i{
    padding-right: 23px;
    }
</style> 