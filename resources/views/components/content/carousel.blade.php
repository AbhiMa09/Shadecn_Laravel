@extends('layouts.app')

@section('content')
    <x-layout.component-showcase title="Carousel"
        description="A slideshow component for cycling through elements—images or slides of text—like a carousel."
        componentPath="ui/carousel.blade.php" usage='<x-ui.carousel :slides="[...urls]" />'>
        <div class="w-full max-w-xl">
            <x-ui.carousel :slides="[
            'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=800&q=80',
            'https://images.unsplash.com/photo-1620641788421-7a1c342ea42e?w=800&q=80',
            'https://images.unsplash.com/photo-1614850523296-d8c1af93d400?w=800&q=80',
            'https://images.unsplash.com/photo-1620121692029-d088224efc74?w=800&q=80'
        ]" />
        </div>
    </x-layout.component-showcase>
@endsection