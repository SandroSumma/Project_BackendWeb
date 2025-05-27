<x-app-layout>
    <x-slot name="header">
        <h2>Contact</h2>
    </x-slot>

    <div class="py-6 max-w-xl mx-auto">
        @if(session('success'))
            <div class="mb-4 text-green-600 dark:text-green-400">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('contact.send') }}" class="space-y-4">
            @csrf

            <div>
                <x-input-label for="name" :value="'Naam'" />
                <x-text-input id="name" name="name" type="text" required autofocus />
                <x-input-error :messages="$errors->get('name')" />
            </div>

            <div>
                <x-input-label for="email" :value="'E-mailadres'" />
                <x-text-input id="email" name="email" type="email" required />
                <x-input-error :messages="$errors->get('email')" />
            </div>

            <div>
                <x-input-label for="message" :value="'Bericht'" />
                <textarea id="message" name="message" rows="5" required class="block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white"></textarea>
                <x-input-error :messages="$errors->get('message')" />
            </div>

            <x-primary-button>Verstuur</x-primary-button>
        </form>
    </div>
</x-app-layout>
