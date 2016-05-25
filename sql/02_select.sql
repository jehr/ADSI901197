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

#Alias
SELECT c.*, cr.fecha, cr.total
FROM clientes AS c, compras AS cr
WHERE cr.cliente_id = c.documento;

SELECT c.*, cr.*
FROM clientes AS c, compras AS cr
WHERE cr.cliente_id = c.documento;


SELECT c.documento, c.nombres, cr.fecha, cr.total
AS totalcompra, d.articulo, d.cantidad, d.precio
AS totalarticulo
FROM clientes AS c, compras AS cr, detalles AS d
WHERE cr.cliente_id = c.documento AND d.compra_id = cr.id;


SELECT c.documento, c.nombres, cr.fecha, cr.total
AS totalcompra, d.articulo, d.cantidad, d.precio
AS totalarticulo
FROM clientes AS c, compras AS cr, detalles AS d
WHERE cr.cliente_id = c.documento AND d.compra_id = cr.id
ORDER BY d.precio ASC;


#JOIN
#INNERJOIN
SELECT clientes.documento, clientes.nombres,
compras.fecha, compras.total,
detalles.articulo, detalles.cantidad, detalles.precio
FROM clientes
INNER JOIN compras 
ON compras.cliente_id = clientes.documento
INNER JOIN detalles
ON detalles.compra_id = compras.id;


#LEFTJOIN
SELECT clientes.documento, clientes.nombres,
compras.fecha, compras.total,
detalles.articulo, detalles.cantidad, detalles.precio
FROM clientes
LEFT JOIN compras 
ON compras.cliente_id = clientes.documento
LEFT JOIN detalles
ON detalles.compra_id = compras.id;


#RIGHTJOIN
SELECT clientes.documento, clientes.nombres,
compras.fecha, compras.total,
detalles.articulo, detalles.cantidad, detalles.precio
FROM clientes
RIGHT JOIN compras 
ON compras.cliente_id = clientes.documento
RIGHT JOIN detalles
ON detalles.compra_id = compras.id;


#FULLJOIN
SELECT clientes.documento, clientes.nombres,
compras.fecha, compras.total,
detalles.articulo, detalles.cantidad, detalles.precio
FROM clientes
FULL JOIN compras 
ON compras.cliente_id = clientes.documento
FULL JOIN detalles
ON detalles.compra_id = compras.id;

#UNION
SELECT documento AS documento_precio, nombres AS nombres_articulos FROM clientes
UNION
SELECT precio, articulo FROM detalles;

SELECT * FROM clientes UNION ALL SELECT * FROM detalles;

#Backup 
INSERT INTO nuevos_clientes SELECT * FROM clientes;
INSERT INTO nadsi901197.nuevos_clientes SELECT * FROM adsi901197.clientes;