<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
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

       <main>
        <h1>CURSOS</h1>
          <div class="profile">
                <div class="info">
                    <p>Bienvenido(a) <b>{{ Auth::user()->name }}</b></p>
                </div>
               <div class="insights">
                <div class="middle">
                    <div class="left">
                        <a href="{{route('DW')}}">
                        <h2>Desarrollo web</h2>
                        </a>
                    </div>
                </div>
                </div>
                <div class="insights">
                <div class="middle">
                    <div class="left">
                        <a href="{{route('CS')}}">
                        <h2>Ciber Seguridad</h2>
                        </a>
                    </div>
                </div>
                </div>

                <div class="insights">
                <div class="middle">
                    <div class="left">
                        <a href="{{route('RDC')}}">
                        <h2>Redes de computadora</h2>
                        </a>
                    </div>
                </div>
                </div>

                <div class="insights">
                <div class="middle">
                    <div class="left">
                        <a href="{{route('INF')}}">
                        <h2>Informática</h2>
                        </a>
                    </div>
                </div>
                </div>

                <div class="insights">
                <div class="middle">
                    <div class="left">
                        <a href="{{route('ELEC')}}">
                        <h2>Electrónica</h2>
                        </a>
                    </div>
                </div>
                </div>

       </main>
    
</body>
</html>