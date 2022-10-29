[![Latest Version on Packagist](https://img.shields.io/packagist/v/epmnzava/audit_trails.svg?style=flat-square)](https://packagist.org/packages/epmnzava/audit_trails)
[![Total Downloads](https://img.shields.io/packagist/dt/epmnzava/audit_trails.svg?style=flat-square)](https://packagist.org/packages/epmnzava/audit_trails)
![GitHub Actions](https://github.com/epmnzava/audit_trails/actions/workflows/main.yml/badge.svg)

## Installation

You can install the package via composer:

```bash
composer require epmnzava/audit_trails
```

## Usage

```php
//below is how you can use this package to log activities
   public function test_log(Request $request)
    {

        //log_audit(string $event, string $event_category, array $request, array $response, string $ip, string $fullUrl, string $device, string $comment,  $userid = null, $request_id = null, $session_id = null)
        log_audit("LOGIN", "MEMBER AUTHENTICATION", $request->all(), ["status" => 200, "message" => "success"], $request->ip(), $request->fullUrl(), $request->userAgent(), "System member has successfully login", 1, null, null);

    }

    //output
       id: 1
         event: LOGIN
event_category: MEMBER AUTHENTICATION
       request: []
      response: {"status":200,"message":"success"}
            ip: 127.0.0.1
        device: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36
       fullUrl: http://packagetester.test/test_log
       comment: System member has successfully login
        userid: 1
    request_id: NULL
    session_id: NULL
    created_at: 2022-10-29 07:22:52
    updated_at: 2022-10-29 07:22:52
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email epmnzava@gmail.com instead of using the issue tracker.

## Credits

- [Emmanuel Mnzava](https://github.com/epmnzava)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
