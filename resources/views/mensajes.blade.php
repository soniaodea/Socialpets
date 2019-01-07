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

  </head>


    
  <body id="page-top">
    <!-- NavBar -->
    @include("layouts.navbar")
<section id="socialpets" class="about-section text-center">

<div class="container">
    <div class="row">
        
        <div class="panel panel-default widget">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-comment"></span>
                <h1 class="panel-title">Mensajes</h1>
            
                    
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            @foreach($mensajes as $mensaje)
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <div class="mic-info">
                                        De: <a href="#">{{ $mensaje->id_sender }}</a>
                                    </div>
                                </div>
                                <div class="comment-text">
                                    {{ $mensaje->texto }}
                                </div>
                            @endforeach
                               
                        
    <a  href="#" class="btn btn-sm btn-hover btn-primary" href="#reply" ><span class="glyphicon glyphicon-share-alt" style="padding-right:3px;"></span>Reply</a>
      <a href="#" class="btn btn-sm btn-hover btn-danger"><span class="glyphicon glyphicon-remove" style="padding-right:3px;"></span>Delete</a>
      
                              
                            </div>
                        </div>
                    </li>
                </ul>
                
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
  </body>
<footer class="bg-black small text-center text-white-50">
      <div class="container">
         
        Copyright &copy; Social Pets 2018
      </div>
</footer>
</html>