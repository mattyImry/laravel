@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5"> 
            <img src="https://cdn.dribbble.com/users/3547568/screenshots/14395014/media/0b94c75b97182946d495f34c16eab987.jpg?compress=1&resize=400x300&vertical=top" alt="" class="rounded-circle" style="height: 200px"> 
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>23K</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div> {{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>

    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img class="w-100"  src="https://images.pexels.com/photos/63703/pexels-photo-63703.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  >
        </div>
        <div class="col-4">
            <img class="w-100" style="height: " src="https://images.pexels.com/photos/2381596/pexels-photo-2381596.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" >
        </div>
        <div class="col-4">
            <img class="w-100" style="height: " src="https://images.pexels.com/photos/844928/pexels-photo-844928.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" >
        </div>
    </div>
</div>
@endsection 
