const express = require('express');
const app = express();
const port = 3000;
var cors = require('cors');
app.use(cors());

// Permitir el acceso a la carpeta public para servir archivos estáticos
app.use(express.static('public'));

// Ruta que responde a las solicitudes GET
app.get('/', (req, res) => {
  res.json({ message: 'Hola desde Express!' });
});

// Iniciar el servidor
app.listen(3000, () => {
  console.log(`Servidor escuchando en http://localhost:3000`);
});
