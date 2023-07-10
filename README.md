
# Wiber Blog

## Descripción 📑

Aplicación de un blog para el proceso de selección en Wiber Rent a Car.

## Autor ✒️
**Daniel Bayarri**

* [d.bayarri.b@gmail.com](d.bayarri.b@gmail.com)
* [LinkedIn](https://www.linkedin.com/in/danielbayarri/)

## Tecnologías 🛠
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://es.wikipedia.org/wiki/PHP) 
[![CSS](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://es.wikipedia.org/wiki/CSS) 


## Levantar el proyecto en local 🧰

>En la carpeta donde esta la aplicacion

`composer install`

`npm install`

Abrir proyecto y copiar archivo .env.example y cambiarle el nombre a .env

modificar la conexion a la bbdd en .env por la de su servidor local

```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=
```
Crear una base de datos vacia con el nombre puesto en la conexión.

`DB_DATABASE='nombreBaseDatos'`

>En la carpeta donde esta la aplicacion

`php artisan migrate`


## Vista previa del proyecto

![Captura del proyecto](https://repository-images.githubusercontent.com/664787051/66d264ea-29db-4726-a03e-c97dae2a4252)

