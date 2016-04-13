# php-nasa-neo-wrapper

Quick PHP wrapper class to retrieve data from Nasa's Near Earth Object API

## Usage
```php
$neoWs = new NasaAsteroids();
$neoWs->find('3542519');
$neoWs->browse();
$neoWs->feed();
```
https://api.nasa.gov/api.html#NeoWS