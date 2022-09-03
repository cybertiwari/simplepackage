# Installation Instruction

This is simple composer package just for testing.

## Installation

Use the package manager [composer](https://getcomposer.org/) to install this package.

```bash
composer require cybertiwari/simplepackage
```

## Usage

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use CyberTiwari\SimplePackage\HelloWorld;

$data = new HelloWorld;
$data->sayHello();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](licence.md)