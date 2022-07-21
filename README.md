<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Project Setup Guide

* Project requirement 
    - THis project is in Laravel 9 so please check the Laravel 9 Official Document to check sever requirement    
* Clone the github repository in system
    ```shell script
    git clone project-repository-url
    ``` 
* Go to your project folder & Run composer install using below command
    ```shell script
    cd your-project-root-path
    composer install
    ``` 
* After create .env file from .env.example and generate key if .env not create after composer install using below command
    ```shell script
    cp .env.example .env
    php artisan key:generate
    ```
* Create Database & set DB detail on .env 
     ```yaml
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE="db-name"
    DB_USERNAME="db-user-name"
    DB_PASSWORD="db-password"
    ```
* Run migration after set db detail below command
    ```shell script
    php artisan migrate
    ```
* For run project go to your project directory and run below command
    ```shell script
    cd your-project-root-path
    php artisan serve
    ```
## Project Clarification
* When we adding or editing page below slug are not allowed 
    ```markdown
    page,add,edit
    ```
* I don't put out any validation or warning for deleting parent page if they have any children. 
