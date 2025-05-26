<h1>Profiel van {{ $user->username ?? 'Gebruiker' }}</h1>
<p>Verjaardag: {{ $user->birthday ?? 'Niet ingevuld' }}</p>
<p>Over mij: {{ $user->about ?? 'Geen info' }}</p>
