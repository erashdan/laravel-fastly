# Fastly Laravel [![Build Status](https://travis-ci.org/erashdan/laravelfastly.svg?branch=master)](https://travis-ci.org/erashdan/laravelfastly)

* [Installation](#installation)
* [Usage](#usage)
* [Testing](#testing)
* [Credits](#credits)
* [Todo](#todo)

This is a wrapper around [Fastly SDK](https://github.com/fastly/fastly-php) for Laravel.

## Installation
This package can be used in Laravel 5.5 or higher.

You can install the package via composer:
``` bash
composer require erashdan/laravelfastly
```

Laravel's package auto discovery will automatically register the service provider for you.

Then you need to publish the configuration to your project:

```bash
php artisan vendor:publish --provider="Erashdan\LaravelFastly\FastlyServiceProvider" --tag="config"
``` 

And add the key used for the hashing in .env file
```dotenv
HASHID_KEY=FASTLY_API_KEY
```

## Usage
You can clear the cache from fastly using the `Fastly` Facade
```php
Fastly::purgeUrl('get-url')
//OR
Fastly::purgeUrl('post-url', 'POST')
```

The facade also accept an array of URIs to be cleared
```php
Fastly::purgeUrl(['first-url', 'second-url'])
```

### Testing
``` bash
composer test
```

## Credits
- [Emad Rashdan](https://github.com/erashdan)

## TODO 
```.todo
- [x] Build first version.
- [] Purge by service ID
```