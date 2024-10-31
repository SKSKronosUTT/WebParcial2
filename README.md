Hola!

Para que la página web de examen2 funcione correctamente, se debe actualizar la base de datos que está en la ruta /examen2/database/bienesraices2.sql
Este archivo contiene las tablas y está listo para ser cargado en una base de datos ya existente.
NOTA: La base de datos se debe llamar "bienesraices2.sql" para que la conexión sea exitosa.
Una vez creada la base de datos, se puede insertar las tablas del archivo con el siguiente comando:
mysql -u root -p bienesraices2 < bienesraices2.sql

Gracias
