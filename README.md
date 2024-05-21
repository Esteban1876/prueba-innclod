## Primeros pasos

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




## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
