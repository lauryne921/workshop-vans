#!/bin/bash

docker-compose up -d --build

sleep 20

docker-compose exec app composer install

docker-compose exec app cp .env.example .env

docker-compose exec app php artisan key:generate

docker-compose exec app php artisan migrate

docker-compose exec app npm install

docker-compose exec app npm install vite

echo "Ouvrez un terminal dans le répertoir du projet, exécutez la commande 'npm run dev' puis dans un autre terminal 'php artisan serve'"
echo "L'application se trouve sur le http://localhost:8000 et phpmyadmin sur http://localhost:8080"