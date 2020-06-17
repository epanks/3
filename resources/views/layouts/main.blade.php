<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wfh</title>

    {{-- <link rel="stylesheet" href="/css/main.css"> --}}
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <script src="{{asset('js/app.js')}}"></script>

    @livewireStyles

</head>

<body class="font-sans bg-blue-900 text-white">
    <nav class="border-b border-blue-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-4">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="/">
                        <img src="/image/icons8-waterfall-48.png" WFH />
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="/index" class="hover:text-blue-300">Balai</a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="/show" class="hover:text-blue-300">Satker</a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="/paketlist" class="hover:text-blue-300">Paket</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                {{-- <livewire:search-dropdown /> --}}
                <div class="ml-4">
                    <a href="#">
                        <img src="/image/user.png" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    @livewireScripts

</body>

</html>