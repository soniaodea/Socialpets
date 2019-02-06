@extends('layouts.feed_master')
@section('title', 'Favoritos')
@section('content')

<style>
.container p{
    margin-top:-5%;
}
</style>

<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="container" id="app">

 @if(Session::has('info'))
<p></p>
    <center><div class="alert alert-info" style="width: 350px;">
        <button type="button"
            class="close"
            data-dismiss="alert"
            aria-hidden="true">&times;</button>
        {!! session()->get('info') !!}
    </div></center>
@endif


@foreach($friends as $friend)
@if(Auth::user()->isFriendsWith($friend))
<div class="panel-block text-white">
 <h4 class="text-white">Perros Favoritos!</h4>
@endif
  <div class="box">
  <onlineuser v-bind:friend="{{ $friend }}" v-bind:onlineusers="onlineusers"></onlineuser>
  <h3><a href="{{route('dog.show', $friend->dog->id)}}">{{$friend->dog->name}}</a>
</h3>
    <div class="box-sub">
      <div class="{{ $friend->dog->gender == 1 ? 'avatarFemenino' : 'avatarMasculino'}}">
      @if ($friend->dog->avatar != 'user.png')
      <img src="{{ $friend->dog->avatar }}"/>
      @else
      <img src="/img/user.png"/>
      @endif
    </div>
    </div>
    <p>Dueño/a: {{$friend->dog->user->name}}</p>
    <p>Raza: {{$friend->dog->race}}</p>
    <p>Edad: {{$friend->dog->age}} {{ $friend->dog->age > 1 ? 'años' : 'año'}}</p>

    <a href="{{ route('chat.show', $friend->id) }}" class="panel-block text-white fa fa-comments"  style="justify-content: space-between"></a>

  </div>
 @endforeach
</div>
</div>
<script src="{{ mix('/js/app.js') }}"></script>
@endsection
