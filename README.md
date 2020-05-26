## Factor Conecta - Administración de Usuarios

El sistema se realizo usando

- PHP con el framework Laravel para el backend
- Vue para el frontend
- Postgres para la base de datos

## Instalación

Primero se tiene que crear una base de datos llamada:

- laravel_factor_conecta

una vez que la base fue creada tenemos que duplicar el archivo .env.example
y renombrarlo a .env para agregar la configuracion de acceso a la
base de datos definiendo:

- nombre de usuario
- contraseña

despues ejecutamos el comando para migrar los datos a la base de datos
```bash
php artisan migrate --seed
```

finalmente ejecutamos el siguiente comando
```bash
php artisan serve 
```

de esta manera ya podemos abrir un navegador para poder ver el sistema en funcionamiento.
