<!DOCTYPE html>
<html>
  <header>

  </header>
  <head>
    @include('includes.header')
    @include('includes.form')
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    
<meta content="utf-8" http-equiv="encoding">

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  </head>
  <body>
    
  <div class="header">
      <img class="logo" src="/images/d79a16b61de6b8760e0f8ed6c43ec2c0.png" alt="CEOA"></h1>
      <a href="/">
        <span class="left"></span>
      </a>
      <h1 class="txtheader">SIMULE</h1>
    </div>

    <form id="formularioPorEdad" action="/python/cgi-enabled/calculo_listanominal_rangoedad.py" method="POST">
    @method('PUT')
    <ul>
    <li>
      <label for="title_datos">Lista nominal por rangos de edad</label>
</li>

<li>

      <label for="lb_URL_ListaPorEdad">URL de Lista nominal:</label>

      <input id="lb_URL_ListaPorEdad" name="lb_URL_ListaPorEdad" type="text" required="required">

</li>

<li>
      <button type="button" class="send" id="send">
        Generar
    </button>
</li>

<li>
      <label for="title_datos">Estrato 1</label>
</li>

<li>
      <label>Lista nominal mujeres 18-24:  </label> 
      <output id="lb_ListaNominalMujeres_18_24" for="lb_ListaNominalMujeres_18_24"></output>


</li>
      <li>
      <label>Lista nominal hombres 18-24:  </label> 
      <output id="lb_ListaNominalHombres_18_24" for="lb_ListaNominalHombres_18_24"></output>

</li>

<li>
      <label for="title_datos">Estrato 2</label>
</li>

<li>
      <label>Lista nominal mujeres 25-34:  </label> 
      <output id="lb_ListaNominalMujeres_25_34"  for="lb_ListaNominalMujeres_25_34"></output>


</li>
      <li>
      <label>Lista nominal hombres 25-34:  </label> 
      <output id="lb_ListaNominalHombres_25_34" for="lb_ListaNominalHombres_25_34"></output>

</li>

<li>
      <label for="title_datos">Estrato 3</label>
</li>

<li>
      <label>Lista nominal mujeres 35-49:  </label> 
      <output id="lb_ListaNominalMujeres_35_49" for="lb_ListaNominalMujeres_35_49"></output>


</li>
      <li>
      <label>Lista nominal hombres 35-49:  </label> 
      <output id="lb_ListaNominalHombres_35_49" for="lb_ListaNominalHombres_35_49"></output>

</li>

<li>
      <label for="title_datos">Estrato 4</label>
</li>

<li>
      <label>Lista nominal mujeres 50-64:  </label> 
      <output id="lb_ListaNominalMujeres_50_64" for="lb_ListaNominalMujeres_50_64"></output>


</li>
      <li>
      <label>Lista nominal hombres 50-64:  </label> 
      <output id="lb_ListaNominalHombres_50_64" for="lb_ListaNominalHombres_50_64"></output>

</li>

<li>
      <label for="title_datos">Estrato 5</label>
</li>

<li>
      <label>Lista nominal mujeres 65 o más:  </label> 
      <output id="lb_ListaNominalMujeres_65" name ="respuesta" for="lb_ListaNominalMujeres_65"></output>


</li>
      <li>
      <label>Lista nominal hombres 65 o más:  </label> 
      <output id="lb_ListaNominalHombres_65" name ="respuesta" for="lb_ListaNominalHombres_65"></output>

</li>

<li>
      <label>Lista nominal total:  </label> 
      <output id="lb_ListaNominalCalculada" name ="respuesta" for="lb_ListaNominalCalculada"></output>

</li>

<li>
      <label for="proporcion_datos">Proporción en relación con lista nominal</label>
</li>

<li>
      <label>Proporción mujeres 18-24:  </label> 
      <output id="lb_ProporcionMujeres_18_24" for="lb_ProporcionMujeres_18_24"></output>


</li>
      <li>
      <label>Proporción hombres 18-24:  </label> 
      <output id="lb_ProporcionHombres_18_24" for="lb_ProporcionHombres_18_24"></output>

</li>

<li>
      <label>Proporción mujeres 25-34:  </label> 
      <output id="lb_ProporcionMujeres_25_34"  for="lb_ProporcionMujeres_25_34"></output>


</li>
      <li>
      <label>Proporción hombres 25-34:  </label> 
      <output id="lb_ProporcionHombres_25_34" for="lb_ProporcionHombres_25_34"></output>

</li>

<li>
      <label>Proporción mujeres 35-49:  </label> 
      <output id="lb_ProporcionMujeres_35_49" for="lb_ProporcionMujeres_35_49"></output>


</li>
      <li>
      <label>Proporción hombres 35-49:  </label> 
      <output id="lb_ProporcionHombres_35_49" for="lb_ProporcionHombres_35_49"></output>

</li>

<li>
      <label>Proporción mujeres 50-64:  </label> 
      <output id="lb_ProporcionMujeres_50_64" for="lb_ProporcionMujeres_50_64"></output>


</li>
      <li>
      <label>Proporción hombres 50-64:  </label> 
      <output id="lb_ProporcionHombres_50_64" for="lb_ProporcionHombres_50_64"></output>

</li>

<li>
      <label>Proporción mujeres 65 o más:  </label> 
      <output id="lb_ProporcionMujeres_65" for="lb_ProporcionMujeres_65"></output>


</li>
      <li>
      <label>Proporción hombres 65 o más:  </label> 
      <output id="lb_ProporcionHombres_65" for="lb_ProporcionHombres_65"></output>

</li>

</form>

<form id="formularioNumEncuestadores" action="/python/cgi-enabled/calculo_numEncuestadores.py" method="POST">
    @method('PUT')

<li>

      <label for="lb_input_numEncuestadores">Numero de encuestadores:</label>

      <input id="lb_input_numEncuestadores" name="lb_input_numEncuestadores" type="text">

</li>

<li>
      <button type="button" class="sendEncuestadores" id="sendEncuestadores">
        Calcular numero de encuestadores
    </button>
</li>

<li>
      <label for="encuestadores_datos">Numero de encuestadores:</label>
</li>

<li>
      <label>Encuestadores mujeres 18-24:  </label> 
      <output id="lb_encuestadoresMujeres_18_24" for="lb_encuestadoresMujeres_18_24"></output>


</li>
      <li>
      <label>Encuestadores hombres 18-24:  </label> 
      <output id="lb_encuestadoresHombres_18_24" for="lb_encuestadoresHombres_18_24"></output>

</li>

<li>
      <label>Encuestadores mujeres 25-34:  </label> 
      <output id="lb_encuestadoresMujeres_25_34"  for="lb_encuestadoresMujeres_25_34"></output>


</li>
      <li>
      <label>Encuestadores hombres 25-34:  </label> 
      <output id="lb_encuestadoresHombres_25_34" for="lb_encuestadoresHombres_25_34"></output>

</li>

<li>
      <label>Encuestadores mujeres 35-49:  </label> 
      <output id="lb_encuestadoresMujeres_35_49" for="lb_encuestadoresMujeres_35_49"></output>


</li>
      <li>
      <label>Encuestadores hombres 35-49:  </label> 
      <output id="lb_encuestadoresHombres_35_49" for="lb_encuestadoresHombres_35_49"></output>

</li>

<li>
      <label>Encuestadores mujeres 50-64:  </label> 
      <output id="lb_encuestadoresMujeres_50_64" for="lb_encuestadoresMujeres_50_64"></output>


</li>
      <li>
      <label>Encuestadores hombres 50-64:  </label> 
      <output id="lb_encuestadoresHombres_50_64" for="lb_encuestadoresHombres_50_64"></output>

</li>

<li>
      <label>Encuestadores mujeres 65 o más:  </label> 
      <output id="lb_encuestadoresMujeres_65" for="lb_encuestadoresMujeres_65"></output>


</li>
      <li>
      <label>Encuestadores hombres 65 o más:  </label> 
      <output id="lb_encuestadoresHombres_65" for="lb_encuestadoresHombres_65"></output>

</li>

  </ul>
      
</form>

<script>
$(document).ready(function(){
  $('#send').click(function(){

    const URL_lista_poredad = $('[name=lb_URL_ListaPorEdad').val();

        $.ajax({
          url : '/python/cgi-enabled/calculo_listanominal_rangoedad.py',
          method : 'get',
          data : {lista_poredad_py : URL_lista_poredad},
          dataType : 'json',
          success : function(data)
          {
            console.log(data)
            $("#lb_ListaNominalCalculada").html(data[0])
            $("#lb_ListaNominalMujeres_18_24").html(data[1])
            $("#lb_ListaNominalHombres_18_24").html(data[2])
            $("#lb_ListaNominalMujeres_25_34").html(data[3])
            $("#lb_ListaNominalHombres_25_34").html(data[4])
            $("#lb_ListaNominalMujeres_35_49").html(data[5])
            $("#lb_ListaNominalHombres_35_49").html(data[6])
            $("#lb_ListaNominalMujeres_50_64").html(data[7])
            $("#lb_ListaNominalHombres_50_64").html(data[8])
            $("#lb_ListaNominalMujeres_65").html(data[9])
            $("#lb_ListaNominalHombres_65").html(data[10])
            $("#lb_ProporcionMujeres_18_24").html(data[11])
            $("#lb_ProporcionHombres_18_24").html(data[12])
            $("#lb_ProporcionMujeres_25_34").html(data[13])
            $("#lb_ProporcionHombres_25_34").html(data[14])
            $("#lb_ProporcionMujeres_35_49").html(data[15])
            $("#lb_ProporcionHombres_35_49").html(data[16])
            $("#lb_ProporcionMujeres_50_64").html(data[17])
            $("#lb_ProporcionHombres_50_64").html(data[18])
            $("#lb_ProporcionMujeres_65").html(data[19])
            $("#lb_ProporcionHombres_65").html(data[20])
            
          }
      });    
});
});
</script>

<script>
$(document).ready(function(){
  $('#sendEncuestadores').click(function(){

      const numEncuestadores = $('[name=lb_input_numEncuestadores').val();
      const encuestadores_Mujeres_18_24 = $('[name=lb_ProporcionMujeres_18_24').val();
      const encuestadores_Hombres_18_24 = $('[name=lb_ProporcionHombres_18_24').val();
      const encuestadores_Mujeres_25_34 = $('[name=lb_ProporcionMujeres_25_34').val();
      const encuestadores_Hombres_25_34 = $('[name=lb_ProporcionHombres_25_34').val();
      const encuestadores_Mujeres_35_49 = $('[name=lb_ProporcionMujeres_35_49').val();
      const encuestadores_Hombres_35_49 = $('[name=lb_ProporcionHombres_35_49').val();
      const encuestadores_Mujeres_50_64 = $('[name=lb_ProporcionMujeres_50_64').val();
      const encuestadores_Hombres_50_64 = $('[name=lb_ProporcionHombres_50_64').val();
      const encuestadores_Mujeres_65 = $('[name=lb_ProporcionMujeres_65').val();
      const encuestadores_Hombres_65 = $('[name=lb_ProporcionHombres_65').val();

        $.ajax({
          url : '/python/cgi-enabled/calculo_numEncuestadores.py',
          method : 'get',
          data : {
                  numEncuestadores_py : numEncuestadores,
                  encuestadores_Mujeres_18_24_py : encuestadores_Mujeres_18_24,
                  encuestadores_Hombres_18_24_py : encuestadores_Hombres_18_24,
                  encuestadores_Mujeres_25_34_py : encuestadores_Mujeres_25_34,
                  encuestadores_Hombres_25_34_py : encuestadores_Hombres_25_34,
                  encuestadores_Mujeres_35_49_py : encuestadores_Mujeres_35_49,
                  encuestadores_Hombres_35_49_py : encuestadores_Hombres_35_49,
                  encuestadores_Mujeres_50_64_py : encuestadores_Mujeres_50_64,
                  encuestadores_Hombres_50_64_py : encuestadores_Hombres_50_64,
                  encuestadores_Mujeres_65_py : encuestadores_Mujeres_65,
                  encuestadores_Hombres_65_py : encuestadores_Hombres_65
                  },
          dataType : 'json',
          success : function(data)
          {
            $("#lb_encuestadoresMujeres_18_24").html(data[0])
            $("#lb_encuestadoresHombres_18_24").html(data[1])
            $("#lb_encuestadoresMujeres_25_34").html(data[2])
            $("#lb_encuestadoresHombres_25_34").html(data[3])
            $("#lb_encuestadoresMujeres_35_49").html(data[4])
            $("#lb_encuestadoresHombres_35_49").html(data[5])
            $("#lb_encuestadoresMujeres_50_64").html(data[6])
            $("#lb_encuestadoresHombres_50_64").html(data[7])
            $("#lb_encuestadoresMujeres_65").html(data[8])
            $("#lb_encuestadoresHombres_65").html(data[9])
            console.log(data)
          }
      });    
});
});
</script>

  </body>
</html>