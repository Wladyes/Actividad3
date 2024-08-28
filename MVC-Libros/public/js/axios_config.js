axios.defaults.baseURL = 'http://localhost/MVC-Libros';
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Ejemplo de uso de Axios para enviar datos
function enviarDatos(url, datos) {
    axios.post(url, datos)
        .then(response => console.log(response.data))
        .catch(error => console.error('Error:', error));
}
