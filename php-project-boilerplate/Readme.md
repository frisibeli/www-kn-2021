Run project
```
docker run -p 80:80 --name php-app -v "$PWD":/var/www/html php:7.2-apache
```

.htaccess for front controller MVC
```
RewriteEngine On
DirectoryIndex index.php index.html

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ /index.php?action=$1 [QSA,L]
```

https://github.com/php-pds/skeleton