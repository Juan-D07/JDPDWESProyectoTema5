
# Aplicación de Proyecto Tema 5
## 1. Descripción
Esta aplicación web está desarrollada en PHP y Practicamos el control de accesso usando funciones integradas en php como header('WWW-Authenticate:...`), con persistencia de datos.

## 2. Requisitos
- PHP 8.3 o superior.
- Un servidor web, como Apache, o el servidor de desarrollo integrado de PHP.
- MySQL si la aplicación utiliza una base de datos.
## 3. Instalación
Clonar el repositorio:
`git clone https://github.com/Juan-D07/JDPDWESProyectoTema5`

Acceder a la carpeta del proyecto:
`cd JDPDWESProyectoTema5`
*Configurar la conexión a la base de datos en config.php y ejecuta los sricpts de creacion y carga.*

Iniciar el servidor de desarrollo de PHP:
`php -S localhost:8000`

## 4. Uso
Una vez iniciado el servidor:

Abrir un navegador web.
`Acceder a http://localhost:8000.`
Inicia sesion.
## 5. Estructura del proyecto

```text
JDPDWESProyectoTema5/
├── indexProyectoTema5.php
├── .htaccess
├── config
├── codigoPHP
├── mostrarcodigo
├── scriptDB
├── webroot
├── error
└── core
```

## 6. Funcionalidades
- Utilizar header('WWW-Authenticate:...`) para el control de accesso
- Utilizar $_SERVER['PHP_AUTH_USER']) para recoger el usuario
- Visualizacion de variable super globales

## 7. Contribuciones
Las contribuciones son bienvenidas. Para colaborar, se recomienda:

Crear un fork del repositorio.
Crear una rama para los cambios.
Realizar las modificaciones necesarias.
Guardar los cambios mediante un commit descriptivo.
Enviar una solicitud de cambios (pull request) para su revisión.
8. Licencia
Este proyecto puede distribuirse bajo la licencia MIT si el propietario decide adoptarla. Antes de publicar el proyecto, debe añadirse el archivo de licencia correspondiente y comprobar que se cumplen sus condiciones.