<div class="profile-header" style="background-image: url({{ asset('images/iceland.jpg') }})">
    <div class="container">
        <div class="container-inner">
            <img class="rounded-circle media-object" src="{{ asset($user->avatar) }}">
            <h3 class="profile-header-user">{{$user->url_name}}</h3>
            <p class="profile-header-bio">{{$user->description}}</p>
        </div>
    </div>

    <nav class="profile-header-nav" id="profile-header">
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    ツイート
                    <strong class="d-block">{{$user->tweets()->count()}}</strong>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    フォロー
                    <strong class="d-block">{{$user->following()->count()}}</strong>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    フォロワー
                    <strong class="d-block">{{$user->followers()->count()}}</strong>
                </a>
            </li>
        </ul>
    </nav>
</div>

