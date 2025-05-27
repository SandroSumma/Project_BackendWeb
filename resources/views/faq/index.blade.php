<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Veelgestelde Vragen (FAQ)
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
        <!-- Accountbeheer -->
        <div class="mb-6">
            <h3 class="text-2xl font-bold text-white mb-3">Accountbeheer</h3>
            <ul class="space-y-2">
                <li>
                    <strong>Hoe maak ik een account aan?</strong><br>
                    Klik op “Registreren” bovenaan de pagina en vul het formulier in. Je ontvangt een bevestigingsmail om je registratie te voltooien.
                </li>
                <li>
                    <strong>Ik ben mijn wachtwoord vergeten, wat moet ik doen?</strong><br>
                    Ga naar de loginpagina en klik op “Wachtwoord vergeten?”. Je ontvangt via e-mail een link om je wachtwoord opnieuw in te stellen.
                </li>
                <li>
                    <strong>Kan ik mijn gebruikersnaam wijzigen?</strong><br>
                    Nee, gebruikersnamen zijn permanent. Je kunt wel je profielnaam aanpassen via je instellingen.
                </li>
            </ul>
        </div>

        <!-- Profiel en Privacy -->
        <div class="mb-6">
            <h3 class="text-2xl font-bold text-white mb-3">Profiel en Privacy</h3>
            <ul class="space-y-2">
                <li>
                    <strong>Wie kan mijn profiel bekijken?</strong><br>
                    Je profiel is publiek zichtbaar voor alle gebruikers, maar gevoelige gegevens blijven privé.
                </li>
                <li>
                    <strong>Hoe wijzig ik mijn profielfoto?</strong><br>
                    Ga naar je profiel en klik op “Bewerken”. Je kunt daar een nieuwe foto uploaden.
                </li>
                <li>
                    <strong>Wat gebeurt er als ik mijn account verwijder?</strong><br>
                    Al je gegevens worden permanent verwijderd uit ons systeem en kunnen niet worden hersteld.
                </li>
            </ul>
        </div>

        <!-- Nieuwsitems -->
        <div class="mb-6">
            <h3 class="text-2xl font-bold text-white mb-3">Nieuwsitems</h3>
            <ul class="space-y-2">
                <li>
                    <strong>Wie mag nieuwsberichten aanmaken?</strong><br>
                    Alleen beheerders (admins) kunnen nieuwsberichten toevoegen, wijzigen of verwijderen.
                </li>
                <li>
                    <strong>Waar vind ik oudere nieuwsberichten terug?</strong><br>
                    Je kunt door de nieuwssectie bladeren of gebruik maken van de zoekfunctie om oudere berichten te vinden.
                </li>
            </ul>
        </div>

        <!-- Contact en Ondersteuning -->
        <div class="mb-6">
            <h3 class="text-2xl font-bold text-white mb-3">Contact en Ondersteuning</h3>
            <ul class="space-y-2">
                <li>
                    <strong>Hoe neem ik contact op met de beheerder?</strong><br>
                    Je kunt het contactformulier invullen op de contactpagina. Je bericht wordt dan automatisch doorgestuurd.
                </li>
                <li>
                    <strong>Krijg ik een kopie van mijn contactbericht?</strong><br>
                    Nee, maar je ontvangt wel een bevestiging dat je bericht succesvol verzonden is.
                </li>
            </ul>
        </div>

        <!-- Beveiliging -->
        <div>
            <h3 class="text-2xl font-bold text-white mb-3">Beveiliging</h3>
            <ul class="space-y-2">
                <li>
                    <strong>Wordt mijn wachtwoord veilig opgeslagen?</strong><br>
                    Ja, wachtwoorden worden versleuteld opgeslagen volgens de best practices van Laravel.
                </li>
                <li>
                    <strong>Is tweestapsverificatie (2FA) beschikbaar?</strong><br>
                    Nog niet, maar deze functie staat gepland voor een toekomstige update.
                </li>
            </ul>
        </div>
    </div>
</x-app-layout>

