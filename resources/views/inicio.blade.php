<html>

<head>
    <title>Inicio</title>
</head>

<body>
    <h1>Página de inicio</h1>
    {{-- <p>Bienvenido <?php echo $nombre; ?></p> --}}
    {{-- <p>Bienvenido sr. {{$nombre}}</p> --}}
    <ul>
        @forelse ($elementos as $elemento)
                <li>{{$elemento}}{{var_dump($loop)}}</li>
        @empty
            <li>No hay elementos que mostrar</li>
        @endforelse
    </ul>
    <a href="{{url('/contacto')}}">Contacto</a>
</body>

</html>
