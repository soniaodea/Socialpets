<div id="editProfileModal" class="modal fade">
    <div class="modal-dialog">

    <div class="modal-content">
      <h4 id="tituloEditarUsuario" class="modal-title">Editar perfil de usuario</h4>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

  <form action="{{ route('user.update', Auth::user()->id )}}" method="post">
    @method('PATCH')
    @csrf

    <!--NOMBRE -->
  <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-6 col-md-6">
      <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}">
    </div>
    <button type="submit" class="btn btn-primary">Cambiar nombre</button>
  </div>
  <!--EMAIL -->
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-6 col-md-6">
      <input type="text" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}">
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Cambiar email</button>
  </div>
</form>
<!--PASSWORD -->
<form method="POST" action="{{ route('changePassword') }}">
  @csrf

  <div class="form-group row">
    <label for="new-password" class="col-sm-5 col-form-label col-form-label-sml">Contraseña actual</label>
    <div class="col-12 col-md-7">
      <input type="password" class="form-control" id="current-password" name="current-password" required>
      @if ($errors->has('current-password'))
          <span class="help-block">
          <strong>{{ $errors->first('current-password') }}</strong>
      </span>
      @endif
    </div>
  </div>


  <div class="form-group row{{ $errors->has('new-password') ? ' has-error' : '' }}">
      <label for="new-password" class="col-sm-5 col-form-label col-form-label-sml">Nueva contraseña</label>
      <div class="col-12 col-md-7">
          <input id="new-password" type="password" class="form-control" name="new-password" required>
          @if ($errors->has('new-password'))
              <span class="help-block">
              <strong>{{ $errors->first('new-password') }}</strong>
          </span>
          @endif
      </div>
  </div>

  <div class="form-group row">
      <label for="new-password-confirm" class="col-sm-5 col-form-label col-form-label-sml">Repetir contraseña:</label>

      <div class="col-12 col-md-7">
          <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
      </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-5">
  <button type="submit" class="btn btn-primary btn-sm">
      Cambiar
  </button>
</div>
</div>
</form>



    <form action="/profile" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  Cambiar imagen de perfil
                  <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                  <small id="fileHelp" class="form-text text-muted"></small>
                                <button type="submit" class="btn btn-primary btn-sm">Subir imagen</button>

              </div>

          </form>

          <div class="modal-body">
                              <br>
              <button class="btn btn-danger btn-sm" rel="publisher" data-toggle="modal" data-target="#deleteModal" id="hideModal">Eliminar</button>
                     
                          <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-footer">
                                      Confirmacion borrar cuenta
                                      <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
                                     

                                      <form method="post" action="{{ route('user.destroy',$user->id)}}" >
                                          @csrf
                                          @method('DELETE')

                                      </form>
                                      <button type="submit" class="btn btn-danger">Borrar</button>
                                  </div>
                              </div>
                          </div>
                      </div>
          </div>
      </div>
  </div>
</div>
</div>