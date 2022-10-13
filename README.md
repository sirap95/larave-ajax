# LARAVEL-AJAX

Laravel-ajax is a basic project done in Laravel to show how to use ajax and jquery to submit form and store data into mySql

this project is showed in detail in my blog.

## Installation

Use composer and php artisan.

```bash
composer install

php artisan key:generate

sudo mv .env.example .env

sudo nano .env #add the DB configuration

php artisan serve #if you don't use homestead
```

## Usage

Check the section /resources/view/item.blade.php, almost everything is inside this blade, the html code and the ajax function.

Also there is app/models/Item.php that is the model of the table Item

and app/http/controllers/ItemController.php, that is the controller that will store all the information received by the ajax to our DB


## Author

[@sirap95](https://www.github.com/sirap95)
