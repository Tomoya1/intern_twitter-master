@if(Auth::user()->isFollowing($user))
<form action="{{$user->url_name}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <button type="submit" class="btn btn-outline-danger btn-md following" style="width: 7rem;">
        <span>フォロー中</span>
        <span>解除</span>
    </button>
</form>
@else
<form action="{{$user->url_name}}" method="POST">
    {{ csrf_field() }}

    <button type="submit" class="btn btn-outline-primary btn-md">フォローする</button>
</form>
@endif