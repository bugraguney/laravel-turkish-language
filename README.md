[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
# Laravel Türkçe Dil Dosyaları

Laravel 5.7 için türkçe dil dosyaları paketi. 

Paket ile gelen dosyalar:

```
tr.json
tr/auth.php
tr/passwords.php
tr/pagination.php
tr/validation.php
```

##Kurulum

Bu paketi composer kullanarak yükleyebilirsiniz:

```bash
composer require bugraguney/laravel-turkish-language
```

Aşağıdaki komutla çeviri dosyalarını kullanmak ve güncelleyebilmek için proje içerisine çıkartabilirsiniz:

```bash
php artisan vendor:publish --tag=lang
```

Ya da aşağıdaki kodu da kullanabilirsiniz:

```bash
php artisan turkish:install-lang
```

Türkçe dil dosyalarını kullanmak için `config/app.php` dosyasında bulunan `locale` değerini değiştirmeniz gerekmektedir.

```
'locale' => 'tr',
```

[ico-version]: https://img.shields.io/packagist/v/bugraguney/laravel-turkish-language.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/bugraguney/laravel-turkish-language.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/bugraguney/laravel-turkish-language
[link-downloads]: https://packagist.org/packages/bugraguney/laravel-turkish-language
[link-author]: https://github.com/bugraguney