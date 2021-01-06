# :movie_camera: PHP MOVIES BACKEND
Movie service backend developed on PHP
## TABLE OF CONTENTS
1. [  SET UP  ](#setup) 
2. [  FRONTEND  ](#front) :mega:
3. [  DATABASE  ](#db) :floppy_disk:
4. [ RUN ](#run) :rocket:
5. [ USED TECHNOLOGIES ](#tech) :hammer:
6. [  AUTHORS  ](#authors) :mailbox_closed:

<a name="setup"></a>
## 1. SET UP

1. Download and run:
```
composer i
```
```
php artisan serve
```


After downloading the file and installing dependencies, open up Apache module on Xampp, Wamp or similar to run this project. 
This page will need to be open on a localhost.

<a name="front"></a>
## 2. FRONT END
https://github.com/adrianoosses/front-php-movies

<a name="db"></a>
## 3. DATABASE

### Users
Name | Type | Description
--- | --- | ---
id | integer | auto increment
name | varchar | 
lastName | varchar |
phone | varchar |
email | varchar | 
password | varchar |
address | varchar |

### Movies
Movies will be received through an external API via frontend.

<a name="run"></a>
## 4. RUN
Operation  | Description
--- |  ---
Register | Register a new user
Log In | Log in an user
Log Out | Log Out current session


<a name="tech"></a>
## 5. USED TECHNOLOGIES
- PHP
- Laravel
- SQL



<a name="authors"></a>
## 6. AUTHORS
Adriano Osses,
Elena Sánchez de la Blanca,
Oscar Soler
