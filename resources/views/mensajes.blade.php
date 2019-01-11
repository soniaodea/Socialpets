<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/img/favicon (3).ico" />
    <link rel="stylesheet" type="text/css" href="/css/feed.css">

    <title>Social Pets Home</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  </head>


    
  <body id="page-top">
    <!-- NavBar -->
    @include("layouts.navbar")
<section id="socialpets" class="about-section text-center">
<br>
<div class="container">
    <div class="row">
        <div class="panel panel-default widget">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-comment"></span>
                <h1 class="panel-title">Mensajes Recibidos</h1>
            </div>
            <div class="row">
            </div>
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Mensajes</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    @foreach($mensajes as $mensaje)
                        <tr>
                            <td>{{ $mensaje->id_sender }}</td>
                            <td>{{ $mensaje->text }}</td>
                        </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
	<div class="row">
		<div class="panel panel-default">
        <div class="panel-heading clearfix">
          <h3 class="panel-title">Enviar Mensaje</h3>
        </div>
        <div class="panel-body">
            <form action="{{ route('user.store') }}" id="mensajeForm" class="mensajeForm" method="post">
                @csrf
                <div class="form-group">
                  <label class="col-sm-2" for="receiver">Destinatario:</label>
                  <div class="col">
                  <select name="receiver" id="receiver">
                      @foreach($users as $user)
                            @if ( $user->id != Auth::user()->id)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endif
                      @endforeach
                      </select>
                </div>
                <div class="form-group">
                  <label class="col-sm-12" for="text">Mensaje:</label>
                  <textarea class="col" name="text" id="text" cols="30" rows="10"></textarea>            
                </div>
                <button type="submit" class="btn">Enviar</button>
            </form>
        </div>
      </div>
	</div>
</div>
</div>

</section>

    <!-- Footer -->  

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
    </script>
  </body>
<footer class="bg-black small text-center text-white-50">
      <div class="container">
         
        Copyright &copy; Social Pets 2018
      </div>
</footer>
</html>
