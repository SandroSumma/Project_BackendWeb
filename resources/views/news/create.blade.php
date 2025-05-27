<x-app-layout>
    <x-slot name="header">
        <h2>Nieuw nieuwsitem toevoegen</h2>
    </x-slot>

    <div class="py-6 max-w-2xl mx-auto">
        <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="title">Titel</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" required>
                @error('title') <div class="text-red-600">{{ $message }}</div> @enderror
            </div>

            <div>
                <label for="published_at">Publicatiedatum</label>
                <input type="date" name="published_at" id="published_at" value="{{ old('published_at') }}" required>
                @error('published_at') <div class="text-red-600">{{ $message }}</div> @enderror
            </div>

            <div>
                <label for="image">Afbeelding</label>
                <input type="file" name="image" id="image" required>
                @error('image') <div class="text-red-600">{{ $message }}</div> @enderror
            </div>

            <div>
                <label for="content">Content</label>
                <textarea name="content" id="content" rows="6" required>{{ old('content') }}</textarea>
                @error('content') <div class="text-red-600">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-4">Toevoegen</button>
        </form>
    </div>
</x-app-layout>