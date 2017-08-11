<div class="card card-profile mb-4">
    <div class="card-header bg-danger"></div>
    <div class="card-block text-center">
        <a href="{{url('profile')}}">
            <img class="avatar card-profile-img" src="{{ asset($user->avatar) }}">
        </a>

        <div class="card-title my-2">
            <a class="font-weight-bold text-inherit d-block" href="{{url('profile')}}">{{$user->display_name}}</a>
            &#64;{{$user->url_name}}
        </div>
    </div>
</div>
