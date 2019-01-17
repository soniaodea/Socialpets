<link rel="stylesheet" type="text/css" href="/css/login.css">

<div id="noticiaModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">            
                <h4 class="modal-title">Publicar noticia</h4><!--<div class="icons" id="noticia-icon"></div>-->   
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="email">
                <form method="POST" action="#" name="formulario" id="noticiaForm">
                  @csrf
                    <div class="form-group">
                         <textarea id="textoNoticia" class="form-control" name="textoNoticia" height="400" rows="6" cols="50">
                             
                         </textarea>
                    </div>    
                    <div class="form-group">
                        <button type="submit" id="boton" class="btn btn-primary btn-lg btn-block login-btn" >Publicar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div> 