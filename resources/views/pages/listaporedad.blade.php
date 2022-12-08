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
    <ul >
    <li>
      <span>Lista nominal por rangos de edad</span>
</li>

<li>

      <span>URL de Lista nominal:</span>

      <input id="lb_URL_ListaPorEdad" name="lb_URL_ListaPorEdad" type="text" required="required">

</li>

<li>
      <button type="button" class="send" id="send">
        Generar
    </button>
</li>

<li>
      <span>Estrato 1</span>
</li>

<li>
      <span>Lista nominal mujeres 18-24:  </span> 
      <output id="lb_ListaNominalMujeres_18_24" for="lb_ListaNominalMujeres_18_24"></output>


</li>
      <li>
      <span>Lista nominal hombres 18-24:  </span> 
      <output id="lb_ListaNominalHombres_18_24" for="lb_ListaNominalHombres_18_24"></output>

</li>

<li>
      <span>Estrato 2</span>
</li>

<li>
      <span>Lista nominal mujeres 25-34:  </span> 
      <output id="lb_ListaNominalMujeres_25_34"  for="lb_ListaNominalMujeres_25_34"></output>


</li>
      <li>
      <span>Lista nominal hombres 25-34:  </span> 
      <output id="lb_ListaNominalHombres_25_34" for="lb_ListaNominalHombres_25_34"></output>

</li>

<li>
      <span>Estrato 3</span>
</li>

<li>
      <span>Lista nominal mujeres 35-49:  </span> 
      <output id="lb_ListaNominalMujeres_35_49" for="lb_ListaNominalMujeres_35_49"></output>


</li>
      <li>
      <span>Lista nominal hombres 35-49:  </span> 
      <output id="lb_ListaNominalHombres_35_49" for="lb_ListaNominalHombres_35_49"></output>

</li>

<li>
      <span>Estrato 4</span>
</li>

<li>
      <span>Lista nominal mujeres 50-64:  </span> 
      <output id="lb_ListaNominalMujeres_50_64" for="lb_ListaNominalMujeres_50_64"></output>


</li>
      <li>
      <span>Lista nominal hombres 50-64:  </span> 
      <output id="lb_ListaNominalHombres_50_64" for="lb_ListaNominalHombres_50_64"></output>

</li>

<li>
      <span>Estrato 5</span>
</li>

<li>
      <span>Lista nominal mujeres 65 o más:  </span> 
      <output id="lb_ListaNominalMujeres_65" name ="respuesta" for="lb_ListaNominalMujeres_65"></output>


</li>
      <li>
      <span>Lista nominal hombres 65 o más:  </span> 
      <output id="lb_ListaNominalHombres_65" name ="respuesta" for="lb_ListaNominalHombres_65"></output>

</li>

<li>
      <span>Lista nominal total:  </span> 
      <output id="lb_ListaNominalCalculada" name ="respuesta" for="lb_ListaNominalCalculada"></output>

</li>

<li>
      <span>Proporción en relación con lista nominal</span>
</li>

<li>
      <span>Proporción mujeres 18-24:  </span> 
      <output id="lb_ProporcionMujeres_18_24" for="lb_ProporcionMujeres_18_24"></output>


</li>
      <li>
      <span>Proporción hombres 18-24:  </span> 
      <output id="lb_ProporcionHombres_18_24" for="lb_ProporcionHombres_18_24"></output>

</li>

<li>
      <span>Proporción mujeres 25-34:  </span> 
      <output id="lb_ProporcionMujeres_25_34"  for="lb_ProporcionMujeres_25_34"></output>


</li>
      <li>
      <span>Proporción hombres 25-34:  </span> 
      <output id="lb_ProporcionHombres_25_34" for="lb_ProporcionHombres_25_34"></output>

</li>

<li>
      <span>Proporción mujeres 35-49:  </span> 
      <output id="lb_ProporcionMujeres_35_49" for="lb_ProporcionMujeres_35_49"></output>


</li>
      <li>
      <span>Proporción hombres 35-49:  </span> 
      <output id="lb_ProporcionHombres_35_49" for="lb_ProporcionHombres_35_49"></output>

</li>

<li>
      <span>Proporción mujeres 50-64:  </span> 
      <output id="lb_ProporcionMujeres_50_64" for="lb_ProporcionMujeres_50_64"></output>


</li>
      <li>
      <span>Proporción hombres 50-64:  </span> 
      <output id="lb_ProporcionHombres_50_64" for="lb_ProporcionHombres_50_64"></output>

</li>

<li>
      <span>Proporción mujeres 65 o más:  </span> 
      <output id="lb_ProporcionMujeres_65" for="lb_ProporcionMujeres_65"></output>


</li>
      <li>
      <span>Proporción hombres 65 o más:  </span> 
      <output id="lb_ProporcionHombres_65" for="lb_ProporcionHombres_65"></output>

</li>

</form>

<form id="formularioNumEncuestadores" action="/python/cgi-enabled/calculo_numEncuestadores.py" method="POST">
    @method('PUT')

<li>

      <span>Numero de encuestadores:</span>

      <input id="lb_input_numEncuestadores" name="lb_input_numEncuestadores" type="text">

</li>

<li>
      <button type="button" class="sendEncuestadores" id="sendEncuestadores">
        Calcular numero de encuestadores
    </button>
</li>

<li>
      <span>Numero de encuestadores:</span>
</li>

<li>
      <span>Encuestadores mujeres 18-24:  </span> 
      <output id="lb_encuestadoresMujeres_18_24" for="lb_encuestadoresMujeres_18_24"></output>


</li>
      <li>
      <span>Encuestadores hombres 18-24:  </span> 
      <output id="lb_encuestadoresHombres_18_24" for="lb_encuestadoresHombres_18_24"></output>

</li>

<li>
      <span>Encuestadores mujeres 25-34:  </span> 
      <output id="lb_encuestadoresMujeres_25_34"  for="lb_encuestadoresMujeres_25_34"></output>


</li>
      <li>
      <span>Encuestadores hombres 25-34:  </span> 
      <output id="lb_encuestadoresHombres_25_34" for="lb_encuestadoresHombres_25_34"></output>

</li>

<li>
      <span>Encuestadores mujeres 35-49:  </span> 
      <output id="lb_encuestadoresMujeres_35_49" for="lb_encuestadoresMujeres_35_49"></output>


</li>
      <li>
      <span>Encuestadores hombres 35-49:  </span> 
      <output id="lb_encuestadoresHombres_35_49" for="lb_encuestadoresHombres_35_49"></output>

</li>

<li>
      <span>Encuestadores mujeres 50-64:  </span> 
      <output id="lb_encuestadoresMujeres_50_64" for="lb_encuestadoresMujeres_50_64"></output>


</li>
      <li>
      <span>Encuestadores hombres 50-64:  </span> 
      <output id="lb_encuestadoresHombres_50_64" for="lb_encuestadoresHombres_50_64"></output>

</li>

<li>
      <span>Encuestadores mujeres 65 o más:  </span> 
      <output id="lb_encuestadoresMujeres_65" for="lb_encuestadoresMujeres_65"></output>


</li>
      <li>
      <span>Encuestadores hombres 65 o más:  </span> 
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
            
            proporcion_18_24_Mujeres = data[11]
            proporcion_18_24_Hombres = data[12]
            proporcion_25_34_Mujeres = data[13]
            proporcion_25_34_Hombres = data[14]
            proporcion_35_49_Mujeres = data[15]
            proporcion_35_49_Hombres = data[16]
            proporcion_50_64_Mujeres = data[17]
            proporcion_50_64_Hombres = data[18]
            proporcion_65_Mujeres = data[19]
            proporcion_65_Hombres = data[20]

          }
      });    
});
});

$(document).ready(function(){
  $('#sendEncuestadores').click(function(){

      const numEncuestadores = $('[name=lb_input_numEncuestadores').val();
      const encuestadores_Mujeres_18_24 = proporcion_18_24_Mujeres
      const encuestadores_Hombres_18_24 = proporcion_18_24_Hombres
      const encuestadores_Mujeres_25_34 = proporcion_25_34_Mujeres
      const encuestadores_Hombres_25_34 = proporcion_25_34_Hombres
      const encuestadores_Mujeres_35_49 = proporcion_35_49_Mujeres
      const encuestadores_Hombres_35_49 = proporcion_35_49_Hombres
      const encuestadores_Mujeres_50_64 = proporcion_50_64_Mujeres
      const encuestadores_Hombres_50_64 = proporcion_50_64_Hombres
      const encuestadores_Mujeres_65 = proporcion_65_Mujeres
      const encuestadores_Hombres_65 = proporcion_65_Hombres
      
      console.log(numEncuestadores)
      console.log(encuestadores_Mujeres_18_24)
      console.log(encuestadores_Hombres_18_24)
      console.log(encuestadores_Mujeres_25_34)
      console.log(encuestadores_Hombres_25_34)
      console.log(encuestadores_Mujeres_35_49)
      console.log(encuestadores_Hombres_35_49)
      console.log(encuestadores_Mujeres_50_64)
      console.log(encuestadores_Hombres_50_64)
      console.log(encuestadores_Mujeres_65)
      console.log(encuestadores_Hombres_65)

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
<style>
.titulo2 {background-color: #04AA6D;} /* Verde */
</style>

  </body>
</html>