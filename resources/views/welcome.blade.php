<!DOCTYPE html>
<html>
  <header>

  </header>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ url('css/login.css') }}">
  </head>
  <body>
    <div class="split left">
      <div class="centered">
        <div class="title"> 
          <img src="/images/d79a16b61de6b8760e0f8ed6c43ec2c0.png" alt="Centro de Estudios de Opinión y Análisis - SIMULE"> 
        </div>
      </div>
    </div>

    <div class="split right">
      <div class="centered">
        <form action="action_page.php" method="post">
          <div class="imgcontainer">
            <h1>SIMULE</h1>

          </div>

          <div class="container">
            <label for="uname"><b>USUARIO</b></label>
            <input type="text" placeholder="Ingresa el usuario" name="uname" required>

            <label for="psw"><b>CONTRASEÑA</b></label>
            <input type="password" placeholder="Ingresa la contraseña" name="psw" required>

            <button type="submit">INICIAR SESIÓN</button>
          </div>          

        </form>
      </div>
    </div>


  </body>
  <style>
    /* Split the screen in half */
.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Control the left side */
.left {
  left: 0;
  background-color: #00519E;
}

/* Control the right side */
.right {
  right: 0;
  background-color: white;
}

</style>
</html>