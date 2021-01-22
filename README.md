# Clon de Mega

## Requirements
* Docker 20.0.0+
* Docker Compose 1.26.0+

OJO: Estas versiones se emplearon en el desarrollo del proyecto para
 mayor compatibilidad se recomienda usar estas versiones.


## Levantar proyecto

Para levantar todo el proyecto (Contenedores) ejecutar el comando:

```
	docker-compose up -d --build site
```

Instala las dependencias de Laravel mediante un container efímero de Composer:

```
docker-compose run --rm composer update
```

Los contenedores (Servicios) que levanta docker-compose son:

* nginx  :8080
* mysql  :3306
* php    :9000


## Modo desarrollo:

Instala las dependencias de Vue mediante un container efímero de Node:

```
docker-compose run --rm npm install
```

Establece Vue.js en modo desarrollo

```
docker-compose run npm run dev
```


![MySql-compose](./docs/pictures/containers-docker.png)

Crea un archivo para las variables env
```
	cp src/.env.example src/.env
```
Crea una key para Laravel

```
	docker-compose run --rm artisan key:generate
```

Adicionalmente también se puede manejar Composer, NPM y Artisan mediante Docker. Para ello use los siguientes comandos:

* docker-compose run --rm composer update
* docker-compose run --rm npm run dev
* docker-compose run --rm artisan migrate

## NetWork

Para facilitar la comunicación entre servicios, los containers se conectan a una red llamada **laravel**, esto crea un mayor nivel de seguridad para las aplicaciones y garantiza que solo los servicios relacionados puedan comunicarse entre sí. 


### Volumen MySql
En producción crear un volumen para la persistencia de mysql, crear una carpeta mysql ala altura de src, nginx y php:

```
  mkdir ./mysql
```

Y agregar al archivo docker-compose.yaml la siguiente linea:

```
volumes:
  - ./mysql:/var/lib/mysql
```

### Cambiar credenciales MySql

Cambiar las credenciales mostradas en docker-compose.yml.

![MySql-compose](./docs/pictures/mysql-compose.png)


## Credits

* Boilerplate: https://github.com/aschmelyun/docker-compose-laravel
* Laravel: https://github.com/laravel/laravel	
