# ToxiMeter backend

## About the project
ToxiMeter is an application that allows to determine if given text is offensive or not. It returns probability of it. 

## [Demo](https://www.toxic.polarlooptheory.pl)

![Website preview](https://i.imgur.com/7cAFmsk.png)

## Artificial Intelligence
The program that returns the probability is written in Python (3.6) and it uses Tensorflow. The network learned from an existing dataset.

## Backend
Laravel was used to create endpoints and displaying frontend.

## Frontend
[ToxiMeter-FrontEnd GitHub repository](https://github.com/Talorvi/ToxiMeter-FrontEnd)

## Project setup
- create .env
- ```composer install```
- ```php artisan serve```

For the route list: ```php artisan route:list```<br /> <br />
To update the frontend copy the content of index.html located in the dist folder (after building) of the frontend project and replace
the insides of welcome.blade.php. Then copy js and css folder and place it to public folder.
