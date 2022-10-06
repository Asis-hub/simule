<!DOCTYPE html>
<html>
  <header>

  </header>
  <head>
    @include('includes.header')
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <style>
      form {
  /* Center the form on the page */
  margin: 0 auto;
  width: 400px;
  /* Form outline */
  padding: 1em;
  border: 1px solid #ccc;
  border-radius: 1em;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

form li + li {
  margin-top: 1em;
}

label {
  /* Uniform size & alignment */
  display: inline-block;
  width: 90px;
  text-align: right;
}

input,
textarea {
  /* To make sure that all text fields have the same font settings
     By default, textareas have a monospace font */
  font: 1em sans-serif;

  /* Uniform text field size */
  width: 300px;
  box-sizing: border-box;

  /* Match form field borders */
  border: 1px solid #999;
}

input:focus,
textarea:focus {
  /* Additional highlight for focused elements */
  border-color: #000;
}

textarea {
  /* Align multiline text fields with their labels */
  vertical-align: top;

  /* Provide space to type some text */
  height: 5em;
}

.button {
  /* Align buttons with the text fields */
  padding-left: 90px; /* same size as the label elements */
}

button {
  /* This extra margin represent roughly the same space as the space
     between the labels and their text fields */
  margin-left: 0.5em;
}

      </style>
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

    <form id="formulario" action="/python/cgi-enabled/formula_muestra.py" method="POST">
    @method('PUT')
    <ul>
    <li>
      <label for="title_datos">Datos</label>
</li>

<li>

      <label for="lb_error">Error:</label>

      <input id="lb_error" name="lb_error" type="text" required="required" pattern="[0-9]+">

</li>

<li>

      <label for="lb_confiabilidad">Confiabilidad:</label>

      <input id="lb_confiabilidad" name="lb_confiabilidad" type="text" required="required" pattern="[0-9]+">

</li>

<li>
      <label for="lb_p_necesaria">Proporción necesaria:</label>

      <input id="lb_p_necesaria" name="lb_p_necesaria" type="text" required="required" pattern="[0-9]+">

</li>

<li>
      <label for="lb_p_restante">Proporción restante:</label>

      <input id="lb_p_restante" name="lb_p_restante" type="text" required="required" pattern="[0-9]+">
</li>
<li>
      <label for="lb_estratos">Número de estratos:</label>

      <input id="lb_estratos" name="lb_estratos" type="text" required="required" pattern="[0-9]+">
</li>
<li>
      <button type="button" class="send" id="send">
        Generar
    </button>
</li>
<li>
      <label for="lb_encuestadores">Número de encuestadores:</label>

</li>
<li>
      <output id="lb_respuesta" name ="respuesta" for="lb_respuesta"></output>

      </li>
  </ul>
      
</form>

<div id="resultado" class="resultado">



</div>

<script>
$(document).ready(function(){
  $('#send').click(function(){

    const error = $('[name=lb_error').val();
      const confiabilidad = $('[name=lb_confiabilidad').val();
      const p_necesaria = $('[name=lb_p_necesaria').val();
      const p_restante = $('[name=lb_p_restante').val();
      const estratos = $('[name=lb_estratos').val();

        $.ajax({

          

          url : '/python/cgi-enabled/formula_muestra.py',
          method : 'get',
          data : {error_py : error, confiabilidad_py : confiabilidad, p_necesaria_py : p_necesaria, 
          p_restante_py : p_restante, estratos_py : estratos},
          dataType : 'text',
          success : function(data)
          {
            $("#lb_respuesta").html(data)
            console.log(data)
          }
      });    
  


});
});
</script>

  </body>
</html>