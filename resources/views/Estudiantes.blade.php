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
    <link rel="stylesheet" href="{{ asset('css/vista.css') }}">
</head>
<body>
   <div class="container">
    <aside>
        <div class="top">
            <div class="logo">
                <img src="./images/logo.png">
                <h2>DEL <span class="danger">TA</span> </h2>
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
            <a href="{{route('Estudiantes')}}" >
             <span class="material-symbols-sharp">person</span>
             <h3>Estudiantes</h3> <!--NOMBRE DE LA ETIQUETA-->
            </a>
            <a href="{{route('Pagos')}}">
             <span class="material-symbols-sharp">paid</span>
             <h3>Pagos</h3> <!--NOMBRE DE LA ETIQUETA-->
            </a>

            <a href="{{route('register')}}">
             <span class="material-symbols-sharp">person_add</span>
             <h3>Nuevo estudiante</h3> <!--NOMBRE DE LA ETIQUETA-->
            </a>
        </div>
    </aside>
       <!--------------------------------------------END OF ASIDE-->
       <main>
          <h1>Alumnos registrados</h1>
          <div class="date">
              <input type="date">
          </div>
          <div class="insights">


              <div>
                  <!-----------------------------------END OF INSIGHTS-->

                  <div class="recent-orders">
                    <table>
                        <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Numero de Boleta</th>
                              <th>Grupo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                  <li>
                                      @foreach ($est as $ests)
                                      <li>
                                          -{{$ests->name}}
                                      </li>
                                      @endforeach
                                  </li>
                                </td>
                                <td>
                                    <li>
                                        @foreach ($est as $ests)
                                        <li>
                                            -{{$ests->boleta}}
                                        </li>
                                        @endforeach
                                    </li>
                                </td>
                                <td>
                                    <li>
                                        @foreach ($est as $ests)
                                        <li>
                                            -{{$ests->grupo}}
                                        </li>
                                        @endforeach
                                    </li>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                      <a href="{{route('dashboard')}}">Mostrar todo</a>
                  </div>
              </div>
          </div>
       </main>
       <!----------------------------------------END OF MAIN-->
       <div class="right">
           <div class="classtop">
               <button id="menu-bt">
                <span class="material-symbols-sharp">menu</span>
            </button>
            <div class="theme-toggler">
                <span class="material-symbols-sharp active">light_mode</span>
                <span class="material-symbols-sharp">dark_mode</span>
            </div>
            <div class="profile">
                <div class="info">
                    <p>Bienvenido(a) <b>{{ Auth::user()->name }}</b></p>
                </div>
            </div>
           </div>
            <!--------------END OF TOP-->
            <div class="recent-updates">

            </div>

       </div>
   </div>


</body>
</html>

