{{--Toma los parametros del dashboard--}}
@props([
    'title' => config('app.name', 'Laravel'),
    'breadcrumbs' => [],
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="https://kit.fontawesome.com/a3035e377e.js" crossorigin="anonymous"></script>

        <!--Sweet alert 2-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
        <wireui:scripts />

        <!-- Styles -->
        @livewireStyles

    </head>
    <body class="font-sans antialiased bg-gray-50">

        @include('layouts.include.admin.navigation')

        @include('layouts.include.admin.sidebar')

        <div class="p-4 sm:ml-64">
            <!--Añadir Margen superior-->
            <div class="mt-14 flex items-center justify-between w-full">
                @include('layouts.includes.admin.breadcrumb')
            </div>
            {{ $slot }}

        </div>
        @stack('modals')

        @livewireScripts

        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    
        {{-- Mostrar Sweet Alert --}}

        @if (@session('swal'))
            <script>
                Swal.fire(@json(session('swal')));
            </script>
        @endif

        <script>
            form = document.querySelectorAll('.delete-form');
            form.forEach(form => {
                //pone al pediente
                form.addEventListener('submit', function(e){
                    //evita quqe se envie
                    e.preventDefault();
                    Swal.fire({
                        title: "¿Estás seguro?",
                        text: "No podrás revertir esto",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "¡Sí, eliminar!",
                        cancelButtonText: "Cancelar"
                        }).then((result) => {
                            if (result.isConfirmed){
                                //borra el registro
                                form.submit();
                            }
                        });
                    })
                });
        </script>

    </body>
</html>
