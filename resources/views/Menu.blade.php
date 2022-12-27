<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELTA</title>
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
                   <a href="{{route('Menu')}}">
                   <h2> <span class="primary">DEL</span> <span class="danger">TA</span> </h2>
                   </a>
               </div>
               <div class="close" id="close-btn">
                <span class="material-symbols-sharp">close</span>
               </div>
           </div>
           <div class="sidebar">
               <a href="{{route('dashboard')}}">
                <span class="material-symbols-sharp">dashboard_customize</span>
                <h3>Acceder al tablero</h3> <!--NOMBRE DE LA ETIQUETA-->
               </a>
               
               <a href="{{route('cursos')}}">
                <span class="material-symbols-sharp">book</span>
                <h3>Cursos</h3> <!--NOMBRE DE LA ETIQUETA-->
               </a>

               <a href="{{route('register')}}">
                <span class="material-symbols-sharp">person_add</span>
                <h3>Agregar alumno</h3> <!--NOMBRE DE LA ETIQUETA-->
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
   </div>
       <!--------------------------------------------END OF ASIDE-->
</body>
</html>

