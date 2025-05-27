Laravel Backend Web Eindopdracht

Projectoverzicht

Deze Laravel 12-webapplicatie is gebouwd als eindopdracht voor het vak Backend Web.
De site bevat onder andere:

- Gebruikersbeheer met login, registratie en rollen (admin/gebruiker)
- Nieuwsbeheer: admins kunnen nieuws toevoegen, bewerken en verwijderen
- FAQ-pagina met categorieën en vragen
- Publieke profielpagina’s voor gebruikers
- Contactformulier dat e-mails verstuurt naar de admin

Functionaliteiten

1. Gebruikersbeheer
- Registratie, login en logout.
- Admin- en gebruikersrollen met juiste autorisatie.
- Profielen kunnen bekeken en aangepast worden.

2. Nieuwsbeheer
- Admins beheren nieuwsitems (CRUD).
- Nieuws bevat titel, afbeelding, content en publicatiedatum.
- Nieuws wordt publiek getoond met overzicht en detailpagina.

3. FAQ
- Veelgestelde vragen onderverdeeld in categorieën.
- Admins beheren FAQ-categorieën en vragen.

4. Contactformulier
- Bezoekers kunnen een bericht sturen naar admin.
- Bericht wordt via e-mail verzonden.

Installatie

1. Clone de repository:
   git clone https://github.com/jouwgebruikersnaam/jouwproject.git
   cd jouwproject

2. Installeer PHP dependencies:
   composer install

3. Installeer Node dependencies:
   npm install
   npm run dev

4. Kopieer .env.example naar .env en configureer je databasegegevens.

5. Genereer app key:
   php artisan key:generate

6. Voer migraties en seeding uit:
   php artisan migrate --seed

7. Start de server:
   php artisan serve

8. Open http://localhost:8000 in je browser.

Admin login

- Email: admin@ehb.be
- Wachtwoord: Password!321

Belangrijke bestanden en mappen

- app/Http/Controllers — Controllers voor nieuws, FAQ, profiel, contact
- resources/views — Blade templates (news, faq, auth, profile, admin)
- database/migrations — Database migraties
- database/seeders — Seeder voor initiële data (zoals FAQ, admin account)
- routes/web.php — Webroutes met middleware voor admin en auth

Toekomstige uitbreidingen

- Tweestapsverificatie (2FA) voor extra veiligheid
- Reactieve filtering en zoeken in nieuws en FAQ
- Berichtbeheer voor admin (inzendingen contactformulier)
- Profielfoto upload met crop-tool
- Reactieve UI met Vue.js / Livewire

Bronnen

- Laravel 12 Documentatie: https://laravel.com/docs/12.x
- Laravel Breeze: https://laravel.com/docs/12.x/starter-kits#laravel-breeze
- Bootstrap CSS framework
- OpenAI ChatGPT (voor hulp en code-voorbeeld)








<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# ProjectDynamicWeb
 
>>>>>>> 9c59ed3a877b8c7ad9c4968cf2cc173879de23fe
