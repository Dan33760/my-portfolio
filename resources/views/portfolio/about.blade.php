@extends('layouts.app')

@section('title', 'About')

@section('content')

    <div class="relative w-full lg:w-[80%] h-full mb-14 lg:mb-0 z-40">
        <div
            class="relative w-[95%] left-[2.5%] h-full flex flex-col gap-6 justify-center items-center pt-8 lg:pt-0 z-40">
            <div class="w-full lg:w-[80%]">
                <div class="mb-5">
                    <p class="font-semibold text-lg text-gray-100 mb-3">Je développe avec intention.Mon travail vise à
                        concevoir des solutions numériques utiles, solides et
                        durables — transformer des idées en réalités concrètes, et révéler le potentiel des talents et des
                        communautés à travers la technologie.
                    </p>
                    <p class="font-semibold text-lg text-gray-100">Actuellement, je suis développeur et Formateur a
                        Skynet-Burundi</p>
                </div>
                <div class="mb-5">
                    <h3 class="font-semibold text-2xl lg:leading-15">Objectif</h3>
                    <p class="font-semibold text-lg text-gray-100">Créer des solutions numériques solides, évolutives et bien
                        structurées, tout en accompagnant d'autres
                        talents via la formation et des projets collectifs.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-2xl lg:leading-15">Mes clients</h3>
                    
                    @include('partials.clients-slide')
                    
                </div>
            </div>
        </div>
    </div>

@endsection
