### Uso de PHP con JS y MySQL
La página index.php contiene la interface de usuario
donde se capturan los datos para realizar las operaciones básicas.

Las operaciones de:
* Insertar
* Actualizar
* Eliminar y
* Consultar

Se realizan mediante el uso de AJAX y PHP.

El archivo conexion.php contiene la conexión a la base de datos.

### Base de datos MySQL
Para este demo se está utilizando MySQL 8.0
```[bash]
create database prueba2 char set utf8mb4;
use prueba2;

create table datosAuxiliares(
	id smallint unsigned auto_increment not null primary key,
    cedula int unsigned not null unique,
    nombre varchar(35) not null
)engine=InnoDB char set utf8mb4

insert into datosAuxiliares(cedula, nombre) 
values(1111,'Morticia Addams'),(2222, 'Merlina Addams');
```

### Como funciona....
En la página index.php se digita la cédula y presionas la tecla [enter].
El resto es seguir la intuición
