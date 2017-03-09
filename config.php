<?php
if($_POST){
  file_put_contents('config.txt', json_encode($_POST));

}
$datos=json_decode(file_get_contents('config.txt'),1);




 ?>
<html>

<script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




  <head>
    <title> Configuracion</title>
  </head>

  <body>
    <header>
  		<div class="alert alert-info" ><center>
  			<h3>Configurar tiempo</h3></center> </div></header>

    <form  class="text-center"method="post" action="">
<div class="form-group ">
          <label>Tiempo en Verde:</label> <input value="<?php echo $datos['verde'];?>"type="text" name="verde" />
</div>
<div class="form-group">

        <label>Tiempo en Rojo:</label>   <input value="<?php echo $datos['rojo'];?>"type="text" name="rojo" />
</div>
<div class="form-group">
      <button  class="btn btn-primary"type="submit">Guardar</button>
          <a href="index.php" class="btn btn-info">Volver</a>
    </div>

      </form>





  </body>

</html>
