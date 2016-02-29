
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vocabulario</title>

    <!-- Bootstrap Core CSS -->
    {!!Html::style('css/bootstrap.min.css')!!}
    
    <!-- MetisMenu CSS -->
    {!!Html::style('css/metisMenu.min.css')!!}

    <!-- Timeline CSS -->
    {!!Html::style('css/timeline.css')!!}
    
    <!-- Custom CSS -->
    {!!Html::style('css/sb-admin-2.css')!!}

    <!-- Custom Fonts -->
    {!!Html::style('css/font-awesome.min.css')!!}
    
    <!-- Kendo-->
    {!!Html::style('css/kendo/kendo.common.min.css')!!}
    {!!Html::style('css/kendo/kendo.bootstrap.min.css')!!}
    

    <!-- jQuery -->
    {!!Html::script('js/jquery.min.js')!!}

    <!-- Bootstrap Core JavaScript -->
    {!!Html::script('js/bootstrap.min.js')!!}

    <!-- Metis Menu Plugin JavaScript -->
    {!!Html::script('js/metisMenu.min.js')!!}
    
    <!-- Morris Charts JavaScript -->
    {!!Html::script('js/raphael-min.js')!!}

    <!-- Custom Theme JavaScript -->
    {!!Html::script('js/sb-admin-2.js')!!}
     
     
    <!--kendojs -->
    {!!Html::script('js/kendo/kendo.all.min.js')!!}
    {!!Html::script('js/kendo/cultures/kendo.culture.es-ES.min.js')!!}
    

    <script type="text/javascript">
     kendo.culture("es-ES");
    </script>

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>




    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Vocabulario</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                @include('layouts.menutop')
                
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        @include('layouts.menulateral')
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
          <br/>
           <div class="col-md-12">
                   @yield('content') 
           </div>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   <!-- Modal Bootstrap-->
    <div id='modalBs' class='modal fade bs-example-modal-lg'>
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>

   
   {!!Html::script('js/inicio.js')!!}  
  

    @yield('scripts')

</body>

</html>
