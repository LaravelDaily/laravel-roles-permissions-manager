## Laravel Roles Permissions Admin - Spatie version

This is a Laravel 5.4 adminpanel starter project with roles-permissions management based on [Spatie Laravel-permission package](https://github.com/spatie/laravel-permission), [AdminLTE theme](https://adminlte.io/) and [Datatables.net](https://datatables.net).

We've also created almost identical project based on Joseph Silber's Bouncer package: [see here](https://github.com/LaravelDaily/laravel-roles-permissions-bouncer)

Part of this project was generated automatically by [QuickAdminPanel system](https://quickadminpanel.com/).

![Larancer screenshot](http://webcoderpro.com/roles-permissions-manager-spatie.png)

## Usage

This is not a package - it's a full Laravel project that you should use as a starter boilerplate, and then add your own custom functionality.

- Clone the repository with `git clone`
- Copy `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate --seed` (it has some seeded data - see below)
- That's it: launch the main URL and login with default credentials `admin@admin.com` - `password`

This boilerplate has one role (`administrator`), one permission (`users_manage`) and one administrator user.

With that user you can create more roles/permissions/users, and then use them in your code, by using functionality like `Gate` or `@can`, as in default Laravel, or with help of Spatie's package methods.

## License

The [MIT license](http://opensource.org/licenses/MIT).

## Notice

We are not responsible for any functionality or bugs in **AdminLTE**, **Laravel-permission** or **Datatables** packages or their future versions, if you find bugs there - please contact vendors directly.