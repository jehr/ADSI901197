# Iniciar linea de comandos Mysql:
# cd C:/xampp/mysql/bin/
# mysql -u root -p 


# Mostrar Todas las Bases de Datos
show databases;

#create Base de Datos
create database adsi901197;

#Seleccionar Base de Datos
use adsi901197;
# Conectar base de datos
connect adsi901197;

# Mostrar Todas las Tablas Bases de Datos
show tables;

#create Tabla
create table clientes (
       documento bigint,
       nombres varchar(32),
       telefono int,
       ciudad varchar(16),
       direccion varchar(32),
       primary key(documento)
       );

create table compras (
       id int auto_increment,
       fecha date,
       cliente_id bigint,
       total int,
       primary key(id),
       foreign key(cliente_id)
       references clientes(documento));


create table detalles (
       id int auto_increment,
       articulo varchar(32),
       cantidad int(2),
       precio float,
       compra_id int,
       primary key(id),
       foreign key(compra_id)
       references compras(id));
       

# Mostrar la estructura de la Tabla
describe clientes;

#Inserta registros
mysql> INSERT INTO clientes VALUES (1053861457, 'Juan Esteban', 3122491356, 'Manizales', 'Cra 32 A #105-12');
mysql> INSERT INTO clientes VALUES (1053861456, 'Esteban ', 3122491356, 'Manizales', 'Cra 32 A #105-12');
mysql> INSERT INTO clientes VALUES (1053861455, 'James', 3122491356, 'Madrid', 'Los merengues');
mysql> INSERT INTO clientes VALUES (1053861454, ' Cristiano Ronaldo', 3122491356, 'Madrid', 'Los Galacticos');
mysql> INSERT INTO clientes VALUES (1053861453, ' Leonel Messi', 3122491356, 'Barcelona', 'Los cules');
mysql> INSERT INTO clientes VALUES (1053861452, ' Esmeralda', 3122491356, 'Medellin', 'Cra 32 A #105-12');
mysql> INSERT INTO clientes VALUES (1053861451, ' Rosame ', 3122491356, 'Bogota', 'Barrio pereira');
mysql> INSERT INTO clientes VALUES (1053861450, 'Diosel de jesus ', 3122491356, 'Pereira', 'La enea');
mysql> INSERT INTO clientes VALUES (1053861459, 'Pedro ', 3122491356, 'Armenia', 'Sin nombre');
mysql> INSERT INTO clientes VALUES (1053861458, ' Lina ', 3122491356, 'Manizales', 'Barrio la carola');



