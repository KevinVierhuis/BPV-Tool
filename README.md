# README

---

# BPV Tool Website

## Overzicht

De BPV Tool Website is een webapplicatie ontworpen om stage-informatie van studenten bij te houden en te beheren, de status van documenten te volgen en verschillende functionaliteiten te bieden, zoals navigeren naar pagina's van studenten. De applicatie gebruikt geen database; in plaats daarvan worden gegevens handmatig beheerd en weergegeven via statische bestanden en Blade-templates.

## Functionaliteiten

- **Studentenpagina**: Toont informatie over studenten en hun stage-statussen.
- **Docentzakenpagina**: Een pagina voor acties en informatie gericht op docenten.
- **Bestandsbeheer**: Mogelijkheid om statische gegevens te beheren en weer te geven.
- **Modals**: Worden gebruikt voor statusupdates en interacties.
- **Responsief ontwerp**: Gebruikt Bootstrap voor een responsieve en moderne gebruikerservaring.

## Gebruikte Technologieën

- **Laravel**: PHP-framework voor de back-end en routing.
- **Bootstrap 5**: Gebruikt voor responsief ontwerp en opmaak.
- **Font Awesome**: Gebruikt voor iconen.
- **Blade Templates**: Gebruikt voor het renderen van weergaven.

## Installatie-instructies

Volg de onderstaande stappen om de website lokaal op je machine te draaien.

### Vereisten

Zorg ervoor dat de volgende software is geïnstalleerd voordat je het project installeert:

- PHP >= 7.4
- Composer (voor PHP-afhankelijkheden)
- Laravel
- Node.js (voor het beheren van front-end afhankelijkheden)

### 1. Clone de Repository

```bash
git clone https://je-repository-link.git
cd je-project-directory
```

### 2. Installeer PHP-afhankelijkheden

In de hoofdmap van het project, voer het volgende uit:

```bash
composer install
```

### 3. Installeer Front-End Afhankelijkheden

Installeer de front-end afhankelijkheden met npm:

```bash
npm install
```

### 4. Zet het Omgevingsbestand op

Kopieer het bestand `.env.example` naar `.env`:

```bash
cp .env.example .env
```

Genereer de applicatiesleutel:

```bash
php artisan key:generate
```

### 5. Start de Applicatie

Je kunt de lokale ontwikkelserver starten met:

```bash
php artisan serve
```

Bezoek `http://localhost:8001` in je browser om de website te openen.

## Projectstructuur

- **routes/web.php**: Bevat alle routes voor de applicatie.
- **resources/views**: Bevat alle Blade-templates.
  - `studentenzaken.blade.php`: De pagina die studenteninformatie toont.
  - `docentzaken.blade.php`: Een pagina die docent-specifieke acties en gegevens toont.
  - `layout.blade.php`: Een basislayout-bestand dat wordt gebruikt voor alle weergaven.
  - `editStatus.blade.php`: De pagina waar de status van stages verandert kunnen worden
  - `web.php`: De routes worden bepaald in dit bestand
- **public/css**: Bevat stylesheets en statische bestanden.
- **public/images**: Bevat afbeeldingsbestanden die in de applicatie worden gebruikt.
- **app/Http/Controllers**: Controllers om verschillende acties te verwerken.

## Gebruik

### Pagina's en Routes

1. **/studentenzaken** - Toont informatie over studenten en de stage-statussen.
2. **/docentzaken** - Toont docent-specifieke gegevens en acties.

### Modals en Statusupdates

In de **Docentzaken Sectie**, kun je de status van een stage handmatig bijwerken door te navigeren naar een specifieke pagina en wijzigingen aan te brengen in de statische gegevens (indien nodig).
