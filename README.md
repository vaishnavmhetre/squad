# Squad
A social network system for I2IT
## Set up
- Clone the project
- Goto project dir
- Run `composer install`
- Run `npm install`
- Run `npm run dev` (`npm run prod` for production release)
- Copy file *.env.example* as *.env*
- Set up *Database Credentials* and *Application Url*
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan serve` to serve for testing
