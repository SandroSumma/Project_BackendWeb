<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="{{ route('profile.update') }}" method="POST">
    @csrf
    @method('PATCH')

    <label>Username:</label>
    <input type="text" name="username" value="{{ old('username', $user->username) }}">
    @error('username') <div>{{ $message }}</div> @enderror

    <label>Verjaardag:</label>
    <input type="date" name="birthday" value="{{ old('birthday', $user->birthday) }}">
    @error('birthday') <div>{{ $message }}</div> @enderror

    <label>Over mij:</label>
    <textarea name="about">{{ old('about', $user->about) }}</textarea>
    @error('about') <div>{{ $message }}</div> @enderror

    <button type="submit">Opslaan</button>
</form>