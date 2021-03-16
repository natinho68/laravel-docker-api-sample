# laravel-docker-sample-api
A simple project to create a laravel api with docker container

docker-compose up --build

connect to container "php"

php artisan migrate

php artisan db:seed

create an user with POST /user (required: name, email, password)

target /auth/login with credentials will return a bearer token

target api routes with Authorization header