#Consultar todos los registros
SELECT * FROM clientes;

#Consultar  columnas expecificas
SELECT nombres,ciudad FROM clientes;
SELECT direccion FROM clientes;

#Consultar valores distintos (No repetidos)
SELECT DISTINCT  ciudad FROM  clientes;

#Consulta dependiendo una condicion
SELECT * FROM clientes WHERE 	ciudad = 'Manizales';

SELECT nombres,direccion FROM clientes WHERE documento > 75000005;

SELECT * FROM clientes WHERE documento BETWEEN 303344555 AND 1053861457;

SELECT * FROM clientes WHERE (ciudad = 'Manizales' OR ciudad = 'Medellin' ) AND documento > 303344555;

#Ordenar de menor a mayor
SELECT * FROM clientes ORDER BY ciudad ASC;

#Ordenar de mayor a menor
SELECT nombres,documento FROM clientes ORDER BY documento DESC;

#Limitar el numero de registros que se van a mostrar
SELECT * FROM clientes LIMIT 3;

#Limitar el numero de registros desde un numero determinado
SELECT * FROM clientes LIMIT 4 OFFSET 2;
SELECT * FROM clientes LIMIT 2,4;

#Busca un patron especifico en una columna (LIKE)
SELECT * FROM clientes WHERE nombres LIKE '%es%';

SELECT * FROM clientes WHERE nombres LIKE 'ju%';# Al comienzo

SELECT * FROM clientes WHERE nombres LIKE '%an';# Al final

SELECT * FROM clientes WHERE nombres LIKE '_u_n';

SELECT * FROM clientes WHERE ciudad IN ('Manizales','Pereira');

SELECT * FROM clientes WHERE documento BETWEEN 30330565 AND 30330765;

SELECT * FROM clientes WHERE documento NOT BETWEEN 30330565 AND 30330765;

SELECT nombres AS n FROM clientes;

