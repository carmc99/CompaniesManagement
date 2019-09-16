

## Guia configuración
 1. Ejecutar npm install y npm run dev luego de haber
 descargado los archivos.
 2. Alojar en servidor local 
 3. Ejecutar php artisan migrate
 4. Ejecutar php artisan db:seed, se tiene habilitado
 solo para la creacion de usuarios, sin embargo es posible
 crear empresas y empleados, pero no es la manera mas optima.
 5. Abrir php artisan tinker, para ejecutar las factories
 6. Ejecutar factory(App\Company::class, 15)->create(); para
 crear 15 empresas.
 7. Ejecutar factory(App\Employee::class, 50)->create(); para
 crear 50 empleados, distribuidos en las 15 empresas anteriormente 
 creadas.


 8. Configurar archivo .env para la notificacion al registrar
 una nueva empresa
 
 MAIL_USERNAME=definir usuarios suministrado en mailtrap
 MAIL_PASSWORD=contraseña
 
 9. Datos de ingreso:
  - admin@admin.com
  - password
 
 ## Funcionalidades:
 - Autentificacion modulo
 - CRUD compañias y empleados
 - Permite alamcenar logo de la empresa
 - Template personalizado s-admin-2
 - Paginacion de registros
 - Validacion datos de entrada
 - Notificacion al registrar una nueva empresa en mailtrap.io
 
 
 
 ## Referencias
 
- https://laravel.com/
- https://getbootstrap.com/
 
 