# Elomentary

The simple, objected oriented wrapper for the Eloqua REST API.

## Features

* Follows PSR-0 conventions for friendly autoloading
* Extensively tested and documented

## Requirements

* PHP >= 5.3.3 with [cURL](http://php.net/manual/en/book.curl.php),
* [Guzzle](https://github.com/guzzle/guzzle) library,
* For developing and contributing: PHPUnit.

## Installation

The best way to install Elomentary is via git and Composer!

[Composer](http://getcomposer.org/) is a dependency manager for PHP. The easiest
way to install Composer for *nix (including Mac):

```bash
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```

More detailed installation instructions for multiple platforms can be found in
the [Composer Documentation](http://getcomposer.org/doc/00-intro.md).

### Normal installation

```bash
# Download Elomentary
git clone https://github.com/tableau-mkt/elomentary.git elomentary
# Download dependencies
cd elomentary
composer update --no-dev
```

That's it! If you ever need to update Elomentary, just use the following
commands:

```bash
# Update Elomentary
cd /path/to/elomentary
git pull
# Update Elomentary dependencies
composer update --no-dev
```

### Development installation

If you want to contribute to Elomentary development, you'll want to download the
dependencies for performing unit tests as well.

```bash
# Make a projects directory if it doesn't already exist.
mkdir -p $HOME/libs
# Download Elomentary and development dependencies.
git clone https://github.com/tableau-mkt/elomentary.git $HOME/libs/elomentary
# Download dependencies.
composer update --working-dir $HOME/libs/elomentary
```

### Autoloading

In day-to-day projects, you may want to require Elomentary using Composer's
autoloader. You can add a requirement like so:

```yaml
{
  "require": {
    "tableau-mkt/elomentary": "*"
  },
  "minimum-stability": "dev"
}
```

## Basic usage

```php
<?php

// This file is generated by Composer
require_once 'vendor/autoload.php';

$client = new \Eloqua\Client();
$contacts = $client->api('contacts')->search('*@example.com');
```

From `$client`, you can access all implemented Eloqua API services.

## Documentation

Detailed documentation is available in `doc`, [located here](doc/index.md).
