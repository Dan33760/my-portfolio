@extends('layouts.app')

@section('title', 'Accueil')
    
@section('content')
    
    <div class="relative flex-grow h-full z-40">
        <div class="relative w-[95%] left-[2.5%] h-full flex flex-col lg:flex-row gap-3 justify-center items-center pt-8 lg:pt-0 z-40">
            <div class="w-full lg:w-[481px]">
                <div class="flex flex-col gap-5">
                    <span class="text-2xl text-gray-100">👋 Salut, je suis</span>
                    <h1 class="text-4xl">Daniel Sivyolo K.</h1>
                    <span class="text-2xl text-gray-100">Développeur Web <span class="text-green-100">Fullstack</span></span>

                    <p class="text-lg font-extralight">
                        Je développe avec intention. <br>
                        Mon travail vise à concevoir des solutions numériques utiles, solides et durables — transformer des idées en réalités concrètes, et révéler le potentiel des talents et des communautés à travers la technologie.
                    </p>

                    <div class="w-full">
                        <button class="bg-green-100 w-64 m-auto h-13 rounded-xl">Me Contacter</button>
                    </div>
                </div>
            </div>
            <div class="w-[362px] md:w-[340px]">
                <img src="{{ asset('images/Image-Header.webp') }}" class="w-full" alt="Image Profile">
            </div>
        </div>

        {{-- Image Background --}}
        <img src="{{ asset('images/bg-img-2.webp') }}" class="absolute w-[90%] lg:w-auto left-3 lg:left-[30%] bottom-0 z-10"
            alt="eclipse 1">
    </div>
@endsection
        
