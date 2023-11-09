# Laravel Nova User Activity

## Installation

```shell
composer require wamesk/laravel-nova-user-activity
```

You can now use `ActiveUserPerDay` metrics in your Nova Dashboard or wherever you like

```php
    new \Wame\LaravelNovaUserActivity\Nova\Metrics\ActiveUsersPerDay(),
```

Or you can run `vendor:publish` and customize it however you like.

```shell
php artisan vendor:publish --provider=Wame\LaravelNovaUserActivity\NovaUserActivityServiceProvider
```

Now you can use it like this

```php
    new \App\Nova\Metrics\ActiveUsersPerDay(),
```
