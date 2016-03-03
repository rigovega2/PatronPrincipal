@extends('layouts.principal')

@section('content')
    
<div class="panel panel-primary">
<div class="panel-heading">
 	 	Titulo del panel
 	 </div>
 	 <div class="panel-body">
 	 	<p>Cuepor del panel</p>
 	 	<a href="../main/modaltest" class="btn btn-primary" data-modal="">Test modal pequeño</a>
 	 	<a href="../main/modaltest" class="btn btn-primary" data-modal="modal-lg">Test modal grande</a>

 	 	<a href="../main/modalformulario" class="btn btn-primary" data-modal="">Test modal formulario</a>


 	 	<?php

require_once 'lib/Kendo/Autoload.php';
?>

<?php
$datePicker = new \Kendo\UI\DatePicker('datepicker');

$datePicker->value(new DateTime('10/10/2011', new DateTimeZone('UTC')))
           ->attr('style', 'width: 100%');

echo $datePicker->render();
?>

 	 	
 	 </div>
  	 <div class="panel-footer">
  	 	el footer del panel
  	 </div>
</div>

@endsection