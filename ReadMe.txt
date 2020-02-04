Laravel_Version_6.14 JWT(Json Web Token) Installation
------------------------------------------------------

-- Installing Laravel_6.14 with bootstrap and and authentication

$composer require laravel/ui --dev

$php artisan ui bootstrap --auth

$npm install

// Run all Mix tasks...
$npm run dev

// Run all Mix tasks and minify output...
$npm run production

-- JWT(Json Web Token) Installation

//Installing the jwt-auth plugin with the tag version. Check the latest tag version from the git repository `https://github.com/tymondesigns/jwt-auth`
$composer require tymon/jwt-auth:1.0.0-rc.5.1

//Publish the config, it will publish the package config file at `config/jwt.php`

$php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"

//Generate secret key. This will update your `.env` file with something like `JWT_SECRET=XXXXXXXXXXXXXX`

$php artisan jwt:secret

