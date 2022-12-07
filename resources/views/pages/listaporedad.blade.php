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
      <label for="title_datos">Lista Nominal</label>
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
            
          }
      });    
});
});
</script>

  </body>
</html>