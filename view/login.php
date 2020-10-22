<!DOCTYPE html>
<html lang="en">
<head>
<title>Re-Read | Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/styles.css">
<link href="../css/fontawesome-free-5.15.0-web/css/all.css" rel="stylesheet"> <!--load all styles -->
<script src='../js/code.js'></script>
</head>
<body>

<div class="row">
  <div class="column left">
    <h2 style="text-align: center; margin: 20% 0 0 0;">Re-Read</h2>
    <div class="form" style="margin:10%;">
        <form action="../controller/loginController.php" 
        method="POST" onsubmit="return validarForm()">

          <label for="email" >Email del usuario</label>
          <input type="email" id="email" name="email" placeholder="Usuario...">
          
          <label for="psswd">Contraseña</label>
          <input type="password" id="psswd" name="psswd" placeholder="Contraseña...">
          
          <input type="submit" value="Iniciar sesión" id="login">
          <div id="message"></div>

        </form>
    </div>
  </div>
  
  <div class="column right" style="background-image: url('../img/re-read-tienda.jpg'); height:100vh">

  </div>
</div>
  
</body>
</html>
