# Laravel Tabler UI

<a href="https://packagist.org/packages/godruoyi/laravel-tabler-ui"><img src="https://poser.pugx.org/godruoyi/laravel-tabler-ui/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/godruoyi/laravel-tabler-ui"><img src="https://poser.pugx.org/godruoyi/laravel-tabler-ui/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/godruoyi/laravel-tabler-ui"><img src="https://poser.pugx.org/godruoyi/laravel-tabler-ui/license.svg" alt="License"></a>

## Introduction

Laravel ui package for tabler presets.

## Installing

```shell
$ composer require godruoyi/laravel-tabler-ui -vvv
```

The official version hasn't been released, you can install dev-master via:

```shell
$ composer require godruoyi/laravel-tabler-ui:dev-master
```

## Usage

```
// Generate basic scaffolding...
php artisan ui tabler

// or

// Generate login / registration scaffolding...
php artisan ui tabler --auth
```

More use go to [Laravel Ui Official Documentation](https://github.com/laravel/ui).

If you want use Chinese language for authentication views, you can publish `zh_CN.json` to `resource/lang`:

```
php artisan vendor:publish --tag=laravel-tabler-lang-cn
```

## Preview

[OnLine preview](https://laravel-tabler-ui-preview.godruoyi.com/)

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/godruoyi/laravel-tabler-ui/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/godruoyi/laravel-tabler-ui/issues).

## License

Laravel UI is open-sourced software licensed under the [MIT license](LICENSE.md).
