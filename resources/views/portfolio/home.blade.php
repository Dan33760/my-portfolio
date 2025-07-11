@extends('layouts.app')

@section('title', 'Accueil')
    
@section('content')
    
    <div class="relative flex-grow h-full border border-amber-600">


        {{-- Image Background --}}
        <img src="{{ asset('images/bg-img-2.webp') }}" class="absolute left-3 lg:left-[30%] bottom-0 z-10"
            alt="eclipse 1">
    </div>
@endsection
        
