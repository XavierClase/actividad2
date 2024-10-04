// Escribe una función encontrarPalabra que tome un array de palabras y una palabra busqueda, y devuelva la primer palabra del array que sea igual a busqueda. 
// Si no se encuentra ninguna palabra igual, la función debe devolver null. Utiliza .find para resolver este problema.

function encontrarPalabra(palabras, palabraBusqueda) {
    const palabra = palabras.find(palabra => palabra === palabraBusqueda);

    if (palabra === palabraBusqueda) {
        return palabra;
    } else {
        return null;
    }
}

palabras = ['hola', 'ordenador', 'guitarra', 'cerveza', 'raton'];

console.log(encontrarPalabra(palabras, 'polla'));