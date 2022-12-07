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

    <form id="formulario" action="/python/cgi-enabled/calculo_listanominal.py" method="POST">
    @method('PUT')
    <ul>
    <li>
      <label for="title_datos">Lista Nominal</label>
</li>

<li>

      <label for="lb_URL_ListaNominal">URL de Lista nominal:</label>

      <input id="lb_URL_ListaNominal" name="lb_URL_ListaNominal" type="text" required="required">

</li>

<li>
      <button type="button" class="send" id="send">
        Generar
    </button>
</li>
<li>
      <label>Lista nominal total:</label>

</li>
<li>
      <output id="lb_ListaNominalCalculada" name ="respuesta" for="lb_ListaNominalCalculada"></output>

      </li>

  </ul>
      
</form>


<script>
$(document).ready(function(){
  $('#send').click(function(){

    const URL_lista_nominal = $('[name=lb_URL_ListaNominal').val();

        $.ajax({

          

          url : '/python/cgi-enabled/calculo_listanominal.py',
          method : 'get',
          data : {lista_nominal_py : URL_lista_nominal},
          dataType : 'json',
          success : function(data)
          {
            $("#lb_ListaNominalCalculada").html(data[0])
            console.log(data)
          }
      });    
  


});
});
</script>

  </body>
</html>