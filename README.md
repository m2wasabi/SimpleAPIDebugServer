Simple API debug server
===============

Super Simple API Request Debugger

## Usage

### Up Service

```shell
php -S 0.0.0.0:8000 -t public/ public/index.php
```

### Test Request

```shell
curl -X POST -H "Content-Type: application/json" -d '{"result":"OK", "data":{"name" : "andrew" , "role" : "admin"}}' localhost:8000/api/v1/test
```
