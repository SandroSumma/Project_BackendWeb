<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profielinformatie') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Werk je profielgegevens bij, inclusief naam, e-mailadres, gebruikersnaam en meer.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">

        @csrf
        @method('patch')

        {{-- Naam --}}
        <div>
            <x-input-label for="name" :value="__('Naam')" />
            <x-text-input
                id="name"
                name="name"
                type="text"
                class="mt-1 block w-full dark:bg-gray-900 dark:border-gray-700 dark:text-gray-100"
                :value="old('name', $user->name)"
                required
                autofocus
                autocomplete="name"
            />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        {{-- E-mailadres --}}
        <div>
            <x-input-label for="email" :value="__('E-mailadres')" />
            <x-text-input
                id="email"
                name="email"
                type="email"
                class="mt-1 block w-full dark:bg-gray-900 dark:border-gray-700 dark:text-gray-100"
                :value="old('email', $user->email)"
                required
                autocomplete="username"
            />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-2 text-sm text-gray-800 dark:text-gray-200">
                    {{ __('Je e-mailadres is niet geverifieerd.') }}

                    <button
                        form="send-verification"
                        class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    >
                        {{ __('Klik hier om de verificatie-e-mail opnieuw te verzenden.') }}
                    </button>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('Een nieuwe verificatielink is verzonden naar je e-mailadres.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        {{-- Gebruikersnaam --}}
        <div>
            <x-input-label for="username" :value="__('Gebruikersnaam')" />
            <x-text-input
                id="username"
                name="username"
                type="text"
                class="mt-1 block w-full dark:bg-gray-900 dark:border-gray-700 dark:text-gray-100"
                :value="old('username', $user->username)"
                autocomplete="username"
            />
            <x-input-error class="mt-2" :messages="$errors->get('username')" />
        </div>

        {{-- Verjaardag --}}
        <div>
            <x-input-label for="birthday" :value="__('Verjaardag')" />
            <x-text-input
                id="birthday"
                name="birthday"
                type="date"
                class="mt-1 block w-full dark:bg-gray-900 dark:border-gray-700 dark:text-gray-100"
                :value="old('birthday', $user->birthday)"
                autocomplete="bday"
            />
            <x-input-error class="mt-2" :messages="$errors->get('birthday')" />
        </div>

        {{-- Over mij --}}
        <div>
            <x-input-label for="about" :value="__('Over mij')" />
            <textarea
                id="about"
                name="about"
                rows="4"
                class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
            >{{ old('about', $user->about) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('about')" />
        </div>

        {{-- Profielfoto --}}
<div>
    <x-input-label for="profile_photo" :value="__('Profielfoto')" />
    <input
        id="profile_photo"
        name="profile_photo"
        type="file"
        accept="image/*"
        class="mt-1 block w-full text-gray-900 dark:text-gray-100"
    />
    <x-input-error class="mt-2" :messages="$errors->get('profile_photo')" />

    @if ($user->profile_photo)
        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Huidige foto:') }}</p>
        <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="Profielfoto" class="mt-1 w-24 h-24 rounded-full object-cover">
    @endif
</div>

        {{-- Submit + Feedback --}}
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Opslaan') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >
                    {{ __('Opgeslagen.') }}
                </p>
            @endif

            @if(session('success'))
                <p class="text-sm text-green-600 dark:text-green-400">
                    {{ session('success') }}
                </p>
            @endif
        </div>
    </form>
</section>
