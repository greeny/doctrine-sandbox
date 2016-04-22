Nette + Doctrine Sandbox
========================

Simple sandbox for Nette applications featuring Doctrine instead of Nette/Database.

Installation
------------

```sh
composer create-project greeny/doctrine-sandbox appName
cd appName
chmod -R 777 log temp
cp app/config/config.local.template.neon app/config/config.local.neon
```

Then do Find&Replace through your IDE on whole app directory and replace:

- `REPLACE_namespace` for basic namespace in your project
- `REPLACE_dbname` for database name
