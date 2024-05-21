## Primeros pasos

Clonar el repositorio
- git clone https://github.com/Esteban1876/prueba-innclod.git

Se debe crear la base de datos manualmente
- Nombre = prueba
- usuario = postgres
- clave = postgres

Se debe instalar node.js

## Archivo de configuración .env
Aparece como .env.example - Renombrar el archivo y dejarlo como ".env"
- DB_CONNECTION=pgsql
- DB_HOST=localhost
- DB_PORT=5432
- DB_DATABASE=prueba
- DB_USERNAME=postgres
- DB_PASSWORD=postgres

### Se deben ejecutar los siguientes comandos
- composer i = Instala todos los paquetes y depencias del proyecto
- php artisan key:generate
- php artisan migrate --seed = Crea las tablas y las llena con 5 registros a cada una
- npm i bootstrap = Instala bootstrap en el proyecto
- composer require laravel/ui = Instala todo lo necesario para la interfaz gráfica del proyecto
- npm i = Instala las dependencias para el correcto funcionamiento del front
- php artisan serve = Ejecuta el servidor de laravel (Para ingresar a la aplicación se debe copiar la dirección devuelta por el comando) - http://127.0.0.1:8000

- npm run dev = Ejecuta el servidor en modo desarrollo (Es probable que salga un mensaje diciendo que instalo otra dependencia y que se debe ejecutar nuevamente el comando, de ser así ejecutar nuevamente - npm run dev) - Se debe ejecutar en otra instancia de la consola

### credenciales de acceso
- correo = prueba@gmail.com
- clave = esteban1876!

