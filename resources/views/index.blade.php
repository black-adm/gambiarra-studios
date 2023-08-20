@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-6 pt-20">
        <div>
            <h2 class="uppercase tracking-wide text-primary-orange text-lg pl-4 md:pl-0 font-semibold">
                Filmes Populares
            </h2>

            <div class="grid grid-cols-1 px-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 lg:px-0 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img 
                            src="https://www.terra.cl/u/fotografias/m/2021/12/28/f768x1-19224_19351_5050.jpeg"
                            alt="Matrix Ressurections"
                            class="rounded-md hover:opacity-75 transition ease-in-out duration-150"
                        >
                    </a>

                    <div class="mt-6 px-2">
                        <a href="#" class="text-lg text-white mt-2 hover:text-light-orange">
                            Matrix Resurrections
                        </a>

                        <div class="flex items-center text-gray-white text-sm mt-1">
                            <span>
                                <svg class="text-light-orange w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            </span>
                            <span class="ml-2">58%</span>
                            <span class="mx-2">|</span>
                            <span>22 de Dezembro de 2021</span>
                        </div>
                        
                        <div class="text-primary-gray text-sm">
                            Ação, Suspense e Romance
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection