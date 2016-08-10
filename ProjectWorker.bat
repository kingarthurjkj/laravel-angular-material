@echo off

start cmd /k gulp ^& gulp watch

start cmd /k php artisan serve --host=192.168.1.57 --port=8000

start title Laravel Artisan