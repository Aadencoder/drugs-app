# ![DRR (Drug Review Renewal)]

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. 

Clone the repository

    git clone git@github.com:Aadencoder/drugs-app.git

Switch to the repo folder

    cd drugs-app

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate


Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate


Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

## Database seeding


Run the database seeder and you're done

    php artisan db:seed


# Test Authentication credentials
 
Applicant 
applicant@test.com
password

Reviewer
reviewer@test.com
password


Auth UI Package
- composer require `laravel/ui`
- `php artisan ui bootstrap --auth`
- `npm install && npm run dev`

# Screenshots
![alt text](https://github.com/Aadencoder/drugs-app/blob/main/public/images/DRR.png?raw=true)
![alt text](https://github.com/Aadencoder/drugs-app/blob/main/public/images/DRR1.png?raw=true)
![alt text](https://github.com/Aadencoder/drugs-app/blob/main/public/images/DRR2.png?raw=true)
![alt text](https://github.com/Aadencoder/drugs-app/blob/main/public/images/DRR3.png?raw=true)
![alt text](https://github.com/Aadencoder/drugs-app/blob/main/public/images/DRR4.png?raw=true)
![alt text](https://github.com/Aadencoder/drugs-app/blob/main/public/images/DRR5.png?raw=true)
![alt text](https://github.com/Aadencoder/drugs-app/blob/main/public/images/DRR6.png?raw=true)
![alt text](https://github.com/Aadencoder/drugs-app/blob/main/public/images/DRR7.png?raw=true)
![alt text](https://github.com/Aadencoder/drugs-app/blob/main/public/images/DRR8.png?raw=true)
