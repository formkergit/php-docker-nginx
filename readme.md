# PHP Doccker

Personnaliser le nom de votre stack dans la variable `name` du `compose.yml`.

Lancer la stack  :  
`docker compose up -d --build `

Arrêter la stack  :  
`docker compose down`

Ensuite lancer :  
Projet : `http://localhost:8080`  
Adminer: `http://localhost:8081`  
phpMyAdmin: `http://localhost:8082`  

# Composer
## Installer des dépendances avec composer

`docker compose run --rm composer install --no-progress --no-interaction`

## Regénérer le composer.json si il a été modifié 

`docker compose run --rm composer dump-autoload`

# Tests

# Ajouter PHPUnit

`docker compose run --rm composer require --dev phpunit/phpunit`

# Lancer les tests

`docker compose run --rm phpunit ./vendor/bin/phpunit tests/GreeterTest.php`