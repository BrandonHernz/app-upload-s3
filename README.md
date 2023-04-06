# Formulario de carga de archivos a Amazon S3

Este proyecto proporciona un formulario web para cargar archivos en un bucket de Amazon S3.

Este formulario web está construido bajo tecnologías PHP y HTML, y utiliza el SDK de AWS para la carga de archivos.

## Uso del proyecto

Para utilizar el proyecto recuerda tener algún servidor instalado como Apache, XAMPP o WampServer. Después ve al siguiente módulo.

## Instalar las dependencias del SDK de AWS

Ir a tu carpeta de proyectos del servidor

```bash
  cd /c/xampp/htdocs
```

Clonar el proyecto del repositorio de GitHub

```console
  git clone https://github.com/BrandonHernz/app-upload-s3.git
```

Ir a la carpeta del proyecto

```bash
  cd app-upload-s3
```

Instalar las dependencias del SDK de AWS con Composer

```console
  composer install
```

## Iniciar el Proyecto

Antes de iniciar el proyecto debes especificar tu **llave de acceso** así como tu **llave de acceso secreto** dentro del archivo `index.php` para la carga de los archivos directamente en el bucket de S3.

1. Abrir el archivo `index.php` en tu navegador web preferido.
2. Selecciona el archivo que deseas cargar en tu bucket de S3.
3. Dar clic en "Subir archivo" para cargar el archivo.

## Retro

Si tienes algún comentario, por favor contáctame en isahir.hdez@hotmail.com.
