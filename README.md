# No service anymore.

# Kba-API

Ein Paket der Cierra-GmbH

Für mehr Informationen besuchen Sie:
[Cierra KBA - API](https://kba.cierra.eu/)

# Installation
1. `composer require cierra-gmbh/kbaapi`
2. Serviceprovider in der `app.php` registrieren
      
    ```
     //...
            Cierra\Kbaapi\KbaapiServiceProvider::class,
     //...
     ```
3. Die Konfiguration und den Serviceprovider laden mit `php artisan vendor:publish`

 
 # Konfiguration
 Loggen sie sich unter der [KBA-API Oberfläche](https://kba.cierra.eu/login) ein und gehen Sie auf:
 - Meine Einstellungen
 - API
 
 und erstellen Sie sich einen API-Token
 Diesen schreiben Sie in Ihre .env Datei:
 `KBAAPI_TOKEN=TOKEN`
 
 # Benutzung
 Ausgabe eines Datensatzes mit:
 ```
    $kba = new \Cierra\Kbaapi\Kba();
    echo $kba->get($hsn, $tsn);
```
 Validierung einer Kombination mit:
 ```
    $kba = new \Cierra\Kbaapi\Kba();
    echo $kba->validate($hsn, $tsn);
```
 
