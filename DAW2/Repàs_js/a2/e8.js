function palabrasLargas(palabras, num) {
    return palabras.filter(palabra => palabra.length > 5);
}

const palabras = ['hola', 'ordenador', 'guitarra', 'cerveza', 'raton'];

const filtrado = palabrasLargas(palabras, 5);

console.log(filtrado);