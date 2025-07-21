@extends('layouts.app')

@section('title', 'About')

@section('content')

    <div class="relative w-full lg:w-[80%] h-auto lg:h-full mb-14 lg:mb-0 z-40">
        <div class="lg:relative w-[95%] m-auto left-[2.5%] h-full flex flex-col gap-6 justify-center items-center pt-2 lg:pt-0 z-40"
            x-data="projectsList()">
            <template x-for="(project, index) in projects" :key="index">
                <div x-show="active === index"
                    class="lg:relative w-full lg:w-[80%] flex flex-col lg:flex-row gap-5 lg:gap-0 justify-end items-center">
                    <div class="lg:relative z-20 p-2 lg:h-[500px] flex flex-col justify-center items-start">
                        <h3 class="font-semibold text-2xl leading-15" x-text="project.title"></h3>
                        <div class="bg-blue-200/80 backdrop-blur-[0.5px] w-full lg:w-[60%] px-5 py-5 rounded-2xl">
                            <p class="font-semibold text-lg text-gray-100" x-text="project.description"></p>
                        </div>
                        <div class="flex justify-start items-center gap-2 text-gray-100 mt-2">
                            <a x-show="project.link.website"
                                :href="project.link.website" target="__blank"
                                class="w-[25px] h-[25px] rounded-full bg-blue-200/80 backdrop-blur-[0.5px] flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>

                            </a>
                            <a x-show="project.link.github"
                                :href="project.link.github"
                                class="w-[25px] h-[25px] rounded-full bg-blue-200/80 backdrop-blur-[0.5px] flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="lg:absolute right-0">
                        <div class="relative lg:full lg:w-[700px] lg:h-[500px] flex justify-end items-center">
                            <img :src="project.image" class="relative z-10 lg:w-[593px] lg:h-[340px]"
                                :alt="project.title">
                            <img :src="project.imageBg" class="absolute right-0" :alt="project.title">
                        </div>
                    </div>
                </div>
            </template>

            <div class="absolute top-1/2 w-full flex justify-between items-center text-gray-100 z-30">
                <button @click="active = active === 0 ? projects.length - 1 : active - 1"
                    class="size-7 active:text-green-100 hover:text-white rounded-full bg-blue-200/80 backdrop-blur-[0.5px] flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </button>
                <button @click="active = (active + 1) % projects.length"
                    class="size-7 active:text-green-100 hover:text-white rounded-full bg-blue-200/80 backdrop-blur-[0.5px] flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>

            <div class="mt-5 lg:mt-0 lg:absolute lg:bottom-10">
                <div class="flex justify-center items-center gap-2">

                    <template x-for="(project, index) in projects" :key="index">
                        <span @click="active = index" :class="active === index ? 'bg-green-100' : 'bg-gray-100'"
                            class="w-[50px] h-[8px] hover:bg-green-100 rounded-full block"></span>
                    </template>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            function projectsList() {
                return {
                    active: 0,
                    projects: [{
                            title: 'Skynet-Burundi',
                            image: 'images/screen-skynet.webp',
                            imageBg: 'images/eclipse-skynet.webp',
                            description: 'Le site web de l’entreprise Skynet-Burundi avec tous les details possible, et un espace de gestion des candidatures de differentes formtions, concu avec TALL STACK.',
                            link: {
                                website: 'https://skynet-burundi.bi'
                            }
                        },
                        {
                            title: 'Ardhi Yetu',
                            image: 'images/screen-skynet.webp',
                            imageBg: 'images/eclipse-skynet.webp',
                            description: 'Le site web de l’entreprise Skynet-Burundi avec tous les details possible, et un espace de gestion des candidatures de differentes formtions, concu avec TALL STACK.',
                            link: {
                                website: ''
                            }
                        },
                        {
                            title: 'Abana b\'eka',
                            image: 'images/screen-skynet.webp',
                            imageBg: 'images/eclipse-skynet.webp',
                            description: 'Le site web de l’entreprise Skynet-Burundi avec tous les details possible, et un espace de gestion des candidatures de differentes formtions, concu avec TALL STACK.',
                            link: {
                                website: ''
                            }
                        },
                    ]
                }
            }
        </script>
    @endpush
@endsection
