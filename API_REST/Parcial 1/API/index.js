const axios = require('axios');

// URL de la API de CoinGecko
const url = 'https://api.coingecko.com/api/v3/coins/bitcoin';

// Hacer la solicitud GET
axios.get(url)
  .then(response => {
    // Manejar la respuesta exitosa
    console.log('Datos del Bitcoin:', response.data);
  })
  .catch(error => {
    // Manejar errores
    console.error('Hubo un error al hacer la solicitud:', error);
  });
