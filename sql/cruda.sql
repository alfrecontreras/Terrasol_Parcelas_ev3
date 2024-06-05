-- Categoria Servicio CRUD Op
SELECT * FROM categoria_servicio;
SELECT * FROM categoria_servicio WHERE id = 1;
INSERT INTO categoria_servicio (nombre) VALUES ('Nuevo Servicio');
UPDATE categoria_servicio SET nombre = 'Servicio Actualizado' WHERE id = 1;
DELETE FROM categoria_servicio WHERE id = 1;

-- Info Contacto CRUD Op
SELECT * FROM info_contacto;
SELECT * FROM info_contacto WHERE id = 1;
INSERT INTO info_contacto (telefono, email, direccion) VALUES ('+56 9 5018 6583', 'ejemplo@mail.com', 'Entre Talca y la Region de Los Lagos');
UPDATE info_contacto SET telefono = '+56 9 1234 5678' WHERE id = 1;
DELETE FROM info_contacto WHERE id = 1;

-- Historia CRUD Op
SELECT * FROM historia;
SELECT * FROM historia WHERE id = 1;
INSERT INTO historia (descripcion, imagenes) VALUES ('Historia de prueba', '["imagen1.jpg", "imagen2.jpg"]');
UPDATE historia SET descripcion = 'Historia actualizada' WHERE id = 1;
DELETE FROM historia WHERE id = 1;

-- Pregunta Frecuente CRUD Op
SELECT * FROM pregunta_frecuente;
SELECT * FROM pregunta_frecuente WHERE id = 1;
INSERT INTO pregunta_frecuente (pregunta, respuesta) VALUES ('¿Pregunta de prueba?', 'Respuesta de prueba');
UPDATE pregunta_frecuente SET pregunta = 'Pregunta actualizada', respuesta = 'Respuesta actualizada' WHERE id = 1;
DELETE FROM pregunta_frecuente WHERE id = 1;

-- Parcela CRUD Op
SELECT * FROM parcela;
SELECT * FROM parcela WHERE id = 1;
INSERT INTO parcela (tipo, lote, servicios) VALUES ('Tipo de prueba', 'Lote de prueba', '["Servicio1", "Servicio2"]');
UPDATE parcela SET tipo = 'Tipo actualizado', lote = 'Lote actualizado', servicios = '["Servicio1", "Servicio2", "Servicio3"]' WHERE id = 1;
DELETE FROM parcela WHERE id = 1;