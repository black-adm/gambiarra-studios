<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gambirarra Studios - Filmes online</title>

    @vite(['resources/css/app.css'])
</head>

<body class="bg-primary-blue">
    <nav>
        <div class="container mx-auto flex items-center justify-between px-16 py-6">
            <span class="mr-20">
                <a href="#">
                    <img src="{{ asset('logo.png') }}" alt="Logo">
                </a>
            </span>

            <ul class="hidden lg:flex lg:items-center text-white text-sm md:text-xs md:gap-x-5 lg:gap-x-24">
                <li>
                    <a href="#" class="flex items-center gap-x-1 hover:text-light-orange text-center">
                        <svg " xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clapperboard"><path d="M4 11v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8H4Z"/><path d="m4 11-.88-2.87a2 2 0 0 1 1.33-2.5l11.48-3.5a2 2 0 0 1 2.5 1.32l.87 2.87L4 11.01Z"/><path d="m6.6 4.99 3.38 4.2"/><path d="m11.86 3.38 3.38 4.2"/></svg>
                        Filmes
                    </a>
                </li>

                <li>
                    <a href="#" class="flex items-center gap-x-1 hover:text-light-orange text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tv"><rect width="20" height="15" x="2" y="7" rx="2" ry="2"/><polyline points="17 2 12 7 7 2"/></svg>
                        Programas de TV
                    </a>
                </li>

                <li>
                    <a href="#" class="flex items-center gap-x-1 hover:text-light-orange text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-2"><path d="M14 19a6 6 0 0 0-12 0"/><circle cx="8" cy="9" r="4"/><path d="M22 19a6 6 0 0 0-6-6 4 4 0 1 0 0-8"/></svg>
                        Atores
                    </a>
                </li>
            </ul>

            <div class="hidden md:flex md:items-center md:gap-x-4">
                <div class="relative">
                    <input 
                        type="text" 
                        class="bg-white rounded-full sm:w-40 md:w-48 w-64 pl-8 px-4 py-1.5 text-xs focus:ring-2 focus:ring-light-orange focus:outline-none"
                        placeholder="Pesquisar"
                    >

                    <div class="absolute top-0">
                        <svg class="text-primary-gray w-4 ml-2 mt-1.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    </div>
                </div>

                 <div>
                    <a href="#">
                        <img 
                            src="https://avatars.githubusercontent.com/u/68331373?v=4"
                            class="rounded-full w-8 h-8"
                            alt="Avatar"
                        >
                    </a>
                </div>
            </div>

           

            <div class="lg:hidden md:pr-6 flex items-center gap-4">
                <a href="#" class="flex items-center justify-center">
                    <svg class="text-white w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                </a>

                <a className="self-center mr-8 md:hidden">                    
                    <svg class="text-white w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-align-justify"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                </a>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>