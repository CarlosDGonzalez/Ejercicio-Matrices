<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #D8D8D8;
                color: #8A0808;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                text-align: center;
                justify-content: center;
            }
            body H3{
                color: #000000;
            }
            body H4{
                color: #4000FF;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 80px;
            }

            .links > a {
                
                color: #000000;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <H1>Inicio Matrices</H1>
        <H3>-Ingrese el nombre el cual desea buscar</H3>
        <H3>-Ingrese el apellido el cual desea buscar</H3>
        <H3>-Ingrese la edad a la cual desea buscar los menores de esa edad</H3>
        <H3>-Ingrese el curso el cual desea buscar la cantidad de estudiantes</H3>
        <H3>-Ingrese el telefono el cual desea buscar</H3>
        <form action="{{url('formulario')}}" method="POST">
        {{csrf_field()}}
        <H4>Nombre:   <input type="text" name="nombre"></H4>
        <H4>Apellido:   <input type="text" name="apellido"></H4>
        <H4>Edad:   <input type="number" name="edad"></H4>
        <H4>Telefono: <input type="number" name="telefono"></H4>
        <H3></H3>
        <br><button type="submit">Enviar</button>
    </body>

