1. Prerequisites
    Before you start, make sure you have the following installed:

    PHP (version ^8.1), Composer, MySQL, Node

2. Installation
    Clone this repository.
    Move to 'main' branch
    Navigate to the project directory.
    Install dependencies using Composer:
        composer install
    Create .env file
        cp .env.example .env
    Set up your database configuration in .env file:
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=laravel_assesment
        DB_USERNAME=your_username
        DB_PASSWORD=your_password
    Run Migrations & Seesder command:
        php artisan migrate
        php artisan db:seed
    NPM Install
        npm i
        npm run dev
    Start the Laravel development server:
    php artisan serve

3. User Information
    user email: john@example.com
    user password: password

    admin email: admin@example.com
    admin password: 12345678