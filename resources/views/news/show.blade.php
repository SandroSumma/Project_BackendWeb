<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $news->title }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-gray-500 text-sm mb-2">Geplaatst op {{ $news->published_at->format('d-m-Y') }}</p>
        <img src="{{ asset('storage/' . $news->image_path) }}" alt="Afbeelding van {{ $news->title }}" class="w-full h-auto rounded mb-6">
        <div class="prose max-w-none">
            {!! $news->content !!}
        </div>
        <a href="{{ route('news.index') }}" class="inline-block mt-6 text-blue-600 hover:underline">Terug naar nieuws</a>
    </div>
</x-app-layout>
