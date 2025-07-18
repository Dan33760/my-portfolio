@extends('layouts.app')

@section('title', 'Competences')

@section('content')

    <div class="relative w-full lg:w-[80%] h-full mb-14 lg:mb-0 z-40">
        <div
            class="relative w-[95%] left-[2.5%] h-full flex flex-col lg:flex-row gap-3 justify-center items-center pt-8 lg:pt-0 z-40">
            <div class="w-full lg:w-[80%]">
                <div class="flex flex-col justify-center items-center gap-5  text-center">
                    <h3 class="font-semibold text-2xl lg:leading-15">La technologie n’est pas une finalité, mais un levier</h3>
                    <p class="font-semibold text-lg text-gray-100">Mon apprentissage constant me permet d’élargir ma boîte à
                        outils et de sélectionner, pour chaque projet, la solution la plus adaptée aux vrais besoins.</p>

                    <div class="mt-5">
                        <img src="{{ asset('images/technologies.webp') }}" alt="Skills">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
