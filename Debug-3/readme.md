# Peer debugging

Dit is een project voor peer debugging.
Er zijn een aantal verschillende problemen in dit project, kun jij ervoor zorgen dat de code werkt zoals verwacht?

## Verwacht resultaat
Dit is een nieuws website waarbij de laatste nieuws items van de NOS feed worden getoond.  
- Op de index pagina moet een overzicht van 5 berichten weergegeven worden. 
- Op de index pagina moet van elk bericht maximaal 100 karakters van de inhoud getoond worden.
- De vormgeving uit de style.css moet ingeladen worden.

## De huidige problemen
- De berichten worden niet weergegeven, ik zie alleen witte blokken.
- Er moeten 5 verschillende berichten worden weergegeven met live informatie uit de nos-feed, maar er wordt er maar 1 weergegeven. 
- De titels van de berichten zijn leeg, ik zie de teksten niet.
- ALs ik op de info pagina ben dan is dit menu item niet actief.
- In de html zie ik bovenaan nog een aantal lege regels staan, denk je dat je die kunt verwijderen?

<hr>

## Over dit project
Dit project is gebasseerd op Docker en is opgezet met een NGINX webserver, PHP en een MariaDB database.  
In de public folder vind je bestanden die toegankeijk zijn vanuit de browser, buiten de public folder vind je bestanden die niet publiekelijk toegankelijk zijn, zoals config bestanden en libraries.  
Het docker-compose.yml is het moeder bestand waar in staat welke services er nodig zijn om dit project te draaien.

<hr>

## Setup
### 1 Dependecies
Zorg ervoor dat je Docker desktop hebt draaien.  
Download eventueel hier: [https://www.docker.com](url)  
En volg de installatie stappen van Docker.

### 2 Port available
Het kan zijn dat er een andere Docker omgeving aan staat, zet die dan eerst uit.  
Je hebt als het goed is nu geen XAMP / MAMP / LAMP / WAMP / of docker container draaien.

### 3 Start de docker container
Kopieer het .env.example bestand naar een .env bestand en vul daar jouw (verzonnen) database gegevens in.
```
cp .env.example .env
```

### 4 Start de docker container
Ga nu via de commandline ( CMD of Terminal ) naar de folder waar je docker-compose.yml file staat en start docker met het volgende commando:
```
docker-compose up
```

Wil je deze container in de achtergrond draaien, dus dat je terminal scherm niet vol loopt met tekst, voer dan het volgende commando uit:
```
docker-compose up -d
```

### 5 Test je website
Ga nu naar de volgende url en geniet van je virtuele omgeving met PHP:
[http://localhost](url)
