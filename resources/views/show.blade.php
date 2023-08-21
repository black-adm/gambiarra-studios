@extends('layouts.main')

@section('content')
    <div>
        <div class="container flex flex-col md:flex-row mx-auto md:px-6 pt-0 pb-16 sm:py-20">
            <hr class="sm:hidden flex border border-light-orange">
            <img 
                src="https://portalpopline.com.br/wp-content/uploads/2021/11/matrix-1-scaled.jpg"
                alt="Filme"
                class="w-full h-auto md:w-96 sm:rounded-lg"
            >

            <div class="px-6 sm:ml-12 sm:px-0 mt-10 md:mt-1">
                <h2 class="text-2xl md:text-4xl font-semibold text-primary-orange">
                    Matrix Resurrections <strong class="text-white">(2021)</strong>
                </h2>

                    <div class="flex items-center text-white text-[10px] md:text-sm mt-2 gap-x-2 md:gap-x-1">
                        <span class="flex items-center gap-x-1 sm:gap-x-2">
                            <svg class="text-light-orange w-3.5 sm:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            58%
                        </span>
                        <span class="mx-2">|</span>
                        
                        <span class="flex items-center gap-x-1 sm:gap-x-2">
                            <svg class="hidden sm:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/><path d="M8 14h.01"/><path d="M12 14h.01"/><path d="M16 14h.01"/><path d="M8 18h.01"/><path d="M12 18h.01"/><path d="M16 18h.01"/></svg>
                            22 de Dezembro de 2021
                        </p>
                        
                        <span class="mx-2">|</span>
                        <p class="flex items-center gap-x-1 sm:gap-x-2">
                            <svg class="hidden sm:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                            Ação, Suspense e Romance
                        </p>
                    </div>   

                    <p class="mt-10 w-[340px] sm:w-96 md:w-[40rem] md:text-base text-white text-xs font-light">
                        Se passando 20 anos após os acontecimentos de de Matrix Revolutions, Neo vive uma vida aparentemente comum sob sua identidade original como Thomas A. Anderson em São Francisco, Califórnia, com um terapeuta que lhe prescreve pílulas azuis para neutralizar as coisas estranhas e não naturais que ele ocasionalmente vislumbra em sua mente. Ele também conhece uma mulher que parece ser Trinity (Carrie Anne-Moss), mas nenhum deles se reconhece. No entanto, quando uma nova versão de Morpheus oferece a ele a pílula vermelha e reabre sua mente para o mundo da Matrix, que se tornou mais seguro e perigoso nos anos desde a infecção de Smith, Neo volta a se juntar a um grupo de rebeldes para lutar contra um novo e maois perigoso inimigo e livrar todos da Matrix novamente.                    
                    </p>

                    <div class="mt-12">
                        <h4 class="text-light-orange text-lg font-semibold">
                            Personagens em destaque
                        </h4>

                        <div class="flex mt-4 gap-x-5 text-sm sm:text-base">
                            <div class="text-white">
                                <span>Keanue Reeves</span>
                                <div class="text-light-blue">Neo</div>
                            </div>

                            <div class="ml-8 text-white">
                                <span>Carrie Anne</span>
                                <div class="text-light-blue">Trinity</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <button class="flex items-center gap-x-2 py-2.5 px-10 bg-light-blue text-white rounded-md font-medium hover:bg-sky-500 focus:bg-sky-500 transition ease-in-out duration-150">
                            <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                            Assistir trailer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="mx-auto border-white py-4">
    <div>
        <div class="container mx-auto py-6 px-12">
            <h2 class="text-2xl sm:text-3xl font-semibold text-primary-orange">
                Elenco principal
            </h2>
        
            <div class="mt-10 grid grid-cols-1 sm:mt-16 sm:flex sm:flex-col">
                <a href="#">
                    <img 
                        src="https://conteudo.imguol.com.br/c/entretenimento/0c/2023/03/23/john-wick-4-baba-yaga-e-o-mais-novo-capitulo-da-franquia-que-revitalizou-a-carreira-de-keanu-reeves-1679541049583_v2_1x1.png"
                        alt="Keanu Reeves"
                        class="w-28 sm:w-48 rounded-full hover:opacity-75 transition ease-in-out duration-150"
                    >
                </a>

                <div class="mt-4 text-sm sm:ml-8 sm:text-base">
                    <h5 href="#" class="text-lg text-white mt-2 hover:text-primary-gray">
                        Keanue Reeves
                    </h5>

                    <p class="text-primary-gray">
                        Ator e Dublê
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection