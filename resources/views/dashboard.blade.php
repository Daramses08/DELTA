<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELTA</title>
    <!--Material -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Sharp"
    rel="stylesheet">
    <!--Estilo-->
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
               <a href="{{route('register')}}">
                <span class="material-symbols-sharp">person_add</span>
                <h3>Nuevo estudiante</h3> <!--NOMBRE DE LA ETIQUETA-->
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
       <!---------------------------------------------->
       <main>
          <h1>Menú principal</h1>
          <div class="profile">
                <div class="info">
                    <p>Bienvenido(a) <b>{{ Auth::user()->name }}</b></p>
                </div>
          <div class="insights">
             <div class="Estudiantes">
                <span class="material-symbols-sharp">emoji_people</span>
                <div class="middle">
                    <div class="left">
                        <h2>Total de alumnos</h2>
                        <h2>@foreach ($fin as $ult)
                            {{$ult->id}}
                        @endforeach</h2>
                    </div>
                    </div>
                </div>
              </div>
              <!----------------------------------------->  
             <div class="recent-orders">
                <table>
                    <thead>
                        <tr>
                            <th>Nombre Completo</th>
                            <th>Curso</th>
                            <th>Grupo</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    @foreach ($est as $ests)
                                    <li>
                                    {{$ests->name}}
                                    </li>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($est as $ests)
                                    <li>
                                    {{$ests->cursos}}
                                    </li>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($est as $ests)
                                    <li>
                                    {{$ests->grupo}}
                                    </li>
                                    @endforeach
                                    </li>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
              </div>
          </div>
       </main>
       <!------------------------------------------>
</body>
</html>