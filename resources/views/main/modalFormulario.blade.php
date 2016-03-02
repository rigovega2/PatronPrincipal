<div id="NombreDelModal">
 {!!Form::open()!!}
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4> Titulo del modal</h4>
  </div>
  <div class="modal-body">
 
      <div class="form-group">
        {!!Form::label('Usuario*')!!}
        {!!Form::text('usuario',null,['class'=>'form-control'])!!}
      </div>
      <div class="form-group">
        {!!Form::label('E-mail*')!!}
        {!!Form::text('email',null,['class'=>'form-control'])!!}
      </div>
      <div class="form-group">
        {!!Form::label('Contraseña*')!!}
        {!!Form::text('contra',null,['class'=>'form-control'])!!}
      </div>
  </div>
  <div class="modal-footer">
   <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
   <input type="submit" class="btn btn-primary" value="Guardar">
 </div>
</div>
{!!Form::close()!!}


<script type="text/javascript">
  
  var modal = $('#NombreDelModal');

  $(function(){
    EventoFormularioModal(modal, onSuccess)
  });


  function onSuccess(result) {
    result = JSON.parse(result)
    console.log(result.mensaje);
  }
</script>