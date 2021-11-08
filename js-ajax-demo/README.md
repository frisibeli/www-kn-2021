### Set-up

Run only the backend:

```
docker run -p 80:8080 -v $(pwd)/server:/var/www/html trafex/php-nginx
```