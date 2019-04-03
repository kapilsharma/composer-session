* Keywords - Use An array of keywords that the package is related to. These can be used for searching and filtering.
Eg:
```
"keywords": [
        "spatie",
        "backup",
        "database",
        "laravel-backup"
    ],
```
* Autoload using PSR-4 and files auto-loading - files auto-loading useful when you wanted to use a file on every request.
E.g and helper file contains functions.
```
"autoload": {
        "psr-4": {
            "OneFit\\VirtuaGymConnect\\": "src/"
        }
         "files": [
                    "src/Helpers/functions.php"
        ]
    },
``` 
* autoload-dev - this ensure you load the files which are intent for development purpose, 
like test scripts and avoid polluting your production env. 
```
"autoload-dev": {
      "psr-4": { "OneFit\\VirtuaGymConnect\\Tests\\": "tests/" }
    },
```
* require - All require dependencies used by package should be goes here.
```
"require": {
        "php": "^7.2",
        "illuminate/console": "~5.8.0",
        "illuminate/contracts": "~5.8.0",
        "illuminate/events": "~5.8.0",
        "illuminate/filesystem": "~5.8.0",
        "illuminate/notifications": "~5.8.0",
        "illuminate/support": "~5.8.0",
        "league/flysystem": "^1.0.49",
        "spatie/db-dumper": "^2.12",
        "spatie/temporary-directory": "^1.1",
        "symfony/finder": "^4.2"
    },
```
* require-dev - List of packages used for development of the package, e.g test, logs, 
```
"require-dev": {
        "laravel/slack-notification-channel": "^1.0",
        "mockery/mockery": "^1.0",
        "orchestra/testbench": "~3.8.0",
        "phpunit/phpunit": "^8.0"

    },
```
* scripts - list of scripts you wanted to execute on an specific event or with a custom event
e.g 
```
"scripts": {
        "post-autoload-dump": [
            "Illuminate\\Foundation\\ComposerScripts::postAutoloadDump",
            "@php artisan package:discover --ansi"
        ],
        "post-root-package-install": [
            "@php -r \"file_exists('.env') || copy('.env.example', '.env');\""
        ],
        "post-create-project-cmd": [
            "@php artisan key:generate --ansi"
        ]
    }
```
script with custom events, like running phpunit test
```
 "scripts": {
        "test": "vendor/bin/phpunit"
    },
```
* config - this will help to do multiple task like sorting package name or defining which install to prefer or handling github auth, etc
e.g 
```
"config": {
        "optimize-autoloader": true,
        "preferred-install": "dist",
        "sort-packages": true
    },
```
* minimum-stability  
* prefer-stable 
e.g: 
```
"minimum-stability": "dev",
"prefer-stable" : true
```
This basically means it will always use stable UNLESS there is no way to install a stable dependency, and therefore use dev.

* extra - laravel package auto discovery feature
e.g: 
```
"extra": {
        "laravel": {
            "providers" :[
                "OneFit\\VirtuaGymConnect\\Providers\\VirtuaGymConnectServiceProvider"
            ],
            "aliases": {
                "VirtuaGym": "OneFit\\VirtuaGymConnect\\Facades\\VirtuaGym"
            }
        }
    }
```

* API Key (v3): 1c71e3d9c23bd528479c8c7bee7bb57e
* API read access token (V4): eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIxYzcxZTNkOWMyM2JkNTI4NDc5YzhjN2JlZTdiYjU3ZSIsInN1YiI6IjVjYTQ3MTgyOTI1MTQxMmRmZjFkZGYxMyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Arho5Mu6-CehUX8mJThOUVxZvmp6x7_jjXQ-BjyB-FQ

API we gonna implement:
https://api.themoviedb.org/3/movie/299534
https://api.themoviedb.org/3/movie/{id}/images
https://api.themoviedb.org/3/trending/{all}/{day}


- folder structure
- config - for handling config related data
- src - for handling all my package code
    - Providers
        MovieDbServiceProvider.php
    - Facades
        MovieDb
    - Interfaces / Contracts
    - Exceptions
    - DataModels
    - Traits
    
- test - for handling all my package test code



* Need to prepare difference between PSR-4 and PSR-0 auto-loading