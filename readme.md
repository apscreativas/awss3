
## Sistema de Prueba DEMO para subir y consultar imagenes en Amazon S3 (AWS S3) y LARAVEL 5.5
En esta prueba se sube una imagen a Amazon S3 a traves de un formulario de contacto

### Requiere de paquetes en composer 

- Dado a que requiere de **league/flysystem-aws-s3-v3**

```
composer update
```

### Copiar el .ENV.EXAMPLE a .ENV dentro de la carpeta del proyecto  

```
cp .env.example .env
```

### Instalar la llave única de la aplicación  

```
php artisan key:generate
```


### Requerimiento : Agregar en el .ENV las credenciales de ACCESO de Amazon S3

	-AMAZON_KEY=key
	-AMAZON_SECRET=secret
	-AMAZON_REGION=region
	-AMAZON_BUCKET=bucket

### Se usa la ruta 

localhost/aws-s3

### Dudas

ventas@apscreativas.com


