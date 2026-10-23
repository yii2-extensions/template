# Configuration guide

Describe how an application registers and configures the extension.

## Application configuration

Show the configuration an application adds, for example a component in `config/web.php`.

```php
return [
    'components' => [
        // ...
    ],
];
```

Document every option in the PHPDoc of its property in `src/`: the API reference generated from it lists each property
with its type, default value and description, so this guide explains how the options work together instead of repeating
them in a table.

[Back to documentation](../README.md#documentation)
