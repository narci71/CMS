<!DOCTYPE html>
<html lang="es">
 <?php include 'head.php' ?>
<body class="mt mb" style=" background-color: #2c3e50">
<div class="container login-form" style="margin-top: 10%">
<div class="bg-loginfoto" style="border-radius: 10px 10px 0px 0px"></div>        
  <table class="table table-dark" style="border-radius: 0px 0px 10px 10px">
  	<form id="login" name="login" method="post" action="recoge.php">
  		<input type="hidden" name="recoger" value="login">
  		<input type="hidden" name="registrado" id="registrado" value="true">
    <thead>
      <tr>
        <th><h2 style="margin: 2%">Login reBird</h2></th>
      </tr>
    </thead>
    <tbody>
    	<tr>
        <td><input id="username" type="text" class="form-control" required="required" name="username" placeholder="Username"></td>
      </tr>
      <tr>
        <td><input  id="password" type="password" class="form-control" name="password" placeholder="Password"></td>
      </tr>
      <tr>
        <td>
        	<button class="btn btn-primary btn-block login-button mt" type="submit" id="submit" name="submit">Login</button>
		</td>
      </tr>
      <tr class="bg-secondary">
        <td><a href="login2.php" class="login-forgot">--> Registrarte <--</a></td>
      </tr>
       <tr>
        <td><button onclick="olvidada()" class="btn btn-primary btn-block login-button mt">¿Has sido tan inútil de olvidar la contraseña?</button></td>
      </tr>
       <tr>
      	<td><input  id="npassword" type="password" class="form-control" name="npassword" placeholder="Escriba aquí una nueva contraseña si la ha olvidado."></td>
      </tr>
    </tbody>
	</form>
  </table>
</div>
<script type="text/javascript">
	function olvidada(){
		document.getElementById('registrado').value='olvido';
		document.login1.submit();
	}
</script>
</body>
</html>