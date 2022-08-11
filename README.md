# PHP 7.4 demo con PDO para conectarse con SQLite y MySQL

## Paquetes

- php7.4
- php7.4 PDO extension
- sqlite3
- MySQL

## Configuración de un servidor

```bash
apt install php7.4-cli
apt install php7.4-mysql
apt install php7.4-sqlite3
```


## Ejecutar el servidor

```bash
php -S localhost:8000 -t .
```

## Enlaces

[Porque usar PDO](https://code.tutsplus.com/es/tutorials/why-you-should-be-using-phps-pdo-for-database-access--net-12059)


## Drivers de PDO para conexión con base de datos

1. PDO_DBLIB (FreeTDS/Microsoft SQL Server/Sybase)
2. PDO_FIREBIRD (Firebird/Interbase 6)
3. PDO_IBM (DB2 de IBM)
4. PDO_INFORMIX (Servidor dinámico Informix de IBM)
5. PDO_MYSQL (MySQL 3.x/4.x/5.x)
6. PDO_OCI (Oracle Call Interface)
7. PDO_ODBC (ODBC v3 (DB2 de IBM, unixODBC y ODBC para win32))
8. PDO_PGSQL (PostgreSQL)
9. PDO_SQLITE (SQLite 3 y SQLite 2)
10. PDO_4D (4D)

## Configuración de Heroku

**composer.json**

```bash
{
    "require": {
        "ext-pdo_sqlite": "*"
    }
}
```
El archivo composer.lock se genera con el siguiente compando

```bash
composer update
```

**composer.lock**

```bash
{
    "_readme": [
        "This file locks the dependencies of your project to a known state",
        "Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies",
        "This file is @generated automatically"
    ],
    "content-hash": "4062380007351f1f040d1f62211fcc3a",
    "packages": [],
    "packages-dev": [],
    "aliases": [],
    "minimum-stability": "stable",
    "stability-flags": [],
    "prefer-stable": false,
    "prefer-lowest": false,
    "platform": {
        "ext-pdo_sqlite": "*"
    },
    "platform-dev": [],
    "plugin-api-version": "1.1.0"
}
```

## Configuración de REPLIT


**.replit**

```bash
run = "php -S 0.0.0.0:8000 -t ."

entrypoint = "index.php"
```