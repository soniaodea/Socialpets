<link rel="stylesheet" type="text/css" href="/css/login.css">

<div id="registroModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar">
                    <img src="/img/avatar.png" alt="Avatar">
                </div>              
                <h4 class="modal-title">{{ __('Registro') }}</h4>   
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="email">
                <form method="POST" action="{{ url('register') }}" name="registerForm" id="registerForm">
                  @csrf
                  <div class="form-group">
                        <i class="icons" id="name-icon"></i>
                         <input type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nombre">
                         @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                         
                    </div>
                    <div class="form-group">
                        <i class="icons" id="email-icon"></i>
                         <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email">
                         @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                         
                    </div>
                    <div class="form-group">
                        <i class="icons" id="password-icon"></i>
                        <input type="password" id="password_register" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña">
                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif 
                    </div> 
                    <div class="form-group">
                        <i class="icons" id="password-icon"></i>
                        <input type="password" id="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="Confirma la contraseña">
                         @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif 

                    </div>       
                    <div class="form-group">
                        <button type="submit" id="boton" class="btn btn-primary btn-lg btn-block login-btn" >Registrarse</button>
                    </div>
                </form>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#"  data-toggle="modal" data-target="#loginModal" data-dismiss="modal" aria-hidden="true">Ya estas logueado?</a>
            </div>
        </div>
    </div>
</div>
<!--<script src="/js/loginRegisterValidator.js"></script>   
<script src="/js/jquery.validate.js"></script>   -->
