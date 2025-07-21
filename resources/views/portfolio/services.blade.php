@extends('layouts.app')

@section('title', 'Services')

@section('content')

    <div class="relative w-full lg:w-[80%] h-full mb-14 lg:mb-0 z-40">
        <div class="relative w-[95%] left-[2.5%] h-full flex flex-col gap-6 justify-center items-center pt-8 lg:pt-0 z-40">
            <div
                class="w-[80%] rounded-2xl bg-blue-200/40 backdrop-blur-[0.5px] flex flex-col lg:flex-row gap-3 items-center py-7 px-5 text-center lg:text-left">
                <div class="flex-grow text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.7"
                        stroke="currentColor" class="w-28 m-auto">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                    </svg>
                </div>
                <div class="w-full lg:w-[80%]">
                    <h3 class="font-semibold text-2xl lg:leading-15">Développement d’applications web</h3>
                    <p class="font-semibold text-lg text-gray-100">Conception d’applications modernes, sécurisées et
                        évolutives, adaptées aux besoins métier spécifiques.</p>
                </div>
            </div>
            <div
                class="w-[80%] rounded-2xl bg-blue-200/40 backdrop-blur-[0.5px] flex flex-col lg:flex-row gap-3 items-center py-7 px-5 text-center lg:text-left">
                <div class="flex-grow text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.7"
                        stroke="currentColor" class="w-28 m-auto">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                    </svg>
                </div>
                <div class="w-full lg:w-[80%]">
                    <h3 class="font-semibold text-2xl lg:leading-15">Création de sites web professionnels</h3>
                    <p class="font-semibold text-lg text-gray-100">Sites vitrines, institutionnels ou dynamiques, optimisés
                        pour la performance, le référencement et l’expérience utilisateur.</p>
                </div>
            </div>
            <div
                class="w-[80%] rounded-2xl bg-blue-200/40 backdrop-blur-[0.5px] flex flex-col lg:flex-row gap-3 items-center py-7 px-5 text-center lg:text-left">
                <div class="flex-grow text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.7"
                        stroke="currentColor" class="w-28 m-auto">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                    </svg>
                </div>
                <div class="w-full lg:w-[80%]">
                    <h3 class="font-semibold text-2xl lg:leading-15">Consultant en solutions web</h3>
                    <p class="font-semibold text-lg text-gray-100">Analyse, structuration et accompagnement technique pour
                        faire les bons choix dès le départ.
                        Mentorat et transfert de compétences aux équipes ou porteurs de projet.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
