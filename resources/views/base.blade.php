<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trabalho Bimestral - Home</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/material.css') }}">
    <script type="text/javascript" src="{{ URL::asset('JavaScript/Jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('JavaScript/jquery.mask.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('JavaScript/mascarasCampos.js') }}"></script>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <div class="content2">
                @yield('content2')
            </div>
        </x-slot>
        <div class="content">
            @yield('content')
        </div>
        </div>
    </x-app-layout>
    <footer class="footer">
        <div class="footer-wrap">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                    Desenvolvido por Henrique Brito Pinheiro dos Santos. Todos os direitos resevados.</span>
            </div>
        </div>
    </footer>
    </div>
</body>

</html>
