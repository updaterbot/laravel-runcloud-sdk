Laravel Runcloud SDK
===

This is a simple laravel package that creates a provider for the SDK developed by onhonvercode here:
https://github.com/onhovercode/runcloud-sdk

Installation
--
Require the package via composer in your laravel app:
```bash
composer require mindfullsilence/laravel-runcloud-sdk
```

### Publish the package:
```bash
php artisan vendor:publish
```

Select `Mindfullsilence\LaravelRuncloudSdk\Providers\RuncloudClientProvider` from the list provided. 

### Add your api keys to the .env file:

```text
RUNCLOUD_PUBLIC_KEY=your-api-key
RUNCLOUD_SECRET_KEY=your-secret-key
```


Usage
--
Once installed, you can access the runcloud class instance using the facade, dependency injection, or the service container:

```php

use \Mindfullsilence\LaravelRuncloudSdk\Clients\RuncloudClient;

class SomeClass {
    public function __construct(
        RuncloudClient $runcloud
    ) {
        $this->runcloud = $runcloud;
        
        return $this->runcloud->ping() === 'pong';
    }
}
```

```php
use \Mindfullsilence\LaravelRuncloudSdk\Facades\RuncloudClient;

class SomeClass {
    public function index() {
        return RuncloudClient::ping() === 'pong';
    }
}
```

```php
use \Mindfullsilence\LaravelRuncloudSdk\Clients\RuncloudClient;

class SomeClass {
    public function index() {
        return app(RuncloudClient::class)->ping() === 'pong';
    }
    
    // or
    public function index() {
        return app('runcloud.api')->ping() === 'pong';
    }
}
```