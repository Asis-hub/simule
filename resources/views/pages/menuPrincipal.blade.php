<!DOCTYPE html>
<html>
  <header>

  </header>
  <head>
    @include('includes.header')
    @include('includes.form')
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    
<meta content="utf-8" http-equiv="encoding">

  </head>
  <body>
    
  <div class="header">
      <img class="logo" src="/images/d79a16b61de6b8760e0f8ed6c43ec2c0.png" alt="CEOA"></h1>
      <a href="/">
        <span class="left"></span>
      </a>
      <h1 class="txtheader">SIMULE</h1>
    </div>
<table>

<tr>
    <a class="button" href="{{route('muestra')}}">
        Calculo de muestra
</a>
</tr>
<tr>
    <a class="button" href="{{route('listanominal')}}">
        Calculo de Lista nominal por género
</a>
</tr>
<tr>
    <a class="button" href="{{route('listaporedad')}}">
        Calculo de Lista nominal por rango de edad y género
</a>
</tr>
</table>


  </body>

  <style>
     .button {
        
  background-color: #008CBA; /* Green */
  border: none;
  color: white;
  padding: 35px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 8px;
  border: 2px solid #4CAF50;
  transition-duration: 0.4s;
  display: block;
  margin:0 auto; 
  
}

.button:hover {
  background-color: #4CAF50; /* Green */
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}


  </style>
</html>