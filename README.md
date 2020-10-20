## About this repo

Trying to play with laravel 7.1.1 and Vue2,
making some component, and play with them.
For learing purpose.

Using this blog's source
https://blog.pusher.com/why-vuejs-laravel/?fbclid=IwAR3vWPRbLS375rs2YYNDboTrqJDfwNW267_9cTq-1yhOxVoYN1nYaOLg9bI

### Usage

git clone https://github.com/Bazsmagister/Vue_7.git

cd [into_the_cloned_repo]

composer install

//linux
cp .env.example .env

//windows
copy .env.example .env

edit .env file with database credentials

php artisan key:generate

php artisan migrate:fresh --seed

php artisan serve

---

The scoped attribute is a boolean attribute.
When present, it specifies that the styles only apply to this element's parent element and that element's child elements (not the entire document).
Note: The scoped attribute is deprecated and will be removed. Do not use it.

---

https://laravel.com/docs/8.x/eloquent-resources

---

php artisan make:model Substance -mfs

php artisan make:controller --model=Substance --api SubstanceController
I created both
php artisan make:controller --model=Substance --resource SubstanceResourceController

php artisan make:resource Substance

I created both

php artisan make:resource SubstanceCollection

A resource class represents a single model that needs to be transformed into a JSON structure.

---

API Resource is a transformation layer. if you don't want to output eloquent models 1:1.

the data wrapping is also a plus, if you want to output previous/next... links and/or some other metadata in the result

https://vuejs.org/v2/cookbook/using-axios-to-consume-apis.html

https://laravel-news.com/building-a-flash-message-component-with-vue-js-and-tailwind-css

---

composer require barryvdh/laravel-debugbar --dev
