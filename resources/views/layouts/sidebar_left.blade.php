<div class="col-md-3">
    <div class="card">
        <img src="{{asset('images/background.jpg')}}" style="width: 100%">

        <div class="card-footer">
            <div class="profile-result">
                <img src="{{asset('images/user.jpeg')}}">
            </div>

            <span>
                <h4 class="card-title" style="margin-bottom: 0;">
                    <b>
                        {{ Auth::user()->name }}
                    </b>
                </h4>
                <p>
                {{ Auth::user()->username }}
                </p>
            </span>
            <div class="button_bg">
                <a href="{{route('followingUser')}}" class="btn btn-default btn-sm">
                    Following ( {{$followingUser->count()}} )                
                </a>
                <a href="{{route('followersUser')}}" class="btn btn-default btn-sm">
                    Followers ( {{$followersUser->count()}} )
                </a>
            </div>
        </div>
    </div>
</div>