Trabajo Creado por: 

Equipo goku

Alfredo Contreras
Renato Miranda
Kevin Nuñez

Archivos
BaseEndpoint.php: Define la clase base para los endpoints de la API.
CategoriaServicioEndpoint.php: Clase para manejar las solicitudes relacionadas con las categorías de servicio.
InfoContactoEndpoint.php: Clase para manejar las solicitudes relacionadas con la información de contacto.
HistoriaEndpoint.php: Clase para manejar las solicitudes relacionadas con la historia de Terrasol Parcelas.
PreguntaFrecuenteEndpoint.php: Clase para manejar las solicitudes relacionadas con las preguntas frecuentes.
ParcelaEndpoint.php: Clase para manejar las solicitudes relacionadas con las parcelas.
database.php: Archivo de configuración para la conexión a la base de datos.
schema_user_tables_data_B.sql: Consultas SQL para crear el esquema de la base de datos y los datos iniciales.
crudad_B.sql: Consultas SQL para realizar operaciones CRUD en la base de datos.
index.php: Punto de entrada de la API donde se manejan las solicitudes entrantes y se dirigen a los endpoints correspondientes.
README.md: Este archivo, que proporciona información sobre el proyecto y la estructura de los archivos.
Uso
Para utilizar la API, se puede enviar solicitudes HTTP a los diferentes endpoints según sea necesario. Por ejemplo:

GET http://localhost:3000/api/categoria_servicio: Recupera todas las categorías de servicio.
POST http://localhost:3000/api/categoria_servicio: Crea una nueva categoría de servicio.
PUT http://localhost:3000/api/categoria_servicio/:id: Actualiza una categoría de servicio existente.
DELETE http://localhost:3000/api/categoria_servicio/:id: Elimina una categoría de servicio.
Se pueden realizar solicitudes similares para otros tipos de recursos, como info_contacto, historia, pregunta_frecuente y parcela.

eva2_goku/
│
│── api/
│   │── BaseEndpoint.php
│   │── CategoriaServicioEndpoint.php
│   │── InfoContactoEndpoint.php
│   │── HistoriaEndpoint.php
│   │── PreguntaFrecuenteEndpoint.php
│   └── ParcelaEndpoint.php
│
│── config/
│   └── database.php
│
│── sql/
│   │ ── cruda.sql
│   └── tables_data.sql
│
│── index.php
│
└── README.md
