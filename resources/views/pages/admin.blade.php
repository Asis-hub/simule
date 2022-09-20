<!DOCTYPE html>
<html>
  <header>

  </header>
  <head>
    @include('includes.header')
  </head>
  <body>
    <div class="header">
      <img class="logo" src="/images/d79a16b61de6b8760e0f8ed6c43ec2c0.png" alt="CEOA"></h1>
      <a href="/">
        <span class="left"></span>
      </a>
      <h1 class="txtheader">SIMULE</h1>
    </div>

    <form action="/python/cgi-enabled/formula_muestra.py" method="POST">
    @method('PUT')
      <label for="title_datos">Datos</label>

      <label for="lb_error">Error:</label>

      <input id="lb_error" name="lb_error" type="text">

      <label for="lb_confiabilidad">Confiabilidad:</label>

      <input id="lb_confiabilidad" name="lb_confiabilidad" type="text">

      <label for="lb_p_necesaria">Proporción necesaria:</label>

      <input id="lb_p_necesaria" name="lb_p_necesaria" type="text">

      <label for="lb_p_restante">Proporción restante:</label>

      <input id="lb_p_restante" name="lb_p_restante" type="text">

      <label for="lb_estratos">Número de estratos:</label>

      <input id="lb_estratos" name="lb_estratos" type="text">

      <label for="lb_encuestadores">Número de encuestadores:</label>

      <button type="submit" class="p-4 bg-blue-400">
        Generar
    </button>

    <!-- 
      $result = \Python::run('/var/www/simule/resources/python/formula_muestra.py')
    $parameters = array('lb_error', 'lb_confiabilidad', 'lb_p_necesaria', 'lb_p_restante', 'lb_estratos', 'lb_encuestadores'):
    $result = \Python::run('/path/to/script.py', $parameters):

    -->

      <output for="lb_respuesta">{$result}</output>

    
    
</form>
    
</div>
  </body>
</html>