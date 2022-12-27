<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIBER SEGURIDAD</title>
     <!--Material CDN-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Sharp"
    rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
       <aside>
           <div class="top">
               <div class="logo">
                   <img src="./images/logo.png">
                   <h2> <span class="primary">DEL</span> <span class="danger">TA</span> </h2>
               </div>
               <div class="close" id="close-btn">
                <span class="material-symbols-sharp">close</span>
               </div>
           </div>
           <div class="sidebar">
               <a href="{{route('Menu')}}">
                <span class="material-symbols-sharp">dashboard_customize</span>
                <h3>Menú</h3> <!--NOMBRE DE LA ETIQUETA-->
               </a>

                <a href="{{route('cursos')}}">
                <span class="material-symbols-sharp">book</span>
                <h3>Cursos</h3> <!--NOMBRE DE LA ETIQUETA-->
               </a>

               <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                <span class="material-symbols-sharp">logout</span>
                <h3><div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                </div>Salir</h3> <!--NOMBRE DE LA ETIQUETA-->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
               </a>
           </div>
       </aside>
    <div>
    <br>
    <h1>Ciber Seguridad</h1>
    <br>
    <p>Este curso se encuentra dirigido a niveles principiantes</p>
    <br>
    <a>
    En este curso aprenderas:
    <br>
    Los principios sobre la seguridad informática para poder realizar diferente pruebas en un entorno practico, 
    <br>
    en diferente laboratorios orientados a páginas y aplicaciones web, con fines educativos y éticos.
    </a>
    </div>
</body>
</html>