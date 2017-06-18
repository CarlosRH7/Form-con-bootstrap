<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mi pagina</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<!-- 
    <div class="row">
          <div class="col-md-6 col-xs-6" id="divUno"></div>
          <div class="col-md-6 col-xs-6" id="divDos"></div>
    </div>

    <div class="row">
      <div class="col-md-3 col-xs-6 col-xs-offset-6" id="divCuatro"></div>
    </div> -->

  <div class="row">
      <div class="col-md-4 col-md-offset-4" style="margin-top:50px;">
        <form action="destino.php" method="POST">

          <div class="form-group">
            <input class="form-control" type="text" name="nombre" placeholder="Ingresa tu nombre" required="true">
          </div>

          <div class="form-group">
            <input class="form-control" type="number" name="" placeholder="Ingresa tu edad" required="true">
          </div>

          <div class="form-group">
            <input class="form-control" type="email" name="" placeholder="Ingresa tu correo" required="true">
          </div>

          <div class="form-group">
            <input class="form-control" type="password" name="" placeholder="Ingresa tu contraseña" required="true">
          </div>

          <div class="form-group">
            <input class="form-control" type="hidden" name="" value="765765765768987">
          </div>

          <div class="form-group">
            <center><button class="btn btn-success" type="submit">Entrar <span class="glyphicon glyphicon-floppy-disk"></span> </button></center>
          </div>        

        </form>
      </div>
  </div>




<!--     <h1>Hello, world!</h1>
 -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>