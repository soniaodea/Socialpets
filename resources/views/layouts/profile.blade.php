<div class="container">

  <div class="box">
    <h3>{{ Auth::user()->name }}</h3>
    <div class="box-sub">
      <div class="avatar">
      <img src="/storage/avatars/{{ $user->avatar }}" />
    </div>
    </div>
    <p>Raza: {{ Auth::user()->race }}</p>
    @if(Auth::user()->age > 1)
    <p>Edad: {{ Auth::user()->age }} años</p>
    @else
    <p>Edad: {{ Auth::user()->age }} año</p>
    @endif
    <p>Sexo: {{ Auth::user()->gender == 1 ? 'Femenino' : 'Masculino'}}</p>
     <a class="btn btn-light btn-sm" rel="publisher" data-toggle="modal" data-target="#editProfileModal"><i class="fa fa-cogs iconEditProfile"></i></a>
  </div>