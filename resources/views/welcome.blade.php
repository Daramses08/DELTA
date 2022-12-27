<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>welcome</title>
  <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

<body>
  <div align="center"><img src="./images/logo.png"></div>
  <h1 class="center"> <span class="primary">DEL</span> <span class="danger">TA</span></h1>
  
  
  <form action="{{ route('dashboard') }}" method="get">
  <div style="text-align: center;">
  <button class="button button1">INICIA SESIÓN</button>
  </div>
  </form>

</body>

</html>

