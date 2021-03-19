<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

##  Laravel Install Step by Step by LocDo

git clone : https://github.com/phuclp00/test
git checkout user_profile

create database : dbbookstore 
composer install 
npm install 

costume : .env 
<textfield>
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:4MJE5/ySUa2KeE/c0vP7MRr4r5JvY8qlFS3xmIbxi3E=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dbbookstore
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=pusher
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=database
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=1ff94ddeb91ada
MAIL_PASSWORD=d74bf0ff01f0a6
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=1150809
PUSHER_APP_KEY=09623629634650020d40
PUSHER_APP_SECRET=eaf08cd7e41a4a691e5e
PUSHER_APP_CLUSTER=ap1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

NEXMO_KEY=7080fca2
NEXMO_SECRET=iFFCpoelA3jBPpji
NEXMO_APPLICATION_ID=a7abfabd-6a73-48aa-ae41-e54580b4c0f2
NEXMO_PRIVATE_KEY="-----BEGIN PRIVATE KEY-----
MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDcmwOa3OjoVJAe
T7AXg0UiZB4TX7kvczDSiaJendgGL6Tv9/0Yhdh8/R9pfvdc9KtwdVN40OXFZVfW
NSf+XgGjBxhRdsR4YInREzyhMYIQjHiBzQfvmmmA+/Jn6x0Cs+KrgU62Wu+5p1jl
Pf98ycbRm5wM4Pw81f8sOoxmgpTr0F7XQMGm17asyLp7S+wmvDlvrl6v4F6OQImJ
3wlvDkwLcizM6JUW7RaveY9fP/iFhnXgXOJEeQ63Yck7z1c5ThS5E8E2h3XeOaEJ
LUNTSATcx3I0WRF5KqP2c78loJpcSqQI7Ci1bnPZpA1C/oNfgTTFIo2kyr5g5zae
bDLE25iBAgMBAAECggEACjm2NFCujAxVZM5JSYG4a+Rrn3bFqO0kM3IVQGD9ISZG
tSfPx7n2g66g7N0pfpnJs4wAqz41lE2DAYcTvD7jwQiEaExCxZil8ra7TfZzQqyc
LloQVtsXrlafURFNFjG73TrAaQP0jiyzWmbiB4j7yf32QQORtYkuy4BIPz0oxXhc
UN5qWOwBwiH3un7QvaYhHIf6vlQ/xG3U429TVW7Ge60kKLGLjE8iIUJgMc4DJeNm
jVuZuNzx7DZmrr9ueY9vGPCMRX22AHuTV+dsWlGYjPKqKF9YOjT/6Z/2KEvr4vrF
4vvdaRFvE9+D+GF5RVcBF0tBZPdD7x1HCf73cVwXNQKBgQDwDf621pAYvxATvbmQ
4ATQMFMjGmddFRkhzsC9lQk2BtwCKmMcmrmmB6DC8M1Y+McTOR36Ch4Kdvv8K3UF
XHO1cA6pZD3l5Gfpj81fiyyL/DK3MHAMlsahHI55yHsqwGcN2KIagbMSSGiMmU2o
LluvDvi14jygoGkdBZ/OPdI23QKBgQDrQkvnr30i1hWzR3sJAgC6SI43PSfCMLvu
NUD+fQletRXwKdNMILUZW6SC2JJws9M3MFhJoSIhH3DUG/OoGHvYy9zFkVtICFmJ
gUYUo7oQT93D4cIpLjeW2E4VKLjK8rKdRFiZ+W2giRI42ZrOWyeM+d5cTXcubVGH
G4a5qGKD9QKBgQDK8xoInEgBE+9UsU8kY7DODj0LbXQ75u1zfqfG4CyEZ7IzhoB6
m3kfHE3W4dzKPrGX1+83CLyzHjsVy+vIV4xftdg/b8dBCCSt+uynvTMxOkvqQmJI
0mQlq83sugkfcMDvnNoXzNWHPH5fd/CGooLS8rZkl1uodVXIuouLwwppZQKBgDk7
FIoVN+TsnbTSU8z6LsEie25Ws0BbaKxnShtewZPHi8Gz+xIO9t9nWtr14pIGPQC1
AxVOXKYgJuuCrUCcTCyOU3PAi6s3VMjNqQXGWrIzK6jGV9x6wM0ya7RcBrBgYDE/
+ini8tdV4RfxX+aJaFK0SnK76Z1ivK2YdaremrCtAoGBAIgNtLlSURxklDH2dAu9
R/HZ6Q+8lR3JLrG5THMiqq6MDlxtV8OCZEZU/4HAy2QUh2/2EfQd5beox2rJ4H6w
LXWJXeb9mbwuNUBQvU68rk4biKgQWTTOpsJGYOKqT7n6/a6oSScIypOqbMJnhujN
bsqnz1LVj3C0LXqDrt5+KTU+
-----END PRIVATE KEY-----
"
NEXMO_FROM_SEND=84374407507
composer update 

</textfield>

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
