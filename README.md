# Job Tracker App - Rastreador de Solicitudes de Empleo

El Rastreador de Solicitudes de Empleo es una plataforma SaaS (Software as a Service) diseñada para facilitar la gestión de las solicitudes de empleo por parte de los usuarios. 

La plataforma permite a los usuarios rastrear sus solicitudes a través de diversas plataformas de ofertas de empleo, consolidando en un solo lugar las notas de entrevistas, detalles de las empresas y los estados de las solicitudes. 

Dado el alto volumen de solicitudes y el ritmo acelerado del sector tecnológico, este proyecto se convierte en una solución esencial para desarrolladores que buscan mejorar su eficiencia en la búsqueda de empleo y aumentar sus posibilidades de éxito.


## Proyecto
- Framework: Laravel
- Infraestructura: Docker
- Servidor: Nginx

## Entorno de Desarrollo

- Para iniciar el entorno de desarrollo ejecutar en la consola:

	```shell
	docker compose up
	```

Levanta los siguientes servicios:

- Nginx
- PHP FPM
- Postgres
- Vite (en development mode)

- El proyecto debería estar disponible en: [http://localhost](http://localhost)


Para ejecutar un comando de yarn:
	
```shell
docker compose run --rm yarn <command>
```

Para ejecutar Artisan:

```shell
docker compose run --rm artisan <command>
```
