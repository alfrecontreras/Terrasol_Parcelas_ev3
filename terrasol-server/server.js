const express = require('express');
const app = express();
const cors = require('cors');

app.use(cors());
app.options('*', cors()); // Habilitar respuesta preflight para todas las rutas

app.post('/Terrasol-Parcelas/api/mantenedor/', (req, res) => {
    res.json({ message: 'CORS enabled' });
});
app.use(cors({
    origin: 'http://127.0.0.1:5500' // Reemplaza con la URL de tu frontend
}));
app.listen(5500, () => {
    console.log('Server running on port 5500');
});
